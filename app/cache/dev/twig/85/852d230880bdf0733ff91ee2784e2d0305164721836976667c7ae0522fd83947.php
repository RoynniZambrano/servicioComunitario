<?php

/* TesisSCBundle:Main:seccion0.html.twig */
class __TwigTemplate_c4f0a41aba936837c320275753db0e0259e26e012cfd9ef883b4d165bd6faeba extends Twig_Template
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
  <div class=\"inner-cover\" >
    <img  class=\"img-responsive\" style=\"margin: 0 auto;border-top: 1px solid #A9AEB5;max-width: 1600px;max-height: 500px;\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/content8_1000x500_blur.jpg"), "html", null, true);
        echo "\" alt=\"cover\"/>
  </div>";
    }

    public function getTemplateName()
    {
        return "TesisSCBundle:Main:seccion0.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* */
/*   <div class="inner-cover" >*/
/*     <img  class="img-responsive" style="margin: 0 auto;border-top: 1px solid #A9AEB5;max-width: 1600px;max-height: 500px;" src="{{ asset('img/content8_1000x500_blur.jpg') }}" alt="cover"/>*/
/*   </div>*/
