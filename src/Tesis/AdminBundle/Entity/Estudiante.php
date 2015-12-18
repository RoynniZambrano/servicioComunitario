<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Estudiante
 *
 * @ORM\Table(name="estudiante", indexes={@ORM\Index(name="fk_estudiante_usuario1_idx", columns={"usuario_id_usuario"})})
 * @ORM\Entity
 * @UniqueEntity(fields="cedula", message="Esta cedula ya esta registrada.")
 * @UniqueEntity(fields="correo", message="Este correo ya esta registrado.")  
 */
class Estudiante
{
    /**
     * @var string
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca nombre.")
     * @Assert\Regex(
     *      pattern="/^[a-zA-Z ñÑ]*$/",
     *      match=true,
     *      message="Porfavor introduzca un nombre que sea valido."
     *  )
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Su nombre debe tener minimo {{ limit }} caracteres.",
     *      maxMessage = "Su nombre debe tener maximo {{ limit }} caracteres.")
     */  
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=50, nullable=false)     
     * @Assert\NotBlank(message="Porfavor introduzca apellido.")
     * @Assert\Regex(
     *      pattern="/^[a-zA-Z ñÑ ]*$/",
     *      match=true,
     *      message="Porfavor introduzca un apellido que sea valido."
     *  )
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Su nombre debe tener minimo {{ limit }} caracteres.",
     *      maxMessage = "Su nombre debe tener maximo {{ limit }} caracteres.")
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca cedula.")
     * @Assert\Regex(
     *      pattern="/^[1-9][0-9]*$/",
     *      match=true,
     *      message="Porfavor introduzca una cedula valida."
     *  )
     * @Assert\Length(
     *      min = 7,
     *      max = 10,
     *      minMessage = "la cedula debe tener minimo {{ limit }} dígitos.",
     *      maxMessage = "la cedula debe tener maximo {{ limit }} dígitos.")          
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca una contrasena.")
     * @Assert\Regex(
     *      pattern="/[a-zA-Z ñÑ 0-9]+/",
     *      match=true,
     *      message="Porfavor introduzca una contrasena valida.",
     *      groups={"editpass"}
     *  )
     * @Assert\Length(
     *      min = 5,
     *      max = 50,
     *      minMessage = "Su contrasena debe tener minimo {{ limit }} caracteres.",
     *      maxMessage = "Su contrasena debe tener maximo {{ limit }} caracteres."),
     *      groups={"editpass"}     
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message = "Porfavor introduzca correo.")
     * @Assert\Email(message = "El correo '{{ value }}' no es valido.")     
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=50, nullable=true)
     * @Assert\Regex(
     *      pattern="/^[0-9][0-9]*$/",
     *      match=true,
     *      message="Porfavor introduzca un numero de teléfono valido."
     *  )
     * @Assert\Length(
     *      min = 9,
     *      max = 11,
     *      minMessage = "el teléfono debe tener minimo {{ limit }} dígitos.",
     *      maxMessage = "la teléfono debe tener maximo {{ limit }} dígitos.")          
     */           
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="SC", type="string", nullable=false)
     */
    private $sc = 'iniciado';

    /**
     * @var string
     *
     * @ORM\Column(name="genero", type="string", length=50, nullable=true)
     * @Assert\NotBlank(message="Porfavor introduzca genero.")     
     */
    private $genero;

    /**
     * @var string
     *
     * @ORM\Column(name="rol", type="string", length=50, nullable=false)
      * @Assert\NotBlank(message="Porfavor introduzca rol.")       
     */
    private $rol = 'estudiante';


    /**
     * @var string
     *
     * @ORM\Column(name="departamento", type="string", length=50, nullable=false)
      * @Assert\NotBlank(message="Porfavor introduzca departamento.")       
     */
    private $departamento = 'Computación';


    /**
     * @var string
     *
     * @ORM\Column(name="periodo", type="string", length=50, nullable=false)
      * @Assert\NotBlank(message="Porfavor introduzca periodo.")       
     */
    private $periodo = '2015-1';


    /**
     * @var integer
     *
     * @ORM\Column(name="id_estudiante", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idEstudiante;

    /**
     * @var \Tesis\AdminBundle\Entity\Proyecto
     *
     * @Assert\NotBlank(message="Porfavor introduzca un proyecto.")     
     * @ORM\ManyToOne(targetEntity="Tesis\AdminBundle\Entity\Proyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proyecto_id_proyecto", referencedColumnName="id_proyecto")
     * })
     */
    private $proyectoProyecto;

    /**
     * @var \Tesis\AdminBundle\Entity\Usuario
     *
     * @Assert\NotBlank(message="Porfavor introduzca un tutor.")        
     * @ORM\ManyToOne(targetEntity="Tesis\AdminBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $usuarioUsuario;



    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Estudiante
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return Estudiante
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set cedula
     *
     * @param string $cedula
     * @return Estudiante
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return string 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set clave
     *
     * @param string $clave
     * @return Estudiante
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return Estudiante
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Estudiante
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set sc
     *
     * @param string $sc
     * @return Estudiante
     */
    public function setSc($sc)
    {
        $this->sc = $sc;

        return $this;
    }

    /**
     * Get sc
     *
     * @return string 
     */
    public function getSc()
    {
        return $this->sc;
    }

    /**
     * Set genero
     *
     * @param string $genero
     * @return Estudiante
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return string 
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set rol
     *
     * @param string $rol
     * @return Estudiante
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }


    /**
     * Get rol
     *
     * @return string 
     */
    public function getRol()
    {
        return $this->rol;
    } 


    /**
     * Get departamento
     *
     * @return string 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set departamento
     *
     * @param string $departamento
     * @return Estudiante
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }


    /**
     * Get periodo
     *
     * @return string 
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set periodo
     *
     * @param string $periodo
     * @return Estudiante
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

   
    /**
     * Get idEstudiante
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->idEstudiante;
    }

    /**
     * Set proyectoProyecto
     *
     * @param \Tesis\AdminBundle\Entity\Proyecto $proyectoProyecto
     * @return Estudiante
     */
    public function setProyectoProyecto(\Tesis\AdminBundle\Entity\Proyecto $proyectoProyecto = null)
    {
        $this->proyectoProyecto = $proyectoProyecto;

        return $this;
    }

    /**
     * Get proyectoProyecto
     *
     * @return \Tesis\AdminBundle\Entity\Proyecto 
     */
    public function getProyectoProyecto()
    {
        return $this->proyectoProyecto;
    }

    /**
     * Set usuarioUsuario
     *
     * @param \Tesis\AdminBundle\Entity\Usuario $usuarioUsuario
     * @return Estudiante
     */
    public function setUsuarioUsuario(\Tesis\AdminBundle\Entity\Usuario $usuarioUsuario = null)
    {
        $this->usuarioUsuario = $usuarioUsuario;

        return $this;
    }

    /**
     * Get usuarioUsuario
     *
     * @return \Tesis\AdminBundle\Entity\Usuario 
     */
    public function getUsuarioUsuario()
    {
        return $this->usuarioUsuario;
    }

    /**
     * Get idEstudiante
     *
     * @return integer 
     */
    public function getIdEstudiante()
    {
        return $this->idEstudiante;
    }
}
