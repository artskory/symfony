<?php

/* catalogue/layout.html.twig */
class __TwigTemplate_32866a785a2f5083a9e7064a93f7f9e9ac5af03a8d634f45d9beef3df48de8f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catalogue/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'body_layout' => array($this, 'block_body_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7be68f4849486c445e3c2b5c9295bc4e5d118533a1bdd27dd3df588067a8077a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be68f4849486c445e3c2b5c9295bc4e5d118533a1bdd27dd3df588067a8077a->enter($__internal_7be68f4849486c445e3c2b5c9295bc4e5d118533a1bdd27dd3df588067a8077a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/layout.html.twig"));

        $__internal_a73c7d394de17f3b3fd3b81aa7da1582091f0e8d9895c1ce35e5bbbf347694cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73c7d394de17f3b3fd3b81aa7da1582091f0e8d9895c1ce35e5bbbf347694cd->enter($__internal_a73c7d394de17f3b3fd3b81aa7da1582091f0e8d9895c1ce35e5bbbf347694cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7be68f4849486c445e3c2b5c9295bc4e5d118533a1bdd27dd3df588067a8077a->leave($__internal_7be68f4849486c445e3c2b5c9295bc4e5d118533a1bdd27dd3df588067a8077a_prof);

        
        $__internal_a73c7d394de17f3b3fd3b81aa7da1582091f0e8d9895c1ce35e5bbbf347694cd->leave($__internal_a73c7d394de17f3b3fd3b81aa7da1582091f0e8d9895c1ce35e5bbbf347694cd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_eed3814d78872c8db62a0426a06c6a7450af447d89ffbd0d02328ab7f617f1d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed3814d78872c8db62a0426a06c6a7450af447d89ffbd0d02328ab7f617f1d7->enter($__internal_eed3814d78872c8db62a0426a06c6a7450af447d89ffbd0d02328ab7f617f1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c92fed19b5167f9206a95b61bd6b4d27edbad8bed0872bb8a9eb615aa7069417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92fed19b5167f9206a95b61bd6b4d27edbad8bed0872bb8a9eb615aa7069417->enter($__internal_c92fed19b5167f9206a95b61bd6b4d27edbad8bed0872bb8a9eb615aa7069417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Catalogue";
        
        $__internal_c92fed19b5167f9206a95b61bd6b4d27edbad8bed0872bb8a9eb615aa7069417->leave($__internal_c92fed19b5167f9206a95b61bd6b4d27edbad8bed0872bb8a9eb615aa7069417_prof);

        
        $__internal_eed3814d78872c8db62a0426a06c6a7450af447d89ffbd0d02328ab7f617f1d7->leave($__internal_eed3814d78872c8db62a0426a06c6a7450af447d89ffbd0d02328ab7f617f1d7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b41d2fcfcab0203d16b83d2f6f26b09aaae04d4d4ac043b43a2fc137bd658d49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b41d2fcfcab0203d16b83d2f6f26b09aaae04d4d4ac043b43a2fc137bd658d49->enter($__internal_b41d2fcfcab0203d16b83d2f6f26b09aaae04d4d4ac043b43a2fc137bd658d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8f066535ed9d9aa100caf9bb7bd1d4a6f9fd77e9a6ec65fe96bedb9b7eabc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f066535ed9d9aa100caf9bb7bd1d4a6f9fd77e9a6ec65fe96bedb9b7eabc65->enter($__internal_c8f066535ed9d9aa100caf9bb7bd1d4a6f9fd77e9a6ec65fe96bedb9b7eabc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Catalogue</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_c8f066535ed9d9aa100caf9bb7bd1d4a6f9fd77e9a6ec65fe96bedb9b7eabc65->leave($__internal_c8f066535ed9d9aa100caf9bb7bd1d4a6f9fd77e9a6ec65fe96bedb9b7eabc65_prof);

        
        $__internal_b41d2fcfcab0203d16b83d2f6f26b09aaae04d4d4ac043b43a2fc137bd658d49->leave($__internal_b41d2fcfcab0203d16b83d2f6f26b09aaae04d4d4ac043b43a2fc137bd658d49_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_82f09f5ecd218780bcdf7110bc6300f2317cbe579190b6d5bfcd63c42f06bac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f09f5ecd218780bcdf7110bc6300f2317cbe579190b6d5bfcd63c42f06bac3->enter($__internal_82f09f5ecd218780bcdf7110bc6300f2317cbe579190b6d5bfcd63c42f06bac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_c0ab3a773c8ba30fb405414680261093e3be4679f6111f06872be79fd0df1a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ab3a773c8ba30fb405414680261093e3be4679f6111f06872be79fd0df1a17->enter($__internal_c0ab3a773c8ba30fb405414680261093e3be4679f6111f06872be79fd0df1a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_c0ab3a773c8ba30fb405414680261093e3be4679f6111f06872be79fd0df1a17->leave($__internal_c0ab3a773c8ba30fb405414680261093e3be4679f6111f06872be79fd0df1a17_prof);

        
        $__internal_82f09f5ecd218780bcdf7110bc6300f2317cbe579190b6d5bfcd63c42f06bac3->leave($__internal_82f09f5ecd218780bcdf7110bc6300f2317cbe579190b6d5bfcd63c42f06bac3_prof);

    }

    public function getTemplateName()
    {
        return "catalogue/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 5,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block title %}Catalogue{% endblock %}
{% block body %}
    <h1>Catalogue</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", "catalogue/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\catalogue\\layout.html.twig");
    }
}
