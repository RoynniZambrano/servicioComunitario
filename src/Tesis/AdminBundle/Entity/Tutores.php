<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Tutores
 *
 * @ORM\Table(name="tutores", indexes={@ORM\Index(name="fk_gestiona_proyecto1_idx", columns={"proyecto_id_proyecto"})})
 * @ORM\Entity
 * @UniqueEntity(fields={"proyectoProyecto", "periodo"}, errorPath="proyectoProyecto", message="Este proyecto ya esta registrado.")  
 */
class Tutores
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tutores", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idTutores;

    /**
     * @var \Tesis\AdminBundle\Entity\Proyecto
     * @Assert\NotBlank(message="Porfavor introduzca un proyecto.")     
     *
     * @ORM\ManyToOne(targetEntity="Tesis\AdminBundle\Entity\Proyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proyecto_id_proyecto", referencedColumnName="id_proyecto")
     * })
     */
    private $proyectoProyecto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * @Assert\NotBlank(message="Porfavor introduzca un tutor.")     
     *
     * @ORM\ManyToMany(targetEntity="Tesis\AdminBundle\Entity\Profesor", inversedBy="tutoresTutores")
     * @ORM\JoinTable(name="tutores_has_profesor",
     *   joinColumns={
     *     @ORM\JoinColumn(name="tutores_id_tutores", referencedColumnName="id_tutores")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="profesor_id_profesor", referencedColumnName="id_profesor")
     *   }
     * )
     * @Assert\Count(min = 1, minMessage = "Debe elegir al menos un Tutor")      
     */
    private $profesorProfesor;

    /**
     * @var string
     *
     * @ORM\Column(name="periodo", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca Período.")       
     */
    private $periodo = '2015-1';    

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->profesorProfesor = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idTutores
     *
     * @return integer 
     */
    public function getIdTutores()
    {
        return $this->idTutores;
    }

    /**
     * Set proyectoProyecto
     *
     * @param \Tesis\AdminBundle\Entity\Proyecto $proyectoProyecto
     * @return Tutores
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
     * Add profesorProfesor
     *
     * @param \Tesis\AdminBundle\Entity\Profesor $profesorProfesor
     * @return Tutores
     */
    public function addProfesorProfesor(\Tesis\AdminBundle\Entity\Profesor $profesorProfesor)
    {
        $this->profesorProfesor[] = $profesorProfesor;

        return $this;
    }

    /**
     * Remove profesorProfesor
     *
     * @param \Tesis\AdminBundle\Entity\Profesor $profesorProfesor
     */
    public function removeProfesorProfesor(\Tesis\AdminBundle\Entity\Profesor $profesorProfesor)
    {
        $this->profesorProfesor->removeElement($profesorProfesor);
    }

    /**
     * Get profesorProfesor
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfesorProfesor()
    {
        return $this->profesorProfesor;
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
