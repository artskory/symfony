<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_047615c1d1e478498f0e0c746fa73c6b91d1eec4cca26b00beac537a6e5957e8 extends Twig_Template
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
        $__internal_e07a154d6cc11773aa3337e96a74b1e15bee9b9051b148609fc7f9569e4819a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e07a154d6cc11773aa3337e96a74b1e15bee9b9051b148609fc7f9569e4819a2->enter($__internal_e07a154d6cc11773aa3337e96a74b1e15bee9b9051b148609fc7f9569e4819a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_7c41efe73c289794b44a4fa72ea11c9ce631359f5c9809dee534d415ae64bce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c41efe73c289794b44a4fa72ea11c9ce631359f5c9809dee534d415ae64bce7->enter($__internal_7c41efe73c289794b44a4fa72ea11c9ce631359f5c9809dee534d415ae64bce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e07a154d6cc11773aa3337e96a74b1e15bee9b9051b148609fc7f9569e4819a2->leave($__internal_e07a154d6cc11773aa3337e96a74b1e15bee9b9051b148609fc7f9569e4819a2_prof);

        
        $__internal_7c41efe73c289794b44a4fa72ea11c9ce631359f5c9809dee534d415ae64bce7->leave($__internal_7c41efe73c289794b44a4fa72ea11c9ce631359f5c9809dee534d415ae64bce7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dda316f5ee52ddc9d615d69aeedf85286198f8fac4f806579e9dec6b820123d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda316f5ee52ddc9d615d69aeedf85286198f8fac4f806579e9dec6b820123d3->enter($__internal_dda316f5ee52ddc9d615d69aeedf85286198f8fac4f806579e9dec6b820123d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b40ccf2de086dab8cf01a2180f221a0d9856a66f6cbd228d7e74bf93a7331608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40ccf2de086dab8cf01a2180f221a0d9856a66f6cbd228d7e74bf93a7331608->enter($__internal_b40ccf2de086dab8cf01a2180f221a0d9856a66f6cbd228d7e74bf93a7331608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b40ccf2de086dab8cf01a2180f221a0d9856a66f6cbd228d7e74bf93a7331608->leave($__internal_b40ccf2de086dab8cf01a2180f221a0d9856a66f6cbd228d7e74bf93a7331608_prof);

        
        $__internal_dda316f5ee52ddc9d615d69aeedf85286198f8fac4f806579e9dec6b820123d3->leave($__internal_dda316f5ee52ddc9d615d69aeedf85286198f8fac4f806579e9dec6b820123d3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db03f5591c956b1d3cfeee286647bbf87675e6c4598fca614a9841364d0922c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db03f5591c956b1d3cfeee286647bbf87675e6c4598fca614a9841364d0922c8->enter($__internal_db03f5591c956b1d3cfeee286647bbf87675e6c4598fca614a9841364d0922c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7463781517dedf0778207b9e8551837e27b5f30356427d6bb5b6c8926e1ae8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7463781517dedf0778207b9e8551837e27b5f30356427d6bb5b6c8926e1ae8b5->enter($__internal_7463781517dedf0778207b9e8551837e27b5f30356427d6bb5b6c8926e1ae8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7463781517dedf0778207b9e8551837e27b5f30356427d6bb5b6c8926e1ae8b5->leave($__internal_7463781517dedf0778207b9e8551837e27b5f30356427d6bb5b6c8926e1ae8b5_prof);

        
        $__internal_db03f5591c956b1d3cfeee286647bbf87675e6c4598fca614a9841364d0922c8->leave($__internal_db03f5591c956b1d3cfeee286647bbf87675e6c4598fca614a9841364d0922c8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c32d41fd279aad4d4d8ee9a60dc270352b7ce6fd98d1b33b7fc12868048651e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32d41fd279aad4d4d8ee9a60dc270352b7ce6fd98d1b33b7fc12868048651e7->enter($__internal_c32d41fd279aad4d4d8ee9a60dc270352b7ce6fd98d1b33b7fc12868048651e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e937dc4a00dda6b6b09171110010ebddd81be9d6fec2dc1b362c9c0638d14d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e937dc4a00dda6b6b09171110010ebddd81be9d6fec2dc1b362c9c0638d14d54->enter($__internal_e937dc4a00dda6b6b09171110010ebddd81be9d6fec2dc1b362c9c0638d14d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e937dc4a00dda6b6b09171110010ebddd81be9d6fec2dc1b362c9c0638d14d54->leave($__internal_e937dc4a00dda6b6b09171110010ebddd81be9d6fec2dc1b362c9c0638d14d54_prof);

        
        $__internal_c32d41fd279aad4d4d8ee9a60dc270352b7ce6fd98d1b33b7fc12868048651e7->leave($__internal_c32d41fd279aad4d4d8ee9a60dc270352b7ce6fd98d1b33b7fc12868048651e7_prof);

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
