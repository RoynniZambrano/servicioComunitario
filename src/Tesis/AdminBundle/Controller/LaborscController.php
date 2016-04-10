<?php

namespace Tesis\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tesis\AdminBundle\Entity\Laborsc;
use Tesis\AdminBundle\Form\LaborscType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;


/**
 * Laborsc controller.
 */
class LaborscController extends Controller{
 
    public function addAction(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            return $this->render('TesisAdminBundle:Laborsc:add-laborsc.html.twig',$options);
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function addformAction(Request $request){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = new Laborsc();


            $options['status'] = 'new';
            $options['estudiantes'] = null;
            $form = $this->createForm(new LaborscType($options), $entity, array(
                'action' => $this->generateUrl('laborsc_addform'),
                'method' => 'POST',
            ));

            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                
                // activa los estudiantes que tienen tutor y proyecto asignado
                foreach ($_POST as $clave=>$valor){
                    $periodo = $valor['periodo'];
                    $proyecto = $valor['proyectoProyecto'];        
                    $estudiante = $valor['estudianteEstudiante'];

                    foreach ($estudiante as $clave_e=>$valor_r){
                        $selected = null;
                        $selected = $em->getRepository('TesisAdminBundle:Estudiante')->findOneBy(
                        array('idEstudiante' => $valor_r));

                        $selected->setPeriodo($periodo);
                        $selected->setProyecto($proyecto);
                        $selected->setEstatus("iniciado");                        
                        if ($selected->getProfesor() != null) {
                            $selected->setEstatus('activo'); 
                        }
                    } 
                }
                $em->flush(); 
                        
                    echo 
                    "<script>
                        bootbox.alert('La asignación ha sido creado exitosamente', function(result){ window.location.href ='" .$this->generateUrl('laborsc_list') . "' })
                    </script>";                 

                //return new Response('.'); 
            }

             return $this->render('TesisAdminBundle:Laborsc:add-laborsc-form.html.twig',
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
                $laborsc = $em->getRepository('TesisAdminBundle:Laborsc')->findAll();
                $options['tutorias'] = $laborsc;                        

                return $this->render('TesisAdminBundle:Laborsc:list-laborsc.html.twig',$options);
            }

            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }

    // consultar 
    public function checkAction($id = null){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $options['user'] = $session->get('user');
            
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:Laborsc:check-laborsc.html.twig',$options);
        
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }
   


    // formulario (disabled) 
    public function checkformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Laborsc')->findOneBy(
                array('idLaborsc' => $id));
         
            $options['status'] = 'check';
            $options['estudiantes'] = $entity->getEstudianteEstudiante();
            $form = $this->createForm(new LaborscType($options), $entity, array(
                'action' => $this->generateUrl('laborsc_checkform', array('id' => $id)),
                'method' => 'POST',
            ));

            $form->add('edit', 'submit', array('label' => 'Editar'));
            $form->add('back', 'submit', array('label' => 'Regresar'));            
        
            $form->handleRequest($request);
            if ($form->get('edit')->isClicked()) {
               return $this->redirect($this->generateUrl('laborsc_edit', array('id' => $id)));
            }
            if ($form->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('laborsc_list'));
            }                   

             return $this->render('TesisAdminBundle:Laborsc:check-laborsc-form.html.twig',
                array('form' => $form->createView()));           
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }




    // editar tutores
   public function editAction($id = null){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $options['user'] = $session->get('user');
            
            $options['id'] = $id; 
            return $this->render('TesisAdminBundle:Laborsc:edit-laborsc.html.twig',$options);

        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    public function editformAction(Request $request, $id = null){

        $session = $this->getRequest()->getSession();
        
        if($session->has('user')){

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TesisAdminBundle:Laborsc')->findOneBy(
            array('idLaborsc' => $id));

            $options['status'] = 'edit';
            $options['estudiantes'] = $entity->getEstudianteEstudiante();
            $editForm = $this->createForm(new LaborscType($options), $entity, array(
                'action' => $this->generateUrl('laborsc_editform', array('id' => $id)),
                'method' => 'POST',
            ));


            $editForm->add('back', 'submit', array('label' => 'Regresar'));                        
            $editForm->handleRequest($request);  

            if ($editForm->get('back')->isClicked()) {
               return $this->redirect($this->generateUrl('laborsc_list'));
            } 
                    

            if ($editForm->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

            
                // desactiva todos los usuarios pertenecientes a esta asiganción
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery("UPDATE TesisAdminBundle:Estudiante e set e.estatus = :estatus 
                WHERE e.profesor = :proyecto AND e.periodo = :periodo");
                $query->setParameter('estatus', 'inactivo');
                $query->setParameter('proyecto', $entity->getProyectoProyecto()->getIdProyecto());
                $query->setParameter('periodo', $entity->getPeriodo());
                $numUpdated = $query->execute();;
                $em->flush(); // Executes all updates.
                $em->clear(); // Detaches all objects from Doctrine!


                // activa los estudiantes que tienen tutor y proyecto asignado
                foreach ($_POST as $clave=>$valor){
                    $periodo = $valor['periodo'];
                    $proyecto = $valor['proyectoProyecto'];        
                    $estudiante = $valor['estudianteEstudiante'];

                    foreach ($estudiante as $clave_e=>$valor_r){
                        $selected = null;
                        $selected = $em->getRepository('TesisAdminBundle:Estudiante')->findOneBy(
                        array('idEstudiante' => $valor_r));

                        $selected->setPeriodo($periodo);
                        $selected->setProyecto($proyecto);
                        $selected->setEstatus("iniciado");                        
                        if ($selected->getProfesor() != null) {
                            $selected->setEstatus('activo'); 
                        }
                    } 
                }
                $em->flush(); 
                           
                echo 
                "<script>
                    bootbox.alert('Los cambios se han guardado con éxito', function(result){ window.location.href ='" .$this->generateUrl('laborsc_check', array('id' => $id)) . "' })
                </script>";                 


                //return $this->redirect($this->generateUrl('tutors_checkform', array('id' => $id)));                    

            }
                $user = $session->get('user');

            return $this->render('TesisAdminBundle:Laborsc:edit-laborsc-form.html.twig', array(
                'entity'      => $entity,
                'form'   => $editForm->createView(),
                'user' => $user,
                'id' => $id,
            ));
        }
        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


}
