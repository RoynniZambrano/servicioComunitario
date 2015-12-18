<?php

/* TesisAdminBundle:InfoFinal:pdf_final.html.twig */
class __TwigTemplate_92c292acb3618c06d66e2651cf3f229dc3af81d15d9bfe3fead95eb4f31950b9 extends Twig_Template
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
    margin-top: 355px; 
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



<div class=\"portada\">
  ";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : null), "proyectoProyecto", array()), "nombre", array()), "html", null, true);
        echo "
</div>

<div class=\"portada_principal\">
  
  <div>
  <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('assets')->getAssetUrl("img/uc.jpg")), "html", null, true);
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
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : null), "proyectoProyecto", array()), "nombre", array()), "html", null, true);
        echo " <br><br><br>
  </div>
  
  <div>
    <b> Prestador de Servicio Comunitario:</b> <br>
    ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : null), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : null), "apellido", array()), "html", null, true);
        echo " CI:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : null), "cedula", array()), "html", null, true);
        echo " <br><br>
  </div>

  <div>
  <b>Tutor:</b> <br>
  ";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : null), "usuarioUsuario", array()), "nombre", array()), "html", null, true);
        echo " <br><br>
  </div>

  <div>
  <b> Comunidad Objetivo: </b> <br> 
  ";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : null), "proyectoProyecto", array()), "locacion", array()), "html", null, true);
        echo " <br><br>
  </div>

</div>


<div class=\"page\">
  <div class=\"subtitulo\">
    <h2> RESUMEN </h2>
  </div>
  <div class=\"parrafo\">
  ";
        // line 143
        if (twig_test_empty((isset($context["info"]) ? $context["info"] : null))) {
            // line 144
            echo "      No aplica
  ";
        } else {
            // line 145
            echo " 
      ";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "resumen", array()), "html", null, true);
            echo "
  </div>    
  ";
        }
        // line 149
        echo "</div>

 
<div class=\"page\">
  <div class=\"subtitulo\">
    <h2> PROBLEMA </h2>
  </div>
  <div class=\"parrafo\">
  ";
        // line 157
        if (twig_test_empty((isset($context["info"]) ? $context["info"] : null))) {
            // line 158
            echo "      No aplica
  ";
        } else {
            // line 159
            echo "   
      ";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "problema", array()), "html", null, true);
            echo "
  </div>  
  ";
        }
        // line 163
        echo "</div>

<div class=\"page\">
  <div class=\"subtitulo\">
  <h2> OBJETIVO GENERAL </h2>
  </div>
  <div class=\"parrafo\">
  ";
        // line 170
        if (twig_test_empty((isset($context["info"]) ? $context["info"] : null))) {
            // line 171
            echo "      No aplica
  ";
        } else {
            // line 172
            echo "  
    ";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "objetivoG", array()), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 175
        echo " 
  <div class=\"subtitulo\"> 
  <h2> OBJETIVOS ESPECIFÍCOS</h2>
  </div>
  <div class=\"parrafo\">
  ";
        // line 180
        if (twig_test_empty((isset($context["info"]) ? $context["info"] : null))) {
            // line 181
            echo "      No aplica
  ";
        } else {
            // line 182
            echo "  
    ";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "objetivoE", array()), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 186
        echo "</div>


<div class=\"page\">
  <div class=\"subtitulo\"> 
  <h2> JUSTIFICACIÓN </h2>
  </div>
  <div class=\"parrafo\">
  ";
        // line 194
        if (twig_test_empty((isset($context["info"]) ? $context["info"] : null))) {
            // line 195
            echo "      No aplica
  ";
        } else {
            // line 196
            echo "  
    ";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "justificacion", array()), "html", null, true);
            echo "
  </div>
  ";
        }
        // line 199
        echo "  
</div>


<div class=\"page\">
  <div class=\"subtitulo\"> 
  <h2> RESULTADOS </h2>
  </div>
  <div class=\"parrafo\">
  ";
        // line 208
        if (twig_test_empty((isset($context["info"]) ? $context["info"] : null))) {
            // line 209
            echo "      No aplica
  ";
        } else {
            // line 210
            echo "  
    ";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "resultados", array()), "html", null, true);
            echo " <br><br>

      ";
            // line 213
            $context["i"] = 0;
            // line 214
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultados"]) ? $context["resultados"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 215
                echo "        <b> Semana:</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "semana", array()), "html", null, true);
                echo " <br>
        <b>Fecha Inicio:</b>";
                // line 216
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "fechaInicio", array()), "d-m-Y"), "html", null, true);
                echo " 
        <b>Fecha Fin:</b> ";
                // line 217
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "fechaFin", array()), "d-m-Y"), "html", null, true);
                echo " <br>
          <table id=\"t01\">  
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
                // line 228
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "horas", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 229
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "personas", array()), "html", null, true);
                echo "</td>                    
              <td>";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "ninos", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "adultos", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 232
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "terceraEdad", array()), "html", null, true);
                echo "</td>               
              <td>";
                // line 233
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "discapacidad", array()), "html", null, true);
                echo "</td>
            </tr> 
        </table> 

        Actividades de la Semana:<br>
        ";
                // line 238
                $context["j"] = 0;
                // line 239
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["actividades"]) ? $context["actividades"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
                    // line 240
                    echo "
          ";
                    // line 241
                    if (((isset($context["i"]) ? $context["i"] : null) == (isset($context["j"]) ? $context["j"] : null))) {
                        echo " 

              ";
                        // line 243
                        if (twig_test_empty($context["actividad"])) {
                            echo " 
                <td> <b> no aplica </b> </td>
              ";
                        } else {
                            // line 246
                            echo "
                 <table id=\"t01\">  
                    <tr>
                      <th>Nombre</th>
                      <th>Cantidad</th>
                      <th>Descripción</th>
                    </tr>
                    ";
                            // line 253
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["actividad"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
                                // line 254
                                echo "                    <tr>
                      <td>";
                                // line 255
                                echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "nombre", array()), "html", null, true);
                                echo "</td>
                      <td>";
                                // line 256
                                echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "cantidad", array()), "html", null, true);
                                echo "</td>                    
                      <td>";
                                // line 257
                                echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "comentario", array()), "html", null, true);
                                echo "</td>
                    </tr> 
                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 260
                            echo "                 </table>

              ";
                        }
                        // line 263
                        echo "          ";
                    }
                    echo "    

          ";
                    // line 265
                    $context["j"] = ((isset($context["j"]) ? $context["j"] : null) + 1);
                    // line 266
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 267
                echo "

        ";
                // line 269
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 270
                echo "          <br><br>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            echo "     

  </div>
  ";
        }
        // line 274
        echo " 
