<?php

/* TesisAdminBundle:InfoFinal:pdf_final.html.twig */
class __TwigTemplate_f98548e376cdc0d88dd586ddf55c5f6f498d1671f7d006b3713c26bf388bc742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "TesisAdminBundle:InfoFinal:pdf_final.html.twig", 2);
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
    margin-left: 85px;
    margin-right: 55px;
    font-family: Arial, \"Open Sans\", sans-serif; 
    page-break-after: always;    
}

.page_last {
    margin-left: 85px;
    margin-right: 55px;
    font-family: Arial, \"Open Sans\", sans-serif;   
}


.portada{
    /* margin-top: 355px; */
    margin-top: 500px; 
    font-size: 16px;
    line-height: 24px;
    font-family: Arial, \"Open Sans\", sans-serif;
    text-align: center; 
    page-break-after: always;
    margin-left: 80px;
    margin-right: 80px; 

}


.portada_principal{
    margin-top: 60px; 
    font-size: 16px;
    line-height: 25px;
    font-family: Arial, \"Open Sans\", sans-serif;
    text-align: center; 
    page-break-after: always;
    margin-left: 80px;
    margin-right: 80px; 

}

.subtitulo{
    font-size: 10px;
    text-align: center;
}


.parrafo{
    margin-top: 30px;
    font-size: 16px;
    line-height: 28px;
    text-align: justify;
}




table{
\twidth:100%;
\tdisplay: table;
\tmax-width: 100%;
\tfont-family: \"Open Sans\", Arial, sans-serif;
\tfont-size: 11px;
\tline-height: 12px;
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


";
        // line 99
        echo "

<div class=\"portada_principal\">
  
  <div>
  <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('assets')->getAssetUrl("img/uc.jpg")), "html", null, true);
        echo "\" alt=\"some_text\" width=\"95\" height=\"130\">
  </div>

  <pre style=\"font-family:Arial;\"> 
    REPÚBLICA BOLIVARIANA DE VENEZUELA 
      UNIVERSIDAD DE CARABOBO 
FACULTAD EXPERIMENTAL DE CIENCIAS Y TECNOLOGÍA
      DIRECCIÓN DE EXTENSIÓN
  </pre>

  <div style=\"font-family:Arial;\"><b><br>
    INFORME FINAL SERVICIO COMUNITARIO
  </b><br><br><br><br>
  </div>
  
  <div>
  ";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "nombre", array()), "html", null, true);
        echo " <br><br><br>
  </div>
  
  <div>
    <b> Prestador de Servicio Comunitario:</b> <br>
    ";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "apellido", array()), "html", null, true);
        echo " CI:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "cedula", array()), "html", null, true);
        echo " <br><br>
  </div>

  <div>
  <b>Tutor:</b> <br>
  ";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profesor"]) ? $context["profesor"] : $this->getContext($context, "profesor")), "nombre", array()), "html", null, true);
        echo " <br><br>
  </div>

  <div>
  <b> Comunidad Objetivo: </b> <br> 
  ";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "locacion", array()), "html", null, true);
        echo " <br><br>
  </div>

</div>


