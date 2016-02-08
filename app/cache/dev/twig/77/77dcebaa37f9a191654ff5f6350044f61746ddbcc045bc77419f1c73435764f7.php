<?php

/* TesisAdminBundle:Reports:reports-formcustom.html.twig */
class __TwigTemplate_5e8ad00c378d8512607c28457a3b812aeded3db26dcec262af0460c9ac9b2010 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => "reportes-form")));
        echo "
";
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "TesisAdminBundle:Form:fields.html.twig"));
        // line 3
        echo "  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-3\">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departamento", array()), 'row');
        echo " 
      </div>
        <div class=\"col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0\">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodo", array()), 'row');
        echo "
      </div>
    </div>  
  </div>

  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-3\">
      ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profesor", array()), 'row');
        echo "
      </div>

        <div  class=\"row\" align=\"center\">
          <div class=\"col-xs-2 col-xs-offset-4 col-sm-2 col-sm-offset-5 col-md-2 col-md-offset-5  col-lg-2  col-lg-offset-5 \"  style=\"margin-top: 2%;\">
          ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("class" => "btn btn-success")));
        echo "
          </div>
        </div>

    </div>  
  </div>

";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Reports:reports-formcustom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 30,  65 => 29,  55 => 22,  47 => 17,  36 => 9,  30 => 6,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ form_start(form, {'attr': {novalidate: 'novalidate', id: 'reportes-form'}}) }}*/
/* {% form_theme form 'TesisAdminBundle:Form:fields.html.twig' %}*/
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-3">*/
/*         {{ form_row(form.departamento) }} */
/*       </div>*/
/*         <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0">*/
/*         {{ form_row(form.periodo) }}*/
/*       </div>*/
/*     </div>  */
/*   </div>*/
/* */
/*   <div class="row field-c"> */
/*     <div class="form-group">*/
/*         <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-3">*/
/*       {{ form_row(form.profesor) }}*/
/*       </div>*/
/* */
/*         <div  class="row" align="center">*/
/*           <div class="col-xs-2 col-xs-offset-4 col-sm-2 col-sm-offset-5 col-md-2 col-md-offset-5  col-lg-2  col-lg-offset-5 "  style="margin-top: 2%;">*/
/*           {{ form_row(form.submit, {'attr': {'class': 'btn btn-success'}} ) }}*/
/*           </div>*/
/*         </div>*/
/* */
/*     </div>  */
/*   </div>*/
/* */
/* {{ form_rest(form) }}*/
/* {{ form_end(form) }}*/
