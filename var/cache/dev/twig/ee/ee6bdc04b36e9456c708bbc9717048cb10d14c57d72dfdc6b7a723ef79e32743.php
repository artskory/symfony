<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_165793c8994c1634b9912139f380cd4695f9f7d2104dd5457bb2dac3d19766e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc0874fedf1459484e78e116f86ccbd9f4216d04c986b1033e04a37990bbfe56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc0874fedf1459484e78e116f86ccbd9f4216d04c986b1033e04a37990bbfe56->enter($__internal_dc0874fedf1459484e78e116f86ccbd9f4216d04c986b1033e04a37990bbfe56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_7fd4a8ab11bf6203d50bce09bd9789d53c7354ed43d405733b9995fc6bdc84e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd4a8ab11bf6203d50bce09bd9789d53c7354ed43d405733b9995fc6bdc84e5->enter($__internal_7fd4a8ab11bf6203d50bce09bd9789d53c7354ed43d405733b9995fc6bdc84e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc0874fedf1459484e78e116f86ccbd9f4216d04c986b1033e04a37990bbfe56->leave($__internal_dc0874fedf1459484e78e116f86ccbd9f4216d04c986b1033e04a37990bbfe56_prof);

        
        $__internal_7fd4a8ab11bf6203d50bce09bd9789d53c7354ed43d405733b9995fc6bdc84e5->leave($__internal_7fd4a8ab11bf6203d50bce09bd9789d53c7354ed43d405733b9995fc6bdc84e5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d6087d752b2675dfd47c6fd6d60f860e7240353a76a57b541e451350fcd1006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d6087d752b2675dfd47c6fd6d60f860e7240353a76a57b541e451350fcd1006->enter($__internal_6d6087d752b2675dfd47c6fd6d60f860e7240353a76a57b541e451350fcd1006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9588670d125ed777953331568c58255271483aa8a9327cc7adc0d8a27add2447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9588670d125ed777953331568c58255271483aa8a9327cc7adc0d8a27add2447->enter($__internal_9588670d125ed777953331568c58255271483aa8a9327cc7adc0d8a27add2447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_9588670d125ed777953331568c58255271483aa8a9327cc7adc0d8a27add2447->leave($__internal_9588670d125ed777953331568c58255271483aa8a9327cc7adc0d8a27add2447_prof);

        
        $__internal_6d6087d752b2675dfd47c6fd6d60f860e7240353a76a57b541e451350fcd1006->leave($__internal_6d6087d752b2675dfd47c6fd6d60f860e7240353a76a57b541e451350fcd1006_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
