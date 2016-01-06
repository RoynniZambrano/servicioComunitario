<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 * @UniqueEntity(fields="cedula", message="Esta cedula ya esta registrada.")
 * @UniqueEntity(fields="correo", message="Este correo ya esta registrado.") 
 */
class Usuario
{
    /**
     * @var string
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca nombre.")
     * @Assert\Regex(
     *      pattern="/^[a-zA-Z ñÑ  ]*$/",
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
     * @ORM\Column(name="apellido", type="string", length=100, nullable=false)     
     * @Assert\NotBlank(message="Porfavor introduzca apellido.")
     * @Assert\Regex(
     *      pattern="/^[a-zA-Z ñÑ  ]*$/",
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
     * @ORM\Column(name="clave", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca una contrasena.")
     * @Assert\Regex(
     *      pattern="/[a-zA-Z ñÑ 0-9]+/",
     *      match=true,
     *      message="Porfavor introduzca una contrasena valida."
     *  )
     * @Assert\Length(
     *      min = 6,
     *      max = 32,
     *      minMessage = "Su contrasena debe tener minimo {{ limit }} caracteres.",
     *      maxMessage = "Su contrasena debe tener maximo {{ limit }} caracteres.")
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message = "Porfavor introduzca correo.")
     * @Assert\Email(message = "El correo '{{ value }}' no es valido.")     
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=100, nullable=true)
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
     * @ORM\Column(name="genero", type="string", length=50, nullable=true)
     * @Assert\NotBlank(message="Porfavor introduzca genero.")     
     */
    private $genero;

    /**
     * @var string
     *
     * @ORM\Column(name="rol", type="string", length=100, nullable=false)
      * @Assert\NotBlank(message="Porfavor introduzca rol.")       
     */
    private $rol;

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
     * @ORM\Column(name="id_usuario", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idUsuario;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tesis\AdminBundle\Entity\Tutoria", mappedBy="usuarioUsuario")
     */
    private $tutoriaTutores;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tutoriaTutores = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
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
     * @return Usuario
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
     * @return Usuario
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
     * @return Usuario
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
     * @return Usuario
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
     * @return Usuario
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
     * Set genero
     *
     * @param string $genero
     * @return Usuario
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
     * @return Usuario
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
     * Get idUsuario
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->idUsuario;
    }

    /**
     * Add tutoriaTutores
     *
     * @param \Tesis\AdminBundle\Entity\Tutoria $tutoriaTutores
     * @return Usuario
     */
    public function addTutoriaTutore(\Tesis\AdminBundle\Entity\Tutoria $tutoriaTutores)
    {
        $this->tutoriaTutores[] = $tutoriaTutores;

        return $this;
    }

    /**
     * Remove tutoriaTutores
     *
     * @param \Tesis\AdminBundle\Entity\Tutoria $tutoriaTutores
     */
    public function removeTutoriaTutore(\Tesis\AdminBundle\Entity\Tutoria $tutoriaTutores)
    {
        $this->tutoriaTutores->removeElement($tutoriaTutores);
    }

    /**
     * Get tutoriaTutores
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTutoriaTutores()
    {
        return $this->tutoriaTutores;
    }

    /**
     * Get idUsuario
     *
     * @return integer 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}
