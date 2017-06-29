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
        $__internal_b3688c0dd27374832e6dccc517d870c1c450ff1c0310f9e66dd6bc4c1396607d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3688c0dd27374832e6dccc517d870c1c450ff1c0310f9e66dd6bc4c1396607d->enter($__internal_b3688c0dd27374832e6dccc517d870c1c450ff1c0310f9e66dd6bc4c1396607d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_fce17fb38ef5d1a13cc5f710081f267073fb5243d821cf54ca9a9b2259627596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce17fb38ef5d1a13cc5f710081f267073fb5243d821cf54ca9a9b2259627596->enter($__internal_fce17fb38ef5d1a13cc5f710081f267073fb5243d821cf54ca9a9b2259627596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3688c0dd27374832e6dccc517d870c1c450ff1c0310f9e66dd6bc4c1396607d->leave($__internal_b3688c0dd27374832e6dccc517d870c1c450ff1c0310f9e66dd6bc4c1396607d_prof);

        
        $__internal_fce17fb38ef5d1a13cc5f710081f267073fb5243d821cf54ca9a9b2259627596->leave($__internal_fce17fb38ef5d1a13cc5f710081f267073fb5243d821cf54ca9a9b2259627596_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb3c24b43dd3abda56bdb8ad617e563cec54888ea8684a358b20d2a2ef6096d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3c24b43dd3abda56bdb8ad617e563cec54888ea8684a358b20d2a2ef6096d9->enter($__internal_eb3c24b43dd3abda56bdb8ad617e563cec54888ea8684a358b20d2a2ef6096d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c15615361d06c11ba6143c922798425086a6ed55c241c310fde57c2226de0e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15615361d06c11ba6143c922798425086a6ed55c241c310fde57c2226de0e4d->enter($__internal_c15615361d06c11ba6143c922798425086a6ed55c241c310fde57c2226de0e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c15615361d06c11ba6143c922798425086a6ed55c241c310fde57c2226de0e4d->leave($__internal_c15615361d06c11ba6143c922798425086a6ed55c241c310fde57c2226de0e4d_prof);

        
        $__internal_eb3c24b43dd3abda56bdb8ad617e563cec54888ea8684a358b20d2a2ef6096d9->leave($__internal_eb3c24b43dd3abda56bdb8ad617e563cec54888ea8684a358b20d2a2ef6096d9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_785f65ec025ddab4bc1cb2714ed8dadaa7908dafd12115e8c2df7f1465790d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785f65ec025ddab4bc1cb2714ed8dadaa7908dafd12115e8c2df7f1465790d26->enter($__internal_785f65ec025ddab4bc1cb2714ed8dadaa7908dafd12115e8c2df7f1465790d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0c6f30980542af30894d1ed69089401c3ad402fc247f9708d2bef93d1672e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c6f30980542af30894d1ed69089401c3ad402fc247f9708d2bef93d1672e5a->enter($__internal_d0c6f30980542af30894d1ed69089401c3ad402fc247f9708d2bef93d1672e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d0c6f30980542af30894d1ed69089401c3ad402fc247f9708d2bef93d1672e5a->leave($__internal_d0c6f30980542af30894d1ed69089401c3ad402fc247f9708d2bef93d1672e5a_prof);

        
        $__internal_785f65ec025ddab4bc1cb2714ed8dadaa7908dafd12115e8c2df7f1465790d26->leave($__internal_785f65ec025ddab4bc1cb2714ed8dadaa7908dafd12115e8c2df7f1465790d26_prof);

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
