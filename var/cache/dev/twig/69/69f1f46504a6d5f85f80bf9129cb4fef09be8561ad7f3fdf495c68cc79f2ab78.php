<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_7b1c954e3960fd25ee80fe8d773db0885a724d4ef695a45819a6ba2ed0287161 extends Twig_Template
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
        $__internal_33418b6c63b2d54d62ace1c47b39ffa6a0b08ed9b0847123462ca46243de0412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33418b6c63b2d54d62ace1c47b39ffa6a0b08ed9b0847123462ca46243de0412->enter($__internal_33418b6c63b2d54d62ace1c47b39ffa6a0b08ed9b0847123462ca46243de0412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_de6ddc10d7a3e80bb2c6fb08cb8fca5202a81381afcc40688e00d1d8c4f322c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6ddc10d7a3e80bb2c6fb08cb8fca5202a81381afcc40688e00d1d8c4f322c1->enter($__internal_de6ddc10d7a3e80bb2c6fb08cb8fca5202a81381afcc40688e00d1d8c4f322c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_33418b6c63b2d54d62ace1c47b39ffa6a0b08ed9b0847123462ca46243de0412->leave($__internal_33418b6c63b2d54d62ace1c47b39ffa6a0b08ed9b0847123462ca46243de0412_prof);

        
        $__internal_de6ddc10d7a3e80bb2c6fb08cb8fca5202a81381afcc40688e00d1d8c4f322c1->leave($__internal_de6ddc10d7a3e80bb2c6fb08cb8fca5202a81381afcc40688e00d1d8c4f322c1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3be355d0759b6a32c3ab001e51f58fc0be8d9108b8ec666b8ab5c918c9de67cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3be355d0759b6a32c3ab001e51f58fc0be8d9108b8ec666b8ab5c918c9de67cf->enter($__internal_3be355d0759b6a32c3ab001e51f58fc0be8d9108b8ec666b8ab5c918c9de67cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_748d96ed3ffa82e74c27d93e9d84d3d33f6e657c11cf7b08a348350f3a4c4970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748d96ed3ffa82e74c27d93e9d84d3d33f6e657c11cf7b08a348350f3a4c4970->enter($__internal_748d96ed3ffa82e74c27d93e9d84d3d33f6e657c11cf7b08a348350f3a4c4970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_748d96ed3ffa82e74c27d93e9d84d3d33f6e657c11cf7b08a348350f3a4c4970->leave($__internal_748d96ed3ffa82e74c27d93e9d84d3d33f6e657c11cf7b08a348350f3a4c4970_prof);

        
        $__internal_3be355d0759b6a32c3ab001e51f58fc0be8d9108b8ec666b8ab5c918c9de67cf->leave($__internal_3be355d0759b6a32c3ab001e51f58fc0be8d9108b8ec666b8ab5c918c9de67cf_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4ee3a43952010ad1efa13cfd30c95b9b4ceea9c11d73af57e2d5f3fe9e449ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee3a43952010ad1efa13cfd30c95b9b4ceea9c11d73af57e2d5f3fe9e449ca6->enter($__internal_4ee3a43952010ad1efa13cfd30c95b9b4ceea9c11d73af57e2d5f3fe9e449ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_b015255c37e8c4e507ab1912e09051d0356ae160d154031ac1af6e0809fb28a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b015255c37e8c4e507ab1912e09051d0356ae160d154031ac1af6e0809fb28a1->enter($__internal_b015255c37e8c4e507ab1912e09051d0356ae160d154031ac1af6e0809fb28a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b015255c37e8c4e507ab1912e09051d0356ae160d154031ac1af6e0809fb28a1->leave($__internal_b015255c37e8c4e507ab1912e09051d0356ae160d154031ac1af6e0809fb28a1_prof);

        
        $__internal_4ee3a43952010ad1efa13cfd30c95b9b4ceea9c11d73af57e2d5f3fe9e449ca6->leave($__internal_4ee3a43952010ad1efa13cfd30c95b9b4ceea9c11d73af57e2d5f3fe9e449ca6_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0e8a763a84b94e55807ebe77e7100e6dfbb5e7e88014123ebfb81b56b0afc379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8a763a84b94e55807ebe77e7100e6dfbb5e7e88014123ebfb81b56b0afc379->enter($__internal_0e8a763a84b94e55807ebe77e7100e6dfbb5e7e88014123ebfb81b56b0afc379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b027231866de2b7abbc0e46740563b7941d44a5786b305d4a1be8736e4cc90e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b027231866de2b7abbc0e46740563b7941d44a5786b305d4a1be8736e4cc90e6->enter($__internal_b027231866de2b7abbc0e46740563b7941d44a5786b305d4a1be8736e4cc90e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b027231866de2b7abbc0e46740563b7941d44a5786b305d4a1be8736e4cc90e6->leave($__internal_b027231866de2b7abbc0e46740563b7941d44a5786b305d4a1be8736e4cc90e6_prof);

        
        $__internal_0e8a763a84b94e55807ebe77e7100e6dfbb5e7e88014123ebfb81b56b0afc379->leave($__internal_0e8a763a84b94e55807ebe77e7100e6dfbb5e7e88014123ebfb81b56b0afc379_prof);

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
