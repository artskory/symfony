<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_cf77b25493aea07a267c86a582f672fac8624f2ff10e5722291f3b9c4db3605f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_27da893145ecd87fc4c049184e05e5eacbb87cfe31ffbdf8586ce48feea095eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27da893145ecd87fc4c049184e05e5eacbb87cfe31ffbdf8586ce48feea095eb->enter($__internal_27da893145ecd87fc4c049184e05e5eacbb87cfe31ffbdf8586ce48feea095eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_cc4ba632f790ca0407246d9a6248a4ebbd2e6d0bdc7dc30de713fbb5f94350b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4ba632f790ca0407246d9a6248a4ebbd2e6d0bdc7dc30de713fbb5f94350b7->enter($__internal_cc4ba632f790ca0407246d9a6248a4ebbd2e6d0bdc7dc30de713fbb5f94350b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27da893145ecd87fc4c049184e05e5eacbb87cfe31ffbdf8586ce48feea095eb->leave($__internal_27da893145ecd87fc4c049184e05e5eacbb87cfe31ffbdf8586ce48feea095eb_prof);

        
        $__internal_cc4ba632f790ca0407246d9a6248a4ebbd2e6d0bdc7dc30de713fbb5f94350b7->leave($__internal_cc4ba632f790ca0407246d9a6248a4ebbd2e6d0bdc7dc30de713fbb5f94350b7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e07ab5806f1d4dc60b690cd350eeff722bebd4ca43fdc0c4ab8f02456e30a29d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e07ab5806f1d4dc60b690cd350eeff722bebd4ca43fdc0c4ab8f02456e30a29d->enter($__internal_e07ab5806f1d4dc60b690cd350eeff722bebd4ca43fdc0c4ab8f02456e30a29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_026d8597eeda58cd5ecc13eb4ec260f51af937e79e4bef098b4de348aacc9668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026d8597eeda58cd5ecc13eb4ec260f51af937e79e4bef098b4de348aacc9668->enter($__internal_026d8597eeda58cd5ecc13eb4ec260f51af937e79e4bef098b4de348aacc9668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_026d8597eeda58cd5ecc13eb4ec260f51af937e79e4bef098b4de348aacc9668->leave($__internal_026d8597eeda58cd5ecc13eb4ec260f51af937e79e4bef098b4de348aacc9668_prof);

        
        $__internal_e07ab5806f1d4dc60b690cd350eeff722bebd4ca43fdc0c4ab8f02456e30a29d->leave($__internal_e07ab5806f1d4dc60b690cd350eeff722bebd4ca43fdc0c4ab8f02456e30a29d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
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
", "@FOSUser/Registration/check_email.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Registration\\check_email.html.twig");
    }
}
