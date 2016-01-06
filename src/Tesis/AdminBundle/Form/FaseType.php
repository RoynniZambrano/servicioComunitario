<?php

namespace Tesis\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Tesis\AdminBundle\Entity\Actividad;
use Doctrine\ORM\EntityRepository;

class FaseType extends AbstractType
{


    private $formtype;

    /*constructor que establece si la fase se va a crear o a editar*/
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
                ->add('nombre','text', array('label' => 'Nombre', 'required' => false, 'attr' => array('placeholder' => 'Nombre de la fase','disabled' =>'true')))
                ->add('descripcion','textarea', array('label' => 'Descripción', 'required' => false,
                    'attr' => array('placeholder' => 'Descripción de la fase', 'rows' => '10','disabled' =>'true')))
                ->add('actividadActividad', 'entity', array('class' => 'TesisAdminBundle:Actividad','property' => 'nombre',
                 'label' => 'Actividades', 'expanded' => false, 'multiple'=>true, 'disabled' =>'true', 'required' => false,
                 'attr' => array('size' => '10')))
            ;
        }
        else{

            $builder
                ->add('nombre','text', array('label' => 'Nombre', 'attr' => array('placeholder' => 'Nombre de la fase')))
                ->add('descripcion','textarea', array('label' => 'Descripción', 'required' => false,
                    'attr' => array('placeholder' => 'Descripción de la fase', 'rows' => '10')))
                ->add('actividadActividad', 'entity', array('class' => 'TesisAdminBundle:Actividad','property' => 'nombre',
                 'label' => 'Actividades', 'expanded' => false, 'multiple'=>true,
                 'attr' => array('size' => '10')))
                          


                //'empty_value' => 'elige',
                
   /*            
                ->add('actividadActividad', 'entity', 
                    array('class' => 'TesisAdminBundle:Actividad',
                            'property' => 'nombre', 
                            'label' => 'Actividad',
                            'expanded' => true,
                            'multiple'=>true))
                

                    
                    ->add('descripcion', 'choice', 
                    array( 'label' => 'Actividad',
                            'expanded' => true,
                            'multiple' => true,
                            'choices' => array('male', 'female', 'both', 'female', 'both', 'female', 'both', 'female', 'both', 'female', 'both', 'female', 'both', 'female', 'both', 'female', 'both', 'female', 'both')
                            ,'attr' => array('disabled' =>'true', 'read_only' =>'true')
                            ))
                    
/*
                
                ->add('actividadActividad', 'choice', 
                    array('data_class' => 'Tesis\AdminBundle\Entity\Actividad',
                            'property_path' => 'nombre', 
                            'label' => 'Actividad',
                            'expanded' => true,
                            'multiple' => true,
                            'choices_list' => function(EntityRepository $er) {
                                return $er->createQueryBuilder('a');
                            },
                ))
 **/               

                /* query_builder
                ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event)  {
                    $form = $event->getForm();

                        $form->add('actividadActividad', 'entity', array(
                            "class"     => "TesisAdminBundle:Actividad",
                            "property"  => "nombre",
                            'label' => 'Actividad',
                            'expanded' => true,
                            'multiple'=>true,
                            'choices' => function(EntityRepository $er) {
                                return $er->createQueryBuilder('a');
                            },
                        ));
                })
                **/



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
