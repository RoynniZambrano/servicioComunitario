<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Diario
 *
 * @ORM\Table(name="diario", indexes={@ORM\Index(name="fk_diario_estudiante1_idx", columns={"estudiante_id_estudiante"}), @ORM\Index(name="fk_diario_cronograma1_idx", columns={"periodo_id_periodo"})})
 * @ORM\Entity
 * @UniqueEntity(fields={"fecha", "estudianteEstudiante"}, errorPath="fecha", message="Esta fecha ya esta registrada.")  
 */
class Diario
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca una fecha.")
     * @Assert\Date(message="Porfavor introduzca una fecha valida.")
     */     
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="personal", type="string", length=3000, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca personal.")
     * @Assert\Length(
     *      min = 10,
     *      max = 3000,
     *      minMessage = "la descripción debe tener minimo {{ limit }} caracteres.",
     *      maxMessage = "la descripción debe tener maximo {{ limit }} caracteres.")      
     */
    private $personal;

    /**
     * @var string
     *
     * @ORM\Column(name="fortalezas", type="string", length=3000, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca fortalezas.")
     * @Assert\Length(
     *      min = 10,
     *      max = 3000,
     *      minMessage = "la descripción debe tener minimo {{ limit }} caracteres.",
     *      maxMessage = "la descripción debe tener maximo {{ limit }} caracteres.")      
     */
    private $fortalezas;

    /**
     * @var string
     *
     * @ORM\Column(name="debilidades", type="string", length=3000, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca debilidades.")
     * @Assert\Length(
     *      min = 10,
     *      max = 3000,
     *      minMessage = "la descripción debe tener minimo {{ limit }} caracteres.",
     *      maxMessage = "la descripción debe tener maximo {{ limit }} caracteres.")      
     */
    private $debilidades;

    /**
     * @var string
     *
     * @ORM\Column(name="conclusion", type="string", length=3000, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca conclusion.")
     * @Assert\Length(
     *      min = 10,
     *      max = 3000,
     *      minMessage = "la descripción debe tener minimo {{ limit }} caracteres.",
     *      maxMessage = "la descripción debe tener maximo {{ limit }} caracteres.")      
     */
    private $conclusion;

    /**
     * @var string
     *
     * @ORM\Column(name="hora_inicio", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca una hora de inicio.")
     * @Assert\Length(
     *      min = 7,
     *      max = 7,
     *      exactMessage = "Porfavor intruduzca una hora valida.")      
     */       
    private $horaInicio;


    /**
     * @var string
     *
     * @ORM\Column(name="hora_fin", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca una hora de culminacion.") 
     * @Assert\Length(
     *      min = 7,
     *      max = 7,
     *      exactMessage = "Porfavor intruduzca una hora valida.")       
     */ 
    private $horaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="personas", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca cantidad de personas.")      
     * @Assert\Regex(
     *      pattern="/^[0-9][0-9]*$/",
     *      match=true,
     *      message="Porfavor introduzca un número de personas valido."
     *  )      
     */
    private $personas;


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
     * @ORM\Column(name="horas", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca cantidad de horas.")      
     * @Assert\Regex(
     *      pattern="/^[0-9][0-9]*$/",
     *      match=true,
     *      message="Porfavor introduzca un número de horas valido."
     *  )      
     */
    private $horas;


    /**
     * @var string
     *
     * @ORM\Column(name="ninos", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca niños.")      
     * @Assert\Regex(
     *      pattern="/^[0-9][0-9]*$/",
     *      match=true,
     *      message="Porfavor introduzca un número de niños valido."
     *  )      
     */
    private $ninos;


    /**
     * @var string
     *
     * @ORM\Column(name="adultos", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca adultos.")      
     * @Assert\Regex(
     *      pattern="/^[0-9][0-9]*$/",
     *      match=true,
     *      message="Porfavor introduzca un número de adultos valido."
     *  )      
     */
    private $adultos;


    /**
     * @var string
     *
     * @ORM\Column(name="tercera_edad", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca tercera edad.")      
     * @Assert\Regex(
     *      pattern="/^[0-9][0-9]*$/",
     *      match=true,
     *      message="Porfavor introduzca un número de tercera edad valido."
     *  )      
     */
    private $terceraEdad;


    /**
     * @var string
     *
     * @ORM\Column(name="discapacidad", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca discapacidad.")      
     * @Assert\Regex(
     *      pattern="/^[0-9][0-9]*$/",
     *      match=true,
     *      message="Porfavor introduzca un número de discapacidad valido."
     *  )      
     */
    private $discapacidad;

    /**
     * @var string
     *
     * @ORM\Column(name="comunidad", type="string", length=3000, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca comunidad.")
     * @Assert\Length(
     *      min = 4,
     *      max = 300,
     *      minMessage = "la comunidad debe tener minimo {{ limit }} caracteres.",
     *      maxMessage = "la comunidad debe tener maximo {{ limit }} caracteres.")      
     */    
    private $comunidad;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=3000, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca descripción.")
     * @Assert\Length(
     *      min = 10,
     *      max = 3000,
     *      minMessage = "la descripción debe tener minimo {{ limit }} caracteres.",
     *      maxMessage = "la descripción debe tener maximo {{ limit }} caracteres.")      
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_diario", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idDiario;

    /**
     * @var \Tesis\AdminBundle\Entity\Periodo
     *
     * @ORM\OneToOne(targetEntity="Tesis\AdminBundle\Entity\Periodo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="periodo_id_periodo", referencedColumnName="id_periodo")
     * })
     */
    private $periodoPeriodo;

    /**
     * @var \Tesis\AdminBundle\Entity\Proyecto
     *
     * @ORM\ManyToOne(targetEntity="Tesis\AdminBundle\Entity\Proyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proyecto_id_proyecto", referencedColumnName="id_proyecto")
     * })         
     */
    private $proyectoProyecto;


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
     * Set personas
     *
     * @param string $personas
     * @return Diario
     */
    public function setPersonas($personas)
    {
        $this->personas = $personas;

        return $this;
    }

    /**
     * Get personas
     *
     * @return string 
     */
    public function getPersonas()
    {
        return $this->personas;
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

    /**
     * Set proyectoProyecto
     *
     * @param \Tesis\AdminBundle\Entity\Proyecto $proyectoProyecto
     * @return Diario
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


    public function __toString()
    {
        return (string) $this->fecha->format('d-m-Y');
    }

}
