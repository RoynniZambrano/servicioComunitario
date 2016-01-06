<?php

/* TesisAdminBundle:Main:sidebar.html.twig */
class __TwigTemplate_6c04d845cc4229795b7e23d2d5a4f1bf14325af4876c5e504d434dd093ae4111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "  ";
        if (((isset($context["user"]) ? $context["user"] : null) != null)) {
            echo "  
      <!-- Left side column. contains the sidebar -->
      <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
          <ul class=\"sidebar-menu\">
            <li class=\"header\">PANEL DE NAVEGACIÓN PRINCIPAL</li>

            <!-- ADMINISTRACIÓN MI PERFIL -->
            <li class=\"treeview\">
              <a>
                <i class=\"fa fa-male\"></i> <span>Administrar mi Perfil</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">

                <li><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_check", array("cedula" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "cedula", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-circle-o text-info\"></i> Consultar Perfil</a></li>                      

                <li><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("cedula" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "cedula", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-circle-o text-info\"></i> Editar Perfil</a></li>   
              </ul>
            </li>


            ";
            // line 23
            if (((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) == "coordinador de proyecto") || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) == "coordinador de servicio comunitario")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) == "coordinador suplente"))) {
                // line 24
                echo "
              <!-- GESTIÓN DE USUARIOS -->
              <li class=\"treeview\">
                <a>
                  <i class=\"fa fa-user-plus\"></i> <span>Gestión de Usuarios</span> <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu\">
                  <li><a href=\"";
                // line 31
                echo $this->env->getExtension('routing')->getPath("user_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i> Crear Profesor</a></li> 
                  <li><a href=\"";
                // line 32
                echo $this->env->getExtension('routing')->getPath("student_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i> Crear Estudiante</a></li>                                                                   
                  <li><a href=\"";
                // line 33
                echo $this->env->getExtension('routing')->getPath("user_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i> Listar Usuarios</a></li> 
                </ul>
              </li>

          ";
            }
            // line 38
            echo "

          <!-- GESTIÓN DE PROYECTOS -->
          ";
            // line 41
            if (((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) == "coordinador de proyecto") || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) == "coordinador de servicio comunitario")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) == "coordinador suplente"))) {
                // line 42
                echo "
            <li class=\"treeview\">
              <a >
                <i class=\"fa fa-files-o\"></i> <span>Gestión de Proyectos</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">

                <li><a ><i class=\"fa fa-circle-o text-info\"></i> Proyecto 
                      <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                    <li>
                    <a href=\"";
                // line 53
                echo $this->env->getExtension('routing')->getPath("project_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Proyecto</a></li>
                    <li>
                      <a href=\"";
                // line 55
                echo $this->env->getExtension('routing')->getPath("project_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Proyecto</a>
                    </li> 
                  </ul>
                </li> 
                <li><a ><i class=\"fa fa-circle-o text-info\"></i> Fase 
                      <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                    <li>
                    <a href=\"";
                // line 63
                echo $this->env->getExtension('routing')->getPath("fase_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Fase</a></li>
                    <li>
                      <a href=\"";
                // line 65
                echo $this->env->getExtension('routing')->getPath("fase_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Fase</a>
                    </li>                                        
                  </ul>
                </li>                
               <li><a><i class=\"fa fa-circle-o text-info\"></i> Actividad 
                      <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                    <li>
                    <a href=\"";
                // line 73
                echo $this->env->getExtension('routing')->getPath("activities_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Actividad</a></li>
                    <li>
                      <a href=\"";
                // line 75
                echo $this->env->getExtension('routing')->getPath("activities_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Actividad</a>
                    </li>                                        
                  </ul>
                </li>                                                 
              </ul>
            </li>            
            <li class=\"treeview\">
              <a >
                <i class=\"fa fa-pencil-square-o\"></i> <span>Gestión de Tutores</span> <i class=\"fa fa-angle-left pull-right\"></i>  
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
                // line 86
                echo $this->env->getExtension('routing')->getPath("tutors_add");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i> Asignar Tutores</a>
                </li>
                <li>
                  <a href=\"";
                // line 89
                echo $this->env->getExtension('routing')->getPath("tutors_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Asignaciones</a>
                </li>                           
              </ul>
            </li>
            ";
            }
            // line 94
            echo "

            ";
            // line 96
            if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) == "estudiante") || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) == "coordinador de servicio comunitario"))) {
                // line 97
                echo "            <li class=\"treeview\">
              <a >
                <i class=\"fa fa-th\"></i> <span>Gestión de Productos</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a><i class=\"fa fa-circle-o text-info\"></i> Cronogramas <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                  ";
                // line 104
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) == "estudiante")) {
                    // line 105
                    echo "                    <li>
                    <a href=\"";
                    // line 106
                    echo $this->env->getExtension('routing')->getPath("cronograma_new");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Cronograma</a>
                    </li>
                    <li>
                      <a href=\"";
                    // line 109
                    echo $this->env->getExtension('routing')->getPath("cronograma_list");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Cronogramas</a>
                    </li> 
                  ";
                } else {
                    // line 111
                    echo "  
                    <li>
                      <a href=\"";
                    // line 113
                    echo $this->env->getExtension('routing')->getPath("cronograma_list");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar Cronogramas</a>
                    </li> 
                  ";
                }
                // line 115
                echo "                   
                  </ul>
                </li>
                <li><a><i class=\"fa fa-circle-o text-info\"></i> Diarios de Campo <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                    ";
                // line 120
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) == "estudiante")) {
                    // line 121
                    echo "                    <li>
                    <a href=\"";
                    // line 122
                    echo $this->env->getExtension('routing')->getPath("diario_new");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Diario</a>
                  </li>
                  <li>
                      <a href=\"";
                    // line 125
                    echo $this->env->getExtension('routing')->getPath("diario_list");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Diarios</a>
                  </li>                  
                  ";
                }
                // line 127
                echo "  
                    ";
                // line 128
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) != "estudiante")) {
                    // line 129
                    echo "                    <li>
                      <a href=\"";
                    // line 130
                    echo $this->env->getExtension('routing')->getPath("diario_list");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i> Listar Diarios</a>
                    </li>
                    ";
                }
                // line 133
                echo "                    <li> <a> <i class=\"fa fa-circle-o text-info\"></i> Act. Adicionales <i class=\"fa fa-angle-left pull-right\"></i> </a>
                      <ul class=\"treeview-menu\">
                        ";
                // line 135
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) == "estudiante")) {
                    // line 136
                    echo "                        <li>
                        <a href=\"";
                    // line 137
                    echo $this->env->getExtension('routing')->getPath("resultados_new");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Actividad</a>
                        </li>
                        <li>
                          <a href=\"";
                    // line 140
                    echo $this->env->getExtension('routing')->getPath("resultados_list");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Actividad</a>
                        </li>
                        ";
                } else {
                    // line 142
                    echo " 
                        <li>
                          <a href=\"";
                    // line 144
                    echo $this->env->getExtension('routing')->getPath("resultados_list");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar Actividad</a>
                        </li> 
                        ";
                }
                // line 146
                echo "                                       
                      </ul>
                    </li>               
                  </ul>
                </li>

                <li><a><i class=\"fa fa-circle-o text-info\"></i> Información Adicional <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">
                    ";
                // line 154
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) == "estudiante")) {
                    // line 155
                    echo "                    <li>
                    <a href=\"";
                    // line 156
                    echo $this->env->getExtension('routing')->getPath("infoAdicional_new");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Info Adicional</a>
                   </li>
                   <li>
                      <a  href=\"";
                    // line 159
                    echo $this->env->getExtension('routing')->getPath("infoAdicional_list");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Info Adicional</a>
                    </li>
                  ";
                } else {
                    // line 161
                    echo "  
                    <li>
                      <a href=\"";
                    // line 163
                    echo $this->env->getExtension('routing')->getPath("infoAdicional_list");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar Información Adicional</a>
                    </li>
                    ";
                }
                // line 165
                echo "                   
                  </ul>
                </li>   
                <li><a ><i class=\"fa fa-circle-o text-info\"></i> Informe Final <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">
                  ";
                // line 170
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) == "estudiante")) {
                    // line 171
                    echo "                    <li>
                    <a  href=\"";
                    // line 172
                    echo $this->env->getExtension('routing')->getPath("infofinal");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Visualizar Informe Final</a>
                  </li>  
                    <li>
                      <a href=\"";
                    // line 175
                    echo $this->env->getExtension('routing')->getPath("infofinal_check", array("id" => 0));
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Evaluación Informe Final</a>
                    </li>
                  ";
                } else {
                    // line 178
                    echo "                    <li>
                      <a href=\"";
                    // line 179
                    echo $this->env->getExtension('routing')->getPath("infofinal_list");
                    echo "\"><i class=\"fa fa-circle-o text-info\">
                      </i>Evaluación Informe Final</a>
                    </li>
                  ";
                }
                // line 182
                echo "                                           
                  </ul>
                </li>     
              </ul>
            </li>
            ";
            }
            // line 188
            echo "

            ";
            // line 190
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) != "estudiante")) {
                // line 191
                echo "            <li class=\"treeview\">
              <a >
                <i class=\"fa fa-check-square-o\"></i> <span>Evaluar Productos</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a><i class=\"fa fa-circle-o text-info\"></i> Cronogramas <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                    <li>
                      <a href=\"";
                // line 199
                echo $this->env->getExtension('routing')->getPath("cronograma_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>                    
                  </ul>
                </li>
                <li><a ><i class=\"fa fa-circle-o text-info\"></i> Diarios de Campo <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">
                    <li>
                      <a href=\"";
                // line 206
                echo $this->env->getExtension('routing')->getPath("diario_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>
                    <li> <a> <i class=\"fa fa-circle-o text-info\"></i> Act. Adicionales <i class=\"fa fa-angle-left pull-right\"></i> </a>
                      <ul class=\"treeview-menu\">
                        ";
                // line 210
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) == "estudiante")) {
                    // line 211
                    echo "                        <li>
                        <a href=\"";
                    // line 212
                    echo $this->env->getExtension('routing')->getPath("resultados_new");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Actividad</a></li>
                        ";
                }
                // line 213
                echo " 
                        <li>
                          <a href=\"";
                // line 215
                echo $this->env->getExtension('routing')->getPath("resultados_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar Actividad</a>
                        </li>                                        
                      </ul>
                    </li>                     
                  </ul>
                </li>

                <li><a ><i class=\"fa fa-circle-o text-info\"></i> Información Adicional <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\"> 
                    <li>
                      <a href=\"";
                // line 225
                echo $this->env->getExtension('routing')->getPath("infoAdicional_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>                   
                  </ul>
                </li>   
                <li><a ><i class=\"fa fa-circle-o text-info\"></i> Ver Informe Final <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">  
                    <li>
                      <a href=\"";
                // line 232
                echo $this->env->getExtension('routing')->getPath("infofinal_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>                                       
                  </ul>
                </li>     
              </ul>
            </li>
            ";
            }
            // line 239
            echo "

            ";
            // line 241
            if (((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) == "coordinador de proyecto") || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) == "coordinador de servicio comunitario")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) == "coordinador suplente"))) {
                // line 242
                echo "            <li class=\"treeview\">
              <a >
                <i class=\"fa fa-download\"></i> <span>Reportes</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
                // line 247
                echo $this->env->getExtension('routing')->getPath("reports_1");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i> Estudiantes Inscritos </a></li> 
                <li><a href=\"";
                // line 248
                echo $this->env->getExtension('routing')->getPath("reports_2");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i> Estudiantes Aprobados </a></li>                                                                   
                <li><a href=\"";
                // line 249
                echo $this->env->getExtension('routing')->getPath("reports_3");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i> Tutores</a></li> 

                <li><a href=\"";
                // line 251
                echo $this->env->getExtension('routing')->getPath("reports_4");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i> Coordinadores </a></li> 
                <li><a href=\"";
                // line 252
                echo $this->env->getExtension('routing')->getPath("reports_5");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i> Proyectos </a></li>      
              </ul>
            </li>
            ";
            }
            // line 255
            echo " 
            

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
  ";
        }
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Main:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 255,  463 => 252,  459 => 251,  454 => 249,  450 => 248,  446 => 247,  439 => 242,  437 => 241,  433 => 239,  423 => 232,  413 => 225,  400 => 215,  396 => 213,  391 => 212,  388 => 211,  386 => 210,  379 => 206,  369 => 199,  359 => 191,  357 => 190,  353 => 188,  345 => 182,  338 => 179,  335 => 178,  329 => 175,  323 => 172,  320 => 171,  318 => 170,  311 => 165,  305 => 163,  301 => 161,  295 => 159,  289 => 156,  286 => 155,  284 => 154,  274 => 146,  268 => 144,  264 => 142,  258 => 140,  252 => 137,  249 => 136,  247 => 135,  243 => 133,  237 => 130,  234 => 129,  232 => 128,  229 => 127,  223 => 125,  217 => 122,  214 => 121,  212 => 120,  205 => 115,  199 => 113,  195 => 111,  189 => 109,  183 => 106,  180 => 105,  178 => 104,  169 => 97,  167 => 96,  163 => 94,  155 => 89,  149 => 86,  135 => 75,  130 => 73,  119 => 65,  114 => 63,  103 => 55,  98 => 53,  85 => 42,  83 => 41,  78 => 38,  70 => 33,  66 => 32,  62 => 31,  53 => 24,  51 => 23,  43 => 18,  38 => 16,  19 => 1,);
    }
}
/*   {% if (user != null) %}  */
/*       <!-- Left side column. contains the sidebar -->*/
/*       <aside class="main-sidebar">*/
/*         <!-- sidebar: style can be found in sidebar.less -->*/
/*         <section class="sidebar">*/
/*           <ul class="sidebar-menu">*/
/*             <li class="header">PANEL DE NAVEGACIÓN PRINCIPAL</li>*/
/* */
/*             <!-- ADMINISTRACIÓN MI PERFIL -->*/
/*             <li class="treeview">*/
/*               <a>*/
/*                 <i class="fa fa-male"></i> <span>Administrar mi Perfil</span> <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/* */
/*                 <li><a href="{{ path('user_check', {'cedula': user.cedula}) }}"><i class="fa fa-circle-o text-info"></i> Consultar Perfil</a></li>                      */
/* */
/*                 <li><a href="{{ path('user_edit', {'cedula': user.cedula}) }}"><i class="fa fa-circle-o text-info"></i> Editar Perfil</a></li>   */
/*               </ul>*/
/*             </li>*/
/* */
/* */
/*             {% if (user.perfil == 'coordinador de proyecto') or (user.perfil == 'coordinador de servicio comunitario') or (user.perfil == 'coordinador suplente') %}*/
/* */
/*               <!-- GESTIÓN DE USUARIOS -->*/
/*               <li class="treeview">*/
/*                 <a>*/
/*                   <i class="fa fa-user-plus"></i> <span>Gestión de Usuarios</span> <i class="fa fa-angle-left pull-right"></i>*/
/*                 </a>*/
/*                 <ul class="treeview-menu">*/
/*                   <li><a href="{{ path('user_new') }}"><i class="fa fa-circle-o text-info"></i> Crear Profesor</a></li> */
/*                   <li><a href="{{ path('student_new') }}"><i class="fa fa-circle-o text-info"></i> Crear Estudiante</a></li>                                                                   */
/*                   <li><a href="{{ path('user_list') }}"><i class="fa fa-circle-o text-info"></i> Listar Usuarios</a></li> */
/*                 </ul>*/
/*               </li>*/
/* */
/*           {% endif %}*/
/* */
/* */
/*           <!-- GESTIÓN DE PROYECTOS -->*/
/*           {% if (user.perfil == 'coordinador de proyecto') or (user.perfil == 'coordinador de servicio comunitario') or (user.perfil == 'coordinador suplente') %}*/
/* */
/*             <li class="treeview">*/
/*               <a >*/
/*                 <i class="fa fa-files-o"></i> <span>Gestión de Proyectos</span> <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/* */
/*                 <li><a ><i class="fa fa-circle-o text-info"></i> Proyecto */
/*                       <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                   <ul class="treeview-menu">*/
/*                     <li>*/
/*                     <a href="{{ path('project_new') }}"><i class="fa fa-circle-o text-info"></i>Crear Proyecto</a></li>*/
/*                     <li>*/
/*                       <a href="{{ path('project_list') }}"><i class="fa fa-circle-o text-info"></i>Editar Proyecto</a>*/
/*                     </li> */
/*                   </ul>*/
/*                 </li> */
/*                 <li><a ><i class="fa fa-circle-o text-info"></i> Fase */
/*                       <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                   <ul class="treeview-menu">*/
/*                     <li>*/
/*                     <a href="{{ path('fase_new') }}"><i class="fa fa-circle-o text-info"></i>Crear Fase</a></li>*/
/*                     <li>*/
/*                       <a href="{{ path('fase_list') }}"><i class="fa fa-circle-o text-info"></i>Editar Fase</a>*/
/*                     </li>                                        */
/*                   </ul>*/
/*                 </li>                */
/*                <li><a><i class="fa fa-circle-o text-info"></i> Actividad */
/*                       <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                   <ul class="treeview-menu">*/
/*                     <li>*/
/*                     <a href="{{ path('activities_new') }}"><i class="fa fa-circle-o text-info"></i>Crear Actividad</a></li>*/
/*                     <li>*/
/*                       <a href="{{ path('activities_list') }}"><i class="fa fa-circle-o text-info"></i>Editar Actividad</a>*/
/*                     </li>                                        */
/*                   </ul>*/
/*                 </li>                                                 */
/*               </ul>*/
/*             </li>            */
/*             <li class="treeview">*/
/*               <a >*/
/*                 <i class="fa fa-pencil-square-o"></i> <span>Gestión de Tutores</span> <i class="fa fa-angle-left pull-right"></i>  */
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="{{ path('tutors_add') }}"><i class="fa fa-circle-o text-info"></i> Asignar Tutores</a>*/
/*                 </li>*/
/*                 <li>*/
/*                   <a href="{{ path('tutors_list') }}"><i class="fa fa-circle-o text-info"></i>Editar Asignaciones</a>*/
/*                 </li>                           */
/*               </ul>*/
/*             </li>*/
/*             {% endif %}*/
/* */
/* */
/*             {% if (user.perfil == 'estudiante') or (user.perfil == 'coordinador de servicio comunitario') %}*/
/*             <li class="treeview">*/
/*               <a >*/
/*                 <i class="fa fa-th"></i> <span>Gestión de Productos</span> <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a><i class="fa fa-circle-o text-info"></i> Cronogramas <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                   <ul class="treeview-menu">*/
/*                   {% if (user.perfil == 'estudiante') %}*/
/*                     <li>*/
/*                     <a href="{{ path('cronograma_new') }}"><i class="fa fa-circle-o text-info"></i>Crear Cronograma</a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <a href="{{ path('cronograma_list') }}"><i class="fa fa-circle-o text-info"></i>Editar Cronogramas</a>*/
/*                     </li> */
/*                   {% else %}  */
/*                     <li>*/
/*                       <a href="{{ path('cronograma_list') }}"><i class="fa fa-circle-o text-info"></i>Listar Cronogramas</a>*/
/*                     </li> */
/*                   {% endif %}                   */
/*                   </ul>*/
/*                 </li>*/
/*                 <li><a><i class="fa fa-circle-o text-info"></i> Diarios de Campo <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                   <ul class="treeview-menu">*/
/*                     {% if (user.perfil == 'estudiante') %}*/
/*                     <li>*/
/*                     <a href="{{ path('diario_new') }}"><i class="fa fa-circle-o text-info"></i>Crear Diario</a>*/
/*                   </li>*/
/*                   <li>*/
/*                       <a href="{{ path('diario_list') }}"><i class="fa fa-circle-o text-info"></i>Editar Diarios</a>*/
/*                   </li>                  */
/*                   {% endif %}  */
/*                     {% if (user.perfil != 'estudiante') %}*/
/*                     <li>*/
/*                       <a href="{{ path('diario_list') }}"><i class="fa fa-circle-o text-info"></i> Listar Diarios</a>*/
/*                     </li>*/
/*                     {% endif %}*/
/*                     <li> <a> <i class="fa fa-circle-o text-info"></i> Act. Adicionales <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                       <ul class="treeview-menu">*/
/*                         {% if (user.perfil == 'estudiante') %}*/
/*                         <li>*/
/*                         <a href="{{ path('resultados_new') }}"><i class="fa fa-circle-o text-info"></i>Crear Actividad</a>*/
/*                         </li>*/
/*                         <li>*/
/*                           <a href="{{ path('resultados_list') }}"><i class="fa fa-circle-o text-info"></i>Editar Actividad</a>*/
/*                         </li>*/
/*                         {% else %} */
/*                         <li>*/
/*                           <a href="{{ path('resultados_list') }}"><i class="fa fa-circle-o text-info"></i>Listar Actividad</a>*/
/*                         </li> */
/*                         {% endif %}                                       */
/*                       </ul>*/
/*                     </li>               */
/*                   </ul>*/
/*                 </li>*/
/* */
/*                 <li><a><i class="fa fa-circle-o text-info"></i> Información Adicional <i class="fa fa-angle-left pull-right"></i></a>*/
/*                   <ul class="treeview-menu">*/
/*                     {% if (user.perfil == 'estudiante') %}*/
/*                     <li>*/
/*                     <a href="{{ path('infoAdicional_new') }}"><i class="fa fa-circle-o text-info"></i>Crear Info Adicional</a>*/
/*                    </li>*/
/*                    <li>*/
/*                       <a  href="{{ path('infoAdicional_list') }}"><i class="fa fa-circle-o text-info"></i>Editar Info Adicional</a>*/
/*                     </li>*/
/*                   {% else %}  */
/*                     <li>*/
/*                       <a href="{{ path('infoAdicional_list') }}"><i class="fa fa-circle-o text-info"></i>Listar Información Adicional</a>*/
/*                     </li>*/
/*                     {% endif %}                   */
/*                   </ul>*/
/*                 </li>   */
/*                 <li><a ><i class="fa fa-circle-o text-info"></i> Informe Final <i class="fa fa-angle-left pull-right"></i></a>*/
/*                   <ul class="treeview-menu">*/
/*                   {% if (user.perfil == 'estudiante') %}*/
/*                     <li>*/
/*                     <a  href="{{ path('infofinal') }}"><i class="fa fa-circle-o text-info"></i>Visualizar Informe Final</a>*/
/*                   </li>  */
/*                     <li>*/
/*                       <a href="{{ path('infofinal_check', {'id': 0}) }}"><i class="fa fa-circle-o text-info"></i>Evaluación Informe Final</a>*/
/*                     </li>*/
/*                   {% else %}*/
/*                     <li>*/
/*                       <a href="{{ path('infofinal_list') }}"><i class="fa fa-circle-o text-info">*/
/*                       </i>Evaluación Informe Final</a>*/
/*                     </li>*/
/*                   {% endif %}                                           */
/*                   </ul>*/
/*                 </li>     */
/*               </ul>*/
/*             </li>*/
/*             {% endif %}*/
/* */
/* */
/*             {% if (user.perfil != 'estudiante')  %}*/
/*             <li class="treeview">*/
/*               <a >*/
/*                 <i class="fa fa-check-square-o"></i> <span>Evaluar Productos</span> <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a><i class="fa fa-circle-o text-info"></i> Cronogramas <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                   <ul class="treeview-menu">*/
/*                     <li>*/
/*                       <a href="{{ path('cronograma_list') }}"><i class="fa fa-circle-o text-info"></i>Listar</a>*/
/*                     </li>                    */
/*                   </ul>*/
/*                 </li>*/
/*                 <li><a ><i class="fa fa-circle-o text-info"></i> Diarios de Campo <i class="fa fa-angle-left pull-right"></i></a>*/
/*                   <ul class="treeview-menu">*/
/*                     <li>*/
/*                       <a href="{{ path('diario_list') }}"><i class="fa fa-circle-o text-info"></i>Listar</a>*/
/*                     </li>*/
/*                     <li> <a> <i class="fa fa-circle-o text-info"></i> Act. Adicionales <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                       <ul class="treeview-menu">*/
/*                         {% if (user.perfil == 'estudiante') %}*/
/*                         <li>*/
/*                         <a href="{{ path('resultados_new') }}"><i class="fa fa-circle-o text-info"></i>Crear Actividad</a></li>*/
/*                         {% endif %} */
/*                         <li>*/
/*                           <a href="{{ path('resultados_list') }}"><i class="fa fa-circle-o text-info"></i>Listar Actividad</a>*/
/*                         </li>                                        */
/*                       </ul>*/
/*                     </li>                     */
/*                   </ul>*/
/*                 </li>*/
/* */
/*                 <li><a ><i class="fa fa-circle-o text-info"></i> Información Adicional <i class="fa fa-angle-left pull-right"></i></a>*/
/*                   <ul class="treeview-menu"> */
/*                     <li>*/
/*                       <a href="{{ path('infoAdicional_list') }}"><i class="fa fa-circle-o text-info"></i>Listar</a>*/
/*                     </li>                   */
/*                   </ul>*/
/*                 </li>   */
/*                 <li><a ><i class="fa fa-circle-o text-info"></i> Ver Informe Final <i class="fa fa-angle-left pull-right"></i></a>*/
/*                   <ul class="treeview-menu">  */
/*                     <li>*/
/*                       <a href="{{ path('infofinal_list') }}"><i class="fa fa-circle-o text-info"></i>Listar</a>*/
/*                     </li>                                       */
/*                   </ul>*/
/*                 </li>     */
/*               </ul>*/
/*             </li>*/
/*             {% endif %}*/
/* */
/* */
/*             {% if (user.perfil == 'coordinador de proyecto') or (user.perfil == 'coordinador de servicio comunitario') or (user.perfil == 'coordinador suplente') %}*/
/*             <li class="treeview">*/
/*               <a >*/
/*                 <i class="fa fa-download"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="{{ path('reports_1') }}"><i class="fa fa-circle-o text-info"></i> Estudiantes Inscritos </a></li> */
/*                 <li><a href="{{ path('reports_2') }}"><i class="fa fa-circle-o text-info"></i> Estudiantes Aprobados </a></li>                                                                   */
/*                 <li><a href="{{ path('reports_3') }}"><i class="fa fa-circle-o text-info"></i> Tutores</a></li> */
/* */
/*                 <li><a href="{{ path('reports_4') }}"><i class="fa fa-circle-o text-info"></i> Coordinadores </a></li> */
/*                 <li><a href="{{ path('reports_5') }}"><i class="fa fa-circle-o text-info"></i> Proyectos </a></li>      */
/*               </ul>*/
/*             </li>*/
/*             {% endif %} */
/*             */
/* */
/*           </ul>*/
/*         </section>*/
/*         <!-- /.sidebar -->*/
/*       </aside>*/
/*   {% endif %}*/
