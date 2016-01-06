<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\ExecutionContextInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Tesis\AdminBundle\Validator\Constraints as AdminAssert2;


/**
 * Cronograma
 *
 * @ORM\Table(name="cronograma", indexes={@ORM\Index(name="fk_cronograma_estudiante1_idx", columns={"estudiante_id_estudiante"}), @ORM\Index(name="fk_cronograma_actividad1_idx", columns={"actividad_id_actividad"})})
 * @ORM\Entity
 * @AdminAssert2\ValidDate2
 * @UniqueEntity(fields={"semana", "estudianteEstudiante"}, errorPath="semana", message="Esta semana ya esta registrada.")
 */
class Cronograma
{
    /**
     * @var string
     *
     * @ORM\Column(name="semana", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca semana.")       
     */
    private $semana;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca una fecha.") 
     * Assert\Date(message="Porfavor introduzca una fecha valida.")              
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="date", nullable=false)
     * Assert\Date(message="Porfavor introduzca una fecha valida.")                 
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=2000, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca comentario.")
     * @Assert\Length(
     *      min = 2,
     *      max = 2000,
     *      minMessage = "la descripción debe tener minimo {{ limit }} caracteres.",
     *      maxMessage = "la descripción debe tener maximo {{ limit }} caracteres.")      
     */ 
    private $comentario;


    /**
     * @var string
     *
     * @ORM\Column(name="horas", type="string", length=45, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca cantidad de horas.")     
     * @Assert\Regex(
     *      pattern="/^[1-9][0-9]*$/",
     *      match=true,
     *      message="Porfavor introduzca un número de horas valido."
     *  )      
     */
    private $horas;

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
     * @ORM\Column(name="personas", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca cantidad de personas.")     
     * @Assert\Regex(
     *      pattern="/^[1-9][0-9]*$/",
     *      match=true,
     *      message="Porfavor introduzca un número de personas valido."
     *  )      
     */
    private $personas;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcronograma", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idcronograma;

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
     * @ORM\ManyToMany(targetEntity="Tesis\AdminBundle\Entity\Actividad", inversedBy="cronogramacronograma")
     * @ORM\JoinTable(name="cronograma_has_actividad",
     *   joinColumns={
     *     @ORM\JoinColumn(name="cronograma_idcronograma", referencedColumnName="idcronograma")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="actividad_id_actividad", referencedColumnName="id_actividad", nullable=false)
     *   }
     * )
     * @Assert\Count(min = 1, minMessage = "Debe elegir al menos una actividad") 
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
     * Set semana
     *
     * @param string $semana
     * @return Cronograma
     */
    public function setSemana($semana)
    {
        $this->semana = $semana;

        return $this;
    }

    /**
     * Get semana
     *
     * @return string 
     */
    public function getSemana()
    {
        return $this->semana;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Cronograma
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
     * @return Cronograma
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
     * @return Cronograma
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
     * Set horas
     *
     * @param string $horas
     * @return Cronograma
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
     * Set calificacion
     *
     * @param string $calificacion
     * @return Cronograma
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
     * @return Cronograma
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
     * Set personas
     *
     * @param string $personas
     * @return Cronograma
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
     * Get idcronograma
     *
     * @return integer 
     */
    public function getIdcronograma()
    {
        return $this->idcronograma;
    }

    /**
     * Set estudianteEstudiante
     *
     * @param \Tesis\AdminBundle\Entity\Estudiante $estudianteEstudiante
     * @return Cronograma
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
     * @return Cronograma
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
        $this->actividad2->removeElement($actividadActividad);
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
