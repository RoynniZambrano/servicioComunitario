<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Actividad
 *
 * @ORM\Table(name="actividad")
 * @ORM\Entity
 * @UniqueEntity(fields="nombre", message="Este nombre ya esta registrado.") 
 */
class Actividad
{
    /**
     * @var string
     * @ORM\Column(name="nombre", type="string", length=500, nullable=false)
     * @Assert\NotBlank(message="Por favor, introduzca nombre.")
     * @Assert\Length(
     *      max = 500,
     *      maxMessage = "el nombre debe tener maximo {{ limit }} caracteres.")
     */  
    private $nombre;

    /**
     * @var string
     * @ORM\Column(name="descripcion", type="string", length=2000, nullable=true)
     * _Assert\NotBlank(message="Por favor, introduzca descripción.")
     * _Assert\Length(
     *      max = 1999,
     *      maxMessage = "la descripción tener maximo {{ limit }} caracteres.")
     */ 
    private $descripcion;


    /**
     * @var integer
     *
     * @ORM\Column(name="id_actividad", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idActividad;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tesis\AdminBundle\Entity\Periodo", mappedBy="actividadActividad")
     */
    private $periodoPeriodo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tesis\AdminBundle\Entity\Fase", mappedBy="actividadActividad")
     */
    private $faseFase;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tesis\AdminBundle\Entity\Diario", mappedBy="actividadActividad")
     */
    private $diarioDiario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->periodoPeriodo = new \Doctrine\Common\Collections\ArrayCollection();
        $this->faseFase = new \Doctrine\Common\Collections\ArrayCollection();
        $this->diarioDiario = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Actividad
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Actividad
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }


    /**
     * Get idActividad
     *
     * @return integer 
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }

    /**
     * Add periodoPeriodo
     *
     * @param \Tesis\AdminBundle\Entity\Periodo $periodoPeriodo
     * @return Actividad
     */
    public function addPeriodoPeriodo(\Tesis\AdminBundle\Entity\Periodo $periodoPeriodo)
    {
        $this->periodoPeriodo[] = $periodoPeriodo;

        return $this;
    }

    /**
     * Remove periodoPeriodo
     *
     * @param \Tesis\AdminBundle\Entity\Periodo $periodoPeriodo
     */
    public function removePeriodoPeriodo(\Tesis\AdminBundle\Entity\Periodo $periodoPeriodo)
    {
        $this->periodoPeriodo->removeElement($periodoPeriodo);
    }

    /**
     * Get periodoPeriodo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPeriodoPeriodo()
    {
        return $this->periodoPeriodo;
    }

    /**
     * Add faseFase
     *
     * @param \Tesis\AdminBundle\Entity\Fase $faseFase
     * @return Actividad
     */
    public function addFaseFase(\Tesis\AdminBundle\Entity\Fase $faseFase)
    {
        $this->faseFase[] = $faseFase;

        return $this;
    }

    /**
     * Remove faseFase
     *
     * @param \Tesis\AdminBundle\Entity\Fase $faseFase
     */
    public function removeFaseFase(\Tesis\AdminBundle\Entity\Fase $faseFase)
    {
        $this->faseFase->removeElement($faseFase);
    }

    /**
     * Get faseFase
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFaseFase()
    {
        return $this->faseFase;
    }

    /**
     * Add diarioDiario
     *
     * @param \Tesis\AdminBundle\Entity\Diario $diarioDiario
     * @return Actividad
     */
    public function addDiarioDiario(\Tesis\AdminBundle\Entity\Diario $diarioDiario)
    {
        $this->diarioDiario[] = $diarioDiario;

        return $this;
    }

    /**
     * Remove diarioDiario
     *
     * @param \Tesis\AdminBundle\Entity\Diario $diarioDiario
     */
    public function removeDiarioDiario(\Tesis\AdminBundle\Entity\Diario $diarioDiario)
    {
        $this->diarioDiario->removeElement($diarioDiario);
    }

    /**
     * Get diarioDiario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDiarioDiario()
    {
        return $this->diarioDiario;
    }
}
