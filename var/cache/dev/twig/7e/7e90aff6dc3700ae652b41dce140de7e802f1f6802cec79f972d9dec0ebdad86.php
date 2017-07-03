<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_369f9cf5dcfd5bc5c1e9b1c5d1b9e1c5fbb8b53639e3d976d62c9b3d591b6b42 extends Twig_Template
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
        $__internal_71a3077ac96e38b08fd25015996abe29c5d61bcf9115e4fd303e34931cb5673b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a3077ac96e38b08fd25015996abe29c5d61bcf9115e4fd303e34931cb5673b->enter($__internal_71a3077ac96e38b08fd25015996abe29c5d61bcf9115e4fd303e34931cb5673b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_09316c1dbca60625a89c79f6831b48c6c9d0e840e7cb2436f097c796d9074d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09316c1dbca60625a89c79f6831b48c6c9d0e840e7cb2436f097c796d9074d6e->enter($__internal_09316c1dbca60625a89c79f6831b48c6c9d0e840e7cb2436f097c796d9074d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_71a3077ac96e38b08fd25015996abe29c5d61bcf9115e4fd303e34931cb5673b->leave($__internal_71a3077ac96e38b08fd25015996abe29c5d61bcf9115e4fd303e34931cb5673b_prof);

        
        $__internal_09316c1dbca60625a89c79f6831b48c6c9d0e840e7cb2436f097c796d9074d6e->leave($__internal_09316c1dbca60625a89c79f6831b48c6c9d0e840e7cb2436f097c796d9074d6e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_44047550f47bf290b23c1ff3a3e4c9f165d592b66ee26cdf91365880b71df60a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44047550f47bf290b23c1ff3a3e4c9f165d592b66ee26cdf91365880b71df60a->enter($__internal_44047550f47bf290b23c1ff3a3e4c9f165d592b66ee26cdf91365880b71df60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3ba808b4b683d82f9971854e7af663c62e5d90d465a7483fc6ce11781a70aa9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba808b4b683d82f9971854e7af663c62e5d90d465a7483fc6ce11781a70aa9c->enter($__internal_3ba808b4b683d82f9971854e7af663c62e5d90d465a7483fc6ce11781a70aa9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_3ba808b4b683d82f9971854e7af663c62e5d90d465a7483fc6ce11781a70aa9c->leave($__internal_3ba808b4b683d82f9971854e7af663c62e5d90d465a7483fc6ce11781a70aa9c_prof);

        
        $__internal_44047550f47bf290b23c1ff3a3e4c9f165d592b66ee26cdf91365880b71df60a->leave($__internal_44047550f47bf290b23c1ff3a3e4c9f165d592b66ee26cdf91365880b71df60a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_59f82a7ae7fbe63b105be4e1a48b03bcecc8ca4441d280bd2aa1f24c0aed9a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59f82a7ae7fbe63b105be4e1a48b03bcecc8ca4441d280bd2aa1f24c0aed9a0a->enter($__internal_59f82a7ae7fbe63b105be4e1a48b03bcecc8ca4441d280bd2aa1f24c0aed9a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_212303011c9f39af6ac08d3297cbb06f3ae7a28d8bf0dada81e185caee4d688e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212303011c9f39af6ac08d3297cbb06f3ae7a28d8bf0dada81e185caee4d688e->enter($__internal_212303011c9f39af6ac08d3297cbb06f3ae7a28d8bf0dada81e185caee4d688e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_212303011c9f39af6ac08d3297cbb06f3ae7a28d8bf0dada81e185caee4d688e->leave($__internal_212303011c9f39af6ac08d3297cbb06f3ae7a28d8bf0dada81e185caee4d688e_prof);

        
        $__internal_59f82a7ae7fbe63b105be4e1a48b03bcecc8ca4441d280bd2aa1f24c0aed9a0a->leave($__internal_59f82a7ae7fbe63b105be4e1a48b03bcecc8ca4441d280bd2aa1f24c0aed9a0a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1efef8c5514138afaa319c2d495f201d85b5f4b407269e55fc4ae590e8e3a06e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1efef8c5514138afaa319c2d495f201d85b5f4b407269e55fc4ae590e8e3a06e->enter($__internal_1efef8c5514138afaa319c2d495f201d85b5f4b407269e55fc4ae590e8e3a06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_3b5dfe31ac7bf3325e7460d29042ff60fc2f9ef3bce319cb67e18dc38faa456f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b5dfe31ac7bf3325e7460d29042ff60fc2f9ef3bce319cb67e18dc38faa456f->enter($__internal_3b5dfe31ac7bf3325e7460d29042ff60fc2f9ef3bce319cb67e18dc38faa456f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3b5dfe31ac7bf3325e7460d29042ff60fc2f9ef3bce319cb67e18dc38faa456f->leave($__internal_3b5dfe31ac7bf3325e7460d29042ff60fc2f9ef3bce319cb67e18dc38faa456f_prof);

        
        $__internal_1efef8c5514138afaa319c2d495f201d85b5f4b407269e55fc4ae590e8e3a06e->leave($__internal_1efef8c5514138afaa319c2d495f201d85b5f4b407269e55fc4ae590e8e3a06e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
