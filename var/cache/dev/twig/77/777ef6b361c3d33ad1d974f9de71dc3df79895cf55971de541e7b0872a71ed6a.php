<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_140cb47a104f785dc09c8f52541c380f49e5c661574b9e1ad2dc35133f28812c extends Twig_Template
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
        $__internal_33a4b506a14d4007bef5c1d44fe39e2e0d90496ee16b1d87eb8a7fda7e509e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a4b506a14d4007bef5c1d44fe39e2e0d90496ee16b1d87eb8a7fda7e509e4d->enter($__internal_33a4b506a14d4007bef5c1d44fe39e2e0d90496ee16b1d87eb8a7fda7e509e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_1b89de89e0be5dabaf88f4a601404f2862a0fffbac593a92f67fe02b692f8622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b89de89e0be5dabaf88f4a601404f2862a0fffbac593a92f67fe02b692f8622->enter($__internal_1b89de89e0be5dabaf88f4a601404f2862a0fffbac593a92f67fe02b692f8622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33a4b506a14d4007bef5c1d44fe39e2e0d90496ee16b1d87eb8a7fda7e509e4d->leave($__internal_33a4b506a14d4007bef5c1d44fe39e2e0d90496ee16b1d87eb8a7fda7e509e4d_prof);

        
        $__internal_1b89de89e0be5dabaf88f4a601404f2862a0fffbac593a92f67fe02b692f8622->leave($__internal_1b89de89e0be5dabaf88f4a601404f2862a0fffbac593a92f67fe02b692f8622_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_afeb6c58a151d747ebd3e74b452c890684cc478c994d1be76dc6d99045bffc31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afeb6c58a151d747ebd3e74b452c890684cc478c994d1be76dc6d99045bffc31->enter($__internal_afeb6c58a151d747ebd3e74b452c890684cc478c994d1be76dc6d99045bffc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_531ba249507bbc6b0f41a76827bb89fc5da6006d73c93ce8b1f28ad9b5e5ed66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531ba249507bbc6b0f41a76827bb89fc5da6006d73c93ce8b1f28ad9b5e5ed66->enter($__internal_531ba249507bbc6b0f41a76827bb89fc5da6006d73c93ce8b1f28ad9b5e5ed66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_531ba249507bbc6b0f41a76827bb89fc5da6006d73c93ce8b1f28ad9b5e5ed66->leave($__internal_531ba249507bbc6b0f41a76827bb89fc5da6006d73c93ce8b1f28ad9b5e5ed66_prof);

        
        $__internal_afeb6c58a151d747ebd3e74b452c890684cc478c994d1be76dc6d99045bffc31->leave($__internal_afeb6c58a151d747ebd3e74b452c890684cc478c994d1be76dc6d99045bffc31_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7df85d1e5b8c00059b5d47cce596869153ed8dba6a4458c897af69c7a97de4f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df85d1e5b8c00059b5d47cce596869153ed8dba6a4458c897af69c7a97de4f7->enter($__internal_7df85d1e5b8c00059b5d47cce596869153ed8dba6a4458c897af69c7a97de4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2461586d5f8fc058528a4e11f5171bea81cafdf51a2a3b8e5fe8c3b48b32e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2461586d5f8fc058528a4e11f5171bea81cafdf51a2a3b8e5fe8c3b48b32e15->enter($__internal_c2461586d5f8fc058528a4e11f5171bea81cafdf51a2a3b8e5fe8c3b48b32e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c2461586d5f8fc058528a4e11f5171bea81cafdf51a2a3b8e5fe8c3b48b32e15->leave($__internal_c2461586d5f8fc058528a4e11f5171bea81cafdf51a2a3b8e5fe8c3b48b32e15_prof);

        
        $__internal_7df85d1e5b8c00059b5d47cce596869153ed8dba6a4458c897af69c7a97de4f7->leave($__internal_7df85d1e5b8c00059b5d47cce596869153ed8dba6a4458c897af69c7a97de4f7_prof);

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
