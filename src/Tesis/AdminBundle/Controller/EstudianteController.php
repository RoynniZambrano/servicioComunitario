<?php

namespace Tesis\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tesis\AdminBundle\Entity\Estudiante;
use Tesis\AdminBundle\Entity\Informe;
use Tesis\AdminBundle\Form\EstudianteType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;
use Zend\Soap;

class EstudianteController extends Controller
{

    // Recibe la peticion de creacion de estudiante 
    public function newAction(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            return $this->render('TesisAdminBundle:Estudiante:new-student.html.twig',$options);
        }
            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }

    
    // Crea un nuevo formulario de estudiante
    public function newformAction(Request $request){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $em = $this->getDoctrine()->getManager();
            $entity = new Estudiante();
            $form = $this->createForm(new EstudianteType('new'), $entity, array(
                'action' => $this->generateUrl('student_newform'),
                'method' => 'POST',
            ));

            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);

                $informe = new Informe();
                $informe->setIdEstudiante($entity);
                $informe->setCalificacion("por evaluar");
                $informe->setCalificacion(".");
                $em->persist($informe);
                $em->flush();

                return $this->redirect($this->generateUrl('student_checkform', array('id' => $entity->getId()))); 
            }

             return $this->render('TesisAdminBundle:Estudiante:new-student-form.html.twig',
                array('form' => $form->createView()));           
        }
          return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }    




    // formulario (disabled) para consultar usuario
    public function checkformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Estudiante')->findOneBy(
            array('idEstudiante' => $id));

            $cedula = $entity->getCedula();
        
            $options['action'] = $this->generateUrl('student_checkform', array('id' => $id));
            $options['method'] = 'POST';
            $form = $this->createForm(new EstudianteType('check'), $entity, $options);

            
            $form->add('edit', 'submit', array('label' => 'Editar'));
            $form->add('back', 'submit', array('label' => 'Regresar'));
        
            $form->handleRequest($request);
            if ($form->get('edit')->isClicked()) {
               return $this->redirect($this->generateUrl('user_edit', array('cedula' => $cedula)));
            }
            if ($form->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('user_list'));
            }  
            
             return $this->render('TesisAdminBundle:Estudiante:check-student-form.html.twig',
                array('form' => $form->createView()));           
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function editformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Estudiante')->findOneBy(
                array('idEstudiante' => $id));

                $user = $session->get('user');

                $cedula = $entity->getCedula();
                $options['action'] = $this->generateUrl('student_editform', array('id' => $id));
                $options['method'] = 'POST';

                if ($user->getCedula() == $cedula)
                    $editForm = $this->createForm(new EstudianteType('edit_student'), $entity, $options);
                else
                    $editForm = $this->createForm(new EstudianteType('edit_other'), $entity, $options);
                
                //$editForm = $this->createForm(new EstudianteType('edit'), $entity, $options);
                
                $editForm->add('editpass', 'submit', array('label' => 'Contraseña'));                            
                $editForm->handleRequest($request);
                
                if ($editForm->get('editpass')->isClicked()) {
                    return $this->redirect($this->generateUrl('user_editpass', array('cedula' => $cedula)));
                }                

            if ($editForm->isValid()) {

                /*en caso de que un usuario este editando su propia informacion, la actualiza**/
                if($session->get('user')->getId() == $id){
                    $session->clear();
                    $session->set('user', $entity);
                }
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($entity);
                    $em->flush();

            return $this->redirect($this->generateUrl('student_checkform', array('id' => $id))); 
            }

            return $this->render('TesisAdminBundle:Estudiante:edit-student-form.html.twig', array(
                'entity'      => $entity,
                'edit_form'   => $editForm->createView(),
                'user' => $user,
                'id' => $id,
            ));
        }
        /*en caso de que sea un invitado, deniega la accion*/
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function deleteAction(Request $request){

        $session = $this->getRequest()->getSession();
        
        /*si es un usuario estandar o un admin, prosigue con la accion*/
        if($session->has('user')){

            foreach ($_POST as $clave=>$valor){
               $cedula = $valor['cedula'];
             }

            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository('TesisAdminBundle:Estudiante')->findOneBy(
                array('cedula' => $cedula));

            $informe = $em->getRepository('TesisAdminBundle:Informe')->findOneBy(
                array('idEstudiante' => $entity->getId()));


            try {
                $em->remove($informe);
                $em->flush();
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


    public function editpassformAction(Request $request, $cedula = null){

        $session = $this->getRequest()->getSession();
        
        /*si es un usuario estandar o un admin, prosigue con la accion*/
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Estudiante')->findOneBy(
                array('cedula' => $cedula ));

                $cedula = $entity->getCedula();
                $id = $entity->getId();

            $options['action'] = $this->generateUrl('student_editpassform', array('cedula' => $cedula));
            $options['method'] = 'POST';
            $editForm = $this->createForm(new EstudianteType('editpass'), $entity, $options);
            $editForm->add('back', 'submit', array('label' => 'Regresar'));
            $editForm->handleRequest($request);

            if ($editForm->get('back')->isClicked()) {
                return $this->redirect($this->generateUrl('user_edit', array('cedula' => $cedula)));
            }

            if ($editForm->isValid()) {

                /*en caso de que un usuario este editando su propia informacion, la actualiza**/
                if($session->get('user')->getCedula() == $cedula){
                    $session->clear();
                    $session->set('user', $entity);
                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('student_checkform', array('id' => $id))); 
            }

            $user = $session->get('user');
            return $this->render('TesisAdminBundle:Estudiante:editpass-student-form.html.twig', array(
                'entity'      => $entity,
                'edit_form'   => $editForm->createView(),
                'user' => $user,
            ));
        }
        /*en caso de que sea un invitado, deniega la accion*/
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }    


}



