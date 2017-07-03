<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_c928c831d96f65d0da640c8d5f6169aa770f86000add916d3c9e0bc7ca92510d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_0bfcf643fb8294517e4659e6e3b9d75671ded0ed29da03440d2dfdf659f84b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bfcf643fb8294517e4659e6e3b9d75671ded0ed29da03440d2dfdf659f84b4c->enter($__internal_0bfcf643fb8294517e4659e6e3b9d75671ded0ed29da03440d2dfdf659f84b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_4379c721a7b432e6a4911f85529b85f41d48a03442efc93d26e34c37c6cafee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4379c721a7b432e6a4911f85529b85f41d48a03442efc93d26e34c37c6cafee9->enter($__internal_4379c721a7b432e6a4911f85529b85f41d48a03442efc93d26e34c37c6cafee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bfcf643fb8294517e4659e6e3b9d75671ded0ed29da03440d2dfdf659f84b4c->leave($__internal_0bfcf643fb8294517e4659e6e3b9d75671ded0ed29da03440d2dfdf659f84b4c_prof);

        
        $__internal_4379c721a7b432e6a4911f85529b85f41d48a03442efc93d26e34c37c6cafee9->leave($__internal_4379c721a7b432e6a4911f85529b85f41d48a03442efc93d26e34c37c6cafee9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa3d3bfdc23e2edd81b45629d2f538415155c1c803d68a84458d77cb21b4e945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3d3bfdc23e2edd81b45629d2f538415155c1c803d68a84458d77cb21b4e945->enter($__internal_fa3d3bfdc23e2edd81b45629d2f538415155c1c803d68a84458d77cb21b4e945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2b0a9323bf6dc18da6794215ae7b0423a8e272a1c9a75ab80dbe3fae3d8b4b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0a9323bf6dc18da6794215ae7b0423a8e272a1c9a75ab80dbe3fae3d8b4b72->enter($__internal_2b0a9323bf6dc18da6794215ae7b0423a8e272a1c9a75ab80dbe3fae3d8b4b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_2b0a9323bf6dc18da6794215ae7b0423a8e272a1c9a75ab80dbe3fae3d8b4b72->leave($__internal_2b0a9323bf6dc18da6794215ae7b0423a8e272a1c9a75ab80dbe3fae3d8b4b72_prof);

        
        $__internal_fa3d3bfdc23e2edd81b45629d2f538415155c1c803d68a84458d77cb21b4e945->leave($__internal_fa3d3bfdc23e2edd81b45629d2f538415155c1c803d68a84458d77cb21b4e945_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
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
", "@FOSUser/Resetting/check_email.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Resetting\\check_email.html.twig");
    }
}
