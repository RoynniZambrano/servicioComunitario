<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coordinadores
 *
 * @ORM\Table(name="coordinadores", indexes={@ORM\Index(name="fk_coordinadores_proyecto1_idx", columns={"proyecto_id_proyecto"})})
 * @ORM\Entity
 */
class Coordinadores
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_coordinadores", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCoordinadores;

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
     * Get idCoordinadores
     *
     * @return integer 
     */
    public function getIdCoordinadores()
    {
        return $this->idCoordinadores;
    }

    /**
     * Set proyectoProyecto
     *
     * @param \Tesis\AdminBundle\Entity\Proyecto $proyectoProyecto
     * @return Coordinadores
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
}
