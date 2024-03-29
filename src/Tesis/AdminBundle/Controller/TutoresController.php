<?php

namespace Tesis\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tesis\AdminBundle\Entity\Tutores;
use Tesis\AdminBundle\Form\TutoresType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;


/**
 * Tutores controller.
 */
class TutoresController extends Controller{
 
    public function addAction(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            return $this->render('TesisAdminBundle:Tutores:add-tutors.html.twig',$options);
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function addformAction(Request $request){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = new Tutores();

            $options['status'] = 'new';
            $options['profesores'] = null;
            $form = $this->createForm(new TutoresType($options), $entity, array(
                'action' => $this->generateUrl('tutors_addform'),
                'method' => 'POST',
            ));

            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                // activa los tutores que tienen estudiante y proyecto asignado
                foreach ($_POST as $clave=>$valor){
                    $periodo = $valor['periodo'];
                    $proyecto = $valor['proyectoProyecto'];        
                    $profesor = $valor['profesorProfesor'];

                    foreach ($profesor as $clave_e=>$valor_r){
                        $selected = null;
                        $selected = $em->getRepository('TesisAdminBundle:Profesor')->findOneBy(
                        array('idProfesor' => $valor_r));

                        $selected->setProyecto($proyecto);
                        $selected->setPeriodo($periodo);
                        $selected->setEstatus('activo');  
                      
                    } 
                }
                $em->flush();

                echo 
                "<script>
                    bootbox.alert('La asignación ha sido creado exitosamente', function(result){ window.location.href ='" .$this->generateUrl('tutors_list') . "' })
                </script>";  

                //return new Response('.'); 
            }

             return $this->render('TesisAdminBundle:Tutores:add-tutors-form.html.twig',
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
                $tutores = $em->getRepository('TesisAdminBundle:Tutores')->findAll();
                $options['tutorias'] = $tutores;                        

                return $this->render('TesisAdminBundle:Tutores:list-tutors.html.twig',$options);
            }

            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }

    // consultar 
    public function checkAction($id = null){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $options['user'] = $session->get('user');
            
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:Tutores:check-tutors.html.twig',$options);
        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }
   


    // formulario (disabled) 
    public function checkformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Tutores')->findOneBy(
                array('idTutores' => $id));

            $options['status'] = 'check';
            $options['profesores'] = $entity->getProfesorProfesor();
            $form = $this->createForm(new TutoresType($options), $entity, array(
                'action' => $this->generateUrl('tutors_checkform', array('id' => $id)),
                'method' => 'POST',
            ));
            $form->add('edit', 'submit', array('label' => 'Editar'));
            $form->add('back', 'submit', array('label' => 'Regresar'));            
        
            $form->handleRequest($request);
            if ($form->get('edit')->isClicked()) {
               return $this->redirect($this->generateUrl('tutors_edit', array('id' => $id)));
            }
            if ($form->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('tutors_list'));
            }                   

             return $this->render('TesisAdminBundle:Tutores:check-tutors-form.html.twig',
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
            return $this->render('TesisAdminBundle:Tutores:edit-tutors.html.twig',$options);

        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    public function editformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Tutores')->findOneBy(
            array('idTutores' => $id));

            $options['status'] = 'edit';
            $options['profesores'] = $entity->getProfesorProfesor();
            $editForm = $this->createForm(new TutoresType($options), $entity, array(
                'action' => $this->generateUrl('tutors_editform', array('id' => $id)),
                'method' => 'POST',
            ));

            $editForm->add('back', 'submit', array('label' => 'Regresar'));                        
            $editForm->handleRequest($request);  

            if ($editForm->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('tutors_list'));
            } 
                    

            if ($editForm->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                // desactiva todos los usuarios pertenecientes a esta asiganción
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery("UPDATE TesisAdminBundle:Profesor e set e.estatus = :estatus 
                WHERE e.proyecto = :proyecto AND e.periodo = :periodo");
                $query->setParameter('estatus', 'inactivo');
                $query->setParameter('proyecto', $entity->getProyectoProyecto()->getIdProyecto());
                $query->setParameter('periodo', $entity->getPeriodo());
                $numUpdated = $query->execute();;
                $em->flush(); // Executes all updates.
                $em->clear(); // Detaches all objects from Doctrine!


                // activa los tutores que tienen estudiantes y proyecto asignado
                foreach ($_POST as $clave=>$valor){
                    $periodo = $valor['periodo'];
                    $proyecto = $valor['proyectoProyecto'];    
                    $profesor = $valor['profesorProfesor'];
                    
                    foreach ($profesor as $clave_e=>$valor_r){
                        $selected = null;
                        $selected = $em->getRepository('TesisAdminBundle:Profesor')->findOneBy(
                        array('idProfesor' => $valor_r));
                       
                        $selected->setProyecto($proyecto);
                        $selected->setPeriodo($periodo);
                        $selected->setEstatus('activo'); 

                    } 
                }
                $em->flush();

                echo 
                "<script>
                    bootbox.alert('Los cambios se han guardado con éxito', function(result){ window.location.href ='" .$this->generateUrl('tutors_check', array('id' => $id)) . "' })
                </script>";                 


                //return $this->redirect($this->generateUrl('tutors_checkform', array('id' => $id)));                    

            }
                $user = $session->get('user');

            return $this->render('TesisAdminBundle:Tutores:edit-tutors-form.html.twig', array(
                'entity'      => $entity,
                'form'   => $editForm->createView(),
                'user' => $user,
                'id' => $id,
            ));
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }

}
