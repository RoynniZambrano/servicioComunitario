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




class TutoriaType extends AbstractType
{

    public function __construct($options){
        $this->formtype = $options['status'];
        $this->estudiantes = $options['estudiantes'];
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options){

        if ($this->formtype == 'check' ) {    

            $builder

            ->add('profesorProfesor', 'entity', array(
                "class"     => "TesisAdminBundle:Profesor",
              //  "property"  => "nombre",
                'label' => 'Tutor',
                'disabled' => true,
                'required' => false,
                'query_builder' => function(EntityRepository $er) {
                 return $er->createQueryBuilder('p')
                        ->where('p.perfil = :perfil')
                      //  ->setParameter('estatus', "activo")
                        ->setParameter('perfil', "tutor");
                        },
                ))

            ->add('estudianteEstudiante', 'entity', array(
                "class"     => "TesisAdminBundle:Estudiante",
                'choices' => $this->estudiantes,  
            //    "property"  => "nombre",
                'label' => 'Estudiantes',
                'disabled' => true,
                'multiple' => true,
                'required' => false,
                'attr' => array('size' => '20')
                ))


            ->add('periodo','choice', array('choices' => array(
                '2016-1' => '2016-1', '2016-2' => '2016-2', 
                '2017-1' => '2017-1', '2017-2' => '2017-2', 
                '2018-1' => '2018-1', '2018-2' => '2018-2', 
                '2019-1' => '2019-1', '2019-2' => '2019-2', 
                '2020-1' => '2020-1', '2020-2' => '2020-2', 
                '2021-1' => '2021-1', '2021-2' => '2021-2',
                '2022-1' => '2022-1', '2022-2' => '2022-2',
                '2023-1' => '2023-1', '2023-2' => '2023-2',
                '2024-1' => '2024-1', '2024-2' => '2024-2',
                '2025-1' => '2025-1', '2025-2' => '2025-2'),
                'label' => 'Período', 'disabled' => true, 'required' => false))             
            ;

        } else  if ($this->formtype == 'edit' ) { 

            $builder 
            ->add('profesorProfesor', 'entity', array(
                "class"     => "TesisAdminBundle:Profesor",
             //   "property"  => "nombre",
                'label' => 'Tutor',
                'disabled' => false,
                'required' => true,
                'query_builder' => function(EntityRepository $er) {
                 return $er->createQueryBuilder('p')
                        ->where('p.perfil = :perfil')
                       // ->setParameter('estatus', "activo")
                        ->setParameter('perfil', "tutor");
                        },
                ))


             ->add('estudianteEstudiante', 'entity', array(
                "class"     => "TesisAdminBundle:Estudiante",
             //   "property"  => "nombre",
                'label' => 'Estudiantes',
                'disabled' => false,
                'multiple' => true,
                'required' => true,
                'attr' => array('size' => '20'),
                 'group_by' => function($val, $key, $index) {
                        foreach ($this->estudiantes as $estudiante) {
                            if ($estudiante->getId() == $val->getId()){
                                return 'Estudiantes asignados al tutor';
                            } 
                        }
                        return 'Estudiantes disponible para asignar al tutor';
                    },
                'query_builder' => function(EntityRepository $er) {
                 return $er->createQueryBuilder('p')
                        ->where('p.perfil = :perfil')
                      //  ->setParameter('estatus', "activo")
                        ->setParameter('perfil', "estudiante");
                        },
                ))


            ->add('periodo','choice', array('choices' => array(
                '2016-1' => '2016-1', '2016-2' => '2016-2', 
                '2017-1' => '2017-1', '2017-2' => '2017-2', 
                '2018-1' => '2018-1', '2018-2' => '2018-2', 
                '2019-1' => '2019-1', '2019-2' => '2019-2', 
                '2020-1' => '2020-1', '2020-2' => '2020-2', 
                '2021-1' => '2021-1', '2021-2' => '2021-2',
                '2022-1' => '2022-1', '2022-2' => '2022-2',
                '2023-1' => '2023-1', '2023-2' => '2023-2',
                '2024-1' => '2024-1', '2024-2' => '2024-2',
                '2025-1' => '2025-1', '2025-2' => '2025-2'),
                'label' => 'Período', 'disabled' => false, 'required' => true))             
           
           ;
   

        } else  if ($this->formtype == 'new' ) { 


            $builder 
            ->add('profesorProfesor', 'entity', array(
                "class"     => "TesisAdminBundle:Profesor",
              //  "property"  => "nombre",
                'label' => 'Tutor',
                'disabled' => false,
                'required' => true,
                'query_builder' => function(EntityRepository $er) {
                 return $er->createQueryBuilder('p')
                        ->where('p.perfil = :perfil')
                       // ->setParameter('estatus', "activo")
                        ->setParameter('perfil', "tutor");
                        },
                ))


             ->add('estudianteEstudiante', 'entity', array(
                "class"     => "TesisAdminBundle:Estudiante",
            //    "property"  => "nombre",
                'label' => 'Estudiantes',
                'disabled' => false,
                'multiple' => true,
                'required' => true,
                'attr' => array('size' => '20'),
                'query_builder' => function(EntityRepository $er) {
                 return $er->createQueryBuilder('p')
                        ->where('p.perfil = :perfil')
                      //  ->setParameter('estatus', "activo")
                        ->setParameter('perfil', "estudiante");
                        },
                )) 
             

            ->add('periodo','choice', array('choices' => array(
                '2016-1' => '2016-1', '2016-2' => '2016-2', 
                '2017-1' => '2017-1', '2017-2' => '2017-2', 
                '2018-1' => '2018-1', '2018-2' => '2018-2', 
                '2019-1' => '2019-1', '2019-2' => '2019-2', 
                '2020-1' => '2020-1', '2020-2' => '2020-2', 
                '2021-1' => '2021-1', '2021-2' => '2021-2',
                '2022-1' => '2022-1', '2022-2' => '2022-2',
                '2023-1' => '2023-1', '2023-2' => '2023-2',
                '2024-1' => '2024-1', '2024-2' => '2024-2',
                '2025-1' => '2025-1', '2025-2' => '2025-2'),
                'label' => 'Período', 'disabled' => false, 'required' => true))             
           
           ;

        } 

    }
 

    public function getName()
    {
        return 'tutoria_form';
    }
}