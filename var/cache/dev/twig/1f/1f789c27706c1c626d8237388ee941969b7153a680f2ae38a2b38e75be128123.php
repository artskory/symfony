<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_129b58a4a6e43ae5fd2bcade87d811269149ca518e6224e1a15561fb23b1a4bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_e83fb256994a720bd0751b0c8f7c7c2f47456650c7b3f0eef544fff26637423f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e83fb256994a720bd0751b0c8f7c7c2f47456650c7b3f0eef544fff26637423f->enter($__internal_e83fb256994a720bd0751b0c8f7c7c2f47456650c7b3f0eef544fff26637423f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_6d3892c3a7d636090056d0cac3f024c933266655bc5b7d2aa88ca6c679a8cd36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3892c3a7d636090056d0cac3f024c933266655bc5b7d2aa88ca6c679a8cd36->enter($__internal_6d3892c3a7d636090056d0cac3f024c933266655bc5b7d2aa88ca6c679a8cd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e83fb256994a720bd0751b0c8f7c7c2f47456650c7b3f0eef544fff26637423f->leave($__internal_e83fb256994a720bd0751b0c8f7c7c2f47456650c7b3f0eef544fff26637423f_prof);

        
        $__internal_6d3892c3a7d636090056d0cac3f024c933266655bc5b7d2aa88ca6c679a8cd36->leave($__internal_6d3892c3a7d636090056d0cac3f024c933266655bc5b7d2aa88ca6c679a8cd36_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f62ecc6e7b08368477ac88a8f6d28051107390e1e4e5440f6e886e14e0beacb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f62ecc6e7b08368477ac88a8f6d28051107390e1e4e5440f6e886e14e0beacb7->enter($__internal_f62ecc6e7b08368477ac88a8f6d28051107390e1e4e5440f6e886e14e0beacb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_637ad5c3d0c08b84dcc6ea78604b19f6fc14f03a8ee88126b89c92a376a1890a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637ad5c3d0c08b84dcc6ea78604b19f6fc14f03a8ee88126b89c92a376a1890a->enter($__internal_637ad5c3d0c08b84dcc6ea78604b19f6fc14f03a8ee88126b89c92a376a1890a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_637ad5c3d0c08b84dcc6ea78604b19f6fc14f03a8ee88126b89c92a376a1890a->leave($__internal_637ad5c3d0c08b84dcc6ea78604b19f6fc14f03a8ee88126b89c92a376a1890a_prof);

        
        $__internal_f62ecc6e7b08368477ac88a8f6d28051107390e1e4e5440f6e886e14e0beacb7->leave($__internal_f62ecc6e7b08368477ac88a8f6d28051107390e1e4e5440f6e886e14e0beacb7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
