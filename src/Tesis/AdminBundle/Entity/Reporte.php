<?php

namespace Tesis\AdminBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Reporte{
	
   /**
     * @var string
     *
     * @Assert\NotBlank(message = "Por favor, introduzca su departamento.")
     */
	private $departamento;

   /**
     * @var string
     *
     * @Assert\NotBlank(message = "Por favor, introduzca un período.")
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="profesor", type="string", nullable=true)
     */
    private $profesor;


    /**
     * Set departamento
     *
     * @param string $departamento
     * @return 
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
    
        return $this;
    }

    /**
     * Get departamento
     *
     * @return string 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set periodo
     *
     * @param string $periodo
     * @return 
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
     * Set profesor
     *
     * @param string $profesor
     * @return Estudiante
     */
    public function setProfesor($profesor)
    {
        $this->profesor = $profesor;

        return $this;
    }

    /**
     * Get profesor
     *
     * @return string 
     */
    public function getProfesor()
    {
        return $this->profesor;
    }

    
}