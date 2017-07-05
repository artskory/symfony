<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_b26b3acae2375c87c31e4aa5b17630478b77acf511f78c84aa8f891c6b67ba33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68f7223224954c4022c7f0fe99bb2a4481382ff1b9d04242034acb812448c316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f7223224954c4022c7f0fe99bb2a4481382ff1b9d04242034acb812448c316->enter($__internal_68f7223224954c4022c7f0fe99bb2a4481382ff1b9d04242034acb812448c316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $__internal_b58761f499e7b8d36d501bc327ef6309f44569665b17091687d44ab71a2544fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58761f499e7b8d36d501bc327ef6309f44569665b17091687d44ab71a2544fa->enter($__internal_b58761f499e7b8d36d501bc327ef6309f44569665b17091687d44ab71a2544fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68f7223224954c4022c7f0fe99bb2a4481382ff1b9d04242034acb812448c316->leave($__internal_68f7223224954c4022c7f0fe99bb2a4481382ff1b9d04242034acb812448c316_prof);

        
        $__internal_b58761f499e7b8d36d501bc327ef6309f44569665b17091687d44ab71a2544fa->leave($__internal_b58761f499e7b8d36d501bc327ef6309f44569665b17091687d44ab71a2544fa_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_fc3b7b9c31002851a96bfb858a772cc96e905c229f5afb9e3a6903f0096642cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3b7b9c31002851a96bfb858a772cc96e905c229f5afb9e3a6903f0096642cd->enter($__internal_fc3b7b9c31002851a96bfb858a772cc96e905c229f5afb9e3a6903f0096642cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_9786ce1cb6bc35e6fd8a3da3c24f041aa2399adf67c0053da11ae2d2b6e573a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9786ce1cb6bc35e6fd8a3da3c24f041aa2399adf67c0053da11ae2d2b6e573a5->enter($__internal_9786ce1cb6bc35e6fd8a3da3c24f041aa2399adf67c0053da11ae2d2b6e573a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        // line 6
        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
        }
        // line 9
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo ($context["label"] ?? $this->getContext($context, "label"));
        } else {
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_9786ce1cb6bc35e6fd8a3da3c24f041aa2399adf67c0053da11ae2d2b6e573a5->leave($__internal_9786ce1cb6bc35e6fd8a3da3c24f041aa2399adf67c0053da11ae2d2b6e573a5_prof);

        
        $__internal_fc3b7b9c31002851a96bfb858a772cc96e905c229f5afb9e3a6903f0096642cd->leave($__internal_fc3b7b9c31002851a96bfb858a772cc96e905c229f5afb9e3a6903f0096642cd_prof);

    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  55 => 7,  53 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
", "KnpMenuBundle::menu.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\knplabs\\knp-menu-bundle/Resources/views/menu.html.twig");
    }
}
