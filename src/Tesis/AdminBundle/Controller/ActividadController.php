<?php

namespace Tesis\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tesis\AdminBundle\Entity\Actividad;
use Tesis\AdminBundle\Form\ActividadType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;



/**
 * Actividad controller.
 */
class ActividadController extends Controller{
 
    public function newAction(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            return $this->render('TesisAdminBundle:Actividad:new-activities.html.twig',$options);
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    // Crea un nuevo formulario de usuario
    public function newformAction(Request $request){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = new Actividad();

            $form = $this->createForm(new ActividadType('new'), $entity, array(
                'action' => $this->generateUrl('activities_newform'),
                'method' => 'POST',
            ));

            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                echo 
                "<script>
                    bootbox.alert('La actividad ha sido creado exitosamente');
                        setTimeout(function() {
                            window.location.href ='" .$this->generateUrl('activities_check', array('id' => $entity->getIdActividad())) . "';
                        }, 2000);
                </script>";

                //return new Response('.'); 
              }

             return $this->render('TesisAdminBundle:Actividad:new-activities-form.html.twig',
                array('form' => $form->createView()));                        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');

    }



    // pagina para listar todos las actividades en una tabla    
    public function listAction(){

            $session = $this->getRequest()->getSession();

            if($session->has('user')){

                $options['user'] = $session->get('user');
                   
                $em = $this->getDoctrine()->getManager();
                $qb = $em->createQueryBuilder();
                $actividades = $em->getRepository('TesisAdminBundle:Actividad')->findAll();
                $options['actividades'] = $actividades;                        

                return $this->render('TesisAdminBundle:Actividad:list-activities.html.twig',$options);
            }

            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    // consultar 
   public function checkAction($id = null){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $options['user'] = $session->get('user');
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:Actividad:check-activities.html.twig',$options);
        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }
   


    // formulario (disabled) para consultar actividad
    public function checkformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Actividad')->findOneBy(
                array('idActividad' => $id));


            $options['action'] = $this->generateUrl('activities_checkform', array('id' => $id));
            $options['method'] = 'POST';
            $form = $this->createForm(new ActividadType('check'), $entity, $options);
            $form->add('edit', 'submit', array('label' => 'Editar'));
            $form->add('back', 'submit', array('label' => 'Regresar'));
        
            $form->handleRequest($request);
            if ($form->get('edit')->isClicked()) {
               return $this->redirect($this->generateUrl('activities_edit', array('id' => $id)));
            }     
            if ($form->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('activities_list'));
            }            

             return $this->render('TesisAdminBundle:Actividad:check-activities-form.html.twig',
                array('form' => $form->createView()));           
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    // editar actividad
   public function editAction($id = null){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:Actividad:edit-activities.html.twig',$options);

        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    public function editformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        /*si es un usuario estandar o un admin, prosigue con la accion*/
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Actividad')->findOneBy(
            array('idActividad' => $id));

            $options['action'] = $this->generateUrl('activities_editform', array('id' => $id));
            $options['method'] = 'POST';
            $editForm = $this->createForm(new ActividadType('edit'), $entity, $options);             
                  
            $editForm->submit($request->request->get($editForm->getName()), false);
            if ($editForm->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->flush();

            echo 
                "<script>
                    bootbox.alert('Los cambios se han guardado con éxito');
                        setTimeout(function() {
                            window.location.href ='" .$this->generateUrl('activities_check', array('id' => $id)) . "';
                        }, 2000);
                </script>";

            //return $this->redirect($this->generateUrl('activities_checkform', array('id' => $id)));                    

            }
                $user = $session->get('user');

            return $this->render('TesisAdminBundle:Actividad:edit-activities-form.html.twig', array(
                'entity'      => $entity,
                'form'   => $editForm->createView(),
                'user' => $user,
                'id' => $id,
            ));
        }
        /*en caso de que sea un invitado, deniega la accion*/
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    public function deleteAction(Request $request){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            foreach ($_POST as $clave=>$valor){
               $nombre = $valor['nombre'];
             }

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Actividad')->findOneBy(
            array('nombre' => $nombre));

            try {
                $em->remove($entity);
                $em->flush();
                return new Response('.'); 
            }catch (\Exception $e) {
          
            }  
            return new Response(','); 
                     
        }
        /*en caso de que sea un invitado, deniega la accion*/
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


}
