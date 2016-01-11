<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diario
 *
 * @ORM\Table(name="diario", indexes={@ORM\Index(name="fk_diario_estudiante1_idx", columns={"estudiante_id_estudiante"}), @ORM\Index(name="fk_diario_cronograma1_idx", columns={"periodo_id_periodo"})})
 * @ORM\Entity
 */
class Diario
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="personal", type="string", length=3000, nullable=false)
     */
    private $personal;

    /**
     * @var string
     *
     * @ORM\Column(name="fortalezas", type="string", length=3000, nullable=false)
     */
    private $fortalezas;

    /**
     * @var string
     *
     * @ORM\Column(name="debilidades", type="string", length=3000, nullable=false)
     */
    private $debilidades;

    /**
     * @var string
     *
     * @ORM\Column(name="conclusion", type="string", length=3000, nullable=false)
     */
    private $conclusion;

    /**
     * @var string
     *
     * @ORM\Column(name="hora_inicio", type="string", length=100, nullable=true)
     */
    private $horaInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="hora_fin", type="string", length=100, nullable=true)
     */
    private $horaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="persona", type="string", length=100, nullable=true)
     */
    private $persona;

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
     * @var string
     *
     * @ORM\Column(name="horas", type="string", length=100, nullable=true)
     */
    private $horas;

    /**
     * @var string
     *
     * @ORM\Column(name="ninos", type="string", length=100, nullable=true)
     */
    private $ninos;

    /**
     * @var string
     *
     * @ORM\Column(name="adultos", type="string", length=100, nullable=true)
     */
    private $adultos;

    /**
     * @var string
     *
     * @ORM\Column(name="tercera_edad", type="string", length=100, nullable=true)
     */
    private $terceraEdad;

    /**
     * @var string
     *
     * @ORM\Column(name="discapacidad", type="string", length=100, nullable=true)
     */
    private $discapacidad;

    /**
     * @var string
     *
     * @ORM\Column(name="comunidad", type="text", nullable=true)
     */
    private $comunidad;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=3000, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_diario", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idDiario;

    /**
     * @var \Tesis\AdminBundle\Entity\Periodo
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Tesis\AdminBundle\Entity\Periodo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="periodo_id_periodo", referencedColumnName="id_periodo")
     * })
     */
    private $periodoPeriodo;

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
     * @ORM\ManyToMany(targetEntity="Tesis\AdminBundle\Entity\Actividad", inversedBy="diarioDiario")
     * @ORM\JoinTable(name="diario_has_actividad",
     *   joinColumns={
     *     @ORM\JoinColumn(name="diario_id_diario", referencedColumnName="id_diario")
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Diario
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set personal
     *
     * @param string $personal
     * @return Diario
     */
    public function setPersonal($personal)
    {
        $this->personal = $personal;

        return $this;
    }

    /**
     * Get personal
     *
     * @return string 
     */
    public function getPersonal()
    {
        return $this->personal;
    }

    /**
     * Set fortalezas
     *
     * @param string $fortalezas
     * @return Diario
     */
    public function setFortalezas($fortalezas)
    {
        $this->fortalezas = $fortalezas;

        return $this;
    }

    /**
     * Get fortalezas
     *
     * @return string 
     */
    public function getFortalezas()
    {
        return $this->fortalezas;
    }

    /**
     * Set debilidades
     *
     * @param string $debilidades
     * @return Diario
     */
    public function setDebilidades($debilidades)
    {
        $this->debilidades = $debilidades;

        return $this;
    }

    /**
     * Get debilidades
     *
     * @return string 
     */
    public function getDebilidades()
    {
        return $this->debilidades;
    }

    /**
     * Set conclusion
     *
     * @param string $conclusion
     * @return Diario
     */
    public function setConclusion($conclusion)
    {
        $this->conclusion = $conclusion;

        return $this;
    }

    /**
     * Get conclusion
     *
     * @return string 
     */
    public function getConclusion()
    {
        return $this->conclusion;
    }

    /**
     * Set horaInicio
     *
     * @param string $horaInicio
     * @return Diario
     */
    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;

        return $this;
    }

    /**
     * Get horaInicio
     *
     * @return string 
     */
    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    /**
     * Set horaFin
     *
     * @param string $horaFin
     * @return Diario
     */
    public function setHoraFin($horaFin)
    {
        $this->horaFin = $horaFin;

        return $this;
    }

    /**
     * Get horaFin
     *
     * @return string 
     */
    public function getHoraFin()
    {
        return $this->horaFin;
    }

    /**
     * Set persona
     *
     * @param string $persona
     * @return Diario
     */
    public function setPersona($persona)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return string 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set calificacion
     *
     * @param string $calificacion
     * @return Diario
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
     * @return Diario
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
     * Set horas
     *
     * @param string $horas
     * @return Diario
     */
    public function setHoras($horas)
    {
        $this->horas = $horas;

        return $this;
    }

    /**
     * Get horas
     *
     * @return string 
     */
    public function getHoras()
    {
        return $this->horas;
    }

    /**
     * Set ninos
     *
     * @param string $ninos
     * @return Diario
     */
    public function setNinos($ninos)
    {
        $this->ninos = $ninos;

        return $this;
    }

    /**
     * Get ninos
     *
     * @return string 
     */
    public function getNinos()
    {
        return $this->ninos;
    }

    /**
     * Set adultos
     *
     * @param string $adultos
     * @return Diario
     */
    public function setAdultos($adultos)
    {
        $this->adultos = $adultos;

        return $this;
    }

    /**
     * Get adultos
     *
     * @return string 
     */
    public function getAdultos()
    {
        return $this->adultos;
    }

    /**
     * Set terceraEdad
     *
     * @param string $terceraEdad
     * @return Diario
     */
    public function setTerceraEdad($terceraEdad)
    {
        $this->terceraEdad = $terceraEdad;

        return $this;
    }

    /**
     * Get terceraEdad
     *
     * @return string 
     */
    public function getTerceraEdad()
    {
        return $this->terceraEdad;
    }

    /**
     * Set discapacidad
     *
     * @param string $discapacidad
     * @return Diario
     */
    public function setDiscapacidad($discapacidad)
    {
        $this->discapacidad = $discapacidad;

        return $this;
    }

    /**
     * Get discapacidad
     *
     * @return string 
     */
    public function getDiscapacidad()
    {
        return $this->discapacidad;
    }

    /**
     * Set comunidad
     *
     * @param string $comunidad
     * @return Diario
     */
    public function setComunidad($comunidad)
    {
        $this->comunidad = $comunidad;

        return $this;
    }

    /**
     * Get comunidad
     *
     * @return string 
     */
    public function getComunidad()
    {
        return $this->comunidad;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Diario
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
     * Set idDiario
     *
     * @param integer $idDiario
     * @return Diario
     */
    public function setIdDiario($idDiario)
    {
        $this->idDiario = $idDiario;

        return $this;
    }

    /**
     * Get idDiario
     *
     * @return integer 
     */
    public function getIdDiario()
    {
        return $this->idDiario;
    }

    /**
     * Set periodoPeriodo
     *
     * @param \Tesis\AdminBundle\Entity\Periodo $periodoPeriodo
     * @return Diario
     */
    public function setPeriodoPeriodo(\Tesis\AdminBundle\Entity\Periodo $periodoPeriodo)
    {
        $this->periodoPeriodo = $periodoPeriodo;

        return $this;
    }

    /**
     * Get periodoPeriodo
     *
     * @return \Tesis\AdminBundle\Entity\Periodo 
     */
    public function getPeriodoPeriodo()
    {
        return $this->periodoPeriodo;
    }

    /**
     * Set estudianteEstudiante
     *
     * @param \Tesis\AdminBundle\Entity\Estudiante $estudianteEstudiante
     * @return Diario
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
     * @return Diario
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
