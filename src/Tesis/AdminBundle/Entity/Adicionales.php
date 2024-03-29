<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Adicionales
 *
 * @ORM\Table(name="adicionales", indexes={@ORM\Index(name="fk_resultados_diario1_idx", columns={"diario_id_diario"})})
 * @ORM\Entity
 * @UniqueEntity(fields={"nombre", "diarioDiario"}, errorPath="nombre", message="Esta nombre ya esta registrado para este diario.")  
 */
class Adicionales
{

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=500, nullable=false)
     * @Assert\NotBlank(message="Por favor, introduzca nombre.")
     * @Assert\Length(
     *      min = 2,
     *      max = 500,
     *      minMessage = "el nombre debe tener minimo {{ limit }} caracteres.",
     *      maxMessage = "el nombre debe tener maximo {{ limit }} caracteres.")      
     */    
    private $nombre;


    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Por favor, introduzca una cantidad.")      
     * @Assert\Regex(
     *      pattern="/^[0-9][0-9]*$/",
     *      match=true,
     *      message="Por favor, introduzca un número valido."
     *  )      
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=2000, nullable=false)
     */
    private $comentario;

    /**
     * @var \Tesis\AdminBundle\Entity\Diario
     *
     * @ORM\ManyToOne(targetEntity="Tesis\AdminBundle\Entity\Diario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="diario_id_diario", referencedColumnName="id_diario")
     * })
     * @Assert\NotBlank(message="Debe seleccionar al menos un diario.")            
     */
    private $diarioDiario;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_adicionales", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idAdicionales;


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
