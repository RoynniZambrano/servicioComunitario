<?php

namespace Tesis\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Tesis\AdminBundle\Entity\Actividad;
use Doctrine\ORM\EntityRepository;

class PeriodoType extends AbstractType
{

    public function __construct($options){
        $this->formtype = $options['status'];
        $this->actividades = $options['actividades'];
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

                ->add('actividadActividad', 'entity', 
                    array('class' => 'TesisAdminBundle:Actividad',
                    'choices' => $this->actividades,                    
                    'property' => 'nombre',
                    'label' => 'Actividades',
                    'expanded' => false,
                    'multiple'=>true,
                    'disabled' => true,
                    'required' => false,
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
            
                ->add('actividadActividad', 'entity', 
                    array('class' => 'TesisAdminBundle:Actividad',
                    'property' => 'nombre',
                    'label' => 'Actividades',
                    'multiple'=>true,
                    'group_by' => function($val, $key, $index) {
                        foreach ($this->actividades as $actividad) {
                            if ($actividad->getNombre() == $val->getNombre()){
                                return 'Actividades pertenicientes al Período';
                            } 
                        }
                        return 'Actividades disponible para agregar al Período';
                    },
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
                
                    /*
                ->add('actividadActividad', 'entity', array('class' => 'TesisAdminBundle:Actividad',
                    'property' => 'nombre', 'label' => 'Actividades', 'disabled' =>'true','multiple'=>true,
                    'attr' => array('size' => '15')))
                    */

                ->add('actividadActividad', 'entity', 
                    array('class' => 'TesisAdminBundle:Actividad',
                    'choices' => $this->actividades,                    
                    'property' => 'nombre',
                    'label' => 'Actividades',
                    'expanded' => false,
                    'multiple'=>true,
                    'disabled' => true,
                    'required' => false,
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
