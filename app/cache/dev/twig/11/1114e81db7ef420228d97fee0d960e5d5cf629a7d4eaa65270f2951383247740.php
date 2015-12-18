<?php

/* ::admin_base.html.twig */
class __TwigTemplate_0768d13d06bb890b11edfcb5ef77420dba87ff43b69db06d4571a0205a5a7888 extends Twig_Template
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
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_facyt.png"), "html", null, true);
        echo "\" />


    <!-- Bootstrap 3.3.2 -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LTE/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Font Awesome Icons -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LTE/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LTE/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- AdminLTE Skins -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LTE/dist/css/skins/skin-blue.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Data tables -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LTE/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/layout_admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
              
    ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    ";
        $this->displayBlock('sticker', $context, $blocks);
        // line 27
        echo "    </head>
     
    <body  class=\"skin-blue\"> 
    ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 32
        echo "    

    <!-- jQuery 2.1.3   -->
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LTE/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
  
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LTE/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- SlimScroll -->
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LTE/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LTE/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LTE/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Data tables script -->
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LTE/plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LTE/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>

    <!-- bootbox -->
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootbox/bootbox.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FOSJsRoutingBundle -->
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <!-- app.js --> 
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/app_admin.js"), "html", null, true);
        echo "\"></script> 

    ";
        // line 59
        $this->displayBlock('js', $context, $blocks);
        // line 60
        echo "  </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "AdminSC | FACYT ";
    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 26
    public function block_sticker($context, array $blocks = array())
    {
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        echo "<h1>Hello, world!</h1>";
    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 59
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::admin_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 59,  181 => 31,  175 => 30,  170 => 26,  165 => 25,  159 => 8,  154 => 60,  152 => 59,  147 => 57,  142 => 55,  138 => 54,  133 => 52,  127 => 49,  123 => 48,  117 => 45,  112 => 43,  107 => 41,  101 => 38,  95 => 35,  90 => 32,  87 => 31,  85 => 30,  80 => 27,  77 => 26,  75 => 25,  70 => 23,  65 => 21,  60 => 19,  55 => 17,  51 => 16,  45 => 13,  38 => 9,  34 => 8,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="es">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>*/
/*     <title>{% block title %}AdminSC | FACYT {% endblock %}</title>*/
/*     <link rel="shortcut icon" href="{{ asset('img/icon_facyt.png') }}" />*/
/* */
/* */
/*     <!-- Bootstrap 3.3.2 -->*/
/*     <link href="{{ asset('bundles/LTE/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">*/
/* */
/*     <!-- Font Awesome Icons -->*/
/*     <link href="{{ asset('bundles/LTE/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">*/
/*     <link href="{{ asset('bundles/LTE/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css">*/
/*     <!-- AdminLTE Skins -->*/
/*     <link href="{{ asset('bundles/LTE/dist/css/skins/skin-blue.min.css') }}" rel="stylesheet" type="text/css">*/
/*     <!-- Data tables -->*/
/*     <link href="{{ asset('bundles/LTE/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css">*/
/* */
/*     <link href="{{ asset('css/layout_admin.css') }}" rel="stylesheet" type="text/css">*/
/*               */
/*     {% block stylesheets %}{% endblock %}*/
/*     {% block sticker %}{% endblock %}*/
/*     </head>*/
/*      */
/*     <body  class="skin-blue"> */
/*     {% block body %}<h1>Hello, world!</h1>{% endblock %}*/
/*     {% block footer %}{% endblock %}*/
/*     */
/* */
/*     <!-- jQuery 2.1.3   -->*/
/*     <script src="{{ asset('bundles/LTE/plugins/jQuery/jQuery-2.1.3.min.js') }}"></script>*/
/*   */
/*     <!-- Bootstrap 3.3.2 JS -->*/
/*     <script src="{{ asset('bundles/LTE/bootstrap/js/bootstrap.min.js') }}"></script>*/
/* */
/*     <!-- SlimScroll -->*/
/*     <script src="{{ asset('bundles/LTE/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>*/
/*     <!-- FastClick -->*/
/*     <script src="{{ asset('bundles/LTE/plugins/fastclick/fastclick.min.js') }}"></script>*/
/*     <!-- AdminLTE App -->*/
/*     <script src="{{ asset('bundles/LTE/dist/js/app.min.js') }}"></script>*/
/* */
/*     <!-- Data tables script -->*/
/*     <script src="{{ asset('bundles/LTE/plugins/datatables/jquery.dataTables.js') }}"></script>*/
/*     <script src="{{ asset('bundles/LTE/plugins/datatables/dataTables.bootstrap.js') }}"></script>*/
/* */
/*     <!-- bootbox -->*/
/*     <script src="{{ asset('bundles/bootbox/bootbox.min.js') }}"></script>*/
/*     <!-- FOSJsRoutingBundle -->*/
/*     <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*     <script src="{{ path('fos_js_routing_js', {"callback": "fos.Router.setData"}) }}"></script>*/
/*     <!-- app.js --> */
/*     <script src="{{ asset('js/app_admin.js') }}"></script> */
/* */
/*     {% block js %}{% endblock %}*/
/*   </body>*/
/* </html>*/
