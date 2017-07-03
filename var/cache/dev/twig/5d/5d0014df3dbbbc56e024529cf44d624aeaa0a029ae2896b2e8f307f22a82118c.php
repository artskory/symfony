<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_102f4a7f7051bb511a16f659879b09906fcc1ade414e597e88a8216d0dfb52dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_cc277c66cc79f63189c7156de21b6f893e798456332750de6ec1d22b755a67fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc277c66cc79f63189c7156de21b6f893e798456332750de6ec1d22b755a67fa->enter($__internal_cc277c66cc79f63189c7156de21b6f893e798456332750de6ec1d22b755a67fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_af4ea058148942a2b685de1f81dd96836979e82a9bbfedda3a026e190c4e25ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af4ea058148942a2b685de1f81dd96836979e82a9bbfedda3a026e190c4e25ea->enter($__internal_af4ea058148942a2b685de1f81dd96836979e82a9bbfedda3a026e190c4e25ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc277c66cc79f63189c7156de21b6f893e798456332750de6ec1d22b755a67fa->leave($__internal_cc277c66cc79f63189c7156de21b6f893e798456332750de6ec1d22b755a67fa_prof);

        
        $__internal_af4ea058148942a2b685de1f81dd96836979e82a9bbfedda3a026e190c4e25ea->leave($__internal_af4ea058148942a2b685de1f81dd96836979e82a9bbfedda3a026e190c4e25ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a649e4dcc31e0d00b93e6bede036c9ffe64df321f308d0cc539551c5e6d42518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a649e4dcc31e0d00b93e6bede036c9ffe64df321f308d0cc539551c5e6d42518->enter($__internal_a649e4dcc31e0d00b93e6bede036c9ffe64df321f308d0cc539551c5e6d42518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8b3db35a2a9732e97c4481aa7c763dab86f4f98ca625bffaae854cbd62c09356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3db35a2a9732e97c4481aa7c763dab86f4f98ca625bffaae854cbd62c09356->enter($__internal_8b3db35a2a9732e97c4481aa7c763dab86f4f98ca625bffaae854cbd62c09356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_8b3db35a2a9732e97c4481aa7c763dab86f4f98ca625bffaae854cbd62c09356->leave($__internal_8b3db35a2a9732e97c4481aa7c763dab86f4f98ca625bffaae854cbd62c09356_prof);

        
        $__internal_a649e4dcc31e0d00b93e6bede036c9ffe64df321f308d0cc539551c5e6d42518->leave($__internal_a649e4dcc31e0d00b93e6bede036c9ffe64df321f308d0cc539551c5e6d42518_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password.html.twig");
    }
}