</div>


<div class=\"page_last\">
  <div class=\"subtitulo\"> 
  <h2> CONCLUSIÓN </h2>
  </div>
  <div class=\"parrafo\">
  ";
        // line 283
        if (twig_test_empty((isset($context["info"]) ? $context["info"] : null))) {
            // line 284
            echo "      No aplica
  ";
        } else {
            // line 285
            echo "  
    ";
            // line 286
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "conclusion", array()), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 288
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
        return array (  504 => 288,  498 => 286,  495 => 285,  491 => 284,  489 => 283,  478 => 274,  472 => 271,  465 => 270,  463 => 269,  459 => 267,  453 => 266,  451 => 265,  445 => 263,  440 => 260,  431 => 257,  427 => 256,  423 => 255,  420 => 254,  416 => 253,  407 => 246,  401 => 243,  396 => 241,  393 => 240,  388 => 239,  386 => 238,  378 => 233,  374 => 232,  370 => 231,  366 => 230,  362 => 229,  358 => 228,  344 => 217,  340 => 216,  335 => 215,  330 => 214,  328 => 213,  323 => 211,  320 => 210,  316 => 209,  314 => 208,  303 => 199,  297 => 197,  294 => 196,  290 => 195,  288 => 194,  278 => 186,  272 => 183,  269 => 182,  265 => 181,  263 => 180,  256 => 175,  250 => 173,  247 => 172,  243 => 171,  241 => 170,  232 => 163,  226 => 160,  223 => 159,  219 => 158,  217 => 157,  207 => 149,  201 => 146,  198 => 145,  194 => 144,  192 => 143,  178 => 132,  170 => 127,  158 => 122,  150 => 117,  131 => 101,  122 => 95,  31 => 6,  28 => 4,  11 => 2,);
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
/*     margin-top: 355px; */
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
/* */
/* <div class="portada">*/
/*   {{ estudiante.proyectoProyecto.nombre }}*/
/* </div>*/
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
/*   {{ estudiante.proyectoProyecto.nombre }} <br><br><br>*/
/*   </div>*/
/*   */
/*   <div>*/
/*     <b> Prestador de Servicio Comunitario:</b> <br>*/
/*     {{ estudiante.nombre }} {{ estudiante.apellido }} CI:{{ estudiante.cedula }} <br><br>*/
/*   </div>*/
/* */
/*   <div>*/
/*   <b>Tutor:</b> <br>*/
/*   {{ estudiante.usuarioUsuario.nombre }} <br><br>*/
/*   </div>*/
/* */
/*   <div>*/
/*   <b> Comunidad Objetivo: </b> <br> */
/*   {{ estudiante.proyectoProyecto.locacion }} <br><br>*/
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
/*         <b> Semana:</b> {{ result.semana }} <br>*/
/*         <b>Fecha Inicio:</b>{{ result.fechaInicio | date('d-m-Y') }} */
/*         <b>Fecha Fin:</b> {{ result.fechaFin | date('d-m-Y') }} <br>*/
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
/*         Actividades de la Semana:<br>*/
/*         {% set j = 0 %}*/
/*         {% for actividad in actividades %}*/
/* */
/*           {% if i == j %} */
/* */
/*               {% if actividad is empty %} */
/*                 <td> <b> no aplica </b> </td>*/
/*               {% else %}*/
/* */
/*                  <table id="t01">  */
/*                     <tr>*/
/*                       <th>Nombre</th>*/
/*                       <th>Cantidad</th>*/
/*                       <th>Descripción</th>*/
/*                     </tr>*/
/*                     {% for act in actividad %}*/
/*                     <tr>*/
/*                       <td>{{ act.nombre }}</td>*/
/*                       <td>{{ act.cantidad }}</td>                    */
/*                       <td>{{ act.comentario }}</td>*/
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
