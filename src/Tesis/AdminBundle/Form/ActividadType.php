<?php

namespace Tesis\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ActividadType extends AbstractType
{


    private $formtype;

    /*constructor que establece si la actividad se va a crear o a editar*/
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
                ->add('nombre','text', array('label' => 'Nombre', 'required' => false, 'attr' => array('placeholder' => 'Nombre de la actividad', 'disabled' =>'true')))
                ->add('descripcion','textarea', array('label' => 'Descripción', 'required' => false, 
                    'attr' => array('placeholder' => 'Descripción de la actividad', 'rows' => '15', 'disabled' =>'true')))
            ;
        }
        else{

            $builder
                ->add('nombre','text', array('label' => 'Nombre', 'attr' => array('placeholder' => 'Nombre de la actividad')))
                ->add('descripcion','textarea', array('label' => 'Descripción', 'required' => false, 
                    'attr' => array('placeholder' => 'Descripción de la actividad', 'rows' => '15')))
            ;
        }
    }   
    

    /**
     * @return string
     */
    public function getName()
    {
        return 'tesis_adminbundle_actividad';
    }
}
