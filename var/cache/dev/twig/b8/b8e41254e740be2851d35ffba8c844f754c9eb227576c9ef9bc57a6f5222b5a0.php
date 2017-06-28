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
        $__internal_a6486fe3bf2aa83b95beb31466246bc1c051307da59288d4a7bb6253438c7478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6486fe3bf2aa83b95beb31466246bc1c051307da59288d4a7bb6253438c7478->enter($__internal_a6486fe3bf2aa83b95beb31466246bc1c051307da59288d4a7bb6253438c7478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_3e99c6eb9824ca7307e42f45ea7199da0d519356e4ae7aa5646868d99b1558b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e99c6eb9824ca7307e42f45ea7199da0d519356e4ae7aa5646868d99b1558b2->enter($__internal_3e99c6eb9824ca7307e42f45ea7199da0d519356e4ae7aa5646868d99b1558b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6486fe3bf2aa83b95beb31466246bc1c051307da59288d4a7bb6253438c7478->leave($__internal_a6486fe3bf2aa83b95beb31466246bc1c051307da59288d4a7bb6253438c7478_prof);

        
        $__internal_3e99c6eb9824ca7307e42f45ea7199da0d519356e4ae7aa5646868d99b1558b2->leave($__internal_3e99c6eb9824ca7307e42f45ea7199da0d519356e4ae7aa5646868d99b1558b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36393f154029caf2ab06560ca138e29ea87d4454d73a4785e17332506e117a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36393f154029caf2ab06560ca138e29ea87d4454d73a4785e17332506e117a7c->enter($__internal_36393f154029caf2ab06560ca138e29ea87d4454d73a4785e17332506e117a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9d6869d0d4de057d73083b8c72b4ec2784dfb7350701b623950b46cc045599d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6869d0d4de057d73083b8c72b4ec2784dfb7350701b623950b46cc045599d5->enter($__internal_9d6869d0d4de057d73083b8c72b4ec2784dfb7350701b623950b46cc045599d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9d6869d0d4de057d73083b8c72b4ec2784dfb7350701b623950b46cc045599d5->leave($__internal_9d6869d0d4de057d73083b8c72b4ec2784dfb7350701b623950b46cc045599d5_prof);

        
        $__internal_36393f154029caf2ab06560ca138e29ea87d4454d73a4785e17332506e117a7c->leave($__internal_36393f154029caf2ab06560ca138e29ea87d4454d73a4785e17332506e117a7c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_96a4abb5a5c3da24925014e77b733d43f16a7b692de8b1373989ba2136e2ab7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a4abb5a5c3da24925014e77b733d43f16a7b692de8b1373989ba2136e2ab7b->enter($__internal_96a4abb5a5c3da24925014e77b733d43f16a7b692de8b1373989ba2136e2ab7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d341c03fd1f0a32f72d3832eccef4e4193bd45ded4d45e2158bbb8080ec3ed4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d341c03fd1f0a32f72d3832eccef4e4193bd45ded4d45e2158bbb8080ec3ed4a->enter($__internal_d341c03fd1f0a32f72d3832eccef4e4193bd45ded4d45e2158bbb8080ec3ed4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d341c03fd1f0a32f72d3832eccef4e4193bd45ded4d45e2158bbb8080ec3ed4a->leave($__internal_d341c03fd1f0a32f72d3832eccef4e4193bd45ded4d45e2158bbb8080ec3ed4a_prof);

        
        $__internal_96a4abb5a5c3da24925014e77b733d43f16a7b692de8b1373989ba2136e2ab7b->leave($__internal_96a4abb5a5c3da24925014e77b733d43f16a7b692de8b1373989ba2136e2ab7b_prof);

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
