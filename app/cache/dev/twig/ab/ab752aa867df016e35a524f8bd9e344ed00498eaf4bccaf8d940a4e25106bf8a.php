<?php

/* TesisAdminBundle:Diario:edit-diario-form.html.twig */
class __TwigTemplate_783c816476e9dc0c7257c6e00a10650cf1a1582a36949cf94451cd35a22a2c5e extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => "editar-diario-form")));
        echo "
  ";
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "TesisAdminBundle:Form:fields.html.twig"));
        // line 4
        echo "<div class=\"container-fluid\">
<div class=\"container-content\"> 
  
<div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2\">
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cronogramacronograma", array()), 'row');
        echo "
      </div>
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0\">
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fecha", array()), 'row', array("type" => "text", "id" => "datepicker1"));
        echo " 
      </div>  
    </div>  
  </div>
  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2\">
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "proyectoProyecto", array()), 'row');
        echo "  
      </div>
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0\">
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "actividadActividad", array()), 'row');
        echo "
        <h5>Mantén presionado la Tecla Ctrl (windows) / Command (Mac) para <b>seleccionar</b> y <b>desmarcar</b> múltiples opciones.</h5>          
      </div>  
    </div>  
  </div>
  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2\">
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "horaInicio", array()), 'row', array("id" => "timepicker1"));
        echo "
      </div>
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0\">
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "horaFin", array()), 'row', array("id" => "timepicker2"));
        echo " 
      </div>  
    </div>  
  </div>  
  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2\">
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "horas", array()), 'row');
        echo "
      </div>
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0\">
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "personas", array()), 'row');
        echo " 
      </div>  
    </div>  
  </div>
  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-2 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-2 col-lg-3   col-lg-offset-2\">
        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ninos", array()), 'row');
        echo "
      </div>
        <div class=\"col-xs-2 col-xs-offset-0 col-sm-2 col-sm-offset-0 col-md-2 col-md-offset-0 col-lg-3   col-lg-offset-0\">
        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adultos", array()), 'row');
        echo " 
      </div>
        <div class=\"col-xs-2 col-xs-offset-0 col-sm-2 col-sm-offset-0 col-md-2 col-md-offset-0 col-lg-3   col-lg-offset-2\">
        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "terceraEdad", array()), 'row');
        echo " 
      </div>  
        <div class=\"col-xs-2 col-xs-offset-0 col-sm-2 col-sm-offset-0 col-md-2 col-md-offset-0 col-lg-3   col-lg-offset-0\">
        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "discapacidad", array()), 'row');
        echo " 
      </div>              
    </div>  
  </div>
  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2\">
        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'row');
        echo "
      </div>    
    </div>  
  </div>
  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2\">
        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "personal", array()), 'row');
        echo "
      </div>    
    </div>  
  </div>  
  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2\">
        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fortalezas", array()), 'row');
        echo "
      </div>    
    </div>  
  </div>
  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2\">
        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "debilidades", array()), 'row');
        echo "
      </div>    
    </div>  
  </div>  
  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2\">
        ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "conclusion", array()), 'row');
        echo "
      </div>    
    </div>  
  </div>

    <div class=\"row field-c\"> 
      <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2 subtitulos\">  
        <h2>Evaluativo <hr style=\"border-top: 3px solid #3c8dbc;\"></h2>  
      </div>
    </div> 

    <div class=\"row field-c\"> 
      <div class=\"form-group\">
          <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2\">
          ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "calificacion", array()), 'row');
        echo "
        </div>
          <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0\">
          ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "observacion", array()), 'row');
        echo " 
        </div>  
      </div>  
    </div>

  <div class=\"row field-c\">
    <div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2\">
    <h5> (*) Campo Obligatorio</h5>
    </div>
  </div>  

  <br><br>
  <div class=\"row\"> 
    ";
        // line 125
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) != "estudiante")) {
            // line 126
            echo "
        <div align=\"center\">
          <div class=\"col-md-2 col-md-offset-4\" id=\"editar-diario-boton\">
            <button class=\"btn btn-success btn-lg\"> Actualizar </button>
          </div>
        </div>

    ";
        } else {
            // line 134
            echo "    
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3   col-lg-offset-2\" align=\"center\" style=\"margin-bottom: 2%;\" id=\"editar-diario-boton\">
          <button class=\"btn btn-success btn-lg\"> Actualizar</button> 
        </div>  
    
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3   col-lg-offset-0\"align=\"center\" style=\"margin-bottom: 2%;\"  id=\"eliminar-diario-boton\">
          <button class=\"btn btn-danger btn-lg\"> Eliminar</button> 
        </div>

    ";
        }
        // line 143
        echo " 
  </div>

</div>
</div>  

