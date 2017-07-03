<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_4a985ffc9c11af70faeca325a286649feeb883b294a87f545f495ff8fc0c52df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_303ab6e6c6ffad199fa170d63e10cdef874b48a387b47b1afdbfdf6b026230a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_303ab6e6c6ffad199fa170d63e10cdef874b48a387b47b1afdbfdf6b026230a2->enter($__internal_303ab6e6c6ffad199fa170d63e10cdef874b48a387b47b1afdbfdf6b026230a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_d69ea176af20670181dd5153df8f0dba4ac738521d020e23ec211dbf886e70d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69ea176af20670181dd5153df8f0dba4ac738521d020e23ec211dbf886e70d1->enter($__internal_d69ea176af20670181dd5153df8f0dba4ac738521d020e23ec211dbf886e70d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_303ab6e6c6ffad199fa170d63e10cdef874b48a387b47b1afdbfdf6b026230a2->leave($__internal_303ab6e6c6ffad199fa170d63e10cdef874b48a387b47b1afdbfdf6b026230a2_prof);

        
        $__internal_d69ea176af20670181dd5153df8f0dba4ac738521d020e23ec211dbf886e70d1->leave($__internal_d69ea176af20670181dd5153df8f0dba4ac738521d020e23ec211dbf886e70d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5275d5828df746891b05d42a0b12c6e5030f26f7c4c67ce72f17491ca46f344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5275d5828df746891b05d42a0b12c6e5030f26f7c4c67ce72f17491ca46f344->enter($__internal_e5275d5828df746891b05d42a0b12c6e5030f26f7c4c67ce72f17491ca46f344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_33ad65dba93c006f070ecdce686ff573f43a8d4e07b60d35f954d6dc841a30fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ad65dba93c006f070ecdce686ff573f43a8d4e07b60d35f954d6dc841a30fe->enter($__internal_33ad65dba93c006f070ecdce686ff573f43a8d4e07b60d35f954d6dc841a30fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_33ad65dba93c006f070ecdce686ff573f43a8d4e07b60d35f954d6dc841a30fe->leave($__internal_33ad65dba93c006f070ecdce686ff573f43a8d4e07b60d35f954d6dc841a30fe_prof);

        
        $__internal_e5275d5828df746891b05d42a0b12c6e5030f26f7c4c67ce72f17491ca46f344->leave($__internal_e5275d5828df746891b05d42a0b12c6e5030f26f7c4c67ce72f17491ca46f344_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
