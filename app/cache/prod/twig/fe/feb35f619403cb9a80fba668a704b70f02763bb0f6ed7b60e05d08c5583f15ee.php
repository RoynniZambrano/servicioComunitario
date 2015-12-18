<?php

/* TesisAdminBundle:Reports:reports4_pdf.html.twig */
class __TwigTemplate_805be9c6161c0bba1a26d8a29404fe3f3964ee13fd71897532703ef5ddcc9049 extends Twig_Template
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
</style>


<h4> Reporte de Coordinadores </h4>
 \t\t<table id=\"t01\">   
            <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Correo</th>
              <th>Rol</th>              
              <th>Proyecto</th>
            </tr>
 \t\t\t      ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["c_extension"]) ? $context["c_extension"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 47
            echo "\t            <tr>
\t            \t<td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["extension"], "nombre", array()), "html", null, true);
            echo "</td>
\t            \t<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["extension"], "apellido", array()), "html", null, true);
            echo "</td>                    
\t            \t<td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["extension"], "correo", array()), "html", null, true);
            echo "</td>  
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["extension"], "rol", array()), "html", null, true);
            echo "</td>                         \t
\t            \t<td>Todos</td>
\t            </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            ";
        $context["i"] = 0;
        // line 56
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["c_proyecto"]) ? $context["c_proyecto"] : null));
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "correo", array()), "html", null, true);
            echo "</td> 
                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "rol", array()), "html", null, true);
            echo "</td>                           

                  ";
            // line 63
            $context["j"] = 0;
            // line 64
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["proy"]) {
                // line 65
                echo "
                    ";
                // line 66
                if (((isset($context["i"]) ? $context["i"] : null) == (isset($context["j"]) ? $context["j"] : null))) {
                    echo " 

                        ";
                    // line 68
                    if (twig_test_empty($context["proy"])) {
                        echo " 
                          <td> ninguno</td>
                        ";
                    } else {
                        // line 71
                        echo "                          <td> ";
                        echo twig_escape_filter($this->env, $context["proy"], "html", null, true);
                        echo " </td>
                        ";
                    }
                    // line 73
                    echo "                    ";
                }
                echo "    

                    ";
                // line 75
                $context["j"] = ((isset($context["j"]) ? $context["j"] : null) + 1);
                // line 76
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proy'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "
                  ";
            // line 78
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 79
            echo "
              </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "            ";
        $context["i"] = 0;
        // line 83
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["c_suplente"]) ? $context["c_suplente"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["suplente"]) {
            // line 84
            echo "              <tr>
                <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["suplente"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["suplente"], "apellido", array()), "html", null, true);
            echo "</td>                    
                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["suplente"], "correo", array()), "html", null, true);
            echo "</td> 
                <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["suplente"], "rol", array()), "html", null, true);
            echo "</td>                           

                  ";
            // line 90
            $context["j"] = 0;
            // line 91
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["suplentes"]) ? $context["suplentes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["proy"]) {
                // line 92
                echo "
                    ";
                // line 93
                if (((isset($context["i"]) ? $context["i"] : null) == (isset($context["j"]) ? $context["j"] : null))) {
                    echo " 

                        ";
                    // line 95
                    if (twig_test_empty($context["proy"])) {
                        echo " 
                          <td> ninguno</td>
                        ";
                    } else {
                        // line 98
                        echo "                          <td> ";
                        echo twig_escape_filter($this->env, $context["proy"], "html", null, true);
                        echo " </td>
                        ";
                    }
                    // line 100
                    echo "                    ";
                }
                echo "    

                    ";
                // line 102
                $context["j"] = ((isset($context["j"]) ? $context["j"] : null) + 1);
                // line 103
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proy'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "
                  ";
            // line 105
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 106
            echo "
              </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suplente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
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
        return array (  266 => 108,  258 => 106,  256 => 105,  253 => 104,  247 => 103,  245 => 102,  239 => 100,  233 => 98,  227 => 95,  222 => 93,  219 => 92,  214 => 91,  212 => 90,  207 => 88,  203 => 87,  199 => 86,  195 => 85,  192 => 84,  187 => 83,  184 => 82,  176 => 79,  174 => 78,  171 => 77,  165 => 76,  163 => 75,  157 => 73,  151 => 71,  145 => 68,  140 => 66,  137 => 65,  132 => 64,  130 => 63,  125 => 61,  121 => 60,  117 => 59,  113 => 58,  110 => 57,  105 => 56,  102 => 55,  92 => 51,  88 => 50,  84 => 49,  80 => 48,  77 => 47,  73 => 46,  31 => 6,  28 => 4,  11 => 2,);
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
/* <h4> Reporte de Coordinadores </h4>*/
/*  		<table id="t01">   */
/*             <tr>*/
/*               <th>Nombre</th>*/
/*               <th>Apellido</th>*/
/*               <th>Correo</th>*/
/*               <th>Rol</th>              */
/*               <th>Proyecto</th>*/
/*             </tr>*/
/*  			      {% for extension in c_extension %}*/
/* 	            <tr>*/
/* 	            	<td>{{ extension.nombre }}</td>*/
/* 	            	<td>{{ extension.apellido }}</td>                    */
/* 	            	<td>{{ extension.correo }}</td>  */
/*                 <td>{{ extension.rol }}</td>                         	*/
/* 	            	<td>Todos</td>*/
/* 	            </tr> */
/*             {% endfor %}*/
/*             {% set i = 0 %}*/
/*             {% for proyecto in c_proyecto %}*/
/*               <tr>*/
/*                 <td>{{ proyecto.nombre }}</td>*/
/*                 <td>{{ proyecto.apellido }}</td>                    */
/*                 <td>{{ proyecto.correo }}</td> */
/*                 <td>{{ proyecto.rol }}</td>                           */
/* */
/*                   {% set j = 0 %}*/
/*                   {% for proy in proyectos %}*/
/* */
/*                     {% if i == j %} */
/* */
/*                         {% if proy is empty %} */
/*                           <td> ninguno</td>*/
/*                         {% else %}*/
/*                           <td> {{ proy }} </td>*/
/*                         {% endif %}*/
/*                     {% endif %}    */
/* */
/*                     {% set j = j + 1 %}*/
/*                   {% endfor %}*/
/* */
/*                   {% set i = i + 1 %}*/
/* */
/*               </tr> */
/*             {% endfor %}*/
/*             {% set i = 0 %}*/
/*             {% for suplente in c_suplente %}*/
/*               <tr>*/
/*                 <td>{{ suplente.nombre }}</td>*/
/*                 <td>{{ suplente.apellido }}</td>                    */
/*                 <td>{{ suplente.correo }}</td> */
/*                 <td>{{ suplente.rol }}</td>                           */
/* */
/*                   {% set j = 0 %}*/
/*                   {% for proy in suplentes %}*/
/* */
/*                     {% if i == j %} */
/* */
/*                         {% if proy is empty %} */
/*                           <td> ninguno</td>*/
/*                         {% else %}*/
/*                           <td> {{ proy }} </td>*/
/*                         {% endif %}*/
/*                     {% endif %}    */
/* */
/*                     {% set j = j + 1 %}*/
/*                   {% endfor %}*/
/* */
/*                   {% set i = i + 1 %}*/
/* */
/*               </tr> */
/*             {% endfor %}                        */
/*         </table> */
/* {% endblock %}*/
