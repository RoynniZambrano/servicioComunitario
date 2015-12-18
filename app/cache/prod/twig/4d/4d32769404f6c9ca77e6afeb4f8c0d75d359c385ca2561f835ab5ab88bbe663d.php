<?php

/* TesisAdminBundle:InfoAdicional:list-infoAdicional.html.twig */
class __TwigTemplate_05a9f971c48b64998261f5b11f1a1646f28bf0d10b641e19a003e3787009a2bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "TesisAdminBundle:InfoAdicional:list-infoAdicional.html.twig", 1);
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
              <li class=\"active\">Información Adicional</li>
              <li class=\"active\">Listar</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class=\"content\">

            <!-- Default box -->
            <div class=\"box box-primary\">
              <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Listar Información Adicional</h3>
                <div class=\"box-tools pull-right\">
                  <button class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\"><i class=\"fa fa-times\"></i></button>
                </div>
              </div>
              

              <div class=\"box-body\">
                <table id=\"example1\" class=\"table table-bordered table-striped\">
                  <thead>
                    <tr>
                      <th>Estudiante</th>
                      <th>Calificación</th>
                      <th>Observación</th>
                      <th></th>
                      <th></th>
                      ";
        // line 51
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "estudiante")) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["entity"]) ? $context["entity"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["infoAdicional"]) {
            // line 58
            echo "                    <tr>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["infoAdicional"], "idEstudiante", array()), "nombre", array()), "html", null, true);
            echo "</td>                   
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["infoAdicional"], "calificacion", array()), "html", null, true);
            echo "</td>    
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["infoAdicional"], "observacion", array()), "html", null, true);
            echo "</td>
                    <td align=\"center\">
                      <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("infoAdicional_check", array("id" => $this->getAttribute($context["infoAdicional"], "idInfoAdicional", array()))), "html", null, true);
            echo "\">
                          <button class=\"btn btn-success\">Consultar</button>
                      </a>
                    </td>
                    <td align=\"center\">
                      <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("infoAdicional_edit", array("id" => $this->getAttribute($context["infoAdicional"], "idInfoAdicional", array()))), "html", null, true);
            echo "\">
                        ";
            // line 69
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) != "estudiante")) {
                // line 70
                echo "                          <button class=\"btn btn-success\">Evaluar</button>
                        ";
            } else {
                // line 72
                echo "                          <button class=\"btn btn-success\">Editar</button>
                        ";
            }
            // line 74
            echo "                      </a>
                    </td>
                    ";
            // line 76
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "estudiante")) {
                // line 77
                echo "                    <td align=\"center\">
                      <a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("infoAdicional_edit", array("id" => $this->getAttribute($context["infoAdicional"], "idInfoAdicional", array()))), "html", null, true);
                echo "\">
                          <button class=\"btn btn-danger\">Eliminar</button>
                      </a>
                    </td> 
                    ";
            }
            // line 82
            echo "                                       
                    </tr> 
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['infoAdicional'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "         
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Estudiante</th>
                      <th>Calificación</th>
                      <th>Observación</th>
                      <th></th>
                      <th></th>
                      ";
        // line 93
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "estudiante")) {
            // line 94
            echo "                      <th></th> 
                      ";
        }
        // line 95
        echo "                       
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
        return "TesisAdminBundle:InfoAdicional:list-infoAdicional.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 113,  207 => 112,  197 => 104,  186 => 95,  182 => 94,  180 => 93,  169 => 84,  161 => 82,  153 => 78,  150 => 77,  148 => 76,  144 => 74,  140 => 72,  136 => 70,  134 => 69,  130 => 68,  122 => 63,  117 => 61,  113 => 60,  109 => 59,  106 => 58,  102 => 57,  96 => 53,  92 => 52,  90 => 51,  58 => 22,  44 => 11,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
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
/*               <li class="active">Información Adicional</li>*/
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
/*                 <h3 class="box-title">Listar Información Adicional</h3>*/
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
/*                       <th>Estudiante</th>*/
/*                       <th>Calificación</th>*/
/*                       <th>Observación</th>*/
/*                       <th></th>*/
/*                       <th></th>*/
/*                       {% if (user.rol == 'estudiante') %}*/
/*                       <th></th>  */
/*                       {% endif %}                      */
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for infoAdicional in entity %}*/
/*                     <tr>*/
/*                     <td>{{ infoAdicional.idEstudiante.nombre }}</td>                   */
/*                     <td>{{ infoAdicional.calificacion }}</td>    */
/*                     <td>{{ infoAdicional.observacion }}</td>*/
/*                     <td align="center">*/
/*                       <a href="{{ path('infoAdicional_check', {'id': infoAdicional.idInfoAdicional}) }}">*/
/*                           <button class="btn btn-success">Consultar</button>*/
/*                       </a>*/
/*                     </td>*/
/*                     <td align="center">*/
/*                       <a href="{{ path('infoAdicional_edit', {'id': infoAdicional.idInfoAdicional}) }}">*/
/*                         {% if (user.rol != 'estudiante') %}*/
/*                           <button class="btn btn-success">Evaluar</button>*/
/*                         {% else %}*/
/*                           <button class="btn btn-success">Editar</button>*/
/*                         {% endif %}*/
/*                       </a>*/
/*                     </td>*/
/*                     {% if (user.rol == 'estudiante') %}*/
/*                     <td align="center">*/
/*                       <a href="{{ path('infoAdicional_edit', {'id': infoAdicional.idInfoAdicional}) }}">*/
/*                           <button class="btn btn-danger">Eliminar</button>*/
/*                       </a>*/
/*                     </td> */
/*                     {% endif %}                                       */
/*                     </tr> */
/*                   {% endfor %}         */
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <th>Estudiante</th>*/
/*                       <th>Calificación</th>*/
/*                       <th>Observación</th>*/
/*                       <th></th>*/
/*                       <th></th>*/
/*                       {% if (user.rol == 'estudiante') %}*/
/*                       <th></th> */
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
