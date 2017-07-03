<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_c84de608bdf697317d77c8f19a433e9bc246c32796894b6e4676b5f7949e5065 extends Twig_Template
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
        $__internal_957e372a0473e53e21fc3455d2fda8dc9d396ebe633b20042c2c35c0094be85b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_957e372a0473e53e21fc3455d2fda8dc9d396ebe633b20042c2c35c0094be85b->enter($__internal_957e372a0473e53e21fc3455d2fda8dc9d396ebe633b20042c2c35c0094be85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_40fb2f579a37a1aa18e650181cb7409c458119e31f899c3aebef8068c8d82c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40fb2f579a37a1aa18e650181cb7409c458119e31f899c3aebef8068c8d82c47->enter($__internal_40fb2f579a37a1aa18e650181cb7409c458119e31f899c3aebef8068c8d82c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_957e372a0473e53e21fc3455d2fda8dc9d396ebe633b20042c2c35c0094be85b->leave($__internal_957e372a0473e53e21fc3455d2fda8dc9d396ebe633b20042c2c35c0094be85b_prof);

        
        $__internal_40fb2f579a37a1aa18e650181cb7409c458119e31f899c3aebef8068c8d82c47->leave($__internal_40fb2f579a37a1aa18e650181cb7409c458119e31f899c3aebef8068c8d82c47_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_899d50175243b9649169e95ce04ddd04dc980535d806b1a6a52f7a69ff51a236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_899d50175243b9649169e95ce04ddd04dc980535d806b1a6a52f7a69ff51a236->enter($__internal_899d50175243b9649169e95ce04ddd04dc980535d806b1a6a52f7a69ff51a236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_f91cfa9d1043e32462f01c84343e775eb990ba383ea27ea2a98e272aa0b7902e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91cfa9d1043e32462f01c84343e775eb990ba383ea27ea2a98e272aa0b7902e->enter($__internal_f91cfa9d1043e32462f01c84343e775eb990ba383ea27ea2a98e272aa0b7902e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_f91cfa9d1043e32462f01c84343e775eb990ba383ea27ea2a98e272aa0b7902e->leave($__internal_f91cfa9d1043e32462f01c84343e775eb990ba383ea27ea2a98e272aa0b7902e_prof);

        
        $__internal_899d50175243b9649169e95ce04ddd04dc980535d806b1a6a52f7a69ff51a236->leave($__internal_899d50175243b9649169e95ce04ddd04dc980535d806b1a6a52f7a69ff51a236_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c5b384e87bcdd0021bc5effe83b90f82981da9811e4c239d6a1c9f6a4893c408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b384e87bcdd0021bc5effe83b90f82981da9811e4c239d6a1c9f6a4893c408->enter($__internal_c5b384e87bcdd0021bc5effe83b90f82981da9811e4c239d6a1c9f6a4893c408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_065e0694ee00a9631b3e47eee19026928f2cbd35e503567e072d85ffa61dd4b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065e0694ee00a9631b3e47eee19026928f2cbd35e503567e072d85ffa61dd4b6->enter($__internal_065e0694ee00a9631b3e47eee19026928f2cbd35e503567e072d85ffa61dd4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_065e0694ee00a9631b3e47eee19026928f2cbd35e503567e072d85ffa61dd4b6->leave($__internal_065e0694ee00a9631b3e47eee19026928f2cbd35e503567e072d85ffa61dd4b6_prof);

        
        $__internal_c5b384e87bcdd0021bc5effe83b90f82981da9811e4c239d6a1c9f6a4893c408->leave($__internal_c5b384e87bcdd0021bc5effe83b90f82981da9811e4c239d6a1c9f6a4893c408_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d626b17253e39effb708afaccb55ff6e4a3c72b382f279f3a5eb66d0603fc487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d626b17253e39effb708afaccb55ff6e4a3c72b382f279f3a5eb66d0603fc487->enter($__internal_d626b17253e39effb708afaccb55ff6e4a3c72b382f279f3a5eb66d0603fc487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_4ecb938f1943f926f6f6849c78c15cf42812a0e98e56331a90a94e38a7c8fc5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ecb938f1943f926f6f6849c78c15cf42812a0e98e56331a90a94e38a7c8fc5f->enter($__internal_4ecb938f1943f926f6f6849c78c15cf42812a0e98e56331a90a94e38a7c8fc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4ecb938f1943f926f6f6849c78c15cf42812a0e98e56331a90a94e38a7c8fc5f->leave($__internal_4ecb938f1943f926f6f6849c78c15cf42812a0e98e56331a90a94e38a7c8fc5f_prof);

        
        $__internal_d626b17253e39effb708afaccb55ff6e4a3c72b382f279f3a5eb66d0603fc487->leave($__internal_d626b17253e39effb708afaccb55ff6e4a3c72b382f279f3a5eb66d0603fc487_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
