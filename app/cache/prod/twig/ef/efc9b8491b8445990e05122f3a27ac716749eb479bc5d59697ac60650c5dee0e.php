<?php

/* TesisAdminBundle:Reports:reports5_pdf.html.twig */
class __TwigTemplate_9d42cf229ab30b5bf08b38a8c5dbe53fbc5aa84c9c06d4216c9ca33e12035d83 extends Twig_Template
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
</style>


<h4> Reporte de Proyectos </h4>
 \t\t<table id=\"t01\">   
            <tr>
              <th>Nombre</th>
              <th>Coordinador proyecto</th>
              <th>Coordinador suplente </th>
              <th>Tutores</th>
            </tr>
            ";
        // line 45
        $context["i"] = 0;
        // line 46
        echo " \t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
            // line 47
            echo "\t            <tr>
\t            \t<td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "nombre", array()), "html", null, true);
            echo "</td>              \t
\t            \t<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proyecto"], "coordinador", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proyecto"], "coordSuplente", array()), "nombre", array()), "html", null, true);
            echo "</td>

                  ";
            // line 52
            $context["j"] = 0;
            // line 53
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tutores"]) ? $context["tutores"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tutor"]) {
                // line 54
                echo "
                    ";
                // line 55
                if (((isset($context["i"]) ? $context["i"] : null) == (isset($context["j"]) ? $context["j"] : null))) {
                    echo " 

                        ";
                    // line 57
                    if (twig_test_empty($context["tutor"])) {
                        echo " 
                          <td> ninguno</td>
                        ";
                    } else {
                        // line 60
                        echo "
                          <td>
                          ";
                        // line 62
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["tutor"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["tut"]) {
                            // line 63
                            echo "
                          (";
                            // line 64
                            echo twig_escape_filter($this->env, $this->getAttribute($context["tut"], "nombre", array()), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["tut"], "apellido", array()), "html", null, true);
                            echo ")

                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tut'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 66
                        echo " 
                          </td>
                        ";
                    }
                    // line 69
                    echo "                    ";
                }
                echo "    

                    ";
                // line 71
                $context["j"] = ((isset($context["j"]) ? $context["j"] : null) + 1);
                // line 72
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "
                  ";
            // line 74
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 75
            echo "
\t            </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
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
        return array (  170 => 78,  162 => 75,  160 => 74,  157 => 73,  151 => 72,  149 => 71,  143 => 69,  138 => 66,  127 => 64,  124 => 63,  120 => 62,  116 => 60,  110 => 57,  105 => 55,  102 => 54,  97 => 53,  95 => 52,  90 => 50,  86 => 49,  82 => 48,  79 => 47,  74 => 46,  72 => 45,  31 => 6,  28 => 4,  11 => 2,);
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
/* <h4> Reporte de Proyectos </h4>*/
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
/*                           <td> ninguno</td>*/
/*                         {% else %}*/
/* */
/*                           <td>*/
/*                           {% for tut in tutor %}*/
/* */
/*                           ({{ tut.nombre }}_{{ tut.apellido }})*/
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
