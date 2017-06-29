<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f238fe998126ce652056c515af8926b0a5c539fb1b5b61c59222e5f96dad5d33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bee9f7393c398b1e3a015591c72a72f88366c079fa20667ec83e0648831ff0eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee9f7393c398b1e3a015591c72a72f88366c079fa20667ec83e0648831ff0eb->enter($__internal_bee9f7393c398b1e3a015591c72a72f88366c079fa20667ec83e0648831ff0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_612d78d76a0e9c30a3717c1b999f167bb08f05b23600a7bb219050e1075319a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612d78d76a0e9c30a3717c1b999f167bb08f05b23600a7bb219050e1075319a7->enter($__internal_612d78d76a0e9c30a3717c1b999f167bb08f05b23600a7bb219050e1075319a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bee9f7393c398b1e3a015591c72a72f88366c079fa20667ec83e0648831ff0eb->leave($__internal_bee9f7393c398b1e3a015591c72a72f88366c079fa20667ec83e0648831ff0eb_prof);

        
        $__internal_612d78d76a0e9c30a3717c1b999f167bb08f05b23600a7bb219050e1075319a7->leave($__internal_612d78d76a0e9c30a3717c1b999f167bb08f05b23600a7bb219050e1075319a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8e8885835cc5bf55124afd19c8a8c63af26cc5d447693071987908cd99b452b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e8885835cc5bf55124afd19c8a8c63af26cc5d447693071987908cd99b452b->enter($__internal_c8e8885835cc5bf55124afd19c8a8c63af26cc5d447693071987908cd99b452b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_59b8d856d935e9318f8721c2063194cd3430199494e1335c12ffb78ff674de50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b8d856d935e9318f8721c2063194cd3430199494e1335c12ffb78ff674de50->enter($__internal_59b8d856d935e9318f8721c2063194cd3430199494e1335c12ffb78ff674de50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_59b8d856d935e9318f8721c2063194cd3430199494e1335c12ffb78ff674de50->leave($__internal_59b8d856d935e9318f8721c2063194cd3430199494e1335c12ffb78ff674de50_prof);

        
        $__internal_c8e8885835cc5bf55124afd19c8a8c63af26cc5d447693071987908cd99b452b->leave($__internal_c8e8885835cc5bf55124afd19c8a8c63af26cc5d447693071987908cd99b452b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_caa9515ded04090b32b74b630396ba44d2916d30d17deec81c79388f48dbb7b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caa9515ded04090b32b74b630396ba44d2916d30d17deec81c79388f48dbb7b2->enter($__internal_caa9515ded04090b32b74b630396ba44d2916d30d17deec81c79388f48dbb7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c2934ea57ebef21d81ded16bc5664689c1cdeb380dfe0d55ef5c5e8a6859620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2934ea57ebef21d81ded16bc5664689c1cdeb380dfe0d55ef5c5e8a6859620->enter($__internal_4c2934ea57ebef21d81ded16bc5664689c1cdeb380dfe0d55ef5c5e8a6859620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4c2934ea57ebef21d81ded16bc5664689c1cdeb380dfe0d55ef5c5e8a6859620->leave($__internal_4c2934ea57ebef21d81ded16bc5664689c1cdeb380dfe0d55ef5c5e8a6859620_prof);

        
        $__internal_caa9515ded04090b32b74b630396ba44d2916d30d17deec81c79388f48dbb7b2->leave($__internal_caa9515ded04090b32b74b630396ba44d2916d30d17deec81c79388f48dbb7b2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
