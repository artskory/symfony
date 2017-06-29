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
        $__internal_334e8eb5862c60dac307acb4233f07b46ed5f365a8c857573426143fccbb7294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_334e8eb5862c60dac307acb4233f07b46ed5f365a8c857573426143fccbb7294->enter($__internal_334e8eb5862c60dac307acb4233f07b46ed5f365a8c857573426143fccbb7294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_d5d98f9080f928943928a87c5d83a13b0aff58bd162493bda1781f234c0c9cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d98f9080f928943928a87c5d83a13b0aff58bd162493bda1781f234c0c9cbe->enter($__internal_d5d98f9080f928943928a87c5d83a13b0aff58bd162493bda1781f234c0c9cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_334e8eb5862c60dac307acb4233f07b46ed5f365a8c857573426143fccbb7294->leave($__internal_334e8eb5862c60dac307acb4233f07b46ed5f365a8c857573426143fccbb7294_prof);

        
        $__internal_d5d98f9080f928943928a87c5d83a13b0aff58bd162493bda1781f234c0c9cbe->leave($__internal_d5d98f9080f928943928a87c5d83a13b0aff58bd162493bda1781f234c0c9cbe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f9f51471f7942200eea58b9cb2aea3de031d413fe97cec0c3c5b02c024978ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f9f51471f7942200eea58b9cb2aea3de031d413fe97cec0c3c5b02c024978ad->enter($__internal_5f9f51471f7942200eea58b9cb2aea3de031d413fe97cec0c3c5b02c024978ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2e61f64c250f415b8ffee03923ef7fd495ad92b642f9e8cedb7019ded77ada5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e61f64c250f415b8ffee03923ef7fd495ad92b642f9e8cedb7019ded77ada5e->enter($__internal_2e61f64c250f415b8ffee03923ef7fd495ad92b642f9e8cedb7019ded77ada5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2e61f64c250f415b8ffee03923ef7fd495ad92b642f9e8cedb7019ded77ada5e->leave($__internal_2e61f64c250f415b8ffee03923ef7fd495ad92b642f9e8cedb7019ded77ada5e_prof);

        
        $__internal_5f9f51471f7942200eea58b9cb2aea3de031d413fe97cec0c3c5b02c024978ad->leave($__internal_5f9f51471f7942200eea58b9cb2aea3de031d413fe97cec0c3c5b02c024978ad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c1d8575d08066e29f83134141fc1fc5bf4e5cc845cd162e9b0cedadd05a1cd12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d8575d08066e29f83134141fc1fc5bf4e5cc845cd162e9b0cedadd05a1cd12->enter($__internal_c1d8575d08066e29f83134141fc1fc5bf4e5cc845cd162e9b0cedadd05a1cd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a480a90f8bc0d3286fbf0666b2a98759b9df6c5fac1b261205c08b87c3784681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a480a90f8bc0d3286fbf0666b2a98759b9df6c5fac1b261205c08b87c3784681->enter($__internal_a480a90f8bc0d3286fbf0666b2a98759b9df6c5fac1b261205c08b87c3784681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a480a90f8bc0d3286fbf0666b2a98759b9df6c5fac1b261205c08b87c3784681->leave($__internal_a480a90f8bc0d3286fbf0666b2a98759b9df6c5fac1b261205c08b87c3784681_prof);

        
        $__internal_c1d8575d08066e29f83134141fc1fc5bf4e5cc845cd162e9b0cedadd05a1cd12->leave($__internal_c1d8575d08066e29f83134141fc1fc5bf4e5cc845cd162e9b0cedadd05a1cd12_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6eafd93a6cb90c75ca1e25eeefb53b44526284778fb4b2aa229d2f069632ef9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eafd93a6cb90c75ca1e25eeefb53b44526284778fb4b2aa229d2f069632ef9f->enter($__internal_6eafd93a6cb90c75ca1e25eeefb53b44526284778fb4b2aa229d2f069632ef9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e3b560aa188ed222461a4720f4c4c29c5b8894a538d6c3c6709ee1cf8eaf5eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b560aa188ed222461a4720f4c4c29c5b8894a538d6c3c6709ee1cf8eaf5eef->enter($__internal_e3b560aa188ed222461a4720f4c4c29c5b8894a538d6c3c6709ee1cf8eaf5eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e3b560aa188ed222461a4720f4c4c29c5b8894a538d6c3c6709ee1cf8eaf5eef->leave($__internal_e3b560aa188ed222461a4720f4c4c29c5b8894a538d6c3c6709ee1cf8eaf5eef_prof);

        
        $__internal_6eafd93a6cb90c75ca1e25eeefb53b44526284778fb4b2aa229d2f069632ef9f->leave($__internal_6eafd93a6cb90c75ca1e25eeefb53b44526284778fb4b2aa229d2f069632ef9f_prof);

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
