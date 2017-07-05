<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_2ef13b445b6e7d5e8304d8f5f271503c6956fc235937d0bd895cafc38ed783b2 extends Twig_Template
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
        $__internal_541d01512b7b601d5aaea31591f8187ae74e8ec0e96c53ca00b86d483b877139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541d01512b7b601d5aaea31591f8187ae74e8ec0e96c53ca00b86d483b877139->enter($__internal_541d01512b7b601d5aaea31591f8187ae74e8ec0e96c53ca00b86d483b877139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_de9774187cdde264e2d19bf23ebbdd55a96cc0005a52cd3216a06f681117aa99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9774187cdde264e2d19bf23ebbdd55a96cc0005a52cd3216a06f681117aa99->enter($__internal_de9774187cdde264e2d19bf23ebbdd55a96cc0005a52cd3216a06f681117aa99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_541d01512b7b601d5aaea31591f8187ae74e8ec0e96c53ca00b86d483b877139->leave($__internal_541d01512b7b601d5aaea31591f8187ae74e8ec0e96c53ca00b86d483b877139_prof);

        
        $__internal_de9774187cdde264e2d19bf23ebbdd55a96cc0005a52cd3216a06f681117aa99->leave($__internal_de9774187cdde264e2d19bf23ebbdd55a96cc0005a52cd3216a06f681117aa99_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_04c80984b87325494c038b8fdf3851c185dba940737490377a275edf589ad1bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c80984b87325494c038b8fdf3851c185dba940737490377a275edf589ad1bd->enter($__internal_04c80984b87325494c038b8fdf3851c185dba940737490377a275edf589ad1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5e0f470cfef43693f71f614dcb29db163ccdd1dec30d17a75e43e64a70cfd63d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0f470cfef43693f71f614dcb29db163ccdd1dec30d17a75e43e64a70cfd63d->enter($__internal_5e0f470cfef43693f71f614dcb29db163ccdd1dec30d17a75e43e64a70cfd63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5e0f470cfef43693f71f614dcb29db163ccdd1dec30d17a75e43e64a70cfd63d->leave($__internal_5e0f470cfef43693f71f614dcb29db163ccdd1dec30d17a75e43e64a70cfd63d_prof);

        
        $__internal_04c80984b87325494c038b8fdf3851c185dba940737490377a275edf589ad1bd->leave($__internal_04c80984b87325494c038b8fdf3851c185dba940737490377a275edf589ad1bd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d67020d46d4aa6759178e24b15b52c908921cb95890adc5fbe5eaff179962c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d67020d46d4aa6759178e24b15b52c908921cb95890adc5fbe5eaff179962c3b->enter($__internal_d67020d46d4aa6759178e24b15b52c908921cb95890adc5fbe5eaff179962c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_64dd9f97fc244880e3b8177fc75d4a6cf8d74f8f329cf6577ac89b19df6f9228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64dd9f97fc244880e3b8177fc75d4a6cf8d74f8f329cf6577ac89b19df6f9228->enter($__internal_64dd9f97fc244880e3b8177fc75d4a6cf8d74f8f329cf6577ac89b19df6f9228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_64dd9f97fc244880e3b8177fc75d4a6cf8d74f8f329cf6577ac89b19df6f9228->leave($__internal_64dd9f97fc244880e3b8177fc75d4a6cf8d74f8f329cf6577ac89b19df6f9228_prof);

        
        $__internal_d67020d46d4aa6759178e24b15b52c908921cb95890adc5fbe5eaff179962c3b->leave($__internal_d67020d46d4aa6759178e24b15b52c908921cb95890adc5fbe5eaff179962c3b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47f1e0b612d6fa4e7a4e0dc18b104aaa54f9c9db880041bcca0fca8e83f8834c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f1e0b612d6fa4e7a4e0dc18b104aaa54f9c9db880041bcca0fca8e83f8834c->enter($__internal_47f1e0b612d6fa4e7a4e0dc18b104aaa54f9c9db880041bcca0fca8e83f8834c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_90d191d8d7c787830ab4b1111c8ef7bddc100a20bda8999e2922a986ef58b84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d191d8d7c787830ab4b1111c8ef7bddc100a20bda8999e2922a986ef58b84f->enter($__internal_90d191d8d7c787830ab4b1111c8ef7bddc100a20bda8999e2922a986ef58b84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_90d191d8d7c787830ab4b1111c8ef7bddc100a20bda8999e2922a986ef58b84f->leave($__internal_90d191d8d7c787830ab4b1111c8ef7bddc100a20bda8999e2922a986ef58b84f_prof);

        
        $__internal_47f1e0b612d6fa4e7a4e0dc18b104aaa54f9c9db880041bcca0fca8e83f8834c->leave($__internal_47f1e0b612d6fa4e7a4e0dc18b104aaa54f9c9db880041bcca0fca8e83f8834c_prof);

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
