<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_dcd60eef58f6dfc1dd16be9a33501ad0fccf4bb19baeb92ad83ad986e389050c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_8aacdad96759b2d54752d8bb7d6c7de557296cae65f9d05fb1ced560e05a3564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aacdad96759b2d54752d8bb7d6c7de557296cae65f9d05fb1ced560e05a3564->enter($__internal_8aacdad96759b2d54752d8bb7d6c7de557296cae65f9d05fb1ced560e05a3564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_f418b7245a4daa66ad84d2ef6b6fcaf2cf0d83e50104b3b6a64dd740f0dcea32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f418b7245a4daa66ad84d2ef6b6fcaf2cf0d83e50104b3b6a64dd740f0dcea32->enter($__internal_f418b7245a4daa66ad84d2ef6b6fcaf2cf0d83e50104b3b6a64dd740f0dcea32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aacdad96759b2d54752d8bb7d6c7de557296cae65f9d05fb1ced560e05a3564->leave($__internal_8aacdad96759b2d54752d8bb7d6c7de557296cae65f9d05fb1ced560e05a3564_prof);

        
        $__internal_f418b7245a4daa66ad84d2ef6b6fcaf2cf0d83e50104b3b6a64dd740f0dcea32->leave($__internal_f418b7245a4daa66ad84d2ef6b6fcaf2cf0d83e50104b3b6a64dd740f0dcea32_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6adf12e45f8253f07b63af9c48d88d7254b0b490ff0c65e2725a895860ae80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6adf12e45f8253f07b63af9c48d88d7254b0b490ff0c65e2725a895860ae80e->enter($__internal_f6adf12e45f8253f07b63af9c48d88d7254b0b490ff0c65e2725a895860ae80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b11c1fabf6739d8c43df0b9d6d173c5412bd246c81ee01b25b2e17ff89d67129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11c1fabf6739d8c43df0b9d6d173c5412bd246c81ee01b25b2e17ff89d67129->enter($__internal_b11c1fabf6739d8c43df0b9d6d173c5412bd246c81ee01b25b2e17ff89d67129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_b11c1fabf6739d8c43df0b9d6d173c5412bd246c81ee01b25b2e17ff89d67129->leave($__internal_b11c1fabf6739d8c43df0b9d6d173c5412bd246c81ee01b25b2e17ff89d67129_prof);

        
        $__internal_f6adf12e45f8253f07b63af9c48d88d7254b0b490ff0c65e2725a895860ae80e->leave($__internal_f6adf12e45f8253f07b63af9c48d88d7254b0b490ff0c65e2725a895860ae80e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
