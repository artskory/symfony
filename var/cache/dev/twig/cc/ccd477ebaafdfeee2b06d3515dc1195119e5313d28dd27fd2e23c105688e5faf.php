<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_19cf7e83fb0496d3f7ad1ced6cb0ba05f3b67de6709ed43fcf37416c674f42e7 extends Twig_Template
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
        $__internal_696a9b783e8164c25b21087807421fe725acfa3f9565d312334ff1935df1bbcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_696a9b783e8164c25b21087807421fe725acfa3f9565d312334ff1935df1bbcc->enter($__internal_696a9b783e8164c25b21087807421fe725acfa3f9565d312334ff1935df1bbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_fa614fb7d6501285ae6ddc72e03e98259890fdb953766862667ea20806ced375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa614fb7d6501285ae6ddc72e03e98259890fdb953766862667ea20806ced375->enter($__internal_fa614fb7d6501285ae6ddc72e03e98259890fdb953766862667ea20806ced375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_696a9b783e8164c25b21087807421fe725acfa3f9565d312334ff1935df1bbcc->leave($__internal_696a9b783e8164c25b21087807421fe725acfa3f9565d312334ff1935df1bbcc_prof);

        
        $__internal_fa614fb7d6501285ae6ddc72e03e98259890fdb953766862667ea20806ced375->leave($__internal_fa614fb7d6501285ae6ddc72e03e98259890fdb953766862667ea20806ced375_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f253e9988aac685506421322d7953860a105052d5e4f7820e5135925112e4e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f253e9988aac685506421322d7953860a105052d5e4f7820e5135925112e4e15->enter($__internal_f253e9988aac685506421322d7953860a105052d5e4f7820e5135925112e4e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2af9df7ec1598b99286b9cf5b498ec53a8ac7a81fac63d5eaad7cea655cbc789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af9df7ec1598b99286b9cf5b498ec53a8ac7a81fac63d5eaad7cea655cbc789->enter($__internal_2af9df7ec1598b99286b9cf5b498ec53a8ac7a81fac63d5eaad7cea655cbc789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_2af9df7ec1598b99286b9cf5b498ec53a8ac7a81fac63d5eaad7cea655cbc789->leave($__internal_2af9df7ec1598b99286b9cf5b498ec53a8ac7a81fac63d5eaad7cea655cbc789_prof);

        
        $__internal_f253e9988aac685506421322d7953860a105052d5e4f7820e5135925112e4e15->leave($__internal_f253e9988aac685506421322d7953860a105052d5e4f7820e5135925112e4e15_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_05e7ac2406448ee78e46ad392c4426a02a7910fcf3e6a117c932270ce2e62e07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05e7ac2406448ee78e46ad392c4426a02a7910fcf3e6a117c932270ce2e62e07->enter($__internal_05e7ac2406448ee78e46ad392c4426a02a7910fcf3e6a117c932270ce2e62e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_917a36f365958cfa88e00cdf07ca746ffb057d204fced965423571f8da99a777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917a36f365958cfa88e00cdf07ca746ffb057d204fced965423571f8da99a777->enter($__internal_917a36f365958cfa88e00cdf07ca746ffb057d204fced965423571f8da99a777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_917a36f365958cfa88e00cdf07ca746ffb057d204fced965423571f8da99a777->leave($__internal_917a36f365958cfa88e00cdf07ca746ffb057d204fced965423571f8da99a777_prof);

        
        $__internal_05e7ac2406448ee78e46ad392c4426a02a7910fcf3e6a117c932270ce2e62e07->leave($__internal_05e7ac2406448ee78e46ad392c4426a02a7910fcf3e6a117c932270ce2e62e07_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1df5bfa63ec4150ec92748924943557830c6e424c1d78e2a217b593f14fe8502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df5bfa63ec4150ec92748924943557830c6e424c1d78e2a217b593f14fe8502->enter($__internal_1df5bfa63ec4150ec92748924943557830c6e424c1d78e2a217b593f14fe8502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_cc81b11655188c2686882d313f1a76ed97f4dd5bf993aa7f5e652893a5743345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc81b11655188c2686882d313f1a76ed97f4dd5bf993aa7f5e652893a5743345->enter($__internal_cc81b11655188c2686882d313f1a76ed97f4dd5bf993aa7f5e652893a5743345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cc81b11655188c2686882d313f1a76ed97f4dd5bf993aa7f5e652893a5743345->leave($__internal_cc81b11655188c2686882d313f1a76ed97f4dd5bf993aa7f5e652893a5743345_prof);

        
        $__internal_1df5bfa63ec4150ec92748924943557830c6e424c1d78e2a217b593f14fe8502->leave($__internal_1df5bfa63ec4150ec92748924943557830c6e424c1d78e2a217b593f14fe8502_prof);

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
