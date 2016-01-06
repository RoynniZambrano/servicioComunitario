<?php

namespace Tesis\SCBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Login{
	
   /**
     * @var string
     *
     * @Assert\NotBlank(message = "Porfavor introduzca su nombre de usuario.")
     * @Assert\Regex(
     *      pattern="/^[a-zA-Z]+[0-9]*$/",
     *      match=true,
     *      message="El nombre de usuario {{ value }} no es valido."
     *  )     
     * @Assert\Length(
     *      min = 2,
     *      max = 18,
     *      minMessage = "el nombre de usuario debe tener minimo {{ limit }} carácteres.",
     *      maxMessage = "el nombre de usuario debe tener maximo {{ limit }} carácteres.") 
     */
	private $nameLogin;

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
     * Set nameLogin
     *
     * @param string $nameLogin
     * @return Estudiante
     */
    public function setNameLogin($nameLogin)
    {
        $this->nameLogin = $nameLogin;

        return $this;
    }

    /**
     * Get nameLogin
     *
     * @return string 
     */
    public function getNameLogin()
    {
        return $this->nameLogin;
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