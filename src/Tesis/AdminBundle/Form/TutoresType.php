<?php

namespace Tesis\AdminBundle\Form;
 
use Doctrine\ORM\EntityManager; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Doctrine\ORM\EntityRepository;
use Tesis\AdminBundle\Entity\Profesor;
use Tesis\AdminBundle\Entity\Proyecto;



class TutoresType extends AbstractType
{

    public function __construct($options){
        $this->formtype = $options['status'];
        $this->profesores = $options['profesores'];
    }


    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options){

        if ($this->formtype == 'check' ) {    

            $builder
            ->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyectos','disabled' => true, 'required' => false))

            ->add('profesorProfesor', 'entity', array(
                "class"     => "TesisAdminBundle:Profesor",
                'choices' => $this->profesores,  
                "property"  => "nombre",
                'label' => 'Tutores',
                'disabled' => true,
                'multiple' => true,
                'required' => false,
                'attr' => array('size' => '20')
                ))


            ->add('periodo','choice', array('choices' => array('2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1',
                '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'),
                'label' => 'Periodo', 'disabled' => true, 'required' => false))             
            ;

        } else if ($this->formtype == 'edit' ) {   

            $builder
            ->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyectos'))
         

            ->add('profesorProfesor', 'entity', array(
                "class"     => "TesisAdminBundle:Profesor",
                "property"  => "nombre",
                'label' => 'Tutores',
                'disabled' => false,
                'multiple' => true,
                'required' => true,
                'attr' => array('size' => '20'),
                'group_by' => function($val, $key, $index) {
                        foreach ($this->profesores as $profesor) {
                            if ($profesor->getId() == $val->getId()){
                                return 'Profesores pertenicientes al proyecto';
                            } 
                        }
                        return 'Profesores disponible para agregar al proyecto';
                    },
                'query_builder' => function(EntityRepository $er) {
                 return $er->createQueryBuilder('p')
                        ->where('p.perfil = :perfil')
                       // ->setParameter('estatus', "activo")
                        ->setParameter('perfil', "tutor");
                        },    
                ))


            ->add('periodo','choice', array('choices' => array('2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1',
                '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'),
                'label' => 'Periodo', 'disabled' => false, 'required' => true))             
           
           ;
   
          } else if ($this->formtype == 'new' ) {  

            $builder
            ->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyectos'))
            
            ->add('profesorProfesor', 'entity', array(
                "class"     => "TesisAdminBundle:Profesor",
                "property"  => "nombre",
                'label' => 'Tutores',
                'disabled' => false,
                'multiple' => true,
                'required' => true,
                'attr' => array('size' => '20'),
                'query_builder' => function(EntityRepository $er) {
                 return $er->createQueryBuilder('p')
                        ->where('p.perfil = :perfil')
                       // ->setParameter('estatus', "activo")
                        ->setParameter('perfil', "tutor");
                        },
                ))

            ->add('periodo','choice', array('choices' => array('2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1',
                '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'),
                'label' => 'Periodo', 'disabled' => false, 'required' => true))             
           ;


          }

    }
 

    public function getName()
    {
        return 'tutores_form';
    }
}