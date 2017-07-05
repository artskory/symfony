<?php

/* :blog:layout.html.twig */
class __TwigTemplate_a317a243cdc72d4682e84b2707cee1fe3e6e723ac73f088cf2326afab940225b extends Twig_Template
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
        $__internal_c11b34c59549cea7305306436c1e3e58605d2d46044b5600257208e524286ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11b34c59549cea7305306436c1e3e58605d2d46044b5600257208e524286ce4->enter($__internal_c11b34c59549cea7305306436c1e3e58605d2d46044b5600257208e524286ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:layout.html.twig"));

        $__internal_1f684a2f767296f6de382b52725b6816249ba2e4eaf3f5dc953694adcdac70e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f684a2f767296f6de382b52725b6816249ba2e4eaf3f5dc953694adcdac70e4->enter($__internal_1f684a2f767296f6de382b52725b6816249ba2e4eaf3f5dc953694adcdac70e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c11b34c59549cea7305306436c1e3e58605d2d46044b5600257208e524286ce4->leave($__internal_c11b34c59549cea7305306436c1e3e58605d2d46044b5600257208e524286ce4_prof);

        
        $__internal_1f684a2f767296f6de382b52725b6816249ba2e4eaf3f5dc953694adcdac70e4->leave($__internal_1f684a2f767296f6de382b52725b6816249ba2e4eaf3f5dc953694adcdac70e4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0b130cd03b3bc263f32c3443c4c06016dba73398c0d0f5bb2c34a303fb10fba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b130cd03b3bc263f32c3443c4c06016dba73398c0d0f5bb2c34a303fb10fba->enter($__internal_a0b130cd03b3bc263f32c3443c4c06016dba73398c0d0f5bb2c34a303fb10fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34a62785173576dd7ef367bb3873ed06b184b93942a9b6dff1a7497b3bcba0eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a62785173576dd7ef367bb3873ed06b184b93942a9b6dff1a7497b3bcba0eb->enter($__internal_34a62785173576dd7ef367bb3873ed06b184b93942a9b6dff1a7497b3bcba0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_34a62785173576dd7ef367bb3873ed06b184b93942a9b6dff1a7497b3bcba0eb->leave($__internal_34a62785173576dd7ef367bb3873ed06b184b93942a9b6dff1a7497b3bcba0eb_prof);

        
        $__internal_a0b130cd03b3bc263f32c3443c4c06016dba73398c0d0f5bb2c34a303fb10fba->leave($__internal_a0b130cd03b3bc263f32c3443c4c06016dba73398c0d0f5bb2c34a303fb10fba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea791912902bbb4172d70874b7727ee46074498a3bf3b3f05105b6b7d193c5a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea791912902bbb4172d70874b7727ee46074498a3bf3b3f05105b6b7d193c5a1->enter($__internal_ea791912902bbb4172d70874b7727ee46074498a3bf3b3f05105b6b7d193c5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e86397c9e85851fe1ac6e252d162c371874663b8b2030898dafdcf25010fdf27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86397c9e85851fe1ac6e252d162c371874663b8b2030898dafdcf25010fdf27->enter($__internal_e86397c9e85851fe1ac6e252d162c371874663b8b2030898dafdcf25010fdf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Blog</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_e86397c9e85851fe1ac6e252d162c371874663b8b2030898dafdcf25010fdf27->leave($__internal_e86397c9e85851fe1ac6e252d162c371874663b8b2030898dafdcf25010fdf27_prof);

        
        $__internal_ea791912902bbb4172d70874b7727ee46074498a3bf3b3f05105b6b7d193c5a1->leave($__internal_ea791912902bbb4172d70874b7727ee46074498a3bf3b3f05105b6b7d193c5a1_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_eb2c12034387c9b7c6b5bf7c772c37e0182d47c475184e62db444b76b774fe18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb2c12034387c9b7c6b5bf7c772c37e0182d47c475184e62db444b76b774fe18->enter($__internal_eb2c12034387c9b7c6b5bf7c772c37e0182d47c475184e62db444b76b774fe18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_832e7f4619c53bec2b42fae5342e43d55f85d9147271fadc4e6bd62d95f6931b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832e7f4619c53bec2b42fae5342e43d55f85d9147271fadc4e6bd62d95f6931b->enter($__internal_832e7f4619c53bec2b42fae5342e43d55f85d9147271fadc4e6bd62d95f6931b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_832e7f4619c53bec2b42fae5342e43d55f85d9147271fadc4e6bd62d95f6931b->leave($__internal_832e7f4619c53bec2b42fae5342e43d55f85d9147271fadc4e6bd62d95f6931b_prof);

        
        $__internal_eb2c12034387c9b7c6b5bf7c772c37e0182d47c475184e62db444b76b774fe18->leave($__internal_eb2c12034387c9b7c6b5bf7c772c37e0182d47c475184e62db444b76b774fe18_prof);

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
