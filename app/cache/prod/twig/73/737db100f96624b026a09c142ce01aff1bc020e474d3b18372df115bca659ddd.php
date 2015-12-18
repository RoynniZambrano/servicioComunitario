<?php

/* TesisAdminBundle:Reports:reports-form.html.twig */
class __TwigTemplate_5021b4621b63c1d9d38286a77e91d92be83818007bee36a1bef008465e43be9f extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => "reportes-form")));
        echo "
";
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "TesisAdminBundle:Form:fields.html.twig"));
        // line 3
        echo "  <div class=\"row field-c\"> 
    <div class=\"form-group\">
        <div class=\"col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-3\">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "departamento", array()), 'row');
        echo " 
      </div>
        <div class=\"col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0\">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "periodo", array()), 'row');
        echo "
      </div>


        <div  class=\"row\" align=\"center\">
          <div class=\"col-xs-2 col-xs-offset-4 col-sm-2 col-sm-offset-5 col-md-2 col-md-offset-5  col-lg-2  col-lg-offset-5 \"  style=\"margin-top: 2%;\">
          ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'row', array("attr" => array("class" => "btn btn-success")));
        echo "
          </div>
        </div>

    </div>  
  </div>

";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Reports:reports-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 23,  55 => 22,  45 => 15,  36 => 9,  30 => 6,  25 => 3,  23 => 2,  19 => 1,);
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
/* */
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
