<?php

/* TesisAdminBundle:Resultados:edit-resultados-form.html.twig */
class __TwigTemplate_d8161bb38f8b6942298873f99eb7c218870b926117e07c38a8580da6b0893b7f extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => "editar-resultados-form")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'row');
        echo "
      </div>
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0\">
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "diarioDiario", array()), 'row', array("type" => "text"));
        echo "  
      </div>  
    </div>  
  </div>
  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2\">
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cantidad", array()), 'row');
        echo "  
      </div>
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0\">
      </div>  
    </div>  
  </div>
  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2\">
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comentario", array()), 'row');
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

      <div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3   col-lg-offset-2\" align=\"center\" style=\"margin-bottom: 2%;\" id=\"editar-resultados-boton\">
        <button class=\"btn btn-success btn-lg\"> Actualizar</button> 
      </div>  
  
      <div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3   col-lg-offset-0\"align=\"center\" style=\"margin-bottom: 2%;\"  id=\"eliminar-resultados-boton\">
        <button class=\"btn btn-danger btn-lg\"> Eliminar</button> 
      </div>

  </div>

</div>
</div>  

";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Resultados:edit-resultados-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 57,  94 => 56,  64 => 29,  52 => 20,  42 => 13,  36 => 10,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ form_start(form, {'attr': {novalidate: 'novalidate', id: 'editar-resultados-form'}}) }}*/
/*   {% form_theme form 'TesisAdminBundle:Form:fields.html.twig' %}*/
/* <div class="container-fluid">*/
/* <div class="container-content"> */
/*   */
/* <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2">*/
/*         {{ form_row(form.nombre)}}*/
/*       </div>*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0">*/
/*         {{ form_row(form.diarioDiario, {'type':'text'}) }}  */
/*       </div>  */
/*     </div>  */
/*   </div>*/
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2">*/
/*         {{ form_row(form.cantidad) }}  */
/*       </div>*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0">*/
/*       </div>  */
/*     </div>  */
/*   </div>*/
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2">*/
/*         {{ form_row(form.comentario) }}*/
/*       </div>    */
/*     </div>  */
/*   </div>*/
/* */
/*   <div class="row field-c">*/
/*     <div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2">*/
/*     <h5> (*) Campo Obligatorio</h5>*/
/*     </div>*/
/*   </div>  */
/* */
/*   <br><br>*/
/*   <div class="row"> */
/* */
/*       <div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3   col-lg-offset-2" align="center" style="margin-bottom: 2%;" id="editar-resultados-boton">*/
/*         <button class="btn btn-success btn-lg"> Actualizar</button> */
/*       </div>  */
/*   */
/*       <div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3   col-lg-offset-0"align="center" style="margin-bottom: 2%;"  id="eliminar-resultados-boton">*/
/*         <button class="btn btn-danger btn-lg"> Eliminar</button> */
/*       </div>*/
/* */
/*   </div>*/
/* */
/* </div>*/
/* </div>  */
/* */
/* {{ form_rest(form) }}*/
/* {{ form_end(form) }}*/
