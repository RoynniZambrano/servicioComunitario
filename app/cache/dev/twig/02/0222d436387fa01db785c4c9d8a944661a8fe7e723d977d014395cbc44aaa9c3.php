<?php

/* TesisSCBundle:Default:index.html.twig */
class __TwigTemplate_42c6ac4959988be5f3aad2233b3beb0b44c05f03136d12a46aecc19bc8c632ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::bootstrap-base.html.twig", "TesisSCBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::bootstrap-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    
      ";
        // line 9
        echo twig_include($this->env, $context, "TesisSCBundle:Main:header.html.twig");
        echo "

      ";
        // line 11
        echo twig_include($this->env, $context, "TesisSCBundle:Main:seccion0.html.twig");
        echo "

      ";
        // line 13
        echo twig_include($this->env, $context, "TesisSCBundle:Main:seccion1.html.twig");
        echo "

      ";
        // line 15
        echo twig_include($this->env, $context, "TesisSCBundle:Main:seccion2.html.twig");
        echo "

      ";
        // line 17
        echo twig_include($this->env, $context, "TesisSCBundle:Main:seccion3.html.twig");
        echo "

      ";
        // line 19
        echo twig_include($this->env, $context, "TesisSCBundle:Main:seccion4.html.twig");
        echo "

      ";
        // line 21
        echo twig_include($this->env, $context, "TesisSCBundle:Main:footer.html.twig");
        echo "

";
    }

    public function getTemplateName()
    {
        return "TesisSCBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  70 => 19,  65 => 17,  60 => 15,  55 => 13,  50 => 11,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::bootstrap-base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*   <link href="{{ asset('css/layout.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*       {{ include('TesisSCBundle:Main:header.html.twig') }}*/
/* */
/*       {{ include('TesisSCBundle:Main:seccion0.html.twig') }}*/
/* */
/*       {{ include('TesisSCBundle:Main:seccion1.html.twig') }}*/
/* */
/*       {{ include('TesisSCBundle:Main:seccion2.html.twig') }}*/
/* */
/*       {{ include('TesisSCBundle:Main:seccion3.html.twig') }}*/
/* */
/*       {{ include('TesisSCBundle:Main:seccion4.html.twig') }}*/
/* */
/*       {{ include('TesisSCBundle:Main:footer.html.twig') }}*/
/* */
/* {% endblock %}*/
/* */
