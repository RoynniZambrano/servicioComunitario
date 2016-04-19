<?php

namespace Tesis\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tesis\AdminBundle\Entity\Periodo;
use Tesis\AdminBundle\Form\PeriodoType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Periodo controller.
 */
class PeriodoController extends Controller{
 
    public function newAction(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            return $this->render('TesisAdminBundle:Periodo:new-periodo.html.twig',$options);
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function newformAction(Request $request){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = new Periodo();
            $fases = null;

            $user = $session->get('user');
            $estudiante = $em->getRepository('TesisAdminBundle:Estudiante')->findOneBy(
            array('idEstudiante' => $user->getId()));
            $entity->setEstudianteEstudiante($estudiante);
            $options['status'] = 'new';
            $options['actividades_f'] = null;

            $proyecto = $em->getRepository('TesisAdminBundle:Proyecto')->findOneBy(
            array('idProyecto' => $estudiante->getProyecto()));            

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
            $form = $this->createForm(new PeriodoType($options), $entity, array(
                'action' => $this->generateUrl('periodo_newform'),
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
                    bootbox.alert('El periodo ha sido creado exitosamente', function(result){ window.location.href ='" .$this->generateUrl('periodo_list') . "' })
                </script>";

               // return new Response('.'); 
            }

             return $this->render('TesisAdminBundle:Periodo:new-periodo-form.html.twig',
                array('form' => $form->createView()));                        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');

    }


    // pagina para listar todos los Periodos en una tabla    
    public function listAction(){

            $session = $this->getRequest()->getSession();

            if($session->has('user')){
                $user = $session->get('user');
                $options['user'] = $user;
            
                $em = $this->getDoctrine()->getManager();
                if ($user->getPerfil() == "estudiante") {
                   
                    $query = $em->createQuery("SELECT c1 FROM TesisAdminBundle:Periodo c1 
                    INNER JOIN TesisAdminBundle:Estudiante e1 WITH  c1.estudianteEstudiante = e1.idEstudiante 
                    AND e1.idEstudiante = :estudiante_id");
                    $query->setParameter('estudiante_id', $user->getId());
                    $periodos = $query->execute();

                }else if ($user->getPerfil() == "tutor") {
                    
                    $query = $em->createQuery("SELECT c1 FROM TesisAdminBundle:Periodo c1 
                    INNER JOIN TesisAdminBundle:Estudiante e1 WITH  c1.estudianteEstudiante = e1.idEstudiante 
                    INNER JOIN TesisAdminBundle:Profesor u1 WITH e1.profesor = u1.idProfesor
                    AND u1.idProfesor = :tutor_id");
                    $query->setParameter('tutor_id', $user->getId());
                    $periodos = $query->execute();

                }else if (($user->getPerfil() == "coordinador de proyecto")
                || ($user->getPerfil() == "coordinador suplente") ) {
                    
                    $query = $em->createQuery("SELECT c1 FROM TesisAdminBundle:Periodo c1 
                    INNER JOIN TesisAdminBundle:Estudiante e1 WITH  c1.estudianteEstudiante = e1.idEstudiante 
                    INNER JOIN TesisAdminBundle:Proyecto p1 WITH e1.proyectoProyecto = p1.idProyecto
                    INNER JOIN TesisAdminBundle:Profesor u1 WITH p1.coordinador = u1.idProfesor
                    AND u1.idProfesor = :coordinador_id");
                    $query->setParameter('coordinador_id', $user->getId());
                    $periodos = $query->execute();

                } else {
                    
                    $periodos = $em->getRepository('TesisAdminBundle:Periodo')->findAll();
                }


                $options['periodos'] = $periodos;
                return $this->render('TesisAdminBundle:Periodo:list-periodo.html.twig',$options);
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

            if ($user->getPerfil() == "estudiante"){
                $options['estudiante'] = $user; 
            }
            else{
                $em = $this->getDoctrine()->getManager();
                $entity = $em->getRepository('TesisAdminBundle:Periodo')->findOneBy(
                    array('idPeriodo' => $id));
                $options['estudiante'] = $entity->getEstudianteEstudiante();                 
            }

            return $this->render('TesisAdminBundle:Periodo:check-periodo.html.twig',$options);
        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }
   


    // formulario (disabled) para consultar Periodo
    public function checkformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){
            $user = $session->get('user');
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Periodo')->findOneBy(
                array('idPeriodo' => $id));

           // $options['action'] = $this->generateUrl('periodo_checkform', array('id' => $id));
            //$options['method'] = 'POST';
           
            $options['status'] = 'check';
            $options['actividades_f'] = null;
            $options['actividades'] = $entity->getActividadActividad();
            $form = $this->createForm(new PeriodoType($options), $entity, array(
                'action' => $this->generateUrl('periodo_checkform', array('id' => $id)),
                'method' => 'POST',
            ));

            if ($user->getPerfil() == "estudiante") 
                $form->add('edit', 'submit', array('label' => 'Editar'));
            else 
                $form->add('edit', 'submit', array('label' => 'Evaluar'));

            $form->add('back', 'submit', array('label' => 'Regresar'));            
        
            $form->handleRequest($request);
            if ($form->get('edit')->isClicked()) {
               return $this->redirect($this->generateUrl('periodo_edit', array('id' => $id)));
            }
            if ($form->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('periodo_list'));
            }                   

             return $this->render('TesisAdminBundle:Periodo:check-periodo-form.html.twig',
                array('form' => $form->createView()));           
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    // editar Periodo
   public function editAction($id = null){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $user = $session->get('user');
            $options['user'] = $user;
            $options['id'] = $id;

            if ($user->getPerfil() == "estudiante"){
                $options['estudiante'] = $user; 
            }
            else{
                $em = $this->getDoctrine()->getManager();
                $entity = $em->getRepository('TesisAdminBundle:Periodo')->findOneBy(
                    array('idPeriodo' => $id));
                $options['estudiante'] = $entity->getEstudianteEstudiante();                  
            }
            
            return $this->render('TesisAdminBundle:Periodo:edit-periodo.html.twig',$options);

        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    public function editformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $user = $session->get('user'); 
            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository('TesisAdminBundle:Periodo')->findOneBy(
                array('idPeriodo' => $id));

            if ($user->getPerfil() == "estudiante") {
                $proyecto = $user->getProyecto();
                 $options['status'] = 'edit_student';
            }
            else{
                $proyecto = $entity->getEstudianteEstudiante()->getProyecto();
                 $options['status'] = 'edit_tutor';
             }
        
            $options['actividades'] = $entity->getActividadActividad();

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

            $editForm = $this->createForm(new PeriodoType($options), $entity, array(
                'action' => $this->generateUrl('periodo_editform', array('id' => $id)),
                'method' => 'POST',
            ));            


            $editForm->submit($request->request->get($editForm->getName()), false);
            if ($user->getPerfil() == "estudiante") {
               
                if ($editForm->isValid()) {
                    $entity->setCalificacion("por evaluar");
                    $em->flush();

                echo 
                "<script>
                    bootbox.alert('Los cambios se han guardado con éxito', function(result){ window.location.href ='" .$this->generateUrl('periodo_check', array('id' => $id)) . "' })
                </script>";

                    //return $this->redirect($this->generateUrl('periodo_checkform', array('id' => $id)));                    
                }

            }else{

               if ($this->getRequest()->getMethod() == 'POST'){

                    $entity->setObservacion($entity->getObservacion() . "   [fecha correción: " .  date("d/m/Y") ."]");
                    $em->flush();

                echo 
                "<script>
                    bootbox.alert('Los cambios se han guardado con éxito', function(result){ window.location.href ='" .$this->generateUrl('periodo_check', array('id' => $id)) . "' })
                </script>"; 


                  //  return $this->redirect($this->generateUrl('periodo_checkform', array('id' => $id)));                    
                }
            }

            return $this->render('TesisAdminBundle:Periodo:edit-periodo-form.html.twig', array(
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

            foreach ($_POST as $clave=>$valor){
               $semana = $valor['nombre'];
             }

            $user = $session->get('user'); 
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Periodo')->findOneBy(
                array('nombre' => $semana, 'estudianteEstudiante' => $user->getId() ));

            try {
                $em->remove($entity);
                $em->flush();
                return new Response('.'); 
            }catch (\Exception $e) {
          
            }  
            return new Response(','); 
                     
        }
        
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }

}
