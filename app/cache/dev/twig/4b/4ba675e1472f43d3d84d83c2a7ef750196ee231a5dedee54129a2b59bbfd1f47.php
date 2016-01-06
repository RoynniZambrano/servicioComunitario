<?php

/* TesisAdminBundle:Actividad:list-activities.html.twig */
class __TwigTemplate_d355ce2e046e4fb881b67153ef6be84285c3277fd8426a6f8d2548da86a7d202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "TesisAdminBundle:Actividad:list-activities.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
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
        // line 9
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:header.html.twig");
        echo "

      ";
        // line 11
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:sidebar.html.twig");
        echo "

        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
          <!-- Content Header (Page header) -->
          <section class=\"content-header\">
            <h1>
              Gestionar proyectos
              <small></small>
            </h1>
            <ol class=\"breadcrumb\">
              <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("tesis_admin_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i>Inicio</a></li>
              <li class=\"active\">Gestionar proyectos</li>
              <li class=\"active\">Actividades</li>
              <li class=\"active\">Listar actividades</li>
              <th></th>
              <th></th>
            </ol>
          </section>

          <!-- Main content -->
          <section class=\"content\">

            <!-- Default box -->
            <div class=\"box box-primary\">
              <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Listar actividades</h3>
                <div class=\"box-tools pull-right\">
                  <button class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\"><i class=\"fa fa-times\"></i></button>
                </div>
              </div>
              

              <div class=\"box-body\">
                <table id=\"example1\" class=\"table table-bordered table-striped\">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                    <!--   <th>Descripción</th> -->
                      <th></th>
                      <th></th>
                      ";
        // line 52
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "estudiante") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "tutor"))) {
            // line 53
            echo "                      <th></th>
                      ";
        }
        // line 54
        echo "                       
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actividades"]) ? $context["actividades"] : $this->getContext($context, "actividades")));
        foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
            // line 59
            echo "                    <tr>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "nombre", array()), "html", null, true);
            echo "</td>
                   <!--  <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "descripcion", array()), "html", null, true);
            echo "</td>   -->                 
                    <td align=\"center\">
                      <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activities_check", array("id" => $this->getAttribute($context["actividad"], "idActividad", array()))), "html", null, true);
            echo "\">
                          <button class=\"btn btn-success\">Consultar</button>
                      </a>
                    </td>
                    <td align=\"center\">
                      <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activities_edit", array("id" => $this->getAttribute($context["actividad"], "idActividad", array()))), "html", null, true);
            echo "\">
                          <button class=\"btn btn-success\">Editar</button>
                      </a>
                    </td>
                    ";
            // line 72
            if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "estudiante") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "tutor"))) {
                // line 73
                echo "                    <td align=\"center\">
                      <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activities_edit", array("id" => $this->getAttribute($context["actividad"], "idActividad", array()))), "html", null, true);
                echo "\">
                          <button class=\"btn btn-danger\">Eliminar</button>
                      </a>
                    </td> 
                    ";
            }
            // line 78
            echo "                    
                    </tr> 
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "         
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Nombre</th>
                     <!--  <th>Descripción</th> -->
                      <th></th>
                      <th></th>
                      ";
        // line 88
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "estudiante") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "tutor"))) {
            // line 89
            echo "                      <th></th>
                      ";
        }
        // line 90
        echo "                       
                    </tr>
                  </tfoot>
                </table> 
              </div><!-- /.box-body -->                               
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

      ";
        // line 99
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:footer.html.twig");
        echo "
     
    </div><!-- ./wrapper -->


";
    }

    // line 107
    public function block_js($context, array $blocks = array())
    {
        // line 108
        echo "        <!-- page script -->
    <script type=\"text/javascript\">
      \$(function () {
        \$(\"#example1\").dataTable();
      });
    </script> 

 ";
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Actividad:list-activities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 108,  192 => 107,  182 => 99,  171 => 90,  167 => 89,  165 => 88,  155 => 80,  147 => 78,  139 => 74,  136 => 73,  134 => 72,  127 => 68,  119 => 63,  114 => 61,  110 => 60,  107 => 59,  103 => 58,  97 => 54,  93 => 53,  91 => 52,  58 => 22,  44 => 11,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::admin_base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
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
/*               Gestionar proyectos*/
/*               <small></small>*/
/*             </h1>*/
/*             <ol class="breadcrumb">*/
/*               <li><a href="{{ path('tesis_admin_homepage') }}"><i class="fa fa-dashboard"></i>Inicio</a></li>*/
/*               <li class="active">Gestionar proyectos</li>*/
/*               <li class="active">Actividades</li>*/
/*               <li class="active">Listar actividades</li>*/
/*               <th></th>*/
/*               <th></th>*/
/*             </ol>*/
/*           </section>*/
/* */
/*           <!-- Main content -->*/
/*           <section class="content">*/
/* */
/*             <!-- Default box -->*/
/*             <div class="box box-primary">*/
/*               <div class="box-header with-border">*/
/*                 <h3 class="box-title">Listar actividades</h3>*/
/*                 <div class="box-tools pull-right">*/
/*                   <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>*/
/*                 </div>*/
/*               </div>*/
/*               */
/* */
/*               <div class="box-body">*/
/*                 <table id="example1" class="table table-bordered table-striped">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <th>Nombre</th>*/
/*                     <!--   <th>Descripción</th> -->*/
/*                       <th></th>*/
/*                       <th></th>*/
/*                       {% if (user.perfil != 'estudiante') and (user.perfil != 'tutor')  %}*/
/*                       <th></th>*/
/*                       {% endif %}                       */
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for actividad in actividades %}*/
/*                     <tr>*/
/*                     <td>{{ actividad.nombre }}</td>*/
/*                    <!--  <td>{{ actividad.descripcion }}</td>   -->                 */
/*                     <td align="center">*/
/*                       <a href="{{ path('activities_check', {'id': actividad.idActividad}) }}">*/
/*                           <button class="btn btn-success">Consultar</button>*/
/*                       </a>*/
/*                     </td>*/
/*                     <td align="center">*/
/*                       <a href="{{ path('activities_edit', {'id': actividad.idActividad}) }}">*/
/*                           <button class="btn btn-success">Editar</button>*/
/*                       </a>*/
/*                     </td>*/
/*                     {% if (user.perfil != 'estudiante') and (user.perfil != 'tutor')  %}*/
/*                     <td align="center">*/
/*                       <a href="{{ path('activities_edit', {'id': actividad.idActividad}) }}">*/
/*                           <button class="btn btn-danger">Eliminar</button>*/
/*                       </a>*/
/*                     </td> */
/*                     {% endif %}                    */
/*                     </tr> */
/*                   {% endfor %}         */
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <th>Nombre</th>*/
/*                      <!--  <th>Descripción</th> -->*/
/*                       <th></th>*/
/*                       <th></th>*/
/*                       {% if (user.perfil != 'estudiante') and (user.perfil != 'tutor')  %}*/
/*                       <th></th>*/
/*                       {% endif %}                       */
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table> */
/*               </div><!-- /.box-body -->                               */
/*             </div><!-- /.box -->*/
/*           </section><!-- /.content -->*/
/*         </div><!-- /.content-wrapper -->*/
/* */
/*       {{ include('TesisAdminBundle:Main:footer.html.twig') }}*/
/*      */
/*     </div><!-- ./wrapper -->*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/*  {% block js %}*/
/*         <!-- page script -->*/
/*     <script type="text/javascript">*/
/*       $(function () {*/
/*         $("#example1").dataTable();*/
/*       });*/
/*     </script> */
/* */
/*  {% endblock %}   */