<div class=\"page\">
  <div class=\"subtitulo\">
    <h2> RESUMEN </h2>
  </div>
  <div class=\"parrafo\">
  ";
        // line 146
        if (twig_test_empty((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")))) {
            // line 147
            echo "      No aplica
  ";
        } else {
            // line 148
            echo " 
      ";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "resumen", array()), "html", null, true);
            echo "
  </div>    
  ";
        }
        // line 152
        echo "</div>

 
<div class=\"page\">
  <div class=\"subtitulo\">
    <h2> PROBLEMA </h2>
  </div>
  <div class=\"parrafo\">
  ";
        // line 160
        if (twig_test_empty((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")))) {
            // line 161
            echo "      No aplica
  ";
        } else {
            // line 162
            echo "   
      ";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "problema", array()), "html", null, true);
            echo "
  </div>  
  ";
        }
        // line 166
        echo "</div>

<div class=\"page\">
  <div class=\"subtitulo\">
  <h2> OBJETIVO GENERAL </h2>
  </div>
  <div class=\"parrafo\">
  ";
        // line 173
        if (twig_test_empty((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")))) {
            // line 174
            echo "      No aplica
  ";
        } else {
            // line 175
            echo "  
    ";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "objetivoG", array()), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 178
        echo " 
  <div class=\"subtitulo\"> 
  <h2> OBJETIVOS ESPECIFÍCOS</h2>
  </div>
  <div class=\"parrafo\">
  ";
        // line 183
        if (twig_test_empty((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")))) {
            // line 184
            echo "      No aplica
  ";
        } else {
            // line 185
            echo "  
    ";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "objetivoE", array()), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 189
        echo "</div>


<div class=\"page\">
  <div class=\"subtitulo\"> 
  <h2> JUSTIFICACIÓN </h2>
  </div>
  <div class=\"parrafo\">
  ";
        // line 197
        if (twig_test_empty((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")))) {
            // line 198
            echo "      No aplica
  ";
        } else {
            // line 199
            echo "  
    ";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "justificacion", array()), "html", null, true);
            echo "
  </div>
  ";
        }
        // line 202
        echo "  
</div>


<div class=\"page\">
  <div class=\"subtitulo\"> 
  <h2> RESULTADOS </h2>
  </div>
  <div class=\"parrafo\">
  ";
        // line 211
        if (twig_test_empty((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")))) {
            // line 212
            echo "      No aplica
  ";
        } else {
            // line 213
            echo "  
    ";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "resultados", array()), "html", null, true);
            echo " <br><br>

      ";
            // line 216
            $context["i"] = 0;
            // line 217
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultados"]) ? $context["resultados"] : $this->getContext($context, "resultados")));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 218
                echo "        <b> Comunidad:</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "comunidad", array()), "html", null, true);
                echo " <br>
       ";
                // line 221
                echo "          <table id=\"t01\">  
            <tr>
              <th>Total Horas </th>
              <th>Toltal personas</th>
              <th>Niños</th>
              <th>Adultos</th>
              <th>Tercera edad</th>
              <th>Discapacidad</th>
            </tr>
            <tr>
              <td>";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "horas", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 232
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "personas", array()), "html", null, true);
                echo "</td>                    
              <td>";
                // line 233
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "ninos", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 234
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "adultos", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 235
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "terceraEdad", array()), "html", null, true);
                echo "</td>               
              <td>";
                // line 236
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "discapacidad", array()), "html", null, true);
                echo "</td>
            </tr> 
        </table> 

        <br>       
        <b>Actividades realizadas en la comunidad:</b><br>
        ";
                // line 242
                $context["j"] = 0;
                // line 243
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["actividades"]) ? $context["actividades"] : $this->getContext($context, "actividades")));
                foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
                    // line 244
                    echo "
          ";
                    // line 245
                    if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")))) {
                        echo " 

              ";
                        // line 247
                        if (twig_test_empty($context["actividad"])) {
                            echo " 
                <td> no aplica  </td>
              ";
                        } else {
                            // line 250
                            echo "
                 <table id=\"t01\">  
                    <tr>
                      <th>Nombre</th>
                  ";
                            // line 255
                            echo "                      <th>Descripción</th>
                    </tr>
                    ";
                            // line 257
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["actividad"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
                                // line 258
                                echo "                    <tr>
                      <td>";
                                // line 259
                                echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "nombre", array()), "html", null, true);
                                echo "</td>
                  ";
                                // line 260
                                echo "                 
                      <td>";
                                // line 261
                                echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "descripcion", array()), "html", null, true);
                                echo "</td>
                    </tr> 
                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 264
                            echo "                 </table>

              ";
                        }
                        // line 267
                        echo "          ";
                    }
                    echo "    

          ";
                    // line 269
                    $context["j"] = ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) + 1);
                    // line 270
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 271
                echo "

        ";
                // line 273
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 274
                echo "          <br><br>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 275
            echo "     

  </div>
  ";
        }
        // line 278
        echo " 
</div>



