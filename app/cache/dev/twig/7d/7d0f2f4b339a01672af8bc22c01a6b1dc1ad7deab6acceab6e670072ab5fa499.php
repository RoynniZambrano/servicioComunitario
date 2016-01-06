<?php

/* TesisAdminBundle:Reports:reports5_pdf.html.twig */
class __TwigTemplate_55fd15f4dccd70d2edebe737631ff12acf6fba0bed15b3e46418bc891d12a472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "TesisAdminBundle:Reports:reports5_pdf.html.twig", 2);
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
<h5 id=\"header2\"> Reporte de Proyectos de Servicio Comunitario.  Periodo: ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["periodo"]) ? $context["periodo"] : null), "html", null, true);
        echo ". Departamento: ";
        echo twig_escape_filter($this->env, (isset($context["departamento"]) ? $context["departamento"] : null), "html", null, true);
        echo "</h5>

 \t\t<table id=\"t01\">   
            <tr>
              <th>Nombre</th>
              <th>Coordinador proyecto</th>
              <th>Coordinador suplente </th>
              <th>Tutores</th>
            </tr>
            ";
        // line 56
        $context["i"] = 0;
        // line 57
        echo " \t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
            // line 58
            echo "\t            <tr>
\t            \t<td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "nombre", array()), "html", null, true);
            echo "</td>              \t
\t            \t<td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proyecto"], "coordinador", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proyecto"], "coordSuplente", array()), "nombre", array()), "html", null, true);
            echo "</td>

                  ";
            // line 63
            $context["j"] = 0;
            // line 64
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tutores"]) ? $context["tutores"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tutor"]) {
                // line 65
                echo "
                    ";
                // line 66
                if (((isset($context["i"]) ? $context["i"] : null) == (isset($context["j"]) ? $context["j"] : null))) {
                    echo " 

                        ";
                    // line 68
                    if (twig_test_empty($context["tutor"])) {
                        echo " 
                          <td> no aplica</td>
                        ";
                    } else {
                        // line 71
                        echo "
                          <td>
                          ";
                        // line 73
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["tutor"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["tut"]) {
                            // line 74
                            echo "
                          ";
                            // line 75
                            echo twig_escape_filter($this->env, $this->getAttribute($context["tut"], "nombre", array()), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["tut"], "apellido", array()), "html", null, true);
                            echo " <br>

                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tut'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 77
                        echo " 
                          </td>
                        ";
                    }
                    // line 80
                    echo "                    ";
                }
                echo "    

                    ";
                // line 82
                $context["j"] = ((isset($context["j"]) ? $context["j"] : null) + 1);
                // line 83
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "
                  ";
            // line 85
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 86
            echo "
\t            </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "        </table> 
";
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Reports:reports5_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 89,  178 => 86,  176 => 85,  173 => 84,  167 => 83,  165 => 82,  159 => 80,  154 => 77,  143 => 75,  140 => 74,  136 => 73,  132 => 71,  126 => 68,  121 => 66,  118 => 65,  113 => 64,  111 => 63,  106 => 61,  102 => 60,  98 => 59,  95 => 58,  90 => 57,  88 => 56,  74 => 47,  31 => 6,  28 => 4,  11 => 2,);
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
/* */
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
/* <h5 id="header2"> Reporte de Proyectos de Servicio Comunitario.  Periodo: {{periodo}}. Departamento: {{departamento}}</h5>*/
/* */
/*  		<table id="t01">   */
/*             <tr>*/
/*               <th>Nombre</th>*/
/*               <th>Coordinador proyecto</th>*/
/*               <th>Coordinador suplente </th>*/
/*               <th>Tutores</th>*/
/*             </tr>*/
/*             {% set i = 0 %}*/
/*  			{% for proyecto in proyectos %}*/
/* 	            <tr>*/
/* 	            	<td>{{ proyecto.nombre }}</td>              	*/
/* 	            	<td>{{ proyecto.coordinador.nombre }}</td>*/
/*                 <td>{{ proyecto.coordSuplente.nombre }}</td>*/
/* */
/*                   {% set j = 0 %}*/
/*                   {% for tutor in tutores %}*/
/* */
/*                     {% if i == j %} */
/* */
/*                         {% if tutor is empty %} */
/*                           <td> no aplica</td>*/
/*                         {% else %}*/
/* */
/*                           <td>*/
/*                           {% for tut in tutor %}*/
/* */
/*                           {{ tut.nombre }}_{{ tut.apellido }} <br>*/
/* */
/*                           {% endfor %} */
/*                           </td>*/
/*                         {% endif %}*/
/*                     {% endif %}    */
/* */
/*                     {% set j = j + 1 %}*/
/*                   {% endfor %}*/
/* */
/*                   {% set i = i + 1 %}*/
/* */
/* 	            </tr> */
/*             {% endfor %}*/
/*         </table> */
/* {% endblock %}*/
