<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_e173a7b58474055d78b396ab1c6b3ed5ecb07d56ad65938681c97fa8ad0d4820 extends Twig_Template
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
        $__internal_94bbdd552fb5d69eba2255b5484121bc1f59a53f59701dd626b2ff4dddf151ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94bbdd552fb5d69eba2255b5484121bc1f59a53f59701dd626b2ff4dddf151ad->enter($__internal_94bbdd552fb5d69eba2255b5484121bc1f59a53f59701dd626b2ff4dddf151ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_a7dbdceec4562f0e79d1007d0bba9700a6304a2ec3c3a2e87770955350d70058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7dbdceec4562f0e79d1007d0bba9700a6304a2ec3c3a2e87770955350d70058->enter($__internal_a7dbdceec4562f0e79d1007d0bba9700a6304a2ec3c3a2e87770955350d70058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_94bbdd552fb5d69eba2255b5484121bc1f59a53f59701dd626b2ff4dddf151ad->leave($__internal_94bbdd552fb5d69eba2255b5484121bc1f59a53f59701dd626b2ff4dddf151ad_prof);

        
        $__internal_a7dbdceec4562f0e79d1007d0bba9700a6304a2ec3c3a2e87770955350d70058->leave($__internal_a7dbdceec4562f0e79d1007d0bba9700a6304a2ec3c3a2e87770955350d70058_prof);

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
