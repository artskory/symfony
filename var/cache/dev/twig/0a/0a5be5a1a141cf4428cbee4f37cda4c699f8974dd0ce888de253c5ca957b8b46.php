<?php

/* OCPlatformBundle:Annonce:layout.html.twig */
class __TwigTemplate_76698c90e027468a1716b89133023e43eb9758bb0f88d58ca92c72220ddda15c extends Twig_Template
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
        $__internal_c0a33f681c49e1d45d047332ceb6328786f481d1303fc7f65695c163bb0b4ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0a33f681c49e1d45d047332ceb6328786f481d1303fc7f65695c163bb0b4ed8->enter($__internal_c0a33f681c49e1d45d047332ceb6328786f481d1303fc7f65695c163bb0b4ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Annonce:layout.html.twig"));

        $__internal_6f299db22460d69a72a6f961e4d858ff69e778e6a45b77e4ca621c478b864254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f299db22460d69a72a6f961e4d858ff69e778e6a45b77e4ca621c478b864254->enter($__internal_6f299db22460d69a72a6f961e4d858ff69e778e6a45b77e4ca621c478b864254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Annonce:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0a33f681c49e1d45d047332ceb6328786f481d1303fc7f65695c163bb0b4ed8->leave($__internal_c0a33f681c49e1d45d047332ceb6328786f481d1303fc7f65695c163bb0b4ed8_prof);

        
        $__internal_6f299db22460d69a72a6f961e4d858ff69e778e6a45b77e4ca621c478b864254->leave($__internal_6f299db22460d69a72a6f961e4d858ff69e778e6a45b77e4ca621c478b864254_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_39f1f9f1622eb5ce2c33282f65e9f8314e32acdc07c156450bd5aeefca5d9fff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39f1f9f1622eb5ce2c33282f65e9f8314e32acdc07c156450bd5aeefca5d9fff->enter($__internal_39f1f9f1622eb5ce2c33282f65e9f8314e32acdc07c156450bd5aeefca5d9fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2751b0d5f10734bf9460d5e20fb1c148b073d9a75561ae38e72d4e5cd0b264e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2751b0d5f10734bf9460d5e20fb1c148b073d9a75561ae38e72d4e5cd0b264e7->enter($__internal_2751b0d5f10734bf9460d5e20fb1c148b073d9a75561ae38e72d4e5cd0b264e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_2751b0d5f10734bf9460d5e20fb1c148b073d9a75561ae38e72d4e5cd0b264e7->leave($__internal_2751b0d5f10734bf9460d5e20fb1c148b073d9a75561ae38e72d4e5cd0b264e7_prof);

        
        $__internal_39f1f9f1622eb5ce2c33282f65e9f8314e32acdc07c156450bd5aeefca5d9fff->leave($__internal_39f1f9f1622eb5ce2c33282f65e9f8314e32acdc07c156450bd5aeefca5d9fff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_040f892571146476ee79b2e4df4b530e4ddb325334ce7e937be7b52702661c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040f892571146476ee79b2e4df4b530e4ddb325334ce7e937be7b52702661c59->enter($__internal_040f892571146476ee79b2e4df4b530e4ddb325334ce7e937be7b52702661c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1acc54ab6be961ff86a6d9ab2c8d011d25418a4e396a720df2d96b3bc6b8a4d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acc54ab6be961ff86a6d9ab2c8d011d25418a4e396a720df2d96b3bc6b8a4d5->enter($__internal_1acc54ab6be961ff86a6d9ab2c8d011d25418a4e396a720df2d96b3bc6b8a4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Annonce</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_1acc54ab6be961ff86a6d9ab2c8d011d25418a4e396a720df2d96b3bc6b8a4d5->leave($__internal_1acc54ab6be961ff86a6d9ab2c8d011d25418a4e396a720df2d96b3bc6b8a4d5_prof);

        
        $__internal_040f892571146476ee79b2e4df4b530e4ddb325334ce7e937be7b52702661c59->leave($__internal_040f892571146476ee79b2e4df4b530e4ddb325334ce7e937be7b52702661c59_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_94db21cb10ea8e2b99cf60e62109e2611fa0077dfeac36237a177e39f63fd7b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94db21cb10ea8e2b99cf60e62109e2611fa0077dfeac36237a177e39f63fd7b4->enter($__internal_94db21cb10ea8e2b99cf60e62109e2611fa0077dfeac36237a177e39f63fd7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_6b44a93d8d20049c1419dc9639da08a4ab6ce9d27d8051e39e6b6457a20a838d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b44a93d8d20049c1419dc9639da08a4ab6ce9d27d8051e39e6b6457a20a838d->enter($__internal_6b44a93d8d20049c1419dc9639da08a4ab6ce9d27d8051e39e6b6457a20a838d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_6b44a93d8d20049c1419dc9639da08a4ab6ce9d27d8051e39e6b6457a20a838d->leave($__internal_6b44a93d8d20049c1419dc9639da08a4ab6ce9d27d8051e39e6b6457a20a838d_prof);

        
        $__internal_94db21cb10ea8e2b99cf60e62109e2611fa0077dfeac36237a177e39f63fd7b4->leave($__internal_94db21cb10ea8e2b99cf60e62109e2611fa0077dfeac36237a177e39f63fd7b4_prof);

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
