<?php

/* TesisAdminBundle:Proyecto:check-project-form.html.twig */
class __TwigTemplate_8e84702cfb79540c77a128ccba8e0bccbb4228a29c8877f054fe3c420a9da6fd extends Twig_Template
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
\t
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'row');
        echo " 
\t\t\t</div>
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "coordinador", array()), 'row');
        echo " 
\t\t\t</div>\t
\t\t</div>\t
\t</div>

\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">\t
  \t\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "coordSuplente", array()), 'row');
        echo " 
\t\t\t</div>
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaDesco", array()), 'row', array("type" => "text", "id" => "datepicker3"));
        echo " 
\t\t\t</div>\t
\t\t</div>\t
\t</div>\t\t
\t
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">\t
  \t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaInicio", array()), 'row', array("type" => "text"));
        echo " 
\t\t\t</div>
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaFin", array()), 'row', array("type" => "text"));
        echo " 
\t\t\t</div>\t
\t\t</div>\t
\t</div>\t

\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'row');
        echo "
\t\t\t</div>\t\t
\t\t</div>\t
\t</div>

\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "justificacion", array()), 'row');
        echo " 
\t\t\t</div>\t\t\t\t
\t\t</div>\t
\t</div>\t\t\t

\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "instituto", array()), 'row');
        echo " 
\t\t\t</div>
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "institutoPropone", array()), 'row');
        echo " 
\t\t\t</div>\t
\t\t</div>\t
\t</div>\t


\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "locacion", array()), 'row');
        echo "
\t\t\t</div>
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "faseFase", array()), 'row');
        echo " 
\t\t\t</div>\t\t\t\t
\t\t</div>\t
\t</div>\t


\t<br><br>
\t<div class=\"row\">
\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3   col-lg-offset-2\" align=\"center\">
\t\t\t ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "edit", array()), 'row', array("attr" => array("class" => "btn btn-success btn-lg")));
        echo " 
\t\t</div>\t
\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3   col-lg-offset-0\"align=\"center\" style=\"margin-bottom: 2%;\" >
\t\t\t ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "back", array()), 'row', array("attr" => array("class" => "btn btn-success btn-lg")));
        echo " 
\t\t</div>\t
\t</div>

</div>
</div>\t

";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
        // line 94
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "





";
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Proyecto:check-project-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 94,  161 => 93,  151 => 86,  145 => 83,  133 => 74,  127 => 71,  115 => 62,  109 => 59,  98 => 51,  87 => 43,  76 => 35,  70 => 32,  59 => 24,  53 => 21,  42 => 13,  36 => 10,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ form_start(form, {'attr': {novalidate: 'novalidate'}}) }}*/
/* 	{% form_theme form 'TesisAdminBundle:Form:fields.html.twig' %}*/
/* <div class="container-fluid">*/
/* <div class="container-content">	*/
/* 	*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(form.nombre) }} */
/* 			</div>*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(form.coordinador) }} */
/* 			</div>	*/
/* 		</div>	*/
/* 	</div>*/
/* */
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">	*/
/*   			{{ form_row(form.coordSuplente) }} */
/* 			</div>*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(form.fechaDesco, {'type':'text', 'id': 'datepicker3' }) }} */
/* 			</div>	*/
/* 		</div>	*/
/* 	</div>		*/
/* 	*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">	*/
/*   			{{ form_row(form.fechaInicio, {'type': 'text'}) }} */
/* 			</div>*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(form.fechaFin, {'type': 'text'}, { 'attr': {'class': 'datepicker'}}) }} */
/* 			</div>	*/
/* 		</div>	*/
/* 	</div>	*/
/* */
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 	col-lg-offset-2">*/
/* 				{{ form_row(form.descripcion) }}*/
/* 			</div>		*/
/* 		</div>	*/
/* 	</div>*/
/* */
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 	col-lg-offset-2">*/
/* 				{{ form_row(form.justificacion) }} */
/* 			</div>				*/
/* 		</div>	*/
/* 	</div>			*/
/* */
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(form.instituto) }} */
/* 			</div>*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(form.institutoPropone) }} */
/* 			</div>	*/
/* 		</div>	*/
/* 	</div>	*/
/* */
/* */
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(form.locacion) }}*/
/* 			</div>*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(form.faseFase) }} */
/* 			</div>				*/
/* 		</div>	*/
/* 	</div>	*/
/* */
/* */
/* 	<br><br>*/
/* 	<div class="row">*/
/* 		<div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3   col-lg-offset-2" align="center">*/
/* 			 {{ form_row(form.edit, {'attr': {'class': 'btn btn-success btn-lg'}} ) }} */
/* 		</div>	*/
/* 		<div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3   col-lg-offset-0"align="center" style="margin-bottom: 2%;" >*/
/* 			 {{ form_row(form.back, {'attr': {'class': 'btn btn-success btn-lg'}} ) }} */
/* 		</div>	*/
/* 	</div>*/
/* */
/* </div>*/
/* </div>	*/
/* */
/* {{ form_rest(form) }}*/
/* {{ form_end(form) }}*/
/* */
/* */
/* */
/* */
/* */
/* */
