<?php

namespace Tesis\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tesis\AdminBundle\Entity\Tutoria;
use Tesis\AdminBundle\Form\TutoriaType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;


/**
 * Tutoria controller.
 */
class TutoriaController extends Controller{
 
    public function addAction(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            return $this->render('TesisAdminBundle:Tutoria:add-tutor.html.twig',$options);
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function addformAction(Request $request){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = new Tutoria();

            $options['status'] = 'new';
            $options['estudiantes'] = null;
            $form = $this->createForm(new TutoriaType($options), $entity, array(
                'action' => $this->generateUrl('tutor_addform'),
                'method' => 'POST',
            ));

            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();


                // activa los estudiantes que tienen tutores y proyecto asignado
                foreach ($_POST as $clave=>$valor){
                    $periodo = $valor['periodo'];
                    $profesor = $valor['profesorProfesor'];        
                    $estudiante = $valor['estudianteEstudiante'];

                    foreach ($estudiante as $clave_e=>$valor_r){
                        $selected = null;
                        $selected = $em->getRepository('TesisAdminBundle:Estudiante')->findOneBy(
                        array('idEstudiante' => $valor_r));

                        $selected->setPeriodo($periodo);
                        $selected->setProfesor($profesor);
                        $selected->setSC("iniciado");                        
                        if ($selected->getProyecto() != null) {
                            $selected->setEstatus('activo'); 
                        }
                    } 
                }
                $em->flush();

                echo 
                "<script>
                    bootbox.alert('La asignación ha sido creado exitosamente', function(result){ window.location.href ='" .$this->generateUrl('tutor_list') . "' })
                </script>";  


                //return new Response('.'); 
            }

             return $this->render('TesisAdminBundle:Tutoria:add-tutor-form.html.twig',
                array('form' => $form->createView()));                        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');

    }


    // pagina para listar  
    public function listAction(){

            $session = $this->getRequest()->getSession();

            if($session->has('user')){

                $options['user'] = $session->get('user');
                   
                $em = $this->getDoctrine()->getManager();
                $qb = $em->createQueryBuilder();
                $tutorias = $em->getRepository('TesisAdminBundle:Tutoria')->findAll();
                $options['tutorias'] = $tutorias;                        

                return $this->render('TesisAdminBundle:Tutoria:list-tutor.html.twig',$options);
            }

            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }

    // consultar 
    public function checkAction($id = null){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $options['user'] = $session->get('user');
            
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:Tutoria:check-tutor.html.twig',$options);
        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }
   


    // formulario (disabled) 
    public function checkformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Tutoria')->findOneBy(
                array('idTutoria' => $id));
       
            $options['status'] = 'check';
            $options['estudiantes'] = $entity->getEstudianteEstudiante();
            $form = $this->createForm(new TutoriaType($options), $entity, array(
                'action' => $this->generateUrl('tutor_checkform', array('id' => $id)),
                'method' => 'POST',
            ));

            $form->add('edit', 'submit', array('label' => 'Editar'));
            $form->add('back', 'submit', array('label' => 'Regresar'));            
        
            $form->handleRequest($request);
            if ($form->get('edit')->isClicked()) {
               return $this->redirect($this->generateUrl('tutor_edit', array('id' => $id)));
            }
            if ($form->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('tutor_list'));
            }                   

             return $this->render('TesisAdminBundle:Tutoria:check-tutor-form.html.twig',
                array('form' => $form->createView()));           
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }




    // editar tutores
   public function editAction($id = null){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:Tutoria:edit-tutor.html.twig',$options);

        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    public function editformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Tutoria')->findOneBy(
            array('idTutoria' => $id));         

            $options['status'] = 'edit';
            $options['estudiantes'] = $entity->getEstudianteEstudiante();
            $editForm = $this->createForm(new TutoriaType($options), $entity, array(
                'action' => $this->generateUrl('tutor_editform', array('id' => $id)),
                'method' => 'POST',
            ));

            $editForm->add('back', 'submit', array('label' => 'Regresar'));                        
            $editForm->handleRequest($request);  

            if ($editForm->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('tutor_list'));
            } 
                    

            if ($editForm->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();


                // desactiva todos los usuarios pertenecientes a esta asiganción
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery("UPDATE TesisAdminBundle:Estudiante e set e.estatus = :estatus 
                WHERE e.profesor = :profesor AND e.periodo = :periodo");
                $query->setParameter('estatus', 'inactivo');
                $query->setParameter('profesor', $entity->getProfesorProfesor()->getId());
                $query->setParameter('periodo', $entity->getPeriodo());
                $numUpdated = $query->execute();;
                $em->flush(); // Executes all updates.
                $em->clear(); // Detaches all objects from Doctrine!


                // activa los estudiantes que tienen tutores y proyecto asignado
                foreach ($_POST as $clave=>$valor){
                    $periodo = $valor['periodo'];
                    $profesor = $valor['profesorProfesor'];        
                    $estudiante = $valor['estudianteEstudiante'];

                    foreach ($estudiante as $clave_e=>$valor_r){
                        $selected = null;
                        $selected = $em->getRepository('TesisAdminBundle:Estudiante')->findOneBy(
                        array('idEstudiante' => $valor_r));

                        $selected->setPeriodo($periodo);
                        $selected->setProfesor($profesor);
                        $selected->setSC("iniciado");
                        if ($selected->getProyecto() != null) {
                            $selected->setEstatus('activo'); 
                        }
                    } 
                }
                $em->flush();
                
                echo 
                "<script>
                    bootbox.alert('Los cambios se han guardado con éxito', function(result){ window.location.href ='" .$this->generateUrl('tutor_check', array('id' => $id)) . "' })
                </script>";  

                //return $this->redirect($this->generateUrl('tutors_checkform', array('id' => $id)));                    

            }
                $user = $session->get('user');

            return $this->render('TesisAdminBundle:Tutoria:edit-tutor-form.html.twig', array(
                'entity'      => $entity,
                'form'   => $editForm->createView(),
                'user' => $user,
                'id' => $id,
            ));
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


}
