<?php

/* ::bootstrap-base.html.twig */
class __TwigTemplate_87bc8df30e33a56f7429a5de194350561e83504c4fd793a990297bce4d0ea7fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sticker' => array($this, 'block_sticker'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_facyt.png"), "html", null, true);
        echo "\" />     

    <!-- Bootstrap -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap-3.3.2-dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!--
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap-3.3.2-dist/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> -->

    <!-- Font Awesome Icons -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LTE/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('sticker', $context, $blocks);
        // line 20
        echo "  </head>
  <body data-spy=\"scroll\" data-target=\"#nav-bar\">
    ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 24
        echo "    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jquery/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap-3.3.2-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FOSJsRoutingBundle -->
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script> 
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script> 
    
    ";
        // line 34
        $this->displayBlock('js', $context, $blocks);
        // line 35
        echo "  </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Inicio | Sistema de Servicio Comunitario";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 19
    public function block_sticker($context, array $blocks = array())
    {
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
    }

    // line 23
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 34
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::bootstrap-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 34,  128 => 23,  123 => 22,  118 => 19,  113 => 18,  107 => 7,  102 => 35,  100 => 34,  95 => 32,  91 => 31,  87 => 30,  82 => 28,  77 => 26,  73 => 24,  70 => 23,  68 => 22,  64 => 20,  61 => 19,  59 => 18,  54 => 16,  48 => 13,  43 => 11,  37 => 8,  33 => 7,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="es">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %}Inicio | Sistema de Servicio Comunitario{% endblock %}</title>*/
/*     <link rel="shortcut icon" href="{{ asset('img/icon_facyt.png') }}" />     */
/* */
/*     <!-- Bootstrap -->*/
/*     <link href="{{ asset('bundles/bootstrap-3.3.2-dist/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* <!--*/
/*     <link href="{{ asset('bundles/bootstrap-3.3.2-dist/css/bootstrap-responsive.min.css') }}" rel="stylesheet"> -->*/
/* */
/*     <!-- Font Awesome Icons -->*/
/*     <link href="{{ asset('bundles/LTE/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">*/
/* */
/*     {% block stylesheets %}{% endblock %}*/
/*     {% block sticker %}{% endblock %}*/
/*   </head>*/
/*   <body data-spy="scroll" data-target="#nav-bar">*/
/*     {% block body %}{% endblock %}*/
/*     {% block footer %}{% endblock %}*/
/*     */
/*     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*      <script src="{{ asset('bundles/jquery/jquery-1.11.2.min.js') }}"></script> */
/*     <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/*     <script src="{{ asset('bundles/bootstrap-3.3.2-dist/js/bootstrap.min.js') }}"></script>*/
/*     <!-- FOSJsRoutingBundle -->*/
/*     <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*     <script src="{{ path('fos_js_routing_js', {"callback": "fos.Router.setData"}) }}"></script> */
/*     <script src="{{ asset('js/app.js') }}"></script> */
/*     */
/*     {% block js %}{% endblock %}*/
/*   </body>*/
/* </html>*/
