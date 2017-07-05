<?php

/* :blog:layout.html.twig */
class __TwigTemplate_ee3ece79412005ccef775f9c7ff398160bc5a408d68c0d80746c2504f2c2a1fe extends Twig_Template
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
        $__internal_6b4a1a8d861d73606d6ed20bfa7c2f5008f1287de35bbc73e6b11a56b0030d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b4a1a8d861d73606d6ed20bfa7c2f5008f1287de35bbc73e6b11a56b0030d32->enter($__internal_6b4a1a8d861d73606d6ed20bfa7c2f5008f1287de35bbc73e6b11a56b0030d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:layout.html.twig"));

        $__internal_b85da7c09afc158b3d9c738901abb7c635ab4bd23e0b77a9ff6c452dc428a576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85da7c09afc158b3d9c738901abb7c635ab4bd23e0b77a9ff6c452dc428a576->enter($__internal_b85da7c09afc158b3d9c738901abb7c635ab4bd23e0b77a9ff6c452dc428a576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b4a1a8d861d73606d6ed20bfa7c2f5008f1287de35bbc73e6b11a56b0030d32->leave($__internal_6b4a1a8d861d73606d6ed20bfa7c2f5008f1287de35bbc73e6b11a56b0030d32_prof);

        
        $__internal_b85da7c09afc158b3d9c738901abb7c635ab4bd23e0b77a9ff6c452dc428a576->leave($__internal_b85da7c09afc158b3d9c738901abb7c635ab4bd23e0b77a9ff6c452dc428a576_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_746f44cfb4cb646db75ccdc6b8595e44e29bd00d605b9b5b2d01214e615b04c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_746f44cfb4cb646db75ccdc6b8595e44e29bd00d605b9b5b2d01214e615b04c7->enter($__internal_746f44cfb4cb646db75ccdc6b8595e44e29bd00d605b9b5b2d01214e615b04c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6122b63b0a81342f7145b31d8ee7e001aab03eeb8ef9d319096b8478045a7b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6122b63b0a81342f7145b31d8ee7e001aab03eeb8ef9d319096b8478045a7b9->enter($__internal_f6122b63b0a81342f7145b31d8ee7e001aab03eeb8ef9d319096b8478045a7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_f6122b63b0a81342f7145b31d8ee7e001aab03eeb8ef9d319096b8478045a7b9->leave($__internal_f6122b63b0a81342f7145b31d8ee7e001aab03eeb8ef9d319096b8478045a7b9_prof);

        
        $__internal_746f44cfb4cb646db75ccdc6b8595e44e29bd00d605b9b5b2d01214e615b04c7->leave($__internal_746f44cfb4cb646db75ccdc6b8595e44e29bd00d605b9b5b2d01214e615b04c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cfb38872912ac71c209c75bbc5cd1d61292ae934f5ef5d65457ec398add9d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cfb38872912ac71c209c75bbc5cd1d61292ae934f5ef5d65457ec398add9d1f->enter($__internal_9cfb38872912ac71c209c75bbc5cd1d61292ae934f5ef5d65457ec398add9d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64908c308119baf1c045333773c00df555b626f122ff54c9675d9a14a5ddad46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64908c308119baf1c045333773c00df555b626f122ff54c9675d9a14a5ddad46->enter($__internal_64908c308119baf1c045333773c00df555b626f122ff54c9675d9a14a5ddad46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Blog</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_64908c308119baf1c045333773c00df555b626f122ff54c9675d9a14a5ddad46->leave($__internal_64908c308119baf1c045333773c00df555b626f122ff54c9675d9a14a5ddad46_prof);

        
        $__internal_9cfb38872912ac71c209c75bbc5cd1d61292ae934f5ef5d65457ec398add9d1f->leave($__internal_9cfb38872912ac71c209c75bbc5cd1d61292ae934f5ef5d65457ec398add9d1f_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_5b69159dbdbc87d19d2db9465f93b079ffcf7d89107dc1455b36cd1f3681b317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b69159dbdbc87d19d2db9465f93b079ffcf7d89107dc1455b36cd1f3681b317->enter($__internal_5b69159dbdbc87d19d2db9465f93b079ffcf7d89107dc1455b36cd1f3681b317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_d3de48620d5a1949c187d60414ab43e16c618de91c5b5a50f73466b2270086d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3de48620d5a1949c187d60414ab43e16c618de91c5b5a50f73466b2270086d4->enter($__internal_d3de48620d5a1949c187d60414ab43e16c618de91c5b5a50f73466b2270086d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_d3de48620d5a1949c187d60414ab43e16c618de91c5b5a50f73466b2270086d4->leave($__internal_d3de48620d5a1949c187d60414ab43e16c618de91c5b5a50f73466b2270086d4_prof);

        
        $__internal_5b69159dbdbc87d19d2db9465f93b079ffcf7d89107dc1455b36cd1f3681b317->leave($__internal_5b69159dbdbc87d19d2db9465f93b079ffcf7d89107dc1455b36cd1f3681b317_prof);

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
