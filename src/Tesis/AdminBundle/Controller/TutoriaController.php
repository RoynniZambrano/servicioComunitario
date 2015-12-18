<?php

namespace Tesis\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tesis\AdminBundle\Entity\Tutoria;
use Tesis\AdminBundle\Form\TutoriaType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;


/**
 * Tutores controller.
 */
class TutoriaController extends Controller{
 
    public function addAction(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            return $this->render('TesisAdminBundle:Tutoria:add-tutors.html.twig',$options);
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function addformAction(Request $request){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = new Tutoria();

            $form = $this->createForm(new TutoriaType('new'), $entity, array(
                'action' => $this->generateUrl('tutors_addform'),
                'method' => 'POST',
            ));

            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
                return new Response('.'); 
            }

             return $this->render('TesisAdminBundle:Tutoria:add-tutors-form.html.twig',
                array('form' => $form->createView()));                        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');

    }


    // pagina para listar  
    public function listAction(){

            $session = $this->getRequest()->getSession();

            if($session->has('user')){

                $options['user'] = $session->get('user');
                   
                $em = $this->getDoctrine()->getManager();
                $qb = $em->createQueryBuilder();
                $tutorias = $em->getRepository('TesisAdminBundle:Tutoria')->findAll();
                $options['tutorias'] = $tutorias;                        

                return $this->render('TesisAdminBundle:Tutoria:list-tutors.html.twig',$options);
            }

            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }

    // consultar 
    public function checkAction($id = null){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $options['user'] = $session->get('user');

            //$em = $this->getDoctrine()->getManager();
            //$selected = $em->getRepository('TesisAdminBundle:Tutoria')->findOneBy(
            //array('idTutores' => $id));
            //$options['id'] = $selected->getIdTutores();
            
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:Tutoria:check-tutors.html.twig',$options);
        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }
   


    // formulario (disabled) 
    public function checkformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Tutoria')->findOneBy(
                array('idTutores' => $id));

            $options['action'] = $this->generateUrl('tutors_checkform', array('id' => $id));
            $options['method'] = 'POST';
            $form = $this->createForm(new TutoriaType('check'), $entity, $options);
            $form->add('edit', 'submit', array('label' => 'Editar'));
            $form->add('back', 'submit', array('label' => 'Regresar'));            
        
            $form->handleRequest($request);
            if ($form->get('edit')->isClicked()) {
               return $this->redirect($this->generateUrl('tutors_edit', array('id' => $id)));
            }
            if ($form->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('tutors_list'));
            }                   

             return $this->render('TesisAdminBundle:Tutoria:check-tutors-form.html.twig',
                array('form' => $form->createView()));           
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }




    // editar tutores
   public function editAction($id = null){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');

            //$em = $this->getDoctrine()->getManager();
            //$selected = $em->getRepository('TesisAdminBundle:Tutoria')->findOneBy(
            //array('idTutores' => $id));
            //$options['id'] = $selected->getIdTutores();
            
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:Tutoria:edit-tutors.html.twig',$options);

        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    public function editformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Tutoria')->findOneBy(
            array('idTutores' => $id));

            $options['action'] = $this->generateUrl('tutors_editform', array('id' => $id));
            $options['method'] = 'POST';
            $editForm = $this->createForm(new TutoriaType('edit'), $entity, $options); 
            $editForm->add('back', 'submit', array('label' => 'Regresar'));                        
            $editForm->handleRequest($request);  

            if ($editForm->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('tutors_list'));
            } 
                    

            if ($editForm->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
                return $this->redirect($this->generateUrl('tutors_checkform', array('id' => $id)));                    

            }
                $user = $session->get('user');

            return $this->render('TesisAdminBundle:Tutoria:edit-tutors-form.html.twig', array(
                'entity'      => $entity,
                'form'   => $editForm->createView(),
                'user' => $user,
                'id' => $id,
            ));
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


}
