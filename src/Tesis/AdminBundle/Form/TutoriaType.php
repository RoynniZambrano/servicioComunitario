<?php

namespace Tesis\AdminBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TutoriaType extends AbstractType
{
    private $formtype;

    /*constructor que establece si la tutoria se va a crear o a editar*/
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
            ->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyectos','disabled' =>'true', 'required' => false))
            ->add('usuarioUsuario', 'entity', array('class' => 'TesisAdminBundle:Usuario','property' => 'nombre', 'label' => 'Tutores',
             'multiple'=>true,'disabled' =>'true', 'required' => false, 'attr' => array('size' => '20')))
            ;

        } else 


        /*if ($this->formtype == 'new' ) */ 

        {

            $builder
            ->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyectos'))
            ->add('usuarioUsuario', 'entity', array('class' => 'TesisAdminBundle:Usuario','property' => 'nombre',
            'label' => 'Tutores', 'multiple'=>true, 'attr' => array('size' => '20')))
            ;
   
        }  

        /*else if ($this->formtype == 'edit' ) {

            $builder
            ->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyectos'))
            ->add('usuarioUsuario', 'entity', array('class' => 'TesisAdminBundle:Usuario','property' => 'nombre', 'label' => 'Tutores', 'multiple'=>true))
            ;
        }
        */


    }
 
    public function getName()
    {
        return 'tutoria_form';
    }
}