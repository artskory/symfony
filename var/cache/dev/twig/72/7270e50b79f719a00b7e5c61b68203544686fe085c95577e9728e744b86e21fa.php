<?php

/* ::ckeditor.html.twig */
class __TwigTemplate_12d9c87f2c8c8f030cd5e1ecf0597c1b0fb0d59a55c764444d699ffa7081bf83 extends Twig_Template
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
        $__internal_5464541e6cacdec6188c9611e7c1cc375f7d19848d142a77bdc581615c1c2763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5464541e6cacdec6188c9611e7c1cc375f7d19848d142a77bdc581615c1c2763->enter($__internal_5464541e6cacdec6188c9611e7c1cc375f7d19848d142a77bdc581615c1c2763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ckeditor.html.twig"));

        $__internal_8d3e4d31e211dbaaadbd410839dc93a7a94265e14fcc3198d3b0379dd7973318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3e4d31e211dbaaadbd410839dc93a7a94265e14fcc3198d3b0379dd7973318->enter($__internal_8d3e4d31e211dbaaadbd410839dc93a7a94265e14fcc3198d3b0379dd7973318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ckeditor.html.twig"));

        // line 1
        $this->displayBlock('textarea_widget', $context, $blocks);
        
        $__internal_5464541e6cacdec6188c9611e7c1cc375f7d19848d142a77bdc581615c1c2763->leave($__internal_5464541e6cacdec6188c9611e7c1cc375f7d19848d142a77bdc581615c1c2763_prof);

        
        $__internal_8d3e4d31e211dbaaadbd410839dc93a7a94265e14fcc3198d3b0379dd7973318->leave($__internal_8d3e4d31e211dbaaadbd410839dc93a7a94265e14fcc3198d3b0379dd7973318_prof);

    }

    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_7d3b036ccad6a0a76641f3ba01626adeee0acae80e4b0980bb5a786f8dd28031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d3b036ccad6a0a76641f3ba01626adeee0acae80e4b0980bb5a786f8dd28031->enter($__internal_7d3b036ccad6a0a76641f3ba01626adeee0acae80e4b0980bb5a786f8dd28031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_51e78ef4d77525b64bc8ef95da7c7a3245f52980019773a2e61d195891ebddc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e78ef4d77525b64bc8ef95da7c7a3245f52980019773a2e61d195891ebddc3->enter($__internal_51e78ef4d77525b64bc8ef95da7c7a3245f52980019773a2e61d195891ebddc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 2
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "class=\"ckeditor form-control\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_51e78ef4d77525b64bc8ef95da7c7a3245f52980019773a2e61d195891ebddc3->leave($__internal_51e78ef4d77525b64bc8ef95da7c7a3245f52980019773a2e61d195891ebddc3_prof);

        
        $__internal_7d3b036ccad6a0a76641f3ba01626adeee0acae80e4b0980bb5a786f8dd28031->leave($__internal_7d3b036ccad6a0a76641f3ba01626adeee0acae80e4b0980bb5a786f8dd28031_prof);

    }

    public function getTemplateName()
    {
        return "::ckeditor.html.twig";
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
{%- endblock textarea_widget -%}", "::ckeditor.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/ckeditor.html.twig");
    }
}
