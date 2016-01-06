<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Tutoria
 *
 * @ORM\Table(name="tutoria", indexes={@ORM\Index(name="fk_gestiona_proyecto1_idx", columns={"proyecto_id_proyecto"})})
 * @ORM\Entity
 * @UniqueEntity(fields="proyectoProyecto", message="Este proyecto ya esta registrado.")   
 */
class Tutoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tutores", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idTutores;

    /**
     * @var \Tesis\AdminBundle\Entity\Proyecto
     * @Assert\NotBlank(message="Porfavor introduzca un proyecto.")
     *
     * @ORM\ManyToOne(targetEntity="Tesis\AdminBundle\Entity\Proyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proyecto_id_proyecto", referencedColumnName="id_proyecto")
     * })
     */
    private $proyectoProyecto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * @Assert\NotBlank(message="Porfavor introduzca un tutor.")
     *
     * @ORM\ManyToMany(targetEntity="Tesis\AdminBundle\Entity\Usuario", inversedBy="tutoriaTutores")
     * @ORM\JoinTable(name="tutoria_has_usuario",
     *   joinColumns={
     *     @ORM\JoinColumn(name="tutoria_id_tutores", referencedColumnName="id_tutores")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="usuario_id_usuario", referencedColumnName="id_usuario")
     *   }
     * )
     * @Assert\Count(min = 1, minMessage = "Debe elegir al menos un Tutor")      
     */
    private $usuarioUsuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuarioUsuario = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idTutores
     *
     * @return integer 
     */
    public function getIdTutores()
    {
        return $this->idTutores;
    }

    /**
     * Set proyectoProyecto
     *
     * @param \Tesis\AdminBundle\Entity\Proyecto $proyectoProyecto
     * @return Tutoria
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

    /**
     * Add usuarioUsuario
     *
     * @param \Tesis\AdminBundle\Entity\Usuario $usuarioUsuario
     * @return Tutoria
     */
    public function addUsuarioUsuario(\Tesis\AdminBundle\Entity\Usuario $usuarioUsuario)
    {
        $this->usuarioUsuario[] = $usuarioUsuario;

        return $this;
    }

    /**
     * Remove usuarioUsuario
     *
     * @param \Tesis\AdminBundle\Entity\Usuario $usuarioUsuario
     */
    public function removeUsuarioUsuario(\Tesis\AdminBundle\Entity\Usuario $usuarioUsuario)
    {
        $this->usuarioUsuario->removeElement($usuarioUsuario);
    }

    /**
     * Get usuarioUsuario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuarioUsuario()
    {
        return $this->usuarioUsuario;
    }
}
