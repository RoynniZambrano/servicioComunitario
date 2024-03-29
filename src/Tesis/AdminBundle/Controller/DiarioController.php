<?php

namespace Tesis\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tesis\AdminBundle\Entity\Diario;
use Tesis\AdminBundle\Form\DiarioType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Diario controller.  // echo $form->getErrorsAsString(1);
 */
class DiarioController extends Controller{
 
    public function newAction(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            return $this->render('TesisAdminBundle:Diario:new-diario.html.twig',$options);
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function newformAction(Request $request){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){

            $user = $session->get('user');
            $em = $this->getDoctrine()->getManager();
            $entity = new Diario();
            $options['id'] = $session->get('user')->getId();
            $options['proyecto'] = $session->get('user')->getProyecto();
            $options['status'] = 'new';
            $options['actividades_f'] = null;

            $estudiante = $em->getRepository('TesisAdminBundle:Estudiante')->findOneBy(
            array('idEstudiante' => $user->getId()));
            $entity->setEstudianteEstudiante($estudiante);

            $proyecto = $em->getRepository('TesisAdminBundle:Proyecto')->findOneBy(
            array('idProyecto' => $estudiante->getProyecto()));

            $entity->setProyectoProyecto($proyecto);

            $em = $this->getDoctrine()->getEntityManager();
            $connection = $em->getConnection();
            $statement = $connection->prepare("SELECT f.id_fase as fase_id 
            FROM fase f
            INNER JOIN proyecto_has_fase phf ON phf.fase_id_fase = f.id_fase
            INNER JOIN proyecto p ON p.id_proyecto = phf.proyecto_id_proyecto
            WHERE p.id_proyecto = :id_proyecto
            ");                    
            $statement->bindValue('id_proyecto', $proyecto->getIdProyecto());
            $statement->execute();
            $fases = $statement->fetchAll();

           $actividades=null;
           $i = 0;
            foreach ($fases as $fase) {

                $selected = $em->getRepository('TesisAdminBundle:Fase')->findOneBy(
                array('idFase' => $fase['fase_id']));

                if ($i == 0) {
                    $actividades = $selected->getActividadActividad();
                }else {
                    $actividades = new ArrayCollection(
                        array_merge($actividades->toArray(), $selected->getActividadActividad()->toArray())
                    );
                } 
                $i++;
            }
            
            $options['actividades'] = $actividades;
            $form = $this->createForm(new DiarioType($options), $entity, array(
                'action' => $this->generateUrl('diario_newform'),
                'method' => 'POST',
            ));

            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $entity->setCalificacion("por evaluar");
                $em->persist($entity);
                $em->flush();

                echo 
                "<script>
                    bootbox.alert('El diario de campo ha sido creado exitosamente', function(result){ window.location.href ='" .$this->generateUrl('diario_list') . "' })
                </script>";                


                //return new Response('.'); 
            }
    
             return $this->render('TesisAdminBundle:Diario:new-diario-form.html.twig',
                array('form' => $form->createView()));                        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');

    }


    // pagina para listar todos los diarios en una tabla    
    public function listAction(){

            $session = $this->getRequest()->getSession();

            if($session->has('user')){
                $user = $session->get('user');
                $options['user'] = $user;
            
                $em = $this->getDoctrine()->getManager();
                if ($user->getPerfil() == "estudiante") {
                   
                    $query = $em->createQuery("SELECT d1 FROM TesisAdminBundle:Diario d1  
                    WHERE d1.estudianteEstudiante = :estudiante_id");
                    $query->setParameter('estudiante_id', $user->getId());
                    $diarios = $query->execute();


                }else if ($user->getPerfil() == "tutor") {
                    
                    $query = $em->createQuery("SELECT d1 FROM TesisAdminBundle:Diario d1 
                    INNER JOIN TesisAdminBundle:Estudiante e1 WITH  d1.estudianteEstudiante = e1.idEstudiante 
                    INNER JOIN TesisAdminBundle:Profesor u1 WITH e1.profesor = u1.idProfesor
                    AND u1.idProfesor = :tutor_id");
                    $query->setParameter('tutor_id', $user->getId());
                    $diarios = $query->execute();
   
                }else if (($user->getPerfil() == "coordinador de proyecto")
                || ($user->getPerfil() == "coordinador suplente") ) {
                    
                    $query = $em->createQuery("SELECT d1 FROM TesisAdminBundle:Diario d1 
                    INNER JOIN TesisAdminBundle:Estudiante e1 WITH  d1.estudianteEstudiante = e1.idEstudiante 
                    INNER JOIN TesisAdminBundle:Proyecto p1 WITH e1.proyectoProyecto = p1.idProyecto
                    INNER JOIN TesisAdminBundle:Profesor u1 WITH p1.coordinador = u1.idProfesor
                    AND u1.idProfesor = :coordiandor_id");
                    $query->setParameter('coordinador_id', $user->getId());
                    $diarios = $query->execute();

                } else {
                    
                    $diarios = $em->getRepository('TesisAdminBundle:Diario')->findAll();
                }


                $options['diarios'] = $diarios;
                return $this->render('TesisAdminBundle:Diario:list-diario.html.twig',$options);
            }

            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    // consultar 
   public function checkAction($id = null){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $user = $session->get('user');
            $options['user'] = $user;
            $options['id'] = $id; 

            if ($user->getPerfil() == "estudiante") {
                $options['estudiante'] = $user; 
            }
            else {
                $em = $this->getDoctrine()->getManager();
                $entity = $em->getRepository('TesisAdminBundle:Diario')->findOneBy(
                    array('idDiario' => $id));                
                $options['estudiante'] = $entity->getEstudianteEstudiante(); 
            }


            return $this->render('TesisAdminBundle:Diario:check-diario.html.twig',$options);
        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }
   

    // formulario (disabled) para consultar 
    public function checkformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Diario')->findOneBy(
                array('idDiario' => $id));

            $user = $session->get('user');
            if ($user->getPerfil()== 'estudiante') {
                $options['proyecto'] = $user->getProyecto();
                $options['id'] = $user;
            }
            else{
               $options['proyecto'] = $entity->getEstudianteEstudiante()->getProyecto();
               $options['id'] = $entity->getEstudianteEstudiante();
            }

            $options['status'] = 'check';
            $options['actividades'] = $entity->getActividadActividad();
            $options['actividades_f'] = null;

            $form = $this->createForm(new DiarioType($options), $entity, array(
                'action' => $this->generateUrl('diario_checkform', array('id' => $id)),
                'method' => 'POST',
            ));


            if ($user->getPerfil() == "estudiante") {
                $form->add('edit', 'submit', array('label' => 'Editar'));
            }
            else {
                $form->add('edit', 'submit', array('label' => 'Evaluar'));
            }
            
            $form->add('back', 'submit', array('label' => 'Regresar'));
            $form->add('pdf', 'submit', array('label' => 'Descargar'));            
        
            $form->handleRequest($request);
            if ($form->get('edit')->isClicked()) {
               return $this->redirect($this->generateUrl('diario_edit', array('id' => $id)));
            }
            if ($form->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('diario_list'));
            } 
            if ($form->get('pdf')->isClicked()) {
               return $this->redirect($this->generateUrl('pdf_diario', array('id' => $id)));
            }                   

             return $this->render('TesisAdminBundle:Diario:check-diario-form.html.twig',
                array('form' => $form->createView()));           
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    // editar diario
   public function editAction($id = null){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $user = $session->get('user');
            $options['user'] = $user;
            $options['id'] = $id;

            if ($user->getPerfil() == "estudiante") {
                $options['estudiante'] = $user; 
            }
            else {
                $em = $this->getDoctrine()->getManager();
                $entity = $em->getRepository('TesisAdminBundle:Diario')->findOneBy(
                    array('idDiario' => $id));                
                $options['estudiante'] = $entity->getEstudianteEstudiante(); 
            }            

            return $this->render('TesisAdminBundle:Diario:edit-diario.html.twig',$options);

        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    public function editformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $user = $session->get('user'); 
            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository('TesisAdminBundle:Diario')->findOneBy(
                array('idDiario' => $id));

            if ($user->getPerfil() == "estudiante") 
                $options['status'] = 'edit_student'; 
            else
                $options['status'] = 'edit_tutor'; 

            $user = $session->get('user');
            if ($user->getPerfil() == 'estudiante') {
                $proyecto = $user->getProyecto();
                $options['proyecto'] = $proyecto;
                $options['id'] = $user;
            }
            else{
                $proyecto = $entity->getEstudianteEstudiante()->getProyecto();
                $options['proyecto'] = $proyecto;
                $options['id'] = $entity->getEstudianteEstudiante();
            }

            $proyecto = $em->getRepository('TesisAdminBundle:Proyecto')->findOneBy(
            array('idProyecto' => $proyecto));

            $em = $this->getDoctrine()->getEntityManager();
            $connection = $em->getConnection();
            $statement = $connection->prepare("SELECT f.id_fase as fase_id 
            FROM fase f
            INNER JOIN proyecto_has_fase phf ON phf.fase_id_fase = f.id_fase
            INNER JOIN proyecto p ON p.id_proyecto = phf.proyecto_id_proyecto
            WHERE p.id_proyecto = :id_proyecto
            ");                    
            $statement->bindValue('id_proyecto', $proyecto->getIdProyecto());
            $statement->execute();
            $fases = $statement->fetchAll();

           $actividades_f=null;
           $i = 0;
            foreach ($fases as $fase) {

                $selected = $em->getRepository('TesisAdminBundle:Fase')->findOneBy(
                array('idFase' => $fase['fase_id']));

                if ($i == 0) {
                    $actividades_f = $selected->getActividadActividad();
                }else {
                    $actividades_f = new ArrayCollection(
                        array_merge($actividades_f->toArray(), $selected->getActividadActividad()->toArray())
                    );
                } 
                $i++;
            }
            
            $options['actividades_f'] = $actividades_f;
            $options['actividades'] = $entity->getActividadActividad();
            
            $editForm = $this->createForm(new DiarioType($options), $entity, array(
                'action' => $this->generateUrl('diario_editform', array('id' => $id)),
                'method' => 'POST',
            ));

            $editForm->submit($request->request->get($editForm->getName()), false);
           // $editForm->handleRequest($request);
            if ($user->getPerfil() == "estudiante") {
               
                if ($editForm->isValid()) {
                    $entity->setCalificacion("por evaluar");

                    $diario = $em->getRepository('TesisAdminBundle:Diario')->findOneBy(
                    array('idDiario' => $entity->getIdDiario()));
                    $entity->setObservacion($diario->getObservacion());
                    $em->flush();

                echo 
                "<script>
                    bootbox.alert('Los cambios se han guardado con éxito', function(result){ window.location.href ='" .$this->generateUrl('diario_check', array('id' => $id)) . "' })
                </script>";

                  //  return $this->redirect($this->generateUrl('diario_checkform', array('id' => $id)));                    
                }

            }else{

               if ($this->getRequest()->getMethod() == 'POST'){

                    $entity->setObservacion($entity->getObservacion() . "   [fecha correción: " .  date("d/m/Y") ."]");
                    $em->flush();

                echo 
                "<script>
                    bootbox.alert('Los cambios se han guardado con éxito', function(result){ window.location.href ='" .$this->generateUrl('diario_check', array('id' => $id)) . "' })
                </script>";


                    //return $this->redirect($this->generateUrl('diario_checkform', array('id' => $id)));                    
                }
            }

            return $this->render('TesisAdminBundle:Diario:edit-diario-form.html.twig', array(
                'entity'      => $entity,
                'form'   => $editForm->createView(),
                'user' => $user,
                'id' => $id,
            ));
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function deleteAction(Request $request){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){
             
            $user = $session->get('user'); 
            foreach ($_POST as $clave=>$valor){
               $fecha = $valor['fecha'];
             }

            $em = $this->getDoctrine()->getManager();
        
            $fecha2 = new \DateTime($fecha);
            $fecha2 = $fecha2->format('Y-m-d');
            $entity = $em->getRepository('TesisAdminBundle:Diario')->findOneBy(
                array('fecha' => new \DateTime ($fecha2), 'estudianteEstudiante' => $user->getId() ));

            try {
                $em = $this->getDoctrine()->getManager();
                $em->remove($entity);
                $em->flush();
                return new Response('.'); 
            }catch (\Exception $e) {
          
            }  
            return new Response(','); 
                     
        }
        
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function pdf_diarioAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $user = $session->get('user');
            $options['user'] = $user;
            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository('TesisAdminBundle:Diario')->findOneBy(
                array('idDiario' => $id));

            $estudiante = $em->getRepository('TesisAdminBundle:Estudiante')->findOneBy(
                array('idEstudiante' => $entity->getEstudianteEstudiante()->getId()));

            $tutor = $em->getRepository('TesisAdminBundle:Profesor')->findOneBy(
            array('idProfesor' => $entity->getEstudianteEstudiante()->getProfesor()));

            // crea la vista
            $html = $this->renderView('TesisAdminBundle:Diario:pdf_diario.html.twig', array(
                'diario' => $entity,
                'estudiante' => $estudiante,
                'tutor' => $tutor
               ));  


            // retorna la vista en pdf.
            return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html,
                array(
                'footer-font-size' => '8', 
                'margin-top' => '10',
                //'footer-left' => 'Generado: [date].  Impulsado por KnpSnappyBundle',
                'footer-line' => true,
                'footer-right' => 'Pagina [page] de [toPage]'
                )),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'attachment;  filename="diario_de_campo.pdf"'
                )
            );

        }
            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }    

}
