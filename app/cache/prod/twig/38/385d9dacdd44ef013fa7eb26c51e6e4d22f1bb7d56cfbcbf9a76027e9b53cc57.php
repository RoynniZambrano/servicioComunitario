<?php

/* TesisAdminBundle:Main:sidebar.html.twig */
class __TwigTemplate_4701bcb211da7a4361fb09622d25fb47930a1b90458593bcb8e387c3dc1f73c1 extends Twig_Template
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
        echo "      <!-- Left side column. contains the sidebar -->
      <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
          <ul class=\"sidebar-menu\">
            <li class=\"header\">PANEL DE NAVEGACIÓN PRINCIPAL</li>

            <li class=\"treeview\">
              <a>
                <i class=\"fa fa-user-plus\"></i> <span>Gestión de Usuarios</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">

                <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_check", array("cedula" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "cedula", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o text-info\"></i> Consultar Perfil</a></li>                      

                <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("cedula" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "cedula", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o text-info\"></i> Editar Perfil</a></li>   


              ";
        // line 19
        if (((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "coordinador de proyecto") || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "coordinador de servicio comunitario")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "coordinador suplente"))) {
            // line 20
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_new");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i> Crear Tutor/Coordinador</a></li> 
                <li><a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("student_new");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i> Crear Estudiante</a></li>                                                                   
                <li><a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("user_list");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i> Listar Usuarios</a></li> 
                ";
        }
        // line 24
        echo "              </ul>
            </li>


            ";
        // line 28
        if (((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "coordinador de proyecto") || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "coordinador de servicio comunitario")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "coordinador suplente"))) {
            // line 29
            echo "            <li class=\"treeview\">
              <a >
                <i class=\"fa fa-files-o\"></i> <span>Gestión de Proyectos</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">

                <li><a ><i class=\"fa fa-circle-o text-info\"></i> Proyecto 
                      <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                    <li>
                    <a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("project_new");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Proyecto</a></li>
                    <li>
                      <a href=\"";
            // line 41
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
            // line 49
            echo $this->env->getExtension('routing')->getPath("fase_new");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Fase</a></li>
                    <li>
                      <a href=\"";
            // line 51
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
            // line 59
            echo $this->env->getExtension('routing')->getPath("activities_new");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Actividad</a></li>
                    <li>
                      <a href=\"";
            // line 61
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
            // line 72
            echo $this->env->getExtension('routing')->getPath("tutors_add");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i> Asignar Tutores</a>
                </li>
                <li>
                  <a href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("tutors_list");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Asignaciones</a>
                </li>                           
              </ul>
            </li>
            ";
        }
        // line 80
        echo "

            ";
        // line 82
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "estudiante") || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "coordinador de servicio comunitario"))) {
            // line 83
            echo "            <li class=\"treeview\">
              <a >
                <i class=\"fa fa-th\"></i> <span>Gestión de Productos</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a><i class=\"fa fa-circle-o text-info\"></i> Cronogramas <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                  ";
            // line 90
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "estudiante")) {
                // line 91
                echo "                    <li>
                    <a href=\"";
                // line 92
                echo $this->env->getExtension('routing')->getPath("cronograma_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Cronograma</a></li>
                  ";
            }
            // line 93
            echo "  
                    <li>
                      <a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("cronograma_list");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Cronogramas</a>
                    </li>                    
                  </ul>
                </li>
                <li><a><i class=\"fa fa-circle-o text-info\"></i> Diarios de Campo <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                    ";
            // line 101
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "estudiante")) {
                // line 102
                echo "                    <li>
                    <a href=\"";
                // line 103
                echo $this->env->getExtension('routing')->getPath("diario_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Diario</a></li>
                  ";
            }
            // line 104
            echo "  
                    <li>
                      <a href=\"";
            // line 106
            echo $this->env->getExtension('routing')->getPath("diario_list");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Diarios</a>
                    </li>
                    <li> <a> <i class=\"fa fa-circle-o text-info\"></i> Act. Adicionales <i class=\"fa fa-angle-left pull-right\"></i> </a>
                      <ul class=\"treeview-menu\">
                        ";
            // line 110
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "estudiante")) {
                // line 111
                echo "                        <li>
                        <a href=\"";
                // line 112
                echo $this->env->getExtension('routing')->getPath("resultados_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Actividad</a></li>
                        ";
            }
            // line 113
            echo " 
                        <li>
                          <a href=\"";
            // line 115
            echo $this->env->getExtension('routing')->getPath("resultados_list");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Actividad</a>
                        </li>                                        
                      </ul>
                    </li>               
                  </ul>
                </li>

                <li><a><i class=\"fa fa-circle-o text-info\"></i> Información Adicional <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">
                    ";
            // line 124
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "estudiante")) {
                // line 125
                echo "                    <li>
                    <a href=\"";
                // line 126
                echo $this->env->getExtension('routing')->getPath("infoAdicional_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Info Adicional</a>
                   </li>
                   <li>
                      <a  href=\"";
                // line 129
                echo $this->env->getExtension('routing')->getPath("infoAdicional_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Info Adicional</a>
                    </li>
                  ";
            } else {
                // line 131
                echo "  
                    <li>
                      <a href=\"";
                // line 133
                echo $this->env->getExtension('routing')->getPath("infoAdicional_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Información Adicional</a>
                    </li>
                    ";
            }
            // line 135
            echo "                   
                  </ul>
                </li>   
                <li><a ><i class=\"fa fa-circle-o text-info\"></i> Informe Final <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">
                  ";
            // line 140
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "estudiante")) {
                // line 141
                echo "                    <li>
                    <a  href=\"";
                // line 142
                echo $this->env->getExtension('routing')->getPath("infofinal");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Visualizar Informe Final</a></li>  
                    <li>
                      <a href=\"";
                // line 144
                echo $this->env->getExtension('routing')->getPath("infofinal_check", array("id" => 0));
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Evaluación Informe Final</a>
                    </li>
                  ";
            } else {
                // line 147
                echo "                    <li>
                      <a href=\"";
                // line 148
                echo $this->env->getExtension('routing')->getPath("infofinal_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Evaluar Informe Final</a>
                    </li>
                  ";
            }
            // line 150
            echo "                                           
                  </ul>
                </li>     
              </ul>
            </li>
            ";
        }
        // line 156
        echo "

            ";
        // line 158
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) != "estudiante")) {
            // line 159
            echo "            <li class=\"treeview\">
              <a >
                <i class=\"fa fa-check-square-o\"></i> <span>Evaluar Productos</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a><i class=\"fa fa-circle-o text-info\"></i> Cronogramas <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                    <li>
                      <a href=\"";
            // line 167
            echo $this->env->getExtension('routing')->getPath("cronograma_list");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>                    
                  </ul>
                </li>
                <li><a ><i class=\"fa fa-circle-o text-info\"></i> Diarios de Campo <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">
                    <li>
                      <a href=\"";
            // line 174
            echo $this->env->getExtension('routing')->getPath("diario_list");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>
                    <li> <a> <i class=\"fa fa-circle-o text-info\"></i> Act. Adicionales <i class=\"fa fa-angle-left pull-right\"></i> </a>
                      <ul class=\"treeview-menu\">
                        ";
            // line 178
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "estudiante")) {
                // line 179
                echo "                        <li>
                        <a href=\"";
                // line 180
                echo $this->env->getExtension('routing')->getPath("resultados_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Actividad</a></li>
                        ";
            }
            // line 181
            echo " 
                        <li>
                          <a href=\"";
            // line 183
            echo $this->env->getExtension('routing')->getPath("resultados_list");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Actividad</a>
                        </li>                                        
                      </ul>
                    </li>                     
                  </ul>
                </li>

                <li><a ><i class=\"fa fa-circle-o text-info\"></i> Información Adicional <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\"> 
                    <li>
                      <a href=\"";
            // line 193
            echo $this->env->getExtension('routing')->getPath("infoAdicional_list");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>                   
                  </ul>
                </li>   
                <li><a ><i class=\"fa fa-circle-o text-info\"></i> Ver Informe Final <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">  
                    <li>
                      <a href=\"";
            // line 200
            echo $this->env->getExtension('routing')->getPath("infofinal_list");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>                                       
                  </ul>
                </li>     
              </ul>
            </li>
            ";
        }
        // line 207
        echo "

            ";
        // line 209
        if (((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "coordinador de proyecto") || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "coordinador de servicio comunitario")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "rol", array()) == "coordinador suplente"))) {
            // line 210
            echo "            <li class=\"treeview\">
              <a >
                <i class=\"fa fa-download\"></i> <span>Reportes</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
            // line 215
            echo $this->env->getExtension('routing')->getPath("reports_1");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i> Estudiantes Inscritos </a></li> 
                <li><a href=\"";
            // line 216
            echo $this->env->getExtension('routing')->getPath("reports_2");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i> Estudiantes Aprobados </a></li>                                                                   
                <li><a href=\"";
            // line 217
            echo $this->env->getExtension('routing')->getPath("reports_3");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i> Tutores</a></li> 

                <li><a href=\"";
            // line 219
            echo $this->env->getExtension('routing')->getPath("reports_4");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i> Coordinadores </a></li> 
                <li><a href=\"";
            // line 220
            echo $this->env->getExtension('routing')->getPath("reports_5");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i> Proyectos </a></li>      
              </ul>
            </li>
            ";
        }
        // line 223
        echo " 
            

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>";
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
        return array (  415 => 223,  408 => 220,  404 => 219,  399 => 217,  395 => 216,  391 => 215,  384 => 210,  382 => 209,  378 => 207,  368 => 200,  358 => 193,  345 => 183,  341 => 181,  336 => 180,  333 => 179,  331 => 178,  324 => 174,  314 => 167,  304 => 159,  302 => 158,  298 => 156,  290 => 150,  284 => 148,  281 => 147,  275 => 144,  270 => 142,  267 => 141,  265 => 140,  258 => 135,  252 => 133,  248 => 131,  242 => 129,  236 => 126,  233 => 125,  231 => 124,  219 => 115,  215 => 113,  210 => 112,  207 => 111,  205 => 110,  198 => 106,  194 => 104,  189 => 103,  186 => 102,  184 => 101,  175 => 95,  171 => 93,  166 => 92,  163 => 91,  161 => 90,  152 => 83,  150 => 82,  146 => 80,  138 => 75,  132 => 72,  118 => 61,  113 => 59,  102 => 51,  97 => 49,  86 => 41,  81 => 39,  69 => 29,  67 => 28,  61 => 24,  56 => 22,  52 => 21,  47 => 20,  45 => 19,  39 => 16,  34 => 14,  19 => 1,);
    }
}
/*       <!-- Left side column. contains the sidebar -->*/
/*       <aside class="main-sidebar">*/
/*         <!-- sidebar: style can be found in sidebar.less -->*/
/*         <section class="sidebar">*/
/*           <ul class="sidebar-menu">*/
/*             <li class="header">PANEL DE NAVEGACIÓN PRINCIPAL</li>*/
/* */
/*             <li class="treeview">*/
/*               <a>*/
/*                 <i class="fa fa-user-plus"></i> <span>Gestión de Usuarios</span> <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/* */
/*                 <li><a href="{{ path('user_check', {'cedula': user.cedula}) }}"><i class="fa fa-circle-o text-info"></i> Consultar Perfil</a></li>                      */
/* */
/*                 <li><a href="{{ path('user_edit', {'cedula': user.cedula}) }}"><i class="fa fa-circle-o text-info"></i> Editar Perfil</a></li>   */
/* */
/* */
/*               {% if (user.rol == 'coordinador de proyecto') or (user.rol == 'coordinador de servicio comunitario') or (user.rol == 'coordinador suplente') %}*/
/*                 <li><a href="{{ path('user_new') }}"><i class="fa fa-circle-o text-info"></i> Crear Tutor/Coordinador</a></li> */
/*                 <li><a href="{{ path('student_new') }}"><i class="fa fa-circle-o text-info"></i> Crear Estudiante</a></li>                                                                   */
/*                 <li><a href="{{ path('user_list') }}"><i class="fa fa-circle-o text-info"></i> Listar Usuarios</a></li> */
/*                 {% endif %}*/
/*               </ul>*/
/*             </li>*/
/* */
/* */
/*             {% if (user.rol == 'coordinador de proyecto') or (user.rol == 'coordinador de servicio comunitario') or (user.rol == 'coordinador suplente') %}*/
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
/*             {% if (user.rol == 'estudiante') or (user.rol == 'coordinador de servicio comunitario') %}*/
/*             <li class="treeview">*/
/*               <a >*/
/*                 <i class="fa fa-th"></i> <span>Gestión de Productos</span> <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a><i class="fa fa-circle-o text-info"></i> Cronogramas <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                   <ul class="treeview-menu">*/
/*                   {% if (user.rol == 'estudiante') %}*/
/*                     <li>*/
/*                     <a href="{{ path('cronograma_new') }}"><i class="fa fa-circle-o text-info"></i>Crear Cronograma</a></li>*/
/*                   {% endif %}  */
/*                     <li>*/
/*                       <a href="{{ path('cronograma_list') }}"><i class="fa fa-circle-o text-info"></i>Editar Cronogramas</a>*/
/*                     </li>                    */
/*                   </ul>*/
/*                 </li>*/
/*                 <li><a><i class="fa fa-circle-o text-info"></i> Diarios de Campo <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                   <ul class="treeview-menu">*/
/*                     {% if (user.rol == 'estudiante') %}*/
/*                     <li>*/
/*                     <a href="{{ path('diario_new') }}"><i class="fa fa-circle-o text-info"></i>Crear Diario</a></li>*/
/*                   {% endif %}  */
/*                     <li>*/
/*                       <a href="{{ path('diario_list') }}"><i class="fa fa-circle-o text-info"></i>Editar Diarios</a>*/
/*                     </li>*/
/*                     <li> <a> <i class="fa fa-circle-o text-info"></i> Act. Adicionales <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                       <ul class="treeview-menu">*/
/*                         {% if (user.rol == 'estudiante') %}*/
/*                         <li>*/
/*                         <a href="{{ path('resultados_new') }}"><i class="fa fa-circle-o text-info"></i>Crear Actividad</a></li>*/
/*                         {% endif %} */
/*                         <li>*/
/*                           <a href="{{ path('resultados_list') }}"><i class="fa fa-circle-o text-info"></i>Editar Actividad</a>*/
/*                         </li>                                        */
/*                       </ul>*/
/*                     </li>               */
/*                   </ul>*/
/*                 </li>*/
/* */
/*                 <li><a><i class="fa fa-circle-o text-info"></i> Información Adicional <i class="fa fa-angle-left pull-right"></i></a>*/
/*                   <ul class="treeview-menu">*/
/*                     {% if (user.rol == 'estudiante') %}*/
/*                     <li>*/
/*                     <a href="{{ path('infoAdicional_new') }}"><i class="fa fa-circle-o text-info"></i>Crear Info Adicional</a>*/
/*                    </li>*/
/*                    <li>*/
/*                       <a  href="{{ path('infoAdicional_list') }}"><i class="fa fa-circle-o text-info"></i>Editar Info Adicional</a>*/
/*                     </li>*/
/*                   {% else %}  */
/*                     <li>*/
/*                       <a href="{{ path('infoAdicional_list') }}"><i class="fa fa-circle-o text-info"></i>Editar Información Adicional</a>*/
/*                     </li>*/
/*                     {% endif %}                   */
/*                   </ul>*/
/*                 </li>   */
/*                 <li><a ><i class="fa fa-circle-o text-info"></i> Informe Final <i class="fa fa-angle-left pull-right"></i></a>*/
/*                   <ul class="treeview-menu">*/
/*                   {% if (user.rol == 'estudiante') %}*/
/*                     <li>*/
/*                     <a  href="{{ path('infofinal') }}"><i class="fa fa-circle-o text-info"></i>Visualizar Informe Final</a></li>  */
/*                     <li>*/
/*                       <a href="{{ path('infofinal_check', {'id': 0}) }}"><i class="fa fa-circle-o text-info"></i>Evaluación Informe Final</a>*/
/*                     </li>*/
/*                   {% else %}*/
/*                     <li>*/
/*                       <a href="{{ path('infofinal_list') }}"><i class="fa fa-circle-o text-info"></i>Evaluar Informe Final</a>*/
/*                     </li>*/
/*                   {% endif %}                                           */
/*                   </ul>*/
/*                 </li>     */
/*               </ul>*/
/*             </li>*/
/*             {% endif %}*/
/* */
/* */
/*             {% if (user.rol != 'estudiante')  %}*/
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
/*                         {% if (user.rol == 'estudiante') %}*/
/*                         <li>*/
/*                         <a href="{{ path('resultados_new') }}"><i class="fa fa-circle-o text-info"></i>Crear Actividad</a></li>*/
/*                         {% endif %} */
/*                         <li>*/
/*                           <a href="{{ path('resultados_list') }}"><i class="fa fa-circle-o text-info"></i>Editar Actividad</a>*/
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
/*             {% if (user.rol == 'coordinador de proyecto') or (user.rol == 'coordinador de servicio comunitario') or (user.rol == 'coordinador suplente') %}*/
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
