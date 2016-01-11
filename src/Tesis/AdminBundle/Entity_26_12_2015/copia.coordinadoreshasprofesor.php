<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoordinadoresHasProfesor
 *
 * @ORM\Table(name="coordinadores_has_profesor", indexes={@ORM\Index(name="fk_tutoria_has_usuario_usuario1_idx", columns={"profesor_id_proyecto"}), @ORM\Index(name="fk_coordinadores_has_profesor_coordinadores1_idx", columns={"coordinadores_id_coordinadores"}), @ORM\Index(name="fk_coordinadores_has_profesor_profesor1_idx", columns={"profesor_id_suplente"})})
 * @ORM\Entity
 */
class CoordinadoresHasProfesor
{
    /**
     * @var \Tesis\AdminBundle\Entity\Profesor
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Tesis\AdminBundle\Entity\Profesor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profesor_id_suplente", referencedColumnName="id_profesor")
     * })
     */
    private $profesorSuplente;

    /**
     * @var \Tesis\AdminBundle\Entity\Coordinadores
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Tesis\AdminBundle\Entity\Coordinadores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="coordinadores_id_coordinadores", referencedColumnName="id_coordinadores")
     * })
     */
    private $coordinadoresCoordinadores;

    /**
     * @var \Tesis\AdminBundle\Entity\Profesor
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Tesis\AdminBundle\Entity\Profesor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profesor_id_proyecto", referencedColumnName="id_profesor")
     * })
     */
    private $profesorProyecto;



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
     * Set coordinadoresCoordinadores
     *
     * @param \Tesis\AdminBundle\Entity\Coordinadores $coordinadoresCoordinadores
     * @return CoordinadoresHasProfesor
     */
    public function setCoordinadoresCoordinadores(\Tesis\AdminBundle\Entity\Coordinadores $coordinadoresCoordinadores)
    {
        $this->coordinadoresCoordinadores = $coordinadoresCoordinadores;

        return $this;
    }

    /**
     * Get coordinadoresCoordinadores
     *
     * @return \Tesis\AdminBundle\Entity\Coordinadores 
     */
    public function getCoordinadoresCoordinadores()
    {
        return $this->coordinadoresCoordinadores;
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
}
