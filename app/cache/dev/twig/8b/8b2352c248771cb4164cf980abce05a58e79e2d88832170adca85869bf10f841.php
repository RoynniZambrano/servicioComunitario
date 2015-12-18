<?php

/* TesisAdminBundle:Form:fields.html.twig */
class __TwigTemplate_ed23710d28ebfda623fb2b1d8f18b6b8da5036f38e3bf11bdcb1b676d4487e8e extends Twig_Template
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
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('form_errors', $context, $blocks);
        // line 25
        echo "





";
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("label_attr" => array("class" => "control-label")));
        echo "  
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 11
    public function block_form_errors($context, array $blocks = array())
    {
        // line 12
        ob_start();
        // line 13
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 14
            echo "    <div class=\"form-group has-error\" id=\"checkboxError\">
    <label class=\"control-label label-m\">
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 17
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </label>
    </div>
    ";
        }
        // line 22
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  92 => 22,  87 => 19,  78 => 17,  74 => 16,  70 => 14,  67 => 13,  65 => 12,  62 => 11,  55 => 7,  51 => 6,  46 => 5,  44 => 4,  41 => 3,  31 => 25,  29 => 11,  26 => 10,  24 => 3,  21 => 2,);
    }
}
/* {#Da formato personalizado al renderizado de los formularios#}*/
/* */
/* {% block form_row %}*/
/* {% spaceless %}*/
/*     {{ form_label(form, null, {'label_attr': {'class': 'control-label'}}) }}  */
/*     {{ form_widget(form, { 'attr': {'class': 'form-control'}}) }}*/
/* 	{{ form_errors(form) }}*/
/* {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* {% block form_errors %}*/
/* {% spaceless %}*/
/*     {% if errors|length > 0 %}*/
/*     <div class="form-group has-error" id="checkboxError">*/
/*     <label class="control-label label-m">*/
/*         {% for error in errors %}*/
/*             {{ error.message }}*/
/*         {% endfor %}*/
/*     </label>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/* {% endspaceless %}*/
/* {% endblock form_errors %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
