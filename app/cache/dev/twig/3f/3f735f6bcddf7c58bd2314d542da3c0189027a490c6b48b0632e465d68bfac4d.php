<?php

/* TesisAdminBundle:Cronograma:list-cronograma.html.twig */
class __TwigTemplate_31f5863b73ba425f0555c44c258e3076090b875e837b81e92cc2325971604adf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "TesisAdminBundle:Cronograma:list-cronograma.html.twig", 1);
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
              Gestión de Productos
              <small></small>
            </h1>
            <ol class=\"breadcrumb\">
              <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("tesis_admin_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i>Inicio</a></li>
              <li class=\"active\">Gestión de Productos</li>
              <li class=\"active\">Cronograma</li>
              <li class=\"active\">Listar</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class=\"content\">

            <!-- Default box -->
            <div class=\"box box-primary\">
              <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Listar Cronograma</h3>
                <div class=\"box-tools pull-right\">
                  <button class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\"><i class=\"fa fa-times\"></i></button>
                </div>
              </div>
              

              <div class=\"box-body\">
                <table id=\"example1\" class=\"table table-bordered table-striped\">
                  <thead>
                    <tr>
                        ";
        // line 46
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) != "estudiante")) {
            // line 47
            echo "                      <th>Estudiante</th>      
                        ";
        }
        // line 48
        echo "                
                      <th>Fecha inicio</th>
                      <th>Fecha culminacion</th>                      
                      <th>Semana</th>
                      <th>Calificación</th>
                      ";
        // line 53
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "estudiante")) {
            // line 54
            echo "                      <th></th> 
                      ";
        }
        // line 55
        echo "                      
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cronogramas"]) ? $context["cronogramas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cronograma"]) {
            // line 62
            echo "                    <tr>
                       ";
            // line 63
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) != "estudiante")) {
                // line 64
                echo "                    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cronograma"], "estudianteEstudiante", array()), "nombre", array()), "html", null, true);
                echo "</td>
                       ";
            }
            // line 65
            echo "                                              
                    <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cronograma"], "fechaInicio", array()), "d-m-Y"), "html", null, true);
            echo "</td> 
                    <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cronograma"], "fechaFin", array()), "d-m-Y"), "html", null, true);
            echo "</td>                      
                    <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["cronograma"], "semana", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["cronograma"], "calificacion", array()), "html", null, true);
            echo "</td>                    
                    <td align=\"center\">
                      <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cronograma_check", array("id" => $this->getAttribute($context["cronograma"], "idcronograma", array()))), "html", null, true);
            echo "\">
                          <button class=\"btn btn-success\">Consultar</button>
                      </a>
                    </td>
                    <td align=\"center\">
                      <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cronograma_edit", array("id" => $this->getAttribute($context["cronograma"], "idcronograma", array()))), "html", null, true);
            echo "\">
                        ";
            // line 77
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) != "estudiante")) {
                // line 78
                echo "                          <button class=\"btn btn-success\">Evaluar</button>
                        ";
            } else {
                // line 80
                echo "                          <button class=\"btn btn-success\">Editar</button>
                        ";
            }
            // line 82
            echo "                      </a>
                    </td>
                    ";
            // line 84
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "estudiante")) {
                // line 85
                echo "                    <td align=\"center\">
                      <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cronograma_edit", array("id" => $this->getAttribute($context["cronograma"], "idcronograma", array()))), "html", null, true);
                echo "\">
                          <button class=\"btn btn-danger\">Eliminar</button>
                      </a>
                    </td> 
                    ";
            }
            // line 90
            echo "                                         
                    </tr> 
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cronograma'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "         
                  </tbody>
                  <tfoot>
                    <tr>
                        ";
        // line 96
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) != "estudiante")) {
            // line 97
            echo "                      <th>Estudiante</th> 
                        ";
        }
        // line 98
        echo "                          
                      <th>Fecha inicio</th>
                      <th>Fecha culminacion</th>                      
                      <th>Semana</th>
                      <th>Calificación</th>
                      ";
        // line 103
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "estudiante")) {
            // line 104
            echo "                      <th></th> 
                      ";
        }
        // line 105
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
        // line 116
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:footer.html.twig");
        echo "
     
    </div><!-- ./wrapper -->


