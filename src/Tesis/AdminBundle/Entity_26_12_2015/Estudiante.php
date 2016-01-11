<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Estudiante
 *
 * @ORM\Table(name="estudiante")
 * @ORM\Entity
 * @UniqueEntity(fields="cedula", message="Esta cedula ya esta registrada.")
 * @UniqueEntity(fields="correo", message="Este correo ya esta registrado.") 
 * @UniqueEntity(fields="nameLogin", message="Este nombre de usuario ya esta registrado.")  
 */
class Estudiante
{
    /**
     * @var string
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca un nombre.")
     * @Assert\Regex(
     *      pattern="/^[a-zA-Z ñÑ]*$/",
     *      match=true,
     *      message="Porfavor introduzca un nombre que sea valido."
     *  )
     * @Assert\Length(
     *      min = 1,
     *      max = 50,
     *      minMessage = "Su nombre debe tener minimo {{ limit }} caracteres.",
     *      maxMessage = "Su nombre debe tener maximo {{ limit }} caracteres.")
     */     
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=50, nullable=false)     
     * @Assert\NotBlank(message="Porfavor introduzca un apellido.")
     * @Assert\Regex(
     *      pattern="/^[a-zA-Z ñÑ ]*$/",
     *      match=true,
     *      message="Porfavor introduzca un apellido que sea valido."
     *  )
     * @Assert\Length(
     *      min = 1,
     *      max = 50,
     *      minMessage = "Su nombre debe tener minimo {{ limit }} caracteres.",
     *      maxMessage = "Su nombre debe tener maximo {{ limit }} caracteres.")
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca una cedula.")
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
     * @Assert\NotBlank(message="Porfavor introduzca una contraseña.")
     * @Assert\Regex(
     *      pattern="/[a-zA-Z ñÑ 0-9]+/",
     *      match=true,
     *      message="Porfavor introduzca una contraseña valida.",
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
     * @Assert\NotBlank(message = "Porfavor introduzca un correo.")
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
     *      min = 10,
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
     * @ORM\Column(name="perfil", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca perfil.")      
     */
    private $perfil = 'estudiante';

   /**
     * @var string
     *
     * @ORM\Column(name="name_login", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message = "Porfavor introduzca un nombre de usuario.")
     * @Assert\Regex(
     *      pattern="/^[a-zA-Z]+[0-9]*$/",
     *      match=true,
     *      message="El nombre de usuario {{ value }} no es valido."
     *  )     
     * @Assert\Length(
     *      min = 2,
     *      max = 18,
     *      minMessage = "el nombre de usuario debe tener minimo {{ limit }} carácteres.",
     *      maxMessage = "el nombre de usuario debe tener maximo {{ limit }} carácteres.") 
     */    
    private $nameLogin;

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
     * @ORM\Column(name="semestre", type="string", length=50, nullable=true)
     */
    private $semestre;


    /**
     * @var string
     *
     * @ORM\Column(name="periodo", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca periodo.")       
     */
    private $periodo = '2015-1';


    /**
     * @var string
     *
     * @ORM\Column(name="estatus", type="string", nullable=false)
     */
    private $estatus = 'inactivo';


    /**
     * @var string
     *
     * @ORM\Column(name="profesor", type="string", nullable=true)
     */
    private $profesor;

    /**
     * @var string
     *
     * @ORM\Column(name="proyecto", type="string", nullable=true)
     */
    private $proyecto;    

    /**
     * @var integer
     *
     * @ORM\Column(name="id_estudiante", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idEstudiante;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tesis\AdminBundle\Entity\Tutoria", mappedBy="estudianteEstudiante")
     */
    private $tutoriaTutoria;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tesis\AdminBundle\Entity\Laborsc", inversedBy="estudianteEstudiante")
     * @ORM\JoinTable(name="laborsc_has_estudiante",
     *   joinColumns={
     *     @ORM\JoinColumn(name="estudiante_id_estudiante", referencedColumnName="id_estudiante")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="laborsc_id_laborsc", referencedColumnName="id_laborsc")
     *   }
     * )
     */
    private $laborscLaborsc;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tutoriaTutoria = new \Doctrine\Common\Collections\ArrayCollection();
        $this->laborscLaborsc = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set perfil
     *
     * @param string $perfil
     * @return Estudiante
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
     * Set nameLogin
     *
     * @param string $nameLogin
     * @return Estudiante
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
     * @return Estudiante
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
     * Set semestre
     *
     * @param string $semestre
     * @return Estudiante
     */
    public function setSemestre($semestre)
    {
        $this->semestre = $semestre;

        return $this;
    }

    /**
     * Get semestre
     *
     * @return string 
     */
    public function getSemestre()
    {
        return $this->semestre;
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
     * @return Estudiante
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
     * Set profesor
     *
     * @param string $profesor
     * @return Estudiante
     */
    public function setProfesor($profesor)
    {
        $this->profesor = $profesor;

        return $this;
    }

    /**
     * Get profesor
     *
     * @return string 
     */
    public function getProfesor()
    {
        return $this->profesor;
    }


    /**
     * Set proyecto
     *
     * @param string $proyecto
     * @return Estudiante
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
     * Get idEstudiante
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->idEstudiante;
    }

    /**
     * Add tutoriaTutoria
     *
     * @param \Tesis\AdminBundle\Entity\Tutoria $tutoriaTutoria
     * @return Estudiante
     */
    public function addTutoriaTutorium(\Tesis\AdminBundle\Entity\Tutoria $tutoriaTutoria)
    {
        $this->tutoriaTutoria[] = $tutoriaTutoria;

        return $this;
    }

    /**
     * Remove tutoriaTutoria
     *
     * @param \Tesis\AdminBundle\Entity\Tutoria $tutoriaTutoria
     */
    public function removeTutoriaTutorium(\Tesis\AdminBundle\Entity\Tutoria $tutoriaTutoria)
    {
        $this->tutoriaTutoria->removeElement($tutoriaTutoria);
    }

    /**
     * Get tutoriaTutoria
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTutoriaTutoria()
    {
        return $this->tutoriaTutoria;
    }

    /**
     * Add laborscLaborsc
     *
     * @param \Tesis\AdminBundle\Entity\Laborsc $laborscLaborsc
     * @return Estudiante
     */
    public function addLaborscLaborsc(\Tesis\AdminBundle\Entity\Laborsc $laborscLaborsc)
    {
        $this->laborscLaborsc[] = $laborscLaborsc;

        return $this;
    }

    /**
     * Remove laborscLaborsc
     *
     * @param \Tesis\AdminBundle\Entity\Laborsc $laborscLaborsc
     */
    public function removeLaborscLaborsc(\Tesis\AdminBundle\Entity\Laborsc $laborscLaborsc)
    {
        $this->laborscLaborsc->removeElement($laborscLaborsc);
    }

    /**
     * Get laborscLaborsc
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLaborscLaborsc()
    {
        return $this->laborscLaborsc;
    }
}
