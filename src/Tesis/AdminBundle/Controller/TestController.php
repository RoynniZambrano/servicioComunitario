<?php

namespace Tesis\AdminBundle\Controller;

use BeSimple\SoapBundle\ServiceDefinition\Annotation as Soap;
use Symfony\Component\DependencyInjection\ContainerAware;

class TestController extends ContainerAware
{
    /**
     * @Soap\Method("hello")
     * @Soap\Param("name", phpType = "string")
     * @Soap\Result(phpType = "string")
     */
    public function helloAction($name)
    {
        return sprintf('Hello %s!', $name);
        //return printf('Hello %s!', $name);
    }

}


