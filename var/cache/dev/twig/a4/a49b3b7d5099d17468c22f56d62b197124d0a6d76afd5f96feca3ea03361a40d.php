<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3f2b3abb97719a6e3e85c4c3e5774544520d17ae66b82c94378bf52bc157200d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_7785499bb9ec053d3241a69c1d5e1d64f563455490a2538b39cbceaface81413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7785499bb9ec053d3241a69c1d5e1d64f563455490a2538b39cbceaface81413->enter($__internal_7785499bb9ec053d3241a69c1d5e1d64f563455490a2538b39cbceaface81413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e6fda3fd42e0b7cb0a201e558a54957c350246a0ecff96d427e3273b20ff0428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6fda3fd42e0b7cb0a201e558a54957c350246a0ecff96d427e3273b20ff0428->enter($__internal_e6fda3fd42e0b7cb0a201e558a54957c350246a0ecff96d427e3273b20ff0428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7785499bb9ec053d3241a69c1d5e1d64f563455490a2538b39cbceaface81413->leave($__internal_7785499bb9ec053d3241a69c1d5e1d64f563455490a2538b39cbceaface81413_prof);

        
        $__internal_e6fda3fd42e0b7cb0a201e558a54957c350246a0ecff96d427e3273b20ff0428->leave($__internal_e6fda3fd42e0b7cb0a201e558a54957c350246a0ecff96d427e3273b20ff0428_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_36c5b5604d30c03c0b10186c835ed4449df795e9334e5b233671557c50f1b2a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c5b5604d30c03c0b10186c835ed4449df795e9334e5b233671557c50f1b2a4->enter($__internal_36c5b5604d30c03c0b10186c835ed4449df795e9334e5b233671557c50f1b2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0ced7fdf8a245edda46462440680f66e31486d9963ed9c3ba669578adceba81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ced7fdf8a245edda46462440680f66e31486d9963ed9c3ba669578adceba81->enter($__internal_b0ced7fdf8a245edda46462440680f66e31486d9963ed9c3ba669578adceba81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b0ced7fdf8a245edda46462440680f66e31486d9963ed9c3ba669578adceba81->leave($__internal_b0ced7fdf8a245edda46462440680f66e31486d9963ed9c3ba669578adceba81_prof);

        
        $__internal_36c5b5604d30c03c0b10186c835ed4449df795e9334e5b233671557c50f1b2a4->leave($__internal_36c5b5604d30c03c0b10186c835ed4449df795e9334e5b233671557c50f1b2a4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a52fb2fa8b0fc89c65f12ac190abc0b02a0990a1be6666396b01b2178e396ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a52fb2fa8b0fc89c65f12ac190abc0b02a0990a1be6666396b01b2178e396ba->enter($__internal_9a52fb2fa8b0fc89c65f12ac190abc0b02a0990a1be6666396b01b2178e396ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cbacc2bf87f6b26bb237934e908c7572239054c702fc84706efa8de69c11ff0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbacc2bf87f6b26bb237934e908c7572239054c702fc84706efa8de69c11ff0c->enter($__internal_cbacc2bf87f6b26bb237934e908c7572239054c702fc84706efa8de69c11ff0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cbacc2bf87f6b26bb237934e908c7572239054c702fc84706efa8de69c11ff0c->leave($__internal_cbacc2bf87f6b26bb237934e908c7572239054c702fc84706efa8de69c11ff0c_prof);

        
        $__internal_9a52fb2fa8b0fc89c65f12ac190abc0b02a0990a1be6666396b01b2178e396ba->leave($__internal_9a52fb2fa8b0fc89c65f12ac190abc0b02a0990a1be6666396b01b2178e396ba_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
