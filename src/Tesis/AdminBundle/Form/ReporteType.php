<?php

namespace Tesis\AdminBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;



class ReporteType extends AbstractType
{

    private $formtype;
    
    public function __construct($options){
        $this->formtype = $options['type'];
    }


        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        if ($this->formtype == 'normal' ) { 

            $builder
            ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química', 'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'), 'label' => 'Departamento'))
            ->add('periodo','choice', array('choices' => 
                array( 
                '2016-1' => '2016-1', '2016-2' => '2016-2', 
                '2017-1' => '2017-1', '2017-2' => '2017-2', 
                '2018-1' => '2018-1', '2018-2' => '2018-2', 
                '2019-1' => '2019-1', '2019-2' => '2019-2', 
                '2020-1' => '2020-1', '2020-2' => '2020-2', 
                '2021-1' => '2021-1', '2021-2' => '2021-2',
                '2022-1' => '2022-1', '2022-2' => '2022-2',
                '2023-1' => '2023-1', '2023-2' => '2023-2',
                '2024-1' => '2024-1', '2024-2' => '2024-2',
                '2025-1' => '2025-1', '2025-2' => '2025-2',
                      'todos' => 'Todos'), 
                      'label' => 'Período')) ; 

        }else{

            $builder
            ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química', 'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'), 'label' => 'Departamento'))
            ->add('periodo','choice', array('choices' => 
                array( 
                '2016-1' => '2016-1', '2016-2' => '2016-2', 
                '2017-1' => '2017-1', '2017-2' => '2017-2', 
                '2018-1' => '2018-1', '2018-2' => '2018-2', 
                '2019-1' => '2019-1', '2019-2' => '2019-2', 
                '2020-1' => '2020-1', '2020-2' => '2020-2', 
                '2021-1' => '2021-1', '2021-2' => '2021-2',
                '2022-1' => '2022-1', '2022-2' => '2022-2',
                '2023-1' => '2023-1', '2023-2' => '2023-2',
                '2024-1' => '2024-1', '2024-2' => '2024-2',
                '2025-1' => '2025-1', '2025-2' => '2025-2',
                      'todos' => 'Todos'), 
                      'label' => 'Período')) 

            ->add('profesor', 'entity', array(
                "class"     => "TesisAdminBundle:Profesor",
                "property"  => "nombre",
                'label' => 'Tutor',
                'disabled' => false,
                'required' => false,
                'query_builder' => function(EntityRepository $er) {
                 return $er->createQueryBuilder('p')
                        ->where('p.perfil = :perfil AND p.estatus = :estatus')
                        //->where('p.estatus = : estatus')
                        ->setParameter('estatus', "activo")
                        ->setParameter('perfil', "tutor");
                        },
                ))

            ;
        } 



    }
 
    public function getName()
    {
        return 'reporte_form';
    }
}