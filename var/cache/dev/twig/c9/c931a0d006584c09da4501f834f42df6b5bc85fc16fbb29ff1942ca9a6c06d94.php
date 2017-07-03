<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_d5f02f695107f37d0e9b386c9ca29faef6dc9e803dc217536b643d494eba4c09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_1881d4152c7d21af83e0144fccbfd80dbb069540a7ad714f9e90975f95774c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1881d4152c7d21af83e0144fccbfd80dbb069540a7ad714f9e90975f95774c7a->enter($__internal_1881d4152c7d21af83e0144fccbfd80dbb069540a7ad714f9e90975f95774c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_06833f1fd1c979cf56e8eecb85217606fdc1ee8ca0e47cfb3b2c7ce1305edc36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06833f1fd1c979cf56e8eecb85217606fdc1ee8ca0e47cfb3b2c7ce1305edc36->enter($__internal_06833f1fd1c979cf56e8eecb85217606fdc1ee8ca0e47cfb3b2c7ce1305edc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1881d4152c7d21af83e0144fccbfd80dbb069540a7ad714f9e90975f95774c7a->leave($__internal_1881d4152c7d21af83e0144fccbfd80dbb069540a7ad714f9e90975f95774c7a_prof);

        
        $__internal_06833f1fd1c979cf56e8eecb85217606fdc1ee8ca0e47cfb3b2c7ce1305edc36->leave($__internal_06833f1fd1c979cf56e8eecb85217606fdc1ee8ca0e47cfb3b2c7ce1305edc36_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c74408e6c120085cc59108d638233f485effd6f3070f21365ff1224e070aeb2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74408e6c120085cc59108d638233f485effd6f3070f21365ff1224e070aeb2d->enter($__internal_c74408e6c120085cc59108d638233f485effd6f3070f21365ff1224e070aeb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b12f594eca8184fdcf0a6dac5f5168a81c55b3f2ee9788b820b2dd1f15da1f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b12f594eca8184fdcf0a6dac5f5168a81c55b3f2ee9788b820b2dd1f15da1f2a->enter($__internal_b12f594eca8184fdcf0a6dac5f5168a81c55b3f2ee9788b820b2dd1f15da1f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_b12f594eca8184fdcf0a6dac5f5168a81c55b3f2ee9788b820b2dd1f15da1f2a->leave($__internal_b12f594eca8184fdcf0a6dac5f5168a81c55b3f2ee9788b820b2dd1f15da1f2a_prof);

        
        $__internal_c74408e6c120085cc59108d638233f485effd6f3070f21365ff1224e070aeb2d->leave($__internal_c74408e6c120085cc59108d638233f485effd6f3070f21365ff1224e070aeb2d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
