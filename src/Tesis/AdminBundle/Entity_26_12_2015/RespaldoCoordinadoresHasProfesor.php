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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tesis\AdminBundle\Entity\Profesor", mappedBy="idcoordinadoreshasprofesorIdcoordinadoreshasprofesor1")
     * @Assert\Count(min = 1, minMessage = "Debe elegir al menos un coordinador")
     * @Assert\NotBlank(message="Porfavor introduzca un coordinador.")       
     */     
    private $profesorProyecto;


    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tesis\AdminBundle\Entity\Profesor", mappedBy="idcoordinadoreshasprofesorIdcoordinadoreshasprofesor2")
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
     * Constructor
     */
    public function __construct()
    {
        $this->profesorProyecto = new \Doctrine\Common\Collections\ArrayCollection();
        $this->profesorSuplente = new \Doctrine\Common\Collections\ArrayCollection();
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
     * add profesorProyecto
     *
     * @param \Tesis\AdminBundle\Entity\Profesor $profesorProyecto
     * @return CoordinadoresHasProfesor
     */
    public function addProfesorProyecto(\Tesis\AdminBundle\Entity\Profesor $profesorProyecto)
    {
        $this->profesorProyecto[] = $profesorProyecto;

        return $this;
    }

    /**
     * Remove profesorProyecto
     *
     * @param \Tesis\AdminBundle\Entity\Profesor $profesorProyecto
     */
    public function removeProfesor(\Tesis\AdminBundle\Entity\Profesor $profesorProyecto)
    {
        $this->profesorProyecto->removeElement($profesorProyecto);
    }


    /**
     * Get profesorProyecto
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfesorProyecto()
    {
        return $this->profesorProyecto;
    }




    /**
     * add profesorSuplente
     *
     * @param \Tesis\AdminBundle\Entity\Profesor $profesorSuplente
     * @return CoordinadoresHasProfesor
     */
    public function addProfesorSuplente(\Tesis\AdminBundle\Entity\Profesor $profesorSuplente)
    {
        $this->profesorSuplente[] = $profesorSuplente;

        return $this;
    }

    /**
     * Remove profesorSuplente
     *
     * @param \Tesis\AdminBundle\Entity\Profesor $profesorSuplente
     */
    public function removeProfesorSuplente(\Tesis\AdminBundle\Entity\Profesor $profesorSuplente)
    {
        $this->profesorSuplente->removeElement($profesorSuplente);
    }


    /**
     * Get profesorSuplente
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfesorSuplente()
    {
        return $this->profesorSuplente;
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
