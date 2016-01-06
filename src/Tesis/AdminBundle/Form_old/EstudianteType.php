<?php

namespace Tesis\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EstudianteType extends AbstractType
{

    private $formtype;

    /*constructor que establece si el estudiante se va a crear o a editar*/
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
                'label' => 'Genero'))
            ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química',
                'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'),
                'label' => 'Departamento'))
            ->add('periodo','choice', array('choices' => array('2015-1' => '2015-1', '2015-2' => '2015-2',
                '2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1',
                '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'),
                'label' => 'Periodo de Inscripción'))                         
            ->add('clave','repeated', array('type' => 'password','invalid_message' => 'Las contrasenas deben coincidir.',
            'first_options' => array('label' => 'Contrasena', 'attr' => array('placeholder' => '**********')),
            'second_options' => array('label' => 'Confirmar', 'attr' => array('placeholder' => '**********'))))
            
            ->add('cedula', 'text', array('label' => 'Cedula'))
            ->add('telefono', 'text', array('label' => 'Teléfono', 'required' => false))
            ->add('sc','choice', array('choices' => array('iniciado' => 'Iniciado',
                'culminado' => 'Culminado'),
                'label' => 'SC Estatus', 'disabled' =>'true'))
            ->add('usuarioUsuario', 'entity', array('class' => 'TesisAdminBundle:Usuario','property' => 'nombre', 'label' => 'Tutor'))
            ->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyecto'))            

            ;
            
        }  else if ($this->formtype == 'check'){

            $builder
            ->add('correo','text', array('label' => 'Correo', 'disabled' =>'true', 'required' => false, 'attr' => array('placeholder' => 'tucorreo@ejemplo.com')))
            ->add('nombre','text', array('label' => 'Nombre', 'disabled' =>'true', 'required' => false))
            ->add('apellido','text', array('label' => 'Apellido', 'disabled' =>'true', 'required' => false))
            ->add('genero','choice', array('choices' => array('male' => 'Hombre', 'female' => 'Mujer'),'label' => 'Genero', 'disabled' =>'true', 'required' => false))
            ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química',
                'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'),
               'label' => 'Departamento', 'disabled' =>'true','required' => false))
            ->add('periodo','choice', array('choices' => array('2015-1' => '2015-1', '2015-2' => '2015-2',
                '2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1',
                '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'),
                'label' => 'Periodo de Inscripción', 'disabled' =>'true','required' => false))             
            ->add('sc','text', array('label' => 'Estatus SC', 'disabled' =>'true', 'required' => false))
            ->add('cedula', 'text', array('label' => 'Cedula', 'disabled' =>'true', 'required' => false))
            ->add('telefono', 'text', array('label' => 'Teléfono', 'disabled' =>'true', 'required' => false))
            ->add('rol','text', array('label' => 'Rol', 'disabled' =>'true','required' => false))
            ->add('usuarioUsuario', 'entity', array('class' => 'TesisAdminBundle:Usuario','property' => 'nombre', 'label' => 'Tutor', 'disabled' =>'true', 'required' => false))            
            ->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyecto','disabled' =>'true' , 'required' => false))
            ;        

        } else if ($this->formtype == 'edit_other'){

            $builder
            ->add('correo','text', array('label' => 'Correo', 'attr' => array('placeholder' => 'tucorreo@ejemplo.com')))
            ->add('nombre','text', array('label' => 'Nombre'))
            ->add('apellido','text', array('label' => 'Apellido'))
            ->add('genero','choice', array('choices' => array('male' => 'Hombre', 'female' => 'Mujer'),'label' => 'Genero'))
            ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química',
                'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'),
                'label' => 'Departamento'))               
            ->add('periodo','choice', array('choices' => array('2015-1' => '2015-1', '2015-2' => '2015-2',
                '2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1',
                '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'),
                'label' => 'Periodo de Inscripción'))             
            ->add('cedula', 'text', array('label' => 'Cedula'))
            ->add('rol','text', array('label' => 'Rol', 'disabled' =>'true', 'required' => false))            
            ->add('telefono', 'text', array('label' => 'Teléfono', 'required' => false))
            ->add('sc','choice', array('choices' => array('iniciado' => 'Iniciado',
                'culminado' => 'Culminado'),
                'label' => 'SC Estatus'))
            ->add('usuarioUsuario', 'entity', array('class' => 'TesisAdminBundle:Usuario','property' => 'nombre', 'label' => 'Tutor'))
            ->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyecto'))
            ;

        } else if ($this->formtype == 'edit_student'){

            $builder
            ->add('correo','text', array('label' => 'Correo', 'disabled' =>'true', 'attr' => array('placeholder' => 'tucorreo@ejemplo.com')))
            ->add('nombre','text', array('label' => 'Nombre'))
            ->add('apellido','text', array('label' => 'Apellido'))
            ->add('genero','choice', array('choices' => array('male' => 'Hombre', 'female' => 'Mujer'),'label' => 'Genero'))
            ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química',
                'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'),
                'label' => 'Departamento', 'disabled' =>'true'))             
            ->add('periodo','choice', array('choices' => array('2015-1' => '2015-1', '2015-2' => '2015-2',
                '2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1',
                '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'),
                'label' => 'Periodo de Inscripción', 'disabled' =>'true'))              
            ->add('cedula', 'text', array('label' => 'Cedula'))
            ->add('rol','text', array('label' => 'Rol', 'disabled' =>'true'))            
            ->add('telefono', 'text', array('label' => 'Teléfono', 'required' => false))
            ->add('sc','choice', array('choices' => array('iniciado' => 'Iniciado',
                'culminado' => 'Culminado'),
                'label' => 'SC Estatus' ,'disabled' =>'true'))
            ->add('usuarioUsuario', 'entity', array('class' => 'TesisAdminBundle:Usuario','property' => 'nombre', 'label' => 'Tutor', 'disabled' =>'true' ))
            ->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyecto','disabled' =>'true' ))
            ;

        } else if($this->formtype == 'editpass'){
            /*si solo se quiere editar la contrasena*/
            $builder
            ->add('clave','repeated', array('type' => 'password', 'invalid_message' => 'Las contrasenas deben coincidir.',
                'first_options' => array('label' => 'Contrasena nueva', 'attr' => array('placeholder' => '**********')),
                'second_options' => array('label' => 'Confirmar contrasena', 'attr' => array('placeholder' => '**********'))))
            ;
        }
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tesis_adminbundle_estudiante';
    }
}
