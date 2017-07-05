<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_315f5542bf8153cb155063968f473a4c4daffffb58ec973e4d0ca5ff0ff7ce2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_1dc4ece7c88e00d03d21d97b24f75a1a188c3d99b013ea6e3db6f17a8d849201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dc4ece7c88e00d03d21d97b24f75a1a188c3d99b013ea6e3db6f17a8d849201->enter($__internal_1dc4ece7c88e00d03d21d97b24f75a1a188c3d99b013ea6e3db6f17a8d849201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_35b325a71ef3a85634f12cbbd8ad961808f5993c677d3049607ebe85c50275aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b325a71ef3a85634f12cbbd8ad961808f5993c677d3049607ebe85c50275aa->enter($__internal_35b325a71ef3a85634f12cbbd8ad961808f5993c677d3049607ebe85c50275aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dc4ece7c88e00d03d21d97b24f75a1a188c3d99b013ea6e3db6f17a8d849201->leave($__internal_1dc4ece7c88e00d03d21d97b24f75a1a188c3d99b013ea6e3db6f17a8d849201_prof);

        
        $__internal_35b325a71ef3a85634f12cbbd8ad961808f5993c677d3049607ebe85c50275aa->leave($__internal_35b325a71ef3a85634f12cbbd8ad961808f5993c677d3049607ebe85c50275aa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fbcef8f5fd939d7715125d68a633810dd6a667d492fa3c5d48d255bf5793eb9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbcef8f5fd939d7715125d68a633810dd6a667d492fa3c5d48d255bf5793eb9c->enter($__internal_fbcef8f5fd939d7715125d68a633810dd6a667d492fa3c5d48d255bf5793eb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e88c1205cf37197781558bc46bf46edc7a03a0d92faaf1ea54efe72504650246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88c1205cf37197781558bc46bf46edc7a03a0d92faaf1ea54efe72504650246->enter($__internal_e88c1205cf37197781558bc46bf46edc7a03a0d92faaf1ea54efe72504650246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e88c1205cf37197781558bc46bf46edc7a03a0d92faaf1ea54efe72504650246->leave($__internal_e88c1205cf37197781558bc46bf46edc7a03a0d92faaf1ea54efe72504650246_prof);

        
        $__internal_fbcef8f5fd939d7715125d68a633810dd6a667d492fa3c5d48d255bf5793eb9c->leave($__internal_fbcef8f5fd939d7715125d68a633810dd6a667d492fa3c5d48d255bf5793eb9c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_228757312f768ec6115baa8f58db81cbd5707cc9f144062ee92f9c794243acfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_228757312f768ec6115baa8f58db81cbd5707cc9f144062ee92f9c794243acfd->enter($__internal_228757312f768ec6115baa8f58db81cbd5707cc9f144062ee92f9c794243acfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3735dfb179237b0e96fd6080ab77799fed239c38c888a59e7cc102ce29822999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3735dfb179237b0e96fd6080ab77799fed239c38c888a59e7cc102ce29822999->enter($__internal_3735dfb179237b0e96fd6080ab77799fed239c38c888a59e7cc102ce29822999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3735dfb179237b0e96fd6080ab77799fed239c38c888a59e7cc102ce29822999->leave($__internal_3735dfb179237b0e96fd6080ab77799fed239c38c888a59e7cc102ce29822999_prof);

        
        $__internal_228757312f768ec6115baa8f58db81cbd5707cc9f144062ee92f9c794243acfd->leave($__internal_228757312f768ec6115baa8f58db81cbd5707cc9f144062ee92f9c794243acfd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cdbcaf22e0252eb2edce8cd93262a9e657fa50b7111933d936eafb9faf6f7d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdbcaf22e0252eb2edce8cd93262a9e657fa50b7111933d936eafb9faf6f7d26->enter($__internal_cdbcaf22e0252eb2edce8cd93262a9e657fa50b7111933d936eafb9faf6f7d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6d8fb8cb5c41ffc0b6218932869a55979d644f87c3578f40b1a38917a6a8c7bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8fb8cb5c41ffc0b6218932869a55979d644f87c3578f40b1a38917a6a8c7bb->enter($__internal_6d8fb8cb5c41ffc0b6218932869a55979d644f87c3578f40b1a38917a6a8c7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6d8fb8cb5c41ffc0b6218932869a55979d644f87c3578f40b1a38917a6a8c7bb->leave($__internal_6d8fb8cb5c41ffc0b6218932869a55979d644f87c3578f40b1a38917a6a8c7bb_prof);

        
        $__internal_cdbcaf22e0252eb2edce8cd93262a9e657fa50b7111933d936eafb9faf6f7d26->leave($__internal_cdbcaf22e0252eb2edce8cd93262a9e657fa50b7111933d936eafb9faf6f7d26_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
