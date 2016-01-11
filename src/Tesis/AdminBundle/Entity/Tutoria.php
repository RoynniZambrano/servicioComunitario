<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Tutoria
 *
 * @ORM\Table(name="tutoria", indexes={@ORM\Index(name="fk_tutoria_profesor1_idx", columns={"profesor_id_profesor"})})
 * @ORM\Entity
 * @UniqueEntity(fields={"profesorProfesor", "periodo"}, errorPath="profesorProfesor", message="Este profesor ya esta registrado.")   
 */
class Tutoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tutoria", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idTutoria;

    /**
     * @var \Tesis\AdminBundle\Entity\Profesor
     * @Assert\NotBlank(message="Porfavor introduzca un profesor.")      
     *
     * @ORM\ManyToOne(targetEntity="Tesis\AdminBundle\Entity\Profesor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profesor_id_profesor", referencedColumnName="id_profesor")
     * })
     */
    private $profesorProfesor;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tesis\AdminBundle\Entity\Estudiante", inversedBy="tutoriaTutoria")
     * @ORM\JoinTable(name="tutoria_has_estudiante",
     *   joinColumns={
     *     @ORM\JoinColumn(name="tutoria_id_tutoria", referencedColumnName="id_tutoria")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="estudiante_id_estudiante", referencedColumnName="id_estudiante")
     *   }
     * )
     * @Assert\Count(min = 1, minMessage = "Debe elegir al menos un estudiante")       
     */
    private $estudianteEstudiante;


    /**
     * @var string
     *
     * @ORM\Column(name="periodo", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca periodo.")       
     */
    private $periodo = '2015-1';      

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->estudianteEstudiante = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idTutoria
     *
     * @return integer 
     */
    public function getIdTutoria()
    {
        return $this->idTutoria;
    }

    /**
     * Set profesorProfesor
     *
     * @param \Tesis\AdminBundle\Entity\Profesor $profesorProfesor
     * @return Tutoria
     */
    public function setProfesorProfesor(\Tesis\AdminBundle\Entity\Profesor $profesorProfesor = null)
    {
        $this->profesorProfesor = $profesorProfesor;

        return $this;
    }

    /**
     * Get profesorProfesor
     *
     * @return \Tesis\AdminBundle\Entity\Profesor 
     */
    public function getProfesorProfesor()
    {
        return $this->profesorProfesor;
    }

    /**
     * Add estudianteEstudiante
     *
     * @param \Tesis\AdminBundle\Entity\Estudiante $estudianteEstudiante
     * @return Tutoria
     */
    public function addEstudianteEstudiante(\Tesis\AdminBundle\Entity\Estudiante $estudianteEstudiante)
    {
        $this->estudianteEstudiante[] = $estudianteEstudiante;

        return $this;
    }

    /**
     * Remove estudianteEstudiante
     *
     * @param \Tesis\AdminBundle\Entity\Estudiante $estudianteEstudiante
     */
    public function removeEstudianteEstudiante(\Tesis\AdminBundle\Entity\Estudiante $estudianteEstudiante)
    {
        $this->estudianteEstudiante->removeElement($estudianteEstudiante);
    }

    /**
     * Get estudianteEstudiante
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstudianteEstudiante()
    {
        return $this->estudianteEstudiante;
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

    
}
