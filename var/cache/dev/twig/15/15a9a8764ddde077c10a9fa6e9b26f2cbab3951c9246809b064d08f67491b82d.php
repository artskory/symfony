<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_35f8ba178ff55adade73ce0075dd30a746452cf234fff19aca4b2447e5c74737 extends Twig_Template
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
        $__internal_fc0131f08feadcdf084bd695c41a9806afb1cefff926ed1291470c2bad020a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc0131f08feadcdf084bd695c41a9806afb1cefff926ed1291470c2bad020a00->enter($__internal_fc0131f08feadcdf084bd695c41a9806afb1cefff926ed1291470c2bad020a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_4183fb5646f91eda5376dbe65a250a30a8dcbbfb01c012c3903efb0dd57acbe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4183fb5646f91eda5376dbe65a250a30a8dcbbfb01c012c3903efb0dd57acbe2->enter($__internal_4183fb5646f91eda5376dbe65a250a30a8dcbbfb01c012c3903efb0dd57acbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc0131f08feadcdf084bd695c41a9806afb1cefff926ed1291470c2bad020a00->leave($__internal_fc0131f08feadcdf084bd695c41a9806afb1cefff926ed1291470c2bad020a00_prof);

        
        $__internal_4183fb5646f91eda5376dbe65a250a30a8dcbbfb01c012c3903efb0dd57acbe2->leave($__internal_4183fb5646f91eda5376dbe65a250a30a8dcbbfb01c012c3903efb0dd57acbe2_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9ea2e53b48ad8a47c4a0bdfb38c9dfa81482f710488754092b5ec649dedd3c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea2e53b48ad8a47c4a0bdfb38c9dfa81482f710488754092b5ec649dedd3c43->enter($__internal_9ea2e53b48ad8a47c4a0bdfb38c9dfa81482f710488754092b5ec649dedd3c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f15d0016a8dec951d8a2716de4958695b77503f9a69783894e084b3810d0fb95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15d0016a8dec951d8a2716de4958695b77503f9a69783894e084b3810d0fb95->enter($__internal_f15d0016a8dec951d8a2716de4958695b77503f9a69783894e084b3810d0fb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_f15d0016a8dec951d8a2716de4958695b77503f9a69783894e084b3810d0fb95->leave($__internal_f15d0016a8dec951d8a2716de4958695b77503f9a69783894e084b3810d0fb95_prof);

        
        $__internal_9ea2e53b48ad8a47c4a0bdfb38c9dfa81482f710488754092b5ec649dedd3c43->leave($__internal_9ea2e53b48ad8a47c4a0bdfb38c9dfa81482f710488754092b5ec649dedd3c43_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4e5804fdb3c50b600b3a7154334f445fe6a3d0070fc89b7b6bb7a14681b0af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e5804fdb3c50b600b3a7154334f445fe6a3d0070fc89b7b6bb7a14681b0af0->enter($__internal_a4e5804fdb3c50b600b3a7154334f445fe6a3d0070fc89b7b6bb7a14681b0af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bc4164da6bee765a796e0f451c3a9c429743c9102093fb777a8933985a655083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4164da6bee765a796e0f451c3a9c429743c9102093fb777a8933985a655083->enter($__internal_bc4164da6bee765a796e0f451c3a9c429743c9102093fb777a8933985a655083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_bc4164da6bee765a796e0f451c3a9c429743c9102093fb777a8933985a655083->leave($__internal_bc4164da6bee765a796e0f451c3a9c429743c9102093fb777a8933985a655083_prof);

        
        $__internal_a4e5804fdb3c50b600b3a7154334f445fe6a3d0070fc89b7b6bb7a14681b0af0->leave($__internal_a4e5804fdb3c50b600b3a7154334f445fe6a3d0070fc89b7b6bb7a14681b0af0_prof);

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
