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
     * @ORM\Column(name="informe", type="blob", nullable=true)
     */
    private $informe;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_informe_final", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * Set informe
     *
     * @param string $informe
     * @return InformeFinal
     */
    public function setInforme($informe)
    {
        $this->informe = $informe;

        return $this;
    }

    /**
     * Get informe
     *
     * @return string 
     */
    public function getInforme()
    {
        return $this->informe;
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
