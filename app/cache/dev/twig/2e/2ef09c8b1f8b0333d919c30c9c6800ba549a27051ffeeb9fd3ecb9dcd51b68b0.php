<?php

/* TesisAdminBundle:Periodo:list-periodo.html.twig */
class __TwigTemplate_ae1ad79077f6d796de8601151468b15cc03d5c422e763a54e7a6b79a7c85e8f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "TesisAdminBundle:Periodo:list-periodo.html.twig", 1);
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
              Gestionar productos
              <small></small>
            </h1>
            <ol class=\"breadcrumb\">
              <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("tesis_admin_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i>Inicio</a></li>
              <li class=\"active\">Gestionar productos</li>
              <li class=\"active\">Listar periodos</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class=\"content\">

            <!-- Default box -->
            <div class=\"box box-primary\">
              <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Listar periodos</h3>
                <div class=\"box-tools pull-right\">
                  <button class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\"><i class=\"fa fa-times\"></i></button>
                </div>
              </div>
              

              <div class=\"box-body\">
                <table id=\"example1\" class=\"table table-bordered table-striped\">
                  <thead>
                    <tr>
                        ";
        // line 45
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "estudiante")) {
            // line 46
            echo "                      <th>Estudiante</th>      
                        ";
        }
        // line 47
        echo "                
                      <th>Fecha inicio</th>
                      <th>Fecha culminacion</th>                      
                      <th>Nombre</th>
                      ";
        // line 51
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante")) {
            // line 52
            echo "                      <th></th> 
                      ";
        }
        // line 53
        echo "                      
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["periodos"]) ? $context["periodos"] : $this->getContext($context, "periodos")));
        foreach ($context['_seq'] as $context["_key"] => $context["periodo"]) {
            // line 60
            echo "                    <tr>
                       ";
            // line 61
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "estudiante")) {
                // line 62
                echo "                    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["periodo"], "estudianteEstudiante", array()), "nombre", array()), "html", null, true);
                echo "</td>
                       ";
            }
            // line 63
            echo "                                              
                    <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["periodo"], "fechaInicio", array()), "d-m-Y"), "html", null, true);
            echo "</td> 
                    <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["periodo"], "fechaFin", array()), "d-m-Y"), "html", null, true);
            echo "</td>                    
                    <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["periodo"], "nombre", array()), "html", null, true);
            echo "</td>                  
                    <td align=\"center\">
                      <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodo_check", array("id" => $this->getAttribute($context["periodo"], "idPeriodo", array()))), "html", null, true);
            echo "\">
                          <button class=\"btn btn-success\">Consultar</button>
                      </a>
                    </td>
                    <td align=\"center\">
                      <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodo_edit", array("id" => $this->getAttribute($context["periodo"], "idPeriodo", array()))), "html", null, true);
            echo "\">
                        ";
            // line 74
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "estudiante")) {
                // line 75
                echo "                          <button class=\"btn btn-success\">Evaluar</button>
                        ";
            } else {
                // line 77
                echo "                          <button class=\"btn btn-success\">Editar</button>
                        ";
            }
            // line 79
            echo "                      </a>
                    </td>
                    ";
            // line 81
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante")) {
                // line 82
                echo "                    <td align=\"center\">
                      <a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodo_edit", array("id" => $this->getAttribute($context["periodo"], "idPeriodo", array()))), "html", null, true);
                echo "\">
                          <button class=\"btn btn-danger\">Eliminar</button>
                      </a>
                    </td> 
                    ";
            }
            // line 87
            echo "                                         
                    </tr> 
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['periodo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "         
                  </tbody>
                  <tfoot>
                    <tr>
                        ";
        // line 93
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "estudiante")) {
            // line 94
            echo "                      <th>Estudiante</th> 
                        ";
        }
        // line 95
        echo "                          
                      <th>Fecha inicio</th>
                      <th>Fecha culminacion</th>                      
                      <th>Nombre</th>
                      ";
        // line 99
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante")) {
            // line 100
            echo "                      <th></th> 
                      ";
        }
        // line 101
        echo "                      
                      <th></th>
                      <th></th>
                    </tr>
                  </tfoot>
                </table> 
              </div><!-- /.box-body -->                               
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

      ";
        // line 112
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:footer.html.twig");
        echo "
     
    </div><!-- ./wrapper -->


