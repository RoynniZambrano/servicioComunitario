<?php

/* TesisAdminBundle:Resultados:check-resultados-form.html.twig */
class __TwigTemplate_33b0faab3fe2e131f266c1dfad43891a2f8a8cb3ce63f9bbb00a831e2c1d4e7d extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "diarioDiario", array()), 'row', array("type" => "text"));
        echo "  
\t\t\t</div>\t
\t\t</div>\t
\t</div>
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cantidad", array()), 'row');
        echo "  
\t\t\t</div>
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 \tcol-lg-offset-0\">
\t\t\t</div>\t
\t\t</div>\t
\t</div>
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comentario", array()), 'row');
        echo "
\t\t\t</div>\t\t
\t\t</div>\t
\t</div>


\t<br><br>
\t  <div class=\"row\">
\t  \t";
        // line 37
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "estudiante")) {
            // line 38
            echo "\t    <div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3   col-lg-offset-2\" align=\"center\" style=\"margin-bottom: 2%;\" >
\t       ";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "edit", array()), 'row', array("attr" => array("class" => "btn btn-success btn-lg")));
            echo " 
\t    </div>
\t       
\t    <div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3   col-lg-offset-0\"align=\"center\" style=\"margin-bottom: 2%;\" >
\t       ";
            // line 43
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "back", array()), 'row', array("attr" => array("class" => "btn btn-success btn-lg")));
            echo " 
\t    </div> 

\t    ";
        } else {
            // line 46
            echo " 

        <div align=\"center\">
\t\t   <div class=\"col-md-2 col-md-offset-4\" align=\"center\" style=\"margin-bottom: 2%;\" >
\t\t       ";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "back", array()), 'row', array("attr" => array("class" => "btn btn-success btn-lg")));
            echo " 
\t\t    </div> 
\t\t</div>

\t    ";
        }
        // line 54
        echo "     
\t  </div>


</div>
</div>\t

";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Resultados:check-resultados-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 61,  108 => 54,  100 => 50,  94 => 46,  87 => 43,  80 => 39,  77 => 38,  75 => 37,  64 => 29,  52 => 20,  42 => 13,  36 => 10,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
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
/* 				{{ form_row(form.nombre)}}*/
/* 			</div>*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(form.diarioDiario, {'type':'text'}) }}  */
/* 			</div>	*/
/* 		</div>	*/
/* 	</div>*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(form.cantidad) }}  */
/* 			</div>*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 	col-lg-offset-0">*/
/* 			</div>	*/
/* 		</div>	*/
/* 	</div>*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 	col-lg-offset-2">*/
/* 				{{ form_row(form.comentario) }}*/
/* 			</div>		*/
/* 		</div>	*/
/* 	</div>*/
/* */
/* */
/* 	<br><br>*/
/* 	  <div class="row">*/
/* 	  	{% if (user.rol == 'estudiante') %}*/
/* 	    <div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3   col-lg-offset-2" align="center" style="margin-bottom: 2%;" >*/
/* 	       {{ form_row(form.edit, {'attr': {'class': 'btn btn-success btn-lg'}} ) }} */
/* 	    </div>*/
/* 	       */
/* 	    <div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3   col-lg-offset-0"align="center" style="margin-bottom: 2%;" >*/
/* 	       {{ form_row(form.back, {'attr': {'class': 'btn btn-success btn-lg'}} ) }} */
/* 	    </div> */
/* */
/* 	    {% else %} */
/* */
/*         <div align="center">*/
/* 		   <div class="col-md-2 col-md-offset-4" align="center" style="margin-bottom: 2%;" >*/
/* 		       {{ form_row(form.back, {'attr': {'class': 'btn btn-success btn-lg'}} ) }} */
/* 		    </div> */
/* 		</div>*/
/* */
/* 	    {% endif %}     */
/* 	  </div>*/
/* */
/* */
/* </div>*/
/* </div>	*/
/* */
/* {{ form_end(form) }}*/
