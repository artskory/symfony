<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_6a2bc9df1ee42ff3a3988726a2924149bc52fc21602e26c368d56b3f9321d0be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_9cc23dab74f434247dd7f7639e7a2a4dd88c3aff650ef11fdb117df1e2c3d359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc23dab74f434247dd7f7639e7a2a4dd88c3aff650ef11fdb117df1e2c3d359->enter($__internal_9cc23dab74f434247dd7f7639e7a2a4dd88c3aff650ef11fdb117df1e2c3d359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_eca901a5c1bc26f6ebadd8fd762599ef3121df9fae7ea6b6270ed1b127439477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca901a5c1bc26f6ebadd8fd762599ef3121df9fae7ea6b6270ed1b127439477->enter($__internal_eca901a5c1bc26f6ebadd8fd762599ef3121df9fae7ea6b6270ed1b127439477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cc23dab74f434247dd7f7639e7a2a4dd88c3aff650ef11fdb117df1e2c3d359->leave($__internal_9cc23dab74f434247dd7f7639e7a2a4dd88c3aff650ef11fdb117df1e2c3d359_prof);

        
        $__internal_eca901a5c1bc26f6ebadd8fd762599ef3121df9fae7ea6b6270ed1b127439477->leave($__internal_eca901a5c1bc26f6ebadd8fd762599ef3121df9fae7ea6b6270ed1b127439477_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf0432ec5bf41ca98df2383c4351e5817272514d9e9e1ea6f639f4f1e1f20d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0432ec5bf41ca98df2383c4351e5817272514d9e9e1ea6f639f4f1e1f20d8d->enter($__internal_bf0432ec5bf41ca98df2383c4351e5817272514d9e9e1ea6f639f4f1e1f20d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b37d3f62c3face2f848f9384763a27737a21484ffee7003e37e3b9b63a155918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37d3f62c3face2f848f9384763a27737a21484ffee7003e37e3b9b63a155918->enter($__internal_b37d3f62c3face2f848f9384763a27737a21484ffee7003e37e3b9b63a155918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_b37d3f62c3face2f848f9384763a27737a21484ffee7003e37e3b9b63a155918->leave($__internal_b37d3f62c3face2f848f9384763a27737a21484ffee7003e37e3b9b63a155918_prof);

        
        $__internal_bf0432ec5bf41ca98df2383c4351e5817272514d9e9e1ea6f639f4f1e1f20d8d->leave($__internal_bf0432ec5bf41ca98df2383c4351e5817272514d9e9e1ea6f639f4f1e1f20d8d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
", "@FOSUser/Resetting/reset.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
