<?php

/* @OCPlatform/Annonce/layout.html.twig */
class __TwigTemplate_8c940166e10130299ea5be5e9e180d4d3caa08ec7b363182b9f9521f5500bd58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@OCPlatform/Annonce/layout.html.twig", 1);
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
        $__internal_071d19546f58fc2d9b240a1e196f2a1d9e900eb0fd369a8c9f2bfa3d723ae144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_071d19546f58fc2d9b240a1e196f2a1d9e900eb0fd369a8c9f2bfa3d723ae144->enter($__internal_071d19546f58fc2d9b240a1e196f2a1d9e900eb0fd369a8c9f2bfa3d723ae144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Annonce/layout.html.twig"));

        $__internal_b0a98f55a139f0f86701d49711bad2657c416afce11dc21241638ec7e751036f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a98f55a139f0f86701d49711bad2657c416afce11dc21241638ec7e751036f->enter($__internal_b0a98f55a139f0f86701d49711bad2657c416afce11dc21241638ec7e751036f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Annonce/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_071d19546f58fc2d9b240a1e196f2a1d9e900eb0fd369a8c9f2bfa3d723ae144->leave($__internal_071d19546f58fc2d9b240a1e196f2a1d9e900eb0fd369a8c9f2bfa3d723ae144_prof);

        
        $__internal_b0a98f55a139f0f86701d49711bad2657c416afce11dc21241638ec7e751036f->leave($__internal_b0a98f55a139f0f86701d49711bad2657c416afce11dc21241638ec7e751036f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5bf078545cba81077ed0c226c51732828dd7cb2910dbff4e37f25aa3832aa6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf078545cba81077ed0c226c51732828dd7cb2910dbff4e37f25aa3832aa6dd->enter($__internal_5bf078545cba81077ed0c226c51732828dd7cb2910dbff4e37f25aa3832aa6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0ab221ef298e2e946e73edbbc72942ac24d18a46a9deabd1f5ba3ee6a63a58cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab221ef298e2e946e73edbbc72942ac24d18a46a9deabd1f5ba3ee6a63a58cc->enter($__internal_0ab221ef298e2e946e73edbbc72942ac24d18a46a9deabd1f5ba3ee6a63a58cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_0ab221ef298e2e946e73edbbc72942ac24d18a46a9deabd1f5ba3ee6a63a58cc->leave($__internal_0ab221ef298e2e946e73edbbc72942ac24d18a46a9deabd1f5ba3ee6a63a58cc_prof);

        
        $__internal_5bf078545cba81077ed0c226c51732828dd7cb2910dbff4e37f25aa3832aa6dd->leave($__internal_5bf078545cba81077ed0c226c51732828dd7cb2910dbff4e37f25aa3832aa6dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76397cde27433576cf6da104ca7cb545335de47bd8353718f925264faafab8c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76397cde27433576cf6da104ca7cb545335de47bd8353718f925264faafab8c6->enter($__internal_76397cde27433576cf6da104ca7cb545335de47bd8353718f925264faafab8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c9253166468e108f60b4980cd73aa3e2ae94775dc345f569a1fdb5f0e864a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9253166468e108f60b4980cd73aa3e2ae94775dc345f569a1fdb5f0e864a30->enter($__internal_4c9253166468e108f60b4980cd73aa3e2ae94775dc345f569a1fdb5f0e864a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Annonce</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_4c9253166468e108f60b4980cd73aa3e2ae94775dc345f569a1fdb5f0e864a30->leave($__internal_4c9253166468e108f60b4980cd73aa3e2ae94775dc345f569a1fdb5f0e864a30_prof);

        
        $__internal_76397cde27433576cf6da104ca7cb545335de47bd8353718f925264faafab8c6->leave($__internal_76397cde27433576cf6da104ca7cb545335de47bd8353718f925264faafab8c6_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_63fd33756a42d50f40c54bec145682429f5fae85b79ae2dba9008f96bb154657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63fd33756a42d50f40c54bec145682429f5fae85b79ae2dba9008f96bb154657->enter($__internal_63fd33756a42d50f40c54bec145682429f5fae85b79ae2dba9008f96bb154657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_b2a0756be379cf31c3144876b9677af97249b124e4e37b75072884378ba6c58b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a0756be379cf31c3144876b9677af97249b124e4e37b75072884378ba6c58b->enter($__internal_b2a0756be379cf31c3144876b9677af97249b124e4e37b75072884378ba6c58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_b2a0756be379cf31c3144876b9677af97249b124e4e37b75072884378ba6c58b->leave($__internal_b2a0756be379cf31c3144876b9677af97249b124e4e37b75072884378ba6c58b_prof);

        
        $__internal_63fd33756a42d50f40c54bec145682429f5fae85b79ae2dba9008f96bb154657->leave($__internal_63fd33756a42d50f40c54bec145682429f5fae85b79ae2dba9008f96bb154657_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Annonce/layout.html.twig";
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
    <h1>Annonce</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", "@OCPlatform/Annonce/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Annonce\\layout.html.twig");
    }
}
