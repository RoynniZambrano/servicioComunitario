<?php

/* TesisAdminBundle:Reports:reports1_pdf.html.twig */
class __TwigTemplate_ebd6695f86494fde1d6d2960a650e1c5b63d2f85e659c2fdd02d2c1867121935 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "TesisAdminBundle:Reports:reports1_pdf.html.twig", 2);
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
<h5 id=\"header2\"> Reporte de Estudiantes Inscritos en Servicio Comunitario.  Periodo: ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "html", null, true);
        echo ". Departamento: ";
        echo twig_escape_filter($this->env, (isset($context["departamento"]) ? $context["departamento"] : $this->getContext($context, "departamento")), "html", null, true);
        echo "</h5>

 \t\t<table id=\"t01\">   
            <tr>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Cedula</th>
              <th>Proyecto</th>
            </tr>
 \t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estudiantes"]) ? $context["estudiantes"] : $this->getContext($context, "estudiantes")));
        foreach ($context['_seq'] as $context["_key"] => $context["estudiante"]) {
            // line 58
            echo "\t            <tr>
\t            \t<td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "nombre", array()), "html", null, true);
            echo "</td>
\t            \t<td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "apellido", array()), "html", null, true);
            echo "</td>                    
\t            \t<td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "cedula", array()), "html", null, true);
            echo "</td>\t            \t
\t            \t<td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "proyecto", array()), "html", null, true);
            echo "</td>
\t            </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estudiante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </table> 
";
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Reports:reports1_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 65,  108 => 62,  104 => 61,  100 => 60,  96 => 59,  93 => 58,  89 => 57,  75 => 48,  31 => 6,  28 => 4,  11 => 2,);
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
/* */
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
/* <h5 id="header2"> Reporte de Estudiantes Inscritos en Servicio Comunitario.  Periodo: {{periodo}}. Departamento: {{departamento}}</h5>*/
/* */
/*  		<table id="t01">   */
/*             <tr>*/
/*               <th>Nombres</th>*/
/*               <th>Apellidos</th>*/
/*               <th>Cedula</th>*/
/*               <th>Proyecto</th>*/
/*             </tr>*/
/*  			{% for estudiante in estudiantes %}*/
/* 	            <tr>*/
/* 	            	<td>{{ estudiante.nombre }}</td>*/
/* 	            	<td>{{ estudiante.apellido }}</td>                    */
/* 	            	<td>{{ estudiante.cedula }}</td>	            	*/
/* 	            	<td>{{ estudiante.proyecto }}</td>*/
/* 	            </tr> */
/*             {% endfor %}*/
/*         </table> */
/* {% endblock %}*/
