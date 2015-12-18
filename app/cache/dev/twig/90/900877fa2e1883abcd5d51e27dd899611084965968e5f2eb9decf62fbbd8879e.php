<?php

/* TesisSCBundle:Main:seccion3.html.twig */
class __TwigTemplate_6d84b67c8207d2cb220b98849b8193a6b0c496fc97da8a941859dfaad30a970f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div class=\"container-fluid sec1-div\" id=\"sec3\">
<div class=\"container-main\">
  <div class=\"row\">
  <div class=\"col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 titulos\">
      <h1>Bases legales</h1>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-12 titulos-mini\">
      <div role=\"tabpanel\">
        <!-- Nav tabs -->
        <ul class=\"nav nav-pills center-pills\" role=\"tablist\">
          <li role=\"presentation\" class=\"active\"><a href=\"#sec3pill1\" aria-controls=\"sec3pill1\" role=\"tab\" data-toggle=\"tab\">Venezuela</a></li>
          <li role=\"presentation\"><a href=\"#sec3pill2\" aria-controls=\"sec1pill2\" role=\"tab\" data-toggle=\"tab\">UC</a></li>
          <li role=\"presentation\"><a href=\"#sec3pill3\" aria-controls=\"sec1pill3\" role=\"tab\" data-toggle=\"tab\">FACYT</a></li>
        </ul>

        <!-- Tab panes -->
        <div class=\"tab-content\">
          <div role=\"tabpanel\" class=\"tab-pane active fade in active div-tabpanel\" id=\"sec3pill1\">
            <div class=\"row featurette\">
              <div class=\"col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10  col-lg-7 col-lg-offset-0\"> 
                <h4 class=\"subtitulos\">
                  Ley de Servicio Comunitario del Estudiante de Educación Superior </h4>
                  <br>
                  <p class=\"lead parrafo\">
                  La iniciativa legislativa del proyecto de “Ley del Servicio Comunitario del Estudiante de Educación Universitaria” se introdujo en la comisión de Participación Ciudadana, Descentralización y Desarrollo Regional a finales del año 2003. La misma fue acogida por unanimidad por todos sus miembros y luego se convirtió en una iniciativa legislativa, siendo aprobada por la plenaria de la Asamblea Nacional el 25 de agosto del año 2005 y publicada en Gaceta Oficial el 14 de septiembre del 2005.
                </p>
              </div>
              <div class=\"col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 col-md-6 col-md-offset-3 col-lg-5 col-lg-offset-0\">
                  <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("pdf/Ley_Servicio_Comunitario.pdf"), "html", null, true);
        echo "\" 
                  download=\"Ley_Servicio_Comunitario.pdf\"><i class=\"fa fa-download icon-download\"></i>
                  </a>
              </div>
            </div>
          </div>
          <div role=\"tabpanel\" class=\"tab-pane fade div-tabpanel\" id=\"sec3pill2\">
            <div class=\"row featurette\">
              <div class=\"col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10  col-lg-7 col-lg-offset-0\"> 
                 <h4 class=\"subtitulos\">
                  Reglamento del Servicio Comunitario del Estudiante de la Universidad de Carabobo </h4>
                  <br/>
                  <p class=\"lead parrafo\">
                  El presente reglamento establece las bases que rigen la organización y funcionamiento del servicio comunitario del estudiante en la Universidad de Carabobo (UC), así como las funciones de coordinación y tutoría que deben desempeñar los profesores a los fines de cumplir las etapas de sensibilización, conceptualización e instrumentación del proyecto de acción comunitaria, según lo establecido en el eje social de la estructura curricular de cada una de las carreras.
                </p>
              </div>
              <div class=\"col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 col-md-6 col-md-offset-3 col-lg-5 col-lg-offset-0\">
                  <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("pdf/Ley_Servicio_Comunitario_UC.pdf"), "html", null, true);
        echo "\" 
                  download=\"Ley_Servicio_Comunitario_UC.pdf\"><i class=\"fa fa-download icon-download\"></i>
                  </a>
              </div>
            </div>
          </div>
          <div role=\"tabpanel\" class=\"tab-pane div-tabpanel fade\" id=\"sec3pill3\">
            <div class=\"row featurette\">
              <div class=\"col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10  col-lg-7 col-lg-offset-0\">              
                <h4 class=\"subtitulos\">
                  Normas que rigen el funcionamiento del Servicio Comunitario en los diferentes departamentos de la FACYT
                   </h4>
                  <br/> 
                  <p class=\"lead parrafo\">
                  A la Facultad Experimental de Ciencias y Tecnología (FACYT), de la Universidad de Carabobo (UC), le corresponde, en uso de sus atribuciones autonómicas, elaborar las normas que regirán el funcionamiento y cumplimiento del servicio comunitario y establecer las condiciones necesarias para incorporar este servicio como una actividad regular, dentro del régimen académico y administrativo de las diferentes carreras que ofrece.
                </p>
              </div>

              <div class=\"col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 col-md-6 col-md-offset-3 col-lg-5 col-lg-offset-0\">
                  <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("pdf/Normativa_Servicio_Comunitario_FACYT.pdf"), "html", null, true);
        echo "\" 
                  download=\"Normativa_Servicio_Comunitario_FACYT.pdf\"><i class=\"fa fa-download icon-download\"></i>
                  </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div> 