";
    }

    // line 124
    public function block_js($context, array $blocks = array())
    {
        // line 125
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
        return "TesisAdminBundle:Cronograma:list-cronograma.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 125,  242 => 124,  232 => 116,  219 => 105,  215 => 104,  213 => 103,  206 => 98,  202 => 97,  200 => 96,  194 => 92,  186 => 90,  178 => 86,  175 => 85,  173 => 84,  169 => 82,  165 => 80,  161 => 78,  159 => 77,  155 => 76,  147 => 71,  142 => 69,  138 => 68,  134 => 67,  130 => 66,  127 => 65,  121 => 64,  119 => 63,  116 => 62,  112 => 61,  104 => 55,  100 => 54,  98 => 53,  91 => 48,  87 => 47,  85 => 46,  58 => 22,  44 => 11,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
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
/*               Gestión de Productos*/
/*               <small></small>*/
/*             </h1>*/
/*             <ol class="breadcrumb">*/
/*               <li><a href="{{ path('tesis_admin_homepage') }}"><i class="fa fa-dashboard"></i>Inicio</a></li>*/
/*               <li class="active">Gestión de Productos</li>*/
/*               <li class="active">Cronograma</li>*/
/*               <li class="active">Listar</li>*/
/*             </ol>*/
/*           </section>*/
/* */
/*           <!-- Main content -->*/
/*           <section class="content">*/
/* */
/*             <!-- Default box -->*/
/*             <div class="box box-primary">*/
/*               <div class="box-header with-border">*/
/*                 <h3 class="box-title">Listar Cronograma</h3>*/
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
/*                         {% if (user.rol != 'estudiante') %}*/
/*                       <th>Estudiante</th>      */
/*                         {% endif %}                */
/*                       <th>Fecha inicio</th>*/
/*                       <th>Fecha culminacion</th>                      */
/*                       <th>Semana</th>*/
/*                       <th>Calificación</th>*/
/*                       {% if (user.rol == 'estudiante') %}*/
/*                       <th></th> */
/*                       {% endif %}                      */
/*                       <th></th>*/
/*                       <th></th>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for cronograma in cronogramas %}*/
/*                     <tr>*/
/*                        {% if (user.rol != 'estudiante') %}*/
/*                     <td>{{ cronograma.estudianteEstudiante.nombre }}</td>*/
/*                        {% endif %}                                              */
/*                     <td>{{ cronograma.fechaInicio |date('d-m-Y')}}</td> */
/*                     <td>{{ cronograma.fechaFin |date('d-m-Y') }}</td>                      */
/*                     <td>{{ cronograma.semana }}</td>*/
/*                     <td>{{ cronograma.calificacion }}</td>                    */
/*                     <td align="center">*/
/*                       <a href="{{ path('cronograma_check', {'id': cronograma.idcronograma}) }}">*/
/*                           <button class="btn btn-success">Consultar</button>*/
/*                       </a>*/
/*                     </td>*/
/*                     <td align="center">*/
/*                       <a href="{{ path('cronograma_edit', {'id': cronograma.idcronograma}) }}">*/
/*                         {% if (user.rol != 'estudiante') %}*/
/*                           <button class="btn btn-success">Evaluar</button>*/
/*                         {% else %}*/
/*                           <button class="btn btn-success">Editar</button>*/
/*                         {% endif %}*/
/*                       </a>*/
/*                     </td>*/
/*                     {% if (user.rol == 'estudiante') %}*/
/*                     <td align="center">*/
/*                       <a href="{{ path('cronograma_edit', {'id': cronograma.idcronograma}) }}">*/
/*                           <button class="btn btn-danger">Eliminar</button>*/
/*                       </a>*/
/*                     </td> */
/*                     {% endif %}                                         */
/*                     </tr> */
/*                   {% endfor %}         */
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                         {% if (user.rol != 'estudiante') %}*/
/*                       <th>Estudiante</th> */
/*                         {% endif %}                          */
/*                       <th>Fecha inicio</th>*/
/*                       <th>Fecha culminacion</th>                      */
/*                       <th>Semana</th>*/
/*                       <th>Calificación</th>*/
/*                       {% if (user.rol == 'estudiante') %}*/
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
