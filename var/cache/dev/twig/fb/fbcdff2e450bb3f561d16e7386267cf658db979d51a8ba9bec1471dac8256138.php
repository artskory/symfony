<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_f4aee21a1540d42f30875909b29b0bed8576f0f3b2d59e922250e399b796c8d6 extends Twig_Template
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
        $__internal_b9682b8a25861474fa3bf877f9ad1f676bce7c16fccced46b3230b64181a911f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9682b8a25861474fa3bf877f9ad1f676bce7c16fccced46b3230b64181a911f->enter($__internal_b9682b8a25861474fa3bf877f9ad1f676bce7c16fccced46b3230b64181a911f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_6d896f4dbd5f96129a7a3f447eb11345778efb73d2fac062cb961c83c6c6db67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d896f4dbd5f96129a7a3f447eb11345778efb73d2fac062cb961c83c6c6db67->enter($__internal_6d896f4dbd5f96129a7a3f447eb11345778efb73d2fac062cb961c83c6c6db67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9682b8a25861474fa3bf877f9ad1f676bce7c16fccced46b3230b64181a911f->leave($__internal_b9682b8a25861474fa3bf877f9ad1f676bce7c16fccced46b3230b64181a911f_prof);

        
        $__internal_6d896f4dbd5f96129a7a3f447eb11345778efb73d2fac062cb961c83c6c6db67->leave($__internal_6d896f4dbd5f96129a7a3f447eb11345778efb73d2fac062cb961c83c6c6db67_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b8654fcdd0e361c46db602f58b5217ebbe84e91ba85c32cc6e08573213276a4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8654fcdd0e361c46db602f58b5217ebbe84e91ba85c32cc6e08573213276a4f->enter($__internal_b8654fcdd0e361c46db602f58b5217ebbe84e91ba85c32cc6e08573213276a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_cc3d4daaeb0abc295f041476c2cb4e6859d6ddc4b29a8a331da7b721cc53f3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3d4daaeb0abc295f041476c2cb4e6859d6ddc4b29a8a331da7b721cc53f3d8->enter($__internal_cc3d4daaeb0abc295f041476c2cb4e6859d6ddc4b29a8a331da7b721cc53f3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_cc3d4daaeb0abc295f041476c2cb4e6859d6ddc4b29a8a331da7b721cc53f3d8->leave($__internal_cc3d4daaeb0abc295f041476c2cb4e6859d6ddc4b29a8a331da7b721cc53f3d8_prof);

        
        $__internal_b8654fcdd0e361c46db602f58b5217ebbe84e91ba85c32cc6e08573213276a4f->leave($__internal_b8654fcdd0e361c46db602f58b5217ebbe84e91ba85c32cc6e08573213276a4f_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7dcdd4a51f04ffe1ec8d94ef184e167dc90373bab14a2b5ca5a697c61711e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7dcdd4a51f04ffe1ec8d94ef184e167dc90373bab14a2b5ca5a697c61711e56->enter($__internal_b7dcdd4a51f04ffe1ec8d94ef184e167dc90373bab14a2b5ca5a697c61711e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_21082a445dde5f8c0d5502f59801e459300dc6624b0f7afda0569199e69fb54b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21082a445dde5f8c0d5502f59801e459300dc6624b0f7afda0569199e69fb54b->enter($__internal_21082a445dde5f8c0d5502f59801e459300dc6624b0f7afda0569199e69fb54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_21082a445dde5f8c0d5502f59801e459300dc6624b0f7afda0569199e69fb54b->leave($__internal_21082a445dde5f8c0d5502f59801e459300dc6624b0f7afda0569199e69fb54b_prof);

        
        $__internal_b7dcdd4a51f04ffe1ec8d94ef184e167dc90373bab14a2b5ca5a697c61711e56->leave($__internal_b7dcdd4a51f04ffe1ec8d94ef184e167dc90373bab14a2b5ca5a697c61711e56_prof);

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
