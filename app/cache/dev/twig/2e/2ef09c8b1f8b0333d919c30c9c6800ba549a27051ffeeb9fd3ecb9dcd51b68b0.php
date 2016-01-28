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
              ";
        // line 18
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante")) {
            // line 19
            echo "                Gestionar productos
              ";
        } else {
            // line 21
            echo "                Evaluar productos
              ";
        }
        // line 23
        echo "            </h1>
            <ol class=\"breadcrumb\">
              <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("tesis_admin_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i>Inicio</a></li>
              ";
        // line 26
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante")) {
            // line 27
            echo "                <li class=\"active\">Gestionar productos</li>
              ";
        } else {
            // line 29
            echo "                <li class=\"active\">Evaluar productos</li>
              ";
        }
        // line 31
        echo "              <li class=\"active\">Listar periodos</li>
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
        // line 52
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "estudiante")) {
            // line 53
            echo "                      <th>Estudiante</th>      
                        ";
        }
        // line 54
        echo "                
                      <th>Fecha inicio</th>
                      <th>Fecha culminacion</th>                      
                      <th>Nombre</th>
                      ";
        // line 58
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante")) {
            // line 59
            echo "                      <th></th> 
                      ";
        }
        // line 60
        echo "                      
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["periodos"]) ? $context["periodos"] : $this->getContext($context, "periodos")));
        foreach ($context['_seq'] as $context["_key"] => $context["periodo"]) {
            // line 67
            echo "                    <tr>
                       ";
            // line 68
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "estudiante")) {
                // line 69
                echo "                    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["periodo"], "estudianteEstudiante", array()), "nombre", array()), "html", null, true);
                echo "</td>
                       ";
            }
            // line 70
            echo "                                              
                    <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["periodo"], "fechaInicio", array()), "d-m-Y"), "html", null, true);
            echo "</td> 
                    <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["periodo"], "fechaFin", array()), "d-m-Y"), "html", null, true);
            echo "</td>                    
                    <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["periodo"], "nombre", array()), "html", null, true);
            echo "</td>                  
                    <td align=\"center\">
                      <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodo_check", array("id" => $this->getAttribute($context["periodo"], "idPeriodo", array()))), "html", null, true);
            echo "\">
                          <button class=\"btn btn-success\">Consultar</button>
                      </a>
                    </td>
                    <td align=\"center\">
                      <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodo_edit", array("id" => $this->getAttribute($context["periodo"], "idPeriodo", array()))), "html", null, true);
            echo "\">
                        ";
            // line 81
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "estudiante")) {
                // line 82
                echo "                          <button class=\"btn btn-success\">Evaluar</button>
                        ";
            } else {
                // line 84
                echo "                          <button class=\"btn btn-success\">Editar</button>
                        ";
            }
            // line 86
            echo "                      </a>
                    </td>
                    ";
            // line 88
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante")) {
                // line 89
                echo "                    <td align=\"center\">
                      <a href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodo_edit", array("id" => $this->getAttribute($context["periodo"], "idPeriodo", array()))), "html", null, true);
                echo "\">
                          <button class=\"btn btn-danger\">Eliminar</button>
                      </a>
                    </td> 
                    ";
            }
            // line 94
            echo "                                         
                    </tr> 
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['periodo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "         
                  </tbody>
                  <tfoot>
                    <tr>
                        ";
        // line 100
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "estudiante")) {
            // line 101
            echo "                      <th>Estudiante</th> 
                        ";
        }
        // line 102
        echo "                          
                      <th>Fecha inicio</th>
                      <th>Fecha culminacion</th>                      
                      <th>Nombre</th>
                      ";
        // line 106
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante")) {
            // line 107
            echo "                      <th></th> 
                      ";
        }
        // line 108
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
        // line 119
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:footer.html.twig");
        echo "
     
    </div><!-- ./wrapper -->


";
    }

    // line 127
    public function block_js($context, array $blocks = array())
    {
        // line 128
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
        return array (  259 => 128,  256 => 127,  246 => 119,  233 => 108,  229 => 107,  227 => 106,  221 => 102,  217 => 101,  215 => 100,  209 => 96,  201 => 94,  193 => 90,  190 => 89,  188 => 88,  184 => 86,  180 => 84,  176 => 82,  174 => 81,  170 => 80,  162 => 75,  157 => 73,  153 => 72,  149 => 71,  146 => 70,  140 => 69,  138 => 68,  135 => 67,  131 => 66,  123 => 60,  119 => 59,  117 => 58,  111 => 54,  107 => 53,  105 => 52,  82 => 31,  78 => 29,  74 => 27,  72 => 26,  68 => 25,  64 => 23,  60 => 21,  56 => 19,  54 => 18,  44 => 11,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
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
