<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FechaPeriodo
 *
 * @ORM\Table(name="fecha_periodo")
 * @ORM\Entity
 */
class FechaPeriodo
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="actual", type="boolean", nullable=true)
     */
    private $actual;

    /**
     * @var boolean
     *
     * @ORM\Column(name="anterior", type="boolean", nullable=true)
     */
    private $anterior;

    /**
     * @var boolean
     *
     * @ORM\Column(name="proximo", type="boolean", nullable=true)
     */
    private $proximo;

    /**
     * @var string
     *
     * @ORM\Column(name="periodo", type="string", length=50, nullable=true)
     */
    private $periodo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_fecha_periodo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idFechaPeriodo;



    /**
     * Set actual
     *
     * @param boolean $actual
     * @return FechaPeriodo
     */
    public function setActual($actual)
    {
        $this->actual = $actual;

        return $this;
    }

    /**
     * Get actual
     *
     * @return boolean 
     */
    public function getActual()
    {
        return $this->actual;
    }

    /**
     * Set anterior
     *
     * @param boolean $anterior
     * @return FechaPeriodo
     */
    public function setAnterior($anterior)
    {
        $this->anterior = $anterior;

        return $this;
    }

    /**
     * Get anterior
     *
     * @return boolean 
     */
    public function getAnterior()
    {
        return $this->anterior;
    }

    /**
     * Set proximo
     *
     * @param boolean $proximo
     * @return FechaPeriodo
     */
    public function setProximo($proximo)
    {
        $this->proximo = $proximo;

        return $this;
    }

    /**
     * Get proximo
     *
     * @return boolean 
     */
    public function getProximo()
    {
        return $this->proximo;
    }

    /**
     * Set periodo
     *
     * @param string $periodo
     * @return FechaPeriodo
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

    /**
     * Get idFechaPeriodo
     *
     * @return integer 
     */
    public function getIdFechaPeriodo()
    {
        return $this->idFechaPeriodo;
    }
}
