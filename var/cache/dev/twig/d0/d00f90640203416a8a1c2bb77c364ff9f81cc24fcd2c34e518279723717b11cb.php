<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_7fc94cd2e530f135e8077ed2ff8b2e63fdddcb27be329fdb631794f934985a31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_f63228afba5567445bd70065eb0553e6861c8574cc0a377897b0dc1b6a654205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63228afba5567445bd70065eb0553e6861c8574cc0a377897b0dc1b6a654205->enter($__internal_f63228afba5567445bd70065eb0553e6861c8574cc0a377897b0dc1b6a654205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_d0d3c31e210568410d30a129dbff3cbbcba3d6ac8ba0b11b61f9334b1c0e1f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d3c31e210568410d30a129dbff3cbbcba3d6ac8ba0b11b61f9334b1c0e1f19->enter($__internal_d0d3c31e210568410d30a129dbff3cbbcba3d6ac8ba0b11b61f9334b1c0e1f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f63228afba5567445bd70065eb0553e6861c8574cc0a377897b0dc1b6a654205->leave($__internal_f63228afba5567445bd70065eb0553e6861c8574cc0a377897b0dc1b6a654205_prof);

        
        $__internal_d0d3c31e210568410d30a129dbff3cbbcba3d6ac8ba0b11b61f9334b1c0e1f19->leave($__internal_d0d3c31e210568410d30a129dbff3cbbcba3d6ac8ba0b11b61f9334b1c0e1f19_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09f7bde59ac83ca50cce399ce2a41830881773ead1e35fbf2e793446565faa08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f7bde59ac83ca50cce399ce2a41830881773ead1e35fbf2e793446565faa08->enter($__internal_09f7bde59ac83ca50cce399ce2a41830881773ead1e35fbf2e793446565faa08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fc4f28b6f7ad2bb050569d5a69760ccc6791c352472f207876b21f9daae55508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4f28b6f7ad2bb050569d5a69760ccc6791c352472f207876b21f9daae55508->enter($__internal_fc4f28b6f7ad2bb050569d5a69760ccc6791c352472f207876b21f9daae55508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_fc4f28b6f7ad2bb050569d5a69760ccc6791c352472f207876b21f9daae55508->leave($__internal_fc4f28b6f7ad2bb050569d5a69760ccc6791c352472f207876b21f9daae55508_prof);

        
        $__internal_09f7bde59ac83ca50cce399ce2a41830881773ead1e35fbf2e793446565faa08->leave($__internal_09f7bde59ac83ca50cce399ce2a41830881773ead1e35fbf2e793446565faa08_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
