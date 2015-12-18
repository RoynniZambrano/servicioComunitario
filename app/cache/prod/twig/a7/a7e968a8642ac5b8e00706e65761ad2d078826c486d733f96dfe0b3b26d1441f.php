<?php

/* TesisSCBundle:Form:fields.html.twig */
class __TwigTemplate_907ac54a417e04ebc00b729bd06d6aab35120a0d9d150ac2f5a091ece5780ca6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('form_errors', $context, $blocks);
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "
<div class=\"form-group\">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => array("class" => "form-control")));
        echo "

\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
</div>


";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_form_errors($context, array $blocks = array())
    {
        // line 17
        ob_start();
        // line 18
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 19
            echo "    <div class=\"form-group has-error\" id=\"checkboxError\">
    <label class=\"control-label\">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 22
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    </label>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "TesisSCBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  73 => 22,  69 => 21,  65 => 19,  62 => 18,  60 => 17,  57 => 16,  47 => 9,  42 => 7,  38 => 5,  36 => 4,  33 => 3,  29 => 16,  26 => 15,  24 => 3,  21 => 2,);
    }
}
/* {#Da formato personalizado al renderizado de los formularios#}*/
/* */
/* {% block form_row %}*/
/* {% spaceless %}*/
/* */
/* <div class="form-group">*/
/*     {{ form_widget(form, { 'attr': {'class': 'form-control'}}) }}*/
/* */
/* 	{{ form_errors(form) }}*/
/* </div>*/
/* */
/* */
/* {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* {% block form_errors %}*/
/* {% spaceless %}*/
/*     {% if errors|length > 0 %}*/
/*     <div class="form-group has-error" id="checkboxError">*/
/*     <label class="control-label">*/
/*         {% for error in errors %}*/
/*             {{ error.message }}*/
/*         {% endfor %}*/
/*     </label>*/
/*     </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_errors %}*/
/* */
