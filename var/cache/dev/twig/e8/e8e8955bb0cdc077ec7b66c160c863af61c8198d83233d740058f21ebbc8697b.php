<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_8a5dfcce66ca48ea067b690109b70671a80337bd89d45dcac790a40487233339 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5da3c65dde3dc52e1c1daf02654a3674ed71a6066975d637df634608214b1f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da3c65dde3dc52e1c1daf02654a3674ed71a6066975d637df634608214b1f8c->enter($__internal_5da3c65dde3dc52e1c1daf02654a3674ed71a6066975d637df634608214b1f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_33b7287e017d31d5c286165a72fdb55fbb0bcce986f068570d2035df9785a4f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b7287e017d31d5c286165a72fdb55fbb0bcce986f068570d2035df9785a4f2->enter($__internal_33b7287e017d31d5c286165a72fdb55fbb0bcce986f068570d2035df9785a4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5da3c65dde3dc52e1c1daf02654a3674ed71a6066975d637df634608214b1f8c->leave($__internal_5da3c65dde3dc52e1c1daf02654a3674ed71a6066975d637df634608214b1f8c_prof);

        
        $__internal_33b7287e017d31d5c286165a72fdb55fbb0bcce986f068570d2035df9785a4f2->leave($__internal_33b7287e017d31d5c286165a72fdb55fbb0bcce986f068570d2035df9785a4f2_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7e58d7cc88963fb2560573afc737434fbc4535027112c2a9a981c262525ecfd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e58d7cc88963fb2560573afc737434fbc4535027112c2a9a981c262525ecfd2->enter($__internal_7e58d7cc88963fb2560573afc737434fbc4535027112c2a9a981c262525ecfd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_59e893a98f88d043e45038644ebd3a97bcf44304ca843e80286cefd79b9600eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e893a98f88d043e45038644ebd3a97bcf44304ca843e80286cefd79b9600eb->enter($__internal_59e893a98f88d043e45038644ebd3a97bcf44304ca843e80286cefd79b9600eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_59e893a98f88d043e45038644ebd3a97bcf44304ca843e80286cefd79b9600eb->leave($__internal_59e893a98f88d043e45038644ebd3a97bcf44304ca843e80286cefd79b9600eb_prof);

        
        $__internal_7e58d7cc88963fb2560573afc737434fbc4535027112c2a9a981c262525ecfd2->leave($__internal_7e58d7cc88963fb2560573afc737434fbc4535027112c2a9a981c262525ecfd2_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e6fb5f3c6a611a36778571d39b1f1bdab343c06bc520bc8606e8dc1509dba10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e6fb5f3c6a611a36778571d39b1f1bdab343c06bc520bc8606e8dc1509dba10->enter($__internal_7e6fb5f3c6a611a36778571d39b1f1bdab343c06bc520bc8606e8dc1509dba10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e41706d947e7a5e116cf216d623b039d5c02d4bd0b722e0dbb9aed2971582d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41706d947e7a5e116cf216d623b039d5c02d4bd0b722e0dbb9aed2971582d91->enter($__internal_e41706d947e7a5e116cf216d623b039d5c02d4bd0b722e0dbb9aed2971582d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e41706d947e7a5e116cf216d623b039d5c02d4bd0b722e0dbb9aed2971582d91->leave($__internal_e41706d947e7a5e116cf216d623b039d5c02d4bd0b722e0dbb9aed2971582d91_prof);

        
        $__internal_7e6fb5f3c6a611a36778571d39b1f1bdab343c06bc520bc8606e8dc1509dba10->leave($__internal_7e6fb5f3c6a611a36778571d39b1f1bdab343c06bc520bc8606e8dc1509dba10_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
