<?php

namespace Tesis\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CronogramaType extends AbstractType
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
                ->add('semana','choice', array('choices' => array('semana1' => 'Semana 1',
                    'semana2' => 'Semana 2', 'semana3' => 'Semana 3', 'semana4' => 'Semana 4', 'semana5' => 'Semana 5',
                    'semana6' => 'Semana 6', 'semana7' => 'Semana 7', 'semana8' => 'Semana 8', 'semana9' => 'Semana 9',
                    'semana10' => 'Semana 10', 'semana11' => 'Semana 11', 'semana12' => 'Semana 12', 'semana13' => 'Semana 13',
                    'semana14' => 'Semana 14', 'semana15' => 'Semana 15', 'semana16' => 'Semana 16', 'semana17' => 'Semana 17',
                    'semana18' => 'Semana 18', 'semana19' => 'Semana 19', 'semana20' => 'Semana 20', 'semana21' => 'Semana 21',
                    'semana22' => 'Semana 22', 'semana23' => 'Semana 23', 'semana24' => 'Semana 24', 'semana25' => 'Semana 25',
                    'semana26' => 'Semana 26', 'semana27' => 'Semana 27', 'semana28' => 'Semana 28', 'semana29' => 'Semana 29',
                    'semana30' => 'Semana 30', 'semana31' => 'Semana 31', 'semana32' => 'Semana 32'), 'label' => 'Semana', 'disabled' =>'true', 'required' => false))
                ->add('fechaInicio', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha de inicio', 'widget' => 'single_text', 'required' => false, 'attr' => array('placeholder' => 'dd-MM-yyyy', 'disabled' =>'true')))
                ->add('fechaFin', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha de culminación', 'widget' => 'single_text', 'required' => false, 'attr' => array('placeholder' => 'dd-MM-yyyy', 'disabled' =>'true')))
                ->add('comentario','textarea', array('label' => 'Comentario', 'required' => false,
                    'attr' => array('placeholder' => '¿algo que agregar?', 'rows' => '10', 'disabled' =>'true'))) 
                ->add('personas', 'text', array('label' => 'Total personas atendidas', 'disabled' =>'true', 'required' => false))
                ->add('horas', 'text', array('label' => 'Total horas cumplidas', 'disabled' =>'true', 'required' => false))
                ->add('actividadActividad', 'entity', array('class' => 'TesisAdminBundle:Actividad','property' => 'nombre',
                 'label' => 'Actividades', 'disabled' =>'true','multiple'=>true, 'required' => false,
                 'attr' => array('size' => '10')))
                ->add('calificacion','choice', array('choices' => array('aprobado' => 'Aprobado', 'por evaluar' => 'Por Evaluar', 'no aprobado' => 'No Aprobado'),
                'label' => 'Calificación', 'disabled' =>'true', 'required' => false))                                
                ->add('observacion','textarea', array('label' => 'Observación', 'required' => false, 
                    'attr' => array('placeholder' => '¿algun observación respecto a la calificación?', 'rows' => '10', 'disabled' =>'true')))
             ;
             
        }
        else if ($this->formtype == 'new'){

            $builder
                ->add('semana','choice', array('choices' => array('semana1' => 'Semana 1',
                    'semana2' => 'Semana 2', 'semana3' => 'Semana 3', 'semana4' => 'Semana 4', 'semana5' => 'Semana 5',
                    'semana6' => 'Semana 6', 'semana7' => 'Semana 7', 'semana8' => 'Semana 8', 'semana9' => 'Semana 9',
                    'semana10' => 'Semana 10', 'semana11' => 'Semana 11', 'semana12' => 'Semana 12', 'semana13' => 'Semana 13',
                    'semana14' => 'Semana 14', 'semana15' => 'Semana 15', 'semana16' => 'Semana 16', 'semana17' => 'Semana 17',
                    'semana18' => 'Semana 18', 'semana19' => 'Semana 19', 'semana20' => 'Semana 20', 'semana21' => 'Semana 21',
                    'semana22' => 'Semana 22', 'semana23' => 'Semana 23', 'semana24' => 'Semana 24', 'semana25' => 'Semana 25',
                    'semana26' => 'Semana 26', 'semana27' => 'Semana 27', 'semana28' => 'Semana 28', 'semana29' => 'Semana 29',
                    'semana30' => 'Semana 30', 'semana31' => 'Semana 31', 'semana32' => 'Semana 32'), 'label' => 'Semana'))
                ->add('fechaInicio', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha de inicio', 'widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy')))
                ->add('fechaFin', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha de culminación', 'widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy')))
                ->add('comentario','textarea', array('label' => 'Comentario', 
                    'attr' => array('placeholder' => '¿algo que agregar?', 'rows' => '10'))) 
                ->add('personas', 'text', array('label' => 'Total personas atendidas'))
                ->add('horas', 'text', array('label' => 'Total horas cumplidas'))
                ->add('actividadActividad', 'entity', array('class' => 'TesisAdminBundle:Actividad',
                    'property' => 'nombre', 'label' => 'Actividades','multiple'=>true,
                    'attr' => array('size' => '10')))
            ;

        }else if ($this->formtype == 'edit_student'){
        
            $builder
                ->add('semana','choice', array('choices' => array('semana1' => 'Semana 1',
                    'semana2' => 'Semana 2', 'semana3' => 'Semana 3', 'semana4' => 'Semana 4', 'semana5' => 'Semana 5',
                    'semana6' => 'Semana 6', 'semana7' => 'Semana 7', 'semana8' => 'Semana 8', 'semana9' => 'Semana 9',
                    'semana10' => 'Semana 10', 'semana11' => 'Semana 11', 'semana12' => 'Semana 12', 'semana13' => 'Semana 13',
                    'semana14' => 'Semana 14', 'semana15' => 'Semana 15', 'semana16' => 'Semana 16', 'semana17' => 'Semana 17',
                    'semana18' => 'Semana 18', 'semana19' => 'Semana 19', 'semana20' => 'Semana 20', 'semana21' => 'Semana 21',
                    'semana22' => 'Semana 22', 'semana23' => 'Semana 23', 'semana24' => 'Semana 24', 'semana25' => 'Semana 25',
                    'semana26' => 'Semana 26', 'semana27' => 'Semana 27', 'semana28' => 'Semana 28', 'semana29' => 'Semana 29',
                    'semana30' => 'Semana 30', 'semana31' => 'Semana 31', 'semana32' => 'Semana 32'), 'label' => 'Semana'))
                ->add('fechaInicio', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha de inicio', 'widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy')))
                ->add('fechaFin', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha de culminación', 'widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy')))
                ->add('comentario','textarea', array('label' => 'Comentario', 
                    'attr' => array('placeholder' => '¿algo que agregar?', 'rows' => '10'))) 
                ->add('personas', 'text', array('label' => 'Total personas atendidas'))
                ->add('horas', 'text', array('label' => 'Total horas cumplidas'))
                ->add('actividadActividad', 'entity', array('class' => 'TesisAdminBundle:Actividad',
                    'property' => 'nombre', 'label' => 'Actividades','multiple'=>true,
                    'attr' => array('size' => '10')))
                ->add('calificacion','choice', array('choices' => array('aprobado' => 'Aprobado', 'por evaluar' => 'Por Evaluar', 'no aprobado' => 'No Aprobado'),
                'label' => 'Calificación', 'disabled' =>'true'))                                
                ->add('observacion','textarea', array('label' => 'Observación', 
                    'attr' => array('placeholder' => '¿algun observación respecto a la calificación?', 'rows' => '10', 'disabled' =>'true')))
             ;
        
        }else if ($this->formtype == 'edit_tutor'){
        
            $builder
                ->add('semana','choice', array('choices' => array('semana1' => 'Semana 1',
                    'semana2' => 'Semana 2', 'semana3' => 'Semana 3', 'semana4' => 'Semana 4', 'semana5' => 'Semana 5',
                    'semana6' => 'Semana 6', 'semana7' => 'Semana 7', 'semana8' => 'Semana 8', 'semana9' => 'Semana 9',
                    'semana10' => 'Semana 10', 'semana11' => 'Semana 11', 'semana12' => 'Semana 12', 'semana13' => 'Semana 13',
                    'semana14' => 'Semana 14', 'semana15' => 'Semana 15', 'semana16' => 'Semana 16', 'semana17' => 'Semana 17',
                    'semana18' => 'Semana 18', 'semana19' => 'Semana 19', 'semana20' => 'Semana 20', 'semana21' => 'Semana 21',
                    'semana22' => 'Semana 22', 'semana23' => 'Semana 23', 'semana24' => 'Semana 24', 'semana25' => 'Semana 25',
                    'semana26' => 'Semana 26', 'semana27' => 'Semana 27', 'semana28' => 'Semana 28', 'semana29' => 'Semana 29',
                    'semana30' => 'Semana 30', 'semana31' => 'Semana 31', 'semana32' => 'Semana 32'), 'label' => 'Semana', 'disabled' =>'true'))
                ->add('fechaInicio', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha de inicio', 'widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy', 'disabled' =>'true')))
                ->add('fechaFin', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha de culminación', 'widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy', 'disabled' =>'true')))
                ->add('comentario','textarea', array('label' => 'Comentario', 
                    'attr' => array('placeholder' => '¿algo que agregar?', 'rows' => '10', 'disabled' =>'true'))) 
                ->add('personas', 'text', array('label' => 'Total personas atendidas', 'disabled' =>'true'))
                ->add('horas', 'text', array('label' => 'Total horas cumplidas', 'disabled' =>'true'))
                ->add('actividadActividad', 'entity', array('class' => 'TesisAdminBundle:Actividad',
                    'property' => 'nombre', 'label' => 'Actividades', 'disabled' =>'true','multiple'=>true,
                    'attr' => array('size' => '10'))) 
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
        return 'tesis_adminbundle_cronograma';
    }
}
