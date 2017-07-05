<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_8925b0bbb494b52fbe99cb3814511b8dc16332fb17d073c5681f8b2c0b43e738 extends Twig_Template
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
        $__internal_0a776006b8030762a85aecfa5eaec1b5d70ac4ccb53a3af049f963a357676083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a776006b8030762a85aecfa5eaec1b5d70ac4ccb53a3af049f963a357676083->enter($__internal_0a776006b8030762a85aecfa5eaec1b5d70ac4ccb53a3af049f963a357676083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_5f8105051cdebb112c288f08001ccd17c3e7b61eaf40ac308d9761e4cf780bc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8105051cdebb112c288f08001ccd17c3e7b61eaf40ac308d9761e4cf780bc5->enter($__internal_5f8105051cdebb112c288f08001ccd17c3e7b61eaf40ac308d9761e4cf780bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a776006b8030762a85aecfa5eaec1b5d70ac4ccb53a3af049f963a357676083->leave($__internal_0a776006b8030762a85aecfa5eaec1b5d70ac4ccb53a3af049f963a357676083_prof);

        
        $__internal_5f8105051cdebb112c288f08001ccd17c3e7b61eaf40ac308d9761e4cf780bc5->leave($__internal_5f8105051cdebb112c288f08001ccd17c3e7b61eaf40ac308d9761e4cf780bc5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c6fb372f71f948c660b5fba41865583c488a852e05627af29c9413327bf18ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6fb372f71f948c660b5fba41865583c488a852e05627af29c9413327bf18ae4->enter($__internal_c6fb372f71f948c660b5fba41865583c488a852e05627af29c9413327bf18ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_40762d4fb55133c6c9bf66ff7ffc44bbad5bba0eb45b468c0a2c253afc2da5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40762d4fb55133c6c9bf66ff7ffc44bbad5bba0eb45b468c0a2c253afc2da5fd->enter($__internal_40762d4fb55133c6c9bf66ff7ffc44bbad5bba0eb45b468c0a2c253afc2da5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_40762d4fb55133c6c9bf66ff7ffc44bbad5bba0eb45b468c0a2c253afc2da5fd->leave($__internal_40762d4fb55133c6c9bf66ff7ffc44bbad5bba0eb45b468c0a2c253afc2da5fd_prof);

        
        $__internal_c6fb372f71f948c660b5fba41865583c488a852e05627af29c9413327bf18ae4->leave($__internal_c6fb372f71f948c660b5fba41865583c488a852e05627af29c9413327bf18ae4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cae71bcf291194aa82b524e54dcbefbc6cc46acaf028b47646f8c4634d402a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae71bcf291194aa82b524e54dcbefbc6cc46acaf028b47646f8c4634d402a76->enter($__internal_cae71bcf291194aa82b524e54dcbefbc6cc46acaf028b47646f8c4634d402a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d90748302f4f89aa4fadc0a532887f6e49c9ba918b485a77b08f2f387f2ed22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d90748302f4f89aa4fadc0a532887f6e49c9ba918b485a77b08f2f387f2ed22->enter($__internal_4d90748302f4f89aa4fadc0a532887f6e49c9ba918b485a77b08f2f387f2ed22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4d90748302f4f89aa4fadc0a532887f6e49c9ba918b485a77b08f2f387f2ed22->leave($__internal_4d90748302f4f89aa4fadc0a532887f6e49c9ba918b485a77b08f2f387f2ed22_prof);

        
        $__internal_cae71bcf291194aa82b524e54dcbefbc6cc46acaf028b47646f8c4634d402a76->leave($__internal_cae71bcf291194aa82b524e54dcbefbc6cc46acaf028b47646f8c4634d402a76_prof);

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
