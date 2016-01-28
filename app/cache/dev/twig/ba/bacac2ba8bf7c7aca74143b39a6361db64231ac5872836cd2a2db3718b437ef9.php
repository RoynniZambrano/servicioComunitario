<?php

/* TesisAdminBundle:InfoFinal:info_final.html.twig */
class __TwigTemplate_c6f21290a4b5d7c57ef3ace09e31193bbe6380be976254ae6cfffe69fab4f677 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "TesisAdminBundle:InfoFinal:info_final.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">
      
      ";
        // line 8
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:header.html.twig");
        echo "

      ";
        // line 10
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:sidebar.html.twig");
        echo "

        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
          <!-- Content Header (Page header) -->
          <section class=\"content-header\">
            <h1>
              ";
        // line 17
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante")) {
            // line 18
            echo "                Gestionar productos
              ";
        } else {
            // line 20
            echo "                Evaluar productos
              ";
        }
        // line 22
        echo "            </h1>
            <ol class=\"breadcrumb\">
              <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("tesis_admin_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i>Inicio</a></li>
              ";
        // line 25
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante")) {
            // line 26
            echo "                <li class=\"active\">Gestionar productos</li>
              ";
        } else {
            // line 28
            echo "                <li class=\"active\">Evaluar productos</li>
              ";
        }
        // line 30
        echo "              <li class=\"active\">Informe final</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class=\"content\">

            <!-- Default box -->
            <div class=\"box box-primary\">
              <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Ver Informe Final</h3>
                <div class=\"box-tools pull-right\">
                  <button class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\"><i class=\"fa fa-times\"></i></button>
                </div>
              </div>
              
              <div class=\"row\" style=\"margin-top: 4%; padding-bottom: 20px;\">
                <div class=\"col-xs-6 col-xs-offset-1 col-sm-6 col-sm-offset-2 col-md-5 col-md-offset-2 col-lg-4 col-lg-offset-3\">
                    <p class=\"parrafo\">
                    El informe final es generado automaticamente por el Sistema de Servicio Comunitario, basado en la información sumistrada por el estudiante en el Sistema. El informe final contiene información del cronograma de actividades y de la información adicional.
                  </p>
                </div>
              <div class=\"col-xs-2 col-xs-offset-0 col-sm-2 col-sm-offset-0 col-md-2 col-md-offset-0  col-lg-2  col-lg-offset-0 div-download\">
                  <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("infofinal_pdf", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\"><i class=\"fa fa-download icon-download\"></i>
                  </a>
              </div>
            </div>
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

      ";
        // line 61
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:footer.html.twig");
        echo "
     
    </div><!-- ./wrapper -->

";
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:InfoFinal:info_final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 61,  105 => 53,  80 => 30,  76 => 28,  72 => 26,  70 => 25,  66 => 24,  62 => 22,  58 => 20,  54 => 18,  52 => 17,  42 => 10,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::admin_base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <!-- Site wrapper -->*/
/*     <div class="wrapper">*/
/*       */
/*       {{ include('TesisAdminBundle:Main:header.html.twig') }}*/
/* */
/*       {{ include('TesisAdminBundle:Main:sidebar.html.twig') }}*/
/* */
/*         <!-- Content Wrapper. Contains page content -->*/
/*         <div class="content-wrapper">*/
/*           <!-- Content Header (Page header) -->*/
/*           <section class="content-header">*/
/*             <h1>*/
/*               {% if (user.perfil == 'estudiante') %}*/
/*                 Gestionar productos*/
/*               {% else %}*/
/*                 Evaluar productos*/
/*               {% endif %}*/
/*             </h1>*/
/*             <ol class="breadcrumb">*/
/*               <li><a href="{{ path('tesis_admin_homepage') }}"><i class="fa fa-dashboard"></i>Inicio</a></li>*/
/*               {% if (user.perfil == 'estudiante') %}*/
/*                 <li class="active">Gestionar productos</li>*/
/*               {% else %}*/
/*                 <li class="active">Evaluar productos</li>*/
/*               {% endif %}*/
/*               <li class="active">Informe final</li>*/
/*             </ol>*/
/*           </section>*/
/* */
/*           <!-- Main content -->*/
/*           <section class="content">*/
/* */
/*             <!-- Default box -->*/
/*             <div class="box box-primary">*/
/*               <div class="box-header with-border">*/
/*                 <h3 class="box-title">Ver Informe Final</h3>*/
/*                 <div class="box-tools pull-right">*/
/*                   <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>*/
/*                 </div>*/
/*               </div>*/
/*               */
/*               <div class="row" style="margin-top: 4%; padding-bottom: 20px;">*/
/*                 <div class="col-xs-6 col-xs-offset-1 col-sm-6 col-sm-offset-2 col-md-5 col-md-offset-2 col-lg-4 col-lg-offset-3">*/
/*                     <p class="parrafo">*/
/*                     El informe final es generado automaticamente por el Sistema de Servicio Comunitario, basado en la información sumistrada por el estudiante en el Sistema. El informe final contiene información del cronograma de actividades y de la información adicional.*/
/*                   </p>*/
/*                 </div>*/
/*               <div class="col-xs-2 col-xs-offset-0 col-sm-2 col-sm-offset-0 col-md-2 col-md-offset-0  col-lg-2  col-lg-offset-0 div-download">*/
/*                   <a href="{{ path('infofinal_pdf', {'id': id}) }}"><i class="fa fa-download icon-download"></i>*/
/*                   </a>*/
/*               </div>*/
/*             </div>*/
/*             </div><!-- /.box -->*/
/*           </section><!-- /.content -->*/
/*         </div><!-- /.content-wrapper -->*/
/* */
/*       {{ include('TesisAdminBundle:Main:footer.html.twig') }}*/
/*      */
/*     </div><!-- ./wrapper -->*/
/* */
/* {% endblock %}*/
