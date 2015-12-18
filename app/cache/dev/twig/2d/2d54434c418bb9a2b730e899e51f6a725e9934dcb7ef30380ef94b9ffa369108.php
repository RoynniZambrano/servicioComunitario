<?php

/* TesisAdminBundle:Main:header.html.twig */
class __TwigTemplate_def4c570c0033f937809c075b96845ec449e3257bfb78803bb3f4319999f7a01 extends Twig_Template
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
        echo "     <header class=\"main-header\">
        <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("tesis_admin_homepage");
        echo "\" class=\"logo\"><b>SistemaSC</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
          <!-- Sidebar toggle button-->
          <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </a>
          <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
      
              <!-- User Account: style can be found in dropdown.less -->
              <li class=\"dropdown user user-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">

                ";
        // line 19
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "estudiante")) {
            // line 20
            echo "
                  ";
            // line 21
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "genero", array()) == "male")) {
                // line 22
                echo "                  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/student.png"), "html", null, true);
                echo "\" class=\"user-image\" alt=\"User Image\"/>
                  ";
            } else {
                // line 24
                echo "                  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/studentw.png"), "html", null, true);
                echo "\" class=\"user-image\" alt=\"User Image\"/>
                  ";
            }
            // line 26
            echo "
                ";
        } else {
            // line 28
            echo "
                  ";
            // line 29
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "genero", array()) == "male")) {
                // line 30
                echo "                  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/user.png"), "html", null, true);
                echo "\" class=\"user-image\" alt=\"User Image\"/>
                  ";
            } else {
                // line 32
                echo "                  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/userw.png"), "html", null, true);
                echo "\" class=\"user-image\" alt=\"User Image\"/>
                  ";
            }
            // line 34
            echo "
                ";
        }
        // line 36
        echo "
                  <span class=\"hidden-xs\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombre", array()), "html", null, true);
        echo "</span>
                  <!-- <span class=\"hidden-xs\">Alexander Pierce</span> -->
                </a>
                <ul class=\"dropdown-menu\">
                  <!-- User image -->
                  <li class=\"user-header\">

                  ";
        // line 44
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()) == "estudiante")) {
            // line 45
            echo "
                    ";
            // line 46
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "genero", array()) == "male")) {
                // line 47
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/student.png"), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"User Image\"/>
                    ";
            } else {
                // line 49
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/studentw.png"), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"User Image\"/>
                    ";
            }
            // line 51
            echo "
                  ";
        } else {
            // line 53
            echo "
                    ";
            // line 54
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "genero", array()) == "male")) {
                // line 55
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/user.png"), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"User Image\"/>
                    ";
            } else {
                // line 57
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/userw.png"), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"User Image\"/>
                    ";
            }
            // line 59
            echo "
                  ";
        }
        // line 61
        echo "
                    <p>
                      ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rol", array()), "html", null, true);
        echo " <br> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "correo", array()), "html", null, true);
        echo "
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class=\"user-footer\">
                    <div class=\"pull-left\">
                      <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_check", array("cedula" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cedula", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-flat\">Perfil</a>
                    </div>
                    <div class=\"pull-right\">
                      <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("user_logout");
        echo "\" class=\"btn btn-default btn-flat\">Cerrar sesión</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>";
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Main:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 72,  158 => 69,  147 => 63,  143 => 61,  139 => 59,  133 => 57,  127 => 55,  125 => 54,  122 => 53,  118 => 51,  112 => 49,  106 => 47,  104 => 46,  101 => 45,  99 => 44,  89 => 37,  86 => 36,  82 => 34,  76 => 32,  70 => 30,  68 => 29,  65 => 28,  61 => 26,  55 => 24,  49 => 22,  47 => 21,  44 => 20,  42 => 19,  22 => 2,  19 => 1,);
    }
}
/*      <header class="main-header">*/
/*         <a href="{{ path('tesis_admin_homepage') }}" class="logo"><b>SistemaSC</b></a>*/
/*         <!-- Header Navbar: style can be found in header.less -->*/
/*         <nav class="navbar navbar-static-top" role="navigation">*/
/*           <!-- Sidebar toggle button-->*/
/*           <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </a>*/
/*           <div class="navbar-custom-menu">*/
/*             <ul class="nav navbar-nav">*/
/*       */
/*               <!-- User Account: style can be found in dropdown.less -->*/
/*               <li class="dropdown user user-menu">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/* */
/*                 {% if (user.rol == 'estudiante') %}*/
/* */
/*                   {% if (user.genero == 'male') %}*/
/*                   <img src="{{ asset('img/student.png') }}" class="user-image" alt="User Image"/>*/
/*                   {% else %}*/
/*                   <img src="{{ asset('img/studentw.png') }}" class="user-image" alt="User Image"/>*/
/*                   {% endif %}*/
/* */
/*                 {% else %}*/
/* */
/*                   {% if (user.genero == 'male') %}*/
/*                   <img src="{{ asset('img/user.png') }}" class="user-image" alt="User Image"/>*/
/*                   {% else %}*/
/*                   <img src="{{ asset('img/userw.png') }}" class="user-image" alt="User Image"/>*/
/*                   {% endif %}*/
/* */
/*                 {% endif %}*/
/* */
/*                   <span class="hidden-xs">{{user.nombre}}</span>*/
/*                   <!-- <span class="hidden-xs">Alexander Pierce</span> -->*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <!-- User image -->*/
/*                   <li class="user-header">*/
/* */
/*                   {% if (user.rol == 'estudiante') %}*/
/* */
/*                     {% if (user.genero == 'male') %}*/
/*                     <img src="{{ asset('img/student.png') }}" class="img-circle" alt="User Image"/>*/
/*                     {% else %}*/
/*                     <img src="{{ asset('img/studentw.png') }}" class="img-circle" alt="User Image"/>*/
/*                     {% endif %}*/
/* */
/*                   {% else %}*/
/* */
/*                     {% if (user.genero == 'male') %}*/
/*                     <img src="{{ asset('img/user.png') }}" class="img-circle" alt="User Image"/>*/
/*                     {% else %}*/
/*                     <img src="{{ asset('img/userw.png') }}" class="img-circle" alt="User Image"/>*/
/*                     {% endif %}*/
/* */
/*                   {% endif %}*/
/* */
/*                     <p>*/
/*                       {{user.rol}} <br> {{user.correo}}*/
/*                     </p>*/
/*                   </li>*/
/*                   <!-- Menu Footer-->*/
/*                   <li class="user-footer">*/
/*                     <div class="pull-left">*/
/*                       <a href="{{ path('user_check', {'cedula': user.cedula}) }}" class="btn btn-default btn-flat">Perfil</a>*/
/*                     </div>*/
/*                     <div class="pull-right">*/
/*                       <a href="{{ path('user_logout') }}" class="btn btn-default btn-flat">Cerrar sesión</a>*/
/*                     </div>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/*             </ul>*/
/*           </div>*/
/*         </nav>*/
/*       </header>*/
