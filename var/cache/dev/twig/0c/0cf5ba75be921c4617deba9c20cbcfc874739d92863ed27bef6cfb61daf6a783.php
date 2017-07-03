<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d8fdc8f25e9738610de67565a2c8d158b37f85c319bb0fcb1c8d12ee06c27b66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_6ea3cca3444f9ff44d71e182b7b0d1ce1df8f4ffdb54b9f1e0f891676bc0426d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea3cca3444f9ff44d71e182b7b0d1ce1df8f4ffdb54b9f1e0f891676bc0426d->enter($__internal_6ea3cca3444f9ff44d71e182b7b0d1ce1df8f4ffdb54b9f1e0f891676bc0426d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_46fdde88683a3cade4662b8e122c1c410da3936366d63973aa1174b588c78691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46fdde88683a3cade4662b8e122c1c410da3936366d63973aa1174b588c78691->enter($__internal_46fdde88683a3cade4662b8e122c1c410da3936366d63973aa1174b588c78691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ea3cca3444f9ff44d71e182b7b0d1ce1df8f4ffdb54b9f1e0f891676bc0426d->leave($__internal_6ea3cca3444f9ff44d71e182b7b0d1ce1df8f4ffdb54b9f1e0f891676bc0426d_prof);

        
        $__internal_46fdde88683a3cade4662b8e122c1c410da3936366d63973aa1174b588c78691->leave($__internal_46fdde88683a3cade4662b8e122c1c410da3936366d63973aa1174b588c78691_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1580ee9dfa0a1906799e7767374b2fbc106145a4430d0e8557a2ad341ee6370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1580ee9dfa0a1906799e7767374b2fbc106145a4430d0e8557a2ad341ee6370->enter($__internal_a1580ee9dfa0a1906799e7767374b2fbc106145a4430d0e8557a2ad341ee6370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_331543e11a063ebd20b89df307157ee012811cb9367fca5f344d8d139de4065a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331543e11a063ebd20b89df307157ee012811cb9367fca5f344d8d139de4065a->enter($__internal_331543e11a063ebd20b89df307157ee012811cb9367fca5f344d8d139de4065a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_331543e11a063ebd20b89df307157ee012811cb9367fca5f344d8d139de4065a->leave($__internal_331543e11a063ebd20b89df307157ee012811cb9367fca5f344d8d139de4065a_prof);

        
        $__internal_a1580ee9dfa0a1906799e7767374b2fbc106145a4430d0e8557a2ad341ee6370->leave($__internal_a1580ee9dfa0a1906799e7767374b2fbc106145a4430d0e8557a2ad341ee6370_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
