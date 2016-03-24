<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Fase
 *
 * @ORM\Table(name="fase")
 * @ORM\Entity
 * @UniqueEntity(fields="nombre", message="Este nombre ya esta registrado.")   
 */
class Fase
{

    /**
     * @var string
     * @ORM\Column(name="nombre", type="string", length=500, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca nombre.")
     * @Assert\Length(
     *      min = 5,
     *      max = 500,
     *      minMessage = "el nombre debe tener minimo {{ limit }} caracteres.",
     *      maxMessage = "el nombre debe tener maximo {{ limit }} caracteres.")
     */      
    private $nombre;


    /**
     * @var string
     * @ORM\Column(name="descripcion", type="string", length=2000, nullable=true)
     * _Assert\NotBlank(message="Porfavor introduzca descripción.")
     * _Assert\Length(
     *      min = 20,
     *      max = 1999,
     *      minMessage = "la descripción debe tener minimo {{ limit }} caracteres.",
     *      maxMessage = "la descripción tener maximo {{ limit }} caracteres.")
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_fase", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idFase;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tesis\AdminBundle\Entity\Proyecto", mappedBy="faseFase")
     */
    private $proyectoProyecto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tesis\AdminBundle\Entity\Actividad", inversedBy="faseFase")
     * @ORM\JoinTable(name="fase_has_actividad",
     *   joinColumns={
     *     @ORM\JoinColumn(name="fase_id_fase", referencedColumnName="id_fase")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="actividad_id_actividad", referencedColumnName="id_actividad")
     *   }
     * )
     * Assert\Count(min = 1, minMessage = "Debe elegir al menos una actividad") 
     */
    private $actividadActividad;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->proyectoProyecto = new \Doctrine\Common\Collections\ArrayCollection();
        $this->actividadActividad = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Fase
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
     * @return Fase
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
     * Get idFase
     *
     * @return integer 
     */
    public function getIdFase()
    {
        return $this->idFase;
    }

    /**
     * Add proyectoProyecto
     *
     * @param \Tesis\AdminBundle\Entity\Proyecto $proyectoProyecto
     * @return Fase
     */
    public function addProyectoProyecto(\Tesis\AdminBundle\Entity\Proyecto $proyectoProyecto)
    {
        $this->proyectoProyecto[] = $proyectoProyecto;

        return $this;
    }

    /**
     * Remove proyectoProyecto
     *
     * @param \Tesis\AdminBundle\Entity\Proyecto $proyectoProyecto
     */
    public function removeProyectoProyecto(\Tesis\AdminBundle\Entity\Proyecto $proyectoProyecto)
    {
        $this->proyectoProyecto->removeElement($proyectoProyecto);
    }

    /**
     * Get proyectoProyecto
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProyectoProyecto()
    {
        return $this->proyectoProyecto;
    }

    /**
     * Add actividadActividad
     *
     * @param \Tesis\AdminBundle\Entity\Actividad $actividadActividad
     * @return Fase
     */
    public function addActividadActividad(\Tesis\AdminBundle\Entity\Actividad $actividadActividad)
    {
        $this->actividadActividad[] = $actividadActividad;

        return $this;
    }

    /**
     * Remove actividadActividad
     *
     * @param \Tesis\AdminBundle\Entity\Actividad $actividadActividad
     */
    public function removeActividadActividad(\Tesis\AdminBundle\Entity\Actividad $actividadActividad)
    {
        $this->actividadActividad->removeElement($actividadActividad);
    }

    /**
     * Get actividadActividad
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActividadActividad()
    {
        return $this->actividadActividad;
    }
}
