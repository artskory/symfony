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
        $__internal_ea31d97add28214265ffbc767ef84f1a2c937e92fc2986c09600a731c5e8a62d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea31d97add28214265ffbc767ef84f1a2c937e92fc2986c09600a731c5e8a62d->enter($__internal_ea31d97add28214265ffbc767ef84f1a2c937e92fc2986c09600a731c5e8a62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_377f929a93ac15621f0f03bddd105d8c1a229ff91d99e7c1ffe66cf3b53708be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377f929a93ac15621f0f03bddd105d8c1a229ff91d99e7c1ffe66cf3b53708be->enter($__internal_377f929a93ac15621f0f03bddd105d8c1a229ff91d99e7c1ffe66cf3b53708be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea31d97add28214265ffbc767ef84f1a2c937e92fc2986c09600a731c5e8a62d->leave($__internal_ea31d97add28214265ffbc767ef84f1a2c937e92fc2986c09600a731c5e8a62d_prof);

        
        $__internal_377f929a93ac15621f0f03bddd105d8c1a229ff91d99e7c1ffe66cf3b53708be->leave($__internal_377f929a93ac15621f0f03bddd105d8c1a229ff91d99e7c1ffe66cf3b53708be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_88ad32cb28d990c5010885ad8d1849241bc4edd2a2c4858641c50fa37045e724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ad32cb28d990c5010885ad8d1849241bc4edd2a2c4858641c50fa37045e724->enter($__internal_88ad32cb28d990c5010885ad8d1849241bc4edd2a2c4858641c50fa37045e724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_816997cb4b9f5000682d48e6ce05074d99a83d18fb0397d4bc7c2846caee9722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816997cb4b9f5000682d48e6ce05074d99a83d18fb0397d4bc7c2846caee9722->enter($__internal_816997cb4b9f5000682d48e6ce05074d99a83d18fb0397d4bc7c2846caee9722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_816997cb4b9f5000682d48e6ce05074d99a83d18fb0397d4bc7c2846caee9722->leave($__internal_816997cb4b9f5000682d48e6ce05074d99a83d18fb0397d4bc7c2846caee9722_prof);

        
        $__internal_88ad32cb28d990c5010885ad8d1849241bc4edd2a2c4858641c50fa37045e724->leave($__internal_88ad32cb28d990c5010885ad8d1849241bc4edd2a2c4858641c50fa37045e724_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c52588764a37f7606d8e995ac4a79c92fc24a97b8e22e493957b7999ea384e21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c52588764a37f7606d8e995ac4a79c92fc24a97b8e22e493957b7999ea384e21->enter($__internal_c52588764a37f7606d8e995ac4a79c92fc24a97b8e22e493957b7999ea384e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d56f3eb03e531eb0f39bc6847ad01c698028650b1d8ba6e809a16fb5b9557e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d56f3eb03e531eb0f39bc6847ad01c698028650b1d8ba6e809a16fb5b9557e1->enter($__internal_2d56f3eb03e531eb0f39bc6847ad01c698028650b1d8ba6e809a16fb5b9557e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2d56f3eb03e531eb0f39bc6847ad01c698028650b1d8ba6e809a16fb5b9557e1->leave($__internal_2d56f3eb03e531eb0f39bc6847ad01c698028650b1d8ba6e809a16fb5b9557e1_prof);

        
        $__internal_c52588764a37f7606d8e995ac4a79c92fc24a97b8e22e493957b7999ea384e21->leave($__internal_c52588764a37f7606d8e995ac4a79c92fc24a97b8e22e493957b7999ea384e21_prof);

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
