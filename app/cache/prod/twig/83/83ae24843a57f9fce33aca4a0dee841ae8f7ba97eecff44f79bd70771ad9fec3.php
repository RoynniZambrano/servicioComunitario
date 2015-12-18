<?php

/* TesisAdminBundle:Usuario:edit-user-form.html.twig */
class __TwigTemplate_3ab3692cf0cef897edd993a231733505b9f8057ed1e864271bae0fc08f199bfb extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => "editar-usuario-form")));
        echo "
\t";
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : null), array(0 => "TesisAdminBundle:Form:fields.html.twig"));
        // line 4
        echo "
<div class=\"container-fluid\">
<div class=\"container-content\">\t

\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nombre", array()), 'row');
        echo " 
\t\t\t</div>
\t\t\t
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "apellido", array()), 'row');
        echo "
\t\t\t</div>
\t\t</div>\t
\t</div>\t
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "cedula", array()), 'row');
        echo " 
\t\t\t</div>
\t\t\t
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "correo", array()), 'row');
        echo "
\t\t\t</div>
\t\t</div>\t
\t</div>
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "rol", array()), 'row');
        echo " 
\t\t\t</div>\t
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "genero", array()), 'row');
        echo "
\t\t\t</div>
\t\t</div>\t
\t</div>
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "departamento", array()), 'row');
        echo " 
\t\t\t</div>
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "telefono", array()), 'row');
        echo "
\t\t\t</div>
\t\t</div>\t
\t</div>\t

\t<div class=\"row field-c\">
\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 \tcol-lg-offset-2\">
\t\t<h5> (*) Campo Obligatorio</h5>
\t\t</div>
\t</div>\t

\t<br><br>
\t<div class=\"row\">\t

\t\t";
        // line 60
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "coordinador de servicio comunitario") && ((isset($context["same"]) ? $context["same"] : null) == "false"))) {
            // line 61
            echo "\t\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-3 col-lg-2 \tcol-lg-offset-2\" id=\"editar-usuario-boton\" align=\"center\" style=\"margin-bottom: 2%;\">
\t\t\t\t<button class=\"btn btn-success btn-lg\"> Actualizar</button> 
\t\t\t</div>

\t\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-2 \tcol-lg-offset-0\" align=\"center\" style=\"margin-bottom: 2%;\">
\t\t\t\t";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "editpass", array()), 'row', array("attr" => array("class" => "btn btn-primary btn-lg")));
            echo " 
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-2 \tcol-lg-offset-0\" align=\"center\" style=\"margin-bottom: 2%;\"  id=\"eliminar-usuario-boton\">
\t\t\t\t<button class=\"btn btn-danger btn-lg\"> Eliminar</button> 
\t\t\t</div>

\t\t";
        } else {
            // line 74
            echo "
\t\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3 \tcol-lg-offset-2\" id=\"editar-usuario-boton\" align=\"center\" style=\"margin-bottom: 2%;\">
\t\t\t\t<button class=\"btn btn-success btn-lg\"> Actualizar</button> 
\t\t\t</div>

\t\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3 \tcol-lg-offset-0\" align=\"center\" style=\"margin-bottom: 2%;\">
\t\t\t\t";
            // line 80
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "editpass", array()), 'row', array("attr" => array("class" => "btn btn-primary btn-lg")));
            echo " 
\t\t\t</div>

\t\t";
        }
        // line 83
        echo "\t
\t</div>\t\t


</div>
</div>\t


";
        // line 91
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "






";
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Usuario:edit-user-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 91,  145 => 83,  138 => 80,  130 => 74,  119 => 66,  112 => 61,  110 => 60,  93 => 46,  87 => 43,  77 => 36,  71 => 33,  61 => 26,  54 => 22,  44 => 15,  37 => 11,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ form_start(edit_form, {'attr': {novalidate: 'novalidate', id: 'editar-usuario-form'}}) }}*/
/* 	{% form_theme edit_form 'TesisAdminBundle:Form:fields.html.twig' %}*/
/* */
/* <div class="container-fluid">*/
/* <div class="container-content">	*/
/* */
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(edit_form.nombre) }} */
/* 			</div>*/
/* 			*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(edit_form.apellido) }}*/
/* 			</div>*/
/* 		</div>	*/
/* 	</div>	*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(edit_form.cedula) }} */
/* 			</div>*/
/* 			*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(edit_form.correo) }}*/
/* 			</div>*/
/* 		</div>	*/
/* 	</div>*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(edit_form.rol) }} */
/* 			</div>	*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(edit_form.genero) }}*/
/* 			</div>*/
/* 		</div>	*/
/* 	</div>*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(edit_form.departamento) }} */
/* 			</div>*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(edit_form.telefono) }}*/
/* 			</div>*/
/* 		</div>	*/
/* 	</div>	*/
/* */
/* 	<div class="row field-c">*/
/* 		<div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 	col-lg-offset-2">*/
/* 		<h5> (*) Campo Obligatorio</h5>*/
/* 		</div>*/
/* 	</div>	*/
/* */
/* 	<br><br>*/
/* 	<div class="row">	*/
/* */
/* 		{% if (user.rol == 'coordinador de servicio comunitario') and (same == 'false') %}*/
/* 			<div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-3 col-lg-2 	col-lg-offset-2" id="editar-usuario-boton" align="center" style="margin-bottom: 2%;">*/
/* 				<button class="btn btn-success btn-lg"> Actualizar</button> */
/* 			</div>*/
/* */
/* 			<div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-2 	col-lg-offset-0" align="center" style="margin-bottom: 2%;">*/
/* 				{{ form_row(edit_form.editpass, {'attr': {'class': 'btn btn-primary btn-lg'}} ) }} */
/* 			</div>*/
/* 			*/
/* 			<div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-2 	col-lg-offset-0" align="center" style="margin-bottom: 2%;"  id="eliminar-usuario-boton">*/
/* 				<button class="btn btn-danger btn-lg"> Eliminar</button> */
/* 			</div>*/
/* */
/* 		{% else %}*/
/* */
/* 			<div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3 	col-lg-offset-2" id="editar-usuario-boton" align="center" style="margin-bottom: 2%;">*/
/* 				<button class="btn btn-success btn-lg"> Actualizar</button> */
/* 			</div>*/
/* */
/* 			<div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3 	col-lg-offset-0" align="center" style="margin-bottom: 2%;">*/
/* 				{{ form_row(edit_form.editpass, {'attr': {'class': 'btn btn-primary btn-lg'}} ) }} */
/* 			</div>*/
/* */
/* 		{% endif %}	*/
/* 	</div>		*/
/* */
/* */
/* </div>*/
/* </div>	*/
/* */
/* */
/* {{ form_end(edit_form) }}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
