<?php

namespace Tesis\SCBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LoginType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nameLogin','text', array('label' => 'Nombre de usuario',
			'attr' => array('placeholder' => 'nombre de usuario. ejemplo: ntesla')))
        ->add('clave','password', array('invalid_message' => 'La contrasena es invalida.',
            'label' => 'Cotrasena', 'attr' => array('placeholder' => 'Contrasena')));
    }
 
    public function getName()
    {
        return 'login_form';
    }
}