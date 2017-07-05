<?php

/* OCPlatformBundle:Annonce:layout.html.twig */
class __TwigTemplate_443477a0887d348dce1ba80692910f446232a5008687f1e7133213ab2a179cdb extends Twig_Template
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
        $__internal_54f314dcd89a4c42ff652960c1ecafb14e4c386fffd5c6cd91a4385b1c3c9d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54f314dcd89a4c42ff652960c1ecafb14e4c386fffd5c6cd91a4385b1c3c9d45->enter($__internal_54f314dcd89a4c42ff652960c1ecafb14e4c386fffd5c6cd91a4385b1c3c9d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Annonce:layout.html.twig"));

        $__internal_a399b908e3ac039f48341fd373f1e7626eec4ed693c2cf997e9704fc6437bcfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a399b908e3ac039f48341fd373f1e7626eec4ed693c2cf997e9704fc6437bcfe->enter($__internal_a399b908e3ac039f48341fd373f1e7626eec4ed693c2cf997e9704fc6437bcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Annonce:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54f314dcd89a4c42ff652960c1ecafb14e4c386fffd5c6cd91a4385b1c3c9d45->leave($__internal_54f314dcd89a4c42ff652960c1ecafb14e4c386fffd5c6cd91a4385b1c3c9d45_prof);

        
        $__internal_a399b908e3ac039f48341fd373f1e7626eec4ed693c2cf997e9704fc6437bcfe->leave($__internal_a399b908e3ac039f48341fd373f1e7626eec4ed693c2cf997e9704fc6437bcfe_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_da13ca9eb92d6cb8b5838ca0cc2b668d6ed8dcdc40cf35fcf7264ac2704310b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da13ca9eb92d6cb8b5838ca0cc2b668d6ed8dcdc40cf35fcf7264ac2704310b2->enter($__internal_da13ca9eb92d6cb8b5838ca0cc2b668d6ed8dcdc40cf35fcf7264ac2704310b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_432f5a28beeb84254662ff47c3a16c96cb5c1cde5c2dd6cdde025231fb384efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_432f5a28beeb84254662ff47c3a16c96cb5c1cde5c2dd6cdde025231fb384efa->enter($__internal_432f5a28beeb84254662ff47c3a16c96cb5c1cde5c2dd6cdde025231fb384efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_432f5a28beeb84254662ff47c3a16c96cb5c1cde5c2dd6cdde025231fb384efa->leave($__internal_432f5a28beeb84254662ff47c3a16c96cb5c1cde5c2dd6cdde025231fb384efa_prof);

        
        $__internal_da13ca9eb92d6cb8b5838ca0cc2b668d6ed8dcdc40cf35fcf7264ac2704310b2->leave($__internal_da13ca9eb92d6cb8b5838ca0cc2b668d6ed8dcdc40cf35fcf7264ac2704310b2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e900bae003c7f85fe6ef7e34385b5ee47a9e179ddbc133e2ca44ff7788e03476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e900bae003c7f85fe6ef7e34385b5ee47a9e179ddbc133e2ca44ff7788e03476->enter($__internal_e900bae003c7f85fe6ef7e34385b5ee47a9e179ddbc133e2ca44ff7788e03476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0898fdded80f2d77a9d45afc23c8aa78f95651294ce735368ed63e197e9be11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0898fdded80f2d77a9d45afc23c8aa78f95651294ce735368ed63e197e9be11->enter($__internal_a0898fdded80f2d77a9d45afc23c8aa78f95651294ce735368ed63e197e9be11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Annonce</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_a0898fdded80f2d77a9d45afc23c8aa78f95651294ce735368ed63e197e9be11->leave($__internal_a0898fdded80f2d77a9d45afc23c8aa78f95651294ce735368ed63e197e9be11_prof);

        
        $__internal_e900bae003c7f85fe6ef7e34385b5ee47a9e179ddbc133e2ca44ff7788e03476->leave($__internal_e900bae003c7f85fe6ef7e34385b5ee47a9e179ddbc133e2ca44ff7788e03476_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_3978dd9ef314eb5282584f969362338a65edd8a97fad076668b6764d8191ca7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3978dd9ef314eb5282584f969362338a65edd8a97fad076668b6764d8191ca7c->enter($__internal_3978dd9ef314eb5282584f969362338a65edd8a97fad076668b6764d8191ca7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_b0a6b83a96454f8d251ac7d0cf14c6beba37cdcf48a6df4de410393cfbac7ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a6b83a96454f8d251ac7d0cf14c6beba37cdcf48a6df4de410393cfbac7ce5->enter($__internal_b0a6b83a96454f8d251ac7d0cf14c6beba37cdcf48a6df4de410393cfbac7ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_b0a6b83a96454f8d251ac7d0cf14c6beba37cdcf48a6df4de410393cfbac7ce5->leave($__internal_b0a6b83a96454f8d251ac7d0cf14c6beba37cdcf48a6df4de410393cfbac7ce5_prof);

        
        $__internal_3978dd9ef314eb5282584f969362338a65edd8a97fad076668b6764d8191ca7c->leave($__internal_3978dd9ef314eb5282584f969362338a65edd8a97fad076668b6764d8191ca7c_prof);

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
