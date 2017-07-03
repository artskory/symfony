<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_72ac6b08c4f90416bf365578069831a98bbfc9370bb088762f32e818b44a8a07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_792cd15636b929c52454dbdfed1c245d437d483665e752ef98b2a471bff64aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792cd15636b929c52454dbdfed1c245d437d483665e752ef98b2a471bff64aaf->enter($__internal_792cd15636b929c52454dbdfed1c245d437d483665e752ef98b2a471bff64aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_7b9d635852f062dbbddb6c3b090c5a635f05a9d66d4f7fbc02296457bbcbadd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9d635852f062dbbddb6c3b090c5a635f05a9d66d4f7fbc02296457bbcbadd5->enter($__internal_7b9d635852f062dbbddb6c3b090c5a635f05a9d66d4f7fbc02296457bbcbadd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_792cd15636b929c52454dbdfed1c245d437d483665e752ef98b2a471bff64aaf->leave($__internal_792cd15636b929c52454dbdfed1c245d437d483665e752ef98b2a471bff64aaf_prof);

        
        $__internal_7b9d635852f062dbbddb6c3b090c5a635f05a9d66d4f7fbc02296457bbcbadd5->leave($__internal_7b9d635852f062dbbddb6c3b090c5a635f05a9d66d4f7fbc02296457bbcbadd5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51e233fde148a22d8793f83d5441bbcbf2797e6f1713e33a45e10aa12dd015b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e233fde148a22d8793f83d5441bbcbf2797e6f1713e33a45e10aa12dd015b6->enter($__internal_51e233fde148a22d8793f83d5441bbcbf2797e6f1713e33a45e10aa12dd015b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b0d7afb18cb397dc995d73c66a22efbac2ce0751da9bffc7069b308b2a10a633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d7afb18cb397dc995d73c66a22efbac2ce0751da9bffc7069b308b2a10a633->enter($__internal_b0d7afb18cb397dc995d73c66a22efbac2ce0751da9bffc7069b308b2a10a633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_b0d7afb18cb397dc995d73c66a22efbac2ce0751da9bffc7069b308b2a10a633->leave($__internal_b0d7afb18cb397dc995d73c66a22efbac2ce0751da9bffc7069b308b2a10a633_prof);

        
        $__internal_51e233fde148a22d8793f83d5441bbcbf2797e6f1713e33a45e10aa12dd015b6->leave($__internal_51e233fde148a22d8793f83d5441bbcbf2797e6f1713e33a45e10aa12dd015b6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
