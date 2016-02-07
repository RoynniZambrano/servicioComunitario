<?php

namespace Tesis\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Tesis\AdminBundle\Entity\InformeFinal;
use Tesis\AdminBundle\Form\InformeFinalType;

class InfoFinalController extends Controller
{

    public function new_infofinalAction(Request $request){

    	$session = $this->getRequest()->getSession();
        if($session->has('user')){
            $options['user'] = $session->get('user');
            $options['id'] = $session->get('user')->getId();
            return $this->render('TesisAdminBundle:InfoFinal:info_final.html.twig', $options);            

        }
            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function pdf_infofinalAction($id = null){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            //$user = $session->get('user');
            //$options['user'] = $user;

            $em = $this->getDoctrine()->getManager();
            $estudiante = $em->getRepository('TesisAdminBundle:Estudiante')->findOneBy(
                array('idEstudiante' => $id));

            $info_adicional = $em->getRepository('TesisAdminBundle:InfoAdicional')->findOneBy(
                array('idEstudiante' => $id));

            $proyecto = $em->getRepository('TesisAdminBundle:Proyecto')->findOneBy(
                array('idProyecto' => $estudiante->getProyecto()));  

            $profesor = $em->getRepository('TesisAdminBundle:Profesor')->findOneBy(
                array('idProfesor' => $estudiante->getProfesor()));                            

                $tamano = 0;
                $tamano = sizeof($info_adicional);
                if ($tamano<1) 
                    $info_adicional = null;


            $resul = null; 
            $actividades = null;

            $query = $em->createQuery("SELECT sum (d1.horas) as horas, 
            sum (d1.personas) as personas, sum (d1.ninos) as ninos, sum (d1.adultos) as adultos, 
            sum (d1.terceraEdad) as terceraEdad, sum (d1.discapacidad) as  discapacidad,
            d1.comunidad as comunidad, d1.idDiario as id_diario
            FROM TesisAdminBundle:Diario d1 WHERE
            d1.estudianteEstudiante = :estudiante_id GROUP BY d1.comunidad");
            $query->setParameter('estudiante_id', $id);
            $resul = $query->execute();


            $i=0;
            foreach ($resul as $res) {
                $tamano =  0;
// a1.nombre as nombre, a1.descripcion as descripcion
                $em = $this->getDoctrine()->getEntityManager();
                $connection = $em->getConnection();
                $statement = $connection->prepare("SELECT DISTINCT(a1.nombre) as nombre,
                a1.descripcion as descripcion FROM actividad a1 
                JOIN diario_has_actividad da1 ON
                a1.id_actividad = da1.actividad_id_actividad 
                JOIN diario d1 ON d1.id_diario = da1.diario_id_diario
                WHERE d1.comunidad = :comunidad");                  
                $statement->bindValue('comunidad', $res['comunidad']);
                $statement->execute();
                $actividad = $statement->fetchAll();

                $tamano = sizeof($actividad);
                if ($tamano>0) {
                    $actividades[$i] = $actividad;
                } else{
                    $actividades[$i] = null;

                }

                $i++;
            }             





/*
            $query = $em->createQuery("SELECT p1.idPeriodo as periodo, p1.nombre as nombre_periodo, 
            p1.fechaInicio as fechaInicio, p1.fechaFin as fechaFin, sum (d1.horas) as horas, 
            sum (d1.personas) as personas, sum (d1.ninos) as ninos, sum (d1.adultos) as adultos, 
            sum (d1.terceraEdad) as terceraEdad, sum (d1.discapacidad) as  discapacidad,
            d1.comunidad as comunidad
            FROM TesisAdminBundle:Periodo p1
            INNER JOIN TesisAdminBundle:Diario d1 WITH  p1.idPeriodo = d1.periodoPeriodo
            AND p1.estudianteEstudiante = :estudiante_id GROUP BY d1.comunidad");
            $query->setParameter('estudiante_id', $id);
            $resul = $query->execute(); 
            */


/*

            $query = $em->createQuery("SELECT c1.idcronograma as cronograma, c1.semana as semana, 
            c1.fechaInicio as fechaInicio, c1.fechaFin as fechaFin, sum (d1.horas) as horas, 
            sum (d1.personas) as personas, sum (d1.ninos) as ninos, sum (d1.adultos) as adultos, 
            sum (d1.terceraEdad) as terceraEdad, sum (d1.discapacidad) as  discapacidad
            FROM TesisAdminBundle:Cronograma c1
            INNER JOIN TesisAdminBundle:Diario d1 WITH  c1.idcronograma = d1.cronogramacronograma
            AND c1.estudianteEstudiante = :estudiante_id GROUP BY c1.semana");
            $query->setParameter('estudiante_id', $id);
            $resul = $query->execute(); 


            $actividades = null;

            $i=0;
            foreach ($resul as $res) {
                $tamano =  0;

                $query = $em->createQuery("SELECT r1.nombre as nombre, 
                sum (r1.cantidad) as cantidad, r1.comentario as comentario
                FROM TesisAdminBundle:Resultados r1
                INNER JOIN TesisAdminBundle:Diario d1 WITH  d1.idDiario = r1.diarioDiario
                INNER JOIN TesisAdminBundle:Cronograma c1 WITH c1.idcronograma = d1.cronogramacronograma
                AND c1.idcronograma = :cronograma_id GROUP BY r1.nombre"); 
                $query->setParameter('cronograma_id', $res['cronograma']); 
                $actividad = $query->execute(); 

                $tamano = sizeof($actividad);
                if ($tamano>0) {
                    $actividades[$i] = $actividad;
                } else{
                    $actividades[$i] = null;

                }

                $i++;
            }
            */

         //var_dump($actividades);
         //$tamano = sizeof(info_adicional);

            // crea la vista
            $html = $this->renderView('TesisAdminBundle:InfoFinal:pdf_final.html.twig', array(
                'estudiante' => $estudiante,
                'info' => $info_adicional,
                'resultados' => $resul,
                'actividades' => $actividades,
                'proyecto' => $proyecto,
                'profesor' => $profesor
               ));  


            /*
            if ($estudiante->getSc() != "culminado") {
                $informe = $em->getRepository('TesisAdminBundle:InformeFinal')->findOneBy(
                    array('idEstudiante' => $id));

                $informe->setCalificacion("por evaluar");
                $informe->setCalificacion(".");
                $em->persist($informe);
                $em->flush();
            }
            */


            return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html,
                array('footer-font-size' => '8',
                'margin-bottom' => '34',
                'footer-spacing' => '20',
                'margin-top' => '30',
                'footer-left' => 'Generado: [date]. Impulsado por KnpSnappyBundle',
                'footer-line' => true,
                'footer-right' => 'Pagina [page] de [toPage]'
                )),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'attachment;  filename="informe_final.pdf"'
                )
            );



        }
            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }

    
    public function listAction(){

            $session = $this->getRequest()->getSession();

            if($session->has('user')){
                $user = $session->get('user');
                $options['user'] = $user;
            
                $em = $this->getDoctrine()->getManager();
                if ($user->getPerfil() == "estudiante") {
                   
                    $query = $em->createQuery("SELECT i1 FROM TesisAdminBundle:InformeFinal i1  
                    WHERE i1.idEstudiante = :estudiante_id");
                    $query->setParameter('estudiante_id', $user->getId());
                    $informes = $query->execute();


                }else if ($user->getPerfil() == "tutor") {
                    
                    $query = $em->createQuery("SELECT i1 FROM TesisAdminBundle:InformeFinal i1 
                    INNER JOIN TesisAdminBundle:Estudiante e1 WITH  i1.idEstudiante = e1.idEstudiante 
                    INNER JOIN TesisAdminBundle:Usuario u1 WITH e1.usuarioUsuario = u1.idUsuario
                    AND u1.idUsuario = :tutor_id");
                    $query->setParameter('tutor_id', $user->getId());
                    $informes = $query->execute();
   
                }else if (($user->getPerfil() == "coordinador de proyecto")
                || ($user->getPerfil() == "coordinador suplente") ) {
                    
                    $query = $em->createQuery("SELECT i1 FROM TesisAdminBundle:InformeFinal i1 
                    INNER JOIN TesisAdminBundle:Estudiante e1 WITH  i1.idEstudiante = e1.idEstudiante 
                    INNER JOIN TesisAdminBundle:Proyecto p1 WITH e1.proyectoProyecto = p1.idProyecto
                    INNER JOIN TesisAdminBundle:Usuario u1 WITH p1.coordinador = u1.idUsuario
                    AND u1.idUsuario = :coordiandor_id");
                    $query->setParameter('coordinador_id', $user->getId());
                    $informes = $query->execute();

                } else {
                    
                    $informes = $em->getRepository('TesisAdminBundle:InformeFinal')->findAll();
                }


                $options['informes'] = $informes;
                return $this->render('TesisAdminBundle:InfoFinal:list-infofinal.html.twig',$options);
            }

            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    public function checkAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $options['user'] = $session->get('user');
            $user = $session->get('user');

            if ($user->getPerfil() == "estudiante")
                $options['id'] = $user->getId();
            else
                $options['id'] = $id;

            return $this->render('TesisAdminBundle:InfoFinal:checkinfo_final.html.twig', $options);            

        }
            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }

   

    // formulario (disabled) para consultar 
    public function checkformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:InformeFinal')->findOneBy(
                array('idEstudiante' => $id));

            $options['id'] = $id;
            $user = $session->get('user');
            $options['user'] = $user;
            $options['status'] = 'check';

            $form = $this->createForm(new InformeFinalType($options), $entity, array(
                'action' => $this->generateUrl('infofinal_checkform', array('id' => $id)),
                'method' => 'POST',
            ));

            if ($user->getPerfil() != "estudiante") 
            $form->add('edit', 'submit', array('label' => 'Editar'));
            $form->add('view', 'submit', array('label' => 'Ver Informe'));
            $form->add('back', 'submit', array('label' => 'Regresar'));            
        
            $form->handleRequest($request);
            if ($form->get('view')->isClicked()) {
               return $this->redirect($this->generateUrl('infofinal_pdf', array('id' => $id)));
            }

            if ($user->getPerfil() != "estudiante") {

                if ($form->get('back')->isClicked()) {
                   return $this->redirect($this->generateUrl('infofinal_list'));
                }
                if ($form->get('edit')->isClicked()) {
                   return $this->redirect($this->generateUrl('infofinal_edit', array('id' => $id)));
                } 

            }else{

                if ($form->get('back')->isClicked()) {
                   return $this->redirect($this->generateUrl('infofinal'));
                }

            }

             return $this->render('TesisAdminBundle:InfoFinal:check-infofinal-form.html.twig',
                array('form' => $form->createView(),
                    'user' => $user));           
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


   public function editAction($id = null){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            $options['id'] = $id;

            return $this->render('TesisAdminBundle:InfoFinal:edit-infofinal.html.twig',$options);

        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    public function editformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $user = $session->get('user'); 
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:InformeFinal')->findOneBy(
                array('idEstudiante' => $id));

            $options['status'] = 'edit'; 
            $options['id'] = $session->get('user')->getId();
            $editForm = $this->createForm(new InformeFinalType($options), $entity, array(
                'action' => $this->generateUrl('infofinal_editform', array('id' => $id)),
                'method' => 'POST',
            ));
            $editForm->add('back', 'submit', array('label' => 'Regresar')); 

            $editForm->submit($request->request->get($editForm->getName()), false);

           if ($this->getRequest()->getMethod() == 'POST'){

                if ($editForm->get('back')->isClicked()) {
                    return $this->redirect($this->generateUrl('infofinal_list'));
                }else{
                
                    if ($entity->getCalificacion() == "aprobado") {
                        $estudiante = $em->getRepository('TesisAdminBundle:Estudiante')->findOneBy(
                        array('idEstudiante' => $id));
                        $estudiante->setSc('culminado');
                    }

                    $entity->setObservacion($entity->getObservacion() . "   [fecha ultima correción: " .  date("d/m/Y") ."]");
                    $em->flush();
                    

                    echo 
                    "<script>
                        bootbox.alert('Los cambios se han guardado con éxito');
                            setTimeout(function() {
                                window.location.href ='" .$this->generateUrl('infofinal_check', array('id' => $id)) . "';
                            }, 2000);
                    </script>";


                    //$em->flush();
                    //return $this->redirect($this->generateUrl('infofinal_checkform', array('id' => $id)));  
                    
                }                  
            }
            

            return $this->render('TesisAdminBundle:InfoFinal:edit-infofinal-form.html.twig', array(
                'entity'      => $entity,
                'form'   => $editForm->createView(),
                'user' => $user,
                'id' => $id,
            ));
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


}    