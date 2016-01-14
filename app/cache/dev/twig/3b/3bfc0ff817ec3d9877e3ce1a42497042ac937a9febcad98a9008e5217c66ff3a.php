<?php

/* TesisAdminBundle:Usuario:edit-user-form.html.twig */
class __TwigTemplate_ecd49728e67bf3ab88087b1a2d48e7362b69128a8da3bc1e0ea0a6171a5205c6 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => "editar-usuario-form")));
        echo "
\t";
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "TesisAdminBundle:Form:fields.html.twig"));
        // line 4
        echo "
<div class=\"container-fluid\">
<div class=\"container-content\">\t

\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'row');
        echo " 
\t\t\t</div>
\t\t\t
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "apellido", array()), 'row');
        echo "
\t\t\t</div>
\t\t</div>\t
\t</div>\t
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "correo", array()), 'row');
        echo " 
\t\t\t</div>
\t\t\t
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nameLogin", array()), 'row');
        echo "
\t\t\t</div>
\t\t</div>\t
\t</div>
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cedula", array()), 'row');
        echo " 
\t\t\t</div>\t
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "genero", array()), 'row');
        echo "
\t\t\t</div>
\t\t</div>\t
\t</div>
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "departamento", array()), 'row');
        echo " 
\t\t\t</div>
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "perfil", array()), 'row');
        echo "
\t\t\t</div>
\t\t</div>\t
\t</div>\t
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telefono", array()), 'row');
        echo "
\t\t\t</div>
\t\t</div>\t
\t</div>\t\t

\t<div class=\"row field-c\">
\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 \tcol-lg-offset-2\">
\t\t<h5> (*) Campo Obligatorio</h5>
\t\t</div>
\t</div>\t

\t<br><br>
\t<div class=\"row\">\t

\t\t";
        // line 67
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "coordinador de servicio comunitario") && ((isset($context["same"]) ? $context["same"] : $this->getContext($context, "same")) == "false"))) {
            // line 68
            echo "\t\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-3 col-lg-2 \tcol-lg-offset-2\" id=\"editar-usuario-boton\" align=\"center\" style=\"margin-bottom: 2%;\">
\t\t\t\t<button class=\"btn btn-success btn-lg\"> Actualizar</button> 
\t\t\t</div>

\t\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-2 \tcol-lg-offset-0\" align=\"center\" style=\"margin-bottom: 2%;\">
\t\t\t\t";
            // line 73
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "editpass", array()), 'row', array("attr" => array("class" => "btn btn-primary btn-lg")));
            echo " 
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-2 \tcol-lg-offset-0\" align=\"center\" style=\"margin-bottom: 2%;\"  id=\"eliminar-usuario-boton\">
\t\t\t\t<button class=\"btn btn-danger btn-lg\"> Eliminar</button> 
\t\t\t</div>

\t\t";
        } else {
            // line 81
            echo "
\t\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3 \tcol-lg-offset-2\" id=\"editar-usuario-boton\" align=\"center\" style=\"margin-bottom: 2%;\">
\t\t\t\t<button class=\"btn btn-success btn-lg\"> Actualizar</button> 
\t\t\t</div>

\t\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3 \tcol-lg-offset-0\" align=\"center\" style=\"margin-bottom: 2%;\">
\t\t\t\t";
            // line 87
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "editpass", array()), 'row', array("attr" => array("class" => "btn btn-primary btn-lg")));
            echo " 
\t\t\t</div>

\t\t";
        }
        // line 90
        echo "\t
\t</div>\t\t


</div>
</div>\t


";
        // line 98
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
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
        return array (  165 => 98,  155 => 90,  148 => 87,  140 => 81,  129 => 73,  122 => 68,  120 => 67,  103 => 53,  93 => 46,  87 => 43,  77 => 36,  71 => 33,  61 => 26,  54 => 22,  44 => 15,  37 => 11,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
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
/* 				{{ form_row(edit_form.correo) }} */
/* 			</div>*/
/* 			*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(edit_form.nameLogin) }}*/
/* 			</div>*/
/* 		</div>	*/
/* 	</div>*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(edit_form.cedula) }} */
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
/* 				{{ form_row(edit_form.perfil) }}*/
/* 			</div>*/
/* 		</div>	*/
/* 	</div>	*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 			{{ form_row(edit_form.telefono) }}*/
/* 			</div>*/
/* 		</div>	*/
/* 	</div>		*/
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
/* 		{% if (user.perfil == 'coordinador de servicio comunitario') and (same == 'false') %}*/
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
