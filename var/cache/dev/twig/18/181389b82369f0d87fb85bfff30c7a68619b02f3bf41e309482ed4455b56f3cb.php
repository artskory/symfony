<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_73d5b5336681243c703220d539d77abf08bca121fd577c5fa8cec6552d4eda64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_616d40445c69c418261e37bcaedc8d501c08bac56d26bc79b4b57099cc5ea2e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_616d40445c69c418261e37bcaedc8d501c08bac56d26bc79b4b57099cc5ea2e7->enter($__internal_616d40445c69c418261e37bcaedc8d501c08bac56d26bc79b4b57099cc5ea2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_08ebb1dc8cea2d956bd224e1ce2a3699f9026256adde55720e745d09777d248c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ebb1dc8cea2d956bd224e1ce2a3699f9026256adde55720e745d09777d248c->enter($__internal_08ebb1dc8cea2d956bd224e1ce2a3699f9026256adde55720e745d09777d248c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_616d40445c69c418261e37bcaedc8d501c08bac56d26bc79b4b57099cc5ea2e7->leave($__internal_616d40445c69c418261e37bcaedc8d501c08bac56d26bc79b4b57099cc5ea2e7_prof);

        
        $__internal_08ebb1dc8cea2d956bd224e1ce2a3699f9026256adde55720e745d09777d248c->leave($__internal_08ebb1dc8cea2d956bd224e1ce2a3699f9026256adde55720e745d09777d248c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed10cc8af9524a0a4c1522445ff43d855b3e085d27524bea32a64a13a3f46df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed10cc8af9524a0a4c1522445ff43d855b3e085d27524bea32a64a13a3f46df0->enter($__internal_ed10cc8af9524a0a4c1522445ff43d855b3e085d27524bea32a64a13a3f46df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4f6dc89bbe0203e5ee5467abf2833a16729093ff337886c190131c6414fafd03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6dc89bbe0203e5ee5467abf2833a16729093ff337886c190131c6414fafd03->enter($__internal_4f6dc89bbe0203e5ee5467abf2833a16729093ff337886c190131c6414fafd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4f6dc89bbe0203e5ee5467abf2833a16729093ff337886c190131c6414fafd03->leave($__internal_4f6dc89bbe0203e5ee5467abf2833a16729093ff337886c190131c6414fafd03_prof);

        
        $__internal_ed10cc8af9524a0a4c1522445ff43d855b3e085d27524bea32a64a13a3f46df0->leave($__internal_ed10cc8af9524a0a4c1522445ff43d855b3e085d27524bea32a64a13a3f46df0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7cb658894abd8a6d4cecd0348256f699882851a75aed25b900db4f1afe425838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cb658894abd8a6d4cecd0348256f699882851a75aed25b900db4f1afe425838->enter($__internal_7cb658894abd8a6d4cecd0348256f699882851a75aed25b900db4f1afe425838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_783182ee664b2bde34d900dfbe141d40ee3fdf0087b0759d872fd49d66467a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_783182ee664b2bde34d900dfbe141d40ee3fdf0087b0759d872fd49d66467a71->enter($__internal_783182ee664b2bde34d900dfbe141d40ee3fdf0087b0759d872fd49d66467a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_783182ee664b2bde34d900dfbe141d40ee3fdf0087b0759d872fd49d66467a71->leave($__internal_783182ee664b2bde34d900dfbe141d40ee3fdf0087b0759d872fd49d66467a71_prof);

        
        $__internal_7cb658894abd8a6d4cecd0348256f699882851a75aed25b900db4f1afe425838->leave($__internal_7cb658894abd8a6d4cecd0348256f699882851a75aed25b900db4f1afe425838_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9707b980f4f28087062017edfbbde63ae56558d1b282d697af223dab31c1e920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9707b980f4f28087062017edfbbde63ae56558d1b282d697af223dab31c1e920->enter($__internal_9707b980f4f28087062017edfbbde63ae56558d1b282d697af223dab31c1e920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3179a9741182d218aae5df9a60b30dcb4f694a80d8d1e422782dff802b247e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3179a9741182d218aae5df9a60b30dcb4f694a80d8d1e422782dff802b247e3e->enter($__internal_3179a9741182d218aae5df9a60b30dcb4f694a80d8d1e422782dff802b247e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3179a9741182d218aae5df9a60b30dcb4f694a80d8d1e422782dff802b247e3e->leave($__internal_3179a9741182d218aae5df9a60b30dcb4f694a80d8d1e422782dff802b247e3e_prof);

        
        $__internal_9707b980f4f28087062017edfbbde63ae56558d1b282d697af223dab31c1e920->leave($__internal_9707b980f4f28087062017edfbbde63ae56558d1b282d697af223dab31c1e920_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
