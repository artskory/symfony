<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f55ae97ea1205a54b05b24d86dc2fd81208bfb78790714045c94629fabb54cdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_10ee21672f66dcf1521d36fb21e6072c18a8004d630feeeff06b39ad2270c76a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ee21672f66dcf1521d36fb21e6072c18a8004d630feeeff06b39ad2270c76a->enter($__internal_10ee21672f66dcf1521d36fb21e6072c18a8004d630feeeff06b39ad2270c76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_8bf838f887394da1afbbb9a894c29c426a2fcc42d1a88af81ac936dae4acb1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf838f887394da1afbbb9a894c29c426a2fcc42d1a88af81ac936dae4acb1e5->enter($__internal_8bf838f887394da1afbbb9a894c29c426a2fcc42d1a88af81ac936dae4acb1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10ee21672f66dcf1521d36fb21e6072c18a8004d630feeeff06b39ad2270c76a->leave($__internal_10ee21672f66dcf1521d36fb21e6072c18a8004d630feeeff06b39ad2270c76a_prof);

        
        $__internal_8bf838f887394da1afbbb9a894c29c426a2fcc42d1a88af81ac936dae4acb1e5->leave($__internal_8bf838f887394da1afbbb9a894c29c426a2fcc42d1a88af81ac936dae4acb1e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c873e72be1fddd4ddf6cdf8271e268848c7595fee2e4343c87ad92b8a238d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c873e72be1fddd4ddf6cdf8271e268848c7595fee2e4343c87ad92b8a238d2d->enter($__internal_5c873e72be1fddd4ddf6cdf8271e268848c7595fee2e4343c87ad92b8a238d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cda6d1b8ea77594e2122e54c2313c077658cce3ade75af9589162df894985a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda6d1b8ea77594e2122e54c2313c077658cce3ade75af9589162df894985a59->enter($__internal_cda6d1b8ea77594e2122e54c2313c077658cce3ade75af9589162df894985a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_cda6d1b8ea77594e2122e54c2313c077658cce3ade75af9589162df894985a59->leave($__internal_cda6d1b8ea77594e2122e54c2313c077658cce3ade75af9589162df894985a59_prof);

        
        $__internal_5c873e72be1fddd4ddf6cdf8271e268848c7595fee2e4343c87ad92b8a238d2d->leave($__internal_5c873e72be1fddd4ddf6cdf8271e268848c7595fee2e4343c87ad92b8a238d2d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
