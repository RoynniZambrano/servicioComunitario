<?php

namespace Tesis\AdminBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tesis\AdminBundle\Entity\Estudiante;
use Tesis\AdminBundle\Entity\Profesor;
use Tesis\AdminBundle\Entity\InformeFinal;
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

                // ACTUALIZAR INFORME FINAL 
                $informe = new InformeFinal();
                $informe->setIdEstudiante($entity);
                $informe->setCalificacion("por evaluar");
                $informe->setObservacion(".");
                $em->persist($informe);
                
                $em->flush();

                echo 
                "<script>
                    bootbox.alert('El estudiante ha sido creado exitosamente');
                        setTimeout(function() {
                            window.location.href ='" .$this->generateUrl('user_check', array('cedula' => $entity->getCedula())) . "';
                        }, 2000);
                </script>";
     
              //  return $this->redirect($this->generateUrl('student_checkform', array('id' => $entity->getId()))); 
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
            //$form->add('back', 'submit', array('label' => 'Regresar'));
        
            $form->handleRequest($request);
            if ($form->get('edit')->isClicked()) {
               return $this->redirect($this->generateUrl('user_edit', array('cedula' => $cedula)));
            }
            /*
            if ($form->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('tesis_admin_homepage'));
            }  
            **/
            
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

                echo 
                "<script>
                    bootbox.alert('Los cambios se han guardado con éxito');
                        setTimeout(function() {
                            window.location.href ='" .$this->generateUrl('user_check', array('cedula' => $entity->getCedula())) . "';
                        }, 2000);
                </script>";                    

                //return $this->redirect($this->generateUrl('student_checkform', array('id' => $id))); 
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

                echo 
                "<script>
                    bootbox.alert('Los cambios se han guardado con éxito');
                        setTimeout(function() {
                            window.location.href ='" .$this->generateUrl('user_check', array('cedula' => $entity->getCedula())) . "';
                        }, 2000);
                </script>";


              //  return $this->redirect($this->generateUrl('student_checkform', array('id' => $id))); 
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

 
    public function new_alfaAction($nameLogin = null,$clave = null){

        $session = $this->getRequest()->getSession();

    //    if($session->has('user')){
            $options['user'] = $session->get('user');
          //  $session->get('name');

            $options['nameLogin'] = $session->get('nameLogin');;
            $options['clave'] = $session->get('clave');


          //  $options['nameLogin'] = $nameLogin;
          //  $options['clave'] = $clave;
            return $this->render('TesisAdminBundle:Estudiante:new-student-alfa.html.twig',$options);
      //  }
       //     return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



   // Crea un nuevo formulario para los usuarios alfa que se conectan por primera vez
    public function newform_alfaAction(Request $request,$nameLogin,$clave){

        $session = $this->getRequest()->getSession();
    //    if($session->has('user')){
            $em = $this->getDoctrine()->getManager();
            $estudiante = new Estudiante();
            $estudiante->setNameLogin($nameLogin);
            $estudiante->setClave($clave);

            $form = $this->createForm(new EstudianteType('new_alfa'), $estudiante, array(
                'action' => $this->generateUrl('student_newform_alfa', array('nameLogin' => $nameLogin, 'clave' => $clave)),
                'method' => 'POST',
            ));

            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                foreach ($_POST as $tempo=>$valor){
                    $perfil = $valor['perfil'];
                    $nombre = $valor['nombre'];
                    $apellido = $valor['apellido'];
                    $cedula = $valor['cedula'];
                    $correo = $valor['correo'];
                    $genero = $valor['genero'];
                    $departamento = $valor['departamento'];
                  //  $periodo = $valor['periodo'];
                    $telefono = $valor['telefono'];
                }

                if ($perfil != 'estudiante') {
                    $profesor = new Profesor();
                    $profesor->setPerfil($perfil);
                    $profesor->setNombre($nombre);
                    $profesor->setApellido($apellido);
                    $profesor->setClave($clave);
                    $profesor->setNameLogin($nameLogin);
                    $profesor->setCedula($cedula);
                    $profesor->setCorreo($correo);
                    $profesor->setGenero($genero);
                    $profesor->setDepartamento($departamento);
                  //  $profesor->setPeriodo($periodo);
                    $profesor->setTelefono($telefono);

                    $em->persist($profesor);
                    $em->flush();

                }else{
                    $em->persist($estudiante);
                    $em->flush();
                }    

                echo 
                "<script>
                    bootbox.alert('El usuario ha sido creado exitosamente. inicie sesión nuevamente');
                        setTimeout(function() {
                            window.location.href ='" .$this->generateUrl('tesis_sc_homepage') . "';
                        }, 2000);
                </script>";
     
              //  return $this->redirect($this->generateUrl('student_checkform', array('id' => $entity->getId()))); 
            }

             return $this->render('TesisAdminBundle:Estudiante:new-student-form-alfa.html.twig',
                array('form' => $form->createView()));           
       // }
        //  return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


}
