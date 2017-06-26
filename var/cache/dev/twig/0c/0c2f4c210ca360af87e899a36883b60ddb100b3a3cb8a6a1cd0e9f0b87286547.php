<?php

/* blog/layout.html.twig */
class __TwigTemplate_d19b9d83ddda57d02776328dda9512dc00b0e938e6c4b37675bb4f0e90a40911 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'body_layout' => array($this, 'block_body_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c685530e01fd446328a5c72cf676fcfa76fc195e8c029709fc335536d2bf95c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c685530e01fd446328a5c72cf676fcfa76fc195e8c029709fc335536d2bf95c6->enter($__internal_c685530e01fd446328a5c72cf676fcfa76fc195e8c029709fc335536d2bf95c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/layout.html.twig"));

        $__internal_477a47134311225e9e97c932de327b2eab137f3b2e70a875700d8edbc3802667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477a47134311225e9e97c932de327b2eab137f3b2e70a875700d8edbc3802667->enter($__internal_477a47134311225e9e97c932de327b2eab137f3b2e70a875700d8edbc3802667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c685530e01fd446328a5c72cf676fcfa76fc195e8c029709fc335536d2bf95c6->leave($__internal_c685530e01fd446328a5c72cf676fcfa76fc195e8c029709fc335536d2bf95c6_prof);

        
        $__internal_477a47134311225e9e97c932de327b2eab137f3b2e70a875700d8edbc3802667->leave($__internal_477a47134311225e9e97c932de327b2eab137f3b2e70a875700d8edbc3802667_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4920b80ba2f284df9aba313133409cf6f7c0acbaf07175b5ac2d8adc41c59270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4920b80ba2f284df9aba313133409cf6f7c0acbaf07175b5ac2d8adc41c59270->enter($__internal_4920b80ba2f284df9aba313133409cf6f7c0acbaf07175b5ac2d8adc41c59270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71f148412cc9f3de74353f341ab8d930b9c462cabf7aa73932270e0a109d0535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f148412cc9f3de74353f341ab8d930b9c462cabf7aa73932270e0a109d0535->enter($__internal_71f148412cc9f3de74353f341ab8d930b9c462cabf7aa73932270e0a109d0535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_71f148412cc9f3de74353f341ab8d930b9c462cabf7aa73932270e0a109d0535->leave($__internal_71f148412cc9f3de74353f341ab8d930b9c462cabf7aa73932270e0a109d0535_prof);

        
        $__internal_4920b80ba2f284df9aba313133409cf6f7c0acbaf07175b5ac2d8adc41c59270->leave($__internal_4920b80ba2f284df9aba313133409cf6f7c0acbaf07175b5ac2d8adc41c59270_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a28e1924eba049cda918332d17ad011a21ebfb6c37be71c543f7e22b51c12a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a28e1924eba049cda918332d17ad011a21ebfb6c37be71c543f7e22b51c12a0->enter($__internal_8a28e1924eba049cda918332d17ad011a21ebfb6c37be71c543f7e22b51c12a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d6ce4dabfd49687c25a42a80270cf281ecd1bb8efcc230ced4fc5f79e842254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6ce4dabfd49687c25a42a80270cf281ecd1bb8efcc230ced4fc5f79e842254->enter($__internal_4d6ce4dabfd49687c25a42a80270cf281ecd1bb8efcc230ced4fc5f79e842254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Blog</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_4d6ce4dabfd49687c25a42a80270cf281ecd1bb8efcc230ced4fc5f79e842254->leave($__internal_4d6ce4dabfd49687c25a42a80270cf281ecd1bb8efcc230ced4fc5f79e842254_prof);

        
        $__internal_8a28e1924eba049cda918332d17ad011a21ebfb6c37be71c543f7e22b51c12a0->leave($__internal_8a28e1924eba049cda918332d17ad011a21ebfb6c37be71c543f7e22b51c12a0_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_9d8cfa7fee957b541d8ff6f6edb92196228b4fd7e0441fecf01ea4d09fa64354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8cfa7fee957b541d8ff6f6edb92196228b4fd7e0441fecf01ea4d09fa64354->enter($__internal_9d8cfa7fee957b541d8ff6f6edb92196228b4fd7e0441fecf01ea4d09fa64354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_6076e21ed5d6fa8d889cd841648b18f1b9d5600ed1d73664f8161ce9ee72e11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6076e21ed5d6fa8d889cd841648b18f1b9d5600ed1d73664f8161ce9ee72e11d->enter($__internal_6076e21ed5d6fa8d889cd841648b18f1b9d5600ed1d73664f8161ce9ee72e11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_6076e21ed5d6fa8d889cd841648b18f1b9d5600ed1d73664f8161ce9ee72e11d->leave($__internal_6076e21ed5d6fa8d889cd841648b18f1b9d5600ed1d73664f8161ce9ee72e11d_prof);

        
        $__internal_9d8cfa7fee957b541d8ff6f6edb92196228b4fd7e0441fecf01ea4d09fa64354->leave($__internal_9d8cfa7fee957b541d8ff6f6edb92196228b4fd7e0441fecf01ea4d09fa64354_prof);

    }

    public function getTemplateName()
    {
        return "blog/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 5,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block title %}Blog{% endblock %}
{% block body %}
    <h1>Blog</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", "blog/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\blog\\layout.html.twig");
    }
}
