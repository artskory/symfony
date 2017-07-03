<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_60222833f1b48e6fb47125fa0da4f02efca903da783583098c21e228720af5ba extends Twig_Template
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
        $__internal_98f7cb8888bdfb4d4db7afa8f137457c73af9cd7c65eec499054a620cbd6c4bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f7cb8888bdfb4d4db7afa8f137457c73af9cd7c65eec499054a620cbd6c4bb->enter($__internal_98f7cb8888bdfb4d4db7afa8f137457c73af9cd7c65eec499054a620cbd6c4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_2d26cb5b0be0c880983fd121b77c55cac4083621582b438dfec7843d17aa9a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d26cb5b0be0c880983fd121b77c55cac4083621582b438dfec7843d17aa9a73->enter($__internal_2d26cb5b0be0c880983fd121b77c55cac4083621582b438dfec7843d17aa9a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_98f7cb8888bdfb4d4db7afa8f137457c73af9cd7c65eec499054a620cbd6c4bb->leave($__internal_98f7cb8888bdfb4d4db7afa8f137457c73af9cd7c65eec499054a620cbd6c4bb_prof);

        
        $__internal_2d26cb5b0be0c880983fd121b77c55cac4083621582b438dfec7843d17aa9a73->leave($__internal_2d26cb5b0be0c880983fd121b77c55cac4083621582b438dfec7843d17aa9a73_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
", "FOSUserBundle:Group:show_content.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
