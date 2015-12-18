<?php

/* TesisAdminBundle:Diario:list-diario.html.twig */
class __TwigTemplate_9000d5c394b86ed012a93df999cd65cc9ade19a50c24b888fae7f4f8a534628c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "TesisAdminBundle:Diario:list-diario.html.twig", 1);
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
              <li class=\"active\">Diario</li>
              <li class=\"active\">Listar</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class=\"content\">

            <!-- Default box -->
            <div class=\"box box-primary\">
              <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Listar Diarios</h3>
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
                      <th>Fecha</th>                      
                      <th>Proyecto</th>
                      <th>Calificación</th>
                      ";
        // line 52
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "estudiante")) {
            // line 53
            echo "                      <th></th> 
                      ";
        }
        // line 55
        echo "                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diarios"]) ? $context["diarios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["diario"]) {
            // line 61
            echo "                    <tr>
                        ";
            // line 62
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) != "estudiante")) {
                // line 63
                echo "                          <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["diario"], "estudianteEstudiante", array()), "nombre", array()), "html", null, true);
                echo "</td> 
                        ";
            }
            // line 64
            echo "                   
                    <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["diario"], "fecha", array()), "d-m-Y"), "html", null, true);
            echo "</td>                      
                    <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["diario"], "proyectoProyecto", array()), "nombre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["diario"], "calificacion", array()), "html", null, true);
            echo "</td>                    
                    <td align=\"center\">
                      <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("diario_check", array("id" => $this->getAttribute($context["diario"], "idDiario", array()))), "html", null, true);
            echo "\">
                          <button class=\"btn btn-success\">Consultar</button>
                      </a>
                    </td>
                    <td align=\"center\">
                      <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("diario_edit", array("id" => $this->getAttribute($context["diario"], "idDiario", array()))), "html", null, true);
            echo "\">
                       ";
            // line 75
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) != "estudiante")) {
                // line 76
                echo "                          <button class=\"btn btn-success\">Evaluar</button>
                        ";
            } else {
                // line 78
                echo "                          <button class=\"btn btn-success\">Editar</button>
                        ";
            }
            // line 80
            echo "                      </a>
                    </td>
                    ";
            // line 82
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "estudiante")) {
                // line 83
                echo "                    <td align=\"center\">
                      <a href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("diario_edit", array("id" => $this->getAttribute($context["diario"], "idDiario", array()))), "html", null, true);
                echo "\">
                          <button class=\"btn btn-danger\">Eliminar</button>
                      </a>
                    </td> 
                    ";
            }
            // line 88
            echo "                                        
                    </tr> 
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "         
                  </tbody>
                  <tfoot>
                    <tr>
                        ";
        // line 94
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) != "estudiante")) {
            // line 95
            echo "                      <th>Estudiante</th>
                        ";
        }
        // line 96
        echo "  
                      <th>Fecha</th>                      
                      <th>Proyecto</th>
                      <th>Calificación</th>
                      ";
        // line 100
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "estudiante")) {
            // line 101
            echo "                      <th></th> 
                      ";
        }
        // line 102
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
        // line 113
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:footer.html.twig");
        echo "
     
    </div><!-- ./wrapper -->


";
    }

    // line 121
    public function block_js($context, array $blocks = array())
    {
        // line 122
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
        return "TesisAdminBundle:Diario:list-diario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 122,  235 => 121,  225 => 113,  212 => 102,  208 => 101,  206 => 100,  200 => 96,  196 => 95,  194 => 94,  188 => 90,  180 => 88,  172 => 84,  169 => 83,  167 => 82,  163 => 80,  159 => 78,  155 => 76,  153 => 75,  149 => 74,  141 => 69,  136 => 67,  132 => 66,  128 => 65,  125 => 64,  119 => 63,  117 => 62,  114 => 61,  110 => 60,  103 => 55,  99 => 53,  97 => 52,  91 => 48,  87 => 47,  85 => 46,  58 => 22,  44 => 11,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
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
/*               <li class="active">Diario</li>*/
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
/*                 <h3 class="box-title">Listar Diarios</h3>*/
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
/*                       <th>Estudiante</th>*/
/*                         {% endif %}  */
/*                       <th>Fecha</th>                      */
/*                       <th>Proyecto</th>*/
/*                       <th>Calificación</th>*/
/*                       {% if (user.rol == 'estudiante') %}*/
/*                       <th></th> */
/*                       {% endif %}*/
/*                       <th></th>*/
/*                       <th></th>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for diario in diarios %}*/
/*                     <tr>*/
/*                         {% if (user.rol != 'estudiante') %}*/
/*                           <td>{{ diario.estudianteEstudiante.nombre }}</td> */
/*                         {% endif %}                   */
/*                     <td>{{ diario.fecha |date('d-m-Y') }}</td>                      */
/*                     <td>{{ diario.proyectoProyecto.nombre }}</td>*/
/*                     <td>{{ diario.calificacion }}</td>                    */
/*                     <td align="center">*/
/*                       <a href="{{ path('diario_check', {'id': diario.idDiario}) }}">*/
/*                           <button class="btn btn-success">Consultar</button>*/
/*                       </a>*/
/*                     </td>*/
/*                     <td align="center">*/
/*                       <a href="{{ path('diario_edit', {'id': diario.idDiario}) }}">*/
/*                        {% if (user.rol != 'estudiante') %}*/
/*                           <button class="btn btn-success">Evaluar</button>*/
/*                         {% else %}*/
/*                           <button class="btn btn-success">Editar</button>*/
/*                         {% endif %}*/
/*                       </a>*/
/*                     </td>*/
/*                     {% if (user.rol == 'estudiante') %}*/
/*                     <td align="center">*/
/*                       <a href="{{ path('diario_edit', {'id': diario.idDiario}) }}">*/
/*                           <button class="btn btn-danger">Eliminar</button>*/
/*                       </a>*/
/*                     </td> */
/*                     {% endif %}                                        */
/*                     </tr> */
/*                   {% endfor %}         */
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                         {% if (user.rol != 'estudiante') %}*/
/*                       <th>Estudiante</th>*/
/*                         {% endif %}  */
/*                       <th>Fecha</th>                      */
/*                       <th>Proyecto</th>*/
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
