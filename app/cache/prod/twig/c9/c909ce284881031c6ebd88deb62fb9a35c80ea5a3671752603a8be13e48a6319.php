<?php

/* TesisSCBundle:Main:login-form.html.twig */
class __TwigTemplate_27b4b3f9a8c0794acd1038d5905038446fb364c14c29d288351776afae12eaf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "  
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => "loggin-form")));
        echo "
\t";
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "TesisSCBundle:Form:fields.html.twig"));
        // line 4
        echo "\t\t<div class=\"row\">
        \t<div class=\"col-xs-7 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-3 col-lg-4 col-lg-offset-4 titulos\">
\t\t\t\t<h1>Iniciar  sesión</h1>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-7 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-3 col-lg-4 col-lg-offset-4\">
\t\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "correo", array()), 'row');
        echo "
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "clave", array()), 'row');
        echo "
\t\t\t\t<div  id=\"loggin-usuario-boton\" align=\"center\">
\t\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'row', array("attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t\t<br/><br/>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "TesisSCBundle:Main:login-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  54 => 19,  46 => 14,  41 => 12,  37 => 11,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/*   */
/* {{ form_start(form, {'attr': {novalidate: 'novalidate', id: 'loggin-form'}}) }}*/
/* 	{% form_theme form 'TesisSCBundle:Form:fields.html.twig' %}*/
/* 		<div class="row">*/
/*         	<div class="col-xs-7 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-3 col-lg-4 col-lg-offset-4 titulos">*/
/* 				<h1>Iniciar  sesión</h1>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<div class="col-xs-7 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-3 col-lg-4 col-lg-offset-4">*/
/* 				{{ form_row(form.correo) }}*/
/* 				{{ form_row(form.clave) }}*/
/* 				<div  id="loggin-usuario-boton" align="center">*/
/* 					{{ form_row(form.submit, {'attr': {'class': 'btn btn-success'}} ) }}*/
/* 					<br/><br/>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	{{ form_rest(form) }}*/
/* {{ form_end(form) }}*/
/* */
