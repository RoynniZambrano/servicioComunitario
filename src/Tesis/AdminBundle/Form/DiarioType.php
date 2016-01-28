<?php

namespace Tesis\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Tesis\AdminBundle\Entity\Cronograma;
use Doctrine\ORM\EntityRepository;

class DiarioType extends AbstractType
{


    private $formtype;

    /*constructor que establece si el diario se va a crear o a editar*/
    public function __construct($options){
        $this->formtype = $options['status'];
        $this->id_estudiante = $options['id'];
        $this->id_proyecto = $options['proyecto'];
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options){

        if ($this->formtype == 'check' ) {   

            $builder
                ->add('fecha', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha', 'widget' => 'single_text', 'required' => false, 'attr' => array('placeholder' => 'dd-MM-yyyy', 'disabled' =>'true')))
                ->add('personal','textarea', array('label' => 'Personal', 'required' => false,
                    'attr' => array('placeholder' => '¿expectativas?, ¿preocupaciones?, ¿miedos?, ¿relaciones con la comunidad?, ¿cómo se enfrentaron, cómo se solventaron?', 'rows' => '10', 'disabled' =>'true')))                
                ->add('fortalezas','textarea', array('label' => 'Fortalezas', 'required' => false,
                    'attr' => array('placeholder' => '¿cuáles?, ¿habría algo que cambiar?, ¿se requieren otros recursos?', 'rows' => '10', 'disabled' =>'true')))                
                ->add('debilidades','textarea', array('label' => 'Debilidades',  'required' => false,
                    'attr' => array('placeholder' => '¿cuáles?, ¿cómo se enfrentaron, cómo se solventaron?', 'rows' => '10', 'disabled' =>'true')))                
                ->add('conclusion','textarea', array('label' => 'Conclusion', 'required' => false,
                    'attr' => array('placeholder' => '¿qué aprendiste en relación a?: aplicación de tus conocimientos, Relaciones con tus compañeros – con tu tutor – con la comunidad, Valores respeto – solidaridad – responsabilidad social', 'rows' => '10', 'disabled' =>'true')))                
                ->add('descripcion','textarea', array('label' => 'Descripción', 'required' => false,
                    'attr' => array('placeholder' => '¿cómo se hizo?, ¿dónde se hizo?', 'rows' => '10', 'disabled' =>'true')))                
                ->add('horaInicio', 'text', array('label' => 'Hora de inicio', 'required' => false, 'attr' => array('placeholder' => 'hh:mm', 'disabled' =>'true')))                                                                                
                ->add('horaFin', 'text', array('required' => false, 'label' => 'Hora de culminacion', 'attr' => array('placeholder' => 'hh:mm', 'disabled' =>'true')))                  
                ->add('personas', 'text', array('label' => 'Total personas atendidas' , 'disabled' =>'true', 'required' => false))
               
                ->add('ninos', 'text', array('label' => 'Niños', 'disabled' =>'true', 'required' => false))
                ->add('adultos', 'text', array('label' => 'Adultos', 'disabled' =>'true', 'required' => false))
                ->add('terceraEdad', 'text', array('label' => 'Tercera edad', 'disabled' =>'true', 'required' => false))
                ->add('discapacidad', 'text', array('label' => 'Discapacidad', 'disabled' =>'true', 'required' => false))

                ->add('horas', 'text', array('label' => 'Total horas cumplidas', 'disabled' =>'true', 'required' => false))                
                ->add('calificacion','choice', array('choices' => array('aprobado' => 'Aprobado', 'por evaluar' => 'Por Evaluar', 'no aprobado' => 'No Aprobado'),
                'label' => 'Calificación', 'disabled' =>'true', 'required' => false))                                
                ->add('observacion','textarea', array('label' => 'Observación', 'required' => false,
                    'attr' => array('placeholder' => '¿algun observación respecto a la calificación?', 'rows' => '10', 'disabled' =>'true')))                           
                ->add('actividadActividad', 'entity', array('class' => 'TesisAdminBundle:Actividad',
                    'property' => 'nombre', 'label' => 'Actividades', 'disabled' =>'true','multiple'=>true, 'required' => false,
                    'attr' => array('size' => '10')))


                ->add('comunidad', 'text', array('attr' => array('placeholder' => '¿comunidad antendida?'),'label' => 'Comunidad', 'required' => false, 'disabled' => true))


                
                ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event)  {
                    $form = $event->getForm();

                        $form->add('proyectoProyecto', 'entity', array(
                            "class"     => "TesisAdminBundle:Proyecto",
                            "property"  => "nombre",
                            'label' => 'Proyecto',
                            'disabled' => true,
                            'required' => false,
                            'query_builder' => function(EntityRepository $er) {
                                return $er->createQueryBuilder('p')
                                    ->where('p.idProyecto = :estudiante')
                                    ->setParameter('estudiante', $this->id_proyecto);
                            },
                        ));
                })
                


                ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event)  {
                    $form = $event->getForm();

                        $form->add('periodoPeriodo', 'entity', array(
                            "class"     => "TesisAdminBundle:Periodo",
                            "property"  => "nombre",
                            'disabled' =>'true',
                            'required' => false,
                            'label' => 'Periodo',
                            'query_builder' => function(EntityRepository $er) {
                                return $er->createQueryBuilder('c')
                                    ->where('c.estudianteEstudiante = :estudiante')
                                    ->setParameter('estudiante', $this->id_estudiante);
                            },
                        ));
                })
           ;

        }
        else if ($this->formtype == 'new'){

            $builder
                ->add('fecha', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha', 'widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy')))
                ->add('personal','textarea', array('label' => 'Personal', 
                    'attr' => array('placeholder' => '¿expectativas?, ¿preocupaciones?, ¿miedos?, ¿relaciones con la comunidad?, ¿cómo se enfrentaron, cómo se solventaron?', 'rows' => '10')))                
                ->add('fortalezas','textarea', array('label' => 'Fortalezas', 
                    'attr' => array('placeholder' => '¿cuáles?, ¿habría algo que cambiar?, ¿se requieren otros recursos?', 'rows' => '10')))                
                ->add('debilidades','textarea', array('label' => 'Debilidades', 
                    'attr' => array('placeholder' => '¿cuáles?, ¿cómo se enfrentaron, cómo se solventaron?', 'rows' => '10')))                
                ->add('conclusion','textarea', array('label' => 'Conclusion', 
                    'attr' => array('placeholder' => '¿qué aprendiste en relación a?: aplicación de tus conocimientos, Relaciones con tus compañeros – con tu tutor – con la comunidad, Valores respeto – solidaridad – responsabilidad social', 'rows' => '10')))                
                ->add('descripcion','textarea', array('label' => 'Descripción', 
                    'attr' => array('placeholder' => '¿cómo se hizo?, ¿dónde se hizo?', 'rows' => '10')))                
                ->add('horaInicio', 'text', array('label' => 'Hora de inicio', 'attr' => array('placeholder' => 'hh:mm')))                                                                                
                ->add('horaFin', 'text', array('label' => 'Hora de culminacion', 'attr' => array('placeholder' => 'hh:mm')))                   
                ->add('horas', 'text', array('label' => 'Total horas cumplidas'))               
                ->add('personas', 'text', array('label' => 'Total personas atendidas'))

                ->add('ninos', 'text', array('attr' => array('placeholder' => '¿cuántos atendieron?'),'label' => 'Niños'))
                ->add('adultos', 'text', array('attr' => array('placeholder' => '¿cuántos atendieron?'),'label' => 'Adultos'))
                ->add('terceraEdad', 'text', array('attr' => array('placeholder' => '¿cuántos atendieron?'),'label' => 'Tercera edad'))
                ->add('discapacidad', 'text', array('attr' => array('placeholder' => '¿cuántos atendieron?'),'label' => 'Discapacidad'))            
                ->add('actividadActividad', 'entity', array('class' => 'TesisAdminBundle:Actividad',
                    'property' => 'nombre', 'label' => 'Actividades','multiple'=>true,
                    'attr' => array('size' => '10')))
        
                ->add('comunidad', 'text', array('attr' => array('placeholder' => '¿comunidad antendida?'),'label' => 'Comunidad'))


                
                ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event)  {
                    $form = $event->getForm();

                        $form->add('proyectoProyecto', 'entity', array(
                            "class"     => "TesisAdminBundle:Proyecto",
                            "property"  => "nombre",
                            'label' => 'Proyecto',
                            'disabled' => true,
                            'query_builder' => function(EntityRepository $er) {
                                return $er->createQueryBuilder('p')
                                    ->where('p.idProyecto = :estudiante')
                                    ->setParameter('estudiante', $this->id_proyecto);
                            },
                        ));
                })
                


                ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event)  {
                    $form = $event->getForm();

                        $form->add('periodoPeriodo', 'entity', array(
                            "class"     => "TesisAdminBundle:Periodo",
                            "property"  => "nombre",
                            'label' => 'Periodo',
                            'query_builder' => function(EntityRepository $er) {
                                return $er->createQueryBuilder('c')
                                    ->where('c.estudianteEstudiante = :estudiante')
                                    ->setParameter('estudiante', $this->id_estudiante);
                            },
                        ));
                })
            
             ;
        }else if ($this->formtype == 'edit_student'){

            $builder
                ->add('fecha', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha', 'widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy')))
                ->add('personal','textarea', array('label' => 'Personal', 
                    'attr' => array('placeholder' => '¿expectativas?, ¿preocupaciones?, ¿miedos?, ¿relaciones con la comunidad?, ¿cómo se enfrentaron, cómo se solventaron?', 'rows' => '10')))                
                ->add('fortalezas','textarea', array('label' => 'Fortalezas', 
                    'attr' => array('placeholder' => '¿cuáles?, ¿habría algo que cambiar?, ¿se requieren otros recursos?', 'rows' => '10')))                
                ->add('debilidades','textarea', array('label' => 'Debilidades', 
                    'attr' => array('placeholder' => '¿cuáles?, ¿cómo se enfrentaron, cómo se solventaron?', 'rows' => '10')))                
                ->add('conclusion','textarea', array('label' => 'Conclusion', 
                    'attr' => array('placeholder' => '¿qué aprendiste en relación a?: aplicación de tus conocimientos, Relaciones con tus compañeros – con tu tutor – con la comunidad, Valores respeto – solidaridad – responsabilidad social', 'rows' => '10')))                
                ->add('descripcion','textarea', array('label' => 'Descripción', 
                    'attr' => array('placeholder' => '¿cómo se hizo?, ¿dónde se hizo?', 'rows' => '10')))                
                ->add('horaInicio', 'text', array('label' => 'Hora de inicio', 'attr' => array('placeholder' => 'hh:mm')))                                                                                
                ->add('horaFin', 'text', array('label' => 'Hora de culminacion', 'attr' => array('placeholder' => 'hh:mm')))                  
                ->add('personas', 'text', array('label' => 'Total personas atendidas'))

                ->add('ninos', 'text', array('attr' => array('placeholder' => '¿cuántos atendieron?'),'label' => 'Niños'))
                ->add('adultos', 'text', array('attr' => array('placeholder' => '¿cuántos atendieron?'),'label' => 'Adultos'))
                ->add('terceraEdad', 'text', array('attr' => array('placeholder' => '¿cuántos atendieron?'),'label' => 'Tercera edad'))
                ->add('discapacidad', 'text', array('attr' => array('placeholder' => '¿cuántos atendieron?'),'label' => 'Discapacidad'))

                ->add('horas', 'text', array('label' => 'Total horas cumplidas'))                
                ->add('calificacion','choice', array('choices' => array('aprobado' => 'Aprobado', 'por evaluar' => 'Por Evaluar', 'no aprobado' => 'No Aprobado'),
                'label' => 'Calificación', 'disabled' =>'true'))                                
                ->add('observacion','textarea', array('label' => 'Observación', 
                    'attr' => array('placeholder' => '¿algun observación respecto a la calificación?', 'rows' => '10', 'disabled' =>'true')))                            
                ->add('actividadActividad', 'entity', array('class' => 'TesisAdminBundle:Actividad',
                    'property' => 'nombre', 'label' => 'Actividades','multiple'=>true,
                    'attr' => array('size' => '10')))


                ->add('comunidad', 'text', array('attr' => array('placeholder' => '¿comunidad antendida?'),'label' => 'Comunidad'))

                
                ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event)  {
                    $form = $event->getForm();

                        $form->add('proyectoProyecto', 'entity', array(
                            "class"     => "TesisAdminBundle:Proyecto",
                            "property"  => "nombre",
                            'label' => 'Proyecto',
                            'disabled' => true,
                            'query_builder' => function(EntityRepository $er) {
                                return $er->createQueryBuilder('p')
                                    ->where('p.idProyecto = :estudiante')
                                    ->setParameter('estudiante', $this->id_proyecto);
                            },
                        ));
                })
                


                ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event)  {
                    $form = $event->getForm();

                        $form->add('periodoPeriodo', 'entity', array(
                            "class"     => "TesisAdminBundle:Periodo",
                            "property"  => "nombre",
                            'label' => 'Periodo',
                            'query_builder' => function(EntityRepository $er) {
                                return $er->createQueryBuilder('c')
                                    ->where('c.estudianteEstudiante = :estudiante')
                                    ->setParameter('estudiante', $this->id_estudiante);
                            },
                        ));
                })
           ;      

        }else if ($this->formtype == 'edit_tutor'){

            $builder
                ->add('fecha', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha', 'widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy', 'disabled' =>'true')))
                ->add('personal','textarea', array('label' => 'Personal', 
                    'attr' => array('placeholder' => '¿expectativas?, ¿preocupaciones?, ¿miedos?, ¿relaciones con la comunidad?, ¿cómo se enfrentaron, cómo se solventaron?', 'rows' => '10', 'disabled' =>'true')))                
                ->add('fortalezas','textarea', array('label' => 'Fortalezas', 
                    'attr' => array('placeholder' => '¿cuáles?, ¿habría algo que cambiar?, ¿se requieren otros recursos?', 'rows' => '10', 'disabled' =>'true')))                
                ->add('debilidades','textarea', array('label' => 'Debilidades', 
                    'attr' => array('placeholder' => '¿cuáles?, ¿cómo se enfrentaron, cómo se solventaron?', 'rows' => '10', 'disabled' =>'true')))                
                ->add('conclusion','textarea', array('label' => 'Conclusion', 
                    'attr' => array('placeholder' => '¿qué aprendiste en relación a?: aplicación de tus conocimientos, Relaciones con tus compañeros – con tu tutor – con la comunidad, Valores respeto – solidaridad – responsabilidad social', 'rows' => '10', 'disabled' =>'true')))                
                ->add('descripcion','textarea', array('label' => 'Descripción', 
                    'attr' => array('placeholder' => '¿cómo se hizo?, ¿dónde se hizo?', 'rows' => '10', 'disabled' =>'true')))                
                ->add('horaInicio', 'text', array('label' => 'Hora de inicio', 'attr' => array('placeholder' => 'hh:mm', 'disabled' =>'true')))                                                                                
                ->add('horaFin', 'text', array('label' => 'Hora de culminacion', 'attr' => array('placeholder' => 'hh:mm', 'disabled' =>'true')))                  
                ->add('personas', 'text', array('label' => 'Total personas atendidas' , 'disabled' =>'true'))

                ->add('horas', 'text', array('label' => 'Total horas cumplidas', 'disabled' =>'true'))                
                ->add('calificacion','choice', array('choices' => array('aprobado' => 'Aprobado', 'por evaluar' => 'Por Evaluar', 'no aprobado' => 'No Aprobado'),
                'label' => 'Calificación'))                                
                ->add('observacion','textarea', array('label' => 'Observación', 
                    'attr' => array('placeholder' => '¿algun observación respecto a la calificación?', 'rows' => '10')))                           
                ->add('actividadActividad', 'entity', array('class' => 'TesisAdminBundle:Actividad',
                    'property' => 'nombre', 'label' => 'Actividades', 'disabled' =>'true','multiple'=>true,
                    'attr' => array('size' => '10')))

                ->add('ninos', 'text', array('attr' => array('placeholder' => '¿cuántos atendieron?'),'label' => 'Niños', 'disabled' =>'true'))
                ->add('adultos', 'text', array('attr' => array('placeholder' => '¿cuántos atendieron?'),'label' => 'Adultos', 'disabled' =>'true'))
                ->add('terceraEdad', 'text', array('attr' => array('placeholder' => '¿cuántos atendieron?'),'label' => 'Tercera edad', 'disabled' =>'true'))
                ->add('discapacidad', 'text', array('attr' => array('placeholder' => '¿cuántos atendieron?'),'label' => 'Discapacidad', 'disabled' =>'true'))                

                ->add('comunidad', 'text', array('attr' => array('placeholder' => '¿comunidad antendida?'),'label' => 'Comunidad', 'disabled' => true))


                
                ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event)  {
                    $form = $event->getForm();

                        $form->add('proyectoProyecto', 'entity', array(
                            "class"     => "TesisAdminBundle:Proyecto",
                            "property"  => "nombre",
                            'label' => 'Proyecto',
                            'disabled' => true,
                            'query_builder' => function(EntityRepository $er) {
                                return $er->createQueryBuilder('p')
                                    ->where('p.idProyecto = :estudiante')
                                    ->setParameter('estudiante', $this->id_proyecto);
                            },
                        ));
                })
                

                ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event)  {
                    $form = $event->getForm();

                        $form->add('periodoPeriodo', 'entity', array(
                            "class"     => "TesisAdminBundle:Periodo",
                            "property"  => "nombre",
                            'disabled' =>'true',
                            'label' => 'Periodo',
                            'query_builder' => function(EntityRepository $er) {
                                return $er->createQueryBuilder('c')
                                    ->where('c.estudianteEstudiante = :estudiante')
                                    ->setParameter('estudiante', $this->id_estudiante);
                            },
                        ));
                })
           ;            
        }    
    }   
    

    /**
     * @return string
     */
    public function getName()
    {
        return 'tesis_adminbundle_diario';
    }
}
