<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_dd8d8a21381143d9676254162ca99de77f9444cd7e2f936e90437b0a1d61db88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_575bf4c26d7455bb247f7c8de4a1771b86c1be76c31d57420df0cd743088d0cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_575bf4c26d7455bb247f7c8de4a1771b86c1be76c31d57420df0cd743088d0cb->enter($__internal_575bf4c26d7455bb247f7c8de4a1771b86c1be76c31d57420df0cd743088d0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_2cb941de3965fbb8d8e458d794a6a144dee2e3e2a8d41f8d91e43e19d82e5e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb941de3965fbb8d8e458d794a6a144dee2e3e2a8d41f8d91e43e19d82e5e91->enter($__internal_2cb941de3965fbb8d8e458d794a6a144dee2e3e2a8d41f8d91e43e19d82e5e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_575bf4c26d7455bb247f7c8de4a1771b86c1be76c31d57420df0cd743088d0cb->leave($__internal_575bf4c26d7455bb247f7c8de4a1771b86c1be76c31d57420df0cd743088d0cb_prof);

        
        $__internal_2cb941de3965fbb8d8e458d794a6a144dee2e3e2a8d41f8d91e43e19d82e5e91->leave($__internal_2cb941de3965fbb8d8e458d794a6a144dee2e3e2a8d41f8d91e43e19d82e5e91_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Group\\show_content.html.twig");
    }
}
