<?php

/* @OCPlatform/Annonce/layout.html.twig */
class __TwigTemplate_277639e2739dd02f62d86d2a07d920165eb7cf2374f911b3da1df4fa384ec74c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@OCPlatform/Annonce/layout.html.twig", 1);
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
        $__internal_3ae8c87b327ac0f1999f9a5d3badbec4713da6852a09928407543f745afcf6f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae8c87b327ac0f1999f9a5d3badbec4713da6852a09928407543f745afcf6f1->enter($__internal_3ae8c87b327ac0f1999f9a5d3badbec4713da6852a09928407543f745afcf6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Annonce/layout.html.twig"));

        $__internal_87b880a12cebdfa69048cd825c6593c91798619be6cfa90cc4c5cd6d23e6d299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b880a12cebdfa69048cd825c6593c91798619be6cfa90cc4c5cd6d23e6d299->enter($__internal_87b880a12cebdfa69048cd825c6593c91798619be6cfa90cc4c5cd6d23e6d299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Annonce/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ae8c87b327ac0f1999f9a5d3badbec4713da6852a09928407543f745afcf6f1->leave($__internal_3ae8c87b327ac0f1999f9a5d3badbec4713da6852a09928407543f745afcf6f1_prof);

        
        $__internal_87b880a12cebdfa69048cd825c6593c91798619be6cfa90cc4c5cd6d23e6d299->leave($__internal_87b880a12cebdfa69048cd825c6593c91798619be6cfa90cc4c5cd6d23e6d299_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bced039b4fe8c5354e329a30da7463da4b98582419e4062452daa5b43e29c67d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bced039b4fe8c5354e329a30da7463da4b98582419e4062452daa5b43e29c67d->enter($__internal_bced039b4fe8c5354e329a30da7463da4b98582419e4062452daa5b43e29c67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2729e672d520c53df56c1decb2d6fbaa0a5b402f8d881745d64146da43586917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2729e672d520c53df56c1decb2d6fbaa0a5b402f8d881745d64146da43586917->enter($__internal_2729e672d520c53df56c1decb2d6fbaa0a5b402f8d881745d64146da43586917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_2729e672d520c53df56c1decb2d6fbaa0a5b402f8d881745d64146da43586917->leave($__internal_2729e672d520c53df56c1decb2d6fbaa0a5b402f8d881745d64146da43586917_prof);

        
        $__internal_bced039b4fe8c5354e329a30da7463da4b98582419e4062452daa5b43e29c67d->leave($__internal_bced039b4fe8c5354e329a30da7463da4b98582419e4062452daa5b43e29c67d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4617e3dcd23b958d5e5a38e9af0dd84be23dca83872aac2688c1f60a6e48a0d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4617e3dcd23b958d5e5a38e9af0dd84be23dca83872aac2688c1f60a6e48a0d7->enter($__internal_4617e3dcd23b958d5e5a38e9af0dd84be23dca83872aac2688c1f60a6e48a0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4fb6d1535f18fa622a13d62fed27652dd820c181e2cb9aa189715eb9d5bd6a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb6d1535f18fa622a13d62fed27652dd820c181e2cb9aa189715eb9d5bd6a29->enter($__internal_4fb6d1535f18fa622a13d62fed27652dd820c181e2cb9aa189715eb9d5bd6a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Annonce</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_4fb6d1535f18fa622a13d62fed27652dd820c181e2cb9aa189715eb9d5bd6a29->leave($__internal_4fb6d1535f18fa622a13d62fed27652dd820c181e2cb9aa189715eb9d5bd6a29_prof);

        
        $__internal_4617e3dcd23b958d5e5a38e9af0dd84be23dca83872aac2688c1f60a6e48a0d7->leave($__internal_4617e3dcd23b958d5e5a38e9af0dd84be23dca83872aac2688c1f60a6e48a0d7_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_d360a63437bca8a26732f2932bd8aa8401a04e79cd460ef8ceb23e128ffd8633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d360a63437bca8a26732f2932bd8aa8401a04e79cd460ef8ceb23e128ffd8633->enter($__internal_d360a63437bca8a26732f2932bd8aa8401a04e79cd460ef8ceb23e128ffd8633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_617f0e1826d464ae4b06ede3ad8e7218800c7b78885c238a5d651467e0a51b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617f0e1826d464ae4b06ede3ad8e7218800c7b78885c238a5d651467e0a51b6a->enter($__internal_617f0e1826d464ae4b06ede3ad8e7218800c7b78885c238a5d651467e0a51b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_617f0e1826d464ae4b06ede3ad8e7218800c7b78885c238a5d651467e0a51b6a->leave($__internal_617f0e1826d464ae4b06ede3ad8e7218800c7b78885c238a5d651467e0a51b6a_prof);

        
        $__internal_d360a63437bca8a26732f2932bd8aa8401a04e79cd460ef8ceb23e128ffd8633->leave($__internal_d360a63437bca8a26732f2932bd8aa8401a04e79cd460ef8ceb23e128ffd8633_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Annonce/layout.html.twig";
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
{% block title %}Blog{% endblock %}
{% block body %}
    <h1>Annonce</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", "@OCPlatform/Annonce/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Annonce\\layout.html.twig");
    }
}
