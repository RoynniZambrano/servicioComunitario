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

		$session = $this->getRequest()->getSession();

            $login = new Login();
            $form = $this->createForm(new LoginType(), $login, array(
                'action' => $this->generateUrl('user_loginform'),
                'method' => 'POST',
            ));
            $form->add('submit', 'submit', array('label' => 'Entrar'));

            $form->handleRequest($request);

            if($form->isValid()){
                //verifica si el correo esta registrado
                $repository = $this->getDoctrine()
                ->getRepository('TesisAdminBundle:Usuario');

   				$user = $repository->findOneBy(array('correo' => $login->getCorreo(), 'clave' => $login->getClave()));

                if(!$user){

                     $repository = $this->getDoctrine()
                        ->getRepository('TesisAdminBundle:Estudiante');

                        $user = $repository->findOneBy(array('correo' => $login->getCorreo(), 'clave' => $login->getClave()));

                    if(!$user)  
                        $form->get('correo')->addError(new FormError('Correo o contrasena invalida.'));
                    else {

                        $session = $this->getRequest()->getSession();
                        $session->set('user', $user);
                        return new Response('.');
                    }


                }else{
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
