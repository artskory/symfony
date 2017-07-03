<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_000fbd4f3eb49ddc5c3ca61deeb3407905f266d8c110c6eabbd36fe651823ad6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_290e48304eedb5a1bef45a6f7eaaf6ea4566b6a7c764df1fc94042faaee52413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290e48304eedb5a1bef45a6f7eaaf6ea4566b6a7c764df1fc94042faaee52413->enter($__internal_290e48304eedb5a1bef45a6f7eaaf6ea4566b6a7c764df1fc94042faaee52413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_1e4bda54b29e038192de914cbc49079e442283675ae90e029b8720a19b921e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4bda54b29e038192de914cbc49079e442283675ae90e029b8720a19b921e88->enter($__internal_1e4bda54b29e038192de914cbc49079e442283675ae90e029b8720a19b921e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_290e48304eedb5a1bef45a6f7eaaf6ea4566b6a7c764df1fc94042faaee52413->leave($__internal_290e48304eedb5a1bef45a6f7eaaf6ea4566b6a7c764df1fc94042faaee52413_prof);

        
        $__internal_1e4bda54b29e038192de914cbc49079e442283675ae90e029b8720a19b921e88->leave($__internal_1e4bda54b29e038192de914cbc49079e442283675ae90e029b8720a19b921e88_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e4890357deefe0da1a33323bf1bab25c79a9e9bc653542b9776d1ab0b28fee6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4890357deefe0da1a33323bf1bab25c79a9e9bc653542b9776d1ab0b28fee6a->enter($__internal_e4890357deefe0da1a33323bf1bab25c79a9e9bc653542b9776d1ab0b28fee6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5e92cf1c2e236d031c2a11036d7d2b06e4a56116a4dbea89b28a2afa6679a8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e92cf1c2e236d031c2a11036d7d2b06e4a56116a4dbea89b28a2afa6679a8a9->enter($__internal_5e92cf1c2e236d031c2a11036d7d2b06e4a56116a4dbea89b28a2afa6679a8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_5e92cf1c2e236d031c2a11036d7d2b06e4a56116a4dbea89b28a2afa6679a8a9->leave($__internal_5e92cf1c2e236d031c2a11036d7d2b06e4a56116a4dbea89b28a2afa6679a8a9_prof);

        
        $__internal_e4890357deefe0da1a33323bf1bab25c79a9e9bc653542b9776d1ab0b28fee6a->leave($__internal_e4890357deefe0da1a33323bf1bab25c79a9e9bc653542b9776d1ab0b28fee6a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}
