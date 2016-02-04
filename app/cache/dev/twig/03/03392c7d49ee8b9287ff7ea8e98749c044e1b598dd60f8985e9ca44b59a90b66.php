<?php

/* TesisAdminBundle:Diario:pdf_diario.html.twig */
class __TwigTemplate_944039e2e2938d29db5106cb8b32a7dcad4d5d8a3fbb3aedaa1f7cd5d90dc163 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "TesisAdminBundle:Diario:pdf_diario.html.twig", 2);
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
        echo "<style type=\"text/css\">

.page {
    margin-left: 30px;
    margin-right: 20px;
    font-family: Arial, \"Open Sans\", sans-serif; 
    /*page-break-after: always;*/    
}

.parrafo{
    margin-top: 10px;
    font-size: 15px;
    line-height: 24px;
    text-align: justify;
    text-align: left;
}

#header1 {   
    color: #337ab7;
    font-size: 18px;  
}

#header2 {   
    color: black;
    text-align: center;
    font-size: 18px;   
}

#header3 {   
    font-family: \"Open Sans\", Arial, sans-serif;
    color: #555555;
}

</style>


<div class=\"page\">
<h3 id=\"header1\"> Universidad de Carabobo <br> Facultad Experimental de Ciencias y Tecnología </h3>

<h2 id=\"header2\"> <br> Diario de Campo <br></h2>

<div class=\"parrafo\">
 <pr > <b>Nombre:</b>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "apellido", array()), "html", null, true);
        echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <b>CI:</b>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "cedula", array()), "html", null, true);
        echo "  </pr> 
<br>
</div>

<div class=\"parrafo\">
<pr > <b>Fecha:</b> ";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["diario"]) ? $context["diario"] : $this->getContext($context, "diario")), "fecha", array()), "d-m-Y"), "html", null, true);
        echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b> Hora Inicio:</b>
";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diario"]) ? $context["diario"] : $this->getContext($context, "diario")), "horaInicio", array()), "html", null, true);
        echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b> Hora Culminación:</b> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diario"]) ? $context["diario"] : $this->getContext($context, "diario")), "HoraFin", array()), "html", null, true);
        echo "</pr>
<br>
</div>

<div class=\"parrafo\">
<pr > <b>Proyecto:</b> ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["diario"]) ? $context["diario"] : $this->getContext($context, "diario")), "proyectoProyecto", array()), "nombre", array()), "html", null, true);
        echo " &nbsp;&nbsp; </pr>
<br>
</div>

<div class=\"parrafo\">
<pr >  <b>Tutor:</b> ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tutor"]) ? $context["tutor"] : $this->getContext($context, "tutor")), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tutor"]) ? $context["tutor"] : $this->getContext($context, "tutor")), "apellido", array()), "html", null, true);
        echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> Firma del Tutor:</b> _____________</pr>
<br>
</div>

<div class=\"parrafo\">
<pr > <b>Periodo:</b> 
  ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "periodo", array()), "html", null, true);
        echo " &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
  <b> Total horas:</b>
";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diario"]) ? $context["diario"] : $this->getContext($context, "diario")), "horas", array()), "html", null, true);
        echo " &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
<b> Total personas:</b>
 ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diario"]) ? $context["diario"] : $this->getContext($context, "diario")), "personas", array()), "html", null, true);
        echo "</pr>
<br>
</div>

<div class=\"parrafo\">
<pr > 
  <b>Niños:</b> 
  ";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diario"]) ? $context["diario"] : $this->getContext($context, "diario")), "ninos", array()), "html", null, true);
        echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  <b> Adultos:</b>  
  ";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diario"]) ? $context["diario"] : $this->getContext($context, "diario")), "adultos", array()), "html", null, true);
        echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <b> Tercera edad:</b> 
  ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diario"]) ? $context["diario"] : $this->getContext($context, "diario")), "terceraEdad", array()), "html", null, true);
        echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <b> Discapacidad:</b> 
  ";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diario"]) ? $context["diario"] : $this->getContext($context, "diario")), "discapacidad", array()), "html", null, true);
        echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</pr>
<br>
</div>

  <div class=\"parrafo\">
    <br>
    <b> 1. DESCRIPCIÓN: </b>  
      ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diario"]) ? $context["diario"] : $this->getContext($context, "diario")), "descripcion", array()), "html", null, true);
        echo "
  </div>  

  <div class=\"parrafo\">
    <br>
    <b> 2. PLANO PERSONAL: </b>  
      ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diario"]) ? $context["diario"] : $this->getContext($context, "diario")), "personal", array()), "html", null, true);
        echo "
  </div>  

  <div class=\"parrafo\">
    <br>
    <b> 3. FORTALEZAS: </b>  
      ";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diario"]) ? $context["diario"] : $this->getContext($context, "diario")), "fortalezas", array()), "html", null, true);
        echo "
  </div>  

  <div class=\"parrafo\">
    <br>
    <b> 4. DEBILIDADES : </b>  
      ";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diario"]) ? $context["diario"] : $this->getContext($context, "diario")), "debilidades", array()), "html", null, true);
        echo "
  </div>  

  <div class=\"parrafo\">
    <br>
    <b> 5. CONCLUSIÓN: </b>  
      ";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["diario"]) ? $context["diario"] : $this->getContext($context, "diario")), "conclusion", array()), "html", null, true);
        echo "
  </div>  
      

</div>

";
        // line 146
        echo "
