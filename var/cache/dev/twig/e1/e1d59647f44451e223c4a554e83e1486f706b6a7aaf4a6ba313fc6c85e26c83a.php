<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_b15c215d2eb3c839f4ea527202d8e45e50903f55a5b528e9d421be88432803c9 extends Twig_Template
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
        $__internal_92499aa25ed30f0d8cf6de6e7672fd253af18d2a4b398c774de65a3fd74c4655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92499aa25ed30f0d8cf6de6e7672fd253af18d2a4b398c774de65a3fd74c4655->enter($__internal_92499aa25ed30f0d8cf6de6e7672fd253af18d2a4b398c774de65a3fd74c4655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_af476186e7bdab2377cacd5bd1ab00a2ee0a0c292ebbfb16281040e88b75061b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af476186e7bdab2377cacd5bd1ab00a2ee0a0c292ebbfb16281040e88b75061b->enter($__internal_af476186e7bdab2377cacd5bd1ab00a2ee0a0c292ebbfb16281040e88b75061b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_92499aa25ed30f0d8cf6de6e7672fd253af18d2a4b398c774de65a3fd74c4655->leave($__internal_92499aa25ed30f0d8cf6de6e7672fd253af18d2a4b398c774de65a3fd74c4655_prof);

        
        $__internal_af476186e7bdab2377cacd5bd1ab00a2ee0a0c292ebbfb16281040e88b75061b->leave($__internal_af476186e7bdab2377cacd5bd1ab00a2ee0a0c292ebbfb16281040e88b75061b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bcbb4a731c68c674806b8e8bdbb8bf4b3f297dec178f17f32ba3dda5adcaea8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcbb4a731c68c674806b8e8bdbb8bf4b3f297dec178f17f32ba3dda5adcaea8e->enter($__internal_bcbb4a731c68c674806b8e8bdbb8bf4b3f297dec178f17f32ba3dda5adcaea8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_b281f3d77259104ed982dd36f4379de561461f14b18e3c724919498b38a1f366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b281f3d77259104ed982dd36f4379de561461f14b18e3c724919498b38a1f366->enter($__internal_b281f3d77259104ed982dd36f4379de561461f14b18e3c724919498b38a1f366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_b281f3d77259104ed982dd36f4379de561461f14b18e3c724919498b38a1f366->leave($__internal_b281f3d77259104ed982dd36f4379de561461f14b18e3c724919498b38a1f366_prof);

        
        $__internal_bcbb4a731c68c674806b8e8bdbb8bf4b3f297dec178f17f32ba3dda5adcaea8e->leave($__internal_bcbb4a731c68c674806b8e8bdbb8bf4b3f297dec178f17f32ba3dda5adcaea8e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_44b97e4e25a9ba5a9b1ceb2f816eb54eefeeba9eb6bd88bc469b8aedf0d361d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b97e4e25a9ba5a9b1ceb2f816eb54eefeeba9eb6bd88bc469b8aedf0d361d8->enter($__internal_44b97e4e25a9ba5a9b1ceb2f816eb54eefeeba9eb6bd88bc469b8aedf0d361d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_77f1a4de0e241ec37db832c8515fb83104923254d70cf2e4aa38c3a52ee7c5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f1a4de0e241ec37db832c8515fb83104923254d70cf2e4aa38c3a52ee7c5a0->enter($__internal_77f1a4de0e241ec37db832c8515fb83104923254d70cf2e4aa38c3a52ee7c5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_77f1a4de0e241ec37db832c8515fb83104923254d70cf2e4aa38c3a52ee7c5a0->leave($__internal_77f1a4de0e241ec37db832c8515fb83104923254d70cf2e4aa38c3a52ee7c5a0_prof);

        
        $__internal_44b97e4e25a9ba5a9b1ceb2f816eb54eefeeba9eb6bd88bc469b8aedf0d361d8->leave($__internal_44b97e4e25a9ba5a9b1ceb2f816eb54eefeeba9eb6bd88bc469b8aedf0d361d8_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2ca43ba4b6b5699719cf50f4f76a9646aca990c0cd339b72b6902f3e89c3a3de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca43ba4b6b5699719cf50f4f76a9646aca990c0cd339b72b6902f3e89c3a3de->enter($__internal_2ca43ba4b6b5699719cf50f4f76a9646aca990c0cd339b72b6902f3e89c3a3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b6e7916f5e27cd03eb1128c252e55bde86221c91d2c6d37acbd6d92e58fddb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e7916f5e27cd03eb1128c252e55bde86221c91d2c6d37acbd6d92e58fddb43->enter($__internal_b6e7916f5e27cd03eb1128c252e55bde86221c91d2c6d37acbd6d92e58fddb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b6e7916f5e27cd03eb1128c252e55bde86221c91d2c6d37acbd6d92e58fddb43->leave($__internal_b6e7916f5e27cd03eb1128c252e55bde86221c91d2c6d37acbd6d92e58fddb43_prof);

        
        $__internal_2ca43ba4b6b5699719cf50f4f76a9646aca990c0cd339b72b6902f3e89c3a3de->leave($__internal_2ca43ba4b6b5699719cf50f4f76a9646aca990c0cd339b72b6902f3e89c3a3de_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
