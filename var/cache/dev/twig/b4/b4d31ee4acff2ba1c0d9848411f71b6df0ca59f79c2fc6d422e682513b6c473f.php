<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_38f70f5888724d789978af9d8834141b14b95ae0932dd51d1af54ac5fbace4eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_ef1ddae61b7216c7d1ee802c0626862ddf3f88328ad420b06263eccd81b1bddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef1ddae61b7216c7d1ee802c0626862ddf3f88328ad420b06263eccd81b1bddf->enter($__internal_ef1ddae61b7216c7d1ee802c0626862ddf3f88328ad420b06263eccd81b1bddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_5fcaa1fef22e94f0c17c8a56cc20944c3b221407696875121ee1a3b9db8f853d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fcaa1fef22e94f0c17c8a56cc20944c3b221407696875121ee1a3b9db8f853d->enter($__internal_5fcaa1fef22e94f0c17c8a56cc20944c3b221407696875121ee1a3b9db8f853d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef1ddae61b7216c7d1ee802c0626862ddf3f88328ad420b06263eccd81b1bddf->leave($__internal_ef1ddae61b7216c7d1ee802c0626862ddf3f88328ad420b06263eccd81b1bddf_prof);

        
        $__internal_5fcaa1fef22e94f0c17c8a56cc20944c3b221407696875121ee1a3b9db8f853d->leave($__internal_5fcaa1fef22e94f0c17c8a56cc20944c3b221407696875121ee1a3b9db8f853d_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f21f50a9938a0a9205fdc6437ace7886ff82d6fa26130858fbc2d5dac5c0e585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f21f50a9938a0a9205fdc6437ace7886ff82d6fa26130858fbc2d5dac5c0e585->enter($__internal_f21f50a9938a0a9205fdc6437ace7886ff82d6fa26130858fbc2d5dac5c0e585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_38b569dc80da1f6ca974389ae361d8587c40c9d15ebfcbcc3c4e7550d5d8c49f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b569dc80da1f6ca974389ae361d8587c40c9d15ebfcbcc3c4e7550d5d8c49f->enter($__internal_38b569dc80da1f6ca974389ae361d8587c40c9d15ebfcbcc3c4e7550d5d8c49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_38b569dc80da1f6ca974389ae361d8587c40c9d15ebfcbcc3c4e7550d5d8c49f->leave($__internal_38b569dc80da1f6ca974389ae361d8587c40c9d15ebfcbcc3c4e7550d5d8c49f_prof);

        
        $__internal_f21f50a9938a0a9205fdc6437ace7886ff82d6fa26130858fbc2d5dac5c0e585->leave($__internal_f21f50a9938a0a9205fdc6437ace7886ff82d6fa26130858fbc2d5dac5c0e585_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_80ff8e8b398e7999c03c9c59e40da47a6e84f169fbb68992997a987e226ef5ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ff8e8b398e7999c03c9c59e40da47a6e84f169fbb68992997a987e226ef5ff->enter($__internal_80ff8e8b398e7999c03c9c59e40da47a6e84f169fbb68992997a987e226ef5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f161242ef0a46f6e05e481daedb9115a8c5feb37e1c886e033d9d4211344471c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f161242ef0a46f6e05e481daedb9115a8c5feb37e1c886e033d9d4211344471c->enter($__internal_f161242ef0a46f6e05e481daedb9115a8c5feb37e1c886e033d9d4211344471c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f161242ef0a46f6e05e481daedb9115a8c5feb37e1c886e033d9d4211344471c->leave($__internal_f161242ef0a46f6e05e481daedb9115a8c5feb37e1c886e033d9d4211344471c_prof);

        
        $__internal_80ff8e8b398e7999c03c9c59e40da47a6e84f169fbb68992997a987e226ef5ff->leave($__internal_80ff8e8b398e7999c03c9c59e40da47a6e84f169fbb68992997a987e226ef5ff_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
