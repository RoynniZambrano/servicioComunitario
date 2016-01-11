<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\ExecutionContextInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Tesis\AdminBundle\Validator\Constraints as AdminAssert;

/**
 * Proyecto
 *
 * @ORM\Table(name="proyecto")
 * @ORM\Entity
 * @AdminAssert\ValidDate
 * @UniqueEntity(fields="nombre", message="Este nombre ya esta registrado.") 
 */
class Proyecto
{

    /**
     * @var string
     * @ORM\Column(name="nombre", type="string", length=1000, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca nombre.")
     * @Assert\Length(
     *      min = 5,
     *      max = 1000,
     *      minMessage = "el nombre debe tener minimo {{ limit }} caracteres.",
     *      maxMessage = "el nombre debe tener maximo {{ limit }} caracteres.")
     */     
    private $nombre;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=false)
     * Assert\NotBlank(message="Porfavor introduzca una fecha.")
     * Assert\Date(message="Porfavor introduzca una fecha valida.")
     */    
    private $fechaInicio;


     /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="date", nullable=false)
     * Assert\NotBlank(message="Porfavor introduzca una fecha.")
     * Assert\Date(message="Porfavor introduzca una fecha valida.")
     */    
    private $fechaFin;


    /**
     * @var string
     *
     * @ORM\Column(name="locacion", type="string", length=1000, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca dirección.")
     * @Assert\Length(
     *      min = 5,
     *      max = 1000,
     *      minMessage = "la dirección debe tener minimo {{ limit }} caracteres.",
     *      maxMessage = "la dirección debe tener maximo {{ limit }} caracteres.")     
     */    
    private $locacion;


    /**
     * @var string
     *
     * @ORM\Column(name="instituto", type="string", length=1000, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca instituo.")     
     */     
    private $instituto;


    /**
     * @var string
     *
     * @ORM\Column(name="instituto_propone", type="string", length=1000, nullable=true)
     * @Assert\NotBlank(message="Porfavor introduzca nombre instituto.")
     * @Assert\Length(
     *      min = 2,
     *      max = 1000,
     *      minMessage = "el nombre del instituto debe tener minimo {{ limit }} caracteres.",
     *      maxMessage = "el nombre del instituto debe tener maximo {{ limit }} caracteres.")       
     */    
    private $institutoPropone;

    /**
     * @var string
     *
     * @ORM\Column(name="justificacion", type="text", length=15360, nullable=true)     
     */    
    private $justificacion;

   
    /**
     * @var string
     *
     * @ORM\Column(name="periodo", type="string", length=50, nullable=true)
     */
    private $periodo;


    /**
     * @var string
     *
     * @ORM\Column(name="departamento", type="string", length=50, nullable=false)
      * @Assert\NotBlank(message="Porfavor introduzca departamento.")       
     */
    private $departamento = 'Computación';    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_desco", type="date", nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca una fecha.")
     * @Assert\Date(message="Porfavor introduzca una fecha valida.")
     */
    private $fechaDesco;    

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=15360, nullable=true)     
     */
    private $descripcion;


     /**
     * @var string
     *
     * @ORM\Column(name="estatus", type="string", nullable=false)
     */
    private $estatus = 'inactivo';    

    /**
     * @var integer
     *
     * @ORM\Column(name="id_proyecto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idProyecto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tesis\AdminBundle\Entity\Fase", inversedBy="proyectoProyecto")
     * @ORM\JoinTable(name="proyecto_has_fase",
     *   joinColumns={
     *     @ORM\JoinColumn(name="proyecto_id_proyecto", referencedColumnName="id_proyecto")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="fase_id_fase", referencedColumnName="id_fase")
     *   }
     * )
     */
    private $faseFase;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->faseFase = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Proyecto
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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Proyecto
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return Proyecto
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set locacion
     *
     * @param string $locacion
     * @return Proyecto
     */
    public function setLocacion($locacion)
    {
        $this->locacion = $locacion;

        return $this;
    }

    /**
     * Get locacion
     *
     * @return string 
     */
    public function getLocacion()
    {
        return $this->locacion;
    }

    /**
     * Set instituto
     *
     * @param string $instituto
     * @return Proyecto
     */
    public function setInstituto($instituto)
    {
        $this->instituto = $instituto;

        return $this;
    }

    /**
     * Get instituto
     *
     * @return string 
     */
    public function getInstituto()
    {
        return $this->instituto;
    }

    /**
     * Set institutoPropone
     *
     * @param string $institutoPropone
     * @return Proyecto
     */
    public function setInstitutoPropone($institutoPropone)
    {
        $this->institutoPropone = $institutoPropone;

        return $this;
    }

    /**
     * Get institutoPropone
     *
     * @return string 
     */
    public function getInstitutoPropone()
    {
        return $this->institutoPropone;
    }

    /**
     * Set justificacion
     *
     * @param string $justificacion
     * @return Proyecto
     */
    public function setJustificacion($justificacion)
    {
        $this->justificacion = $justificacion;

        return $this;
    }

    /**
     * Get justificacion
     *
     * @return string 
     */
    public function getJustificacion()
    {
        return $this->justificacion;
    }

    /**
     * Set periodo
     *
     * @param string $periodo
     * @return Proyecto
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
     * Set departamento
     *
     * @param string $departamento
     * @return Proyecto
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
     * Set fechaDesco
     *
     * @param \DateTime $fechaDesco
     * @return Proyecto
     */
    public function setFechaDesco($fechaDesco)
    {
        $this->fechaDesco = $fechaDesco;

        return $this;
    }

    /**
     * Get fechaDesco
     *
     * @return \DateTime 
     */
    public function getFechaDesco()
    {
        return $this->fechaDesco;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Proyecto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set estatus
     *
     * @param string $estatus
     * @return Proyecto
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
     * Get idProyecto
     *
     * @return integer 
     */
    public function getIdProyecto()
    {
        return $this->idProyecto;
    }

    /**
     * Add faseFase
     *
     * @param \Tesis\AdminBundle\Entity\Fase $faseFase
     * @return Proyecto
     */
    public function addFaseFase(\Tesis\AdminBundle\Entity\Fase $faseFase)
    {
        $this->faseFase[] = $faseFase;

        return $this;
    }

    /**
     * Remove faseFase
     *
     * @param \Tesis\AdminBundle\Entity\Fase $faseFase
     */
    public function removeFaseFase(\Tesis\AdminBundle\Entity\Fase $faseFase)
    {
        $this->faseFase->removeElement($faseFase);
    }

    /**
     * Get faseFase
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFaseFase()
    {
        return $this->faseFase;
    }
}
