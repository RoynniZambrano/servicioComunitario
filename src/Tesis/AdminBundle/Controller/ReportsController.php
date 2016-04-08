<?php

namespace Tesis\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Tesis\AdminBundle\Entity\Tutoria;
use Tesis\AdminBundle\Entity\Reporte;
use Tesis\AdminBundle\Form\ReporteType;

class ReportsController extends Controller
{

    public function new_reports1Action(Request $request){

    	$session = $this->getRequest()->getSession();

        $options['user'] = '';
        if($session->has('user')){
        	$options['user'] = $session->get('user');
        
            return $this->render('TesisAdminBundle:Reports:reports1.html.twig', $options);
        }
            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    // Crea el formulario
    public function report1formAction(Request $request){

        $session = $this->getRequest()->getSession();

            $reporte = new Reporte();
            $options['type'] = 'normal';
            $form = $this->createForm(new ReporteType($options), $reporte, array(
                'action' => $this->generateUrl('reports_1pdf'),
                'method' => 'POST',
            ));
            $form->add('submit', 'submit', array('label' => 'Descargar Reporte'));
            $form->handleRequest($request);

            return $this->render('TesisAdminBundle:Reports:reports-form.html.twig',
                array('form' => $form->createView()));

    }



    public function pdf_reports1Action(Request $request){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $user = $session->get('user');
            $options['user'] = $user;

            foreach ($_POST as $clave=>$valor){
               $departamento = $valor['departamento'];
               $periodo = $valor['periodo'];
             }
           

            if ($periodo != "todos") {

                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery("SELECT e1.nombre as nombre, e1.apellido as apellido,
                e1.cedula as cedula, p1.nombre as proyecto 
                FROM TesisAdminBundle:Estudiante e1
                INNER JOIN TesisAdminBundle:Proyecto p1 WITH e1.proyecto = p1.idProyecto
                WHERE e1.sc = :sc AND e1.departamento = :departamento AND e1.periodo = :periodo
                AND e1.estatus = :estatus");
                $query->setParameter('sc', "iniciado");
                $query->setParameter('departamento', $departamento );
                $query->setParameter('periodo', $periodo);
                $query->setParameter('estatus', "activo");
                $entity = $query->execute();

            }else{

                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery("SELECT e1.nombre as nombre, e1.apellido as apellido,
                e1.cedula as cedula, p1.nombre as proyecto, e1.periodo as periodo
                FROM TesisAdminBundle:Estudiante e1
                INNER JOIN TesisAdminBundle:Proyecto p1 WITH e1.proyecto = p1.idProyecto
                WHERE e1.sc = :sc AND e1.departamento = :departamento
                AND e1.estatus = :estatus
                ORDER BY e1.periodo ASC ");
                $query->setParameter('sc', "iniciado");
                $query->setParameter('departamento', $departamento );
                $query->setParameter('estatus', "activo");
                $entity = $query->execute();

            }   


            // crea la vista
            $html = $this->renderView('TesisAdminBundle:Reports:reports1_pdf.html.twig', array(
                'estudiantes' => $entity,
                'departamento' => $departamento,
                'periodo' => $periodo
               ));  

            $tamano = 0;
            $tamano = sizeof($entity);
            if ($tamano <= 0) {
                return $this->render('TesisAdminBundle:Main:nodata.html.twig',  array(
                'urlpath' => 'reports_1'));
            }

            // retorna la vista en pdf.
            return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html,
                array('orientation'=>'Landscape',
                'footer-font-size' => '8', 
                'margin-top' => '10',
                //'footer-left' => 'Generado: [date]. Impulsado por KnpSnappyBundle',
                'footer-line' => true,
                'footer-right' => 'Pagina [page] de [toPage]'
                )),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'attachment;  filename="estudiantes_inscritos_SC.pdf"'
                )
            );

        }
            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    // Crea el formulario
    public function report2formAction(Request $request){

        $session = $this->getRequest()->getSession();

            $reporte = new Reporte();
            $options['type'] = 'normal';
            $form = $this->createForm(new ReporteType($options), $reporte, array(
                'action' => $this->generateUrl('reports_2pdf'),
                'method' => 'POST',
            ));
             $form->add('submit', 'submit', array('label' => 'Descargar Reporte'));
            $form->handleRequest($request);

            return $this->render('TesisAdminBundle:Reports:reports-form.html.twig',
                array('form' => $form->createView()));

    }


