<?php

namespace Tesis\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class InformeFinalType extends AbstractType
{


    private $formtype;

    /*constructor que establece si el informe se va a crear o a editar*/
    public function __construct($options){
        $this->formtype = $options['status'];
        $this->id = $options['id'];
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options){

        if ($this->formtype == 'check' ) {   

            $builder              
                ->add('calificacion','choice', array('choices' => array('aprobado' => 'Aprobado', 'por evaluar' => 'Por Evaluar', 'no aprobado' => 'No Aprobado'),
                'label' => 'Calificación', 'disabled' => true, 'required' => false))                                
                ->add('observacion','textarea', array('label' => 'Observación', 'required' => false,
                    'attr' => array('placeholder' => '¿algun observación respecto a la calificación?', 'rows' => '10', 'disabled' =>'true')))
           ;

        }else if ($this->formtype == 'edit'){

            $builder               
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
        return 'tesis_adminbundle_informe';
    }
}
