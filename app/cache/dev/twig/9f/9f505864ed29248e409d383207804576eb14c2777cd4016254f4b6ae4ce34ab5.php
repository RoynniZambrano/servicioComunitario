<?php

/* TesisAdminBundle:Reports:reports4_pdf.html.twig */
class __TwigTemplate_17c935454a2594f33cf98f3854beec50f0e0c2fc1117fac361f3d784c50eea81 extends Twig_Template
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
              <th>Correo</th>
              <th>Rol</th>              
              <th>Proyecto</th>
            </tr>
            ";
        // line 56
        $context["i"] = 0;
        // line 57
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["c_proyecto"]) ? $context["c_proyecto"] : $this->getContext($context, "c_proyecto")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
            // line 58
            echo "              <tr>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "apellido", array()), "html", null, true);
            echo "</td>                    
                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "correo", array()), "html", null, true);
            echo "</td> 
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "rol", array()), "html", null, true);
            echo "</td>                           

                  ";
            // line 64
            $context["j"] = 0;
            // line 65
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
            foreach ($context['_seq'] as $context["_key"] => $context["proy"]) {
                // line 66
                echo "
                    ";
                // line 67
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")))) {
                    echo " 

                        ";
                    // line 69
                    if (twig_test_empty($context["proy"])) {
                        echo " 
                          <td> no aplica </td>
                        ";
                    } else {
                        // line 72
                        echo "                          <td> ";
                        echo twig_escape_filter($this->env, $context["proy"], "html", null, true);
                        echo " </td>
                        ";
                    }
                    // line 74
                    echo "                    ";
                }
                echo "    

                    ";
                // line 76
                $context["j"] = ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) + 1);
                // line 77
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proy'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "
                  ";
            // line 79
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 80
            echo "
              </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "            ";
        $context["i"] = 0;
        // line 84
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["c_suplente"]) ? $context["c_suplente"] : $this->getContext($context, "c_suplente")));
        foreach ($context['_seq'] as $context["_key"] => $context["suplente"]) {
            // line 85
            echo "              <tr>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["suplente"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["suplente"], "apellido", array()), "html", null, true);
            echo "</td>                    
                <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["suplente"], "correo", array()), "html", null, true);
            echo "</td> 
                <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["suplente"], "rol", array()), "html", null, true);
            echo "</td>                           

                  ";
            // line 91
            $context["j"] = 0;
            // line 92
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["suplentes"]) ? $context["suplentes"] : $this->getContext($context, "suplentes")));
            foreach ($context['_seq'] as $context["_key"] => $context["proy"]) {
                // line 93
                echo "
                    ";
                // line 94
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")))) {
                    echo " 

                        ";
                    // line 96
                    if (twig_test_empty($context["proy"])) {
                        echo " 
                          <td> no aplica </td>
                        ";
                    } else {
                        // line 99
                        echo "                          <td> ";
                        echo twig_escape_filter($this->env, $context["proy"], "html", null, true);
                        echo " </td>
                        ";
                    }
                    // line 101
                    echo "                    ";
                }
                echo "    

                    ";
                // line 103
                $context["j"] = ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) + 1);
                // line 104
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proy'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "
                  ";
            // line 106
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 107
            echo "
              </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suplente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
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
        return array (  251 => 109,  243 => 107,  241 => 106,  238 => 105,  232 => 104,  230 => 103,  224 => 101,  218 => 99,  212 => 96,  207 => 94,  204 => 93,  199 => 92,  197 => 91,  192 => 89,  188 => 88,  184 => 87,  180 => 86,  177 => 85,  172 => 84,  169 => 83,  161 => 80,  159 => 79,  156 => 78,  150 => 77,  148 => 76,  142 => 74,  136 => 72,  130 => 69,  125 => 67,  122 => 66,  117 => 65,  115 => 64,  110 => 62,  106 => 61,  102 => 60,  98 => 59,  95 => 58,  90 => 57,  88 => 56,  73 => 46,  31 => 6,  28 => 4,  11 => 2,);
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
/*               <th>Correo</th>*/
/*               <th>Rol</th>              */
/*               <th>Proyecto</th>*/
/*             </tr>*/
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
/*                           <td> no aplica </td>*/
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
/*                           <td> no aplica </td>*/
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
