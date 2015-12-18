<?php

/* TesisAdminBundle:Reports:reports3_pdf.html.twig */
class __TwigTemplate_86fe17c66a486f696898037610a5f0b1fe8ecaf5ebd38951f131c2dd6bc07a78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "TesisAdminBundle:Reports:reports3_pdf.html.twig", 2);
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
</style>


<h4> Reporte de Tutores </h4>
 \t\t<table id=\"t01\">   
            <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Correo</th>
              <th>Rol</th>              
              <th>Proyectos</th>
              <th>Estudiantes</th>
            </tr>

            ";
        // line 48
        $context["i"] = 0;
        // line 49
        echo " \t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tutores"]) ? $context["tutores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tutor"]) {
            // line 50
            echo "\t            <tr>
\t            \t<td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["tutor"], "nombre", array()), "html", null, true);
            echo "</td>
\t            \t<td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["tutor"], "apellido", array()), "html", null, true);
            echo "</td>                    
\t            \t<td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["tutor"], "correo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["tutor"], "rol", array()), "html", null, true);
            echo "</td>                


                ";
            // line 57
            $context["k"] = 0;
            // line 58
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
                // line 59
                echo "                  ";
                if (((isset($context["i"]) ? $context["i"] : null) == (isset($context["k"]) ? $context["k"] : null))) {
                    echo " 
                    ";
                    // line 60
                    if (twig_test_empty($context["proyecto"])) {
                        // line 61
                        echo "                      <td> ninguno</td>
                    ";
                    } else {
                        // line 63
                        echo "
                        <td>
                        ";
                        // line 65
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["proyecto"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                            // line 66
                            echo "
                        (";
                            // line 67
                            echo twig_escape_filter($this->env, $this->getAttribute($context["pro"], "nombre", array()), "html", null, true);
                            echo ")

                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 69
                        echo " 
                        </td>

                    ";
                    }
                    // line 73
                    echo "                  ";
                }
                echo " 
                  ";
                // line 74
                $context["k"] = ((isset($context["k"]) ? $context["k"] : null) + 1);
                echo " 
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "


                ";
            // line 79
            $context["j"] = 0;
            // line 80
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["estudiantes"]) ? $context["estudiantes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["estudiante"]) {
                // line 81
                echo "                  ";
                if (((isset($context["i"]) ? $context["i"] : null) == (isset($context["j"]) ? $context["j"] : null))) {
                    echo " 
                      ";
                    // line 82
                    if (twig_test_empty($context["estudiante"])) {
                        echo " 
                        <td> ninguno</td>
                      ";
                    } else {
                        // line 85
                        echo "
                        <td>
                        ";
                        // line 87
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["estudiante"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["estu"]) {
                            // line 88
                            echo "
                        (";
                            // line 89
                            echo twig_escape_filter($this->env, $this->getAttribute($context["estu"], "nombre", array()), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["estu"], "apellido", array()), "html", null, true);
                            echo ")

                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estu'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 91
                        echo " 
                        </td>
                      ";
                    }
                    // line 94
                    echo "                  ";
                }
                echo "    

                  ";
                // line 96
                $context["j"] = ((isset($context["j"]) ? $context["j"] : null) + 1);
                // line 97
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estudiante'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "
                ";
            // line 99
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 100
            echo "
\t            </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "        </table> 
";
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Reports:reports3_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 103,  229 => 100,  227 => 99,  224 => 98,  218 => 97,  216 => 96,  210 => 94,  205 => 91,  194 => 89,  191 => 88,  187 => 87,  183 => 85,  177 => 82,  172 => 81,  167 => 80,  165 => 79,  160 => 76,  152 => 74,  147 => 73,  141 => 69,  132 => 67,  129 => 66,  125 => 65,  121 => 63,  117 => 61,  115 => 60,  110 => 59,  105 => 58,  103 => 57,  97 => 54,  93 => 53,  89 => 52,  85 => 51,  82 => 50,  77 => 49,  75 => 48,  31 => 6,  28 => 4,  11 => 2,);
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
/* </style>*/
/* */
/* */
/* <h4> Reporte de Tutores </h4>*/
/*  		<table id="t01">   */
/*             <tr>*/
/*               <th>Nombre</th>*/
/*               <th>Apellido</th>*/
/*               <th>Correo</th>*/
/*               <th>Rol</th>              */
/*               <th>Proyectos</th>*/
/*               <th>Estudiantes</th>*/
/*             </tr>*/
/* */
/*             {% set i = 0 %}*/
/*  			{% for tutor in tutores %}*/
/* 	            <tr>*/
/* 	            	<td>{{ tutor.nombre }}</td>*/
/* 	            	<td>{{ tutor.apellido }}</td>                    */
/* 	            	<td>{{ tutor.correo }}</td>*/
/*                 <td>{{ tutor.rol }}</td>                */
/* */
/* */
/*                 {% set k = 0 %}*/
/*                 {% for proyecto in proyectos %}*/
/*                   {% if i == k %} */
/*                     {% if proyecto is empty %}*/
/*                       <td> ninguno</td>*/
/*                     {% else %}*/
/* */
/*                         <td>*/
/*                         {% for pro in proyecto %}*/
/* */
/*                         ({{ pro.nombre }})*/
/* */
/*                         {% endfor %} */
/*                         </td>*/
/* */
/*                     {% endif %}*/
/*                   {% endif %} */
/*                   {% set k = k + 1 %} */
/*                 {% endfor %}*/
/* */
/* */
/* */
/*                 {% set j = 0 %}*/
/*                 {% for estudiante in estudiantes %}*/
/*                   {% if i == j %} */
/*                       {% if estudiante is empty %} */
/*                         <td> ninguno</td>*/
/*                       {% else %}*/
/* */
/*                         <td>*/
/*                         {% for estu in estudiante %}*/
/* */
/*                         ({{ estu.nombre }}_{{ estu.apellido }})*/
/* */
/*                         {% endfor %} */
/*                         </td>*/
/*                       {% endif %}*/
/*                   {% endif %}    */
/* */
/*                   {% set j = j + 1 %}*/
/*                 {% endfor %}*/
/* */
/*                 {% set i = i + 1 %}*/
/* */
/* 	            </tr> */
/*             {% endfor %}*/
/*         </table> */
/* {% endblock %}*/
