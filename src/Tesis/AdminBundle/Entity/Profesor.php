<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Profesor
 *
 * @ORM\Table(name="profesor")
 * @ORM\Entity
 * @UniqueEntity(fields="cedula", message="Esta cédula ya esta registrada.")
 * @UniqueEntity(fields="correo", message="Este correo ya esta registrado.") 
 * @UniqueEntity(fields="nameLogin", message="Este nombre de usuario ya esta registrado.")  
 */
class Profesor
{
    /**
     * @var string
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Por favor, introduzca un nombre.")
     * @Assert\Regex(
     *      pattern="/^[a-zA-Z ñÑ]*$/",
     *      match=true,
     *      message="Por favor, introduzca un nombre que sea válido."
     *  )
     * @Assert\Length(
     *      max = 50,
     *      maxMessage = "Su nombre debe tener maximo {{ limit }} caracteres.")
     */ 
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=50, nullable=false)     
     * @Assert\NotBlank(message="Por favor, introduzca un apellido.")
     * @Assert\Regex(
     *      pattern="/^[a-zA-Z ñÑ ]*$/",
     *      match=true,
     *      message="Por favor, introduzca un apellido que sea válido."
     *  )
     * @Assert\Length(
     *      max = 50,
     *      maxMessage = "Su nombre debe tener maximo {{ limit }} caracteres.")
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Por favor, introduzca una cédula.")
     * @Assert\Regex(
     *      pattern="/^[1-9][0-9]*$/",
     *      match=true,
     *      message="Por favor, introduzca una cédula valida."
     *  )
     * @Assert\Length(
     *      min = 7,
     *      max = 10,
     *      minMessage = "la cédula debe tener minimo {{ limit }} dígitos.",
     *      maxMessage = "la cédula debe tener maximo {{ limit }} dígitos.")          
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Por favor, introduzca una contraseña.")
     * @Assert\Regex(
     *      pattern="/[a-zA-Z ñÑ 0-9]+/",
     *      match=true,
     *      message="Por favor, introduzca una contraseña valida.",
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
     * @Assert\NotBlank(message = "Por favor, introduzca un correo.")
     * @Assert\Email(message = "El correo '{{ value }}' no es válido.")     
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=50, nullable=true)
     * @Assert\Regex(
     *      pattern="/^[0-9][0-9]*$/",
     *      match=true,
     *      message="Por favor,, introduzca un número de teléfono válido."
     *  )
     * Assert\Length(
     *      min = 10,
     *      max = 11,
     *      minMessage = "el teléfono debe tener minimo {{ limit }} dígitos.",
     *      maxMessage = "la teléfono debe tener maximo {{ limit }} dígitos.")          
     */ 
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="perfil", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Por favor, introduzca perfil.")      
     */
    private $perfil;

    /**
     * @var string
     *
     * @ORM\Column(name="genero", type="string", length=50, nullable=true)
     * @Assert\NotBlank(message="Por favor, introduzca género.")
     */
    private $genero;

   /**
     * @var string
     *
     * @ORM\Column(name="name_login", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message = "Por favor, introduzca un nombre de usuario.")
     * @Assert\Regex(
     *      pattern="/^[a-zA-Z]+[0-9]*$/",
     *      match=true,
     *      message="El nombre de usuario {{ value }} no es válido."
     *  )     
     * @Assert\Length(
     *      max = 18,
     *      maxMessage = "el nombre de usuario debe tener maximo {{ limit }} carácteres.") 
     */
    private $nameLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="departamento", type="string", length=50, nullable=false)
      * @Assert\NotBlank(message="Por favor, introduzca departamento.")       
     */
    private $departamento = 'Computación';

    /**
     * @var string
     *
     * @ORM\Column(name="periodo", type="string", length=50, nullable=true)
     * Assert\NotBlank(message="Por favor, introduzca Período.")       
     */
    private $periodo;

     /**
     * @var string
     *
     * @ORM\Column(name="estatus", type="string", nullable=false)
     */
    private $estatus = 'inactivo';

    /**
     * @var string
     *
     * @ORM\Column(name="proyecto", type="string", nullable=true)
     */
    private $proyecto;        

    /**
     * @var integer
     *
     * @ORM\Column(name="id_profesor", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idProfesor;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tesis\AdminBundle\Entity\Tutores", mappedBy="profesorProfesor")
     */
    private $tutoresTutores;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tutoresTutores = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Profesor
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
     * @return Profesor
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
     * @return Profesor
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
     * @return Profesor
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
     * @return Profesor
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
     * @return Profesor
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
     * Set perfil
     *
     * @param string $perfil
     * @return Profesor
     */
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;

        return $this;
    }

    /**
     * Get perfil
     *
     * @return string 
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * Set genero
     *
     * @param string $genero
     * @return Profesor
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
     * Set nameLogin
     *
     * @param string $nameLogin
     * @return Profesor
     */
    public function setNameLogin($nameLogin)
    {
        $this->nameLogin = $nameLogin;

        return $this;
    }

    /**
     * Get nameLogin
     *
     * @return string 
     */
    public function getNameLogin()
    {
        return $this->nameLogin;
    }

    /**
     * Set departamento
     *
     * @param string $departamento
     * @return Profesor
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
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
     * Set periodo
     *
     * @param string $periodo
     * @return Profesor
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

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
     * Set estatus
     *
     * @param string $estatus
     * @return Profesor
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get estatus
     *
     * @return string 
     */
    public function getEstatus()
    {
        return $this->estatus;
    }


    /**
     * Set proyecto
     *
     * @param string $proyecto
     * @return Profesor
     */
    public function setProyecto($proyecto)
    {
        $this->proyecto = $proyecto;

        return $this;
    }

    /**
     * Get proyecto
     *
     * @return string 
     */
    public function getProyecto()
    {
        return $this->proyecto;
    }



    /**
     * Get idProfesor
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->idProfesor;
    }

    /**
     * Add tutoresTutores
     *
     * @param \Tesis\AdminBundle\Entity\Tutores $tutoresTutores
     * @return Profesor
     */
    public function addTutoresTutore(\Tesis\AdminBundle\Entity\Tutores $tutoresTutores)
    {
        $this->tutoresTutores[] = $tutoresTutores;

        return $this;
    }

    /**
     * Remove tutoresTutores
     *
     * @param \Tesis\AdminBundle\Entity\Tutores $tutoresTutores
     */
    public function removeTutoresTutore(\Tesis\AdminBundle\Entity\Tutores $tutoresTutores)
    {
        $this->tutoresTutores->removeElement($tutoresTutores);
    }

    /**
     * Get tutoresTutores
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTutoresTutores()
    {
        return $this->tutoresTutores;
    }

    public function __toString(){
        return $this->nombre.' '.$this->apellido;
    }

}
