<?php

namespace Tesis\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tesis\AdminBundle\Entity\Diario;
use Tesis\AdminBundle\Form\DiarioType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Diario controller.  // echo $form->getErrorsAsString(1);
 */
class DiarioController extends Controller{
 
    public function newAction(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            return $this->render('TesisAdminBundle:Diario:new-diario.html.twig',$options);
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function newformAction(Request $request){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){

            $user = $session->get('user');
            $em = $this->getDoctrine()->getManager();
            $entity = new Diario();
            $options['id'] = $session->get('user')->getId();
            $options['proyecto'] = $session->get('user')->getProyectoProyecto();
            $options['status'] = 'new';

            $estudiante = $em->getRepository('TesisAdminBundle:Estudiante')->findOneBy(
            array('idEstudiante' => $user->getId()));
            $entity->setEstudianteEstudiante($estudiante);
            $entity->setProyectoProyecto($estudiante->getProyectoProyecto());

            $form = $this->createForm(new DiarioType($options), $entity, array(
                'action' => $this->generateUrl('diario_newform'),
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
    
             return $this->render('TesisAdminBundle:Diario:new-diario-form.html.twig',
                array('form' => $form->createView()));                        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');

    }


    // pagina para listar todos los diarios en una tabla    
    public function listAction(){

            $session = $this->getRequest()->getSession();

            if($session->has('user')){
                $user = $session->get('user');
                $options['user'] = $user;
            
                $em = $this->getDoctrine()->getManager();
                if ($user->getRol() == "estudiante") {
                   
                    $query = $em->createQuery("SELECT d1 FROM TesisAdminBundle:Diario d1  
                    WHERE d1.estudianteEstudiante = :estudiante_id");
                    $query->setParameter('estudiante_id', $user->getId());
                    $diarios = $query->execute();


                }else if ($user->getRol() == "tutor") {
                    
                    $query = $em->createQuery("SELECT d1 FROM TesisAdminBundle:Diario d1 
                    INNER JOIN TesisAdminBundle:Estudiante e1 WITH  d1.estudianteEstudiante = e1.idEstudiante 
                    INNER JOIN TesisAdminBundle:Usuario u1 WITH e1.usuarioUsuario = u1.idUsuario
                    AND u1.idUsuario = :tutor_id");
                    $query->setParameter('tutor_id', $user->getId());
                    $diarios = $query->execute();
   
                }else if ($user->getRol() == "coordinador de proyecto") {
                    
                    $query = $em->createQuery("SELECT d1 FROM TesisAdminBundle:Diario d1 
                    INNER JOIN TesisAdminBundle:Estudiante e1 WITH  d1.estudianteEstudiante = e1.idEstudiante 
                    INNER JOIN TesisAdminBundle:Proyecto p1 WITH e1.proyectoProyecto = p1.idProyecto
                    INNER JOIN TesisAdminBundle:Usuario u1 WITH p1.coordinador = u1.idUsuario
                    AND u1.idUsuario = :coordiandor_id");
                    $query->setParameter('coordinador_id', $user->getId());
                    $diarios = $query->execute();

                } else {
                    
                    $diarios = $em->getRepository('TesisAdminBundle:Diario')->findAll();
                }


                $options['diarios'] = $diarios;
                return $this->render('TesisAdminBundle:Diario:list-diario.html.twig',$options);
            }

            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    // consultar 
   public function checkAction($id = null){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $options['user'] = $session->get('user');
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:Diario:check-diario.html.twig',$options);
        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }
   

    // formulario (disabled) para consultar 
    public function checkformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Diario')->findOneBy(
                array('idDiario' => $id));

            $user = $session->get('user');
            if ($user->getRol()== 'estudiante') {
                $options['proyecto'] = $user->getProyectoProyecto();
                $options['id'] = $user;
            }
            else{
               $options['proyecto'] = $entity->getEstudianteEstudiante()->getProyectoProyecto();
               $options['id'] = $entity->getEstudianteEstudiante();
            }

            $options['status'] = 'check';

            $form = $this->createForm(new DiarioType($options), $entity, array(
                'action' => $this->generateUrl('diario_checkform', array('id' => $id)),
                'method' => 'POST',
            ));


            if ($user->getRol() == "estudiante") 
                $form->add('edit', 'submit', array('label' => 'Editar'));
            else 
                $form->add('edit', 'submit', array('label' => 'Evaluar'));
            
            $form->add('back', 'submit', array('label' => 'Regresar'));            
        
            $form->handleRequest($request);
            if ($form->get('edit')->isClicked()) {
               return $this->redirect($this->generateUrl('diario_edit', array('id' => $id)));
            }
            if ($form->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('diario_list'));
            }                   

             return $this->render('TesisAdminBundle:Diario:check-diario-form.html.twig',
                array('form' => $form->createView()));           
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    // editar diario
   public function editAction($id = null){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');            
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:Diario:edit-diario.html.twig',$options);

        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    public function editformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $user = $session->get('user'); 
            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository('TesisAdminBundle:Diario')->findOneBy(
                array('idDiario' => $id));

            if ($user->getRol() == "estudiante") 
                $options['status'] = 'edit_student'; 
            else
                $options['status'] = 'edit_tutor'; 

            $user = $session->get('user');
            if ($user->getRol()== 'estudiante') {
                $options['proyecto'] = $user->getProyectoProyecto();
                $options['id'] = $user;
            }
            else{
               $options['proyecto'] = $entity->getEstudianteEstudiante()->getProyectoProyecto();
               $options['id'] = $entity->getEstudianteEstudiante();
            }
            
            $editForm = $this->createForm(new DiarioType($options), $entity, array(
                'action' => $this->generateUrl('diario_editform', array('id' => $id)),
                'method' => 'POST',
            ));

            $editForm->submit($request->request->get($editForm->getName()), false);
            if ($user->getRol() == "estudiante") {
               
                if ($editForm->isValid()) {
                    $entity->setCalificacion("por evaluar");
                    $em->flush();
                    return $this->redirect($this->generateUrl('diario_checkform', array('id' => $id)));                    
                }

            }else{

               if ($this->getRequest()->getMethod() == 'POST'){
                    $em->flush();
                    return $this->redirect($this->generateUrl('diario_checkform', array('id' => $id)));                    
                }
            }

            return $this->render('TesisAdminBundle:Diario:edit-diario-form.html.twig', array(
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
               $fecha = $valor['fecha'];
             }

            $em = $this->getDoctrine()->getManager();
        
            $fecha2 = new \DateTime($fecha);
            $fecha2 = $fecha2->format('Y-m-d');
            $entity = $em->getRepository('TesisAdminBundle:Diario')->findOneBy(
                array('fecha' => new \DateTime ($fecha2), 'estudianteEstudiante' => $user->getId() ));

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
