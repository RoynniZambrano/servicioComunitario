<?php

namespace Tesis\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Tesis\AdminBundle\Entity\Usuario;
use Doctrine\ORM\EntityRepository;

class ProyectoType extends AbstractType
{


    private $formtype;

    /*constructor que establece si el proyecto se va a crear o a editar*/
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
                ->add('nombre','text', array('label' => 'Nombre', 'required' => false, 'attr' => array('placeholder' => 'Nombre del proyecto', 'disabled' =>'true')))
                ->add('descripcion','textarea', array('label' => 'Descripción', 'required' => false,
                    'attr' => array('placeholder' => 'Descripción del proyecto', 'rows' => '10', 'disabled' =>'true')))
                ->add('justificacion','textarea', array('label' => 'Justificación', 'required' => false,
                    'attr' => array('placeholder' => 'Justificación del proyecto', 'rows' => '10', 'disabled' =>'true')))                
                ->add('fechaInicio', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha de inicio', 'widget' => 'single_text', 'required' => false, 'attr' => array('disabled' =>'true', 'placeholder' => 'dd-MM-yyyy')))
                ->add('fechaFin','date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha de culminación','widget' => 'single_text', 'required' => false, 'attr' => array('disabled' =>'true', 'placeholder' => 'dd-MM-yyyy')))
                ->add('fechaDesco', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha Desco', 'widget' => 'single_text', 'required' => false, 'attr' => array('disabled' =>'true', 'placeholder' => 'dd-MM-yyyy')))
                ->add('locacion','text', array('label' => 'Comunidad Objetivo', 'required' => false, 'attr' => array('placeholder' => 'Comunidad a Beneficiar', 'disabled' =>'true')))                
                ->add('instituto','choice', array('choices' => array('interno' => 'Interno', 'externo' => 'Externo'),
                'label' => 'Instituto', 'disabled' =>'true', 'required' => false))
                ->add('institutoPropone','text', array('label' => 'Propuesto por', 'required' => false, 'attr' => array('placeholder' => 'Universidad de Carabobo', 'disabled' =>'true')))                
                ->add('faseFase', 'entity', array('class' => 'TesisAdminBundle:Fase','property' => 'nombre',
                 'label' => 'Fases','multiple'=>true, 'disabled' =>'true', 'required' => false,
                 'attr' => array('size' => '10')))


        ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química', 'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'), 'label' => 'Departamento', 'disabled' =>'true','required' => false))
        ->add('periodo','choice', array('choices' => array('2015-1' => '2015-1', '2015-2' => '2015-2', '2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1', '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'), 'label' => 'Periodo'))                
        
                //->add('faseFase', 'entity', array('class' => 'TesisAdminBundle:Fase','property' => 'nombre', 'label' => 'Fases','multiple'=>true, 'disabled' =>'true', 'required' => false, 'required' => false))
                
                ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event)  {
                    $form = $event->getForm();

                        $form->add('coordinador', 'entity', array(
                            "class"     => "TesisAdminBundle:Usuario",
                            "property"  => "nombre",
                            'disabled' =>'true',
                            'required' => false,
                            'label' => 'Coordinador de Proyecto',
                            'query_builder' => function(EntityRepository $er) {
                                return $er->createQueryBuilder('u')
                                    ->where('u.rol = :rol')
                                    ->setParameter('rol', "coordinador de proyecto");
                            },
                        ));

                        $form->add('coordSuplente', 'entity', array(
                            "class"     => "TesisAdminBundle:Usuario",
                            "property"  => "nombre",
                            'disabled' =>'true',
                            'required' => false,
                            'label' => 'Coordinador Suplente',
                            'query_builder' => function(EntityRepository $er) {
                                return $er->createQueryBuilder('u')
                                    ->where('u.rol = :rol')
                                    ->setParameter('rol', "coordinador suplente");
                            },
                        ));

                })
            ;
        }
        else{

            $builder
                ->add('nombre','text', array('label' => 'Nombre', 'attr' => array('placeholder' => 'Nombre del proyecto')))
                ->add('descripcion','textarea', array('label' => 'Descripción', 
                    'attr' => array('placeholder' => 'Descripción del proyecto', 'rows' => '10')))
                ->add('justificacion','textarea', array('label' => 'Justificación', 
                    'attr' => array('placeholder' => 'Justificación del proyecto', 'rows' => '10')))                
                ->add('fechaInicio', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha de inicio', 'widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy')))
                ->add('fechaFin','date', array('format' => 'dd-MM-yyyy','label' => 'Fecha de culminación','widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy')))
                ->add('fechaDesco', 'date', array('format' => 'dd-MM-yyyy', 'label' => 'Fecha Desco', 'widget' => 'single_text', 'attr' => array('placeholder' => 'dd-MM-yyyy')))                
                ->add('locacion','text', array('label' => 'Comunidad Objetivo', 'attr' => array('placeholder' => 'Comunidad a Beneficiar')))                
                ->add('instituto','choice', array('choices' => array('interno' => 'Interno', 'externo' => 'Externo'),
                'label' => 'Instituto'))
                ->add('institutoPropone','text', array('label' => 'Propuesto por', 'attr' => array('placeholder' => 'Universidad de Carabobo')))                         
                ->add('faseFase', 'entity', array('class' => 'TesisAdminBundle:Fase','property' => 'nombre',
                 'label' => 'Fases','multiple'=>true, 'required' => false,
                 'attr' => array('size' => '10')))

        ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química', 'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'), 'label' => 'Departamento'))
        ->add('periodo','choice', array('choices' => array('2015-1' => '2015-1', '2015-2' => '2015-2', '2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1', '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'), 'label' => 'Periodo'))  


                ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event)  {
                    $form = $event->getForm();

                        $form->add('coordinador', 'entity', array(
                            "class"     => "TesisAdminBundle:Usuario",
                            "property"  => "nombre",
                            'label' => 'Coordinador de Proyecto',
                            'query_builder' => function(EntityRepository $er) {
                                return $er->createQueryBuilder('u')
                                    ->where('u.rol = :rol')
                                    ->setParameter('rol', "coordinador de proyecto");
                            },
                        ));

                        $form->add('coordSuplente', 'entity', array(
                            "class"     => "TesisAdminBundle:Usuario",
                            "property"  => "nombre",
                            'label' => 'Coordinador Suplente',
                            'query_builder' => function(EntityRepository $er) {
                                return $er->createQueryBuilder('u')
                                    ->where('u.rol = :rol')
                                    ->setParameter('rol', "coordinador suplente");
                            },
                        ));

                })


            ;

        }
    }   
    

    /**
     * @return string
     */
    public function getName()
    {
        return 'tesis_adminbundle_proyecto';
    }
}
