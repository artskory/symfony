<?php

/* OCPlatformBundle:Annonce:layout.html.twig */
class __TwigTemplate_74a3751e21e5a9283969de441d0160f1b3d25dd3b61e8cea72ef9db644f6425f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "OCPlatformBundle:Annonce:layout.html.twig", 1);
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
        $__internal_c0a61a3f17d72b3058995e7795a54e40d09c280a593f535e622cbbfac70a3c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0a61a3f17d72b3058995e7795a54e40d09c280a593f535e622cbbfac70a3c6e->enter($__internal_c0a61a3f17d72b3058995e7795a54e40d09c280a593f535e622cbbfac70a3c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Annonce:layout.html.twig"));

        $__internal_f092eeb28dde3b4ea06d2a30d27f48239e24c34666f9fecf600d0579100f7f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f092eeb28dde3b4ea06d2a30d27f48239e24c34666f9fecf600d0579100f7f4a->enter($__internal_f092eeb28dde3b4ea06d2a30d27f48239e24c34666f9fecf600d0579100f7f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Annonce:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0a61a3f17d72b3058995e7795a54e40d09c280a593f535e622cbbfac70a3c6e->leave($__internal_c0a61a3f17d72b3058995e7795a54e40d09c280a593f535e622cbbfac70a3c6e_prof);

        
        $__internal_f092eeb28dde3b4ea06d2a30d27f48239e24c34666f9fecf600d0579100f7f4a->leave($__internal_f092eeb28dde3b4ea06d2a30d27f48239e24c34666f9fecf600d0579100f7f4a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_81c63a792a0979fb4138d93803e54d74603e42e2d9a446cfc9d9d5708106edf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81c63a792a0979fb4138d93803e54d74603e42e2d9a446cfc9d9d5708106edf3->enter($__internal_81c63a792a0979fb4138d93803e54d74603e42e2d9a446cfc9d9d5708106edf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71a6cf1321b17788ba11c2f91e26e1edd4997bc6f87acbf0194e37f0bb4f1f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a6cf1321b17788ba11c2f91e26e1edd4997bc6f87acbf0194e37f0bb4f1f13->enter($__internal_71a6cf1321b17788ba11c2f91e26e1edd4997bc6f87acbf0194e37f0bb4f1f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_71a6cf1321b17788ba11c2f91e26e1edd4997bc6f87acbf0194e37f0bb4f1f13->leave($__internal_71a6cf1321b17788ba11c2f91e26e1edd4997bc6f87acbf0194e37f0bb4f1f13_prof);

        
        $__internal_81c63a792a0979fb4138d93803e54d74603e42e2d9a446cfc9d9d5708106edf3->leave($__internal_81c63a792a0979fb4138d93803e54d74603e42e2d9a446cfc9d9d5708106edf3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc1981982dacb78d004cb5b86d31e11bffe1d1308419bd011da838438f91131a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1981982dacb78d004cb5b86d31e11bffe1d1308419bd011da838438f91131a->enter($__internal_bc1981982dacb78d004cb5b86d31e11bffe1d1308419bd011da838438f91131a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f722be1c9d4412a24a3f23cc1e4044bafa345159965ebf39bd45ffa5071e2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f722be1c9d4412a24a3f23cc1e4044bafa345159965ebf39bd45ffa5071e2bb->enter($__internal_3f722be1c9d4412a24a3f23cc1e4044bafa345159965ebf39bd45ffa5071e2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Annonce</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_3f722be1c9d4412a24a3f23cc1e4044bafa345159965ebf39bd45ffa5071e2bb->leave($__internal_3f722be1c9d4412a24a3f23cc1e4044bafa345159965ebf39bd45ffa5071e2bb_prof);

        
        $__internal_bc1981982dacb78d004cb5b86d31e11bffe1d1308419bd011da838438f91131a->leave($__internal_bc1981982dacb78d004cb5b86d31e11bffe1d1308419bd011da838438f91131a_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_cf59af2e6360af08c373ae460f0aa054fe398093ea940435b352be4958fedd7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf59af2e6360af08c373ae460f0aa054fe398093ea940435b352be4958fedd7b->enter($__internal_cf59af2e6360af08c373ae460f0aa054fe398093ea940435b352be4958fedd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_db57d62c25b738cd6b429c11794195c23d9f4d872c24ba5dbe7e39df2aee4cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db57d62c25b738cd6b429c11794195c23d9f4d872c24ba5dbe7e39df2aee4cee->enter($__internal_db57d62c25b738cd6b429c11794195c23d9f4d872c24ba5dbe7e39df2aee4cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_db57d62c25b738cd6b429c11794195c23d9f4d872c24ba5dbe7e39df2aee4cee->leave($__internal_db57d62c25b738cd6b429c11794195c23d9f4d872c24ba5dbe7e39df2aee4cee_prof);

        
        $__internal_cf59af2e6360af08c373ae460f0aa054fe398093ea940435b352be4958fedd7b->leave($__internal_cf59af2e6360af08c373ae460f0aa054fe398093ea940435b352be4958fedd7b_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Annonce:layout.html.twig";
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
{% endblock %}", "OCPlatformBundle:Annonce:layout.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\OC\\PlatformBundle/Resources/views/Annonce/layout.html.twig");
    }
}
