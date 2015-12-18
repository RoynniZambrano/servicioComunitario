<?php

namespace Tesis\SCBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LoginType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('correo','text', array('label' => 'Correo',
			'attr' => array('placeholder' => 'tucorreo@ejemplo.com')))
        ->add('clave','password', array('invalid_message' => 'La contrasena es invalida.',
            'label' => 'Cotrasena', 'attr' => array('placeholder' => 'Contrasena')));
    }
 
    public function getName()
    {
        return 'login_form';
    }
}