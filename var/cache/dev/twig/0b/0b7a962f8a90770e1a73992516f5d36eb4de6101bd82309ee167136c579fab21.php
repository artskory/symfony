<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_3c22077f455934d2ca2be46e65bb00331fd583ca16075ad9eb3181a533b644db extends Twig_Template
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
        $__internal_16d2008d14340815a5987a510b2a1e96e140cf0fe0182f0a25f5f3e1b45942b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d2008d14340815a5987a510b2a1e96e140cf0fe0182f0a25f5f3e1b45942b7->enter($__internal_16d2008d14340815a5987a510b2a1e96e140cf0fe0182f0a25f5f3e1b45942b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_d193c5ddc3901d54b46e2e9f653c82bceab44173fafb139405ae1642ca7b5a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d193c5ddc3901d54b46e2e9f653c82bceab44173fafb139405ae1642ca7b5a5b->enter($__internal_d193c5ddc3901d54b46e2e9f653c82bceab44173fafb139405ae1642ca7b5a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16d2008d14340815a5987a510b2a1e96e140cf0fe0182f0a25f5f3e1b45942b7->leave($__internal_16d2008d14340815a5987a510b2a1e96e140cf0fe0182f0a25f5f3e1b45942b7_prof);

        
        $__internal_d193c5ddc3901d54b46e2e9f653c82bceab44173fafb139405ae1642ca7b5a5b->leave($__internal_d193c5ddc3901d54b46e2e9f653c82bceab44173fafb139405ae1642ca7b5a5b_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_098ec4687742c2acbdedc73fe6a5cb1c19e42bbe97e39c63dc642fb9b34e9e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098ec4687742c2acbdedc73fe6a5cb1c19e42bbe97e39c63dc642fb9b34e9e5e->enter($__internal_098ec4687742c2acbdedc73fe6a5cb1c19e42bbe97e39c63dc642fb9b34e9e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9c0745b2146ff5e958cc588cbc1cce33fa39c8703afa81179735195acc104585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0745b2146ff5e958cc588cbc1cce33fa39c8703afa81179735195acc104585->enter($__internal_9c0745b2146ff5e958cc588cbc1cce33fa39c8703afa81179735195acc104585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_9c0745b2146ff5e958cc588cbc1cce33fa39c8703afa81179735195acc104585->leave($__internal_9c0745b2146ff5e958cc588cbc1cce33fa39c8703afa81179735195acc104585_prof);

        
        $__internal_098ec4687742c2acbdedc73fe6a5cb1c19e42bbe97e39c63dc642fb9b34e9e5e->leave($__internal_098ec4687742c2acbdedc73fe6a5cb1c19e42bbe97e39c63dc642fb9b34e9e5e_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_302a3fbd6cdc1ef46589c78463aa7b3aff0812ec17bfa5d9091fc2f476adff00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_302a3fbd6cdc1ef46589c78463aa7b3aff0812ec17bfa5d9091fc2f476adff00->enter($__internal_302a3fbd6cdc1ef46589c78463aa7b3aff0812ec17bfa5d9091fc2f476adff00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b19a11f1f8074a3351cefdb7111d8328e1462963ca1e08ca653966f95434b653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19a11f1f8074a3351cefdb7111d8328e1462963ca1e08ca653966f95434b653->enter($__internal_b19a11f1f8074a3351cefdb7111d8328e1462963ca1e08ca653966f95434b653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b19a11f1f8074a3351cefdb7111d8328e1462963ca1e08ca653966f95434b653->leave($__internal_b19a11f1f8074a3351cefdb7111d8328e1462963ca1e08ca653966f95434b653_prof);

        
        $__internal_302a3fbd6cdc1ef46589c78463aa7b3aff0812ec17bfa5d9091fc2f476adff00->leave($__internal_302a3fbd6cdc1ef46589c78463aa7b3aff0812ec17bfa5d9091fc2f476adff00_prof);

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
