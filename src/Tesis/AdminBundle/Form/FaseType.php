<?php

namespace Tesis\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Tesis\AdminBundle\Entity\Actividad;
use Doctrine\ORM\EntityRepository;

class FaseType extends AbstractType
{

    /*constructor que establece si la fase se va a crear o a editar*/
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
                ->add('nombre','text', array('label' => 'Nombre', 'required' => false, 'attr' => array('placeholder' => 'Nombre de la fase','disabled' =>'true')))
                ->add('descripcion','textarea', array('label' => 'Descripción', 'required' => false,
                    'attr' => array('placeholder' => 'Descripción de la fase', 'rows' => '10','disabled' =>'true')))
                
                /*
                ->add('actividadActividad', 'entity', array('class' => 'TesisAdminBundle:Actividad','property' => 'nombre',
                 'label' => 'Actividades', 'expanded' => false, 'multiple'=>true, 'disabled' =>'true', 'required' => false,
                 'attr' => array('size' => '15')))
                 */

                ->add('actividadActividad', 'entity', 
                    array('class' => 'TesisAdminBundle:Actividad',
                    'choices' => $this->actividades,                    
                    'property' => 'nombre',
                    'label' => 'Actividades',
                    'expanded' => false,
                    'multiple'=>true,
                    'disabled' =>'true',
                    'required' => false,
                    'attr' => array('size' => '15')))    
                ;
        }
        else if ($this->formtype == 'edit' ) {

            $builder
                ->add('nombre','text', array('label' => 'Nombre', 'attr' => array('placeholder' => 'Nombre de la fase')))
                ->add('descripcion','textarea', array('label' => 'Descripción', 'required' => false,
                    'attr' => array('placeholder' => 'Descripción de la fase', 'rows' => '10')))
               
                /*
                ->add('actividadActividad', 'entity', 
                    array('class' => 'TesisAdminBundle:Actividad',
                    'property' => 'nombre',
                    'label' => 'Actividades', 
                    'expanded' => false, 
                    'multiple'=>true,
                    'attr' => array('size' => '15')))
                */

                ->add('actividadActividad', 'entity', 
                    array('class' => 'TesisAdminBundle:Actividad',
                    'property' => 'nombre',
                    'label' => 'Actividades',
                    'multiple'=>true,
                    'required' => false,
                    'group_by' => function($val, $key, $index) {
                        foreach ($this->actividades as $actividad) {
                            if ($actividad->getNombre() == $val->getNombre()){
                                return 'Actividades pertenicientes a la fase';
                            } 
                        }
                        return 'Actividades disponible para agregar a la fase';
                    },
                    'attr' => array('size' => '15')))         

            ;
        }else if ($this->formtype == 'new' ) {

            $builder
                ->add('nombre','text', array('label' => 'Nombre', 'attr' => array('placeholder' => 'Nombre de la fase')))
                ->add('descripcion','textarea', array('label' => 'Descripción', 'required' => false,
                    'attr' => array('placeholder' => 'Descripción de la fase', 'rows' => '10')))
                ->add('actividadActividad', 'entity', 
                    array('class' => 'TesisAdminBundle:Actividad',
                    'property' => 'nombre',
                    'label' => 'Actividades', 
                    'expanded' => false, 
                    'required' => false,
                    'multiple'=>true,
                    'attr' => array('size' => '15')))         
            ;
        }
    }   
    

    /**
     * @return string
     */
    public function getName()
    {
        return 'tesis_adminbundle_fase';
    }
}
