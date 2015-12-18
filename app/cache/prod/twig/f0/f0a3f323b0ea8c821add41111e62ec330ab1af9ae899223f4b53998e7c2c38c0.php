<?php

/* TesisAdminBundle:Proyecto:list-project.html.twig */
class __TwigTemplate_c2442032a213c769a79ec847a38da015ad44e795a7f9d262ece1c000454dd51f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "TesisAdminBundle:Proyecto:list-project.html.twig", 1);
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
              Gestión de Proyectos
              <small></small>
            </h1>
            <ol class=\"breadcrumb\">
              <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("tesis_admin_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i>Inicio</a></li>
              <li class=\"active\">Gestión de Proyectos</li>
              <li class=\"active\">Proyecto</li>
              <li class=\"active\">Listar</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class=\"content\">

            <!-- Default box -->
            <div class=\"box box-primary\">
              <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Listar Proyectos</h3>
                <div class=\"box-tools pull-right\">
                  <button class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\"><i class=\"fa fa-times\"></i></button>
                </div>
              </div>
              

              <div class=\"box-body\">
                <table id=\"example1\" class=\"table table-bordered table-striped\">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Coordinador Proyecto</th>
                      <th>Coordinador Suplente</th>
                      <th></th>
                      <th></th>
                      ";
        // line 51
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) != "estudiante") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) != "tutor"))) {
            // line 52
            echo "                      <th></th>
                      ";
        }
        // line 53
        echo "                       
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
            // line 58
            echo "                    <tr>  
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "nombre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proyecto"], "coordinador", array()), "nombre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proyecto"], "coordSuplente", array()), "nombre", array()), "html", null, true);
            echo "</td>                    
                    <td align=\"center\">
                      <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_check", array("id" => $this->getAttribute($context["proyecto"], "idProyecto", array()))), "html", null, true);
            echo "\">
                          <button class=\"btn btn-success\">Consultar</button>
                      </a>
                    </td>
                    <td align=\"center\">
                      <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_edit", array("id" => $this->getAttribute($context["proyecto"], "idProyecto", array()))), "html", null, true);
            echo "\">
                          <button class=\"btn btn-success\">Editar</button>
                      </a>
                    </td>
                    ";
            // line 72
            if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) != "estudiante") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) != "tutor"))) {
                // line 73
                echo "                    <td align=\"center\">
                      <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_edit", array("id" => $this->getAttribute($context["proyecto"], "idProyecto", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "         
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Nombre</th>
                      <th>Coordinador Proyecto</th>
                      <th>Coordinador Suplente</th>
                      <th></th>
                      <th></th>
                      ";
        // line 89
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) != "estudiante") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) != "tutor"))) {
            // line 90
            echo "                      <th></th>
                      ";
        }
        // line 91
        echo "                       
                    </tr>
                  </tfoot>
                </table> 
              </div><!-- /.box-body -->                               
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

      ";
        // line 100
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:footer.html.twig");
        echo "
     
    </div><!-- ./wrapper -->


";
    }

    // line 108
    public function block_js($context, array $blocks = array())
    {
        // line 109
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
        return "TesisAdminBundle:Proyecto:list-project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 109,  196 => 108,  186 => 100,  175 => 91,  171 => 90,  169 => 89,  158 => 80,  150 => 78,  142 => 74,  139 => 73,  137 => 72,  130 => 68,  122 => 63,  117 => 61,  113 => 60,  109 => 59,  106 => 58,  102 => 57,  96 => 53,  92 => 52,  90 => 51,  58 => 22,  44 => 11,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
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
/*               Gestión de Proyectos*/
/*               <small></small>*/
/*             </h1>*/
/*             <ol class="breadcrumb">*/
/*               <li><a href="{{ path('tesis_admin_homepage') }}"><i class="fa fa-dashboard"></i>Inicio</a></li>*/
/*               <li class="active">Gestión de Proyectos</li>*/
/*               <li class="active">Proyecto</li>*/
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
/*                 <h3 class="box-title">Listar Proyectos</h3>*/
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
/*                       <th>Coordinador Proyecto</th>*/
/*                       <th>Coordinador Suplente</th>*/
/*                       <th></th>*/
/*                       <th></th>*/
/*                       {% if (user.rol != 'estudiante') and (user.rol != 'tutor')  %}*/
/*                       <th></th>*/
/*                       {% endif %}                       */
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for proyecto in proyectos %}*/
/*                     <tr>  */
/*                     <td>{{ proyecto.nombre }}</td>*/
/*                     <td>{{ proyecto.coordinador.nombre }}</td>*/
/*                     <td>{{ proyecto.coordSuplente.nombre }}</td>                    */
/*                     <td align="center">*/
/*                       <a href="{{ path('project_check', {'id': proyecto.idProyecto}) }}">*/
/*                           <button class="btn btn-success">Consultar</button>*/
/*                       </a>*/
/*                     </td>*/
/*                     <td align="center">*/
/*                       <a href="{{ path('project_edit', {'id': proyecto.idProyecto}) }}">*/
/*                           <button class="btn btn-success">Editar</button>*/
/*                       </a>*/
/*                     </td>*/
/*                     {% if (user.rol != 'estudiante') and (user.rol != 'tutor')  %}*/
/*                     <td align="center">*/
/*                       <a href="{{ path('project_edit', {'id': proyecto.idProyecto}) }}">*/
/*                           <button class="btn btn-danger">Eliminar</button>*/
/*                       </a>*/
/*                     </td> */
/*                     {% endif %}                                        */
/*                     </tr> */
/*                   {% endfor %}         */
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <th>Nombre</th>*/
/*                       <th>Coordinador Proyecto</th>*/
/*                       <th>Coordinador Suplente</th>*/
/*                       <th></th>*/
/*                       <th></th>*/
/*                       {% if (user.rol != 'estudiante') and (user.rol != 'tutor')  %}*/
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
