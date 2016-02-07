<?php

namespace Tesis\AdminBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ReporteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química', 'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'), 'label' => 'Departamento'))
        ->add('periodo','choice', array('choices' => array('2015-1' => '2015-1', '2015-2' => '2015-2', '2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1', '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'), 'label' => 'Periodo')) ;  
    }
 
    public function getName()
    {
        return 'reporte_form';
    }
}