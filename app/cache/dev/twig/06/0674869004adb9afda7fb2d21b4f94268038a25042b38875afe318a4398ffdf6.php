<?php

/* TesisAdminBundle:Fase:list-fase.html.twig */
class __TwigTemplate_b1792eeb2ebde3c122487ad987c08e47dbd66705d469096a3bf22ca63477ced7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "TesisAdminBundle:Fase:list-fase.html.twig", 1);
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
              <li class=\"active\">Fases</li>
              <li class=\"active\">Listar fases</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class=\"content\">

            <!-- Default box -->
            <div class=\"box box-primary\">
              <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Listar fases</h3>
                <div class=\"box-tools pull-right\">
                  <button class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\"><i class=\"fa fa-times\"></i></button>
                </div>
              </div>
              

              <div class=\"box-body\">
                <table id=\"example1\" class=\"table table-bordered table-striped\">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                     <!--  <th>Descripción</th> -->
                      <th></th>
                      <th></th>
                      ";
        // line 50
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "estudiante") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "tutor"))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["fases"]) ? $context["fases"] : $this->getContext($context, "fases")));
        foreach ($context['_seq'] as $context["_key"] => $context["fase"]) {
            // line 57
            echo "                    <tr>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["fase"], "nombre", array()), "html", null, true);
            echo "</td>
                   <!--  <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["fase"], "descripcion", array()), "html", null, true);
            echo "</td>  -->                  
                    <td align=\"center\">
                      <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fase_check", array("id" => $this->getAttribute($context["fase"], "idFase", array()))), "html", null, true);
            echo "\">
                          <button class=\"btn btn-success\">Consultar</button>
                      </a>
                    </td>
                    <td align=\"center\">
                      <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fase_edit", array("id" => $this->getAttribute($context["fase"], "idFase", array()))), "html", null, true);
            echo "\">
                          <button class=\"btn btn-success\">Editar</button>
                      </a>
                    </td>
                    ";
            // line 70
            if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "estudiante") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "tutor"))) {
                // line 71
                echo "                    <td align=\"center\">
                      <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fase_edit", array("id" => $this->getAttribute($context["fase"], "idFase", array()))), "html", null, true);
                echo "\">
                          <button class=\"btn btn-danger\">Eliminar</button>
                      </a>
                    </td> 
                    ";
            }
            // line 76
            echo "                     
                    </tr> 
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "         
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Nombre</th>
                    <!--   <th>Descripción</th> -->
                      <th></th>
                      <th></th>
                      ";
        // line 86
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "estudiante") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "tutor"))) {
            // line 87
            echo "                      <th></th>
                      ";
        }
        // line 88
        echo "                        
                    </tr>
                  </tfoot>
                </table> 
              </div><!-- /.box-body -->                               
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

      ";
        // line 97
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:footer.html.twig");
        echo "
     
    </div><!-- ./wrapper -->


";
    }

    // line 105
    public function block_js($context, array $blocks = array())
    {
        // line 106
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
        return "TesisAdminBundle:Fase:list-fase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 106,  190 => 105,  180 => 97,  169 => 88,  165 => 87,  163 => 86,  153 => 78,  145 => 76,  137 => 72,  134 => 71,  132 => 70,  125 => 66,  117 => 61,  112 => 59,  108 => 58,  105 => 57,  101 => 56,  95 => 52,  91 => 51,  89 => 50,  58 => 22,  44 => 11,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
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
/*               <li class="active">Fases</li>*/
/*               <li class="active">Listar fases</li>*/
/*             </ol>*/
/*           </section>*/
/* */
/*           <!-- Main content -->*/
/*           <section class="content">*/
/* */
/*             <!-- Default box -->*/
/*             <div class="box box-primary">*/
/*               <div class="box-header with-border">*/
/*                 <h3 class="box-title">Listar fases</h3>*/
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
/*                      <!--  <th>Descripción</th> -->*/
/*                       <th></th>*/
/*                       <th></th>*/
/*                       {% if (user.perfil != 'estudiante') and (user.perfil != 'tutor')  %}*/
/*                       <th></th>*/
/*                       {% endif %}                        */
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for fase in fases %}*/
/*                     <tr>*/
/*                     <td>{{ fase.nombre }}</td>*/
/*                    <!--  <td>{{ fase.descripcion }}</td>  -->                  */
/*                     <td align="center">*/
/*                       <a href="{{ path('fase_check', {'id': fase.idFase}) }}">*/
/*                           <button class="btn btn-success">Consultar</button>*/
/*                       </a>*/
/*                     </td>*/
/*                     <td align="center">*/
/*                       <a href="{{ path('fase_edit', {'id': fase.idFase}) }}">*/
/*                           <button class="btn btn-success">Editar</button>*/
/*                       </a>*/
/*                     </td>*/
/*                     {% if (user.perfil != 'estudiante') and (user.perfil != 'tutor')  %}*/
/*                     <td align="center">*/
/*                       <a href="{{ path('fase_edit', {'id': fase.idFase}) }}">*/
/*                           <button class="btn btn-danger">Eliminar</button>*/
/*                       </a>*/
/*                     </td> */
/*                     {% endif %}                     */
/*                     </tr> */
/*                   {% endfor %}         */
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <th>Nombre</th>*/
/*                     <!--   <th>Descripción</th> -->*/
/*                       <th></th>*/
/*                       <th></th>*/
/*                       {% if (user.perfil != 'estudiante') and (user.perfil != 'tutor')  %}*/
/*                       <th></th>*/
/*                       {% endif %}                        */
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
