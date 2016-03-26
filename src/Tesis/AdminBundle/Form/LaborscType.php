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
            ->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyecto','disabled' => true, 'required' => false))    


            ->add('estudianteEstudiante', 'entity', array(
                "class"     => "TesisAdminBundle:Estudiante",
                'choices' => $this->estudiantes,  
                "property"  => "nombre",
                'label' => 'Estudiantes',
                'disabled' => true,
                'multiple' => true,
                'required' => false,
                'attr' => array('size' => '20')
                ))


            ->add('periodo','choice', array('choices' => array('2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1',
                '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'),
                'label' => 'Periodo', 'disabled' => true, 'required' => false))             
            ;

        } else  if ($this->formtype == 'edit' ) {  

            $builder
            ->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyecto'))
           
            ->add('estudianteEstudiante', 'entity', 
                array('class' => 'TesisAdminBundle:Estudiante',
                    'property' => 'nombre',
                    'label' => 'Estudiantes', 
                    'multiple'=>true,
                     'group_by' => function($val, $key, $index) {
                        foreach ($this->estudiantes as $estudiante) {
                            if ($estudiante->getId() == $val->getId()){
                                return 'Estudiantes asignados al proyecto';
                            } 
                        }
                        return 'Estudiantes disponible para asignar al proyecto';
                    }, 
                    'attr' => array('size' => '20')))

            ->add('periodo','choice', array('choices' => array('2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1',
                '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'),
                'label' => 'Periodo', 'disabled' => false, 'required' => true))             
           
           ;
   
        }else  if ($this->formtype == 'new' ) { 


            $builder
            ->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyecto'))
           
            ->add('estudianteEstudiante', 'entity', array('class' => 'TesisAdminBundle:Estudiante','property' => 'nombre',
            'label' => 'Estudiantes', 'multiple'=>true, 'attr' => array('size' => '20')))

            ->add('periodo','choice', array('choices' => array('2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1',
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