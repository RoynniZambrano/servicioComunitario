<?php

namespace Tesis\AdminBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */

class ValidDate2 extends Constraint{

	public $message1 = "La fecha de culminacion debe ser mayor a la fecha de inicio.";

	public function validatedBy(){

		return get_class($this).'Validator';
	}

	public function getTargets(){

    	return self::CLASS_CONSTRAINT;
	}
}