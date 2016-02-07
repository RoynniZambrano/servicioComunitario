<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InformeFinal
 *
 * @ORM\Table(name="informe_final", indexes={@ORM\Index(name="id_estudiante_foreign", columns={"id_estudiante"})})
 * @ORM\Entity
 */
class InformeFinal
{
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
     * @var integer
     *
     * @ORM\Column(name="id_informe_final", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idInformeFinal;

    /**
     * @var \Tesis\AdminBundle\Entity\Estudiante
     *
     * @ORM\ManyToOne(targetEntity="Tesis\AdminBundle\Entity\Estudiante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estudiante", referencedColumnName="id_estudiante")
     * })
     */
    private $idEstudiante;




    /**
     * Set calificacion
     *
     * @param string $calificacion
     * @return Informe
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
     * @return Informe
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
     * Get idInformeFinal
     *
     * @return integer 
     */
    public function getIdInformeFinal()
    {
        return $this->idInformeFinal;
    }

    /**
     * Set idEstudiante
     *
     * @param \Tesis\AdminBundle\Entity\Estudiante $idEstudiante
     * @return InformeFinal
     */
    public function setIdEstudiante(\Tesis\AdminBundle\Entity\Estudiante $idEstudiante = null)
    {
        $this->idEstudiante = $idEstudiante;

        return $this;
    }

    /**
     * Get idEstudiante
     *
     * @return \Tesis\AdminBundle\Entity\Estudiante 
     */
    public function getIdEstudiante()
    {
        return $this->idEstudiante;
    }
}
