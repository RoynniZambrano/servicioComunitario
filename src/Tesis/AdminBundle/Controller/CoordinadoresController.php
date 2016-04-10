<?php

namespace Tesis\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tesis\AdminBundle\Entity\CoordinadoresHasProfesor;
use Tesis\AdminBundle\Form\CoordinadoresHasProfesorType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;


/**
 * Coordinadores controller.
 */
class CoordinadoresController extends Controller{
 
    public function addAction(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            return $this->render('TesisAdminBundle:CoordinadoresHasProfesor:add-coordinadores.html.twig',$options);
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function addformAction(Request $request){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = new CoordinadoresHasProfesor();

            $form = $this->createForm(new CoordinadoresHasProfesorType('new'), $entity, array(
                'action' => $this->generateUrl('coord_addform'),
                'method' => 'POST',
            ));

            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                // activa los coordinadores que tienen tutor y proyecto asignado
                foreach ($_POST as $clave=>$valor){
                    $periodo = $valor['periodo'];
                    $proyecto = $valor['proyectoProyecto'];        
                    $profesorSuplente = $valor['profesorSuplente'];
                    $profesorProyecto = $valor['profesorProyecto'];

                    $selected = $em->getRepository('TesisAdminBundle:Profesor')->findOneBy(
                    array('idProfesor' => $profesorSuplente));

                    $selected->setPeriodo($periodo);
                    $selected->setProyecto($proyecto);
                    $selected->setEstatus("activo"); 

                    $selected = $em->getRepository('TesisAdminBundle:Profesor')->findOneBy(
                    array('idProfesor' => $profesorProyecto));

                    $selected->setPeriodo($periodo);
                    $selected->setProyecto($proyecto);
                    $selected->setEstatus("activo"); 
                }
                $em->flush(); 


               echo 
                "<script>
                    bootbox.alert('La asignación ha sido creado exitosamente', function(result){ window.location.href ='" .$this->generateUrl('coord_list') . "' })
                </script>";


                //return new Response('.'); 
            }

             return $this->render('TesisAdminBundle:CoordinadoresHasProfesor:add-coordinadores-form.html.twig',
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
                $coords = $em->getRepository('TesisAdminBundle:CoordinadoresHasProfesor')->findAll();
                $options['coords'] = $coords;                        

                return $this->render('TesisAdminBundle:CoordinadoresHasProfesor:list-coordinadores.html.twig',$options);
            }

            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }

    // consultar 
    public function checkAction($id = null){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $options['user'] = $session->get('user');
            
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:CoordinadoresHasProfesor:check-coordinadores.html.twig',$options);
        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }
   


    // formulario (disabled) 
    public function checkformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:CoordinadoresHasProfesor')->findOneBy(
                array('coordinadoresHasProfesorId' => $id));

            $options['action'] = $this->generateUrl('coord_checkform', array('id' => $id));
            $options['method'] = 'POST';
            $form = $this->createForm(new CoordinadoresHasProfesorType('check'), $entity, $options);
            $form->add('edit', 'submit', array('label' => 'Editar'));
            $form->add('back', 'submit', array('label' => 'Regresar'));            
        
            $form->handleRequest($request);
            if ($form->get('edit')->isClicked()) {
               return $this->redirect($this->generateUrl('coord_edit', array('id' => $id)));
            }
            if ($form->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('coord_list'));
            }                   

             return $this->render('TesisAdminBundle:CoordinadoresHasProfesor:check-coordinadores-form.html.twig',
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
            return $this->render('TesisAdminBundle:CoordinadoresHasProfesor:edit-coordinadores.html.twig',$options);

        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    public function editformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:CoordinadoresHasProfesor')->findOneBy(
            array('coordinadoresHasProfesorId' => $id));

            $options['action'] = $this->generateUrl('coord_editform', array('id' => $id));
            $options['method'] = 'POST';
            $editForm = $this->createForm(new CoordinadoresHasProfesorType('edit'), $entity, $options); 
            $editForm->add('back', 'submit', array('label' => 'Regresar'));                        
            $editForm->handleRequest($request);  

            if ($editForm->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('coord_list'));
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


                // activa los coordinadores que tienen tutor y proyecto asignado
                foreach ($_POST as $clave=>$valor){
                    $periodo = $valor['periodo'];
                    $proyecto = $valor['proyectoProyecto'];        
                    $profesorSuplente = $valor['profesorSuplente'];
                    $profesorProyecto = $valor['profesorProyecto'];

                    $selected = $em->getRepository('TesisAdminBundle:Profesor')->findOneBy(
                    array('idProfesor' => $profesorSuplente));

                    $selected->setPeriodo($periodo);
                    $selected->setProyecto($proyecto);
                    $selected->setEstatus("activo"); 

                    $selected = $em->getRepository('TesisAdminBundle:Profesor')->findOneBy(
                    array('idProfesor' => $profesorProyecto));

                    $selected->setPeriodo($periodo);
                    $selected->setProyecto($proyecto);
                    $selected->setEstatus("activo"); 
                }
                $em->flush(); 

                echo 
                "<script>
                    bootbox.alert('Los cambios se han guardado con éxito', function(result){ window.location.href ='" .$this->generateUrl('coord_check', array('id' => $id)) . "' })
                </script>";


                //return $this->redirect($this->generateUrl('tutors_checkform', array('id' => $id)));                    

            }
                $user = $session->get('user');

            return $this->render('TesisAdminBundle:CoordinadoresHasProfesor:edit-coordinadores-form.html.twig', array(
                'entity'      => $entity,
                'form'   => $editForm->createView(),
                'user' => $user,
                'id' => $id,
            ));
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


}
