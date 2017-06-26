<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d5698b33a199af55f06f9cb3a26a5c0f8acf2924b663136b9f05e4f288556884 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6044463948c2a0ddcca3b5c224c5c34c7ccdf13846996f22f0ee7b484859df37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6044463948c2a0ddcca3b5c224c5c34c7ccdf13846996f22f0ee7b484859df37->enter($__internal_6044463948c2a0ddcca3b5c224c5c34c7ccdf13846996f22f0ee7b484859df37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_dac00b41a6a94cb4de98f32163b902c7f659ef31c43ee2e5eacbcc3ba7a3653f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac00b41a6a94cb4de98f32163b902c7f659ef31c43ee2e5eacbcc3ba7a3653f->enter($__internal_dac00b41a6a94cb4de98f32163b902c7f659ef31c43ee2e5eacbcc3ba7a3653f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6044463948c2a0ddcca3b5c224c5c34c7ccdf13846996f22f0ee7b484859df37->leave($__internal_6044463948c2a0ddcca3b5c224c5c34c7ccdf13846996f22f0ee7b484859df37_prof);

        
        $__internal_dac00b41a6a94cb4de98f32163b902c7f659ef31c43ee2e5eacbcc3ba7a3653f->leave($__internal_dac00b41a6a94cb4de98f32163b902c7f659ef31c43ee2e5eacbcc3ba7a3653f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d993498fcee00e37eafa7acf8f9834d77c98a121bf81842d88c2991b6ac9c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d993498fcee00e37eafa7acf8f9834d77c98a121bf81842d88c2991b6ac9c68->enter($__internal_9d993498fcee00e37eafa7acf8f9834d77c98a121bf81842d88c2991b6ac9c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_31e03cd4f77a5559f5a8d20158a7930ec99d94ec932ee3ce630f281aa97f68c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e03cd4f77a5559f5a8d20158a7930ec99d94ec932ee3ce630f281aa97f68c4->enter($__internal_31e03cd4f77a5559f5a8d20158a7930ec99d94ec932ee3ce630f281aa97f68c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_31e03cd4f77a5559f5a8d20158a7930ec99d94ec932ee3ce630f281aa97f68c4->leave($__internal_31e03cd4f77a5559f5a8d20158a7930ec99d94ec932ee3ce630f281aa97f68c4_prof);

        
        $__internal_9d993498fcee00e37eafa7acf8f9834d77c98a121bf81842d88c2991b6ac9c68->leave($__internal_9d993498fcee00e37eafa7acf8f9834d77c98a121bf81842d88c2991b6ac9c68_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