<div class=\"page_last\">
  <div class=\"subtitulo\"> 
  <h2> CONCLUSIÓN </h2>
  </div>
  <div class=\"parrafo\">
  ";
        // line 288
        if (twig_test_empty((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")))) {
            // line 289
            echo "      No aplica
  ";
        } else {
            // line 290
            echo "  
    ";
            // line 291
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "conclusion", array()), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 293
        echo "  
</div>


";
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:InfoFinal:pdf_final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 293,  491 => 291,  488 => 290,  484 => 289,  482 => 288,  470 => 278,  464 => 275,  457 => 274,  455 => 273,  451 => 271,  445 => 270,  443 => 269,  437 => 267,  432 => 264,  423 => 261,  420 => 260,  416 => 259,  413 => 258,  409 => 257,  405 => 255,  399 => 250,  393 => 247,  388 => 245,  385 => 244,  380 => 243,  378 => 242,  369 => 236,  365 => 235,  361 => 234,  357 => 233,  353 => 232,  349 => 231,  337 => 221,  332 => 218,  327 => 217,  325 => 216,  320 => 214,  317 => 213,  313 => 212,  311 => 211,  300 => 202,  294 => 200,  291 => 199,  287 => 198,  285 => 197,  275 => 189,  269 => 186,  266 => 185,  262 => 184,  260 => 183,  253 => 178,  247 => 176,  244 => 175,  240 => 174,  238 => 173,  229 => 166,  223 => 163,  220 => 162,  216 => 161,  214 => 160,  204 => 152,  198 => 149,  195 => 148,  191 => 147,  189 => 146,  175 => 135,  167 => 130,  155 => 125,  147 => 120,  128 => 104,  121 => 99,  31 => 6,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends '::base.html.twig' %}  */
/* */
/* {% block body -%}*/
/* */
/* <style type="text/css">*/
/*     */
/* .page {*/
/*     margin-left: 85px;*/
/*     margin-right: 55px;*/
/*     font-family: Arial, "Open Sans", sans-serif; */
/*     page-break-after: always;    */
/* }*/
/* */
/* .page_last {*/
/*     margin-left: 85px;*/
/*     margin-right: 55px;*/
/*     font-family: Arial, "Open Sans", sans-serif;   */
/* }*/
/* */
/* */
/* .portada{*/
/*     /* margin-top: 355px; *//* */
/*     margin-top: 500px; */
/*     font-size: 16px;*/
/*     line-height: 24px;*/
/*     font-family: Arial, "Open Sans", sans-serif;*/
/*     text-align: center; */
/*     page-break-after: always;*/
/*     margin-left: 80px;*/
/*     margin-right: 80px; */
/* */
/* }*/
/* */
/* */
/* .portada_principal{*/
/*     margin-top: 60px; */
/*     font-size: 16px;*/
/*     line-height: 25px;*/
/*     font-family: Arial, "Open Sans", sans-serif;*/
/*     text-align: center; */
/*     page-break-after: always;*/
/*     margin-left: 80px;*/
/*     margin-right: 80px; */
/* */
/* }*/
/* */
/* .subtitulo{*/
/*     font-size: 10px;*/
/*     text-align: center;*/
/* }*/
/* */
/* */
/* .parrafo{*/
/*     margin-top: 30px;*/
/*     font-size: 16px;*/
/*     line-height: 28px;*/
/*     text-align: justify;*/
/* }*/
/* */
/* */
/* */
/* */
/* table{*/
/* 	width:100%;*/
/* 	display: table;*/
/* 	max-width: 100%;*/
/* 	font-family: "Open Sans", Arial, sans-serif;*/
/* 	font-size: 11px;*/
/* 	line-height: 12px;*/
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
/* {#*/
/* <div class="portada">*/
/*   {{ proyecto.nombre }}*/
/* </div>*/
/* #}*/
/* */
/* */
/* <div class="portada_principal">*/
/*   */
/*   <div>*/
/*   <img src="{{ app.request.schemeAndHttpHost ~ asset('img/uc.jpg') }}" alt="some_text" width="95" height="130">*/
/*   </div>*/
/* */
/*   <pre style="font-family:Arial;"> */
/*     REPÚBLICA BOLIVARIANA DE VENEZUELA */
/*       UNIVERSIDAD DE CARABOBO */
/* FACULTAD EXPERIMENTAL DE CIENCIAS Y TECNOLOGÍA*/
/*       DIRECCIÓN DE EXTENSIÓN*/
/*   </pre>*/
/* */
/*   <div style="font-family:Arial;"><b><br>*/
/*     INFORME FINAL SERVICIO COMUNITARIO*/
/*   </b><br><br><br><br>*/
/*   </div>*/
/*   */
/*   <div>*/
/*   {{ proyecto.nombre }} <br><br><br>*/
/*   </div>*/
/*   */
/*   <div>*/
/*     <b> Prestador de Servicio Comunitario:</b> <br>*/
/*     {{ estudiante.nombre }} {{ estudiante.apellido }} CI:{{ estudiante.cedula }} <br><br>*/
/*   </div>*/
/* */
/*   <div>*/
/*   <b>Tutor:</b> <br>*/
/*   {{ profesor.nombre }} <br><br>*/
/*   </div>*/
/* */
/*   <div>*/
/*   <b> Comunidad Objetivo: </b> <br> */
/*   {{ proyecto.locacion }} <br><br>*/
/*   </div>*/
/* */
/* </div>*/
/* */
/* */
/* <div class="page">*/
/*   <div class="subtitulo">*/
/*     <h2> RESUMEN </h2>*/
/*   </div>*/
/*   <div class="parrafo">*/
/*   {% if info is empty %}*/
/*       No aplica*/
/*   {% else %} */
/*       {{ info.resumen }}*/
/*   </div>    */
/*   {% endif %}*/
/* </div>*/
/* */
/*  */
/* <div class="page">*/
/*   <div class="subtitulo">*/
/*     <h2> PROBLEMA </h2>*/
/*   </div>*/
/*   <div class="parrafo">*/
/*   {% if info is empty %}*/
/*       No aplica*/
/*   {% else %}   */
/*       {{ info.problema }}*/
/*   </div>  */
/*   {% endif %}*/
/* </div>*/
/* */
/* <div class="page">*/
/*   <div class="subtitulo">*/
/*   <h2> OBJETIVO GENERAL </h2>*/
/*   </div>*/
/*   <div class="parrafo">*/
/*   {% if info is empty %}*/
/*       No aplica*/
/*   {% else %}  */
/*     {{ info.objetivoG }}*/
/*     </div>*/
/*   {% endif %} */
/*   <div class="subtitulo"> */
/*   <h2> OBJETIVOS ESPECIFÍCOS</h2>*/
/*   </div>*/
/*   <div class="parrafo">*/
/*   {% if info is empty %}*/
/*       No aplica*/
/*   {% else %}  */
/*     {{ info.objetivoE }}*/
/*     </div>*/
/*   {% endif %}*/
/* </div>*/
/* */
/* */
/* <div class="page">*/
/*   <div class="subtitulo"> */
/*   <h2> JUSTIFICACIÓN </h2>*/
/*   </div>*/
/*   <div class="parrafo">*/
/*   {% if info is empty %}*/
/*       No aplica*/
/*   {% else %}  */
/*     {{ info.justificacion }}*/
/*   </div>*/
/*   {% endif %}  */
/* </div>*/
/* */
/* */
/* <div class="page">*/
/*   <div class="subtitulo"> */
/*   <h2> RESULTADOS </h2>*/
/*   </div>*/
/*   <div class="parrafo">*/
/*   {% if info is empty %}*/
/*       No aplica*/
/*   {% else %}  */
/*     {{ info.resultados }} <br><br>*/
/* */
/*       {% set i = 0 %}*/
/*       {% for result in resultados %}*/
/*         <b> Comunidad:</b> {{ result.comunidad }} <br>*/
/*        {# <b>Fecha Inicio:</b>{{ result.fechaInicio | date('d-m-Y') }} */
/*         <b>Fecha Fin:</b> {{ result.fechaFin | date('d-m-Y') }} <br> #}*/
/*           <table id="t01">  */
/*             <tr>*/
/*               <th>Total Horas </th>*/
/*               <th>Toltal personas</th>*/
/*               <th>Niños</th>*/
/*               <th>Adultos</th>*/
/*               <th>Tercera edad</th>*/
/*               <th>Discapacidad</th>*/
/*             </tr>*/
/*             <tr>*/
/*               <td>{{ result.horas }}</td>*/
/*               <td>{{ result.personas }}</td>                    */
/*               <td>{{ result.ninos }}</td>*/
/*               <td>{{ result.adultos }}</td>*/
/*               <td>{{ result.terceraEdad }}</td>               */
/*               <td>{{ result.discapacidad }}</td>*/
/*             </tr> */
/*         </table> */
/* */
/*         <br>       */
/*         <b>Actividades realizadas en la comunidad:</b><br>*/
/*         {% set j = 0 %}*/
/*         {% for actividad in actividades %}*/
/* */
/*           {% if i == j %} */
/* */
/*               {% if actividad is empty %} */
/*                 <td> no aplica  </td>*/
/*               {% else %}*/
/* */
/*                  <table id="t01">  */
/*                     <tr>*/
/*                       <th>Nombre</th>*/
/*                   {#  <th>Cantidad</th> #}*/
/*                       <th>Descripción</th>*/
/*                     </tr>*/
/*                     {% for act in actividad %}*/
/*                     <tr>*/
/*                       <td>{{ act.nombre }}</td>*/
/*                   {#  <td>{{ act.cantidad }}</td>   #}                 */
/*                       <td>{{ act.descripcion }}</td>*/
/*                     </tr> */
/*                     {% endfor %}*/
/*                  </table>*/
/* */
/*               {% endif %}*/
/*           {% endif %}    */
/* */
/*           {% set j = j + 1 %}*/
/*         {% endfor %}*/
/* */
/* */
/*         {% set i = i + 1 %}*/
/*           <br><br>*/
/*      {% endfor %}     */
/* */
/*   </div>*/
/*   {% endif %} */
/* </div>*/
/* */
/* */
/* */
/* <div class="page_last">*/
/*   <div class="subtitulo"> */
/*   <h2> CONCLUSIÓN </h2>*/
/*   </div>*/
/*   <div class="parrafo">*/
/*   {% if info is empty %}*/
/*       No aplica*/
/*   {% else %}  */
/*     {{ info.conclusion }}*/
/*     </div>*/
/*   {% endif %}  */
/* </div>*/
/* */
/* */
/* {% endblock %}*/
