<?php

/* maintenance/layout.html.twig */
class __TwigTemplate_2da5bd7671a48c2699ad4099b7ffdc1645d882ce21539052dfda9cb229d2ae94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "maintenance/layout.html.twig", 1);
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
        $__internal_d6abdc7cddfd16443b50c0baef23dbe48446ec3382ae99010b92d64af10d7627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6abdc7cddfd16443b50c0baef23dbe48446ec3382ae99010b92d64af10d7627->enter($__internal_d6abdc7cddfd16443b50c0baef23dbe48446ec3382ae99010b92d64af10d7627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maintenance/layout.html.twig"));

        $__internal_b268d887537b25b20729f520958db0d38f2af4b1a83ec1abbdd77a67fbeab863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b268d887537b25b20729f520958db0d38f2af4b1a83ec1abbdd77a67fbeab863->enter($__internal_b268d887537b25b20729f520958db0d38f2af4b1a83ec1abbdd77a67fbeab863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maintenance/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6abdc7cddfd16443b50c0baef23dbe48446ec3382ae99010b92d64af10d7627->leave($__internal_d6abdc7cddfd16443b50c0baef23dbe48446ec3382ae99010b92d64af10d7627_prof);

        
        $__internal_b268d887537b25b20729f520958db0d38f2af4b1a83ec1abbdd77a67fbeab863->leave($__internal_b268d887537b25b20729f520958db0d38f2af4b1a83ec1abbdd77a67fbeab863_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3b39ce155f27e3243512fd2a74f10d1cc4686ca2074d0df022da7b106066eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b39ce155f27e3243512fd2a74f10d1cc4686ca2074d0df022da7b106066eda->enter($__internal_f3b39ce155f27e3243512fd2a74f10d1cc4686ca2074d0df022da7b106066eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_202109b7e376560c3b1e0aaecf0fa704b84b79ef3b0a344f6fa1c8038fe33218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202109b7e376560c3b1e0aaecf0fa704b84b79ef3b0a344f6fa1c8038fe33218->enter($__internal_202109b7e376560c3b1e0aaecf0fa704b84b79ef3b0a344f6fa1c8038fe33218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_202109b7e376560c3b1e0aaecf0fa704b84b79ef3b0a344f6fa1c8038fe33218->leave($__internal_202109b7e376560c3b1e0aaecf0fa704b84b79ef3b0a344f6fa1c8038fe33218_prof);

        
        $__internal_f3b39ce155f27e3243512fd2a74f10d1cc4686ca2074d0df022da7b106066eda->leave($__internal_f3b39ce155f27e3243512fd2a74f10d1cc4686ca2074d0df022da7b106066eda_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_957b862c2d5ef75ffd56d03d0438d1227be6e4a5e2158bafb02d0e15e7b512c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_957b862c2d5ef75ffd56d03d0438d1227be6e4a5e2158bafb02d0e15e7b512c2->enter($__internal_957b862c2d5ef75ffd56d03d0438d1227be6e4a5e2158bafb02d0e15e7b512c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb27f9dc5c2d726b38308a54ad86f7cc68bf9c1eed1c27b76a3c7e92b7fe2efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb27f9dc5c2d726b38308a54ad86f7cc68bf9c1eed1c27b76a3c7e92b7fe2efe->enter($__internal_bb27f9dc5c2d726b38308a54ad86f7cc68bf9c1eed1c27b76a3c7e92b7fe2efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <h1>Maintenance</h1>
    ";
        // line 6
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_bb27f9dc5c2d726b38308a54ad86f7cc68bf9c1eed1c27b76a3c7e92b7fe2efe->leave($__internal_bb27f9dc5c2d726b38308a54ad86f7cc68bf9c1eed1c27b76a3c7e92b7fe2efe_prof);

        
        $__internal_957b862c2d5ef75ffd56d03d0438d1227be6e4a5e2158bafb02d0e15e7b512c2->leave($__internal_957b862c2d5ef75ffd56d03d0438d1227be6e4a5e2158bafb02d0e15e7b512c2_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_d50f266457942f05599d695f2b5404e8a33f6aa193bf46bdce1306696af339fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50f266457942f05599d695f2b5404e8a33f6aa193bf46bdce1306696af339fe->enter($__internal_d50f266457942f05599d695f2b5404e8a33f6aa193bf46bdce1306696af339fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_ffbb14ef0c5157ebfd572a88ca24c3ca9400d569a26261c5d2fd3d50a3ff02e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffbb14ef0c5157ebfd572a88ca24c3ca9400d569a26261c5d2fd3d50a3ff02e2->enter($__internal_ffbb14ef0c5157ebfd572a88ca24c3ca9400d569a26261c5d2fd3d50a3ff02e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_ffbb14ef0c5157ebfd572a88ca24c3ca9400d569a26261c5d2fd3d50a3ff02e2->leave($__internal_ffbb14ef0c5157ebfd572a88ca24c3ca9400d569a26261c5d2fd3d50a3ff02e2_prof);

        
        $__internal_d50f266457942f05599d695f2b5404e8a33f6aa193bf46bdce1306696af339fe->leave($__internal_d50f266457942f05599d695f2b5404e8a33f6aa193bf46bdce1306696af339fe_prof);

    }

    public function getTemplateName()
    {
        return "maintenance/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 6,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
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
    
    <h1>Maintenance</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", "maintenance/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\maintenance\\layout.html.twig");
    }
}
