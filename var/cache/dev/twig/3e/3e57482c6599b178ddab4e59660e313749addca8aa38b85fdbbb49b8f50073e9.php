<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_04be3c22cd09511d611cd23ab400a3acc1e18e4f39ba84d64b78673ad4db9cbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_f1d9b9198e0434ae957d225a0c4ce59f1df22a100c43185028eb11e24c25ebd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1d9b9198e0434ae957d225a0c4ce59f1df22a100c43185028eb11e24c25ebd3->enter($__internal_f1d9b9198e0434ae957d225a0c4ce59f1df22a100c43185028eb11e24c25ebd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_dcf1b0bce177154c623a7cdfc98a324e33ca74ec8627bd75697e581c0f0d66c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf1b0bce177154c623a7cdfc98a324e33ca74ec8627bd75697e581c0f0d66c4->enter($__internal_dcf1b0bce177154c623a7cdfc98a324e33ca74ec8627bd75697e581c0f0d66c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1d9b9198e0434ae957d225a0c4ce59f1df22a100c43185028eb11e24c25ebd3->leave($__internal_f1d9b9198e0434ae957d225a0c4ce59f1df22a100c43185028eb11e24c25ebd3_prof);

        
        $__internal_dcf1b0bce177154c623a7cdfc98a324e33ca74ec8627bd75697e581c0f0d66c4->leave($__internal_dcf1b0bce177154c623a7cdfc98a324e33ca74ec8627bd75697e581c0f0d66c4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95c6c6ccbf1734d5a7806f50e64b494fe0e04828f4d42c32c10686e4202ac1c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c6c6ccbf1734d5a7806f50e64b494fe0e04828f4d42c32c10686e4202ac1c2->enter($__internal_95c6c6ccbf1734d5a7806f50e64b494fe0e04828f4d42c32c10686e4202ac1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5c31f1f5e686dae1d78ed9efc97047dd4c8d5abfc6053c8055d4b19e134c8e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c31f1f5e686dae1d78ed9efc97047dd4c8d5abfc6053c8055d4b19e134c8e95->enter($__internal_5c31f1f5e686dae1d78ed9efc97047dd4c8d5abfc6053c8055d4b19e134c8e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5c31f1f5e686dae1d78ed9efc97047dd4c8d5abfc6053c8055d4b19e134c8e95->leave($__internal_5c31f1f5e686dae1d78ed9efc97047dd4c8d5abfc6053c8055d4b19e134c8e95_prof);

        
        $__internal_95c6c6ccbf1734d5a7806f50e64b494fe0e04828f4d42c32c10686e4202ac1c2->leave($__internal_95c6c6ccbf1734d5a7806f50e64b494fe0e04828f4d42c32c10686e4202ac1c2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
