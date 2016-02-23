<?php

namespace Tesis\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tesis\AdminBundle\Entity\Adicionales;
use Tesis\AdminBundle\Form\AdicionalesType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Adicionales controller.  
 */
class AdicionalesController extends Controller{
 
    public function newAction(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            return $this->render('TesisAdminBundle:Adicionales:new-adicionales.html.twig',$options);
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function newformAction(Request $request){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){

            $user = $session->get('user');
            $em = $this->getDoctrine()->getManager();
            $entity = new Adicionales();
            $options['id'] = $session->get('user')->getId();
            $options['status'] = 'new';

            /*
            $estudiante = $em->getRepository('TesisAdminBundle:Estudiante')->findOneBy(
            array('idEstudiante' => $user->getId()));
            $entity->setEstudianteEstudiante($estudiante);
            **/

            $form = $this->createForm(new AdicionalesType($options), $entity, array(
                'action' => $this->generateUrl('adicionales_newform'),
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
                            window.location.href ='" .$this->generateUrl('adicionales_list') . "';
                        }, 2000);
                </script>";


               // return new Response('.'); 
            }
    
             return $this->render('TesisAdminBundle:Adicionales:new-adicionales-form.html.twig',
                array('form' => $form->createView()));                        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');

    }

    // pagina para listar todos los Adicionales en una tabla    
    public function listAction(){

            $session = $this->getRequest()->getSession();

            if($session->has('user')){
                $user = $session->get('user');
                $options['user'] = $user;
            
                $em = $this->getDoctrine()->getManager();
                if ($user->getPerfil() == "estudiante") {

                    $query = $em->createQuery("SELECT r1 FROM TesisAdminBundle:Adicionales r1
                    INNER JOIN TesisAdminBundle:Diario d1 WITH r1.diarioDiario = d1.idDiario
                    WHERE d1.estudianteEstudiante = :estudiante_id");
                    $query->setParameter('estudiante_id', $user->getId());
                    $resultados = $query->execute();

                }else if ($user->getPerfil() == "tutor") {
                    
                    $query = $em->createQuery("SELECT r1 FROM TesisAdminBundle:Adicionales r1
                    INNER JOIN TesisAdminBundle:Diario d1 WITH r1.diarioDiario = d1.idDiario
                    INNER JOIN TesisAdminBundle:Estudiante e1 WITH  d1.estudianteEstudiante = e1.idEstudiante 
                    INNER JOIN TesisAdminBundle:Profesor u1 WITH e1.profesor = u1.idProfesor
                    AND u1.idProfesor = :tutor_id");
                    $query->setParameter('tutor_id', $user->getId());
                    $resultados = $query->execute();
   
                }else if (($user->getPerfil() == "coordinador de proyecto")
                || ($user->getPerfil() == "coordinador suplente") ) {
                    
                    $query = $em->createQuery("SELECT r1 FROM TesisAdminBundle:Adicionales r1
                    INNER JOIN TesisAdminBundle:Diario d1 WITH r1.diarioDiario = d1.idDiario
                    INNER JOIN TesisAdminBundle:Estudiante e1 WITH  d1.estudianteEstudiante = e1.idEstudiante 
                    INNER JOIN TesisAdminBundle:Proyecto p1 WITH e1.proyectoProyecto = p1.idProyecto
                    INNER JOIN TesisAdminBundle:Profesor u1 WITH p1.coordinador = u1.idProfesor
                    AND u1.idProfesor = :coordiandor_id");
                    $query->setParameter('coordinador_id', $user->getId());
                    $resultados = $query->execute();

                } else {
                    
                    $resultados = $em->getRepository('TesisAdminBundle:Adicionales')->findAll();
                }


                $options['resultados'] = $resultados;
                return $this->render('TesisAdminBundle:Adicionales:list-adicionales.html.twig',$options);
            }

            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }

    // consultar 
   public function checkAction($id = null){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $options['user'] = $session->get('user');
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:Adicionales:check-adicionales.html.twig',$options);
        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }
   

    // formulario (disabled) para consultar 
    public function checkformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $user = $session->get('user');
            $entity = $em->getRepository('TesisAdminBundle:Adicionales')->findOneBy(
                array('idAdicionales' => $id));

            if ($user->getPerfil()== 'estudiante') {
                $options['id'] = $user;
            }
            else{
               $options['id'] = $entity->getDiarioDiario()->getEstudianteEstudiante();
            }

            $options['status'] = 'check';

            $form = $this->createForm(new AdicionalesType($options), $entity, array(
                'action' => $this->generateUrl('adicionales_checkform', array('id' => $id)),
                'method' => 'POST',
            ));

            if ($user->getPerfil() == "estudiante"){
            $form->add('edit', 'submit', array('label' => 'Editar'));
            }


            $form->add('back', 'submit', array('label' => 'Regresar'));            
        
            $form->handleRequest($request);
            if ($user->getPerfil() == "estudiante"){
                if ($form->get('edit')->isClicked()) {
                   return $this->redirect($this->generateUrl('adicionales_edit', array('id' => $id)));
                }
            }
            if ($form->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('adicionales_list'));
            }                   

             return $this->render('TesisAdminBundle:Adicionales:check-adicionales-form.html.twig',
                array('form' => $form->createView(), 'user' => $user));           
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    // editar diario
   public function editAction($id = null){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');            
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:Adicionales:edit-adicionales.html.twig',$options);

        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    public function editformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $user = $session->get('user'); 
            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository('TesisAdminBundle:Adicionales')->findOneBy(
                array('idAdicionales' => $id));            

            if ($user->getPerfil()== 'estudiante') {
                $options['id'] = $user;
            }
            else{
               $options['id'] = $entity->getDiarioDiario()->getEstudianteEstudiante();
            }
            $options['status'] = 'edit'; 


            $editForm = $this->createForm(new AdicionalesType($options), $entity, array(
                'action' => $this->generateUrl('adicionales_editform', array('id' => $id)),
                'method' => 'POST',
            ));

            $editForm->submit($request->request->get($editForm->getName()), false);
               
            if ($editForm->isValid()) {
                $em->flush();

                echo 
                "<script>
                    bootbox.alert('Los cambios se han guardado con éxito');
                        setTimeout(function() {
                            window.location.href ='" .$this->generateUrl('adicionales_check', array('id' => $id)) . "';
                        }, 2000);
                </script>";

              // return $this->redirect($this->generateUrl('adicionales_checkform', array('id' => $id)));                    
            }

            return $this->render('TesisAdminBundle:Adicionales:edit-adicionales-form.html.twig', array(
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
               $nombre = $valor['nombre'];
               $diario = $valor['diarioDiario'];
             }

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Adicionales')->findOneBy(
                array('nombre' => $nombre, 'diarioDiario' => $diario));


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