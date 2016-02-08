<?php

/* TesisAdminBundle:Reports:reports4_pdf.html.twig */
class __TwigTemplate_6edc00fa5d8572e2876383d00bf1a6bf8454a8507b94727b6f8c160a55defd3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "TesisAdminBundle:Reports:reports4_pdf.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<style>
table{
\twidth:100%;
\tdisplay: table;
\tmax-width: 100%;
\tfont-family: \"Open Sans\", Arial, sans-serif;
\tfont-size: 13px;
\tline-height: 14px;
}
table, th, td {
    border: 1px solid gray;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}

table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th\t{
    background-color: white;
    color: black;
}
#header1 {   
    font-family: \"Open Sans\", Arial, sans-serif;
    color: #337ab7;
}

#header2 {   
    font-family: \"Open Sans\", Arial, sans-serif;
    color: #555555;
}
</style>

<h3 id=\"header1\"> Universidad de Carabobo <br> Facultad Experimental de Ciencias y Tecnología </h3>
<h5 id=\"header2\"> Reporte de Coordinadores en Servicio Comunitario.  Periodo: ";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "html", null, true);
        echo ". Departamento: ";
        echo twig_escape_filter($this->env, (isset($context["departamento"]) ? $context["departamento"] : $this->getContext($context, "departamento")), "html", null, true);
        echo "</h5>

 \t\t<table id=\"t01\">   
            <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Perfil</th>              
              ";
        // line 54
        echo "            </tr>
            ";
        // line 55
        $context["i"] = 0;
        // line 56
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["c_proyecto"]) ? $context["c_proyecto"] : $this->getContext($context, "c_proyecto")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
            // line 57
            echo "              <tr>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "apellido", array()), "html", null, true);
            echo "</td>                     
                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "perfil", array()), "html", null, true);
            echo "</td>                           

                ";
            // line 82
            echo " 

                  ";
            // line 84
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 85
            echo "
              </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            ";
        $context["i"] = 0;
        // line 89
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["c_suplente"]) ? $context["c_suplente"] : $this->getContext($context, "c_suplente")));
        foreach ($context['_seq'] as $context["_key"] => $context["suplente"]) {
            // line 90
            echo "              <tr>
                <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["suplente"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["suplente"], "apellido", array()), "html", null, true);
            echo "</td>                     
                <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["suplente"], "perfil", array()), "html", null, true);
            echo "</td>                           

                ";
            // line 114
            echo " 

                  ";
            // line 116
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 117
            echo "
              </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suplente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                        
        </table> 
";
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Reports:reports4_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 119,  155 => 117,  153 => 116,  149 => 114,  144 => 93,  140 => 92,  136 => 91,  133 => 90,  128 => 89,  125 => 88,  117 => 85,  115 => 84,  111 => 82,  106 => 60,  102 => 59,  98 => 58,  95 => 57,  90 => 56,  88 => 55,  85 => 54,  73 => 46,  31 => 6,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends '::base.html.twig' %}  */
/* */
/* {% block body -%}*/
/* */
/* <style>*/
/* table{*/
/* 	width:100%;*/
/* 	display: table;*/
/* 	max-width: 100%;*/
/* 	font-family: "Open Sans", Arial, sans-serif;*/
/* 	font-size: 13px;*/
/* 	line-height: 14px;*/
/* }*/
/* table, th, td {*/
/*     border: 1px solid gray;*/
/*     border-collapse: collapse;*/
/* }*/
/* th, td {*/
/*     padding: 5px;*/
/*     text-align: left;*/
/* }*/
/* */
/* table#t01 tr:nth-child(even) {*/
/*     background-color: #eee;*/
/* }*/
/* table#t01 tr:nth-child(odd) {*/
/*    background-color:#fff;*/
/* }*/
/* table#t01 th	{*/
/*     background-color: white;*/
/*     color: black;*/
/* }*/
/* #header1 {   */
/*     font-family: "Open Sans", Arial, sans-serif;*/
/*     color: #337ab7;*/
/* }*/
/* */
/* #header2 {   */
/*     font-family: "Open Sans", Arial, sans-serif;*/
/*     color: #555555;*/
/* }*/
/* </style>*/
/* */
/* <h3 id="header1"> Universidad de Carabobo <br> Facultad Experimental de Ciencias y Tecnología </h3>*/
/* <h5 id="header2"> Reporte de Coordinadores en Servicio Comunitario.  Periodo: {{periodo}}. Departamento: {{departamento}}</h5>*/
/* */
/*  		<table id="t01">   */
/*             <tr>*/
/*               <th>Nombre</th>*/
/*               <th>Apellido</th>*/
/*               <th>Perfil</th>              */
/*               {# <th>Proyecto</th> #}*/
/*             </tr>*/
/*             {% set i = 0 %}*/
/*             {% for proyecto in c_proyecto %}*/
/*               <tr>*/
/*                 <td>{{ proyecto.nombre }}</td>*/
/*                 <td>{{ proyecto.apellido }}</td>                     */
/*                 <td>{{ proyecto.perfil }}</td>                           */
/* */
/*                 {# */
/*                   {% set j = 0 %}*/
/*                   {% for proy in proyectos %}*/
/* */
/*                     {% if i == j %} */
/* */
/*                         <td>  */
/*                         {% for p in proy %}*/
/*                           {% if p is empty %} */
/*                              no aplica */
/*                           {% else %}*/
/*                              {{ p.nombre }} <br>*/
/*                           {% endif %}*/
/*                         {% endfor %}*/
/*                         </td> */
/* */
/*                     {% endif %}    */
/* */
/*                     {% set j = j + 1 %}*/
/*                   {% endfor %}*/
/*                 #} */
/* */
/*                   {% set i = i + 1 %}*/
/* */
/*               </tr> */
/*             {% endfor %}*/
/*             {% set i = 0 %}*/
/*             {% for suplente in c_suplente %}*/
/*               <tr>*/
/*                 <td>{{ suplente.nombre }}</td>*/
/*                 <td>{{ suplente.apellido }}</td>                     */
/*                 <td>{{ suplente.perfil }}</td>                           */
/* */
/*                 {# */
/*                   {% set j = 0 %}*/
/*                   {% for proy in suplentes %}*/
/* */
/*                     {% if i == j %} */
/*                         <td> */
/*                         {% for p in proy %}*/
/*                           {% if p is empty %} */
/*                              no aplica */
/*                           {% else %}*/
/*                              {{ p.nombre }} <br>*/
/*                           {% endif %}*/
/*                         {% endfor %} */
/*                         </td>*/
/* */
/*                     {% endif %}     */
/* */
/*                     {% set j = j + 1 %}*/
/*                   {% endfor %}*/
/*                 #} */
/* */
/*                   {% set i = i + 1 %}*/
/* */
/*               </tr> */
/*             {% endfor %}                        */
/*         </table> */
/* {% endblock %}*/
