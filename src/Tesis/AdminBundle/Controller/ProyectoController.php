<?php

namespace Tesis\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tesis\AdminBundle\Entity\Proyecto;
use Tesis\AdminBundle\Form\ProyectoType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;



/**
 * Proyecto controller.
 */
class ProyectoController extends Controller{
 
    public function newAction(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            return $this->render('TesisAdminBundle:Proyecto:new-project.html.twig',$options);
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function newformAction(Request $request){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = new Proyecto();

            $options['status'] = 'new';
            $options['fases'] = null;
            $form = $this->createForm(new ProyectoType($options), $entity, array(
                'action' => $this->generateUrl('project_newform'),
                'method' => 'POST',
            ));

            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
               // return new Response('.');
                echo 
                "<script>
                    bootbox.alert('El proyecto ha sido creado exitosamente');
                        setTimeout(function() {
                            window.location.href ='" .$this->generateUrl('project_check', array('id' => $entity->getIdProyecto())) . "';
                        }, 2000);
                </script>";

            }

             return $this->render('TesisAdminBundle:Proyecto:new-project-form.html.twig',
                array('form' => $form->createView()));                        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');

    }



    // pagina para listar todos las proyectos en una tabla    
    public function listAction(){

            $session = $this->getRequest()->getSession();

            if($session->has('user')){

                $options['user'] = $session->get('user');
                   
                $em = $this->getDoctrine()->getManager();
                $qb = $em->createQueryBuilder();
                $proyectos = $em->getRepository('TesisAdminBundle:Proyecto')->findAll();
                $options['proyectos'] = $proyectos;                        

                return $this->render('TesisAdminBundle:Proyecto:list-project.html.twig',$options);
            }

            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    // consultar 
   public function checkAction($id = null){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $options['user'] = $session->get('user');          
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:Proyecto:check-project.html.twig',$options);
        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }
   


    // formulario (disabled) para consultar proyecto
    public function checkformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Proyecto')->findOneBy(
                array('idProyecto' => $id));

            $options['status'] = 'check';
            $options['fases'] = $entity->getFaseFase();
            $form = $this->createForm(new ProyectoType($options), $entity, array(
                'action' => $this->generateUrl('project_checkform', array('id' => $id)),
                'method' => 'POST'));
            $form->add('edit', 'submit', array('label' => 'Editar'));
            $form->add('back', 'submit', array('label' => 'Regresar'));            
        
            $form->handleRequest($request);
            if ($form->get('edit')->isClicked()) {
               return $this->redirect($this->generateUrl('project_edit', array('id' => $id)));
            }
            if ($form->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('project_list'));
            }                 

             return $this->render('TesisAdminBundle:Proyecto:check-project-form.html.twig',
                array('form' => $form->createView()));           
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    // editar proyecto
   public function editAction($id = null){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:Proyecto:edit-project.html.twig',$options);

        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    public function editformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Proyecto')->findOneBy(
            array('idProyecto' => $id));

            /*
            $options['action'] = $this->generateUrl('project_editform', array('id' => $id));
            $options['method'] = 'POST';
            $editForm = $this->createForm(new ProyectoType('edit'), $entity, $options);
            */

            $options['status'] = 'edit';
            $options['fases'] = $entity->getFaseFase();
            $editForm = $this->createForm(new ProyectoType($options), $entity, array(
                'action' => $this->generateUrl('project_editform', array('id' => $id)),
                'method' => 'POST'));


            $editForm->handleRequest($request);          

            if ($editForm->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                echo 
                "<script>
                    bootbox.alert('Los cambios se han guardado con éxito');
                        setTimeout(function() {
                            window.location.href ='" .$this->generateUrl('project_check', array('id' => $entity->getIdProyecto())) . "';
                        }, 2000);
                </script>";

                //return $this->redirect($this->generateUrl('project_checkform', array('id' => $id)));                    

            }
                $user = $session->get('user');

            return $this->render('TesisAdminBundle:Proyecto:edit-project-form.html.twig', array(
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
               $nombre = $valor['nombre'];
             }

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Proyecto')->findOneBy(
            array('nombre' => $nombre));

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
