<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_cd578170e93eee88c17030098e1da580e2234250ed44d18a0c51b1f8f3b8df44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_121b01dd7e44642d1b1b0aad9e82cc704686e5f629cedf927d33d04273fbea4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121b01dd7e44642d1b1b0aad9e82cc704686e5f629cedf927d33d04273fbea4c->enter($__internal_121b01dd7e44642d1b1b0aad9e82cc704686e5f629cedf927d33d04273fbea4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_312e843ba8a4df5f429056a714abecd5c81ef990b7376a8f8c64b65f74422a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312e843ba8a4df5f429056a714abecd5c81ef990b7376a8f8c64b65f74422a5b->enter($__internal_312e843ba8a4df5f429056a714abecd5c81ef990b7376a8f8c64b65f74422a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_121b01dd7e44642d1b1b0aad9e82cc704686e5f629cedf927d33d04273fbea4c->leave($__internal_121b01dd7e44642d1b1b0aad9e82cc704686e5f629cedf927d33d04273fbea4c_prof);

        
        $__internal_312e843ba8a4df5f429056a714abecd5c81ef990b7376a8f8c64b65f74422a5b->leave($__internal_312e843ba8a4df5f429056a714abecd5c81ef990b7376a8f8c64b65f74422a5b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_15a719c43a80ca067c1f3e151dd3e6f98b9ca57ec604e9cce048894b94fb5fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a719c43a80ca067c1f3e151dd3e6f98b9ca57ec604e9cce048894b94fb5fac->enter($__internal_15a719c43a80ca067c1f3e151dd3e6f98b9ca57ec604e9cce048894b94fb5fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_727260b75f9c0b61e14d5b95348cdbc9540d75441a5625583655fddb7b54ca8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727260b75f9c0b61e14d5b95348cdbc9540d75441a5625583655fddb7b54ca8a->enter($__internal_727260b75f9c0b61e14d5b95348cdbc9540d75441a5625583655fddb7b54ca8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_727260b75f9c0b61e14d5b95348cdbc9540d75441a5625583655fddb7b54ca8a->leave($__internal_727260b75f9c0b61e14d5b95348cdbc9540d75441a5625583655fddb7b54ca8a_prof);

        
        $__internal_15a719c43a80ca067c1f3e151dd3e6f98b9ca57ec604e9cce048894b94fb5fac->leave($__internal_15a719c43a80ca067c1f3e151dd3e6f98b9ca57ec604e9cce048894b94fb5fac_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_855a727806bc4b2649a754682f9048d4dc1eba152127717031dc39f8a1a33f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855a727806bc4b2649a754682f9048d4dc1eba152127717031dc39f8a1a33f12->enter($__internal_855a727806bc4b2649a754682f9048d4dc1eba152127717031dc39f8a1a33f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8a00ba72538255e2714d3931178f820773f6dcccf0f6a8d76a59c3cdf5a9484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a00ba72538255e2714d3931178f820773f6dcccf0f6a8d76a59c3cdf5a9484->enter($__internal_c8a00ba72538255e2714d3931178f820773f6dcccf0f6a8d76a59c3cdf5a9484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c8a00ba72538255e2714d3931178f820773f6dcccf0f6a8d76a59c3cdf5a9484->leave($__internal_c8a00ba72538255e2714d3931178f820773f6dcccf0f6a8d76a59c3cdf5a9484_prof);

        
        $__internal_855a727806bc4b2649a754682f9048d4dc1eba152127717031dc39f8a1a33f12->leave($__internal_855a727806bc4b2649a754682f9048d4dc1eba152127717031dc39f8a1a33f12_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
