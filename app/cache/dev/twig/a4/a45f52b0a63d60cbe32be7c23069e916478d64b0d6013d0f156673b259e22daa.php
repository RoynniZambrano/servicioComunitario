<?php

/* TesisAdminBundle:Main:sidebar.html.twig */
class __TwigTemplate_544fb94fe9e58ee7cdef32d1da73f97d9bdb024b945c3de1b449a80f6483dbe0 extends Twig_Template
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
        if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) != null)) {
            echo "  
      <!-- Left side column. contains the sidebar -->
      <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
          <ul class=\"sidebar-menu\">
            <li class=\"header\">PANEL DE NAVEGACIÓN PRINCIPAL</li>

    <!-- ADMINISTRAR MI PERFIL -->
            <li class=\"treeview\">
              <a>
                <i class=\"fa fa-male\"></i> <span>Administrar mi perfil</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">

                <li><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_check", array("cedula" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cedula", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-circle-o text-info\"></i> Consultar perfil</a></li>                      

                <li><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("cedula" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cedula", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-circle-o text-info\"></i> Editar perfil</a></li>   
              </ul>
            </li>

    <!-- GESTIONAR USUARIOS -->
            ";
            // line 23
            if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "coordinador de servicio comunitario") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "estatus", array()) == "activo"))) {
                // line 24
                echo "              <li class=\"treeview\">
                <a>
                  <i class=\"fa fa-user-plus\"></i> <span>Gestionar usuarios</span> <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu\">
                  <li><a href=\"";
                // line 29
                echo $this->env->getExtension('routing')->getPath("user_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i> Crear profesor</a></li> 
                  <li><a href=\"";
                // line 30
                echo $this->env->getExtension('routing')->getPath("student_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i> Crear estudiante</a></li>                                                                   
                  <li><a href=\"";
                // line 31
                echo $this->env->getExtension('routing')->getPath("user_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i> Listar usuarios</a></li> 
                </ul>
              </li>

          ";
            }
            // line 36
            echo "
    <!-- GESTIONAR PROYECTOS -->
          ";
            // line 38
            if ((((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "coordinador de proyecto") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "estatus", array()) == "activo")) || (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "coordinador de servicio comunitario") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "estatus", array()) == "activo"))) || (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "coordinador suplente") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "estatus", array()) == "activo")))) {
                // line 39
                echo "
            <li class=\"treeview\">
              <a >
                <i class=\"fa fa-files-o\"></i> <span>Gestionar proyectos</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">

                <li><a ><i class=\"fa fa-circle-o text-info\"></i> Proyectos 
                      <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                    <li>
                    <a href=\"";
                // line 50
                echo $this->env->getExtension('routing')->getPath("project_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear proyecto</a></li>
                    <li>
                      <a href=\"";
                // line 52
                echo $this->env->getExtension('routing')->getPath("project_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar proyectos</a>
                    </li> 
                  </ul>
                </li> 
                <li><a ><i class=\"fa fa-circle-o text-info\"></i> Fases 
                      <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                    <li>
                    <a href=\"";
                // line 60
                echo $this->env->getExtension('routing')->getPath("fase_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear fase</a></li>
                    <li>
                      <a href=\"";
                // line 62
                echo $this->env->getExtension('routing')->getPath("fase_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar fases</a>
                    </li>                                        
                  </ul>
                </li>                
               <li><a><i class=\"fa fa-circle-o text-info\"></i> Actividades 
                      <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                    <li>
                    <a href=\"";
                // line 70
                echo $this->env->getExtension('routing')->getPath("activities_new");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear actividad</a></li>
                    <li>
                      <a href=\"";
                // line 72
                echo $this->env->getExtension('routing')->getPath("activities_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar actividades</a>
                    </li>                                        
                  </ul>
                </li>                                                 
              </ul>
            </li>   

   

    <!-- GESTIONAR ASIGNACIONES-->      
            <li class=\"treeview\">
              <a >
                <i class=\"fa fa-pencil-square-o\"></i> <span>Gestionar asignaciones</span> <i class=\"fa fa-angle-left pull-right\"></i>  
              </a>
              <ul class=\"treeview-menu\">
                <li><a><i class=\"fa fa-circle-o text-info\"></i> Tutores a proyectos <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                    <li>
                    <a href=\"";
                // line 90
                echo $this->env->getExtension('routing')->getPath("tutors_add");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear asignación</a>
                    </li>
                    <li>
                      <a href=\"";
                // line 93
                echo $this->env->getExtension('routing')->getPath("tutors_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>                   
                  </ul>
                </li>
                <li><a><i class=\"fa fa-circle-o text-info\"></i> Tutores a estudiantes <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                    <li>
                    <a href=\"";
                // line 100
                echo $this->env->getExtension('routing')->getPath("tutor_add");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear asignación</a>
                    </li>
                    <li>
                      <a href=\"";
                // line 103
                echo $this->env->getExtension('routing')->getPath("tutor_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>                   
                  </ul>
                </li>
                <li><a><i class=\"fa fa-circle-o text-info\"></i> Estudiantes a proyectos <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                    <li>
                    <a href=\"";
                // line 110
                echo $this->env->getExtension('routing')->getPath("laborsc_add");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear asignación</a>
                    </li>
                    <li>
                      <a href=\"";
                // line 113
                echo $this->env->getExtension('routing')->getPath("laborsc_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>                   
                  </ul>
                </li>
                <li><a><i class=\"fa fa-circle-o text-info\"></i> Coordinadores a proyectos <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                    <li>
                    <a href=\"";
                // line 120
                echo $this->env->getExtension('routing')->getPath("coord_add");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear asignación</a>
                    </li>
                    <li>
                      <a href=\"";
                // line 123
                echo $this->env->getExtension('routing')->getPath("coord_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>                   
                  </ul>
                </li>                                                  
              </ul>  
            </li>                   
          ";
            }
            // line 130
            echo "

    <!-- GESTIONAR PRODUCTOS -->  
            ";
            // line 133
            if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "estatus", array()) == "activo"))) {
                // line 134
                echo "            <li class=\"treeview\">
              <a >
                <i class=\"fa fa-th\"></i> <span>Gestionar Productos</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a><i class=\"fa fa-circle-o text-info\"></i> Periodos <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                  ";
                // line 141
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante")) {
                    // line 142
                    echo "                    <li>
                    <a href=\"";
                    // line 143
                    echo $this->env->getExtension('routing')->getPath("periodo_new");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Periodo</a>
                    </li>
                    <li>
                      <a href=\"";
                    // line 146
                    echo $this->env->getExtension('routing')->getPath("periodo_list");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Periodo</a>
                    </li> 
                  ";
                } else {
                    // line 148
                    echo "  
                    <li>
                      <a href=\"";
                    // line 150
                    echo $this->env->getExtension('routing')->getPath("periodo_list");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar Periodos</a>
                    </li> 
                  ";
                }
                // line 152
                echo "                   
                  </ul>
                </li>
                <li><a><i class=\"fa fa-circle-o text-info\"></i> Diarios de Campo <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                    ";
                // line 157
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante")) {
                    // line 158
                    echo "                    <li>
                    <a href=\"";
                    // line 159
                    echo $this->env->getExtension('routing')->getPath("diario_new");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Diario</a>
                  </li>
                  <li>
                      <a href=\"";
                    // line 162
                    echo $this->env->getExtension('routing')->getPath("diario_list");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Diarios</a>
                  </li>                  
                  ";
                }
                // line 164
                echo "  
                    ";
                // line 165
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "estudiante")) {
                    // line 166
                    echo "                    <li>
                      <a href=\"";
                    // line 167
                    echo $this->env->getExtension('routing')->getPath("diario_list");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i> Listar Diarios</a>
                    </li>
                    ";
                }
                // line 170
                echo "                    <li> <a> <i class=\"fa fa-circle-o text-info\"></i> Act. Adicionales <i class=\"fa fa-angle-left pull-right\"></i> </a>
                      <ul class=\"treeview-menu\">
                        ";
                // line 172
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante")) {
                    // line 173
                    echo "                        <li>
                        <a href=\"";
                    // line 174
                    echo $this->env->getExtension('routing')->getPath("resultados_new");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Actividad</a>
                        </li>
                        <li>
                          <a href=\"";
                    // line 177
                    echo $this->env->getExtension('routing')->getPath("resultados_list");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Actividad</a>
                        </li>
                        ";
                } else {
                    // line 179
                    echo " 
                        <li>
                          <a href=\"";
                    // line 181
                    echo $this->env->getExtension('routing')->getPath("resultados_list");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar Actividad</a>
                        </li> 
                        ";
                }
                // line 183
                echo "                                       
                      </ul>
                    </li>               
                  </ul>
                </li>

                <li><a><i class=\"fa fa-circle-o text-info\"></i> Información Adicional <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">
                    ";
                // line 191
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante")) {
                    // line 192
                    echo "                    <li>
                    <a href=\"";
                    // line 193
                    echo $this->env->getExtension('routing')->getPath("infoAdicional_new");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Información Adicional</a>
                   </li>
                   <li>
                      <a  href=\"";
                    // line 196
                    echo $this->env->getExtension('routing')->getPath("infoAdicional_list");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Editar Información Adicional</a>
                    </li>
                  ";
                } else {
                    // line 198
                    echo "  
                    <li>
                      <a href=\"";
                    // line 200
                    echo $this->env->getExtension('routing')->getPath("infoAdicional_list");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar Información Adicional</a>
                    </li>
                    ";
                }
                // line 202
                echo "                   
                  </ul>
                </li>   
                <li><a ><i class=\"fa fa-circle-o text-info\"></i> Informe Final <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">
                  ";
                // line 207
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante")) {
                    // line 208
                    echo "                    <li>
                    <a  href=\"";
                    // line 209
                    echo $this->env->getExtension('routing')->getPath("infofinal");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Visualizar Informe Final</a>
                  </li>  
                    <li>
                      <a href=\"";
                    // line 212
                    echo $this->env->getExtension('routing')->getPath("infofinal_check", array("id" => 0));
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Evaluación Informe Final</a>
                    </li>
                  ";
                } else {
                    // line 215
                    echo "                    <li>
                      <a href=\"";
                    // line 216
                    echo $this->env->getExtension('routing')->getPath("infofinal_list");
                    echo "\"><i class=\"fa fa-circle-o text-info\">
                      </i>Evaluación Informe Final</a>
                    </li>
                  ";
                }
                // line 219
                echo "                                           
                  </ul>
                </li>     
              </ul>
            </li>
            ";
            }
            // line 225
            echo "

    <!-- EVALUACIÓN DE PRODUCTOS -->
            ";
            // line 228
            if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) != "estudiante") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "estatus", array()) == "activo"))) {
                // line 229
                echo "            <li class=\"treeview\">
              <a >
                <i class=\"fa fa-check-square-o\"></i> <span>Evaluar Productos</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a><i class=\"fa fa-circle-o text-info\"></i> Periodos <i class=\"fa fa-angle-left pull-right\"></i> </a>
                  <ul class=\"treeview-menu\">
                    <li>
                      <a href=\"";
                // line 237
                echo $this->env->getExtension('routing')->getPath("periodo_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>                    
                  </ul>
                </li>
                <li><a ><i class=\"fa fa-circle-o text-info\"></i> Diarios de Campo <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">
                    <li>
                      <a href=\"";
                // line 244
                echo $this->env->getExtension('routing')->getPath("diario_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>
                    <li> <a> <i class=\"fa fa-circle-o text-info\"></i> Act. Adicionales <i class=\"fa fa-angle-left pull-right\"></i> </a>
                      <ul class=\"treeview-menu\">
                        ";
                // line 248
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "estudiante")) {
                    // line 249
                    echo "                        <li>
                        <a href=\"";
                    // line 250
                    echo $this->env->getExtension('routing')->getPath("resultados_new");
                    echo "\"><i class=\"fa fa-circle-o text-info\"></i>Crear Actividad</a></li>
                        ";
                }
                // line 251
                echo " 
                        <li>
                          <a href=\"";
                // line 253
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
                // line 263
                echo $this->env->getExtension('routing')->getPath("infoAdicional_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>                   
                  </ul>
                </li>   
                <li><a ><i class=\"fa fa-circle-o text-info\"></i> Ver Informe Final <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">  
                    <li>
                      <a href=\"";
                // line 270
                echo $this->env->getExtension('routing')->getPath("infofinal_list");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i>Listar</a>
                    </li>                                       
                  </ul>
                </li>     
              </ul>
            </li>
            ";
            }
            // line 277
            echo "

            ";
            // line 279
            if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "coordinador de servicio comunitario") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "estatus", array()) == "activo"))) {
                // line 280
                echo "            <li class=\"treeview\">
              <a >
                <i class=\"fa fa-download\"></i> <span>Reportes</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
                // line 285
                echo $this->env->getExtension('routing')->getPath("reports_1");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i> Estudiantes Inscritos </a></li> 
                <li><a href=\"";
                // line 286
                echo $this->env->getExtension('routing')->getPath("reports_2");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i> Estudiantes Aprobados </a></li>                                                                   
                <li><a href=\"";
                // line 287
                echo $this->env->getExtension('routing')->getPath("reports_3");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i> Tutores</a></li> 

                <li><a href=\"";
                // line 289
                echo $this->env->getExtension('routing')->getPath("reports_4");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i> Coordinadores </a></li> 
                <li><a href=\"";
                // line 290
                echo $this->env->getExtension('routing')->getPath("reports_5");
                echo "\"><i class=\"fa fa-circle-o text-info\"></i> Proyectos </a></li>      
              </ul>
            </li>
            ";
            }
            // line 293
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
        return array (  526 => 293,  519 => 290,  515 => 289,  510 => 287,  506 => 286,  502 => 285,  495 => 280,  493 => 279,  489 => 277,  479 => 270,  469 => 263,  456 => 253,  452 => 251,  447 => 250,  444 => 249,  442 => 248,  435 => 244,  425 => 237,  415 => 229,  413 => 228,  408 => 225,  400 => 219,  393 => 216,  390 => 215,  384 => 212,  378 => 209,  375 => 208,  373 => 207,  366 => 202,  360 => 200,  356 => 198,  350 => 196,  344 => 193,  341 => 192,  339 => 191,  329 => 183,  323 => 181,  319 => 179,  313 => 177,  307 => 174,  304 => 173,  302 => 172,  298 => 170,  292 => 167,  289 => 166,  287 => 165,  284 => 164,  278 => 162,  272 => 159,  269 => 158,  267 => 157,  260 => 152,  254 => 150,  250 => 148,  244 => 146,  238 => 143,  235 => 142,  233 => 141,  224 => 134,  222 => 133,  217 => 130,  207 => 123,  201 => 120,  191 => 113,  185 => 110,  175 => 103,  169 => 100,  159 => 93,  153 => 90,  132 => 72,  127 => 70,  116 => 62,  111 => 60,  100 => 52,  95 => 50,  82 => 39,  80 => 38,  76 => 36,  68 => 31,  64 => 30,  60 => 29,  53 => 24,  51 => 23,  43 => 18,  38 => 16,  19 => 1,);
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
/*     <!-- ADMINISTRAR MI PERFIL -->*/
/*             <li class="treeview">*/
/*               <a>*/
/*                 <i class="fa fa-male"></i> <span>Administrar mi perfil</span> <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/* */
/*                 <li><a href="{{ path('user_check', {'cedula': user.cedula}) }}"><i class="fa fa-circle-o text-info"></i> Consultar perfil</a></li>                      */
/* */
/*                 <li><a href="{{ path('user_edit', {'cedula': user.cedula}) }}"><i class="fa fa-circle-o text-info"></i> Editar perfil</a></li>   */
/*               </ul>*/
/*             </li>*/
/* */
/*     <!-- GESTIONAR USUARIOS -->*/
/*             {% if ((user.perfil == 'coordinador de servicio comunitario') and (user.estatus == 'activo'))%}*/
/*               <li class="treeview">*/
/*                 <a>*/
/*                   <i class="fa fa-user-plus"></i> <span>Gestionar usuarios</span> <i class="fa fa-angle-left pull-right"></i>*/
/*                 </a>*/
/*                 <ul class="treeview-menu">*/
/*                   <li><a href="{{ path('user_new') }}"><i class="fa fa-circle-o text-info"></i> Crear profesor</a></li> */
/*                   <li><a href="{{ path('student_new') }}"><i class="fa fa-circle-o text-info"></i> Crear estudiante</a></li>                                                                   */
/*                   <li><a href="{{ path('user_list') }}"><i class="fa fa-circle-o text-info"></i> Listar usuarios</a></li> */
/*                 </ul>*/
/*               </li>*/
/* */
/*           {% endif %}*/
/* */
/*     <!-- GESTIONAR PROYECTOS -->*/
/*           {% if ((user.perfil == 'coordinador de proyecto') and (user.estatus == 'activo')) or ((user.perfil == 'coordinador de servicio comunitario') and (user.estatus == 'activo')) or ((user.perfil == 'coordinador suplente') and (user.estatus == 'activo')) %}*/
/* */
/*             <li class="treeview">*/
/*               <a >*/
/*                 <i class="fa fa-files-o"></i> <span>Gestionar proyectos</span> <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/* */
/*                 <li><a ><i class="fa fa-circle-o text-info"></i> Proyectos */
/*                       <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                   <ul class="treeview-menu">*/
/*                     <li>*/
/*                     <a href="{{ path('project_new') }}"><i class="fa fa-circle-o text-info"></i>Crear proyecto</a></li>*/
/*                     <li>*/
/*                       <a href="{{ path('project_list') }}"><i class="fa fa-circle-o text-info"></i>Listar proyectos</a>*/
/*                     </li> */
/*                   </ul>*/
/*                 </li> */
/*                 <li><a ><i class="fa fa-circle-o text-info"></i> Fases */
/*                       <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                   <ul class="treeview-menu">*/
/*                     <li>*/
/*                     <a href="{{ path('fase_new') }}"><i class="fa fa-circle-o text-info"></i>Crear fase</a></li>*/
/*                     <li>*/
/*                       <a href="{{ path('fase_list') }}"><i class="fa fa-circle-o text-info"></i>Listar fases</a>*/
/*                     </li>                                        */
/*                   </ul>*/
/*                 </li>                */
/*                <li><a><i class="fa fa-circle-o text-info"></i> Actividades */
/*                       <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                   <ul class="treeview-menu">*/
/*                     <li>*/
/*                     <a href="{{ path('activities_new') }}"><i class="fa fa-circle-o text-info"></i>Crear actividad</a></li>*/
/*                     <li>*/
/*                       <a href="{{ path('activities_list') }}"><i class="fa fa-circle-o text-info"></i>Listar actividades</a>*/
/*                     </li>                                        */
/*                   </ul>*/
/*                 </li>                                                 */
/*               </ul>*/
/*             </li>   */
/* */
/*    */
/* */
/*     <!-- GESTIONAR ASIGNACIONES-->      */
/*             <li class="treeview">*/
/*               <a >*/
/*                 <i class="fa fa-pencil-square-o"></i> <span>Gestionar asignaciones</span> <i class="fa fa-angle-left pull-right"></i>  */
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a><i class="fa fa-circle-o text-info"></i> Tutores a proyectos <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                   <ul class="treeview-menu">*/
/*                     <li>*/
/*                     <a href="{{ path('tutors_add') }}"><i class="fa fa-circle-o text-info"></i>Crear asignación</a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <a href="{{ path('tutors_list') }}"><i class="fa fa-circle-o text-info"></i>Listar</a>*/
/*                     </li>                   */
/*                   </ul>*/
/*                 </li>*/
/*                 <li><a><i class="fa fa-circle-o text-info"></i> Tutores a estudiantes <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                   <ul class="treeview-menu">*/
/*                     <li>*/
/*                     <a href="{{ path('tutor_add') }}"><i class="fa fa-circle-o text-info"></i>Crear asignación</a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <a href="{{ path('tutor_list') }}"><i class="fa fa-circle-o text-info"></i>Listar</a>*/
/*                     </li>                   */
/*                   </ul>*/
/*                 </li>*/
/*                 <li><a><i class="fa fa-circle-o text-info"></i> Estudiantes a proyectos <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                   <ul class="treeview-menu">*/
/*                     <li>*/
/*                     <a href="{{ path('laborsc_add') }}"><i class="fa fa-circle-o text-info"></i>Crear asignación</a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <a href="{{ path('laborsc_list') }}"><i class="fa fa-circle-o text-info"></i>Listar</a>*/
/*                     </li>                   */
/*                   </ul>*/
/*                 </li>*/
/*                 <li><a><i class="fa fa-circle-o text-info"></i> Coordinadores a proyectos <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                   <ul class="treeview-menu">*/
/*                     <li>*/
/*                     <a href="{{ path('coord_add') }}"><i class="fa fa-circle-o text-info"></i>Crear asignación</a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <a href="{{ path('coord_list') }}"><i class="fa fa-circle-o text-info"></i>Listar</a>*/
/*                     </li>                   */
/*                   </ul>*/
/*                 </li>                                                  */
/*               </ul>  */
/*             </li>                   */
/*           {% endif %}*/
/* */
/* */
/*     <!-- GESTIONAR PRODUCTOS -->  */
/*             {% if ((user.perfil == 'estudiante') and (user.estatus == 'activo')) %}*/
/*             <li class="treeview">*/
/*               <a >*/
/*                 <i class="fa fa-th"></i> <span>Gestionar Productos</span> <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a><i class="fa fa-circle-o text-info"></i> Periodos <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                   <ul class="treeview-menu">*/
/*                   {% if (user.perfil == 'estudiante') %}*/
/*                     <li>*/
/*                     <a href="{{ path('periodo_new') }}"><i class="fa fa-circle-o text-info"></i>Crear Periodo</a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <a href="{{ path('periodo_list') }}"><i class="fa fa-circle-o text-info"></i>Editar Periodo</a>*/
/*                     </li> */
/*                   {% else %}  */
/*                     <li>*/
/*                       <a href="{{ path('periodo_list') }}"><i class="fa fa-circle-o text-info"></i>Listar Periodos</a>*/
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
/*                     <a href="{{ path('infoAdicional_new') }}"><i class="fa fa-circle-o text-info"></i>Crear Información Adicional</a>*/
/*                    </li>*/
/*                    <li>*/
/*                       <a  href="{{ path('infoAdicional_list') }}"><i class="fa fa-circle-o text-info"></i>Editar Información Adicional</a>*/
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
/*     <!-- EVALUACIÓN DE PRODUCTOS -->*/
/*             {% if ((user.perfil != 'estudiante') and (user.estatus == 'activo')) %}*/
/*             <li class="treeview">*/
/*               <a >*/
/*                 <i class="fa fa-check-square-o"></i> <span>Evaluar Productos</span> <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a><i class="fa fa-circle-o text-info"></i> Periodos <i class="fa fa-angle-left pull-right"></i> </a>*/
/*                   <ul class="treeview-menu">*/
/*                     <li>*/
/*                       <a href="{{ path('periodo_list') }}"><i class="fa fa-circle-o text-info"></i>Listar</a>*/
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
/*             {% if ((user.perfil == 'coordinador de servicio comunitario') and (user.estatus == 'activo')) %}*/
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
/*           </ul>*/
/*         </section>*/
/*         <!-- /.sidebar -->*/
/*       </aside>*/
/*   {% endif %}*/
