<?php

/* TesisAdminBundle:Main:content.html.twig */
class __TwigTemplate_730f0ff0cfb1c06bd186a4f4e6090e58c44935d4370ad64ab7641ff663d10267 extends Twig_Template
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
        echo "      <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Main content -->
    <section class=\"content\">

      <div align=\"center\"> 
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo_menu3.png"), "html", null, true);
        echo "\" class=\"menu-image\" alt=\"menu Image\"/>
      </div>    

    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->";
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Main:content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
/*       <!-- Content Wrapper. Contains page content -->*/
/*   <div class="content-wrapper">*/
/*     <!-- Main content -->*/
/*     <section class="content">*/
/* */
/*       <div align="center"> */
/*         <img src="{{ asset('img/logo_menu3.png') }}" class="menu-image" alt="menu Image"/>*/
/*       </div>    */
/* */
/*     </section><!-- /.content -->*/
/*   </div><!-- /.content-wrapper -->*/
