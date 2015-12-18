<?php

/* TesisAdminBundle:Estudiante:edit-student-form.html.twig */
class __TwigTemplate_18a53c6cbfdd6bb63f92a08a200f39c8d159ecb322d2ec6f42f9dd909132f839 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => "editar-estudiante-form")));
        echo "
\t";
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : null), array(0 => "TesisAdminBundle:Form:fields.html.twig"));
        // line 4
        echo "<div class=\"container-fluid\">
<div class=\"container-content\">\t


\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nombre", array()), 'row');
        echo " 
\t\t\t</div>
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "apellido", array()), 'row');
        echo "
\t\t\t</div>
\t\t</div>\t
\t</div>\t
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "cedula", array()), 'row');
        echo " 
\t\t\t</div>
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "correo", array()), 'row');
        echo "
\t\t\t</div>
\t\t</div>\t
\t</div>
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "proyectoProyecto", array()), 'row');
        echo " 
\t\t\t</div>\t
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "usuarioUsuario", array()), 'row');
        echo "
\t\t\t</div>
\t\t</div>\t
\t</div>
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "sc", array()), 'row');
        echo " 
\t\t\t</div>
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "telefono", array()), 'row');
        echo "
\t\t\t</div>
\t\t</div>\t
\t</div>
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "rol", array()), 'row');
        echo " 
\t\t\t</div>\t
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 \tcol-lg-offset-0\">
\t\t\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "genero", array()), 'row');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "departamento", array()), 'row');
        echo " 
\t\t\t</div>
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "periodo", array()), 'row');
        echo "
\t\t\t</div>
\t\t</div>\t
\t</div>\t\t\t
\t<div class=\"row field-c\">
\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 \tcol-lg-offset-2\">
\t\t<h5> (*) Campo Obligatorio</h5>
\t\t</div>
\t</div>\t

\t<br><br>
\t<div class=\"row\" align=\"center\">\t

\t    ";
        // line 77
        if (((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "coordinador de proyecto") || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "coordinador de servicio comunitario")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "coordinador suplente"))) {
            // line 78
            echo "\t\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-3 col-lg-2 \tcol-lg-offset-2\" align=\"center\" style=\"margin-bottom: 2%;\" id=\"editar-estudiante-boton\">
\t\t\t\t<button class=\"btn btn-success btn-lg\"> Actualizar</button> 
\t\t\t</div>

\t\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-2 \tcol-lg-offset-0\" align=\"center\" style=\"margin-bottom: 2%;\">
\t\t\t\t";
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "editpass", array()), 'row', array("attr" => array("class" => "btn btn-primary btn-lg")));
            echo " 
\t\t\t</div>\t

\t\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-2 \tcol-lg-offset-0\" align=\"center\" style=\"margin-bottom: 2%;\" id=\"eliminar-estudiante-boton\">
\t\t\t\t<button class=\"btn btn-danger btn-lg\"> Eliminar</button>
\t\t\t</div>

\t\t";
        } else {
            // line 91
            echo "
\t\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3 \tcol-lg-offset-2\" id=\"editar-estudiante-boton\" align=\"center\" style=\"margin-bottom: 2%;\">
\t\t\t\t<button class=\"btn btn-success btn-lg\"> Actualizar</button> 
\t\t\t</div>

\t\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3 \tcol-lg-offset-0\" align=\"center\" style=\"margin-bottom: 2%;\">
\t\t\t\t";
            // line 97
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "editpass", array()), 'row', array("attr" => array("class" => "btn btn-primary btn-lg")));
            echo " 
\t\t\t</div>

\t\t";
        }
        // line 100
        echo "\t

\t</div>\t\t

</div>
</div>\t

";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'rest');
        echo "
";
        // line 108
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Estudiante:edit-student-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 108,  183 => 107,  174 => 100,  167 => 97,  159 => 91,  148 => 83,  141 => 78,  139 => 77,  123 => 64,  117 => 61,  107 => 54,  101 => 51,  91 => 44,  85 => 41,  75 => 34,  69 => 31,  59 => 24,  53 => 21,  43 => 14,  37 => 11,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ form_start(edit_form, {'attr': {novalidate: 'novalidate', id: 'editar-estudiante-form'}}) }}*/
/* 	{% form_theme edit_form 'TesisAdminBundle:Form:fields.html.twig' %}*/
/* <div class="container-fluid">*/
/* <div class="container-content">	*/
/* */
/* */
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(edit_form.nombre) }} */
/* 			</div>*/
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
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(edit_form.correo) }}*/
/* 			</div>*/
/* 		</div>	*/
/* 	</div>*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(edit_form.proyectoProyecto) }} */
/* 			</div>	*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(edit_form.usuarioUsuario) }}*/
/* 			</div>*/
/* 		</div>	*/
/* 	</div>*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(edit_form.sc) }} */
/* 			</div>*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(edit_form.telefono) }}*/
/* 			</div>*/
/* 		</div>	*/
/* 	</div>*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(edit_form.rol) }} */
/* 			</div>	*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 	col-lg-offset-0">*/
/* 			{{ form_row(edit_form.genero) }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(edit_form.departamento) }} */
/* 			</div>*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(edit_form.periodo) }}*/
/* 			</div>*/
/* 		</div>	*/
/* 	</div>			*/
/* 	<div class="row field-c">*/
/* 		<div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 	col-lg-offset-2">*/
/* 		<h5> (*) Campo Obligatorio</h5>*/
/* 		</div>*/
/* 	</div>	*/
/* */
/* 	<br><br>*/
/* 	<div class="row" align="center">	*/
/* */
/* 	    {% if (user.rol == 'coordinador de proyecto') or (user.rol == 'coordinador de servicio comunitario') or (user.rol == 'coordinador suplente') %}*/
/* 			<div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-3 col-lg-2 	col-lg-offset-2" align="center" style="margin-bottom: 2%;" id="editar-estudiante-boton">*/
/* 				<button class="btn btn-success btn-lg"> Actualizar</button> */
/* 			</div>*/
/* */
/* 			<div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-2 	col-lg-offset-0" align="center" style="margin-bottom: 2%;">*/
/* 				{{ form_row(edit_form.editpass, {'attr': {'class': 'btn btn-primary btn-lg'}} ) }} */
/* 			</div>	*/
/* */
/* 			<div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-2 	col-lg-offset-0" align="center" style="margin-bottom: 2%;" id="eliminar-estudiante-boton">*/
/* 				<button class="btn btn-danger btn-lg"> Eliminar</button>*/
/* 			</div>*/
/* */
/* 		{% else %}*/
/* */
/* 			<div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3 	col-lg-offset-2" id="editar-estudiante-boton" align="center" style="margin-bottom: 2%;">*/
/* 				<button class="btn btn-success btn-lg"> Actualizar</button> */
/* 			</div>*/
/* */
/* 			<div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3 	col-lg-offset-0" align="center" style="margin-bottom: 2%;">*/
/* 				{{ form_row(edit_form.editpass, {'attr': {'class': 'btn btn-primary btn-lg'}} ) }} */
/* 			</div>*/
/* */
/* 		{% endif %}	*/
/* */
/* 	</div>		*/
/* */
/* </div>*/
/* </div>	*/
/* */
/* {{ form_rest(edit_form) }}*/
/* {{ form_end(edit_form) }}*/
