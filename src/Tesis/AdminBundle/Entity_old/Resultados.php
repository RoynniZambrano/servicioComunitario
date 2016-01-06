<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Resultados
 *
 * @ORM\Table(name="resultados", indexes={@ORM\Index(name="fk_resultados_diario1_idx", columns={"diario_id_diario"})})
 * @ORM\Entity
 * @UniqueEntity(fields={"nombre", "diarioDiario"}, errorPath="nombre", message="Esta nombre ya esta registrada para este diraio.")  
 */
class Resultados
{

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=500, nullable=false)
     * @Assert\NotBlank(message="Porfavor introduzca nombre.")
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
     * @Assert\NotBlank(message="Porfavor introduzca una cantidad.")      
     * @Assert\Regex(
     *      pattern="/^[0-9][0-9]*$/",
     *      match=true,
     *      message="Porfavor introduzca un número valido."
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
     * @var integer
     *
     * @ORM\Column(name="id_resultados", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idResultados;

    /**
     * @var \Tesis\AdminBundle\Entity\Diario
     *
     * @ORM\ManyToOne(targetEntity="Tesis\AdminBundle\Entity\Diario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="diario_id_diario", referencedColumnName="id_diario")
     * })
     * @Assert\NotBlank(message="Debe elegir al menos un diario.")            
     */
    private $diarioDiario;



    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Resultados
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
     * @return Resultados
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
     * @return Resultados
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
     * Get idResultados
     *
     * @return integer 
     */
    public function getIdResultados()
    {
        return $this->idResultados;
    }

    /**
     * Set diarioDiario
     *
     * @param \Tesis\AdminBundle\Entity\Diario $diarioDiario
     * @return Resultados
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
