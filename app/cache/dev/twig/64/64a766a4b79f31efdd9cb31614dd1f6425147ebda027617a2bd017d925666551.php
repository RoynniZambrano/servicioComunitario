<?php

/* TesisAdminBundle:Reports:reports3_pdf.html.twig */
class __TwigTemplate_49e082f69e3cfae36ef218a10d44be76f024ca013ae1b524c9aac1a28e325490 extends Twig_Template
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
<h5 id=\"header2\"> Reporte de Tutores en Servicio Comunitario.  Periodo: ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "html", null, true);
        echo ". Departamento: ";
        echo twig_escape_filter($this->env, (isset($context["departamento"]) ? $context["departamento"] : $this->getContext($context, "departamento")), "html", null, true);
        echo "</h5>

 \t\t<table id=\"t01\">   
            <tr>
              <th>Nombres</th>
              <th>Apellidos</th>            
              <th>Proyectos</th>
              <th>Estudiantes asignados</th>              
            </tr>

            ";
        // line 57
        $context["i"] = 0;
        // line 58
        echo " \t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tutores"]) ? $context["tutores"] : $this->getContext($context, "tutores")));
        foreach ($context['_seq'] as $context["_key"] => $context["tutor"]) {
            // line 59
            echo "\t            <tr>
\t            \t<td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["tutor"], "nombre", array()), "html", null, true);
            echo "</td>
\t            \t<td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["tutor"], "apellido", array()), "html", null, true);
            echo "</td>                                   


                ";
            // line 64
            $context["k"] = 0;
            // line 65
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
            foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
                // line 66
                echo "                  ";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == (isset($context["k"]) ? $context["k"] : $this->getContext($context, "k")))) {
                    echo " 
                    ";
                    // line 67
                    if (twig_test_empty($context["proyecto"])) {
                        // line 68
                        echo "                      <td> no aplica</td>
                    ";
                    } else {
                        // line 70
                        echo "
                        <td>
                        ";
                        // line 72
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["proyecto"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                            // line 73
                            echo "
                        ";
                            // line 74
                            echo twig_escape_filter($this->env, $this->getAttribute($context["pro"], "nombre", array()), "html", null, true);
                            echo " <br>

                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 76
                        echo " 
                        </td>

                    ";
                    }
                    // line 80
                    echo "                  ";
                }
                echo " 
                  ";
                // line 81
                $context["k"] = ((isset($context["k"]) ? $context["k"] : $this->getContext($context, "k")) + 1);
                echo " 
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "


                ";
            // line 86
            $context["j"] = 0;
            // line 87
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["estudiantes"]) ? $context["estudiantes"] : $this->getContext($context, "estudiantes")));
            foreach ($context['_seq'] as $context["_key"] => $context["estudiante"]) {
                // line 88
                echo "                  ";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")))) {
                    echo " 
                      ";
                    // line 89
                    if (twig_test_empty($context["estudiante"])) {
                        echo " 
                        <td> no aplica</td>
                      ";
                    } else {
                        // line 92
                        echo "
                        <td>
                        ";
                        // line 94
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["estudiante"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["estu"]) {
                            // line 95
                            echo "
                        ";
                            // line 96
                            echo twig_escape_filter($this->env, $this->getAttribute($context["estu"], "nombre", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["estu"], "apellido", array()), "html", null, true);
                            echo " <br>

                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estu'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 98
                        echo " 
                        </td>
                      ";
                    }
                    // line 101
                    echo "                  ";
                }
                echo "    

                  ";
                // line 103
                $context["j"] = ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) + 1);
                // line 104
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estudiante'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "
                ";
            // line 106
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 107
            echo "
\t            </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
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
        return array (  243 => 110,  235 => 107,  233 => 106,  230 => 105,  224 => 104,  222 => 103,  216 => 101,  211 => 98,  200 => 96,  197 => 95,  193 => 94,  189 => 92,  183 => 89,  178 => 88,  173 => 87,  171 => 86,  166 => 83,  158 => 81,  153 => 80,  147 => 76,  138 => 74,  135 => 73,  131 => 72,  127 => 70,  123 => 68,  121 => 67,  116 => 66,  111 => 65,  109 => 64,  103 => 61,  99 => 60,  96 => 59,  91 => 58,  89 => 57,  74 => 47,  31 => 6,  28 => 4,  11 => 2,);
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
/* <h5 id="header2"> Reporte de Tutores en Servicio Comunitario.  Periodo: {{periodo}}. Departamento: {{departamento}}</h5>*/
/* */
/*  		<table id="t01">   */
/*             <tr>*/
/*               <th>Nombres</th>*/
/*               <th>Apellidos</th>            */
/*               <th>Proyectos</th>*/
/*               <th>Estudiantes asignados</th>              */
/*             </tr>*/
/* */
/*             {% set i = 0 %}*/
/*  			{% for tutor in tutores %}*/
/* 	            <tr>*/
/* 	            	<td>{{ tutor.nombre }}</td>*/
/* 	            	<td>{{ tutor.apellido }}</td>                                   */
/* */
/* */
/*                 {% set k = 0 %}*/
/*                 {% for proyecto in proyectos %}*/
/*                   {% if i == k %} */
/*                     {% if proyecto is empty %}*/
/*                       <td> no aplica</td>*/
/*                     {% else %}*/
/* */
/*                         <td>*/
/*                         {% for pro in proyecto %}*/
/* */
/*                         {{ pro.nombre }} <br>*/
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
/*                         <td> no aplica</td>*/
/*                       {% else %}*/
/* */
/*                         <td>*/
/*                         {% for estu in estudiante %}*/
/* */
/*                         {{ estu.nombre }} {{ estu.apellido }} <br>*/
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
