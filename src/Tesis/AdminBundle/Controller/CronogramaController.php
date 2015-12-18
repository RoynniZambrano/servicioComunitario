<?php

namespace Tesis\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tesis\AdminBundle\Entity\Cronograma;
use Tesis\AdminBundle\Form\CronogramaType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;


/**
 * Cronograma controller.
 */
class CronogramaController extends Controller{
 
    public function newAction(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            return $this->render('TesisAdminBundle:Cronograma:new-cronograma.html.twig',$options);
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function newformAction(Request $request){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = new Cronograma();

            $user = $session->get('user');
            $estudiante = $em->getRepository('TesisAdminBundle:Estudiante')->findOneBy(
            array('idEstudiante' => $user->getId()));
            $entity->setEstudianteEstudiante($estudiante);

            $form = $this->createForm(new CronogramaType('new'), $entity, array(
                'action' => $this->generateUrl('cronograma_newform'),
                'method' => 'POST',
            ));

            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $entity->setCalificacion("por evaluar");
                $em->persist($entity);
                $em->flush();
                return new Response('.'); 
            }

             return $this->render('TesisAdminBundle:Cronograma:new-cronograma-form.html.twig',
                array('form' => $form->createView()));                        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');

    }


    // pagina para listar todos los cronogramas en una tabla    
    public function listAction(){

            $session = $this->getRequest()->getSession();

            if($session->has('user')){
                $user = $session->get('user');
                $options['user'] = $user;
            
                $em = $this->getDoctrine()->getManager();
                if ($user->getRol() == "estudiante") {
                   
                    $query = $em->createQuery("SELECT c1 FROM TesisAdminBundle:Cronograma c1 
                    INNER JOIN TesisAdminBundle:Estudiante e1 WITH  c1.estudianteEstudiante = e1.idEstudiante 
                    AND e1.idEstudiante = :estudiante_id");
                    $query->setParameter('estudiante_id', $user->getId());
                    $cronogramas = $query->execute();

                }else if ($user->getRol() == "tutor") {
                    
                    $query = $em->createQuery("SELECT c1 FROM TesisAdminBundle:Cronograma c1 
                    INNER JOIN TesisAdminBundle:Estudiante e1 WITH  c1.estudianteEstudiante = e1.idEstudiante 
                    INNER JOIN TesisAdminBundle:Usuario u1 WITH e1.usuarioUsuario = u1.idUsuario
                    AND u1.idUsuario = :tutor_id");
                    $query->setParameter('tutor_id', $user->getId());
                    $cronogramas = $query->execute();
                   /*
                    SELECT * FROM cronograma c1 INNER JOIN estudiante e1 ON c1.estudiante_id_estudiante = e1.id_estudiante 
                    INNER JOIN usuario u1 ON e1.usuario_id_usuario = u1.id_usuario
                    AND u1.id_usuario = '3';
                    **/
                }else if ($user->getRol() == "coordinador de proyecto") {
                    
                    $query = $em->createQuery("SELECT c1 FROM TesisAdminBundle:Cronograma c1 
                    INNER JOIN TesisAdminBundle:Estudiante e1 WITH  c1.estudianteEstudiante = e1.idEstudiante 
                    INNER JOIN TesisAdminBundle:Proyecto p1 WITH e1.proyectoProyecto = p1.idProyecto
                    INNER JOIN TesisAdminBundle:Usuario u1 WITH p1.coordinador = u1.idUsuario
                    AND u1.idUsuario = :coordinador_id");
                    $query->setParameter('coordinador_id', $user->getId());
                    $cronogramas = $query->execute();

                } else {
                    
                    $cronogramas = $em->getRepository('TesisAdminBundle:Cronograma')->findAll();
                }


                $options['cronogramas'] = $cronogramas;
                return $this->render('TesisAdminBundle:Cronograma:list-cronograma.html.twig',$options);
            }

            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    // consultar 
   public function checkAction($id = null){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $options['user'] = $session->get('user');
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:Cronograma:check-cronograma.html.twig',$options);
        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }
   


    // formulario (disabled) para consultar cronograma
    public function checkformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){
            $user = $session->get('user');
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Cronograma')->findOneBy(
                array('idcronograma' => $id));

            $options['action'] = $this->generateUrl('cronograma_checkform', array('id' => $id));
            $options['method'] = 'POST';
            $form = $this->createForm(new CronogramaType('check'), $entity, $options);
            if ($user->getRol() == "estudiante") 
                $form->add('edit', 'submit', array('label' => 'Editar'));
            else 
                $form->add('edit', 'submit', array('label' => 'Evaluar'));

            $form->add('back', 'submit', array('label' => 'Regresar'));            
        
            $form->handleRequest($request);
            if ($form->get('edit')->isClicked()) {
               return $this->redirect($this->generateUrl('cronograma_edit', array('id' => $id)));
            }
            if ($form->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('cronograma_list'));
            }                   

             return $this->render('TesisAdminBundle:Cronograma:check-cronograma-form.html.twig',
                array('form' => $form->createView()));           
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    // editar cronograma
   public function editAction($id = null){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:Cronograma:edit-cronograma.html.twig',$options);

        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    public function editformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $user = $session->get('user'); 
            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository('TesisAdminBundle:Cronograma')->findOneBy(
                array('idcronograma' => $id));

            $options['action'] = $this->generateUrl('cronograma_editform', array('id' => $id));
            $options['method'] = 'POST';
            if ($user->getRol() == "estudiante") 
                $editForm = $this->createForm(new CronogramaType('edit_student'), $entity, $options); 
            else
                $editForm = $this->createForm(new CronogramaType('edit_tutor'), $entity, $options); 
            
            $editForm->submit($request->request->get($editForm->getName()), false);
            if ($user->getRol() == "estudiante") {
               
                if ($editForm->isValid()) {
                    $entity->setCalificacion("por evaluar");
                    $em->flush();
                    return $this->redirect($this->generateUrl('cronograma_checkform', array('id' => $id)));                    
                }

            }else{

               if ($this->getRequest()->getMethod() == 'POST'){
                    $em->flush();
                    return $this->redirect($this->generateUrl('cronograma_checkform', array('id' => $id)));                    
                }
            }

            return $this->render('TesisAdminBundle:Cronograma:edit-cronograma-form.html.twig', array(
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
               $semana = $valor['semana'];
             }

            $user = $session->get('user'); 
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Cronograma')->findOneBy(
                array('semana' => $semana, 'estudianteEstudiante' => $user->getId() ));

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