</div>";
    }

    public function getTemplateName()
    {
        return "TesisSCBundle:Main:seccion3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 68,  72 => 49,  52 => 32,  19 => 1,);
    }
}
/* */
/* <div class="container-fluid sec1-div" id="sec3">*/
/* <div class="container-main">*/
/*   <div class="row">*/
/*   <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 titulos">*/
/*       <h1>Bases legales</h1>*/
/*     </div>*/
/*   </div>*/
/*   <div class="row">*/
/*     <div class="col-md-12 titulos-mini">*/
/*       <div role="tabpanel">*/
/*         <!-- Nav tabs -->*/
/*         <ul class="nav nav-pills center-pills" role="tablist">*/
/*           <li role="presentation" class="active"><a href="#sec3pill1" aria-controls="sec3pill1" role="tab" data-toggle="tab">Venezuela</a></li>*/
/*           <li role="presentation"><a href="#sec3pill2" aria-controls="sec1pill2" role="tab" data-toggle="tab">UC</a></li>*/
/*           <li role="presentation"><a href="#sec3pill3" aria-controls="sec1pill3" role="tab" data-toggle="tab">FACYT</a></li>*/
/*         </ul>*/
/* */
/*         <!-- Tab panes -->*/
/*         <div class="tab-content">*/
/*           <div role="tabpanel" class="tab-pane active fade in active div-tabpanel" id="sec3pill1">*/
/*             <div class="row featurette">*/
/*               <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10  col-lg-7 col-lg-offset-0"> */
/*                 <h4 class="subtitulos">*/
/*                   Ley de Servicio Comunitario del Estudiante de Educación Superior </h4>*/
/*                   <br>*/
/*                   <p class="lead parrafo">*/
/*                   La iniciativa legislativa del proyecto de “Ley del Servicio Comunitario del Estudiante de Educación Universitaria” se introdujo en la comisión de Participación Ciudadana, Descentralización y Desarrollo Regional a finales del año 2003. La misma fue acogida por unanimidad por todos sus miembros y luego se convirtió en una iniciativa legislativa, siendo aprobada por la plenaria de la Asamblea Nacional el 25 de agosto del año 2005 y publicada en Gaceta Oficial el 14 de septiembre del 2005.*/
/*                 </p>*/
/*               </div>*/
/*               <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 col-md-6 col-md-offset-3 col-lg-5 col-lg-offset-0">*/
/*                   <a href="{{ asset('pdf/Ley_Servicio_Comunitario.pdf') }}" */
/*                   download="Ley_Servicio_Comunitario.pdf"><i class="fa fa-download icon-download"></i>*/
/*                   </a>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           <div role="tabpanel" class="tab-pane fade div-tabpanel" id="sec3pill2">*/
/*             <div class="row featurette">*/
/*               <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10  col-lg-7 col-lg-offset-0"> */
/*                  <h4 class="subtitulos">*/
/*                   Reglamento del Servicio Comunitario del Estudiante de la Universidad de Carabobo </h4>*/
/*                   <br/>*/
/*                   <p class="lead parrafo">*/
/*                   El presente reglamento establece las bases que rigen la organización y funcionamiento del servicio comunitario del estudiante en la Universidad de Carabobo (UC), así como las funciones de coordinación y tutoría que deben desempeñar los profesores a los fines de cumplir las etapas de sensibilización, conceptualización e instrumentación del proyecto de acción comunitaria, según lo establecido en el eje social de la estructura curricular de cada una de las carreras.*/
/*                 </p>*/
/*               </div>*/
/*               <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 col-md-6 col-md-offset-3 col-lg-5 col-lg-offset-0">*/
/*                   <a href="{{ asset('pdf/Ley_Servicio_Comunitario_UC.pdf') }}" */
/*                   download="Ley_Servicio_Comunitario_UC.pdf"><i class="fa fa-download icon-download"></i>*/
/*                   </a>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           <div role="tabpanel" class="tab-pane div-tabpanel fade" id="sec3pill3">*/
/*             <div class="row featurette">*/
/*               <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10  col-lg-7 col-lg-offset-0">              */
/*                 <h4 class="subtitulos">*/
/*                   Normas que rigen el funcionamiento del Servicio Comunitario en los diferentes departamentos de la FACYT*/
/*                    </h4>*/
/*                   <br/> */
/*                   <p class="lead parrafo">*/
/*                   A la Facultad Experimental de Ciencias y Tecnología (FACYT), de la Universidad de Carabobo (UC), le corresponde, en uso de sus atribuciones autonómicas, elaborar las normas que regirán el funcionamiento y cumplimiento del servicio comunitario y establecer las condiciones necesarias para incorporar este servicio como una actividad regular, dentro del régimen académico y administrativo de las diferentes carreras que ofrece.*/
/*                 </p>*/
/*               </div>*/
/* */
/*               <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 col-md-6 col-md-offset-3 col-lg-5 col-lg-offset-0">*/
/*                   <a href="{{ asset('pdf/Normativa_Servicio_Comunitario_FACYT.pdf') }}" */
/*                   download="Normativa_Servicio_Comunitario_FACYT.pdf"><i class="fa fa-download icon-download"></i>*/
/*                   </a>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*  </div> */
/* </div>*/
