<?php

namespace Tesis\AdminBundle\Form;
 
use Doctrine\ORM\EntityManager; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Tesis\AdminBundle\Entity\Proyecto;
use Tesis\AdminBundle\Entity\Profesor;
use Doctrine\ORM\EntityRepository;



class CoordinadoresHasProfesorType extends AbstractType
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
            ->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyecto','disabled' => true, 'required' => false))

            ->add('profesorProyecto', 'entity', array(
                "class"     => "TesisAdminBundle:Profesor",
                "property"  => "nombre",
                'label' => 'Coord proyecto',
                'disabled' => true,
                'multiple' => false,
                'required' => false,
                'query_builder' => function(EntityRepository $er) {
                 return $er->createQueryBuilder('p')
                        ->where('p.perfil = :perfil')
                        ->setParameter('perfil', "coordinador de proyecto");
                        },
                ))


            ->add('profesorSuplente', 'entity', array(
                "class"     => "TesisAdminBundle:Profesor",
                "property"  => "nombre",
                'label' => 'Coord suplente',
                'disabled' => true,
                'multiple' => false,
                'required' => false,
                'query_builder' => function(EntityRepository $er) {
                 return $er->createQueryBuilder('p')
                        ->where('p.perfil = :perfil')
                        ->setParameter('perfil', "coordinador suplente");
                        },
                ))




            ->add('periodo','choice', array('choices' => array('2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1',
                '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'),
                'label' => 'Periodo', 'disabled' => true, 'required' => false))             
            ;

        } else {

            $builder
            ->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyecto'))
       
            ->add('profesorProyecto', 'entity', array(
                "class"     => "TesisAdminBundle:Profesor",
                "property"  => "nombre",
                'label' => 'Coord proyecto',
                'disabled' => false,
                'multiple' => false,
                'required' => true,
                'query_builder' => function(EntityRepository $er) {
                 return $er->createQueryBuilder('p')
                        ->where('p.perfil = :perfil')
                        ->setParameter('perfil', "coordinador de proyecto");
                        },
                ))


            ->add('profesorSuplente', 'entity', array(
                "class"     => "TesisAdminBundle:Profesor",
                "property"  => "nombre",
                'label' => 'Coord suplente',
                'disabled' => false,
                'multiple' => false,
                'required' => true,
                'query_builder' => function(EntityRepository $er) {
                 return $er->createQueryBuilder('p')
                        ->where('p.perfil = :perfil')
                        ->setParameter('perfil', "coordinador suplente");
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
        return 'coordinadres_form';
    }
}