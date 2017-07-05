<?php

/* :catalogue:layout.html.twig */
class __TwigTemplate_ef88c87c2058a43312d7a6257894ba559453bd6f854d2604506e2a733044be79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":catalogue:layout.html.twig", 1);
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
        $__internal_5947e7b7b7ac68b52fca2945338c63b98904dc0704274b5733e6298fd53563f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5947e7b7b7ac68b52fca2945338c63b98904dc0704274b5733e6298fd53563f8->enter($__internal_5947e7b7b7ac68b52fca2945338c63b98904dc0704274b5733e6298fd53563f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:layout.html.twig"));

        $__internal_e0032f9d14be6781970a46ab8ac7fcf3f5a308b63695cc804b88e0b577b130e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0032f9d14be6781970a46ab8ac7fcf3f5a308b63695cc804b88e0b577b130e0->enter($__internal_e0032f9d14be6781970a46ab8ac7fcf3f5a308b63695cc804b88e0b577b130e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5947e7b7b7ac68b52fca2945338c63b98904dc0704274b5733e6298fd53563f8->leave($__internal_5947e7b7b7ac68b52fca2945338c63b98904dc0704274b5733e6298fd53563f8_prof);

        
        $__internal_e0032f9d14be6781970a46ab8ac7fcf3f5a308b63695cc804b88e0b577b130e0->leave($__internal_e0032f9d14be6781970a46ab8ac7fcf3f5a308b63695cc804b88e0b577b130e0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_74c88dd69eab754250619a15defbe77a3339336fd2c840760e993f924914ff97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c88dd69eab754250619a15defbe77a3339336fd2c840760e993f924914ff97->enter($__internal_74c88dd69eab754250619a15defbe77a3339336fd2c840760e993f924914ff97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1bbcdb1a5901022c6309d0404bbe8f5f0a3402f23b8878c874edf9a6b3c50d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bbcdb1a5901022c6309d0404bbe8f5f0a3402f23b8878c874edf9a6b3c50d1d->enter($__internal_1bbcdb1a5901022c6309d0404bbe8f5f0a3402f23b8878c874edf9a6b3c50d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Catalogue";
        
        $__internal_1bbcdb1a5901022c6309d0404bbe8f5f0a3402f23b8878c874edf9a6b3c50d1d->leave($__internal_1bbcdb1a5901022c6309d0404bbe8f5f0a3402f23b8878c874edf9a6b3c50d1d_prof);

        
        $__internal_74c88dd69eab754250619a15defbe77a3339336fd2c840760e993f924914ff97->leave($__internal_74c88dd69eab754250619a15defbe77a3339336fd2c840760e993f924914ff97_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfbad34b741f0090a6265547e07f21e0746d96bc802c9f690268790c3bcdc7cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfbad34b741f0090a6265547e07f21e0746d96bc802c9f690268790c3bcdc7cd->enter($__internal_bfbad34b741f0090a6265547e07f21e0746d96bc802c9f690268790c3bcdc7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae47865f0fd390735ee713677c9879ddf93bbddb1d48bba1ae8116ef88f42256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae47865f0fd390735ee713677c9879ddf93bbddb1d48bba1ae8116ef88f42256->enter($__internal_ae47865f0fd390735ee713677c9879ddf93bbddb1d48bba1ae8116ef88f42256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Catalogue</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_ae47865f0fd390735ee713677c9879ddf93bbddb1d48bba1ae8116ef88f42256->leave($__internal_ae47865f0fd390735ee713677c9879ddf93bbddb1d48bba1ae8116ef88f42256_prof);

        
        $__internal_bfbad34b741f0090a6265547e07f21e0746d96bc802c9f690268790c3bcdc7cd->leave($__internal_bfbad34b741f0090a6265547e07f21e0746d96bc802c9f690268790c3bcdc7cd_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_be396575e3878514fc6d9dcecef5e6907da962b75fb75a6d065766c9f09e6709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be396575e3878514fc6d9dcecef5e6907da962b75fb75a6d065766c9f09e6709->enter($__internal_be396575e3878514fc6d9dcecef5e6907da962b75fb75a6d065766c9f09e6709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_12078e318ab1e6af2114563224d40ba694e63733b304a829734d934f8f503d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12078e318ab1e6af2114563224d40ba694e63733b304a829734d934f8f503d23->enter($__internal_12078e318ab1e6af2114563224d40ba694e63733b304a829734d934f8f503d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_12078e318ab1e6af2114563224d40ba694e63733b304a829734d934f8f503d23->leave($__internal_12078e318ab1e6af2114563224d40ba694e63733b304a829734d934f8f503d23_prof);

        
        $__internal_be396575e3878514fc6d9dcecef5e6907da962b75fb75a6d065766c9f09e6709->leave($__internal_be396575e3878514fc6d9dcecef5e6907da962b75fb75a6d065766c9f09e6709_prof);

    }

    public function getTemplateName()
    {
        return ":catalogue:layout.html.twig";
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
{% endblock %}", ":catalogue:layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/catalogue/layout.html.twig");
    }
}
