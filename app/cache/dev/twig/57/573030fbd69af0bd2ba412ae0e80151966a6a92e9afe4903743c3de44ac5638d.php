<?php

/* TesisAdminBundle:Main:sidebar.html.twig */
class __TwigTemplate_5d9f0aa129806437640b07fe9d1c476eb233b0c6e3a5166900c122a33f27db75 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_check", array("cedula" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cedula", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o text-info\"></i> Consultar Perfil</a></li>                      

                <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("cedula" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cedula", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o text-info\"></i> Editar Perfil</a></li>   


              ";
        // line 19
        if (((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "coordinador de proyecto") || ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "coordinador de servicio comunitario")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "coordinador suplente"))) {
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
        if (((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "coordinador de proyecto") || ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "coordinador de servicio comunitario")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "coordinador suplente"))) {
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
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "estudiante") || ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "coordinador de servicio comunitario"))) {
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
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "estudiante")) {
                // line 91
                echo "                    <li>
                    <a href=\"";
                // line 92
                echo $this->env->getExtension('routing')->getPath("cronograma_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Cronograma</a>
                    </li>
                    <li>
                      <a href=\"";
                // line 95
                echo $this->env->getExtension('routing')->getPath("cronograma_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Cronogramas</a>
                    </li> 
                  ";
            } else {
                // line 97
                echo "  
                    <li>
                      <a href=\"";
                // line 99
                echo $this->env->getExtension('routing')->getPath("cronograma_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar Cronogramas</a>
                    </li> 
                  ";
            }
            // line 101
            echo "                   
                  </ul>
                </li>
                <li><a><i class=\"fa fa-circle-o text-info\"></i> Diarios de Campo <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                    ";
            // line 106
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "estudiante")) {
                // line 107
                echo "                    <li>
                    <a href=\"";
                // line 108
                echo $this->env->getExtension('routing')->getPath("diario_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Diario</a>
                  </li>
                  <li>
                      <a href=\"";
                // line 111
                echo $this->env->getExtension('routing')->getPath("diario_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Diarios</a>
                  </li>                  
                  ";
            }
            // line 113
            echo "  
                    ";
            // line 114
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) != "estudiante")) {
                // line 115
                echo "                    <li>
                      <a href=\"";
                // line 116
                echo $this->env->getExtension('routing')->getPath("diario_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i> Listar Diarios</a>
                    </li>
                    ";
            }
            // line 119
            echo "                    <li> <a> <i class=\"fa fa-circle-o text-info\"></i> Act. Adicionales <i class=\"fa fa-angle-left pull-right\"></i> </a>
                      <ul class=\"treeview-menu\">
                        ";
            // line 121
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "estudiante")) {
                // line 122
                echo "                        <li>
                        <a href=\"";
                // line 123
                echo $this->env->getExtension('routing')->getPath("resultados_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Actividad</a>
                        </li>
                        <li>
                          <a href=\"";
                // line 126
                echo $this->env->getExtension('routing')->getPath("resultados_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Actividad</a>
                        </li>
                        ";
            } else {
                // line 128
                echo " 
                        <li>
                          <a href=\"";
                // line 130
                echo $this->env->getExtension('routing')->getPath("resultados_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar Actividad</a>
                        </li> 
                        ";
            }
            // line 132
            echo "                                       
                      </ul>
                    </li>               
                  </ul>
                </li>

                <li><a><i class=\"fa fa-circle-o text-info\"></i> Información Adicional <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">
                    ";
            // line 140
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "estudiante")) {
                // line 141
                echo "                    <li>
                    <a href=\"";
                // line 142
                echo $this->env->getExtension('routing')->getPath("infoAdicional_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Info Adicional</a>
                   </li>
                   <li>
                      <a  href=\"";
                // line 145
                echo $this->env->getExtension('routing')->getPath("infoAdicional_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Info Adicional</a>
                    </li>
                  ";
            } else {
                // line 147
                echo "  
                    <li>
                      <a href=\"";
                // line 149
                echo $this->env->getExtension('routing')->getPath("infoAdicional_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar Información Adicional</a>
                    </li>
                    ";
            }
            // line 151
            echo "                   
                  </ul>
                </li>   
                <li><a ><i class=\"fa fa-circle-o text-info\"></i> Informe Final <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">
                  ";
            // line 156
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "estudiante")) {
                // line 157
                echo "                    <li>
                    <a  href=\"";
                // line 158
                echo $this->env->getExtension('routing')->getPath("infofinal");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Visualizar Informe Final</a>
                  </li>  
                    <li>
                      <a href=\"";
                // line 161
                echo $this->env->getExtension('routing')->getPath("infofinal_check", array("id" => 0));
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Evaluación Informe Final</a>
                    </li>
                  ";
            } else {
                // line 164
                echo "                    <li>
                      <a href=\"";
                // line 165
                echo $this->env->getExtension('routing')->getPath("infofinal_list");
                echo "\"><i class=\"fa fa-circle-o text-info\">
                      </i>Evaluación Informe Final</a>
                    </li>
                  ";
            }
            // line 168
            echo "                                           
                  </ul>
                </li>     
              </ul>
            </li>
            ";
        }
        // line 174
        echo "

            ";
        // line 176
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) != "estudiante")) {
            // line 177
            echo "            <li class=\"treeview\">
              <a >
                <i class=\"fa fa-check-square-o\"></i> <span>Evaluar Productos</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a><i class=\"fa fa-circle-o text-info\"></i> Cronogramas <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                    <li>
                      <a href=\"";
            // line 185
            echo $this->env->getExtension('routing')->getPath("cronograma_list");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>                    
                  </ul>
                </li>
                <li><a ><i class=\"fa fa-circle-o text-info\"></i> Diarios de Campo <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">
                    <li>
                      <a href=\"";
            // line 192
            echo $this->env->getExtension('routing')->getPath("diario_list");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>
                    <li> <a> <i class=\"fa fa-circle-o text-info\"></i> Act. Adicionales <i class=\"fa fa-angle-left pull-right\"></i> </a>
                      <ul class=\"treeview-menu\">
                        ";
            // line 196
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "estudiante")) {
                // line 197
                echo "                        <li>
                        <a href=\"";
                // line 198
                echo $this->env->getExtension('routing')->getPath("resultados_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Actividad</a></li>
                        ";
            }
            // line 199
            echo " 
                        <li>
                          <a href=\"";
            // line 201
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
            // line 211
            echo $this->env->getExtension('routing')->getPath("infoAdicional_list");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>                   
                  </ul>
                </li>   
                <li><a ><i class=\"fa fa-circle-o text-info\"></i> Ver Informe Final <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">  
                    <li>
                      <a href=\"";
            // line 218
            echo $this->env->getExtension('routing')->getPath("infofinal_list");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>                                       
                  </ul>
                </li>     
              </ul>
            </li>
            ";
        }
        // line 225
        echo "

            ";
        // line 227
        if (((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "coordinador de proyecto") || ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "coordinador de servicio comunitario")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "coordinador suplente"))) {
            // line 228
            echo "            <li class=\"treeview\">
              <a >
                <i class=\"fa fa-download\"></i> <span>Reportes</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
            // line 233
            echo $this->env->getExtension('routing')->getPath("reports_1");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i> Estudiantes Inscritos </a></li> 
                <li><a href=\"";
            // line 234
            echo $this->env->getExtension('routing')->getPath("reports_2");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i> Estudiantes Aprobados </a></li>                                                                   
                <li><a href=\"";
            // line 235
            echo $this->env->getExtension('routing')->getPath("reports_3");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i> Tutores</a></li> 

                <li><a href=\"";
            // line 237
            echo $this->env->getExtension('routing')->getPath("reports_4");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i> Coordinadores </a></li> 
                <li><a href=\"";
            // line 238
            echo $this->env->getExtension('routing')->getPath("reports_5");
            echo "\"><i class=\"fa fa-circle-o text-info\"></i> Proyectos </a></li>      
              </ul>
            </li>
            ";
        }
        // line 241
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
        return array (  453 => 241,  446 => 238,  442 => 237,  437 => 235,  433 => 234,  429 => 233,  422 => 228,  420 => 227,  416 => 225,  406 => 218,  396 => 211,  383 => 201,  379 => 199,  374 => 198,  371 => 197,  369 => 196,  362 => 192,  352 => 185,  342 => 177,  340 => 176,  336 => 174,  328 => 168,  321 => 165,  318 => 164,  312 => 161,  306 => 158,  303 => 157,  301 => 156,  294 => 151,  288 => 149,  284 => 147,  278 => 145,  272 => 142,  269 => 141,  267 => 140,  257 => 132,  251 => 130,  247 => 128,  241 => 126,  235 => 123,  232 => 122,  230 => 121,  226 => 119,  220 => 116,  217 => 115,  215 => 114,  212 => 113,  206 => 111,  200 => 108,  197 => 107,  195 => 106,  188 => 101,  182 => 99,  178 => 97,  172 => 95,  166 => 92,  163 => 91,  161 => 90,  152 => 83,  150 => 82,  146 => 80,  138 => 75,  132 => 72,  118 => 61,  113 => 59,  102 => 51,  97 => 49,  86 => 41,  81 => 39,  69 => 29,  67 => 28,  61 => 24,  56 => 22,  52 => 21,  47 => 20,  45 => 19,  39 => 16,  34 => 14,  19 => 1,);
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
/*                     {% if (user.rol == 'estudiante') %}*/
/*                     <li>*/
/*                     <a href="{{ path('diario_new') }}"><i class="fa fa-circle-o text-info"></i>Crear Diario</a>*/
/*                   </li>*/
/*                   <li>*/
/*                       <a href="{{ path('diario_list') }}"><i class="fa fa-circle-o text-info"></i>Editar Diarios</a>*/
/*                   </li>                  */
/*                   {% endif %}  */
/*                     {% if (user.rol != 'estudiante') %}*/
/*                     <li>*/
/*                       <a href="{{ path('diario_list') }}"><i class="fa fa-circle-o text-info"></i> Listar Diarios</a>*/
/*                     </li>*/
/*                     {% endif %}*/
/*                     <li> <a> <i class="fa fa-circle-o text-info"></i> Act. Adicionales <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                       <ul class="treeview-menu">*/
/*                         {% if (user.rol == 'estudiante') %}*/
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
/*                     {% if (user.rol == 'estudiante') %}*/
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
/*                   {% if (user.rol == 'estudiante') %}*/
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
