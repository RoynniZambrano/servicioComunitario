<?php

namespace Tesis\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tesis\AdminBundle\Entity\Profesor;
use Tesis\AdminBundle\Form\UsuarioType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;
use Zend\Soap;


use Tesis\AdminBundle\Entity\Date;
use Tesis\AdminBundle\Form\DateType;


class UsuarioController extends Controller
{


    // pagina principal del panel de administracion
    public function indexAction(){	

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $options['user'] = $session->get('user');
            return $this->render('TesisAdminBundle:Main:index.html.twig', $options);
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }

    // Recibe la peticion de creacion de usuario 
    public function newAction(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            return $this->render('TesisAdminBundle:Usuario:new-user.html.twig',$options);
        }

            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }




    // Crea un nuevo formulario de usuario
    public function newformAction(Request $request){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = new Profesor();

            $form = $this->createForm(new UsuarioType('new'), $entity, array(
                'action' => $this->generateUrl('user_newform'),
                'method' => 'POST',
            ));

            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
                
                echo 
                "<script>
                    bootbox.alert('El profesor ha sido creado exitosamente');
                        setTimeout(function() {
                            window.location.href ='" .$this->generateUrl('user_check', array('cedula' => $entity->getCedula())) . "';
                        }, 2000);
                </script>";
              //  return $this->redirect($this->generateUrl('user_checkform', array('id' => $entity->getId()))); 
            }

             return $this->render('TesisAdminBundle:Usuario:new-user-form.html.twig',
                array('form' => $form->createView()));                        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');

    }    



    // pagina para listar todos los usuarios en una tabla    
    public function listAction(){

            $session = $this->getRequest()->getSession();

            if($session->has('user')){

                $options['user'] = $session->get('user');
                   
                $em = $this->getDoctrine()->getManager();
                $qb = $em->createQueryBuilder();
                $usuarios = $em->getRepository('TesisAdminBundle:Profesor')->findAll();
                $options['usuarios'] = $usuarios;

                $qb = $em->createQueryBuilder();
                $estudiantes = $em->getRepository('TesisAdminBundle:Estudiante')->findAll(); 
                $options['estudiantes'] = $estudiantes;                              

                return $this->render('TesisAdminBundle:Usuario:list-user.html.twig',$options);
            }

            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }

    // consultar cuenta
   public function checkAction($cedula = null){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $options['user'] = $session->get('user');
            $options['cedula'] = $cedula;

            $em = $this->getDoctrine()->getManager();
            $selected = $em->getRepository('TesisAdminBundle:Profesor')->findOneBy(
                array('cedula' => $cedula));

            if (!$selected) {
                $selected = $em->getRepository('TesisAdminBundle:Estudiante')->findOneBy(
                array('cedula' => $cedula));
                $options['id'] = $selected->getId();
                return $this->render('TesisAdminBundle:Estudiante:check-student.html.twig',$options);
            }else{
                $options['id'] = $selected->getId();
                return $this->render('TesisAdminBundle:Usuario:check-user.html.twig',$options);
            }
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }
   


    // formulario (disabled) para consultar usuario
    public function checkformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Profesor')->findOneBy(
            array('idProfesor' => $id));

            $cedula = $entity->getCedula();
            $options['action'] = $this->generateUrl('user_checkform', array('id' => $id));
            $options['method'] = 'POST';
            $form = $this->createForm(new UsuarioType('check'), $entity, $options);
            $form->add('edit', 'submit', array('label' => 'Editar'));
            $form->add('back', 'submit', array('label' => 'Regresar'));
        
            $form->handleRequest($request);
            if ($form->get('edit')->isClicked()) {
               return $this->redirect($this->generateUrl('user_edit', array('cedula' => $cedula)));
            }  
            if ($form->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('user_list'));
            }  


             return $this->render('TesisAdminBundle:Usuario:check-user-form.html.twig',
                array('form' => $form->createView()));           
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }           


    // editar cuenta
   public function editAction($cedula = null){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            $options['cedula'] = $cedula;
        
            $em = $this->getDoctrine()->getManager();
            $selected = $em->getRepository('TesisAdminBundle:Profesor')->findOneBy(
                array('cedula' => $cedula));

            if (!$selected) {
                $selected = $em->getRepository('TesisAdminBundle:Estudiante')->findOneBy(
                array('cedula' => $cedula));
                $options['id'] = $selected->getId();
                return $this->render('TesisAdminBundle:Estudiante:edit-student.html.twig',$options);
            }else{
                $options['id'] = $selected->getId();
                return $this->render('TesisAdminBundle:Usuario:edit-user.html.twig',$options);
            }
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    public function editformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        /*si es un usuario estandar o un admin, prosigue con la accion*/
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Profesor')->findOneBy(
                array('idProfesor' => $id));

                $cedula = $entity->getCedula();
                $options['action'] = $this->generateUrl('user_editform', array('id' => $id));
                $options['method'] = 'POST';

                $user = $session->get('user');

                if ($user->getPerfil() == 'coordinador de servicio comunitario')
                    $editForm = $this->createForm(new UsuarioType('edit_coordsc'), $entity, $options);
                else
                    $editForm = $this->createForm(new UsuarioType('edit_other'), $entity, $options);
                
                //$editForm = $this->createForm(new UsuarioType('edit'), $entity, $options);
                
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

                echo 
                "<script>
                    bootbox.alert('Los cambios se han guardado con éxito');
                        setTimeout(function() {
                            window.location.href ='" .$this->generateUrl('user_check', array('cedula' => $entity->getCedula())) . "';
                        }, 2000);
                </script>";

                //return $this->redirect($this->generateUrl('user_checkform', array('id' => $id)));                    

            }

            if ($user->getCedula() == $cedula)
                $same = 'true';
            else
                $same = 'false';

            return $this->render('TesisAdminBundle:Usuario:edit-user-form.html.twig', array(
                'entity'      => $entity,
                'edit_form'   => $editForm->createView(),
                'user' => $user,
                'id' => $id,
                'same' => $same,
            ));
        }
        /*en caso de que sea un invitado, deniega la accion*/
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }

    public function deleteAction(Request $request){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            foreach ($_POST as $clave=>$valor){
               $cedula = $valor['cedula'];
             }

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Profesor')->findOneBy(
                array('cedula' => $cedula));

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

    // editar clave
   public function editpassAction($cedula = null){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            $options['cedula'] = $cedula;
        
            $em = $this->getDoctrine()->getManager();
            $selected = $em->getRepository('TesisAdminBundle:Profesor')->findOneBy(
                array('cedula' => $cedula));

            if (!$selected) 
                return $this->render('TesisAdminBundle:Estudiante:editpass-student.html.twig',$options);
                return $this->render('TesisAdminBundle:Usuario:editpass-user.html.twig',$options);
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function editpassformAction(Request $request, $cedula = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Profesor')->findOneBy(
                array('cedula' => $cedula));

            $cedula = $entity->getCedula();
            $id = $entity->getId();

            $options['action'] = $this->generateUrl('user_editpassform', array('cedula' => $entity->getCedula()));
            $options['method'] = 'POST';
            $editForm = $this->createForm(new UsuarioType('editpass'), $entity, $options);
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
                
                echo 
                "<script>
                    bootbox.alert('Los cambios se han guardado con éxito');
                        setTimeout(function() {
                            window.location.href ='" .$this->generateUrl('user_check', array('cedula' => $entity->getCedula())) . "';
                        }, 2000);
                </script>";

              //  return $this->redirect($this->generateUrl('user_checkform', array('id' => $id)));
            }

            $user = $session->get('user');
            return $this->render('TesisAdminBundle:Usuario:editpass-user-form.html.twig', array(
                'entity'      => $entity,
                'edit_form'   => $editForm->createView(),
                'user' => $user,
            ));
        }
        /*en caso de que sea un invitado, deniega la accion*/
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    // cerrar sesion
    public function logoutAction(){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $session->clear();
            return $this->redirect($this->generateUrl('tesis_sc_homepage'));
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }

}


        /* llamadas a los servicios web **/
        
	    //$client = new SoapClient("http://localhost:8000/app_dev.php/api/soap?wsdl");
		//$response = $client->check('Chuck');
		//var_dump($response);

		//$client = new Zend\Soap\Client("http://localhost:8000/app_dev.php/api/soap?wsdl");


        /*
		$client = new \nusoap_client('http://localhost/TESIS/web/app_dev.php/api/soap?wsdl', true);
		$responseml = $client->call('check', array('name'=>'test@gmail.com'));
	
		$client = new \nusoap_client('http://www.webservicex.com/ValidateEmail.asmx?WSDL', true);
		$responseml = $client->call('IsValidEmail', array('Email'=>'test@gmail.com'));
        **/