    public function new_reports2Action(Request $request){

        $session = $this->getRequest()->getSession();

        $options['user'] = '';
        if($session->has('user')){
            $options['user'] = $session->get('user');
        
            return $this->render('TesisAdminBundle:Reports:reports2.html.twig', $options);

        }
            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function pdf_reports2Action(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $user = $session->get('user');
            $options['user'] = $user;

            foreach ($_POST as $clave=>$valor){
               $departamento = $valor['departamento'];
               $periodo = $valor['periodo'];
             }


            if ($periodo != "todos") {

                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery("SELECT e1.nombre as nombre, e1.apellido as apellido,
                e1.cedula as cedula, p1.nombre as proyecto 
                FROM TesisAdminBundle:Estudiante e1
                INNER JOIN TesisAdminBundle:Proyecto p1 WITH e1.proyecto = p1.idProyecto
                WHERE e1.sc = :sc AND e1.departamento = :departamento AND e1.periodo = :periodo
                AND e1.estatus = :estatus");
                $query->setParameter('sc', "culminado");
                $query->setParameter('departamento', $departamento );
                $query->setParameter('periodo', $periodo);
                $query->setParameter('estatus', "activo");
                $entity = $query->execute();

            }else{

                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery("SELECT e1.nombre as nombre, e1.apellido as apellido,
                e1.cedula as cedula, p1.nombre as proyecto, e1.periodo as periodo 
                FROM TesisAdminBundle:Estudiante e1
                INNER JOIN TesisAdminBundle:Proyecto p1 WITH e1.proyecto = p1.idProyecto
                WHERE e1.sc = :sc AND e1.departamento = :departamento 
                AND e1.estatus = :estatus
                ORDER BY e1.periodo ASC ");
                $query->setParameter('sc', "culminado");
                $query->setParameter('departamento', $departamento );
                $query->setParameter('estatus', "activo");
                $entity = $query->execute();

            }


            // crea la vista
            $html = $this->renderView('TesisAdminBundle:Reports:reports2_pdf.html.twig', array(
                'estudiantes' => $entity,
                'departamento' => $departamento,
                'periodo' => $periodo
               ));  

            $tamano = 0;
            $tamano = sizeof($entity);
            if ($tamano <= 0) {
                return $this->render('TesisAdminBundle:Main:nodata.html.twig',  array(
                'urlpath' => 'reports_2'));
            }


            // retorna la vista en pdf.
            return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html,
                array('orientation'=>'Landscape',
                'footer-font-size' => '8', 
                'margin-top' => '10',
               // 'footer-left' => 'Generado: [date]. Impulsado por KnpSnappyBundle',
                'footer-line' => true,
                'footer-right' => 'Pagina [page] de [toPage]'
                )),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'attachment; filename="estudiantes_aprobados_SC.pdf"'
                )
            );
        }
            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    // Crea el formulario
    public function report3formAction(Request $request){

        $session = $this->getRequest()->getSession();

            $reporte = new Reporte();
            $options['type'] = 'custom';
            $form = $this->createForm(new ReporteType($options), $reporte, array(
                'action' => $this->generateUrl('reports_3pdf'),
                'method' => 'POST',
            ));
             $form->add('submit', 'submit', array('label' => 'Descargar Reporte'));
            $form->handleRequest($request);

            return $this->render('TesisAdminBundle:Reports:reports-formcustom.html.twig',
                array('form' => $form->createView()));

    }

