<?php

namespace Tesis\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Tesis\AdminBundle\Entity\Diario;
use Doctrine\ORM\EntityRepository;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class ResultadosType extends AbstractType
{


    private $formtype;

    /*constructor que establece si el resultado se va a crear o a editar*/
    public function __construct($options){
        //$this->formtype = $type;
        $this->formtype = $options['status'];
        $this->id_estudiante = $options['id'];
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options){

        if ($this->formtype == 'check' ) {   
             
            $builder
                ->add('nombre','text', array('label' => 'Nombre de la actividad', 'required' => false, 'attr' => array('placeholder' => 'Nombre de la actividad','disabled' =>'true')))               
                ->add('diarioDiario', 'entity', array(
                    'class' => 'TesisAdminBundle:Diario', 
                    'label' => 'Diario',
                    'disabled' =>'true',
                    'required' => false,
                    'query_builder' => function(EntityRepository $er) {
                                return $er->createQueryBuilder('r')
                                    ->where('r.estudianteEstudiante = :estudiante')
                                    ->setParameter('estudiante', $this->id_estudiante);
                            },
                    ))

                ->add('comentario','textarea', array('label' => 'Descripción', 'required' => false, 
                    'attr' => array('placeholder' => 'Descripción de la actividad', 'rows' => '10','disabled' =>'true')))
                ->add('cantidad', 'text', array('label' => 'Horas de la actividad' , 'disabled' =>'true', 'required' => false))
            ;
        }
        else{

            $builder
                ->add('nombre','text', array('label' => 'Nombre de la actividad', 'attr' => array('placeholder' => 'Nombre de la actividad')))
               // ->add('diarioDiario', 'entity', array('class' => 'TesisAdminBundle:Diario','property' => 'fecha', 'label' => 'Diario'))

                
                ->add('diarioDiario', 'entity', array(
                    'class' => 'TesisAdminBundle:Diario', 
                    'label' => 'Diario',
                    'query_builder' => function(EntityRepository $er) {
                                return $er->createQueryBuilder('r')
                                    ->where('r.estudianteEstudiante = :estudiante')
                                    ->setParameter('estudiante', $this->id_estudiante);
                            },
                    ))
                

                ->add('comentario','textarea', array('label' => 'Descripción', 
                    'attr' => array('placeholder' => 'Descripción de la actividad', 'rows' => '10')))
                ->add('cantidad', 'text', array('label' => 'Horas de la actividad'))
            ;
        }
    }   
    

    /**
     * @return string
     */
    public function getName()
    {
        return 'tesis_adminbundle_resultados';
    }
}
