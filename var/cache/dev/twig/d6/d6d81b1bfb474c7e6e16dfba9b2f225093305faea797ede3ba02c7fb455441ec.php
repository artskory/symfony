<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_b98725b87790fff96ce4485a8a6941eadf31139981db31b6f1f1790cddb7eab8 extends Twig_Template
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
        $__internal_28c13e556aabbc6d053fcd6133a96a4ec01d03b27e08756e950336095f36b237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28c13e556aabbc6d053fcd6133a96a4ec01d03b27e08756e950336095f36b237->enter($__internal_28c13e556aabbc6d053fcd6133a96a4ec01d03b27e08756e950336095f36b237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_b067a17481eb9837ef53cb34c908abdccf3e607f44c38de33bdfaf75ba206d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b067a17481eb9837ef53cb34c908abdccf3e607f44c38de33bdfaf75ba206d00->enter($__internal_b067a17481eb9837ef53cb34c908abdccf3e607f44c38de33bdfaf75ba206d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28c13e556aabbc6d053fcd6133a96a4ec01d03b27e08756e950336095f36b237->leave($__internal_28c13e556aabbc6d053fcd6133a96a4ec01d03b27e08756e950336095f36b237_prof);

        
        $__internal_b067a17481eb9837ef53cb34c908abdccf3e607f44c38de33bdfaf75ba206d00->leave($__internal_b067a17481eb9837ef53cb34c908abdccf3e607f44c38de33bdfaf75ba206d00_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d6b50a2db1107cefd71fd0401b0d7d5970afa107dc8ef51dd032418fd33e42a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6b50a2db1107cefd71fd0401b0d7d5970afa107dc8ef51dd032418fd33e42a->enter($__internal_3d6b50a2db1107cefd71fd0401b0d7d5970afa107dc8ef51dd032418fd33e42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8f3acdd13fa264ee84703ff0b18ab6c02656066fdc619d92bffa3144e46adb49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3acdd13fa264ee84703ff0b18ab6c02656066fdc619d92bffa3144e46adb49->enter($__internal_8f3acdd13fa264ee84703ff0b18ab6c02656066fdc619d92bffa3144e46adb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8f3acdd13fa264ee84703ff0b18ab6c02656066fdc619d92bffa3144e46adb49->leave($__internal_8f3acdd13fa264ee84703ff0b18ab6c02656066fdc619d92bffa3144e46adb49_prof);

        
        $__internal_3d6b50a2db1107cefd71fd0401b0d7d5970afa107dc8ef51dd032418fd33e42a->leave($__internal_3d6b50a2db1107cefd71fd0401b0d7d5970afa107dc8ef51dd032418fd33e42a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3929ad1234c7be7f09d3ef44c0e6643d90cfd807242c9625e9d339f86a464cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3929ad1234c7be7f09d3ef44c0e6643d90cfd807242c9625e9d339f86a464cf5->enter($__internal_3929ad1234c7be7f09d3ef44c0e6643d90cfd807242c9625e9d339f86a464cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa9d33d3181b0897f1f408a377f4e5551b470ca87f5404b3bf544b009d6e4f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa9d33d3181b0897f1f408a377f4e5551b470ca87f5404b3bf544b009d6e4f15->enter($__internal_fa9d33d3181b0897f1f408a377f4e5551b470ca87f5404b3bf544b009d6e4f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fa9d33d3181b0897f1f408a377f4e5551b470ca87f5404b3bf544b009d6e4f15->leave($__internal_fa9d33d3181b0897f1f408a377f4e5551b470ca87f5404b3bf544b009d6e4f15_prof);

        
        $__internal_3929ad1234c7be7f09d3ef44c0e6643d90cfd807242c9625e9d339f86a464cf5->leave($__internal_3929ad1234c7be7f09d3ef44c0e6643d90cfd807242c9625e9d339f86a464cf5_prof);

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
