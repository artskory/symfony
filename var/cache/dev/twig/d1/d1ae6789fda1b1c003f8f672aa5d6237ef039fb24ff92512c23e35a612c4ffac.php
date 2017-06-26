<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d566d4424cffdf0f198ad16fd9510ee4a4d2955a242434d0d1c431ce3368a297 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_913679325d860c027b91ee43fae0648606dca00d0d7e829d7662f87571dd8ada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913679325d860c027b91ee43fae0648606dca00d0d7e829d7662f87571dd8ada->enter($__internal_913679325d860c027b91ee43fae0648606dca00d0d7e829d7662f87571dd8ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_b7b3e54a98bdd2c5b4a4c5d3576900124b6951532008088696424df3bd94e764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b3e54a98bdd2c5b4a4c5d3576900124b6951532008088696424df3bd94e764->enter($__internal_b7b3e54a98bdd2c5b4a4c5d3576900124b6951532008088696424df3bd94e764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_913679325d860c027b91ee43fae0648606dca00d0d7e829d7662f87571dd8ada->leave($__internal_913679325d860c027b91ee43fae0648606dca00d0d7e829d7662f87571dd8ada_prof);

        
        $__internal_b7b3e54a98bdd2c5b4a4c5d3576900124b6951532008088696424df3bd94e764->leave($__internal_b7b3e54a98bdd2c5b4a4c5d3576900124b6951532008088696424df3bd94e764_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1333d84af2da4169d835adc4fc120fd9d997b514f053b0deccdd6e892da7c2e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1333d84af2da4169d835adc4fc120fd9d997b514f053b0deccdd6e892da7c2e6->enter($__internal_1333d84af2da4169d835adc4fc120fd9d997b514f053b0deccdd6e892da7c2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c72a79235322a221bf7c05fcba2d53b89e2e38847793e0749b432d25d92f2eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72a79235322a221bf7c05fcba2d53b89e2e38847793e0749b432d25d92f2eee->enter($__internal_c72a79235322a221bf7c05fcba2d53b89e2e38847793e0749b432d25d92f2eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c72a79235322a221bf7c05fcba2d53b89e2e38847793e0749b432d25d92f2eee->leave($__internal_c72a79235322a221bf7c05fcba2d53b89e2e38847793e0749b432d25d92f2eee_prof);

        
        $__internal_1333d84af2da4169d835adc4fc120fd9d997b514f053b0deccdd6e892da7c2e6->leave($__internal_1333d84af2da4169d835adc4fc120fd9d997b514f053b0deccdd6e892da7c2e6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4dcc1b708f38f71c18d39c547f059be3f978adea53467ed70ac12131b79ef09b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dcc1b708f38f71c18d39c547f059be3f978adea53467ed70ac12131b79ef09b->enter($__internal_4dcc1b708f38f71c18d39c547f059be3f978adea53467ed70ac12131b79ef09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3e7d6a4a0975b668fdd90d53a2e3306378f24edd11a05df2af022568fa1069f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7d6a4a0975b668fdd90d53a2e3306378f24edd11a05df2af022568fa1069f5->enter($__internal_3e7d6a4a0975b668fdd90d53a2e3306378f24edd11a05df2af022568fa1069f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3e7d6a4a0975b668fdd90d53a2e3306378f24edd11a05df2af022568fa1069f5->leave($__internal_3e7d6a4a0975b668fdd90d53a2e3306378f24edd11a05df2af022568fa1069f5_prof);

        
        $__internal_4dcc1b708f38f71c18d39c547f059be3f978adea53467ed70ac12131b79ef09b->leave($__internal_4dcc1b708f38f71c18d39c547f059be3f978adea53467ed70ac12131b79ef09b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3f7074b51ae33ea7e899707d4df74cf81ecf8a22271e13e30be1ec75d193b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f7074b51ae33ea7e899707d4df74cf81ecf8a22271e13e30be1ec75d193b4b->enter($__internal_c3f7074b51ae33ea7e899707d4df74cf81ecf8a22271e13e30be1ec75d193b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b39aab10e4bf55c4a8633cc658174ce0e19e3dd9ac4cf3a0d2de2455e6c31e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39aab10e4bf55c4a8633cc658174ce0e19e3dd9ac4cf3a0d2de2455e6c31e10->enter($__internal_b39aab10e4bf55c4a8633cc658174ce0e19e3dd9ac4cf3a0d2de2455e6c31e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b39aab10e4bf55c4a8633cc658174ce0e19e3dd9ac4cf3a0d2de2455e6c31e10->leave($__internal_b39aab10e4bf55c4a8633cc658174ce0e19e3dd9ac4cf3a0d2de2455e6c31e10_prof);

        
        $__internal_c3f7074b51ae33ea7e899707d4df74cf81ecf8a22271e13e30be1ec75d193b4b->leave($__internal_c3f7074b51ae33ea7e899707d4df74cf81ecf8a22271e13e30be1ec75d193b4b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
