<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Periodo
 *
 * @ORM\Table(name="periodo", indexes={@ORM\Index(name="fk_cronograma_estudiante1_idx", columns={"estudiante_id_estudiante"})})
 * @ORM\Entity
 */
class Periodo
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=false)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="date", nullable=false)
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=2000, nullable=false)
     */
    private $comentario;

    /**
     * @var string
     *
     * @ORM\Column(name="calificacion", type="string", length=100, nullable=true)
     */
    private $calificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=3000, nullable=true)
     */
    private $observacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_periodo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idPeriodo;

    /**
     * @var \Tesis\AdminBundle\Entity\Estudiante
     *
     * @ORM\ManyToOne(targetEntity="Tesis\AdminBundle\Entity\Estudiante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estudiante_id_estudiante", referencedColumnName="id_estudiante")
     * })
     */
    private $estudianteEstudiante;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tesis\AdminBundle\Entity\Actividad", inversedBy="periodoPeriodo")
     * @ORM\JoinTable(name="periodo_has_actividad",
     *   joinColumns={
     *     @ORM\JoinColumn(name="periodo_id_periodo", referencedColumnName="id_periodo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="actividad_id_actividad", referencedColumnName="id_actividad")
     *   }
     * )
     */
    private $actividadActividad;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actividadActividad = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Periodo
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
     * @return Periodo
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
     * @return Periodo
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
     * Set comentario
     *
     * @param string $comentario
     * @return Periodo
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set calificacion
     *
     * @param string $calificacion
     * @return Periodo
     */
    public function setCalificacion($calificacion)
    {
        $this->calificacion = $calificacion;

        return $this;
    }

    /**
     * Get calificacion
     *
     * @return string 
     */
    public function getCalificacion()
    {
        return $this->calificacion;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Periodo
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Get idPeriodo
     *
     * @return integer 
     */
    public function getIdPeriodo()
    {
        return $this->idPeriodo;
    }

    /**
     * Set estudianteEstudiante
     *
     * @param \Tesis\AdminBundle\Entity\Estudiante $estudianteEstudiante
     * @return Periodo
     */
    public function setEstudianteEstudiante(\Tesis\AdminBundle\Entity\Estudiante $estudianteEstudiante = null)
    {
        $this->estudianteEstudiante = $estudianteEstudiante;

        return $this;
    }

    /**
     * Get estudianteEstudiante
     *
     * @return \Tesis\AdminBundle\Entity\Estudiante 
     */
    public function getEstudianteEstudiante()
    {
        return $this->estudianteEstudiante;
    }

    /**
     * Add actividadActividad
     *
     * @param \Tesis\AdminBundle\Entity\Actividad $actividadActividad
     * @return Periodo
     */
    public function addActividadActividad(\Tesis\AdminBundle\Entity\Actividad $actividadActividad)
    {
        $this->actividadActividad[] = $actividadActividad;

        return $this;
    }

    /**
     * Remove actividadActividad
     *
     * @param \Tesis\AdminBundle\Entity\Actividad $actividadActividad
     */
    public function removeActividadActividad(\Tesis\AdminBundle\Entity\Actividad $actividadActividad)
    {
        $this->actividadActividad->removeElement($actividadActividad);
    }

    /**
     * Get actividadActividad
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActividadActividad()
    {
        return $this->actividadActividad;
    }
}
