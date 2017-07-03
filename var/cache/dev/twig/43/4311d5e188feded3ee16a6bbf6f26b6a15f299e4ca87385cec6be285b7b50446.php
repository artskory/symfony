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
        $__internal_eac94f011cc9cff58c4fb3dbfa94e0e55389aa47eeeff6ad8ccb6df8e85de1ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac94f011cc9cff58c4fb3dbfa94e0e55389aa47eeeff6ad8ccb6df8e85de1ba->enter($__internal_eac94f011cc9cff58c4fb3dbfa94e0e55389aa47eeeff6ad8ccb6df8e85de1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_283f9802d285a74d5ec49643f0f89bad0761e05dc8679a674278b6c66d46d99f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283f9802d285a74d5ec49643f0f89bad0761e05dc8679a674278b6c66d46d99f->enter($__internal_283f9802d285a74d5ec49643f0f89bad0761e05dc8679a674278b6c66d46d99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eac94f011cc9cff58c4fb3dbfa94e0e55389aa47eeeff6ad8ccb6df8e85de1ba->leave($__internal_eac94f011cc9cff58c4fb3dbfa94e0e55389aa47eeeff6ad8ccb6df8e85de1ba_prof);

        
        $__internal_283f9802d285a74d5ec49643f0f89bad0761e05dc8679a674278b6c66d46d99f->leave($__internal_283f9802d285a74d5ec49643f0f89bad0761e05dc8679a674278b6c66d46d99f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a774ee0c9cd79a3e7d47c876eef3b00d742577f340bc94c1b9f676edeadb9b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a774ee0c9cd79a3e7d47c876eef3b00d742577f340bc94c1b9f676edeadb9b2c->enter($__internal_a774ee0c9cd79a3e7d47c876eef3b00d742577f340bc94c1b9f676edeadb9b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9f8fbb2ce0ff63771e95df22b477f2a60aeebb15dba6705886d37de4b57b2d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8fbb2ce0ff63771e95df22b477f2a60aeebb15dba6705886d37de4b57b2d2c->enter($__internal_9f8fbb2ce0ff63771e95df22b477f2a60aeebb15dba6705886d37de4b57b2d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9f8fbb2ce0ff63771e95df22b477f2a60aeebb15dba6705886d37de4b57b2d2c->leave($__internal_9f8fbb2ce0ff63771e95df22b477f2a60aeebb15dba6705886d37de4b57b2d2c_prof);

        
        $__internal_a774ee0c9cd79a3e7d47c876eef3b00d742577f340bc94c1b9f676edeadb9b2c->leave($__internal_a774ee0c9cd79a3e7d47c876eef3b00d742577f340bc94c1b9f676edeadb9b2c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5ed3c5cabbc81bb6b19ed1e68f058283a6b7e778f572e3b804420b0e6e777b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5ed3c5cabbc81bb6b19ed1e68f058283a6b7e778f572e3b804420b0e6e777b5->enter($__internal_b5ed3c5cabbc81bb6b19ed1e68f058283a6b7e778f572e3b804420b0e6e777b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f937b9543314f7a9e88e2d17932f03fa822baa6b7e0ff59644f4abad474eb0c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f937b9543314f7a9e88e2d17932f03fa822baa6b7e0ff59644f4abad474eb0c8->enter($__internal_f937b9543314f7a9e88e2d17932f03fa822baa6b7e0ff59644f4abad474eb0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f937b9543314f7a9e88e2d17932f03fa822baa6b7e0ff59644f4abad474eb0c8->leave($__internal_f937b9543314f7a9e88e2d17932f03fa822baa6b7e0ff59644f4abad474eb0c8_prof);

        
        $__internal_b5ed3c5cabbc81bb6b19ed1e68f058283a6b7e778f572e3b804420b0e6e777b5->leave($__internal_b5ed3c5cabbc81bb6b19ed1e68f058283a6b7e778f572e3b804420b0e6e777b5_prof);

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
