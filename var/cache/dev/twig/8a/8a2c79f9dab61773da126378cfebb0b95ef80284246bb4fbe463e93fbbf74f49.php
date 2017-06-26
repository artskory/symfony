<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_de11fff26ee630b5addae6e6d911671c0b27f8ba27246a6b0c194d1d551964dd extends Twig_Template
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
        $__internal_d3170e94743a70ac93227be8993c129054c069231cfe2d6e0fa3f83845be04a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3170e94743a70ac93227be8993c129054c069231cfe2d6e0fa3f83845be04a4->enter($__internal_d3170e94743a70ac93227be8993c129054c069231cfe2d6e0fa3f83845be04a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_f9ebc51c422b0b2615910623cd872ea6196066f9709237bbc897f74318dfcf4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ebc51c422b0b2615910623cd872ea6196066f9709237bbc897f74318dfcf4e->enter($__internal_f9ebc51c422b0b2615910623cd872ea6196066f9709237bbc897f74318dfcf4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3170e94743a70ac93227be8993c129054c069231cfe2d6e0fa3f83845be04a4->leave($__internal_d3170e94743a70ac93227be8993c129054c069231cfe2d6e0fa3f83845be04a4_prof);

        
        $__internal_f9ebc51c422b0b2615910623cd872ea6196066f9709237bbc897f74318dfcf4e->leave($__internal_f9ebc51c422b0b2615910623cd872ea6196066f9709237bbc897f74318dfcf4e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e28106012be1e8b5a7a3c0d38e040e7f6f655b8366f5c9a51ced62183f82b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e28106012be1e8b5a7a3c0d38e040e7f6f655b8366f5c9a51ced62183f82b5e->enter($__internal_3e28106012be1e8b5a7a3c0d38e040e7f6f655b8366f5c9a51ced62183f82b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7a2d1544d24cf027be2737d1dd401725763d3aa850954369eb5f1052f949ffd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2d1544d24cf027be2737d1dd401725763d3aa850954369eb5f1052f949ffd4->enter($__internal_7a2d1544d24cf027be2737d1dd401725763d3aa850954369eb5f1052f949ffd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7a2d1544d24cf027be2737d1dd401725763d3aa850954369eb5f1052f949ffd4->leave($__internal_7a2d1544d24cf027be2737d1dd401725763d3aa850954369eb5f1052f949ffd4_prof);

        
        $__internal_3e28106012be1e8b5a7a3c0d38e040e7f6f655b8366f5c9a51ced62183f82b5e->leave($__internal_3e28106012be1e8b5a7a3c0d38e040e7f6f655b8366f5c9a51ced62183f82b5e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_585b4e8b687ec0867f0202f98132cc96e712a197c84b9d8a8fcf69671ff36b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585b4e8b687ec0867f0202f98132cc96e712a197c84b9d8a8fcf69671ff36b76->enter($__internal_585b4e8b687ec0867f0202f98132cc96e712a197c84b9d8a8fcf69671ff36b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02d905207b424e4e7df00441a8f8dfdbd94aa7156d2b10d3464b8f59d9232b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d905207b424e4e7df00441a8f8dfdbd94aa7156d2b10d3464b8f59d9232b5e->enter($__internal_02d905207b424e4e7df00441a8f8dfdbd94aa7156d2b10d3464b8f59d9232b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_02d905207b424e4e7df00441a8f8dfdbd94aa7156d2b10d3464b8f59d9232b5e->leave($__internal_02d905207b424e4e7df00441a8f8dfdbd94aa7156d2b10d3464b8f59d9232b5e_prof);

        
        $__internal_585b4e8b687ec0867f0202f98132cc96e712a197c84b9d8a8fcf69671ff36b76->leave($__internal_585b4e8b687ec0867f0202f98132cc96e712a197c84b9d8a8fcf69671ff36b76_prof);

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
