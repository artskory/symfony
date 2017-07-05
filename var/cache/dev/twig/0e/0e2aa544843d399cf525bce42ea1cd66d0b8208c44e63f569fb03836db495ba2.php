<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_051737a3b662c164bede362d4e059e53887d4a4cfdd0a6e018bbd198906018f1 extends Twig_Template
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
        $__internal_b9dccdf1e6c133a6c0dedce56b02374816c79a7ce6c4d3336797b33ed58b9eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9dccdf1e6c133a6c0dedce56b02374816c79a7ce6c4d3336797b33ed58b9eb7->enter($__internal_b9dccdf1e6c133a6c0dedce56b02374816c79a7ce6c4d3336797b33ed58b9eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_ff8f45bc85d7be2ce61998099f7e6b649bc6054b6a2883a864dc3ef60b6258a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8f45bc85d7be2ce61998099f7e6b649bc6054b6a2883a864dc3ef60b6258a2->enter($__internal_ff8f45bc85d7be2ce61998099f7e6b649bc6054b6a2883a864dc3ef60b6258a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9dccdf1e6c133a6c0dedce56b02374816c79a7ce6c4d3336797b33ed58b9eb7->leave($__internal_b9dccdf1e6c133a6c0dedce56b02374816c79a7ce6c4d3336797b33ed58b9eb7_prof);

        
        $__internal_ff8f45bc85d7be2ce61998099f7e6b649bc6054b6a2883a864dc3ef60b6258a2->leave($__internal_ff8f45bc85d7be2ce61998099f7e6b649bc6054b6a2883a864dc3ef60b6258a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_782f17436b5ccbe68e2a02a1fbe98401f6b30c04806df108a67f25c6b42ffbc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782f17436b5ccbe68e2a02a1fbe98401f6b30c04806df108a67f25c6b42ffbc3->enter($__internal_782f17436b5ccbe68e2a02a1fbe98401f6b30c04806df108a67f25c6b42ffbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f313f6aa89e8cd5ca7a138ae17be0d4b705f0a72bb8035bbd75c2a2bda9dd753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f313f6aa89e8cd5ca7a138ae17be0d4b705f0a72bb8035bbd75c2a2bda9dd753->enter($__internal_f313f6aa89e8cd5ca7a138ae17be0d4b705f0a72bb8035bbd75c2a2bda9dd753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f313f6aa89e8cd5ca7a138ae17be0d4b705f0a72bb8035bbd75c2a2bda9dd753->leave($__internal_f313f6aa89e8cd5ca7a138ae17be0d4b705f0a72bb8035bbd75c2a2bda9dd753_prof);

        
        $__internal_782f17436b5ccbe68e2a02a1fbe98401f6b30c04806df108a67f25c6b42ffbc3->leave($__internal_782f17436b5ccbe68e2a02a1fbe98401f6b30c04806df108a67f25c6b42ffbc3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a8df06f8e66f8f824f68265414c8e367a9497083c7618f1023a9978d22d75f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a8df06f8e66f8f824f68265414c8e367a9497083c7618f1023a9978d22d75f6->enter($__internal_8a8df06f8e66f8f824f68265414c8e367a9497083c7618f1023a9978d22d75f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ada07e3654840f81733925cf572315d4c5d6e056db708ef55c376a04bc6fbd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ada07e3654840f81733925cf572315d4c5d6e056db708ef55c376a04bc6fbd9->enter($__internal_5ada07e3654840f81733925cf572315d4c5d6e056db708ef55c376a04bc6fbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5ada07e3654840f81733925cf572315d4c5d6e056db708ef55c376a04bc6fbd9->leave($__internal_5ada07e3654840f81733925cf572315d4c5d6e056db708ef55c376a04bc6fbd9_prof);

        
        $__internal_8a8df06f8e66f8f824f68265414c8e367a9497083c7618f1023a9978d22d75f6->leave($__internal_8a8df06f8e66f8f824f68265414c8e367a9497083c7618f1023a9978d22d75f6_prof);

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