";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
        // line 150
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Diario:edit-diario-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 150,  240 => 149,  232 => 143,  220 => 134,  210 => 126,  208 => 125,  192 => 112,  186 => 109,  169 => 95,  159 => 88,  149 => 81,  139 => 74,  129 => 67,  119 => 60,  113 => 57,  107 => 54,  101 => 51,  91 => 44,  85 => 41,  75 => 34,  69 => 31,  58 => 23,  52 => 20,  42 => 13,  36 => 10,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ form_start(form, {'attr': {novalidate: 'novalidate', id: 'editar-diario-form'}}) }}*/
/*   {% form_theme form 'TesisAdminBundle:Form:fields.html.twig' %}*/
/* <div class="container-fluid">*/
/* <div class="container-content"> */
/*   */
/* <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2">*/
/*         {{ form_row(form.cronogramacronograma)}}*/
/*       </div>*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0">*/
/*         {{ form_row(form.fecha, {'type':'text', 'id': 'datepicker1'}) }} */
/*       </div>  */
/*     </div>  */
/*   </div>*/
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2">*/
/*         {{ form_row(form.proyectoProyecto) }}  */
/*       </div>*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0">*/
/*         {{ form_row(form.actividadActividad) }}*/
/*         <h5>Mantén presionado la Tecla Ctrl (windows) / Command (Mac) para <b>seleccionar</b> y <b>desmarcar</b> múltiples opciones.</h5>          */
/*       </div>  */
/*     </div>  */
/*   </div>*/
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2">*/
/*         {{ form_row(form.horaInicio, {'id': 'timepicker1'}) }}*/
/*       </div>*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0">*/
/*         {{ form_row(form.horaFin, {'id': 'timepicker2'}) }} */
/*       </div>  */
/*     </div>  */
/*   </div>  */
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2">*/
/*         {{ form_row(form.horas)}}*/
/*       </div>*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0">*/
/*         {{ form_row(form.personas) }} */
/*       </div>  */
/*     </div>  */
/*   </div>*/
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-2 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-2 col-lg-3   col-lg-offset-2">*/
/*         {{ form_row(form.ninos)}}*/
/*       </div>*/
/*         <div class="col-xs-2 col-xs-offset-0 col-sm-2 col-sm-offset-0 col-md-2 col-md-offset-0 col-lg-3   col-lg-offset-0">*/
/*         {{ form_row(form.adultos) }} */
/*       </div>*/
/*         <div class="col-xs-2 col-xs-offset-0 col-sm-2 col-sm-offset-0 col-md-2 col-md-offset-0 col-lg-3   col-lg-offset-2">*/
/*         {{ form_row(form.terceraEdad) }} */
/*       </div>  */
/*         <div class="col-xs-2 col-xs-offset-0 col-sm-2 col-sm-offset-0 col-md-2 col-md-offset-0 col-lg-3   col-lg-offset-0">*/
/*         {{ form_row(form.discapacidad) }} */
/*       </div>              */
/*     </div>  */
/*   </div>*/
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2">*/
/*         {{ form_row(form.descripcion) }}*/
/*       </div>    */
/*     </div>  */
/*   </div>*/
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2">*/
/*         {{ form_row(form.personal) }}*/
/*       </div>    */
/*     </div>  */
/*   </div>  */
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2">*/
/*         {{ form_row(form.fortalezas) }}*/
/*       </div>    */
/*     </div>  */
/*   </div>*/
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2">*/
/*         {{ form_row(form.debilidades) }}*/
/*       </div>    */
/*     </div>  */
/*   </div>  */
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2">*/
/*         {{ form_row(form.conclusion) }}*/
/*       </div>    */
/*     </div>  */
/*   </div>*/
/* */
/*     <div class="row field-c"> */
/*       <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2 subtitulos">  */
/*         <h2>Evaluativo <hr style="border-top: 3px solid #3c8dbc;"></h2>  */
/*       </div>*/
/*     </div> */
/* */
/*     <div class="row field-c"> */
/*       <div class="form-group">*/
/*           <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2">*/
/*           {{ form_row(form.calificacion)}}*/
/*         </div>*/
/*           <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0">*/
/*           {{ form_row(form.observacion) }} */
/*         </div>  */
/*       </div>  */
/*     </div>*/
/* */
/*   <div class="row field-c">*/
/*     <div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2">*/
/*     <h5> (*) Campo Obligatorio</h5>*/
/*     </div>*/
/*   </div>  */
/* */
/*   <br><br>*/
/*   <div class="row"> */
/*     {% if (user.rol != 'estudiante') %}*/
/* */
/*         <div align="center">*/
/*           <div class="col-md-2 col-md-offset-4" id="editar-diario-boton">*/
/*             <button class="btn btn-success btn-lg"> Actualizar </button>*/
/*           </div>*/
/*         </div>*/
/* */
/*     {% else %}*/
/*     */
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3   col-lg-offset-2" align="center" style="margin-bottom: 2%;" id="editar-diario-boton">*/
/*           <button class="btn btn-success btn-lg"> Actualizar</button> */
/*         </div>  */
/*     */
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3   col-lg-offset-0"align="center" style="margin-bottom: 2%;"  id="eliminar-diario-boton">*/
/*           <button class="btn btn-danger btn-lg"> Eliminar</button> */
/*         </div>*/
/* */
/*     {% endif %} */
/*   </div>*/
/* */
/* </div>*/
/* </div>  */
/* */
/* {{ form_rest(form) }}*/
/* {{ form_end(form) }}*/
