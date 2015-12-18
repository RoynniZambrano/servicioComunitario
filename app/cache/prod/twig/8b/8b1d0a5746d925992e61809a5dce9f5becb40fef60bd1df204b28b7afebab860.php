<?php

/* TesisAdminBundle:InfoAdicional:new-infoAdicional-form.html.twig */
class __TwigTemplate_b5c7c77488f898a4547e01b2ef084c84cb46f900c0c18691cea1a58eb7b29651 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => "nuevo-infoAdicional-form")));
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
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "resumen", array()), 'row');
        echo "
\t\t\t</div>\t\t
\t\t</div>\t
\t</div>
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "problema", array()), 'row');
        echo "
\t\t\t</div>\t\t
\t\t</div>\t
\t</div>\t
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "justificacion", array()), 'row');
        echo "
\t\t\t</div>\t\t
\t\t</div>\t
\t</div>
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "objetivoG", array()), 'row');
        echo "
\t\t\t</div>\t\t
\t\t</div>\t
\t</div>\t
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "objetivoE", array()), 'row');
        echo "
\t\t\t</div>\t\t
\t\t</div>\t
\t</div>\t\t
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "resultados", array()), 'row');
        echo "
\t\t\t</div>\t\t
\t\t</div>\t
\t</div>\t\t
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "conclusion", array()), 'row');
        echo "
\t\t\t</div>\t\t
\t\t</div>\t
\t</div>
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-2\">
\t\t\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fecha", array()), 'row', array("type" => "text", "id" => "datepicker3"));
        echo " 
\t\t\t</div>\t\t\t
\t\t</div>\t
\t</div>


\t<div class=\"row field-c\">
\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 \tcol-lg-offset-2\">
\t\t<h5> (*) Campo Obligatorio</h5>
\t\t</div>
\t</div>\t

\t<br><br>
\t<div align=\"center\">
\t\t<div class=\"col-md-2 col-md-offset-4\" id=\"nuevo-infoAdicional-boton\">
\t\t\t<button class=\"btn btn-success btn-lg\"> Enviar</button>
\t\t</div>
\t</div>

</div>
</div>\t

";
        // line 82
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:InfoAdicional:new-infoAdicional-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 82,  107 => 60,  97 => 53,  87 => 46,  77 => 39,  67 => 32,  57 => 25,  47 => 18,  37 => 11,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ form_start(form, {'attr': {novalidate: 'novalidate', id: 'nuevo-infoAdicional-form'}}) }}*/
/* 	{% form_theme form 'TesisAdminBundle:Form:fields.html.twig' %}*/
/* <div class="container-fluid">*/
/* <div class="container-content">	*/
/* 	*/
/* */
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 	col-lg-offset-2">*/
/* 				{{ form_row(form.resumen) }}*/
/* 			</div>		*/
/* 		</div>	*/
/* 	</div>*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 	col-lg-offset-2">*/
/* 				{{ form_row(form.problema) }}*/
/* 			</div>		*/
/* 		</div>	*/
/* 	</div>	*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 	col-lg-offset-2">*/
/* 				{{ form_row(form.justificacion) }}*/
/* 			</div>		*/
/* 		</div>	*/
/* 	</div>*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 	col-lg-offset-2">*/
/* 				{{ form_row(form.objetivoG) }}*/
/* 			</div>		*/
/* 		</div>	*/
/* 	</div>	*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 	col-lg-offset-2">*/
/* 				{{ form_row(form.objetivoE) }}*/
/* 			</div>		*/
/* 		</div>	*/
/* 	</div>		*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 	col-lg-offset-2">*/
/* 				{{ form_row(form.resultados) }}*/
/* 			</div>		*/
/* 		</div>	*/
/* 	</div>		*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 	col-lg-offset-2">*/
/* 				{{ form_row(form.conclusion) }}*/
/* 			</div>		*/
/* 		</div>	*/
/* 	</div>*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-2">*/
/* 				{{ form_row(form.fecha, {'type':'text', 'id': 'datepicker3' }) }} */
/* 			</div>			*/
/* 		</div>	*/
/* 	</div>*/
/* */
/* */
/* 	<div class="row field-c">*/
/* 		<div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 	col-lg-offset-2">*/
/* 		<h5> (*) Campo Obligatorio</h5>*/
/* 		</div>*/
/* 	</div>	*/
/* */
/* 	<br><br>*/
/* 	<div align="center">*/
/* 		<div class="col-md-2 col-md-offset-4" id="nuevo-infoAdicional-boton">*/
/* 			<button class="btn btn-success btn-lg"> Enviar</button>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* </div>*/
/* </div>	*/
/* */
/* {{ form_end(form) }}*/