";
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Diario:pdf_diario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 146,  204 => 120,  195 => 114,  186 => 108,  177 => 102,  168 => 96,  157 => 88,  152 => 86,  147 => 84,  142 => 82,  132 => 75,  127 => 73,  122 => 71,  111 => 65,  103 => 60,  93 => 55,  89 => 54,  81 => 49,  75 => 48,  31 => 6,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends '::base.html.twig' %}  */
/* */
/* {% block body -%}*/
/* */
/* <style type="text/css">*/
/* */
/* .page {*/
/*     margin-left: 30px;*/
/*     margin-right: 20px;*/
/*     font-family: Arial, "Open Sans", sans-serif; */
/*     /*page-break-after: always;*//*     */
/* }*/
/* */
/* .parrafo{*/
/*     margin-top: 10px;*/
/*     font-size: 15px;*/
/*     line-height: 24px;*/
/*     text-align: justify;*/
/*     text-align: left;*/
/* }*/
/* */
/* #header1 {   */
/*     color: #337ab7;*/
/*     font-size: 18px;  */
/* }*/
/* */
/* #header2 {   */
/*     color: black;*/
/*     text-align: center;*/
/*     font-size: 18px;   */
/* }*/
/* */
/* #header3 {   */
/*     font-family: "Open Sans", Arial, sans-serif;*/
/*     color: #555555;*/
/* }*/
/* */
/* </style>*/
/* */
/* */
/* <div class="page">*/
/* <h3 id="header1"> Universidad de Carabobo <br> Facultad Experimental de Ciencias y Tecnología </h3>*/
/* */
/* <h2 id="header2"> <br> Diario de Campo <br></h2>*/
/* */
/* <div class="parrafo">*/
/*  <pr > <b>Nombre:</b>{{estudiante.nombre}} {{estudiante.apellido}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*   <b>CI:</b>{{estudiante.cedula}}  </pr> */
/* <br>*/
/* </div>*/
/* */
/* <div class="parrafo">*/
/* <pr > <b>Fecha:</b> {{diario.fecha |date('d-m-Y') }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b> Hora Inicio:</b>*/
/* {{diario.horaInicio}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b> Hora Culminación:</b> {{diario.HoraFin}}</pr>*/
/* <br>*/
/* </div>*/
/* */
/* <div class="parrafo">*/
/* <pr > <b>Proyecto:</b> {{diario.proyectoProyecto.nombre }} &nbsp;&nbsp; </pr>*/
/* <br>*/
/* </div>*/
/* */
/* <div class="parrafo">*/
/* <pr >  <b>Tutor:</b> {{tutor.nombre }} {{tutor.apellido }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> Firma del Tutor:</b> _____________</pr>*/
/* <br>*/
/* </div>*/
/* */
/* <div class="parrafo">*/
/* <pr > <b>Periodo:</b> */
/*   {{estudiante.periodo }} &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; */
/*   <b> Total horas:</b>*/
/* {{diario.horas}} &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; */
/* <b> Total personas:</b>*/
/*  {{diario.personas}}</pr>*/
/* <br>*/
/* </div>*/
/* */
/* <div class="parrafo">*/
/* <pr > */
/*   <b>Niños:</b> */
/*   {{diario.ninos }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; */
/*   <b> Adultos:</b>  */
/*   {{diario.adultos}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*   <b> Tercera edad:</b> */
/*   {{diario.terceraEdad}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*   <b> Discapacidad:</b> */
/*   {{diario.discapacidad}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; */
/* </pr>*/
/* <br>*/
/* </div>*/
/* */
/*   <div class="parrafo">*/
/*     <br>*/
/*     <b> 1. DESCRIPCIÓN: </b>  */
/*       {{ diario.descripcion }}*/
/*   </div>  */
/* */
/*   <div class="parrafo">*/
/*     <br>*/
/*     <b> 2. PLANO PERSONAL: </b>  */
/*       {{ diario.personal }}*/
/*   </div>  */
/* */
/*   <div class="parrafo">*/
/*     <br>*/
/*     <b> 3. FORTALEZAS: </b>  */
/*       {{ diario.fortalezas }}*/
/*   </div>  */
/* */
/*   <div class="parrafo">*/
/*     <br>*/
/*     <b> 4. DEBILIDADES : </b>  */
/*       {{ diario.debilidades }}*/
/*   </div>  */
/* */
/*   <div class="parrafo">*/
/*     <br>*/
/*     <b> 5. CONCLUSIÓN: </b>  */
/*       {{ diario.conclusion }}*/
/*   </div>  */
/*       */
/* */
/* </div>*/
/* */
/* {#*/
/* {{diario.proyectoProyecto.nombre}} <br>*/
/* {{diario.fecha |date('d-m-Y')}} <br>*/
/* {{diario.horaInicio}} <br>*/
/* {{diario.horaFin}} <br>*/
/* {{diario.personas}} <br>*/
/* {{diario.horas}} <br>*/
/* */
/* {{diario.ninos}} <br>*/
/* {{diario.adultos}} <br>*/
/* {{diario.terceraEdad}} <br>*/
/* {{diario.discapacidad}} <br>*/
/* {{diario.descripcion}} <br>*/
/* */
/* {{diario.personal}} <br>*/
/* {{diario.fortalezas}} <br>*/
/* {{diario.debilidades}} <br>*/
/* {{diario.conclusion}} <br>*/
/* {{diario.comunidad}} <br>*/
/* #}*/
/* */
/* {% endblock %}*/
