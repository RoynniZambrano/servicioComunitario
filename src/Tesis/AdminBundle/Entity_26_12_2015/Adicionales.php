<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adicionales
 *
 * @ORM\Table(name="adicionales", indexes={@ORM\Index(name="fk_resultados_diario1_idx", columns={"diario_id_diario"})})
 * @ORM\Entity
 */
class Adicionales
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=500, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="string", length=100, nullable=false)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=2000, nullable=false)
     */
    private $comentario;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_adicionales", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdicionales;

    /**
     * @var \Tesis\AdminBundle\Entity\Diario
     *
     * @ORM\ManyToOne(targetEntity="Tesis\AdminBundle\Entity\Diario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="diario_id_diario", referencedColumnName="id_diario")
     * })
     */
    private $diarioDiario;



    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Adicionales
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return Adicionales
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return Adicionales
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Get idAdicionales
     *
     * @return integer 
     */
    public function getIdAdicionales()
    {
        return $this->idAdicionales;
    }

    /**
     * Set diarioDiario
     *
     * @param \Tesis\AdminBundle\Entity\Diario $diarioDiario
     * @return Adicionales
     */
    public function setDiarioDiario(\Tesis\AdminBundle\Entity\Diario $diarioDiario = null)
    {
        $this->diarioDiario = $diarioDiario;

        return $this;
    }

    /**
     * Get diarioDiario
     *
     * @return \Tesis\AdminBundle\Entity\Diario 
     */
    public function getDiarioDiario()
    {
        return $this->diarioDiario;
    }
}
