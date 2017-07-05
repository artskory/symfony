<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_0a83842fe451149254ecbfd28ad68c5bc674b55f273a321c0c313d3a27afaffb extends Twig_Template
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
        $__internal_c1fd6ae743a1749855b60f7aea41d868aee9ddd4ec73492505ea27c604aa740c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1fd6ae743a1749855b60f7aea41d868aee9ddd4ec73492505ea27c604aa740c->enter($__internal_c1fd6ae743a1749855b60f7aea41d868aee9ddd4ec73492505ea27c604aa740c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_8e9526088eaf53b869afc57329cb3068fa3ff60d7fe2bb5c4334301c8b9d8af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e9526088eaf53b869afc57329cb3068fa3ff60d7fe2bb5c4334301c8b9d8af1->enter($__internal_8e9526088eaf53b869afc57329cb3068fa3ff60d7fe2bb5c4334301c8b9d8af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1fd6ae743a1749855b60f7aea41d868aee9ddd4ec73492505ea27c604aa740c->leave($__internal_c1fd6ae743a1749855b60f7aea41d868aee9ddd4ec73492505ea27c604aa740c_prof);

        
        $__internal_8e9526088eaf53b869afc57329cb3068fa3ff60d7fe2bb5c4334301c8b9d8af1->leave($__internal_8e9526088eaf53b869afc57329cb3068fa3ff60d7fe2bb5c4334301c8b9d8af1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b46d2990c6bf45afba74227551e42cef65f7c233c0c1dd84879f557c3697995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b46d2990c6bf45afba74227551e42cef65f7c233c0c1dd84879f557c3697995->enter($__internal_6b46d2990c6bf45afba74227551e42cef65f7c233c0c1dd84879f557c3697995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3f48f1ecae98c4dfbedb3a98dfd18ca275d5a434cbd1da4516a600ad78d85f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f48f1ecae98c4dfbedb3a98dfd18ca275d5a434cbd1da4516a600ad78d85f8d->enter($__internal_3f48f1ecae98c4dfbedb3a98dfd18ca275d5a434cbd1da4516a600ad78d85f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_3f48f1ecae98c4dfbedb3a98dfd18ca275d5a434cbd1da4516a600ad78d85f8d->leave($__internal_3f48f1ecae98c4dfbedb3a98dfd18ca275d5a434cbd1da4516a600ad78d85f8d_prof);

        
        $__internal_6b46d2990c6bf45afba74227551e42cef65f7c233c0c1dd84879f557c3697995->leave($__internal_6b46d2990c6bf45afba74227551e42cef65f7c233c0c1dd84879f557c3697995_prof);

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
