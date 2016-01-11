<?php

namespace Tesis\AdminBundle\Form;
 
use Doctrine\ORM\EntityManager; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Tesis\AdminBundle\Entity\Proyecto;
use Doctrine\ORM\EntityRepository;



class LaborscType extends AbstractType
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
         

        //    ->add('estudianteEstudiante', 'entity', array('class' => 'TesisAdminBundle:Estudiante','property' => 'nombre', 'label' => 'Estudiantes',
        //    'multiple'=>true,'disabled' => true, 'required' => false, 'attr' => array('size' => '20')))
        

             ->add('estudianteEstudiante', 'entity', array(
                "class"     => "TesisAdminBundle:Estudiante",
                "property"  => "nombre",
                'label' => 'Estudiantes',
                'disabled' => true,
                'multiple' => true,
                'required' => false,
                'attr' => array('size' => '20'),
                'query_builder' => function(EntityRepository $er) {
                 return $er->createQueryBuilder('p')
                        ->where('p.perfil = :perfil AND p.estatus = :estatus')
                        ->setParameter('estatus', "activo")
                        ->setParameter('perfil', "estudiante");
                        },
                ))       

            ->add('periodo','choice', array('choices' => array('2015-1' => '2015-1', '2015-2' => '2015-2',
                '2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1',
                '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'),
                'label' => 'Periodo', 'disabled' => true, 'required' => false))             
            ;

        } else {

            $builder
            ->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyecto'))
           
            /*
            ->add('estudianteEstudiante', 'entity', array('class' => 'TesisAdminBundle:Estudiante','property' => 'nombre',
            'label' => 'Estudiantes', 'multiple'=>true, 'attr' => array('size' => '20')))
           **/

            ->add('estudianteEstudiante', 'entity', array(
                "class"     => "TesisAdminBundle:Estudiante",
                "property"  => "nombre",
                'label' => 'Estudiantes',
                'disabled' => false,
                'multiple' => true,
                'required' => true,
                'attr' => array('size' => '20'),
                'query_builder' => function(EntityRepository $er) {
                 return $er->createQueryBuilder('p')
                        ->where('p.perfil = :perfil AND p.estatus = :estatus')
                        ->setParameter('estatus', "activo")
                        ->setParameter('perfil', "estudiante");
                        },
                ))


            ->add('periodo','choice', array('choices' => array('2015-1' => '2015-1', '2015-2' => '2015-2',
                '2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1',
                '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'),
                'label' => 'Periodo', 'disabled' => false, 'required' => true))             
           
           ;
   
        }  

    }
 

    public function getName()
    {
        return 'laborsc_form';
    }
}