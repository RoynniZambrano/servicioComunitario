<?php

/* TesisAdminBundle:Main:header.html.twig */
class __TwigTemplate_362f354c634c5449163b40d54d400e3d2ae5dba828166e64cb3ec42007aec5d3 extends Twig_Template
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

     <header class=\"main-header\">
        <a href=\"";
            // line 4
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
            // line 21
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) == "estudiante")) {
                // line 22
                echo "
                  ";
                // line 23
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "genero", array()) == "male")) {
                    // line 24
                    echo "                  <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/student.png"), "html", null, true);
                    echo "\" class=\"user-image\" alt=\"User Image\"/>
                  ";
                } else {
                    // line 26
                    echo "                  <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/studentw.png"), "html", null, true);
                    echo "\" class=\"user-image\" alt=\"User Image\"/>
                  ";
                }
                // line 28
                echo "
                ";
            } else {
                // line 30
                echo "
                  ";
                // line 31
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "genero", array()) == "male")) {
                    // line 32
                    echo "                  <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/user.png"), "html", null, true);
                    echo "\" class=\"user-image\" alt=\"User Image\"/>
                  ";
                } else {
                    // line 34
                    echo "                  <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/userw.png"), "html", null, true);
                    echo "\" class=\"user-image\" alt=\"User Image\"/>
                  ";
                }
                // line 36
                echo "
                ";
            }
            // line 38
            echo "
                  <span class=\"hidden-xs\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nombre", array()), "html", null, true);
            echo "</span>
                  <!-- <span class=\"hidden-xs\">Alexander Pierce</span> -->
                </a>
                <ul class=\"dropdown-menu\">
                  <!-- User image -->
                  <li class=\"user-header\">

                  ";
            // line 46
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()) == "estudiante")) {
                // line 47
                echo "
                    ";
                // line 48
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "genero", array()) == "male")) {
                    // line 49
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/student.png"), "html", null, true);
                    echo "\" class=\"img-circle\" alt=\"User Image\"/>
                    ";
                } else {
                    // line 51
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/studentw.png"), "html", null, true);
                    echo "\" class=\"img-circle\" alt=\"User Image\"/>
                    ";
                }
                // line 53
                echo "
                  ";
            } else {
                // line 55
                echo "
                    ";
                // line 56
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "genero", array()) == "male")) {
                    // line 57
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/user.png"), "html", null, true);
                    echo "\" class=\"img-circle\" alt=\"User Image\"/>
                    ";
                } else {
                    // line 59
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/userw.png"), "html", null, true);
                    echo "\" class=\"img-circle\" alt=\"User Image\"/>
                    ";
                }
                // line 61
                echo "
                  ";
            }
            // line 63
            echo "
                    <p>
                      ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "perfil", array()), "html", null, true);
            echo " <br> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nameLogin", array()), "html", null, true);
            echo "
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class=\"user-footer\">
                    <div class=\"pull-left\">
                      <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_check", array("cedula" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "cedula", array()))), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\">Perfil</a>
                    </div>
                    <div class=\"pull-right\">
                      <a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("user_logout");
            echo "\" class=\"btn btn-default btn-flat\">Cerrar sesión</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

  ";
        } else {
            // line 85
            echo "  
     <header class=\"main-header\">
        <a href=\"";
            // line 87
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
            </ul>
          </div>
        </nav>
      </header>


  ";
        }
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
        return array (  186 => 87,  182 => 85,  168 => 74,  162 => 71,  151 => 65,  147 => 63,  143 => 61,  137 => 59,  131 => 57,  129 => 56,  126 => 55,  122 => 53,  116 => 51,  110 => 49,  108 => 48,  105 => 47,  103 => 46,  93 => 39,  90 => 38,  86 => 36,  80 => 34,  74 => 32,  72 => 31,  69 => 30,  65 => 28,  59 => 26,  53 => 24,  51 => 23,  48 => 22,  46 => 21,  26 => 4,  19 => 1,);
    }
}
/*   {% if (user != null) %} */
/* */
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
/*                 {% if (user.perfil == 'estudiante') %}*/
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
/*                   {% if (user.perfil == 'estudiante') %}*/
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
/*                       {{user.perfil}} <br> {{user.nameLogin}}*/
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
/* */
/*   {% else %}*/
/*   */
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
/*             </ul>*/
/*           </div>*/
/*         </nav>*/
/*       </header>*/
/* */
/* */
/*   {% endif %}*/
