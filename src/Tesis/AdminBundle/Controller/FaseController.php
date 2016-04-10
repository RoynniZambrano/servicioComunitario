<?php

namespace Tesis\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tesis\AdminBundle\Entity\Fase;
use Tesis\AdminBundle\Form\FaseType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;



/**
 * Fase controller.
 */
class FaseController extends Controller{
 
    public function newAction(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            return $this->render('TesisAdminBundle:Fase:new-fase.html.twig',$options);
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function newformAction(Request $request){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = new Fase();

            $options['status'] = 'new';
            $options['actividades'] = null;
            $form = $this->createForm(new FaseType($options), $entity, array(
                'action' => $this->generateUrl('fase_newform'),
                'method' => 'POST',
            ));

            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                echo 
                "<script>
                    bootbox.alert('La fase ha sido creado exitosamente', function(result){ window.location.href ='" .$this->generateUrl('fase_check', array('id' => $entity->getIdFase())) . "' })
                </script>";


                //return new Response('.'); 
            }

             return $this->render('TesisAdminBundle:Fase:new-fase-form.html.twig',
                array('form' => $form->createView()));                        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');

    }



    // pagina para listar todos las fases en una tabla    
    public function listAction(){

            $session = $this->getRequest()->getSession();

            if($session->has('user')){

                $options['user'] = $session->get('user');
                   
                $em = $this->getDoctrine()->getManager();
                $qb = $em->createQueryBuilder();
                $fases = $em->getRepository('TesisAdminBundle:Fase')->findAll();
                $options['fases'] = $fases;                        

                return $this->render('TesisAdminBundle:Fase:list-fase.html.twig',$options);
            }

            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    // consultar 
   public function checkAction($id = null){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $options['user'] = $session->get('user');
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:Fase:check-fase.html.twig',$options);
        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }
   


    // formulario (disabled) para consultar fase
    public function checkformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Fase')->findOneBy(
                array('idFase' => $id));

            //$options['action'] = $this->generateUrl('fase_checkform', array('id' => $id));
           //$options['method'] = 'POST';
            $options['actividades'] = $entity->getActividadActividad();
            $options['status'] = 'check';

            $form = $this->createForm(new FaseType($options), $entity, array(
                'action' => $this->generateUrl('fase_checkform', array('id' => $id)),
                'method' => 'POST'));
            

            $form->add('edit', 'submit', array('label' => 'Editar'));
            $form->add('back', 'submit', array('label' => 'Regresar'));            
        
            $form->handleRequest($request);
            if ($form->get('edit')->isClicked()) {
               return $this->redirect($this->generateUrl('fase_edit', array('id' => $id)));
            }
            if ($form->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('fase_list'));
            }                   

             return $this->render('TesisAdminBundle:Fase:check-fase-form.html.twig',
                array('form' => $form->createView()));           
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    // editar fase
   public function editAction($id = null){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');         
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:Fase:edit-fase.html.twig',$options);

        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    public function editformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Fase')->findOneBy(
            array('idFase' => $id));

           // $options['action'] = $this->generateUrl('fase_editform', array('id' => $id));
           // $options['method'] = 'POST';
           // $editForm = $this->createForm(new FaseType('edit'), $entity, $options);  

            $options['actividades'] = $entity->getActividadActividad();
            $options['status'] = 'edit';

            $editForm = $this->createForm(new FaseType($options), $entity, array(
                'action' => $this->generateUrl('fase_editform', array('id' => $id)),
                'method' => 'POST'));


            $editForm->handleRequest($request);          

            if ($editForm->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                echo 
                "<script>
                    bootbox.alert('Los cambios se han guardado con éxito', function(result){ window.location.href ='" .$this->generateUrl('fase_check', array('id' => $entity->getIdFase())) . "' })
                </script>";                

               // return $this->redirect($this->generateUrl('fase_checkform', array('id' => $id)));                    

            }
                $user = $session->get('user');

            return $this->render('TesisAdminBundle:Fase:edit-fase-form.html.twig', array(
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
            $entity = $em->getRepository('TesisAdminBundle:Fase')->findOneBy(
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
