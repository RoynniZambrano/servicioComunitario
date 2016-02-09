<?php

/* TesisSCBundle:Main:denegado.html.twig */
class __TwigTemplate_4de161c79febddd26b5f2c55f5ca6fe5305a5898d46d3e513042fcef8bcd76b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TesisSCBundle:Main:denegado.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<strong> <a href=\"http://www.google.com/\">Permiso Denegado</a> </strong>
";
    }

    public function getTemplateName()
    {
        return "TesisSCBundle:Main:denegado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<strong> <a href="http://www.google.com/">Permiso Denegado</a> </strong>*/
/* {% endblock %}*/
