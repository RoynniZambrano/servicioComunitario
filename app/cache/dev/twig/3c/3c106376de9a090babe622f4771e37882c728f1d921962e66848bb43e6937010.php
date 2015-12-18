<?php

/* TesisAdminBundle:Resultados:list-resultados.html.twig */
class __TwigTemplate_8f0ddbaa0ca66bd8398dcf331fa1372ae42d4d61279c7c20657b61a2c24dfec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "TesisAdminBundle:Resultados:list-resultados.html.twig", 1);
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
              <li class=\"active\">Diarios</li>
              <li class=\"active\">Actividad Adicional</li>
              <li class=\"active\">Listar</li>
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
                      <th>Diario</th>
                      <th>Nombre</th>                      
                      <th>Horas</th>
                      <th>Comentario</th>
                      ";
        // line 51
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "estudiante")) {
            // line 52
            echo "                      <th></th> 
                      <th></th>
                      ";
        }
        // line 55
        echo "                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultados"]) ? $context["resultados"] : $this->getContext($context, "resultados")));
        foreach ($context['_seq'] as $context["_key"] => $context["resultado"]) {
            // line 60
            echo "                    <tr>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["resultado"], "diarioDiario", array()), "fecha", array()), "d-m-Y"), "html", null, true);
            echo "</td>                
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["resultado"], "nombre", array()), "html", null, true);
            echo "</td>                      
                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["resultado"], "cantidad", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["resultado"], "comentario", array()), "html", null, true);
            echo "</td>                    
                    <td align=\"center\">
                    <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resultados_check", array("id" => $this->getAttribute($context["resultado"], "idResultados", array()))), "html", null, true);
            echo "\">
                          <button class=\"btn btn-success\">Consultar</button>
                      </a>
                    </td>
                    ";
            // line 70
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "estudiante")) {
                // line 71
                echo "                    <td align=\"center\">
                      <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resultados_edit", array("id" => $this->getAttribute($context["resultado"], "idResultados", array()))), "html", null, true);
                echo "\">
                          <button class=\"btn btn-success\">Editar</button>
                      </a>
                    </td>
                    <td align=\"center\">
                      <a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resultados_edit", array("id" => $this->getAttribute($context["resultado"], "idResultados", array()))), "html", null, true);
                echo "\">
                          <button class=\"btn btn-danger\">Eliminar</button>
                      </a>
                    </td> 
                    ";
            }
            // line 81
            echo "                                        
                    </tr> 
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resultado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "         
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Diario</th>
                      <th>Nombre</th>                      
                      <th>Horas</th>
                      <th>Comentario</th>
                      ";
        // line 91
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "estudiante")) {
            // line 92
            echo "                      <th></th> 
                      <th></th>
                      ";
        }
        // line 95
        echo "                      <th></th>
                    </tr>
                  </tfoot>
                </table> 
              </div><!-- /.box-body -->                               
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

      ";
        // line 104
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:footer.html.twig");
        echo "
     
    </div><!-- ./wrapper -->


";
    }

    // line 112
    public function block_js($context, array $blocks = array())
    {
        // line 113
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
        return "TesisAdminBundle:Resultados:list-resultados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 113,  201 => 112,  191 => 104,  180 => 95,  175 => 92,  173 => 91,  163 => 83,  155 => 81,  147 => 77,  139 => 72,  136 => 71,  134 => 70,  127 => 66,  122 => 64,  118 => 63,  114 => 62,  110 => 61,  107 => 60,  103 => 59,  97 => 55,  92 => 52,  90 => 51,  58 => 22,  44 => 11,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
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
/*               <li class="active">Diarios</li>*/
/*               <li class="active">Actividad Adicional</li>*/
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
/*                       <th>Diario</th>*/
/*                       <th>Nombre</th>                      */
/*                       <th>Horas</th>*/
/*                       <th>Comentario</th>*/
/*                       {% if (user.rol == 'estudiante') %}*/
/*                       <th></th> */
/*                       <th></th>*/
/*                       {% endif %}*/
/*                       <th></th>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for resultado in resultados %}*/
/*                     <tr>*/
/*                     <td>{{ resultado.diarioDiario.fecha |date('d-m-Y') }}</td>                */
/*                     <td>{{ resultado.nombre }}</td>                      */
/*                     <td>{{ resultado.cantidad }}</td>*/
/*                     <td>{{ resultado.comentario }}</td>                    */
/*                     <td align="center">*/
/*                     <a href="{{ path('resultados_check', {'id': resultado.idResultados}) }}">*/
/*                           <button class="btn btn-success">Consultar</button>*/
/*                       </a>*/
/*                     </td>*/
/*                     {% if (user.rol == 'estudiante') %}*/
/*                     <td align="center">*/
/*                       <a href="{{ path('resultados_edit', {'id': resultado.idResultados}) }}">*/
/*                           <button class="btn btn-success">Editar</button>*/
/*                       </a>*/
/*                     </td>*/
/*                     <td align="center">*/
/*                       <a href="{{ path('resultados_edit', {'id': resultado.idResultados}) }}">*/
/*                           <button class="btn btn-danger">Eliminar</button>*/
/*                       </a>*/
/*                     </td> */
/*                     {% endif %}                                        */
/*                     </tr> */
/*                   {% endfor %}         */
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <th>Diario</th>*/
/*                       <th>Nombre</th>                      */
/*                       <th>Horas</th>*/
/*                       <th>Comentario</th>*/
/*                       {% if (user.rol == 'estudiante') %}*/
/*                       <th></th> */
/*                       <th></th>*/
/*                       {% endif %}*/
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
