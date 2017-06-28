<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_39f88517022ae729622b7fc6d11b8ee9b6abf3a39bc372cc930f84e544797791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a13e98d42b8f2065fc866a3040eded4820afb6a9c4cea3980543acac4d8e1dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a13e98d42b8f2065fc866a3040eded4820afb6a9c4cea3980543acac4d8e1dd8->enter($__internal_a13e98d42b8f2065fc866a3040eded4820afb6a9c4cea3980543acac4d8e1dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_5f190202fe7b105b890f9792d6697eba4a55124133e081d996b4ff5fdf7f06da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f190202fe7b105b890f9792d6697eba4a55124133e081d996b4ff5fdf7f06da->enter($__internal_5f190202fe7b105b890f9792d6697eba4a55124133e081d996b4ff5fdf7f06da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a13e98d42b8f2065fc866a3040eded4820afb6a9c4cea3980543acac4d8e1dd8->leave($__internal_a13e98d42b8f2065fc866a3040eded4820afb6a9c4cea3980543acac4d8e1dd8_prof);

        
        $__internal_5f190202fe7b105b890f9792d6697eba4a55124133e081d996b4ff5fdf7f06da->leave($__internal_5f190202fe7b105b890f9792d6697eba4a55124133e081d996b4ff5fdf7f06da_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7fc46e6888c98dfe6247ce21300171f1492e0804b94ee5db9baf5d4b54f372fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fc46e6888c98dfe6247ce21300171f1492e0804b94ee5db9baf5d4b54f372fd->enter($__internal_7fc46e6888c98dfe6247ce21300171f1492e0804b94ee5db9baf5d4b54f372fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ab7c24fcb045f1abac0bf7df5c619286d5d07013688f39affcfab42e57432158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7c24fcb045f1abac0bf7df5c619286d5d07013688f39affcfab42e57432158->enter($__internal_ab7c24fcb045f1abac0bf7df5c619286d5d07013688f39affcfab42e57432158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ab7c24fcb045f1abac0bf7df5c619286d5d07013688f39affcfab42e57432158->leave($__internal_ab7c24fcb045f1abac0bf7df5c619286d5d07013688f39affcfab42e57432158_prof);

        
        $__internal_7fc46e6888c98dfe6247ce21300171f1492e0804b94ee5db9baf5d4b54f372fd->leave($__internal_7fc46e6888c98dfe6247ce21300171f1492e0804b94ee5db9baf5d4b54f372fd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
