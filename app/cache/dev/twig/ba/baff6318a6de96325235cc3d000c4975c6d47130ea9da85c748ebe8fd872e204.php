<?php

/* TesisAdminBundle:Reports:reports5_pdf.html.twig */
class __TwigTemplate_2fb353156d15019a4c00d3a426a992963cb9b80b7929fa40716b2bcb2619b25f extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "html", null, true);
        echo ". Departamento: ";
        echo twig_escape_filter($this->env, (isset($context["departamento"]) ? $context["departamento"] : $this->getContext($context, "departamento")), "html", null, true);
        echo "</h5>

 \t\t<table id=\"t01\">   
            <tr>
              <th>Nombre</th>
             ";
        // line 54
        echo "              <th>Tutores</th>
            </tr>
            ";
        // line 56
        $context["i"] = 0;
        // line 57
        echo " \t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
            // line 58
            echo "\t            <tr>
\t            \t<td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "nombre", array()), "html", null, true);
            echo "</td>              \t
\t            ";
            // line 62
            echo "
                  ";
            // line 63
            $context["j"] = 0;
            // line 64
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tutores"]) ? $context["tutores"] : $this->getContext($context, "tutores")));
            foreach ($context['_seq'] as $context["_key"] => $context["tutor"]) {
                // line 65
                echo "
                    ";
                // line 66
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")))) {
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
                $context["j"] = ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) + 1);
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
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
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
        return array (  180 => 89,  172 => 86,  170 => 85,  167 => 84,  161 => 83,  159 => 82,  153 => 80,  148 => 77,  137 => 75,  134 => 74,  130 => 73,  126 => 71,  120 => 68,  115 => 66,  112 => 65,  107 => 64,  105 => 63,  102 => 62,  98 => 59,  95 => 58,  90 => 57,  88 => 56,  84 => 54,  74 => 47,  31 => 6,  28 => 4,  11 => 2,);
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
/*              {# <th>Coordinador proyecto</th>*/
/*               <th>Coordinador suplente </th> #}*/
/*               <th>Tutores</th>*/
/*             </tr>*/
/*             {% set i = 0 %}*/
/*  			{% for proyecto in proyectos %}*/
/* 	            <tr>*/
/* 	            	<td>{{ proyecto.nombre }}</td>              	*/
/* 	            {#	<td>{{ proyecto.coordinador.nombre }}</td>*/
/*                 <td>{{ proyecto.coordSuplente.nombre }}</td> #}*/
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