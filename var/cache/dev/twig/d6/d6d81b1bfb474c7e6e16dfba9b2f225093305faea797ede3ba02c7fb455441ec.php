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
        $__internal_df2d05fbbb21c0c3a5d07e2a94a438fd209f64d8ed678283da6736bb7e18538f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2d05fbbb21c0c3a5d07e2a94a438fd209f64d8ed678283da6736bb7e18538f->enter($__internal_df2d05fbbb21c0c3a5d07e2a94a438fd209f64d8ed678283da6736bb7e18538f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e15617394c46fdc685305353a4cc799dc78939da61e7e44a253b613147a83b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15617394c46fdc685305353a4cc799dc78939da61e7e44a253b613147a83b0a->enter($__internal_e15617394c46fdc685305353a4cc799dc78939da61e7e44a253b613147a83b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df2d05fbbb21c0c3a5d07e2a94a438fd209f64d8ed678283da6736bb7e18538f->leave($__internal_df2d05fbbb21c0c3a5d07e2a94a438fd209f64d8ed678283da6736bb7e18538f_prof);

        
        $__internal_e15617394c46fdc685305353a4cc799dc78939da61e7e44a253b613147a83b0a->leave($__internal_e15617394c46fdc685305353a4cc799dc78939da61e7e44a253b613147a83b0a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a3b892fc378e59e1fe628f7e4d4046db4d81ece30e1d4a9bdb7c9ff843bf50a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3b892fc378e59e1fe628f7e4d4046db4d81ece30e1d4a9bdb7c9ff843bf50a->enter($__internal_4a3b892fc378e59e1fe628f7e4d4046db4d81ece30e1d4a9bdb7c9ff843bf50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a4b29568599c72409f68cacc533d56b134aef5e255a64d6fd8b64df127e056a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b29568599c72409f68cacc533d56b134aef5e255a64d6fd8b64df127e056a0->enter($__internal_a4b29568599c72409f68cacc533d56b134aef5e255a64d6fd8b64df127e056a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a4b29568599c72409f68cacc533d56b134aef5e255a64d6fd8b64df127e056a0->leave($__internal_a4b29568599c72409f68cacc533d56b134aef5e255a64d6fd8b64df127e056a0_prof);

        
        $__internal_4a3b892fc378e59e1fe628f7e4d4046db4d81ece30e1d4a9bdb7c9ff843bf50a->leave($__internal_4a3b892fc378e59e1fe628f7e4d4046db4d81ece30e1d4a9bdb7c9ff843bf50a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5576583722d5ed4d059784458bce0aa1540197e94c0b7e6be3ca102eeb6035af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5576583722d5ed4d059784458bce0aa1540197e94c0b7e6be3ca102eeb6035af->enter($__internal_5576583722d5ed4d059784458bce0aa1540197e94c0b7e6be3ca102eeb6035af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec2829d4e504504ec7c6f8886e14c2f2924cd1128edc1bc274a331eff5d1e390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2829d4e504504ec7c6f8886e14c2f2924cd1128edc1bc274a331eff5d1e390->enter($__internal_ec2829d4e504504ec7c6f8886e14c2f2924cd1128edc1bc274a331eff5d1e390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ec2829d4e504504ec7c6f8886e14c2f2924cd1128edc1bc274a331eff5d1e390->leave($__internal_ec2829d4e504504ec7c6f8886e14c2f2924cd1128edc1bc274a331eff5d1e390_prof);

        
        $__internal_5576583722d5ed4d059784458bce0aa1540197e94c0b7e6be3ca102eeb6035af->leave($__internal_5576583722d5ed4d059784458bce0aa1540197e94c0b7e6be3ca102eeb6035af_prof);

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
