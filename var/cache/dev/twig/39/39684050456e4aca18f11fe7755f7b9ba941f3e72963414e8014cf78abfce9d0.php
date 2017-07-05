<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_4a167c156cfb23d69e7b371e21cefa28242823914a408e9615626ea152e2d0e0 extends Twig_Template
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
        $__internal_37633de82ec91e0cdec120d8600a6159d4ce58b06486a21c7d201fc942f152d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37633de82ec91e0cdec120d8600a6159d4ce58b06486a21c7d201fc942f152d5->enter($__internal_37633de82ec91e0cdec120d8600a6159d4ce58b06486a21c7d201fc942f152d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_237c711d447f95b1d36ca8f6152e53e26d853ea74af6f002344616f7dca87228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237c711d447f95b1d36ca8f6152e53e26d853ea74af6f002344616f7dca87228->enter($__internal_237c711d447f95b1d36ca8f6152e53e26d853ea74af6f002344616f7dca87228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_37633de82ec91e0cdec120d8600a6159d4ce58b06486a21c7d201fc942f152d5->leave($__internal_37633de82ec91e0cdec120d8600a6159d4ce58b06486a21c7d201fc942f152d5_prof);

        
        $__internal_237c711d447f95b1d36ca8f6152e53e26d853ea74af6f002344616f7dca87228->leave($__internal_237c711d447f95b1d36ca8f6152e53e26d853ea74af6f002344616f7dca87228_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
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
", "@FOSUser/Profile/show_content.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Profile\\show_content.html.twig");
    }
}
