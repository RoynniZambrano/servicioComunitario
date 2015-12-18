<?php

/* TesisSCBundle:Main:header.html.twig */
class __TwigTemplate_e2dce02bab0daf8647551b2a30352fd08ab2c621f52d6c74c66ffc31cd86bf55 extends Twig_Template
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
<header id=\"sec0\">
  <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" style=\"background-color: white;border-bottom: 1px solid #A9AEB5;\"> 
  <div class=\"header-main\">  
    <div class=\"container-header\" id=\"nav-bar\">  
        <div class=\"nav navbar-left navbar-header\">   
        <a href=\"http://www.facyt.uc.edu.ve/\">     
          <img class=\"featurette-image img-responsive img-header\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo-facyt7.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\"> 
        </a>
          <button type=\"button\" class=\"header-boton navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\">
            <i class=\"fa fa-bars\"> </i>
          </button>
        </div>  
    
        <div id=\"navbar\" class=\"navbar-collapse collapse \"> 
 
          <div class=\"header-nav\">  
              <ul class=\"nav nav-pills\"> <br>
                <li role=\"presentation\" class=\"active\"><a href=\"#sec0\">Inicio</a></li>
                <li role=\"presentation\"><a href=\"#sec1\">General</a></li>
                <li role=\"presentation\"><a href=\"#sec2\">Cursar</a></li>
                <li role=\"presentation\"><a href=\"#sec3\">Bases legales</a></li>
                <li role=\"presentation\"><a href=\"#sec4\">Enlaces</a></li>
                <li><button type=\"button\" class=\"btn btn-success\" id=\"toggle-login\">Ingresar</button></li>
              </ul>
              
          </div> 
        </div>      
    </div>
  </div>
  </div>
  </nav>
<div  id=\"toggle-div\" style=\"display:none;margin-top:40px;\">
        <div id=\"loggin-div\"> 
          ";
        // line 35
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TesisSCBundle:SC:loginform"));
        echo "
        </div>
</div>  
</header>
";
    }

    public function getTemplateName()
    {
        return "TesisSCBundle:Main:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 35,  28 => 8,  19 => 1,);
    }
}
/* */
/* <header id="sec0">*/
/*   <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: white;border-bottom: 1px solid #A9AEB5;"> */
/*   <div class="header-main">  */
/*     <div class="container-header" id="nav-bar">  */
/*         <div class="nav navbar-left navbar-header">   */
/*         <a href="http://www.facyt.uc.edu.ve/">     */
/*           <img class="featurette-image img-responsive img-header" src="{{ asset('img/logo-facyt7.png') }}" alt="Generic placeholder image"> */
/*         </a>*/
/*           <button type="button" class="header-boton navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">*/
/*             <i class="fa fa-bars"> </i>*/
/*           </button>*/
/*         </div>  */
/*     */
/*         <div id="navbar" class="navbar-collapse collapse "> */
/*  */
/*           <div class="header-nav">  */
/*               <ul class="nav nav-pills"> <br>*/
/*                 <li role="presentation" class="active"><a href="#sec0">Inicio</a></li>*/
/*                 <li role="presentation"><a href="#sec1">General</a></li>*/
/*                 <li role="presentation"><a href="#sec2">Cursar</a></li>*/
/*                 <li role="presentation"><a href="#sec3">Bases legales</a></li>*/
/*                 <li role="presentation"><a href="#sec4">Enlaces</a></li>*/
/*                 <li><button type="button" class="btn btn-success" id="toggle-login">Ingresar</button></li>*/
/*               </ul>*/
/*               */
/*           </div> */
/*         </div>      */
/*     </div>*/
/*   </div>*/
/*   </div>*/
/*   </nav>*/
/* <div  id="toggle-div" style="display:none;margin-top:40px;">*/
/*         <div id="loggin-div"> */
/*           {{ render(controller('TesisSCBundle:SC:loginform')) }}*/
/*         </div>*/
/* </div>  */
/* </header>*/
/* */
