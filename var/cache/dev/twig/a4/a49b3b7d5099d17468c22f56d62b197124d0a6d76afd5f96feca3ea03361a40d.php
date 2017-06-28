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
        $__internal_872cd05c62d487b27604663c73f9a99170e617856004ae03e5f97ce7eae77932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872cd05c62d487b27604663c73f9a99170e617856004ae03e5f97ce7eae77932->enter($__internal_872cd05c62d487b27604663c73f9a99170e617856004ae03e5f97ce7eae77932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_4a81ff08b4853c112005fa224be7fec1b935942b8113d397c9ea037a84b30e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a81ff08b4853c112005fa224be7fec1b935942b8113d397c9ea037a84b30e8a->enter($__internal_4a81ff08b4853c112005fa224be7fec1b935942b8113d397c9ea037a84b30e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_872cd05c62d487b27604663c73f9a99170e617856004ae03e5f97ce7eae77932->leave($__internal_872cd05c62d487b27604663c73f9a99170e617856004ae03e5f97ce7eae77932_prof);

        
        $__internal_4a81ff08b4853c112005fa224be7fec1b935942b8113d397c9ea037a84b30e8a->leave($__internal_4a81ff08b4853c112005fa224be7fec1b935942b8113d397c9ea037a84b30e8a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb6c47c84bfd18c192515d97b3711894057abafcdf8a24dc3b76394adb5d283f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb6c47c84bfd18c192515d97b3711894057abafcdf8a24dc3b76394adb5d283f->enter($__internal_eb6c47c84bfd18c192515d97b3711894057abafcdf8a24dc3b76394adb5d283f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cde5e7c559c67f66ff79430e3376ab4352ac9cb7baafb3b05c51723726c993f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde5e7c559c67f66ff79430e3376ab4352ac9cb7baafb3b05c51723726c993f8->enter($__internal_cde5e7c559c67f66ff79430e3376ab4352ac9cb7baafb3b05c51723726c993f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cde5e7c559c67f66ff79430e3376ab4352ac9cb7baafb3b05c51723726c993f8->leave($__internal_cde5e7c559c67f66ff79430e3376ab4352ac9cb7baafb3b05c51723726c993f8_prof);

        
        $__internal_eb6c47c84bfd18c192515d97b3711894057abafcdf8a24dc3b76394adb5d283f->leave($__internal_eb6c47c84bfd18c192515d97b3711894057abafcdf8a24dc3b76394adb5d283f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7027e65b43e5488e0ceb4f01689b6858b0b9a06b252917546dd55898cbba5bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7027e65b43e5488e0ceb4f01689b6858b0b9a06b252917546dd55898cbba5bf->enter($__internal_e7027e65b43e5488e0ceb4f01689b6858b0b9a06b252917546dd55898cbba5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b71d02c8737281056c36d203dcea9d0a8a1b30906d69b6f3038d07866027445a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b71d02c8737281056c36d203dcea9d0a8a1b30906d69b6f3038d07866027445a->enter($__internal_b71d02c8737281056c36d203dcea9d0a8a1b30906d69b6f3038d07866027445a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b71d02c8737281056c36d203dcea9d0a8a1b30906d69b6f3038d07866027445a->leave($__internal_b71d02c8737281056c36d203dcea9d0a8a1b30906d69b6f3038d07866027445a_prof);

        
        $__internal_e7027e65b43e5488e0ceb4f01689b6858b0b9a06b252917546dd55898cbba5bf->leave($__internal_e7027e65b43e5488e0ceb4f01689b6858b0b9a06b252917546dd55898cbba5bf_prof);

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
