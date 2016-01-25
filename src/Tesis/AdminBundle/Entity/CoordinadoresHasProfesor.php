<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * CoordinadoresHasProfesor
 *
 * @ORM\Table(name="coordinadores_has_profesor")
 * @ORM\Entity
 * @UniqueEntity(fields={"proyectoProyecto", "periodo"}, errorPath="proyectoProyecto", message="Este proyecto ya esta registrado.") 
 */
class CoordinadoresHasProfesor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="coordinadores_has_profesor_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $coordinadoresHasProfesorId;

    /**
     * @var \Tesis\AdminBundle\Entity\Proyecto
     *
     * @ORM\ManyToOne(targetEntity="Tesis\AdminBundle\Entity\Proyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proyecto_id_proyecto", referencedColumnName="id_proyecto")
     * })
     * @Assert\NotBlank(message="Porfavor introduzca un proyecto.")     
     */
    private $proyectoProyecto;

    /**
     * var \Tesis\AdminBundle\Entity\Profesor
     *    
     * @ORM\ManyToOne(targetEntity="Tesis\AdminBundle\Entity\Profesor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profesor_id_suplente", referencedColumnName="id_profesor")
     * })
     * @Assert\NotBlank(message="Debe elegir al menos un coordinador.")      
     * Assert\Count(min = 1, minMessage = "Debe elegir al menos un coordinador")      
    */    
    private $profesorSuplente;

    /**
     * var \Tesis\AdminBundle\Entity\Profesor
     *    
     * @ORM\ManyToOne(targetEntity="Tesis\AdminBundle\Entity\Profesor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profesor_id_proyecto", referencedColumnName="id_profesor")
     * })
     * @Assert\NotBlank(message="Debe elegir al menos un coordinador.")      
     * Assert\Count(min = 1, minMessage = "Debe elegir al menos un coordinador")       
    */
    private $profesorProyecto;    

    /**
     * @var string
     *
     * @ORM\Column(name="periodo", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca periodo.")       
     */
    private $periodo = '2015-1'; 


    /**
     * Set coordinadoresHasProfesorId
     *
     * @param integer $coordinadoresHasProfesorId
     * @return CoordinadoresHasProfesor
     */
    public function setCoordinadoresHasProfesorId($coordinadoresHasProfesorId)
    {
        $this->coordinadoresHasProfesorId = $coordinadoresHasProfesorId;

        return $this;
    }

    /**
     * Get coordinadoresHasProfesorId
     *
     * @return integer 
     */
    public function getCoordinadoresHasProfesorId()
    {
        return $this->coordinadoresHasProfesorId;
    }

    /**
     * Set proyectoProyecto
     *
     * @param \Tesis\AdminBundle\Entity\Proyecto $proyectoProyecto
     * @return CoordinadoresHasProfesor
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
     * Set profesorSuplente
     *
     * @param \Tesis\AdminBundle\Entity\Profesor $profesorSuplente
     * @return CoordinadoresHasProfesor
     */
    public function setProfesorSuplente(\Tesis\AdminBundle\Entity\Profesor $profesorSuplente = null)
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
     * Set profesorProyecto
     *
     * @param \Tesis\AdminBundle\Entity\Profesor $profesorProyecto
     * @return CoordinadoresHasProfesor
     */
    public function setProfesorProyecto(\Tesis\AdminBundle\Entity\Profesor $profesorProyecto = null)
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
