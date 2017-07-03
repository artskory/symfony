<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_98a6d5abad21bd6adf8531fcd064e4fe292f6f6242a8109c98f62150d56a0a2a extends Twig_Template
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
        $__internal_3e0564c908644b9b0a9c1b25e37375ffdbd4b4b34f99036340328872d9b4db65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e0564c908644b9b0a9c1b25e37375ffdbd4b4b34f99036340328872d9b4db65->enter($__internal_3e0564c908644b9b0a9c1b25e37375ffdbd4b4b34f99036340328872d9b4db65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_1c5483d24e865984bb4a249995c459bd7ee919700cd3c667ec43e64237e6e6af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5483d24e865984bb4a249995c459bd7ee919700cd3c667ec43e64237e6e6af->enter($__internal_1c5483d24e865984bb4a249995c459bd7ee919700cd3c667ec43e64237e6e6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e0564c908644b9b0a9c1b25e37375ffdbd4b4b34f99036340328872d9b4db65->leave($__internal_3e0564c908644b9b0a9c1b25e37375ffdbd4b4b34f99036340328872d9b4db65_prof);

        
        $__internal_1c5483d24e865984bb4a249995c459bd7ee919700cd3c667ec43e64237e6e6af->leave($__internal_1c5483d24e865984bb4a249995c459bd7ee919700cd3c667ec43e64237e6e6af_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa087cc51750b0f71b40f554942cb17b37d3e8dc532ba6d4e7777df0b35908ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa087cc51750b0f71b40f554942cb17b37d3e8dc532ba6d4e7777df0b35908ec->enter($__internal_fa087cc51750b0f71b40f554942cb17b37d3e8dc532ba6d4e7777df0b35908ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f08b568430db6fcf9fcbe98c11e49d9cf112a2b14c9e7f5e3fe40c47598c3c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08b568430db6fcf9fcbe98c11e49d9cf112a2b14c9e7f5e3fe40c47598c3c44->enter($__internal_f08b568430db6fcf9fcbe98c11e49d9cf112a2b14c9e7f5e3fe40c47598c3c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_f08b568430db6fcf9fcbe98c11e49d9cf112a2b14c9e7f5e3fe40c47598c3c44->leave($__internal_f08b568430db6fcf9fcbe98c11e49d9cf112a2b14c9e7f5e3fe40c47598c3c44_prof);

        
        $__internal_fa087cc51750b0f71b40f554942cb17b37d3e8dc532ba6d4e7777df0b35908ec->leave($__internal_fa087cc51750b0f71b40f554942cb17b37d3e8dc532ba6d4e7777df0b35908ec_prof);

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
