<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_a0a0947a3298e9184c834d1f654023c3d8719bd90115a8e09a5e24e2917c1b90 extends Twig_Template
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
        $__internal_6a43615bc9e2c9f29026860d8c84052555c7cd5f5953b436c3c6340298c40a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a43615bc9e2c9f29026860d8c84052555c7cd5f5953b436c3c6340298c40a50->enter($__internal_6a43615bc9e2c9f29026860d8c84052555c7cd5f5953b436c3c6340298c40a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_5588c4bdb120a63dcfe3b6e36612843f9aee105856a36f844bb604f510244dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5588c4bdb120a63dcfe3b6e36612843f9aee105856a36f844bb604f510244dd1->enter($__internal_5588c4bdb120a63dcfe3b6e36612843f9aee105856a36f844bb604f510244dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a43615bc9e2c9f29026860d8c84052555c7cd5f5953b436c3c6340298c40a50->leave($__internal_6a43615bc9e2c9f29026860d8c84052555c7cd5f5953b436c3c6340298c40a50_prof);

        
        $__internal_5588c4bdb120a63dcfe3b6e36612843f9aee105856a36f844bb604f510244dd1->leave($__internal_5588c4bdb120a63dcfe3b6e36612843f9aee105856a36f844bb604f510244dd1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_182f10899f78e680dbde41d7e14b509f927ed25fff785a66a11c10f9f020df8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182f10899f78e680dbde41d7e14b509f927ed25fff785a66a11c10f9f020df8b->enter($__internal_182f10899f78e680dbde41d7e14b509f927ed25fff785a66a11c10f9f020df8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1572ce8d20a9b6e13b3a9cb84cc194773f6092c207d14bbdb694e3d2a2a2e205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1572ce8d20a9b6e13b3a9cb84cc194773f6092c207d14bbdb694e3d2a2a2e205->enter($__internal_1572ce8d20a9b6e13b3a9cb84cc194773f6092c207d14bbdb694e3d2a2a2e205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1572ce8d20a9b6e13b3a9cb84cc194773f6092c207d14bbdb694e3d2a2a2e205->leave($__internal_1572ce8d20a9b6e13b3a9cb84cc194773f6092c207d14bbdb694e3d2a2a2e205_prof);

        
        $__internal_182f10899f78e680dbde41d7e14b509f927ed25fff785a66a11c10f9f020df8b->leave($__internal_182f10899f78e680dbde41d7e14b509f927ed25fff785a66a11c10f9f020df8b_prof);

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
