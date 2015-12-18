<?php

namespace Tesis\AdminBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ValidDate2Validator extends ConstraintValidator
{
	public function validate($cronograma, Constraint $constraint){
		
		/*validacion de las fechas de entrada y salida*/
		if($cronograma->getFechaInicio() >= $cronograma->getFechaFin()){
			$this->context->addViolationAt(
				'fechaFin',
				$constraint->message1,
				array(),
				null
			);
		}
	}
}