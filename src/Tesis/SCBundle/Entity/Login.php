<?php

namespace Tesis\SCBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Login{
	
   /**
     * @var string
     *
     * @Assert\NotBlank(message = "Porfavor introduzca su correo.")
     * @Assert\Email(message = "El correo '{{ value }}' no es valido.")
     */
	private $correo;

	/**
	 * @var string
     * @Assert\NotBlank(message="Porfavor introduzca una contrasena.")
     * @Assert\Regex(
     *      pattern="/[a-zA-Z0-9]+/",
     *      match=true,
     *      message="Porfavor introduzca una contrasena valida."
     *  )
     * @Assert\Length(max = 4096)
     */
	private $clave;

    /**
     * Set correo
     *
     * @param string $correo
     * @return User
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    
        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set clave
     *
     * @param string $clave
     * @return User
     */
    public function setClave($clave)
    {
        $this->clave = $clave;
    
        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }
}