<?php

namespace Tesis\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class UsuarioType extends AbstractType
{

    private $formtype;

    /*constructor que establece si el usuario se va a crear o a editar*/
    public function __construct($type){
        $this->formtype = $type;
    }
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options){

        if ($this->formtype == 'new' ) {
            
            $builder
            ->add('correo','text', array('label' => 'Correo', 'attr' => array('placeholder' => 'tucorreo@ejemplo.com')))
            ->add('nombre','text', array('label' => 'Nombre'))
            ->add('apellido','text', array('label' => 'Apellido'))
            ->add('genero','choice', array('choices' => array('male' => 'Hombre', 'female' => 'Mujer'),
                'label' => 'Genero', 'required'=> true))
            ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química',
                'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'),
                'label' => 'Departamento'))                       
            ->add('clave','repeated', array('type' => 'password','invalid_message' => 'Las contraseñas deben coincidir.',
            'first_options' => array('label' => 'Contraseña', 'attr' => array('placeholder' => '**********')),
            'second_options' => array('label' => 'Confirmar', 'attr' => array('placeholder' => '**********'))))  
            ->add('cedula', 'text', array('label' => 'Cedula'))
            ->add('telefono', 'text', array('label' => 'Teléfono', 'required' => false))
            ->add('nameLogin','text', array('label' => 'Nombre de usuario'))

            ->add('perfil','choice', array('choices' => array('tutor' => 'Tutor',
                'coordinador de proyecto' => 'Coordinador de Proyecto', 'coordinador de servicio comunitario' => 'Coordinador de Servicio Comunitario',
                'coordinador suplente' => 'Coordinador Suplente'),
                'label' => 'Perfil', 'required' => true))
            ;
        } 
        else if ($this->formtype == 'check'){

            $builder
            ->add('correo','text', array('label' => 'Correo', 'disabled' =>'true', 'required' => false, 'attr' => array('placeholder' => 'tucorreo@ejemplo.com')))
            ->add('nombre','text', array('label' => 'Nombre', 'disabled' =>'true', 'required' => false))
            ->add('apellido','text', array('label' => 'Apellido', 'disabled' =>'true', 'required' => false))
            ->add('genero','choice', array('choices' => array('male' => 'Hombre', 'female' => 'Mujer'),'label' => 'Genero', 'disabled' =>'true', 'required' => false))
            ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química',
                'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'),
               'label' => 'Departamento', 'disabled' =>'true','required' => false))
                        
            ->add('cedula', 'text', array('label' => 'Cedula', 'disabled' =>'true', 'required' => false))
            ->add('telefono', 'text', array('label' => 'Teléfono', 'disabled' =>'true', 'required' => false))
          
            ->add('nameLogin','text', array('label' => 'Nombre de usuario', 'disabled' =>'true','required' => false))
            ->add('estatus','text', array('label' => 'Estatus', 'disabled' =>'true', 'required' => false))
            ->add('perfil','text', array('label' => 'Perfil', 'disabled' => true ,'required' => false))
            ;      

        } else if ($this->formtype == 'edit_coordsc'){

            $builder
            ->add('correo','text', array('label' => 'Correo', 'disabled' => false, 'required' => true, 'attr' => array('placeholder' => 'tucorreo@ejemplo.com')))
            ->add('nombre','text', array('label' => 'Nombre', 'disabled' => false, 'required' => true))
            ->add('apellido','text', array('label' => 'Apellido', 'disabled' => false, 'required' => true))
            ->add('genero','choice', array('choices' => array('male' => 'Hombre', 'female' => 'Mujer'),'label' => 'Genero', 'disabled' => false, 'required' => true))
            ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química',
                'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'),
               'label' => 'Departamento', 'disabled' => false,'required' => true))
                        
            ->add('cedula', 'text', array('label' => 'Cedula', 'disabled' => false, 'required' => true))
            ->add('telefono', 'text', array('label' => 'Teléfono', 'disabled' => false, 'required' => false))
          
            ->add('nameLogin','text', array('label' => 'Nombre de usuario', 'disabled' => false,'required' => true))
            ->add('estatus','text', array('label' => 'Estatus', 'disabled' => true, 'required' => false))
            ->add('perfil','choice', array('choices' => array('tutor' => 'Tutor',
                'coordinador de proyecto' => 'Coordinador de Proyecto', 'coordinador de servicio comunitario' => 'Coordinador de Servicio Comunitario',
                'coordinador suplente' => 'Coordinador Suplente'),
                'label' => 'Perfil', 'disabled' => false , 'required' => true))

            ; 

        } else if ($this->formtype == 'edit_other'){

            $builder
            ->add('correo','text', array('label' => 'Correo', 'disabled' => false, 'required' => true, 'attr' => array('placeholder' => 'tucorreo@ejemplo.com')))
            ->add('nombre','text', array('label' => 'Nombre', 'disabled' => false, 'required' => true))
            ->add('apellido','text', array('label' => 'Apellido', 'disabled' => false, 'required' => true))
            ->add('genero','choice', array('choices' => array('male' => 'Hombre', 'female' => 'Mujer'),'label' => 'Genero', 'disabled' => false, 'required' => true))
            ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química',
                'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'),
               'label' => 'Departamento', 'disabled' => true,'required' => false))
                        
            ->add('cedula', 'text', array('label' => 'Cedula', 'disabled' => true, 'required' => false))
            ->add('telefono', 'text', array('label' => 'Teléfono', 'disabled' => false, 'required' => false))
          
            ->add('nameLogin','text', array('label' => 'Nombre de usuario', 'disabled' => true,'required' => false))
            ->add('estatus','text', array('label' => 'Estatus', 'disabled' => true, 'required' => false))
            ->add('perfil','text', array('label' => 'Perfil', 'disabled' => true ,'required' => false))
            ; 

        } else if($this->formtype == 'editpass'){
            /*si solo se quiere editar la contrasena*/
            $builder
            ->add('clave','repeated', array('type' => 'password', 'invalid_message' => 'Las contraseñas deben coincidir.',
                'first_options' => array('label' => 'Contraseña nueva', 'attr' => array('placeholder' => '**********')),
                'second_options' => array('label' => 'Confirmar contraseña', 'attr' => array('placeholder' => '**********'))))
            ;
        }
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tesis_adminbundle_usuario';
    }
}