";
    }

    // line 120
    public function block_js($context, array $blocks = array())
    {
        // line 121
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
        return "TesisAdminBundle:Periodo:list-periodo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 121,  235 => 120,  225 => 112,  212 => 101,  208 => 100,  206 => 99,  200 => 95,  196 => 94,  194 => 93,  188 => 89,  180 => 87,  172 => 83,  169 => 82,  167 => 81,  163 => 79,  159 => 77,  155 => 75,  153 => 74,  149 => 73,  141 => 68,  136 => 66,  132 => 65,  128 => 64,  125 => 63,  119 => 62,  117 => 61,  114 => 60,  110 => 59,  102 => 53,  98 => 52,  96 => 51,  90 => 47,  86 => 46,  84 => 45,  58 => 22,  44 => 11,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
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
/*               Gestionar productos*/
/*               <small></small>*/
/*             </h1>*/
/*             <ol class="breadcrumb">*/
/*               <li><a href="{{ path('tesis_admin_homepage') }}"><i class="fa fa-dashboard"></i>Inicio</a></li>*/
/*               <li class="active">Gestionar productos</li>*/
/*               <li class="active">Listar periodos</li>*/
/*             </ol>*/
/*           </section>*/
/* */
/*           <!-- Main content -->*/
/*           <section class="content">*/
/* */
/*             <!-- Default box -->*/
/*             <div class="box box-primary">*/
/*               <div class="box-header with-border">*/
/*                 <h3 class="box-title">Listar periodos</h3>*/
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
/*                         {% if (user.perfil != 'estudiante') %}*/
/*                       <th>Estudiante</th>      */
/*                         {% endif %}                */
/*                       <th>Fecha inicio</th>*/
/*                       <th>Fecha culminacion</th>                      */
/*                       <th>Nombre</th>*/
/*                       {% if (user.perfil == 'estudiante') %}*/
/*                       <th></th> */
/*                       {% endif %}                      */
/*                       <th></th>*/
/*                       <th></th>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for periodo in periodos %}*/
/*                     <tr>*/
/*                        {% if (user.perfil != 'estudiante') %}*/
/*                     <td>{{ periodo.estudianteEstudiante.nombre }}</td>*/
/*                        {% endif %}                                              */
/*                     <td>{{ periodo.fechaInicio |date('d-m-Y')}}</td> */
/*                     <td>{{ periodo.fechaFin |date('d-m-Y') }}</td>                    */
/*                     <td>{{ periodo.nombre }}</td>                  */
/*                     <td align="center">*/
/*                       <a href="{{ path('periodo_check', {'id': periodo.idPeriodo}) }}">*/
/*                           <button class="btn btn-success">Consultar</button>*/
/*                       </a>*/
/*                     </td>*/
/*                     <td align="center">*/
/*                       <a href="{{ path('periodo_edit', {'id': periodo.idPeriodo}) }}">*/
/*                         {% if (user.perfil != 'estudiante') %}*/
/*                           <button class="btn btn-success">Evaluar</button>*/
/*                         {% else %}*/
/*                           <button class="btn btn-success">Editar</button>*/
/*                         {% endif %}*/
/*                       </a>*/
/*                     </td>*/
/*                     {% if (user.perfil == 'estudiante') %}*/
/*                     <td align="center">*/
/*                       <a href="{{ path('periodo_edit', {'id': periodo.idPeriodo}) }}">*/
/*                           <button class="btn btn-danger">Eliminar</button>*/
/*                       </a>*/
/*                     </td> */
/*                     {% endif %}                                         */
/*                     </tr> */
/*                   {% endfor %}         */
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                         {% if (user.perfil != 'estudiante') %}*/
/*                       <th>Estudiante</th> */
/*                         {% endif %}                          */
/*                       <th>Fecha inicio</th>*/
/*                       <th>Fecha culminacion</th>                      */
/*                       <th>Nombre</th>*/
/*                       {% if (user.perfil == 'estudiante') %}*/
/*                       <th></th> */
/*                       {% endif %}                      */
/*                       <th></th>*/
/*                       <th></th>*/
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
