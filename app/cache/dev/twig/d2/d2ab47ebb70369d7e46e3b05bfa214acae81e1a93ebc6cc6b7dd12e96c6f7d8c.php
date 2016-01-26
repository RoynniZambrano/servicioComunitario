<?php

/* TesisAdminBundle:InfoAdicional:list-infoAdicional.html.twig */
class __TwigTemplate_0a372e65346de34b0a2272fbc7d6d08015752f1d429b3d44e5d58d7219ce3814 extends Twig_Template
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
              Gestionar productos
              <small></small>
            </h1>
            <ol class=\"breadcrumb\">
              <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("tesis_admin_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i>Inicio</a></li>
              <li class=\"active\">Gestionar productos</li>
              <li class=\"active\">Listar información adicional</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class=\"content\">

            <!-- Default box -->
            <div class=\"box box-primary\">
              <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Listar información adicional</h3>
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
        // line 50
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante")) {
            // line 51
            echo "                      <th></th>  
                      ";
        }
        // line 52
        echo "                      
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")));
        foreach ($context['_seq'] as $context["_key"] => $context["infoAdicional"]) {
            // line 57
            echo "                    <tr>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["infoAdicional"], "idEstudiante", array()), "nombre", array()), "html", null, true);
            echo "</td>                   
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["infoAdicional"], "calificacion", array()), "html", null, true);
            echo "</td>    
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["infoAdicional"], "observacion", array()), "html", null, true);
            echo "</td>
                    <td align=\"center\">
                      <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("infoAdicional_check", array("id" => $this->getAttribute($context["infoAdicional"], "idInfoAdicional", array()))), "html", null, true);
            echo "\">
                          <button class=\"btn btn-success\">Consultar</button>
                      </a>
                    </td>
                    <td align=\"center\">
                      <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("infoAdicional_edit", array("id" => $this->getAttribute($context["infoAdicional"], "idInfoAdicional", array()))), "html", null, true);
            echo "\">
                        ";
            // line 68
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "estudiante")) {
                // line 69
                echo "                          <button class=\"btn btn-success\">Evaluar</button>
                        ";
            } else {
                // line 71
                echo "                          <button class=\"btn btn-success\">Editar</button>
                        ";
            }
            // line 73
            echo "                      </a>
                    </td>
                    ";
            // line 75
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante")) {
                // line 76
                echo "                    <td align=\"center\">
                      <a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("infoAdicional_edit", array("id" => $this->getAttribute($context["infoAdicional"], "idInfoAdicional", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['infoAdicional'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
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
        // line 92
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante")) {
            // line 93
            echo "                      <th></th> 
                      ";
        }
        // line 94
        echo "                       
                    </tr>
                  </tfoot>
                </table> 
              </div><!-- /.box-body -->                               
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

      ";
        // line 103
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:footer.html.twig");
        echo "
     
    </div><!-- ./wrapper -->


";
    }

    // line 111
    public function block_js($context, array $blocks = array())
    {
        // line 112
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
        return array (  209 => 112,  206 => 111,  196 => 103,  185 => 94,  181 => 93,  179 => 92,  168 => 83,  160 => 81,  152 => 77,  149 => 76,  147 => 75,  143 => 73,  139 => 71,  135 => 69,  133 => 68,  129 => 67,  121 => 62,  116 => 60,  112 => 59,  108 => 58,  105 => 57,  101 => 56,  95 => 52,  91 => 51,  89 => 50,  58 => 22,  44 => 11,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
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
/*               <li class="active">Listar información adicional</li>*/
/*             </ol>*/
/*           </section>*/
/* */
/*           <!-- Main content -->*/
/*           <section class="content">*/
/* */
/*             <!-- Default box -->*/
/*             <div class="box box-primary">*/
/*               <div class="box-header with-border">*/
/*                 <h3 class="box-title">Listar información adicional</h3>*/
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
/*                       {% if (user.perfil == 'estudiante') %}*/
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
/*                         {% if (user.perfil != 'estudiante') %}*/
/*                           <button class="btn btn-success">Evaluar</button>*/
/*                         {% else %}*/
/*                           <button class="btn btn-success">Editar</button>*/
/*                         {% endif %}*/
/*                       </a>*/
/*                     </td>*/
/*                     {% if (user.perfil == 'estudiante') %}*/
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
/*                       {% if (user.perfil == 'estudiante') %}*/
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
