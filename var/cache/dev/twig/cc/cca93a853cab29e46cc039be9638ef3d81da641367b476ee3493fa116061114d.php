<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_de5a00a5967659d17792277c6243f44def6b08dc3152d5cda74e1a7ee4038cff extends Twig_Template
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
        $__internal_e545e7f790f45b1cbf76ff7a26ebd0ba52fb04fb6eda3958ee5c8dda0a6649ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e545e7f790f45b1cbf76ff7a26ebd0ba52fb04fb6eda3958ee5c8dda0a6649ca->enter($__internal_e545e7f790f45b1cbf76ff7a26ebd0ba52fb04fb6eda3958ee5c8dda0a6649ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_149e06ca1c12ea795be7ffb9fec6c235896b90e30a04a6b47608cd9a121a5895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149e06ca1c12ea795be7ffb9fec6c235896b90e30a04a6b47608cd9a121a5895->enter($__internal_149e06ca1c12ea795be7ffb9fec6c235896b90e30a04a6b47608cd9a121a5895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e545e7f790f45b1cbf76ff7a26ebd0ba52fb04fb6eda3958ee5c8dda0a6649ca->leave($__internal_e545e7f790f45b1cbf76ff7a26ebd0ba52fb04fb6eda3958ee5c8dda0a6649ca_prof);

        
        $__internal_149e06ca1c12ea795be7ffb9fec6c235896b90e30a04a6b47608cd9a121a5895->leave($__internal_149e06ca1c12ea795be7ffb9fec6c235896b90e30a04a6b47608cd9a121a5895_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c2f4c47ac3c837fc36a9beda0d819d59794df9cfc80f89e31e7d85708fa959c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f4c47ac3c837fc36a9beda0d819d59794df9cfc80f89e31e7d85708fa959c7->enter($__internal_c2f4c47ac3c837fc36a9beda0d819d59794df9cfc80f89e31e7d85708fa959c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9509185cba0be9b663c330953b9bb42e0a4db1677080e82b93db3241f66d0ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9509185cba0be9b663c330953b9bb42e0a4db1677080e82b93db3241f66d0ae8->enter($__internal_9509185cba0be9b663c330953b9bb42e0a4db1677080e82b93db3241f66d0ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9509185cba0be9b663c330953b9bb42e0a4db1677080e82b93db3241f66d0ae8->leave($__internal_9509185cba0be9b663c330953b9bb42e0a4db1677080e82b93db3241f66d0ae8_prof);

        
        $__internal_c2f4c47ac3c837fc36a9beda0d819d59794df9cfc80f89e31e7d85708fa959c7->leave($__internal_c2f4c47ac3c837fc36a9beda0d819d59794df9cfc80f89e31e7d85708fa959c7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a685d12ddb24e956d867672663666a96995b959413cc5e2cea0a0fba0ae91bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a685d12ddb24e956d867672663666a96995b959413cc5e2cea0a0fba0ae91bd7->enter($__internal_a685d12ddb24e956d867672663666a96995b959413cc5e2cea0a0fba0ae91bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8a89e4a0c77369092df6d07ccfc29d9c01eaedba2dc6332c7f28eee3ac162134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a89e4a0c77369092df6d07ccfc29d9c01eaedba2dc6332c7f28eee3ac162134->enter($__internal_8a89e4a0c77369092df6d07ccfc29d9c01eaedba2dc6332c7f28eee3ac162134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a89e4a0c77369092df6d07ccfc29d9c01eaedba2dc6332c7f28eee3ac162134->leave($__internal_8a89e4a0c77369092df6d07ccfc29d9c01eaedba2dc6332c7f28eee3ac162134_prof);

        
        $__internal_a685d12ddb24e956d867672663666a96995b959413cc5e2cea0a0fba0ae91bd7->leave($__internal_a685d12ddb24e956d867672663666a96995b959413cc5e2cea0a0fba0ae91bd7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f9a3fa12a885857f23a8c85998c3bd3bde72caa9026990854971208592d7fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f9a3fa12a885857f23a8c85998c3bd3bde72caa9026990854971208592d7fef->enter($__internal_6f9a3fa12a885857f23a8c85998c3bd3bde72caa9026990854971208592d7fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1a38873494222b3525edb85987703e56088cd29722b7356b230ad9f112038f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a38873494222b3525edb85987703e56088cd29722b7356b230ad9f112038f75->enter($__internal_1a38873494222b3525edb85987703e56088cd29722b7356b230ad9f112038f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1a38873494222b3525edb85987703e56088cd29722b7356b230ad9f112038f75->leave($__internal_1a38873494222b3525edb85987703e56088cd29722b7356b230ad9f112038f75_prof);

        
        $__internal_6f9a3fa12a885857f23a8c85998c3bd3bde72caa9026990854971208592d7fef->leave($__internal_6f9a3fa12a885857f23a8c85998c3bd3bde72caa9026990854971208592d7fef_prof);

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
