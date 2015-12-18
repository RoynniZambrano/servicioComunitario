<?php

/* TesisAdminBundle:Reports:reports1_pdf.html.twig */
class __TwigTemplate_fabbc7dd8e057598d259a0437a7c60f9db6e7dbaae499947bde62c9ba10273a5 extends Twig_Template
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
</style>


<h4> Reporte de Estudiantes Inscritos.  Periodo:";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["periodo"]) ? $context["periodo"] : null), "html", null, true);
        echo "</h4>
 \t\t<table id=\"t01\">   
            <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Cedula</th>
              <th>Correo</th>
              <th>Proyecto</th>
              <th>Tutor</th>
            </tr>
 \t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estudiantes"]) ? $context["estudiantes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["estudiante"]) {
            // line 48
            echo "\t            <tr>
\t            \t<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "nombre", array()), "html", null, true);
            echo "</td>
\t            \t<td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "apellido", array()), "html", null, true);
            echo "</td>                    
\t            \t<td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "cedula", array()), "html", null, true);
            echo "</td>
\t            \t<td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "correo", array()), "html", null, true);
            echo "</td>
\t            \t<td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["estudiante"], "proyectoProyecto", array()), "nombre", array()), "html", null, true);
            echo "</td>\t            \t
\t            \t<td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["estudiante"], "usuarioUsuario", array()), "nombre", array()), "html", null, true);
            echo "</td>
\t            </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estudiante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
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
        return array (  113 => 57,  104 => 54,  100 => 53,  96 => 52,  92 => 51,  88 => 50,  84 => 49,  81 => 48,  77 => 47,  64 => 37,  31 => 6,  28 => 4,  11 => 2,);
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
/* <h4> Reporte de Estudiantes Inscritos.  Periodo:{{periodo}}</h4>*/
/*  		<table id="t01">   */
/*             <tr>*/
/*               <th>Nombre</th>*/
/*               <th>Apellido</th>*/
/*               <th>Cedula</th>*/
/*               <th>Correo</th>*/
/*               <th>Proyecto</th>*/
/*               <th>Tutor</th>*/
/*             </tr>*/
/*  			{% for estudiante in estudiantes %}*/
/* 	            <tr>*/
/* 	            	<td>{{ estudiante.nombre }}</td>*/
/* 	            	<td>{{ estudiante.apellido }}</td>                    */
/* 	            	<td>{{ estudiante.cedula }}</td>*/
/* 	            	<td>{{ estudiante.correo }}</td>*/
/* 	            	<td>{{ estudiante.proyectoProyecto.nombre }}</td>	            	*/
/* 	            	<td>{{ estudiante.usuarioUsuario.nombre }}</td>*/
/* 	            </tr> */
/*             {% endfor %}*/
/*         </table> */
/* {% endblock %}*/
