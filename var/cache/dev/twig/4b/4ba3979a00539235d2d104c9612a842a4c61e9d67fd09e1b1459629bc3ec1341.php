<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_4c4c8ac8e0e37cd4aa94b71f9afb6030089a1829faba33be1a78542d59087450 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2657adee18e247271c58d39b812f85411edb7b3d90fa785b44339e38d58ceb13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2657adee18e247271c58d39b812f85411edb7b3d90fa785b44339e38d58ceb13->enter($__internal_2657adee18e247271c58d39b812f85411edb7b3d90fa785b44339e38d58ceb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_7fb6bfa97016c2ab1bb6a19b076917b97ddc86c4a4cea852e44de9e0341a3a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb6bfa97016c2ab1bb6a19b076917b97ddc86c4a4cea852e44de9e0341a3a72->enter($__internal_7fb6bfa97016c2ab1bb6a19b076917b97ddc86c4a4cea852e44de9e0341a3a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2657adee18e247271c58d39b812f85411edb7b3d90fa785b44339e38d58ceb13->leave($__internal_2657adee18e247271c58d39b812f85411edb7b3d90fa785b44339e38d58ceb13_prof);

        
        $__internal_7fb6bfa97016c2ab1bb6a19b076917b97ddc86c4a4cea852e44de9e0341a3a72->leave($__internal_7fb6bfa97016c2ab1bb6a19b076917b97ddc86c4a4cea852e44de9e0341a3a72_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_363b60b0d79e821e7ae5ac48d566676740883c3389d8f1b5972f3b95e745c7ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_363b60b0d79e821e7ae5ac48d566676740883c3389d8f1b5972f3b95e745c7ba->enter($__internal_363b60b0d79e821e7ae5ac48d566676740883c3389d8f1b5972f3b95e745c7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b7eb5386182367cb3a346fe8798ea149959b24d6a7a8850378c8b573dfc5aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7eb5386182367cb3a346fe8798ea149959b24d6a7a8850378c8b573dfc5aad->enter($__internal_9b7eb5386182367cb3a346fe8798ea149959b24d6a7a8850378c8b573dfc5aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9b7eb5386182367cb3a346fe8798ea149959b24d6a7a8850378c8b573dfc5aad->leave($__internal_9b7eb5386182367cb3a346fe8798ea149959b24d6a7a8850378c8b573dfc5aad_prof);

        
        $__internal_363b60b0d79e821e7ae5ac48d566676740883c3389d8f1b5972f3b95e745c7ba->leave($__internal_363b60b0d79e821e7ae5ac48d566676740883c3389d8f1b5972f3b95e745c7ba_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d8c1993a2c4fe6e1dc1d279b66e9337ae2cb1c5036b934e4baef82550715e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d8c1993a2c4fe6e1dc1d279b66e9337ae2cb1c5036b934e4baef82550715e8c->enter($__internal_8d8c1993a2c4fe6e1dc1d279b66e9337ae2cb1c5036b934e4baef82550715e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2199993a0e1a849bd2af8573fae2085fae7833cf554f3e36d230b1a6a8e4fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2199993a0e1a849bd2af8573fae2085fae7833cf554f3e36d230b1a6a8e4fa2->enter($__internal_b2199993a0e1a849bd2af8573fae2085fae7833cf554f3e36d230b1a6a8e4fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_b2199993a0e1a849bd2af8573fae2085fae7833cf554f3e36d230b1a6a8e4fa2->leave($__internal_b2199993a0e1a849bd2af8573fae2085fae7833cf554f3e36d230b1a6a8e4fa2_prof);

        
        $__internal_8d8c1993a2c4fe6e1dc1d279b66e9337ae2cb1c5036b934e4baef82550715e8c->leave($__internal_8d8c1993a2c4fe6e1dc1d279b66e9337ae2cb1c5036b934e4baef82550715e8c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
