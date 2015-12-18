<?php

namespace Tesis\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TesisApiBundle:Default:index.html.twig', array('name' => $name));
    }
}
