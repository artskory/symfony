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
        $__internal_386d3e829e9b6f198595e1764704b22a8539622d55f7985af7d78230b6bf6df5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_386d3e829e9b6f198595e1764704b22a8539622d55f7985af7d78230b6bf6df5->enter($__internal_386d3e829e9b6f198595e1764704b22a8539622d55f7985af7d78230b6bf6df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_457f56aab609f5f0bcbff1194740352f2d4105f4ab6026b88324089f9beee1e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457f56aab609f5f0bcbff1194740352f2d4105f4ab6026b88324089f9beee1e8->enter($__internal_457f56aab609f5f0bcbff1194740352f2d4105f4ab6026b88324089f9beee1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_386d3e829e9b6f198595e1764704b22a8539622d55f7985af7d78230b6bf6df5->leave($__internal_386d3e829e9b6f198595e1764704b22a8539622d55f7985af7d78230b6bf6df5_prof);

        
        $__internal_457f56aab609f5f0bcbff1194740352f2d4105f4ab6026b88324089f9beee1e8->leave($__internal_457f56aab609f5f0bcbff1194740352f2d4105f4ab6026b88324089f9beee1e8_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ce01c231ccab1208d8ed50bcdc3b6d1bbe553f08232cb9015eaa260007417577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce01c231ccab1208d8ed50bcdc3b6d1bbe553f08232cb9015eaa260007417577->enter($__internal_ce01c231ccab1208d8ed50bcdc3b6d1bbe553f08232cb9015eaa260007417577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7a4536e6543a2e447df1922dfe49320a2089acfbef1207aad3f0507a3e1100bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4536e6543a2e447df1922dfe49320a2089acfbef1207aad3f0507a3e1100bb->enter($__internal_7a4536e6543a2e447df1922dfe49320a2089acfbef1207aad3f0507a3e1100bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_7a4536e6543a2e447df1922dfe49320a2089acfbef1207aad3f0507a3e1100bb->leave($__internal_7a4536e6543a2e447df1922dfe49320a2089acfbef1207aad3f0507a3e1100bb_prof);

        
        $__internal_ce01c231ccab1208d8ed50bcdc3b6d1bbe553f08232cb9015eaa260007417577->leave($__internal_ce01c231ccab1208d8ed50bcdc3b6d1bbe553f08232cb9015eaa260007417577_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6cb757d587dfec920321b22b1f97053f55ffeca38edb18a18081825c20ace009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb757d587dfec920321b22b1f97053f55ffeca38edb18a18081825c20ace009->enter($__internal_6cb757d587dfec920321b22b1f97053f55ffeca38edb18a18081825c20ace009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc4255cc92a6cb37c48ea1ccf26765829cef6f4b5fdcfa4873bfd743d91e5ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4255cc92a6cb37c48ea1ccf26765829cef6f4b5fdcfa4873bfd743d91e5ec7->enter($__internal_dc4255cc92a6cb37c48ea1ccf26765829cef6f4b5fdcfa4873bfd743d91e5ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_dc4255cc92a6cb37c48ea1ccf26765829cef6f4b5fdcfa4873bfd743d91e5ec7->leave($__internal_dc4255cc92a6cb37c48ea1ccf26765829cef6f4b5fdcfa4873bfd743d91e5ec7_prof);

        
        $__internal_6cb757d587dfec920321b22b1f97053f55ffeca38edb18a18081825c20ace009->leave($__internal_6cb757d587dfec920321b22b1f97053f55ffeca38edb18a18081825c20ace009_prof);

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
