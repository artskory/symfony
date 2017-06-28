<?php

/* :blog:layout.html.twig */
class __TwigTemplate_f834913b299aac29d4a8b37f47605b15db3bbe32f5bbcb1298a590737f0add07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":blog:layout.html.twig", 1);
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
        $__internal_c14ab8376042c9f27aa96acf0daf7f4851a71952e1efab1a662946ef6547a8ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14ab8376042c9f27aa96acf0daf7f4851a71952e1efab1a662946ef6547a8ed->enter($__internal_c14ab8376042c9f27aa96acf0daf7f4851a71952e1efab1a662946ef6547a8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:layout.html.twig"));

        $__internal_631101f829657f7b84511082d0ef1ff2691a20dcec889bbaeedfbd0eed93aeda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631101f829657f7b84511082d0ef1ff2691a20dcec889bbaeedfbd0eed93aeda->enter($__internal_631101f829657f7b84511082d0ef1ff2691a20dcec889bbaeedfbd0eed93aeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c14ab8376042c9f27aa96acf0daf7f4851a71952e1efab1a662946ef6547a8ed->leave($__internal_c14ab8376042c9f27aa96acf0daf7f4851a71952e1efab1a662946ef6547a8ed_prof);

        
        $__internal_631101f829657f7b84511082d0ef1ff2691a20dcec889bbaeedfbd0eed93aeda->leave($__internal_631101f829657f7b84511082d0ef1ff2691a20dcec889bbaeedfbd0eed93aeda_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3e267285e7d1335712045e51fc88353d8daaeaf2778f2b62b726dd3949440f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e267285e7d1335712045e51fc88353d8daaeaf2778f2b62b726dd3949440f1->enter($__internal_a3e267285e7d1335712045e51fc88353d8daaeaf2778f2b62b726dd3949440f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6d08dd7beb0b0e538ce666841813af3505dffdaff47b4456134d1d1a2e5675ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d08dd7beb0b0e538ce666841813af3505dffdaff47b4456134d1d1a2e5675ed->enter($__internal_6d08dd7beb0b0e538ce666841813af3505dffdaff47b4456134d1d1a2e5675ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_6d08dd7beb0b0e538ce666841813af3505dffdaff47b4456134d1d1a2e5675ed->leave($__internal_6d08dd7beb0b0e538ce666841813af3505dffdaff47b4456134d1d1a2e5675ed_prof);

        
        $__internal_a3e267285e7d1335712045e51fc88353d8daaeaf2778f2b62b726dd3949440f1->leave($__internal_a3e267285e7d1335712045e51fc88353d8daaeaf2778f2b62b726dd3949440f1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_564173549d10bf5ec49000645753001cda7033b428823afbc6a8168e60981c32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_564173549d10bf5ec49000645753001cda7033b428823afbc6a8168e60981c32->enter($__internal_564173549d10bf5ec49000645753001cda7033b428823afbc6a8168e60981c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d6fda9a3620d81ca4122ac24df8f91ffafc0a51ba29f771d38a262f2a09d937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6fda9a3620d81ca4122ac24df8f91ffafc0a51ba29f771d38a262f2a09d937->enter($__internal_7d6fda9a3620d81ca4122ac24df8f91ffafc0a51ba29f771d38a262f2a09d937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Blog</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_7d6fda9a3620d81ca4122ac24df8f91ffafc0a51ba29f771d38a262f2a09d937->leave($__internal_7d6fda9a3620d81ca4122ac24df8f91ffafc0a51ba29f771d38a262f2a09d937_prof);

        
        $__internal_564173549d10bf5ec49000645753001cda7033b428823afbc6a8168e60981c32->leave($__internal_564173549d10bf5ec49000645753001cda7033b428823afbc6a8168e60981c32_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_520a623ac226f4db24e3e1462424df9e12d4b2c38a452596518a2ad7ec85f328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_520a623ac226f4db24e3e1462424df9e12d4b2c38a452596518a2ad7ec85f328->enter($__internal_520a623ac226f4db24e3e1462424df9e12d4b2c38a452596518a2ad7ec85f328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_44c99001f2d4e9d76faf28fdde7a83fa2b9adac171f86954ca8e855559f03db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c99001f2d4e9d76faf28fdde7a83fa2b9adac171f86954ca8e855559f03db2->enter($__internal_44c99001f2d4e9d76faf28fdde7a83fa2b9adac171f86954ca8e855559f03db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_44c99001f2d4e9d76faf28fdde7a83fa2b9adac171f86954ca8e855559f03db2->leave($__internal_44c99001f2d4e9d76faf28fdde7a83fa2b9adac171f86954ca8e855559f03db2_prof);

        
        $__internal_520a623ac226f4db24e3e1462424df9e12d4b2c38a452596518a2ad7ec85f328->leave($__internal_520a623ac226f4db24e3e1462424df9e12d4b2c38a452596518a2ad7ec85f328_prof);

    }

    public function getTemplateName()
    {
        return ":blog:layout.html.twig";
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
{% endblock %}", ":blog:layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/blog/layout.html.twig");
    }
}
