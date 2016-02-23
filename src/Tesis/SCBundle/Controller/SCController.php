<?php

namespace Tesis\SCBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tesis\SCBundle\Entity\Login;
use Tesis\SCBundle\Form\LoginType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;

use Tesis\SCBundle\Utils\AutentificarAlfa;

class SCController extends Controller
{

    // Pagina principal del sistema
    public function indexAction(Request $request){

    	$session = $this->getRequest()->getSession();

        $options['user'] = '';
        if($session->has('user'))
        	$options['user'] = $session->get('user');

 		return $this->render('TesisSCBundle:Default:index.html.twig', $options);
    }

    // Crea el formulario de inicio de sesion
    public function loginformAction(Request $request){

        $bandera = 0;
		$session = $this->getRequest()->getSession();

            $login = new Login();
            $form = $this->createForm(new LoginType(), $login, array(
                'action' => $this->generateUrl('user_loginform'),
                'method' => 'POST',
            ));
            $form->add('submit', 'submit', array('label' => 'Entrar'));

            $form->handleRequest($request);

            if($form->isValid()){
                // consulta si es un profesor
                $repository = $this->getDoctrine()
                ->getRepository('TesisAdminBundle:Profesor');

                $nameLogin = $login->getNameLogin();
                $clave = $login->getClave();

   				$user = $repository->findOneBy(array('nameLogin' => $nameLogin, 'clave' => $clave));

                if (!$user) {
                    $user = $repository->findOneBy(array('nameLogin' => $nameLogin, 'estatus' => "activo"));

                    if ($user) {
                        $form->get('nameLogin')->addError(new FormError('contraseña no valida.'));
                        $bandera = 1;
                    }
                }

                if(!$user){
                     $bandera = 0;

                    // consulta si es un estudiante
                     $repository = $this->getDoctrine()
                        ->getRepository('TesisAdminBundle:Estudiante');

                        $user = $repository->findOneBy(array('nameLogin' => $nameLogin, 'clave' => $clave));


                        if (!$user) {
                            $user = $repository->findOneBy(array('nameLogin' => $nameLogin, 'estatus' => "activo"));

                            if ($user) {
                                $form->get('nameLogin')->addError(new FormError('contraseña no valida.'));
                                $bandera = 1;
                            }
                        }


                        /*
                        validar si es una cuenta alfa valida
                        si es valida lo lleva a completar el formulario
                        sino sigue el transcurso normal
                        */
                        if (!$user) {
                            $alfa = new AutentificarAlfa($nameLogin,$clave);
                            $temp = $alfa->conectarse();

                            if ($temp) {

                                echo 
                                    "<script>
                                        window.location.href ='" .$this->generateUrl('student_new_alfa', array('nameLogin' => $nameLogin, 'clave' => $clave)) . "';
                                    </script>";                       
                            //    return $this->redirect($this->generateUrl('student_new_alfa', array('nameLogin' => $nameLogin, 'clave' => $clave)));
                            }
                        }else
                            $temp=1; // para que no este null y cause error.
 


                    if(!$user && !$temp){  
                        $form->get('nameLogin')->addError(new FormError('usuario no valido.'));
                    }    
                    else if($bandera != 1){

                        $session = $this->getRequest()->getSession();
                        $session->set('user', $user);
                        return new Response('.');
                    }


                }else if ( $bandera != 1){
                    //inicia sesion con los datos del usuario que hizo login
                    $session = $this->getRequest()->getSession();
                    $session->set('user', $user);
                    return new Response('.');
                }
            }

            return $this->render('TesisSCBundle:Main:login-form.html.twig',
                array('form' => $form->createView()));

    }

}