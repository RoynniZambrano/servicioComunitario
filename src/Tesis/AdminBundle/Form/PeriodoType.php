<?php

namespace Tesis\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PeriodoType extends AbstractType
{


    private $formtype;

    /*constructor que establece si el cronograma se va a crear o a editar*/
    public function __construct($type){
        $this->formtype = $type;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options){

        if ($this->formtype == 'check' ) { 


            $builder
                ->add('nombre','text', array('label' => 'Nombre', 'disabled' =>'true', 'required' => false))
                ->add('fechaInicio', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha de inicio', 'widget' => 'single_text', 'required' => false, 'attr' => array('placeholder' => 'dd-MM-yyyy', 'disabled' =>'true')))
                ->add('fechaFin', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha de culminación', 'widget' => 'single_text', 'required' => false, 'attr' => array('placeholder' => 'dd-MM-yyyy', 'disabled' =>'true')))
                ->add('comentario','textarea', array('label' => 'Comentario', 'required' => false,
                    'attr' => array('placeholder' => '¿algo que agregar?', 'rows' => '10', 'disabled' =>'true'))) 
                //->add('personas', 'text', array('label' => 'Total personas atendidas', 'disabled' =>'true', 'required' => false))
                //->add('horas', 'text', array('label' => 'Total horas cumplidas', 'disabled' =>'true', 'required' => false))
                ->add('actividadActividad', 'entity', array('class' => 'TesisAdminBundle:Actividad','property' => 'nombre',
                 'label' => 'Actividades', 'disabled' =>'true','multiple'=>true, 'required' => false,
                 'attr' => array('size' => '15')))
                ->add('calificacion','choice', array('choices' => array('aprobado' => 'Aprobado', 'por evaluar' => 'Por Evaluar', 'no aprobado' => 'No Aprobado'),
                'label' => 'Calificación', 'disabled' =>'true', 'required' => false))                                
                ->add('observacion','textarea', array('label' => 'Observación', 'required' => false, 
                    'attr' => array('placeholder' => '¿algun observación respecto a la calificación?', 'rows' => '10', 'disabled' =>'true')))
             ;
             
        }
        else if ($this->formtype == 'new'){

            $builder
                ->add('nombre','text', array('label' => 'Nombre'))
                ->add('fechaInicio', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha de inicio', 'widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy')))
                ->add('fechaFin', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha de culminación', 'widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy')))
                ->add('comentario','textarea', array('label' => 'Comentario', 
                    'attr' => array('placeholder' => '¿algo que agregar?', 'rows' => '10'))) 
              //  ->add('personas', 'text', array('label' => 'Total personas atendidas'))
              //  ->add('horas', 'text', array('label' => 'Total horas cumplidas'))
                ->add('actividadActividad', 'entity', array('class' => 'TesisAdminBundle:Actividad',
                    'property' => 'nombre', 'label' => 'Actividades','multiple'=>true,
                    'attr' => array('size' => '15')))
            ;

        }else if ($this->formtype == 'edit_student'){
        
            $builder
                ->add('nombre','text', array('label' => 'Nombre'))
                ->add('fechaInicio', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha de inicio', 'widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy')))
                ->add('fechaFin', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha de culminación', 'widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy')))
                ->add('comentario','textarea', array('label' => 'Comentario', 
                    'attr' => array('placeholder' => '¿algo que agregar?', 'rows' => '10'))) 
              //  ->add('personas', 'text', array('label' => 'Total personas atendidas'))
              //  ->add('horas', 'text', array('label' => 'Total horas cumplidas'))
                ->add('actividadActividad', 'entity', array('class' => 'TesisAdminBundle:Actividad',
                    'property' => 'nombre', 'label' => 'Actividades','multiple'=>true,
                    'attr' => array('size' => '15')))
                ->add('calificacion','choice', array('choices' => array('aprobado' => 'Aprobado', 'por evaluar' => 'Por Evaluar', 'no aprobado' => 'No Aprobado'),
                'label' => 'Calificación', 'disabled' =>'true'))                                
                ->add('observacion','textarea', array('label' => 'Observación', 
                    'attr' => array('placeholder' => '¿algun observación respecto a la calificación?', 'rows' => '10', 'disabled' =>'true')))
             ;
        
        }else if ($this->formtype == 'edit_tutor'){
        
            $builder
                ->add('nombre','text', array('label' => 'Nombre', 'disabled' => true))
                ->add('fechaInicio', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha de inicio', 'widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy', 'disabled' =>'true')))
                ->add('fechaFin', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha de culminación', 'widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy', 'disabled' =>'true')))
                ->add('comentario','textarea', array('label' => 'Comentario', 
                    'attr' => array('placeholder' => '¿algo que agregar?', 'rows' => '10', 'disabled' =>'true'))) 
              //  ->add('personas', 'text', array('label' => 'Total personas atendidas', 'disabled' =>'true'))
              //  ->add('horas', 'text', array('label' => 'Total horas cumplidas', 'disabled' =>'true'))
                ->add('actividadActividad', 'entity', array('class' => 'TesisAdminBundle:Actividad',
                    'property' => 'nombre', 'label' => 'Actividades', 'disabled' =>'true','multiple'=>true,
                    'attr' => array('size' => '15'))) 
                ->add('calificacion','choice', array('choices' => array('aprobado' => 'Aprobado', 'por evaluar' => 'Por Evaluar', 'no aprobado' => 'No Aprobado'),
                'label' => 'Calificación'))                                
                ->add('observacion','textarea', array('label' => 'Observación', 
                    'attr' => array('placeholder' => '¿algun observación respecto a la calificación?', 'rows' => '10')))
             ;

        }

    }   
    

    /**
     * @return string
     */
    public function getName()
    {
        return 'tesis_adminbundle_periodo';
    }
}
