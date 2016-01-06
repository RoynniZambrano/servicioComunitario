<?php

/* TesisAdminBundle:Actividad:check-activities-form.html.twig */
class __TwigTemplate_3aea7598a0cf7192aa1e2edbe5f516faa99b2c45380c0aa2376203be0422b384 extends Twig_Template
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
  ";
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "TesisAdminBundle:Form:fields.html.twig"));
        // line 4
        echo "<div class=\"container-fluid\">
<div class=\"container-content\"> 
  
  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-2 col-lg-3   col-lg-offset-2\">
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'row');
        echo " 
      </div>
        <div class=\"col-xs-8 col-xs-offset-1 col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4   col-lg-offset-0\">
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'row');
        echo "
      </div>
    </div>  
  </div>  

  <br><br>
  <div class=\"row\">
      <div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3   col-lg-offset-2\" align=\"center\" style=\"margin-bottom: 2%;\">
         ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "edit", array()), 'row', array("attr" => array("class" => "btn btn-success btn-lg")));
        echo " 
      </div>
      <div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3   col-lg-offset-0\"align=\"center\" style=\"margin-bottom: 2%;\">
         ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "back", array()), 'row', array("attr" => array("class" => "btn btn-success btn-lg")));
        echo " 
      </div>          
  </div>

</div>
</div>  

";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Actividad:check-activities-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 32,  69 => 31,  59 => 24,  53 => 21,  42 => 13,  36 => 10,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ form_start(form, {'attr': {novalidate: 'novalidate'}}) }}*/
/*   {% form_theme form 'TesisAdminBundle:Form:fields.html.twig' %}*/
/* <div class="container-fluid">*/
/* <div class="container-content"> */
/*   */
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-2 col-lg-3   col-lg-offset-2">*/
/*         {{ form_row(form.nombre) }} */
/*       </div>*/
/*         <div class="col-xs-8 col-xs-offset-1 col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4   col-lg-offset-0">*/
/*         {{ form_row(form.descripcion) }}*/
/*       </div>*/
/*     </div>  */
/*   </div>  */
/* */
/*   <br><br>*/
/*   <div class="row">*/
/*       <div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3   col-lg-offset-2" align="center" style="margin-bottom: 2%;">*/
/*          {{ form_row(form.edit, {'attr': {'class': 'btn btn-success btn-lg'}} ) }} */
/*       </div>*/
/*       <div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3   col-lg-offset-0"align="center" style="margin-bottom: 2%;">*/
/*          {{ form_row(form.back, {'attr': {'class': 'btn btn-success btn-lg'}} ) }} */
/*       </div>          */
/*   </div>*/
/* */
/* </div>*/
/* </div>  */
/* */
/* {{ form_rest(form) }}*/
/* {{ form_end(form) }}*/
