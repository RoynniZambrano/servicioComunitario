<?php

/* TesisAdminBundle:InfoAdicional:edit-infoAdicional-form.html.twig */
class __TwigTemplate_eab95b868ab46aa6646da7f15c6354563b6e28c03b57191a95a8c1c8b11bcf2d extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => "editar-infoAdicional-form")));
        echo "
  ";
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "TesisAdminBundle:Form:fields.html.twig"));
        // line 4
        echo "<div class=\"container-fluid\">
<div class=\"container-content\"> 
  
<div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2\">
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "resumen", array()), 'row');
        echo "
      </div>    
    </div>  
  </div>
  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2\">
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "problema", array()), 'row');
        echo "
      </div>    
    </div>  
  </div>  
  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2\">
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "justificacion", array()), 'row');
        echo "
      </div>    
    </div>  
  </div>
  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2\">
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "objetivoG", array()), 'row');
        echo "
      </div>    
    </div>  
  </div>  
  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2\">
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "objetivoE", array()), 'row');
        echo "
      </div>    
    </div>  
  </div>    
  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2\">
        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "resultados", array()), 'row');
        echo "
      </div>    
    </div>  
  </div>    
  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2\">
        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "conclusion", array()), 'row');
        echo "
      </div>    
    </div>  
  </div>

    <div class=\"row field-c\"> 
      <div class=\"form-group\">
          <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-2\">
          ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fecha", array()), 'row', array("type" => "text", "id" => "datepicker3"));
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
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "calificacion", array()), 'row');
        echo "
        </div>
          <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0\">
          ";
        // line 78
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
        // line 92
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) != "estudiante")) {
            // line 93
            echo "
        <div align=\"center\">
          <div class=\"col-md-2 col-md-offset-4 boton-opcion\" id=\"editar-infoAdicional-boton\">
            <button class=\"btn btn-success btn-lg\"> Actualizar </button>
          </div>
        </div>

    ";
        } else {
            // line 101
            echo "    
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3   col-lg-offset-2\" align=\"center\" style=\"margin-bottom: 2%;\" id=\"editar-infoAdicional-boton\">
          <button class=\"btn btn-success btn-lg\"> Actualizar</button> 
        </div>  
    
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3   col-lg-offset-0\"align=\"center\" style=\"margin-bottom: 2%;\"  id=\"eliminar-infoAdicional-boton\">
          <button class=\"btn btn-danger btn-lg\"> Eliminar</button> 
        </div>

    ";
        }
        // line 110
        echo " 
  </div>

</div>
</div>  

";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
        // line 117
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:InfoAdicional:edit-infoAdicional-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 117,  180 => 116,  172 => 110,  160 => 101,  150 => 93,  148 => 92,  131 => 78,  125 => 75,  107 => 60,  96 => 52,  86 => 45,  76 => 38,  66 => 31,  56 => 24,  46 => 17,  36 => 10,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ form_start(form, {'attr': {novalidate: 'novalidate', id: 'editar-infoAdicional-form'}}) }}*/
/*   {% form_theme form 'TesisAdminBundle:Form:fields.html.twig' %}*/
/* <div class="container-fluid">*/
/* <div class="container-content"> */
/*   */
/* <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2">*/
/*         {{ form_row(form.resumen) }}*/
/*       </div>    */
/*     </div>  */
/*   </div>*/
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2">*/
/*         {{ form_row(form.problema) }}*/
/*       </div>    */
/*     </div>  */
/*   </div>  */
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2">*/
/*         {{ form_row(form.justificacion) }}*/
/*       </div>    */
/*     </div>  */
/*   </div>*/
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2">*/
/*         {{ form_row(form.objetivoG) }}*/
/*       </div>    */
/*     </div>  */
/*   </div>  */
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2">*/
/*         {{ form_row(form.objetivoE) }}*/
/*       </div>    */
/*     </div>  */
/*   </div>    */
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2">*/
/*         {{ form_row(form.resultados) }}*/
/*       </div>    */
/*     </div>  */
/*   </div>    */
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2">*/
/*         {{ form_row(form.conclusion) }}*/
/*       </div>    */
/*     </div>  */
/*   </div>*/
/* */
/*     <div class="row field-c"> */
/*       <div class="form-group">*/
/*           <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-2">*/
/*           {{ form_row(form.fecha, {'type':'text', 'id': 'datepicker3' }) }} */
/*         </div>      */
/*       </div>  */
/*     </div>*/
/* */
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
/*  */
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
/*           <div class="col-md-2 col-md-offset-4 boton-opcion" id="editar-infoAdicional-boton">*/
/*             <button class="btn btn-success btn-lg"> Actualizar </button>*/
/*           </div>*/
/*         </div>*/
/* */
/*     {% else %}*/
/*     */
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3   col-lg-offset-2" align="center" style="margin-bottom: 2%;" id="editar-infoAdicional-boton">*/
/*           <button class="btn btn-success btn-lg"> Actualizar</button> */
/*         </div>  */
/*     */
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3   col-lg-offset-0"align="center" style="margin-bottom: 2%;"  id="eliminar-infoAdicional-boton">*/
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
