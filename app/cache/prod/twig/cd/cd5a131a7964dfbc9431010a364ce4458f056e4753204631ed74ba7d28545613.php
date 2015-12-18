<?php

/* TesisAdminBundle:InfoFinal:check-infofinal-form.html.twig */
class __TwigTemplate_3ad72461bd31b69e43373376d188777117d7891be9608a7edebed27e23170374 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
\t";
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "TesisAdminBundle:Form:fields.html.twig"));
        // line 4
        echo "<div class=\"container-fluid\">
<div class=\"container-content\">\t

\t  <div class=\"row field-c\"> 
\t    <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2 subtitulos\">  
\t      <h2>Evaluativo <hr style=\"border-top: 3px solid #3c8dbc;\"></h2>  
\t    </div>
\t  </div> 

\t  <div class=\"row field-c\"> 
\t    <div class=\"form-group\">
\t        <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2\">
\t        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "calificacion", array()), 'row');
        echo "
\t      </div>
\t        <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0\">
\t        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "observacion", array()), 'row');
        echo " 
\t      </div>  
\t    </div>  
\t  </div>

\t<br><br>
\t  <div class=\"row\">
\t  \t";
        // line 26
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "estudiante")) {
            // line 27
            echo "\t    <div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3   col-lg-offset-2\" align=\"center\" style=\"margin-bottom: 2%;\" >
\t       ";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "view", array()), 'row', array("attr" => array("class" => "btn btn-success btn-lg")));
            echo " 
\t    </div>  
\t    <div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3   col-lg-offset-0\"align=\"center\" style=\"margin-bottom: 2%;\" >
\t       ";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "back", array()), 'row', array("attr" => array("class" => "btn btn-success btn-lg")));
            echo " 
\t    </div>

\t";
        } else {
            // line 35
            echo "
\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-3 col-lg-2 \tcol-lg-offset-2\" align=\"center\" style=\"margin-bottom: 2%;\" id=\"editar-estudiante-boton\">
\t\t\t";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "view", array()), 'row', array("attr" => array("class" => "btn btn-success btn-lg")));
            echo "
\t\t</div>

\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-2 \tcol-lg-offset-0\" align=\"center\" style=\"margin-bottom: 2%;\">
\t\t\t";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "edit", array()), 'row', array("attr" => array("class" => "btn btn-primary btn-lg")));
            echo " 
\t\t</div>\t

\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-2 \tcol-lg-offset-0\" align=\"center\" style=\"margin-bottom: 2%;\" id=\"eliminar-estudiante-boton\">
\t\t\t";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "back", array()), 'row', array("attr" => array("class" => "btn btn-success btn-lg")));
            echo "
\t\t</div>

\t";
        }
        // line 48
        echo "\t

\t  </div>

</div>
</div>\t

";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:InfoFinal:check-infofinal-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 55,  101 => 48,  94 => 45,  87 => 41,  80 => 37,  76 => 35,  69 => 31,  63 => 28,  60 => 27,  58 => 26,  48 => 19,  42 => 16,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ form_start(form, {'attr': {novalidate: 'novalidate'}}) }}*/
/* 	{% form_theme form 'TesisAdminBundle:Form:fields.html.twig' %}*/
/* <div class="container-fluid">*/
/* <div class="container-content">	*/
/* */
/* 	  <div class="row field-c"> */
/* 	    <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2 subtitulos">  */
/* 	      <h2>Evaluativo <hr style="border-top: 3px solid #3c8dbc;"></h2>  */
/* 	    </div>*/
/* 	  </div> */
/* */
/* 	  <div class="row field-c"> */
/* 	    <div class="form-group">*/
/* 	        <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2">*/
/* 	        {{ form_row(form.calificacion)}}*/
/* 	      </div>*/
/* 	        <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0">*/
/* 	        {{ form_row(form.observacion) }} */
/* 	      </div>  */
/* 	    </div>  */
/* 	  </div>*/
/* */
/* 	<br><br>*/
/* 	  <div class="row">*/
/* 	  	{% if (user.rol == 'estudiante') %}*/
/* 	    <div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3   col-lg-offset-2" align="center" style="margin-bottom: 2%;" >*/
/* 	       {{ form_row(form.view, {'attr': {'class': 'btn btn-success btn-lg'}} ) }} */
/* 	    </div>  */
/* 	    <div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3   col-lg-offset-0"align="center" style="margin-bottom: 2%;" >*/
/* 	       {{ form_row(form.back, {'attr': {'class': 'btn btn-success btn-lg'}} ) }} */
/* 	    </div>*/
/* */
/* 	{% else %}*/
/* */
/* 		<div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-3 col-lg-2 	col-lg-offset-2" align="center" style="margin-bottom: 2%;" id="editar-estudiante-boton">*/
/* 			{{ form_row(form.view, {'attr': {'class': 'btn btn-success btn-lg'}} ) }}*/
/* 		</div>*/
/* */
/* 		<div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-2 	col-lg-offset-0" align="center" style="margin-bottom: 2%;">*/
/* 			{{ form_row(form.edit, {'attr': {'class': 'btn btn-primary btn-lg'}} ) }} */
/* 		</div>	*/
/* */
/* 		<div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-2 	col-lg-offset-0" align="center" style="margin-bottom: 2%;" id="eliminar-estudiante-boton">*/
/* 			{{ form_row(form.back, {'attr': {'class': 'btn btn-success btn-lg'}} ) }}*/
/* 		</div>*/
/* */
/* 	{% endif %}	*/
/* */
/* 	  </div>*/
/* */
/* </div>*/
/* </div>	*/
/* */
/* {{ form_end(form) }}*/
