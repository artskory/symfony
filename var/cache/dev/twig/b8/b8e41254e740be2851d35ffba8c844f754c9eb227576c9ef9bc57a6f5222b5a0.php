<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_29cc2c29c28231f2cb4628c60aa6000754055103c29bd842fc6c7a83c85d32e3 extends Twig_Template
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
        $__internal_27060f3da4b195038cbd552fd7eb72075a1a9677e005e13164fc06fb77c71dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27060f3da4b195038cbd552fd7eb72075a1a9677e005e13164fc06fb77c71dfb->enter($__internal_27060f3da4b195038cbd552fd7eb72075a1a9677e005e13164fc06fb77c71dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_93dbf98b7e7b2799847ac933027087d99c3904b2727183d43c5fb955bfdc0823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93dbf98b7e7b2799847ac933027087d99c3904b2727183d43c5fb955bfdc0823->enter($__internal_93dbf98b7e7b2799847ac933027087d99c3904b2727183d43c5fb955bfdc0823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27060f3da4b195038cbd552fd7eb72075a1a9677e005e13164fc06fb77c71dfb->leave($__internal_27060f3da4b195038cbd552fd7eb72075a1a9677e005e13164fc06fb77c71dfb_prof);

        
        $__internal_93dbf98b7e7b2799847ac933027087d99c3904b2727183d43c5fb955bfdc0823->leave($__internal_93dbf98b7e7b2799847ac933027087d99c3904b2727183d43c5fb955bfdc0823_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_17948907743548d2d43da56bb393ad3d686b71e572b5dfc1ebcd95ed90f8e66f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17948907743548d2d43da56bb393ad3d686b71e572b5dfc1ebcd95ed90f8e66f->enter($__internal_17948907743548d2d43da56bb393ad3d686b71e572b5dfc1ebcd95ed90f8e66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6376e08b326cb42118d0ba5c03deeaba96854ffd2ff87c47112dce9804d6531e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6376e08b326cb42118d0ba5c03deeaba96854ffd2ff87c47112dce9804d6531e->enter($__internal_6376e08b326cb42118d0ba5c03deeaba96854ffd2ff87c47112dce9804d6531e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6376e08b326cb42118d0ba5c03deeaba96854ffd2ff87c47112dce9804d6531e->leave($__internal_6376e08b326cb42118d0ba5c03deeaba96854ffd2ff87c47112dce9804d6531e_prof);

        
        $__internal_17948907743548d2d43da56bb393ad3d686b71e572b5dfc1ebcd95ed90f8e66f->leave($__internal_17948907743548d2d43da56bb393ad3d686b71e572b5dfc1ebcd95ed90f8e66f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_937ed517c404f80df1558bc26120c833cdbebe9f535f49cdd3ceca486f0501a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_937ed517c404f80df1558bc26120c833cdbebe9f535f49cdd3ceca486f0501a7->enter($__internal_937ed517c404f80df1558bc26120c833cdbebe9f535f49cdd3ceca486f0501a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50aeabcdab146172b5e8b26c5299cac520406505ad71a282f6e58b2622f3596b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50aeabcdab146172b5e8b26c5299cac520406505ad71a282f6e58b2622f3596b->enter($__internal_50aeabcdab146172b5e8b26c5299cac520406505ad71a282f6e58b2622f3596b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_50aeabcdab146172b5e8b26c5299cac520406505ad71a282f6e58b2622f3596b->leave($__internal_50aeabcdab146172b5e8b26c5299cac520406505ad71a282f6e58b2622f3596b_prof);

        
        $__internal_937ed517c404f80df1558bc26120c833cdbebe9f535f49cdd3ceca486f0501a7->leave($__internal_937ed517c404f80df1558bc26120c833cdbebe9f535f49cdd3ceca486f0501a7_prof);

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
