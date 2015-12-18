<?php

namespace Tesis\AdminBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ValidDateValidator extends ConstraintValidator
{
	public function validate($proyecto, Constraint $constraint){
		
		/*validacion de las fechas de entrada y salida*/
		if($proyecto->getFechaInicio() >= $proyecto->getFechaFin()){
			$this->context->addViolationAt(
				'fechaFin',
				$constraint->message1,
				array(),
				null
			);
		}
	}
}