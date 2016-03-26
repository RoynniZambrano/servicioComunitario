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

    public function __construct($options){
        $this->formtype = $options['status'];
        $this->fases = $options['fases'];
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

                ->add('faseFase', 'entity', 
                array('class' => 'TesisAdminBundle:Fase',
                    'choices' => $this->fases,
                    'property' => 'nombre',
                    'label' => 'Fases',
                    'multiple'=>true, 
                    'disabled' =>'true', 
                    'required' => false,
                    'attr' => array('size' => '15')))

                ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química', 'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'), 'label' => 'Departamento', 'disabled' =>'true','required' => false))
                ->add('periodo','choice', array('choices' => array('2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1', '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'), 'label' => 'Periodo', 'disabled' => true, 'required' => false))                
            ;
        }
        else if ($this->formtype == 'edit' ) {

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
                
                
                ->add('faseFase', 'entity', 
                    array('class' => 'TesisAdminBundle:Fase',
                    'property' => 'nombre',
                    'label' => 'Fases',
                    'multiple'=>true, 
                    'required' => false,
                    'group_by' => function($val, $key, $index) {
                        foreach ($this->fases as $fase) {
                            if ($fase->getNombre() == $val->getNombre()){
                                return 'Fases pertenicientes al proyecto';
                            } 
                        }
                        return 'Fases disponible para agregar al proyecto';
                    },
                    'attr' => array('size' => '15')))
                 
                ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química', 'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'), 'label' => 'Departamento'))
                ->add('periodo','choice', array('choices' => array('2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1', '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'), 'label' => 'Periodo'))  
            ;
        }else if ($this->formtype == 'new' ) {

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
                
                
                ->add('faseFase', 'entity', 
                array('class' => 'TesisAdminBundle:Fase',
                    'property' => 'nombre',
                    'label' => 'Fases',
                    'multiple'=>true, 
                    'disabled' => false, 
                    'required' => false,
                    'attr' => array('size' => '15')))
                 
                ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química', 'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'), 'label' => 'Departamento'))
                ->add('periodo','choice', array('choices' => array('2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1', '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'), 'label' => 'Periodo'))  
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
