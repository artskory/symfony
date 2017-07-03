<?php

/* ::ckeditor.html.twig */
class __TwigTemplate_4a63d7cf5a223179874e57ac32179bdb4bee4bb898f3c8069e0ed0bd1ba8feca extends Twig_Template
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
        $__internal_94eacdeda6a9671db3aa4da3eed2f7fecae95f5dfef0c70a3cd0a367b51fc5c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94eacdeda6a9671db3aa4da3eed2f7fecae95f5dfef0c70a3cd0a367b51fc5c0->enter($__internal_94eacdeda6a9671db3aa4da3eed2f7fecae95f5dfef0c70a3cd0a367b51fc5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ckeditor.html.twig"));

        $__internal_ef5ffb9e1d3f201354ef1d014c14795bb17346fe5544275f8eefee15c9742fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5ffb9e1d3f201354ef1d014c14795bb17346fe5544275f8eefee15c9742fad->enter($__internal_ef5ffb9e1d3f201354ef1d014c14795bb17346fe5544275f8eefee15c9742fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ckeditor.html.twig"));

        // line 1
        $this->displayBlock('textarea_widget', $context, $blocks);
        
        $__internal_94eacdeda6a9671db3aa4da3eed2f7fecae95f5dfef0c70a3cd0a367b51fc5c0->leave($__internal_94eacdeda6a9671db3aa4da3eed2f7fecae95f5dfef0c70a3cd0a367b51fc5c0_prof);

        
        $__internal_ef5ffb9e1d3f201354ef1d014c14795bb17346fe5544275f8eefee15c9742fad->leave($__internal_ef5ffb9e1d3f201354ef1d014c14795bb17346fe5544275f8eefee15c9742fad_prof);

    }

    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_af108181b94c05409f4634d50492cefc1a86fbdb51b5853d3d61612906ff412d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af108181b94c05409f4634d50492cefc1a86fbdb51b5853d3d61612906ff412d->enter($__internal_af108181b94c05409f4634d50492cefc1a86fbdb51b5853d3d61612906ff412d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_ae1f2ca8547349eda5ff84476e60a19a836c53ec5943480e4fd2459fee23b03d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1f2ca8547349eda5ff84476e60a19a836c53ec5943480e4fd2459fee23b03d->enter($__internal_ae1f2ca8547349eda5ff84476e60a19a836c53ec5943480e4fd2459fee23b03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 2
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "class=\"ckeditor form-control\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_ae1f2ca8547349eda5ff84476e60a19a836c53ec5943480e4fd2459fee23b03d->leave($__internal_ae1f2ca8547349eda5ff84476e60a19a836c53ec5943480e4fd2459fee23b03d_prof);

        
        $__internal_af108181b94c05409f4634d50492cefc1a86fbdb51b5853d3d61612906ff412d->leave($__internal_af108181b94c05409f4634d50492cefc1a86fbdb51b5853d3d61612906ff412d_prof);

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