    public function new_reports3Action(Request $request){

        $session = $this->getRequest()->getSession();

        $options['user'] = '';
        if($session->has('user')){
            $options['user'] = $session->get('user');

            return $this->render('TesisAdminBundle:Reports:reports3.html.twig', $options);

        }
            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function pdf_reports3Action(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $user = $session->get('user');
            $options['user'] = $user;

            foreach ($_POST as $clave=>$valor){
               $departamento = $valor['departamento'];
               $periodo = $valor['periodo'];
               $tutor = $valor['profesor'];
             }

            if ($tutor == null ) {
                 
                 if ($periodo != "todos") {

                    $em = $this->getDoctrine()->getEntityManager();
                    $connection = $em->getConnection();
                    $statement = $connection->prepare("SELECT p.id_profesor, p.nombre,
                    p.apellido, p.cedula, t.periodo 
                    FROM tutores_has_profesor tp
                    INNER JOIN tutores t ON tp.tutores_id_tutores = t.id_tutores
                    INNER JOIN profesor p ON tp.profesor_id_profesor = p.id_profesor
                    WHERE p.perfil = :tutor
                    AND t.periodo = :periodo
                    AND p.departamento = :departamento
                    ");                  
                    $statement->bindValue('tutor', "tutor");
                 //   $statement->bindValue('estatus', "activo");
                    $statement->bindValue('periodo', $periodo);
                    $statement->bindValue('departamento', $departamento);
                    $statement->execute();
                    $tutores = $statement->fetchAll();

                 }else{


                    $em = $this->getDoctrine()->getEntityManager();
                    $connection = $em->getConnection();
                    $statement = $connection->prepare("SELECT p.id_profesor, p.nombre,
                    p.apellido, p.cedula , t.periodo 
                    FROM tutores_has_profesor tp
                    INNER JOIN tutores t ON tp.tutores_id_tutores = t.id_tutores
                    INNER JOIN profesor p ON tp.profesor_id_profesor = p.id_profesor
                    WHERE p.perfil = :tutor
                    AND p.departamento = :departamento
                    ORDER BY t.periodo ASC
                    ");                  
                    $statement->bindValue('tutor', "tutor");
                  //  $statement->bindValue('estatus', "activo");
                    $statement->bindValue('departamento', $departamento);
                    $statement->execute();
                    $tutores = $statement->fetchAll();
                }

            }else{


                    $em = $this->getDoctrine()->getEntityManager();
                    $connection = $em->getConnection();
                    $statement = $connection->prepare("SELECT p.id_profesor, p.nombre,
                    p.apellido, p.cedula, t.periodo 
                    FROM tutores_has_profesor tp
                    INNER JOIN tutores t ON tp.tutores_id_tutores = t.id_tutores
                    INNER JOIN profesor p ON tp.profesor_id_profesor = p.id_profesor
                    WHERE p.id_profesor = :id_profesor
                    ORDER BY t.periodo ASC
                    ");                  
                    $statement->bindValue('id_profesor', $tutor);
                    $statement->execute();
                    $tutores = $statement->fetchAll();

            }

            $i = 0;
            $estudiantes = null;
            $proyectos = null;
            foreach ($tutores as $tutor) {

                $query = $em->createQuery("SELECT e1.nombre as nombre, e1.apellido as apellido
                FROM TesisAdminBundle:Estudiante e1  
                WHERE e1.profesor = :profesor
                AND e1.periodo = :periodo");
              //  $query->setParameter('profesor', $tutor->getId());
                $query->setParameter('profesor', $tutor['id_profesor']);
                $query->setParameter('periodo', $tutor['periodo']);
                $estudiantes[$i] = $query->execute();

                $tamano = 0;
                $tamano = sizeof($estudiantes[$i]);
                if ($tamano < 1) {
                    $estudiantes[$i] = null;
                }

                
                $query = $em->createQuery("SELECT p1.nombre as nombre
                FROM TesisAdminBundle:Proyecto p1
                INNER JOIN TesisAdminBundle:Profesor pf1 WITH p1.idProyecto = pf1.proyecto 
                WHERE pf1.idProfesor = :profesor");
               // $query->setParameter('profesor', $tutor->getId());
                $query->setParameter('profesor', $tutor['id_profesor']);
                $proyectos[$i] = $query->execute();   

                $tamano = 0;
                $tamano = sizeof($proyectos[$i]);
                if ($tamano < 1) {
                    $proyectos[$i] = null;
                }  
                                           

                $i++;
            }

            $tamano = 0;
            $tamano = sizeof($tutores);
            if ($tamano <= 0) {
                return $this->render('TesisAdminBundle:Main:nodata.html.twig',  array(
                'urlpath' => 'reports_3'));
            }


            // crea la vista
            $html = $this->renderView('TesisAdminBundle:Reports:reports3_pdf.html.twig', array(
                'tutores' => $tutores,
                'estudiantes' => $estudiantes,
                'proyectos' => $proyectos,
                'departamento' => $departamento,
                'periodo' => $periodo                
               ));  

            // retorna la vista en pdf.
            return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html,
                array('orientation'=>'Landscape',
                'footer-font-size' => '8', 
                'margin-top' => '10',
               // 'footer-left' => 'Generado: [date]. Impulsado por KnpSnappyBundle',
                'footer-line' => true,
                'footer-right' => 'Pagina [page] de [toPage]'
                )),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'attachment; filename="tutores_SC.pdf"'
                )
            );

        }

            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    // Crea el formulario
    public function report4formAction(Request $request){

        $session = $this->getRequest()->getSession();

            $reporte = new Reporte();
            $options['type'] = 'normal';
            $form = $this->createForm(new ReporteType($options), $reporte, array(
                'action' => $this->generateUrl('reports_4pdf'),
                'method' => 'POST',
            ));
             $form->add('submit', 'submit', array('label' => 'Descargar Reporte'));
            $form->handleRequest($request);

            return $this->render('TesisAdminBundle:Reports:reports-form.html.twig',
                array('form' => $form->createView()));

    }



    public function new_reports4Action(Request $request){

        $session = $this->getRequest()->getSession();

        $options['user'] = '';
        if($session->has('user')){
            $options['user'] = $session->get('user');
        
            return $this->render('TesisAdminBundle:Reports:reports4.html.twig', $options);
        }
            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function pdf_reports4Action(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $user = $session->get('user');
            $options['user'] = $user;

            foreach ($_POST as $clave=>$valor){
               $departamento = $valor['departamento'];
               $periodo = $valor['periodo'];

             }

             $em = $this->getDoctrine()->getManager();
           

            if ($periodo != "todos") {

                $query = $em->createQuery("SELECT u1 FROM TesisAdminBundle:Profesor u1  
                WHERE u1.departamento = :departamento AND u1.periodo = :periodo 
                AND u1.perfil = :perfil AND u1.estatus = :estatus");
                $query->setParameter('perfil', "coordinador de proyecto");
                $query->setParameter('departamento', $departamento );
                $query->setParameter('periodo', $periodo);
                $query->setParameter('estatus', "activo");
                $c_proyecto = $query->execute();

                $query = $em->createQuery("SELECT u1 FROM TesisAdminBundle:Profesor u1  
                WHERE u1.departamento = :departamento AND u1.periodo = :periodo 
                AND u1.perfil = :perfil AND u1.estatus = :estatus");
                $query->setParameter('perfil', "coordinador suplente");
                $query->setParameter('departamento', $departamento );
                $query->setParameter('periodo', $periodo);
                $query->setParameter('estatus', "activo");            
                $c_suplente = $query->execute(); 

            }else{

                $query = $em->createQuery("SELECT u1 FROM TesisAdminBundle:Profesor u1  
                WHERE u1.departamento = :departamento  
                AND u1.perfil = :perfil AND u1.estatus = :estatus
                ORDER BY u1.periodo ASC");
                $query->setParameter('perfil', "coordinador de proyecto");
                $query->setParameter('departamento', $departamento );
                $query->setParameter('estatus', "activo");
                $c_proyecto = $query->execute();

                $query = $em->createQuery("SELECT u1 FROM TesisAdminBundle:Profesor u1  
                WHERE u1.departamento = :departamento
                AND u1.perfil = :perfil AND u1.estatus = :estatus
                ORDER BY u1.periodo ASC");
                $query->setParameter('perfil', "coordinador suplente");
                $query->setParameter('departamento', $departamento );
                $query->setParameter('estatus', "activo");            
                $c_suplente = $query->execute(); 


            }

            $proyectos = null;
            $suplentes = null;            

            $tamano = 0;
            $tamano = sizeof($c_proyecto);
            $tamano2 = 0;
            $tamano2 = sizeof($c_suplente);            
            if ($tamano <= 0 && $tamano2 <= 0) {
                return $this->render('TesisAdminBundle:Main:nodata.html.twig',  array(
                'urlpath' => 'reports_4'));
            }


            // crea la vista
            $html = $this->renderView('TesisAdminBundle:Reports:reports4_pdf.html.twig', array(
                'c_proyecto' => $c_proyecto,
                'c_suplente' => $c_suplente,
                'proyectos' => $proyectos,
                'suplentes' => $suplentes,
                'departamento' => $departamento,
                'periodo' => $periodo                  
               ));  

            // retorna la vista en pdf.
            return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html,
                array('orientation'=>'Landscape',
                'footer-font-size' => '8', 
                'margin-top' => '10',
                //'footer-left' => 'Generado: [date]. Impulsado por KnpSnappyBundle',
                'footer-line' => true,
                'footer-right' => 'Pagina [page] de [toPage]'
                )),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'attachment; filename="coordinadores_SC.pdf"'
                )
            );

        }
        
            return $this->render('TesisSCBundle:Main:denegado.html.twig');    
    }


    // Crea el formulario
    public function report5formAction(Request $request){

        $session = $this->getRequest()->getSession();

            $reporte = new Reporte();
            $options['type'] = 'normal';
            $form = $this->createForm(new ReporteType($options), $reporte, array(
                'action' => $this->generateUrl('reports_5pdf'),
                'method' => 'POST',
            ));
             $form->add('submit', 'submit', array('label' => 'Descargar Reporte'));
            $form->handleRequest($request);

            return $this->render('TesisAdminBundle:Reports:reports-form.html.twig',
                array('form' => $form->createView()));

    }  


    public function new_reports5Action(Request $request){

        $session = $this->getRequest()->getSession();

        $options['user'] = '';
        if($session->has('user')){
            $options['user'] = $session->get('user');
        
         return $this->render('TesisAdminBundle:Reports:reports5.html.twig', $options);
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function pdf_reports5Action(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $user = $session->get('user');
            $options['user'] = $user;

            foreach ($_POST as $clave=>$valor){
               $departamento = $valor['departamento'];
               $periodo = $valor['periodo'];
             }


            if ($periodo != "todos") {


                $em = $this->getDoctrine()->getEntityManager();
                $connection = $em->getConnection();
                $statement = $connection->prepare("SELECT p.nombre as nombre_proyecto, p.id_proyecto as id_proyecto, cp.periodo, 
                p1.nombre as nombre_c, p1.apellido as apellido_c, p1.cedula as cedula_c,
                p2.nombre as nombre_s, p2.apellido as apellido_s, p2.cedula as cedula_s
                FROM coordinadores_has_profesor cp
                INNER JOIN proyecto p ON p.id_proyecto = proyecto_id_proyecto
                INNER JOIN profesor p1 ON p1.id_profesor = cp.profesor_id_proyecto
                INNER JOIN profesor p2 ON p2.id_profesor = cp.profesor_id_suplente
                WHERE cp.periodo = :periodo
                AND p.departamento = :departamento
                ");                  
                $statement->bindValue('periodo', $periodo);
                $statement->bindValue('departamento', $departamento);
                $statement->execute();
                $entity = $statement->fetchAll();


            }else{


                $em = $this->getDoctrine()->getEntityManager();
                $connection = $em->getConnection();
                $statement = $connection->prepare("SELECT p.nombre as nombre_proyecto,
                p.id_proyecto as id_proyecto, cp.periodo, 
                p1.nombre as nombre_c, p1.apellido as apellido_c, p1.cedula as cedula_c,
                p2.nombre as nombre_s, p2.apellido as apellido_s, p2.cedula as cedula_s
                FROM coordinadores_has_profesor cp
                INNER JOIN proyecto p ON p.id_proyecto = proyecto_id_proyecto
                INNER JOIN profesor p1 ON p1.id_profesor = cp.profesor_id_proyecto
                INNER JOIN profesor p2 ON p2.id_profesor = cp.profesor_id_suplente
                WHERE p.departamento = :departamento
                ORDER BY cp.periodo ASC
                ");                  
                //$statement->bindValue('periodo', $periodo);
                $statement->bindValue('departamento', $departamento);
                $statement->execute();
                $entity = $statement->fetchAll();

            }

            

            $i = 0;
            foreach ($entity as $proyecto) {
           
                $em = $this->getDoctrine()->getEntityManager();
                $connection = $em->getConnection();
                $statement = $connection->prepare("SELECT pf.nombre, pf.apellido FROM tutores t
                INNER JOIN proyecto p ON p.id_proyecto = t.proyecto_id_proyecto
                INNER JOIN tutores_has_profesor thp ON t.id_tutores = thp.tutores_id_tutores
                INNER JOIN profesor pf ON pf.id_profesor = thp.profesor_id_profesor
                WHERE t.periodo = :periodo
                AND p.id_proyecto = :proyecto
                AND p.departamento = :departamento
                ");                  
                $statement->bindValue('periodo', $proyecto['periodo']);
                $statement->bindValue('proyecto', $proyecto['id_proyecto']);
                $statement->bindValue('departamento', $departamento);
                $statement->execute();
                $tutores[$i] = $statement->fetchAll();



                $em = $this->getDoctrine()->getEntityManager();
                $connection = $em->getConnection();
                $statement = $connection->prepare("SELECT e.nombre, e.apellido FROM laborsc l
                INNER JOIN proyecto p ON p.id_proyecto = l.proyecto_id_proyecto
                INNER JOIN laborsc_has_estudiante lhe ON l.id_laborsc = lhe.laborsc_id_laborsc
                INNER JOIN estudiante e ON e.id_estudiante = lhe.estudiante_id_estudiante
                WHERE l.periodo = :periodo
                AND p.id_proyecto = :proyecto
                AND p.departamento = :departamento
                ");                  
                $statement->bindValue('periodo', $proyecto['periodo']);
                $statement->bindValue('proyecto', $proyecto['id_proyecto']);
                $statement->bindValue('departamento', $departamento);
                $statement->execute();
                $estudiantes[$i] = $statement->fetchAll();                


                $tamano = 0;
                $tamano = sizeof($tutores[$i]);
                if ($tamano <= 0) {
                    $tutores[$i] = null;
                }

                $tamano = 0;
                $tamano = sizeof($estudiantes[$i]);
                if ($tamano <= 0) {
                    $estudiantes[$i] = null;
                }

                $i++;
                
            }
           if ($i == 0) {
                $tutores = null;
            }
        

            $tamano = 0;
            $tamano = sizeof($entity);            
            if ($tamano <= 0) {
                return $this->render('TesisAdminBundle:Main:nodata.html.twig',  array(
                'urlpath' => 'reports_5'));
            }


            // crea la vista
            $html = $this->renderView('TesisAdminBundle:Reports:reports5_pdf.html.twig', array(
                'proyectos' => $entity,
                'tutores' => $tutores,
                'estudiantes' => $estudiantes,
                'departamento' => $departamento,
                'periodo' => $periodo 
               ));  


            // retorna la vista en pdf.
            return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html,
                array('orientation'=>'Landscape',
                'footer-font-size' => '8', 
                'margin-top' => '10',
                //'footer-left' => 'Generado: [date]. Impulsado por KnpSnappyBundle',
                'footer-line' => true,
                'footer-right' => 'Pagina [page] de [toPage]'
                )),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'attachment; filename="proyectos_SC.pdf"'
                )
            );
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }

}    