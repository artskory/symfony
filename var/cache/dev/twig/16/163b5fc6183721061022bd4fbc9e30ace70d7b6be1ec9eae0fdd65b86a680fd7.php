<?php

/* :catalogue:layout.html.twig */
class __TwigTemplate_944d08f4a3387413edb9394adeed89ef80f093cf9428eccaa0da215be3d32b06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":catalogue:layout.html.twig", 1);
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
        $__internal_c6e84ec01fb36a09e9c056d6f3787c8b89672e263337d62b49e01c41d3930f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e84ec01fb36a09e9c056d6f3787c8b89672e263337d62b49e01c41d3930f6f->enter($__internal_c6e84ec01fb36a09e9c056d6f3787c8b89672e263337d62b49e01c41d3930f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:layout.html.twig"));

        $__internal_39fdb1dcfda96e368a25ebe8f7f8535afb43b3ab1b72506737abd7b6e0b1e28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39fdb1dcfda96e368a25ebe8f7f8535afb43b3ab1b72506737abd7b6e0b1e28a->enter($__internal_39fdb1dcfda96e368a25ebe8f7f8535afb43b3ab1b72506737abd7b6e0b1e28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6e84ec01fb36a09e9c056d6f3787c8b89672e263337d62b49e01c41d3930f6f->leave($__internal_c6e84ec01fb36a09e9c056d6f3787c8b89672e263337d62b49e01c41d3930f6f_prof);

        
        $__internal_39fdb1dcfda96e368a25ebe8f7f8535afb43b3ab1b72506737abd7b6e0b1e28a->leave($__internal_39fdb1dcfda96e368a25ebe8f7f8535afb43b3ab1b72506737abd7b6e0b1e28a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffdbe1dff5a868db50574d29f913d59690b9ca60bcb354583ceb0e847d589cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffdbe1dff5a868db50574d29f913d59690b9ca60bcb354583ceb0e847d589cd3->enter($__internal_ffdbe1dff5a868db50574d29f913d59690b9ca60bcb354583ceb0e847d589cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4e7d251e32f3716c1236b076060244dc9ee95fd6294959a5f264660d801ffe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e7d251e32f3716c1236b076060244dc9ee95fd6294959a5f264660d801ffe4->enter($__internal_d4e7d251e32f3716c1236b076060244dc9ee95fd6294959a5f264660d801ffe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_d4e7d251e32f3716c1236b076060244dc9ee95fd6294959a5f264660d801ffe4->leave($__internal_d4e7d251e32f3716c1236b076060244dc9ee95fd6294959a5f264660d801ffe4_prof);

        
        $__internal_ffdbe1dff5a868db50574d29f913d59690b9ca60bcb354583ceb0e847d589cd3->leave($__internal_ffdbe1dff5a868db50574d29f913d59690b9ca60bcb354583ceb0e847d589cd3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_57b1f6c7b6a0c618b3207187e35f1f2360104bc752b33cac64fa4484c6696b8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b1f6c7b6a0c618b3207187e35f1f2360104bc752b33cac64fa4484c6696b8a->enter($__internal_57b1f6c7b6a0c618b3207187e35f1f2360104bc752b33cac64fa4484c6696b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8bb7d9f607ffedbd200b3090e96a3f2a5c17aa25bdb1aced540d8b69bbef1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8bb7d9f607ffedbd200b3090e96a3f2a5c17aa25bdb1aced540d8b69bbef1db->enter($__internal_a8bb7d9f607ffedbd200b3090e96a3f2a5c17aa25bdb1aced540d8b69bbef1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Catalogue</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_a8bb7d9f607ffedbd200b3090e96a3f2a5c17aa25bdb1aced540d8b69bbef1db->leave($__internal_a8bb7d9f607ffedbd200b3090e96a3f2a5c17aa25bdb1aced540d8b69bbef1db_prof);

        
        $__internal_57b1f6c7b6a0c618b3207187e35f1f2360104bc752b33cac64fa4484c6696b8a->leave($__internal_57b1f6c7b6a0c618b3207187e35f1f2360104bc752b33cac64fa4484c6696b8a_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_774f6c8d488dce375c0f24195b7314aff531a195b548583c159a44b7a4a453ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774f6c8d488dce375c0f24195b7314aff531a195b548583c159a44b7a4a453ee->enter($__internal_774f6c8d488dce375c0f24195b7314aff531a195b548583c159a44b7a4a453ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_406436be45e6ce8c804d843a0f4c861544e071e7772d90918529a1595fbc89c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406436be45e6ce8c804d843a0f4c861544e071e7772d90918529a1595fbc89c9->enter($__internal_406436be45e6ce8c804d843a0f4c861544e071e7772d90918529a1595fbc89c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_406436be45e6ce8c804d843a0f4c861544e071e7772d90918529a1595fbc89c9->leave($__internal_406436be45e6ce8c804d843a0f4c861544e071e7772d90918529a1595fbc89c9_prof);

        
        $__internal_774f6c8d488dce375c0f24195b7314aff531a195b548583c159a44b7a4a453ee->leave($__internal_774f6c8d488dce375c0f24195b7314aff531a195b548583c159a44b7a4a453ee_prof);

    }

    public function getTemplateName()
    {
        return ":catalogue:layout.html.twig";
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
    <h1>Catalogue</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", ":catalogue:layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\catalogue\\layout.html.twig");
    }
}
