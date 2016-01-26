<?php

namespace Tesis\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tesis\AdminBundle\Entity\InfoAdicional;
use Tesis\AdminBundle\Form\InfoAdicionalType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * InfoAdicional controller.
 */
class InfoAdicionalController extends Controller{
 
    public function newAction(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            return $this->render('TesisAdminBundle:InfoAdicional:new-infoAdicional.html.twig',$options);
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function newformAction(Request $request){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){

            $user = $session->get('user');
            $em = $this->getDoctrine()->getManager();
            $entity = new InfoAdicional();
            $options['id'] = $session->get('user')->getId();
            $options['status'] = 'new';

            $estudiante = $em->getRepository('TesisAdminBundle:Estudiante')->findOneBy(
            array('idEstudiante' => $user->getId()));
            $entity->setIdEstudiante($estudiante);
            //$entity->setEstudianteEstudiante($estudiante);

            $form = $this->createForm(new InfoAdicionalType($options), $entity, array(
                'action' => $this->generateUrl('infoAdicional_newform'),
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
                    bootbox.alert('La información adicional ha sido creado exitosamente');
                        setTimeout(function() {
                            window.location.href ='" .$this->generateUrl('infoAdicional_list') . "';
                        }, 2000);
                </script>";

              //  return new Response('.'); 
            }
    
             return $this->render('TesisAdminBundle:InfoAdicional:new-infoAdicional-form.html.twig',
                array('form' => $form->createView()));                        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');

    }



    // pagina para listar todos    
    public function listAction(){

            $session = $this->getRequest()->getSession();

            if($session->has('user')){
                $user = $session->get('user');
                $options['user'] = $user;
            
                $em = $this->getDoctrine()->getManager();
                if ($user->getPerfil() == "estudiante") {
                   
                    $query = $em->createQuery("SELECT i1 FROM TesisAdminBundle:InfoAdicional i1  
                    WHERE i1.idEstudiante = :estudiante_id");
                    $query->setParameter('estudiante_id', $user->getId());
                    $entity = $query->execute();


                }else if ($user->getPerfil() == "tutor") {
                    
                    $query = $em->createQuery("SELECT i1 FROM TesisAdminBundle:InfoAdicional i1 
                    INNER JOIN TesisAdminBundle:Estudiante e1 WITH  i1.idEstudiante = e1.idEstudiante 
                    INNER JOIN TesisAdminBundle:Profesor u1 WITH e1.profesorProfesor = u1.idProfesor
                    AND u1.idProfesor = :tutor_id");
                    $query->setParameter('tutor_id', $user->getId());
                    $entity = $query->execute();
   
                }else if (($user->getPerfil() == "coordinador de proyecto")
                || ($user->getPerfil() == "coordinador suplente") ) {
                    
                    $query = $em->createQuery("SELECT i1 FROM TesisAdminBundle:InfoAdicional i1 
                    INNER JOIN TesisAdminBundle:Estudiante e1 WITH  i1.idEstudiante = e1.idEstudiante 
                    INNER JOIN TesisAdminBundle:Proyecto p1 WITH e1.proyectoProyecto = p1.idProyecto
                    INNER JOIN TesisAdminBundle:Profesor u1 WITH p1.coordinador = u1.idProfesor
                    AND u1.idProfesor = :coordiandor_id");
                    $query->setParameter('coordinador_id', $user->getId());
                    $entity = $query->execute();

                } else {
                    
                    $entity = $em->getRepository('TesisAdminBundle:InfoAdicional')->findAll();
                }


                $options['entity'] = $entity;
                return $this->render('TesisAdminBundle:InfoAdicional:list-infoAdicional.html.twig',$options);
            }

            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    // consultar 
   public function checkAction($id = null){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $options['user'] = $session->get('user');
            $user = $session->get('user');

            if($session->has('user')){
                $options['user'] = $session->get('user');
                $options['id'] = $id; 
                return $this->render('TesisAdminBundle:InfoAdicional:check-infoAdicional.html.twig',$options);

            }    
            
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }
   


    // formulario (disabled) para consultar
    public function checkformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $user = $session->get('user');
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:InfoAdicional')->findOneBy(
                array('idInfoAdicional' => $id));

            $options['id'] = $user->getId();
            $options['status'] = 'check';

            $form = $this->createForm(new InfoAdicionalType($options), $entity, array(
                'action' => $this->generateUrl('infoAdicional_checkform', array('id' => $id)),
                'method' => 'POST',
            ));


            if ($user->getPerfil() == "estudiante") 
                $form->add('edit', 'submit', array('label' => 'Editar'));
            else 
                $form->add('edit', 'submit', array('label' => 'Evaluar'));

            $form->add('back', 'submit', array('label' => 'Regresar'));            
        
            $form->handleRequest($request);
            if ($form->get('edit')->isClicked()) {
               return $this->redirect($this->generateUrl('infoAdicional_edit', array('id' => $id)));
            }
            if ($form->get('back')->isClicked()) {
                if ($user->getPerfil() == "estudiante")
                return $this->redirect($this->generateUrl('tesis_admin_homepage'));    
                return $this->redirect($this->generateUrl('infoAdicional_list'));
            }                   

             return $this->render('TesisAdminBundle:InfoAdicional:check-infoAdicional-form.html.twig',
                array('form' => $form->createView()));           
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    // editar infoAdicional
   public function editAction($id = null){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:InfoAdicional:edit-infoAdicional.html.twig',$options);

        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    public function editformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $user = $session->get('user'); 
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:InfoAdicional')->findOneBy(
                array('idInfoAdicional' => $id));

            if ($user->getPerfil() == "estudiante") 
                $options['status'] = 'edit_student'; 
            else
                $options['status'] = 'edit_tutor'; 

            $options['id'] = $session->get('user')->getId();
            $editForm = $this->createForm(new InfoAdicionalType($options), $entity, array(
                'action' => $this->generateUrl('infoAdicional_editform', array('id' => $id)),
                'method' => 'POST',
            ));

            $editForm->submit($request->request->get($editForm->getName()), false);            
            if ($user->getPerfil() == "estudiante") {
               
                if ($editForm->isValid()) {
                    $entity->setCalificacion("por evaluar");
                    $em->flush();

                echo 
                "<script>
                    bootbox.alert('Los cambios se han guardado con éxito');
                        setTimeout(function() {
                            window.location.href ='" .$this->generateUrl('infoAdicional_check', array('id' => $id)) . "';
                        }, 2000);
                </script>";

                //    return $this->redirect($this->generateUrl('infoAdicional_checkform', array('id' => $id)));                    
                }

            }else{

               if ($this->getRequest()->getMethod() == 'POST'){
                    $em->flush();

                echo 
                "<script>
                    bootbox.alert('Los cambios se han guardado con éxito');
                        setTimeout(function() {
                            window.location.href ='" .$this->generateUrl('infoAdicional_check', array('id' => $id)) . "';
                        }, 2000);
                </script>";

                //    return $this->redirect($this->generateUrl('infoAdicional_checkform', array('id' => $id)));                    
                }
            }

            return $this->render('TesisAdminBundle:InfoAdicional:edit-infoAdicional-form.html.twig', array(
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

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:InfoAdicional')->findOneBy(
                array('idEstudiante' => $session->get('user')->getId()));

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


}
