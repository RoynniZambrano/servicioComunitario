<?php

namespace Tesis\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class InfoAdicionalType extends AbstractType
{

    private $formtype;

    /*constructor que establece si la info adicional se va a crear o a editar*/
    public function __construct($options){
        $this->formtype = $options['status'];
       // $this->id_estudiante = $options['id'];
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options){

        if ($this->formtype == 'check' ) {   

            $builder
                ->add('resumen','textarea', array('label' => 'Resumen', 'required' => false,
                    'attr' => array('placeholder' => 'Resumen', 'rows' => '10', 'disabled' =>'true')))
                ->add('problema','textarea', array('label' => 'Problema', 'required' => false,
                    'attr' => array('placeholder' => 'Problema', 'rows' => '10', 'disabled' =>'true'))) 
                ->add('justificacion','textarea', array('label' => 'Justificación', 'required' => false,
                    'attr' => array('placeholder' => 'Justificación', 'rows' => '10', 'disabled' =>'true')))                                                         
                ->add('objetivoG','textarea', array('label' => 'Objetivo General', 'required' => false,
                    'attr' => array('placeholder' => 'Objetivo General', 'rows' => '10', 'disabled' =>'true'))) 
                ->add('objetivoE','textarea', array('label' => 'Objetivos Específicos', 'required' => false,
                    'attr' => array('placeholder' => 'Objtivos Especficos', 'rows' => '10', 'disabled' =>'true')))  
                ->add('resultados','textarea', array('label' => 'Resultados', 'required' => false,
                    'attr' => array('placeholder' => 'Resultados', 'rows' => '10', 'disabled' =>'true'))) 
                ->add('conclusion','textarea', array('label' => 'Conclusión', 'required' => false,
                    'attr' => array('placeholder' => 'Conclusión', 'rows' => '10', 'disabled' =>'true')))               
                ->add('calificacion','choice', array('choices' => array('aprobado' => 'Aprobado', 'por evaluar' => 'Por Evaluar', 'no aprobado' => 'No Aprobado'),
                'label' => 'Calificación', 'disabled' =>'true', 'required' => false))                                
                ->add('observacion','textarea', array('label' => 'Observación', 'required' => false,
                    'attr' => array('placeholder' => '¿algun observación respecto a la calificación?', 'rows' => '10', 'disabled' =>'true')))
                ->add('fecha', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha Informe Final', 'widget' => 'single_text', 'required' => false, 'attr' => array('disabled' =>'true', 'placeholder' => 'dd-MM-yyyy')))          
           ;

        }
        else if ($this->formtype == 'new'){

            $builder
                ->add('resumen','textarea', array('label' => 'Resumen', 
                    'attr' => array('placeholder' => 'Resumen', 'rows' => '10')))
                ->add('problema','textarea', array('label' => 'Problema', 
                    'attr' => array('placeholder' => 'Problema', 'rows' => '10'))) 
                ->add('justificacion','textarea', array('label' => 'Justificación', 
                    'attr' => array('placeholder' => 'Justificación', 'rows' => '10')))                                                         
                ->add('objetivoG','textarea', array('label' => 'Objetivo General', 
                    'attr' => array('placeholder' => 'Objetivo General', 'rows' => '10'))) 
                ->add('objetivoE','textarea', array('label' => 'Objetivos Específicos', 
                    'attr' => array('placeholder' => 'Objtivos Especificos', 'rows' => '10')))  
                ->add('resultados','textarea', array('label' => 'Resultados', 
                    'attr' => array('placeholder' => 'Resultados', 'rows' => '10'))) 
                ->add('conclusion','textarea', array('label' => 'Conclusión', 
                    'attr' => array('placeholder' => 'Conclusión', 'rows' => '10')))  
                ->add('fecha', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha Informe Final', 'widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy')))                 
             ;

        }else if ($this->formtype == 'edit_student'){

            $builder
                ->add('resumen','textarea', array('label' => 'Resumen', 
                    'attr' => array('placeholder' => 'Resumen', 'rows' => '10')))
                ->add('problema','textarea', array('label' => 'Problema', 
                    'attr' => array('placeholder' => 'Problema', 'rows' => '10'))) 
                ->add('justificacion','textarea', array('label' => 'Justificación', 
                    'attr' => array('placeholder' => 'Justificación', 'rows' => '10')))                                                         
                ->add('objetivoG','textarea', array('label' => 'Objetivo General', 
                    'attr' => array('placeholder' => 'Objetivo General', 'rows' => '10'))) 
                ->add('objetivoE','textarea', array('label' => 'Objetivos Específicos', 
                    'attr' => array('placeholder' => 'Objtivos Especificos', 'rows' => '10')))  
                ->add('resultados','textarea', array('label' => 'Resultados', 
                    'attr' => array('placeholder' => 'Resultados', 'rows' => '10'))) 
                ->add('conclusion','textarea', array('label' => 'Conclusión', 
                    'attr' => array('placeholder' => 'Conclusión', 'rows' => '10')))               
                ->add('calificacion','choice', array('choices' => array('aprobado' => 'Aprobado', 'por evaluar' => 'Por Evaluar', 'no aprobado' => 'No Aprobado'),
                'label' => 'Calificación', 'disabled' =>'true'))                                
                ->add('observacion','textarea', array('label' => 'Observación', 
                    'attr' => array('placeholder' => '¿algun observación respecto a la calificación?', 'rows' => '10', 'disabled' =>'true')))
                ->add('fecha', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha Informe Final', 'widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy')))                 
           ; 

        }else if ($this->formtype == 'edit_tutor'){

            $builder
                ->add('resumen','textarea', array('label' => 'Resumen', 
                    'attr' => array('placeholder' => 'Resumen', 'rows' => '10', 'disabled' =>'true')))
                ->add('problema','textarea', array('label' => 'Problema', 
                    'attr' => array('placeholder' => 'Problema', 'rows' => '10', 'disabled' =>'true'))) 
                ->add('justificacion','textarea', array('label' => 'Justificación', 
                    'attr' => array('placeholder' => 'Justificación', 'rows' => '10', 'disabled' =>'true')))                                                         
                ->add('objetivoG','textarea', array('label' => 'Objetivo General', 
                    'attr' => array('placeholder' => 'Objetivo General', 'rows' => '10', 'disabled' =>'true'))) 
                ->add('objetivoE','textarea', array('label' => 'Objetivos Específicos', 
                    'attr' => array('placeholder' => 'Objtivos Especificos', 'rows' => '10', 'disabled' =>'true')))  
                ->add('resultados','textarea', array('label' => 'Resultados', 
                    'attr' => array('placeholder' => 'Resultados', 'rows' => '10', 'disabled' =>'true'))) 
                ->add('conclusion','textarea', array('label' => 'Conclusión', 
                    'attr' => array('placeholder' => 'Conclusión', 'rows' => '10', 'disabled' =>'true')))
                ->add('fecha', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha Informe Final', 'widget' => 'single_text', 'attr' => array('disabled' =>'true', 'placeholder' => 'dd-MM-yyyy')))                                    
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
        return 'tesis_adminbundle_infoadicional';
    }
}
