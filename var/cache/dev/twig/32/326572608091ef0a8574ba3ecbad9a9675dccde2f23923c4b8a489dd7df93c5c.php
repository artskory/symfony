<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5ef73aa9edca4c79200472eecede73965272989cbb3cd23e5628e5cf2cf2356a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc700127c802d3266fb4d749b0cca0ebe66c59a8ff227d0fdf621f76c1cf1b1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc700127c802d3266fb4d749b0cca0ebe66c59a8ff227d0fdf621f76c1cf1b1a->enter($__internal_fc700127c802d3266fb4d749b0cca0ebe66c59a8ff227d0fdf621f76c1cf1b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_ccc8a60f1a568d043fe212c5e7b480b41088f837f02fcf680aa22ddf5cd694bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc8a60f1a568d043fe212c5e7b480b41088f837f02fcf680aa22ddf5cd694bb->enter($__internal_ccc8a60f1a568d043fe212c5e7b480b41088f837f02fcf680aa22ddf5cd694bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fc700127c802d3266fb4d749b0cca0ebe66c59a8ff227d0fdf621f76c1cf1b1a->leave($__internal_fc700127c802d3266fb4d749b0cca0ebe66c59a8ff227d0fdf621f76c1cf1b1a_prof);

        
        $__internal_ccc8a60f1a568d043fe212c5e7b480b41088f837f02fcf680aa22ddf5cd694bb->leave($__internal_ccc8a60f1a568d043fe212c5e7b480b41088f837f02fcf680aa22ddf5cd694bb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_98c4a6616dcacea37d7881e12ddae44b58fc219d054d43580c4ac31e421c932c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c4a6616dcacea37d7881e12ddae44b58fc219d054d43580c4ac31e421c932c->enter($__internal_98c4a6616dcacea37d7881e12ddae44b58fc219d054d43580c4ac31e421c932c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2ba6dd916202431fd91653895c4abae9c70a6555bcd7d885d155b488c552822e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba6dd916202431fd91653895c4abae9c70a6555bcd7d885d155b488c552822e->enter($__internal_2ba6dd916202431fd91653895c4abae9c70a6555bcd7d885d155b488c552822e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_2ba6dd916202431fd91653895c4abae9c70a6555bcd7d885d155b488c552822e->leave($__internal_2ba6dd916202431fd91653895c4abae9c70a6555bcd7d885d155b488c552822e_prof);

        
        $__internal_98c4a6616dcacea37d7881e12ddae44b58fc219d054d43580c4ac31e421c932c->leave($__internal_98c4a6616dcacea37d7881e12ddae44b58fc219d054d43580c4ac31e421c932c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9f062efc589c97cb69897a9f2b6adba2b1e3856fa0101f7bda874b8ee891fd94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f062efc589c97cb69897a9f2b6adba2b1e3856fa0101f7bda874b8ee891fd94->enter($__internal_9f062efc589c97cb69897a9f2b6adba2b1e3856fa0101f7bda874b8ee891fd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ee036ff54c97d04d2a4cc7531967d864cf3bc17bdef24464da3cb8daba443d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee036ff54c97d04d2a4cc7531967d864cf3bc17bdef24464da3cb8daba443d73->enter($__internal_ee036ff54c97d04d2a4cc7531967d864cf3bc17bdef24464da3cb8daba443d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ee036ff54c97d04d2a4cc7531967d864cf3bc17bdef24464da3cb8daba443d73->leave($__internal_ee036ff54c97d04d2a4cc7531967d864cf3bc17bdef24464da3cb8daba443d73_prof);

        
        $__internal_9f062efc589c97cb69897a9f2b6adba2b1e3856fa0101f7bda874b8ee891fd94->leave($__internal_9f062efc589c97cb69897a9f2b6adba2b1e3856fa0101f7bda874b8ee891fd94_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_064b243c0e8dc210149eda09c2e305fbfb97e7d522a66e3dda01b7e07c2c4a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_064b243c0e8dc210149eda09c2e305fbfb97e7d522a66e3dda01b7e07c2c4a58->enter($__internal_064b243c0e8dc210149eda09c2e305fbfb97e7d522a66e3dda01b7e07c2c4a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_6b160a58e0351ab16748e3e94770a041734b2340826efa7b66b98887461a5d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b160a58e0351ab16748e3e94770a041734b2340826efa7b66b98887461a5d17->enter($__internal_6b160a58e0351ab16748e3e94770a041734b2340826efa7b66b98887461a5d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6b160a58e0351ab16748e3e94770a041734b2340826efa7b66b98887461a5d17->leave($__internal_6b160a58e0351ab16748e3e94770a041734b2340826efa7b66b98887461a5d17_prof);

        
        $__internal_064b243c0e8dc210149eda09c2e305fbfb97e7d522a66e3dda01b7e07c2c4a58->leave($__internal_064b243c0e8dc210149eda09c2e305fbfb97e7d522a66e3dda01b7e07c2c4a58_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
