<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_c9a564a80e130563fbe89c79ea1f65b8c4669f4ad6647449f299bd4c05d1660d extends Twig_Template
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
        $__internal_68eead1d5bb2c4e4675c4766cf2808c5da41d3f056307f77299e9924f6703922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68eead1d5bb2c4e4675c4766cf2808c5da41d3f056307f77299e9924f6703922->enter($__internal_68eead1d5bb2c4e4675c4766cf2808c5da41d3f056307f77299e9924f6703922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_6fc3e9a8cb80367284dd9d4ee6bb483897f8893b0a58dfbe1d9ea8f7a37c8a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc3e9a8cb80367284dd9d4ee6bb483897f8893b0a58dfbe1d9ea8f7a37c8a00->enter($__internal_6fc3e9a8cb80367284dd9d4ee6bb483897f8893b0a58dfbe1d9ea8f7a37c8a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_68eead1d5bb2c4e4675c4766cf2808c5da41d3f056307f77299e9924f6703922->leave($__internal_68eead1d5bb2c4e4675c4766cf2808c5da41d3f056307f77299e9924f6703922_prof);

        
        $__internal_6fc3e9a8cb80367284dd9d4ee6bb483897f8893b0a58dfbe1d9ea8f7a37c8a00->leave($__internal_6fc3e9a8cb80367284dd9d4ee6bb483897f8893b0a58dfbe1d9ea8f7a37c8a00_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
