<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * CoordinadoresHasProfesor
 *
 * @ORM\Table(name="coordinadores_has_profesor", indexes={@ORM\Index(name="fk_gestiona_proyecto2_idx", columns={"proyecto_id_proyecto"})}) 
 * @ORM\Entity
 * @UniqueEntity(fields={"proyectoProyecto", "periodo"}, errorPath="proyectoProyecto", message="Esta proyecto ya esta registrado.")  
 */
class CoordinadoresHasProfesor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_coordinadores_has_profesor", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCoordinadoresHasProfesor;    


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
     * @var \Tesis\AdminBundle\Entity\Profesor
     *
     * @ORM\OneToOne(targetEntity="Tesis\AdminBundle\Entity\Profesor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profesor_id_proyecto", referencedColumnName="id_profesor")
     * })
     * @Assert\Count(min = 1, minMessage = "Debe elegir al menos un coordinador")
     * @Assert\NotBlank(message="Porfavor introduzca un coordinador.")     
     */          
    private $profesorProyecto;


    /**
     * @var \Tesis\AdminBundle\Entity\Profesor
     *
     * @ORM\OneToOne(targetEntity="Tesis\AdminBundle\Entity\Profesor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profesor_id_suplente", referencedColumnName="id_profesor")
     * })
     * @Assert\Count(min = 1, minMessage = "Debe elegir al menos un coordinador")
     * @Assert\NotBlank(message="Porfavor introduzca un coordinador.")      
     */        
    private $profesorSuplente;


    /**
     * @var string
     *
     * @ORM\Column(name="periodo", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca periodo.")       
     */
    private $periodo = '2015-1';  


    /**
     * Set profesorSuplente
     *
     * @param \Tesis\AdminBundle\Entity\Profesor $profesorSuplente
     * @return CoordinadoresHasProfesor
     */
    public function setProfesorSuplente(\Tesis\AdminBundle\Entity\Profesor $profesorSuplente)
    {
        $this->profesorSuplente = $profesorSuplente;

        return $this;
    }

    /**
     * Get profesorSuplente
     *
     * @return \Tesis\AdminBundle\Entity\Profesor 
     */
    public function getProfesorSuplente()
    {
        return $this->profesorSuplente;
    }


    /**
     * Get idCoordinadoresHasProfesor
     *
     * @return integer 
     */
    public function getidCoordinadoresHasProfesor()
    {
        return $this->idCoordinadoresHasProfesor;
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
     * Set profesorProyecto
     *
     * @param \Tesis\AdminBundle\Entity\Profesor $profesorProyecto
     * @return CoordinadoresHasProfesor
     */
    public function setProfesorProyecto(\Tesis\AdminBundle\Entity\Profesor $profesorProyecto)
    {
        $this->profesorProyecto = $profesorProyecto;

        return $this;
    }

    /**
     * Get profesorProyecto
     *
     * @return \Tesis\AdminBundle\Entity\Profesor 
     */
    public function getProfesorProyecto()
    {
        return $this->profesorProyecto;
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
