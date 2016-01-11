<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Laborsc
 *
 * @ORM\Table(name="laborsc", indexes={@ORM\Index(name="fk_laborsc_proyecto1_idx", columns={"proyecto_id_proyecto"})})
 * @ORM\Entity
 * @UniqueEntity(fields={"proyectoProyecto", "periodo"}, errorPath="proyectoProyecto", message="Este proyecto ya esta registrado.") 
 */
class Laborsc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_laborsc", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idLaborsc;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tesis\AdminBundle\Entity\Estudiante", mappedBy="laborscLaborsc")
     * @Assert\Count(min = 1, minMessage = "Debe elegir al menos un Estudiante")
     * @Assert\NotBlank(message="Porfavor introduzca un tutor.")       
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
     * Get idLaborsc
     *
     * @return integer 
     */
    public function getIdLaborsc()
    {
        return $this->idLaborsc;
    }

    /**
     * Set proyectoProyecto
     *
     * @param \Tesis\AdminBundle\Entity\Proyecto $proyectoProyecto
     * @return Laborsc
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
     * Add estudianteEstudiante
     *
     * @param \Tesis\AdminBundle\Entity\Estudiante $estudianteEstudiante
     * @return Laborsc
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
