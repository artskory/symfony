<?php

/* ckeditor.html.twig */
class __TwigTemplate_92275b1660cc5f41987df958d9ea7c8d32603c0f40b4277d7977a440a01e0ff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'textarea_widget' => array($this, 'block_textarea_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d495c8256299aec82e4b99144d22c5d13249913336d3305fb0de5434633ea36d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d495c8256299aec82e4b99144d22c5d13249913336d3305fb0de5434633ea36d->enter($__internal_d495c8256299aec82e4b99144d22c5d13249913336d3305fb0de5434633ea36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ckeditor.html.twig"));

        $__internal_dfdfbefd416279d50a48178848145bf6c7bda1440914cea010ebd846c28acb1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfdfbefd416279d50a48178848145bf6c7bda1440914cea010ebd846c28acb1a->enter($__internal_dfdfbefd416279d50a48178848145bf6c7bda1440914cea010ebd846c28acb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ckeditor.html.twig"));

        // line 1
        $this->displayBlock('textarea_widget', $context, $blocks);
        
        $__internal_d495c8256299aec82e4b99144d22c5d13249913336d3305fb0de5434633ea36d->leave($__internal_d495c8256299aec82e4b99144d22c5d13249913336d3305fb0de5434633ea36d_prof);

        
        $__internal_dfdfbefd416279d50a48178848145bf6c7bda1440914cea010ebd846c28acb1a->leave($__internal_dfdfbefd416279d50a48178848145bf6c7bda1440914cea010ebd846c28acb1a_prof);

    }

    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_b74d8894112365158fdc47ae61c78222df86ed87ac052a8773b41983816d66bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b74d8894112365158fdc47ae61c78222df86ed87ac052a8773b41983816d66bf->enter($__internal_b74d8894112365158fdc47ae61c78222df86ed87ac052a8773b41983816d66bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_45a5c6174ea8548360ecb968771fcc21ef4a610b9552929b66eb7b5296d6f8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a5c6174ea8548360ecb968771fcc21ef4a610b9552929b66eb7b5296d6f8d5->enter($__internal_45a5c6174ea8548360ecb968771fcc21ef4a610b9552929b66eb7b5296d6f8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 2
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "class=\"ckeditor form-control\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_45a5c6174ea8548360ecb968771fcc21ef4a610b9552929b66eb7b5296d6f8d5->leave($__internal_45a5c6174ea8548360ecb968771fcc21ef4a610b9552929b66eb7b5296d6f8d5_prof);

        
        $__internal_b74d8894112365158fdc47ae61c78222df86ed87ac052a8773b41983816d66bf->leave($__internal_b74d8894112365158fdc47ae61c78222df86ed87ac052a8773b41983816d66bf_prof);

    }

    public function getTemplateName()
    {
        return "ckeditor.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}class=\"ckeditor form-control\">{{ value }}</textarea>
{%- endblock textarea_widget -%}", "ckeditor.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\ckeditor.html.twig");
    }
}
