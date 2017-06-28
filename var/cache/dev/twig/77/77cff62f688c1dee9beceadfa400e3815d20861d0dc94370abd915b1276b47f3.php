<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6f5d6e3bdd243dc8018cde0182edce2eb9b8c3e415789aa7c74d8ce8ff2f8d6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_380f7cb2d7181d195c64803d257715bedae47cd996ada303d88b52f766af5964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_380f7cb2d7181d195c64803d257715bedae47cd996ada303d88b52f766af5964->enter($__internal_380f7cb2d7181d195c64803d257715bedae47cd996ada303d88b52f766af5964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5ece8a9d0515df2e1dcce2255883db80a2e32ecfeb4d8470ed7465cb94f65cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ece8a9d0515df2e1dcce2255883db80a2e32ecfeb4d8470ed7465cb94f65cc6->enter($__internal_5ece8a9d0515df2e1dcce2255883db80a2e32ecfeb4d8470ed7465cb94f65cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_380f7cb2d7181d195c64803d257715bedae47cd996ada303d88b52f766af5964->leave($__internal_380f7cb2d7181d195c64803d257715bedae47cd996ada303d88b52f766af5964_prof);

        
        $__internal_5ece8a9d0515df2e1dcce2255883db80a2e32ecfeb4d8470ed7465cb94f65cc6->leave($__internal_5ece8a9d0515df2e1dcce2255883db80a2e32ecfeb4d8470ed7465cb94f65cc6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe267b2fd326c6b28cb9f4331153b00f5a8fbaeaf404e851726982b52a736bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe267b2fd326c6b28cb9f4331153b00f5a8fbaeaf404e851726982b52a736bd6->enter($__internal_fe267b2fd326c6b28cb9f4331153b00f5a8fbaeaf404e851726982b52a736bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ea88f1fdec983c473117cab5d51472daf316b6dd406b2aea7fd4b136337def44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea88f1fdec983c473117cab5d51472daf316b6dd406b2aea7fd4b136337def44->enter($__internal_ea88f1fdec983c473117cab5d51472daf316b6dd406b2aea7fd4b136337def44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ea88f1fdec983c473117cab5d51472daf316b6dd406b2aea7fd4b136337def44->leave($__internal_ea88f1fdec983c473117cab5d51472daf316b6dd406b2aea7fd4b136337def44_prof);

        
        $__internal_fe267b2fd326c6b28cb9f4331153b00f5a8fbaeaf404e851726982b52a736bd6->leave($__internal_fe267b2fd326c6b28cb9f4331153b00f5a8fbaeaf404e851726982b52a736bd6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46a5482f443b7f801311d5b423ba6543084f41cb39ce8a7ec223dc169129cbc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a5482f443b7f801311d5b423ba6543084f41cb39ce8a7ec223dc169129cbc7->enter($__internal_46a5482f443b7f801311d5b423ba6543084f41cb39ce8a7ec223dc169129cbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5db3c1a7e7da129dc2cc8c888e293b81a19efa0db763d1742a3e538200a9e288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db3c1a7e7da129dc2cc8c888e293b81a19efa0db763d1742a3e538200a9e288->enter($__internal_5db3c1a7e7da129dc2cc8c888e293b81a19efa0db763d1742a3e538200a9e288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5db3c1a7e7da129dc2cc8c888e293b81a19efa0db763d1742a3e538200a9e288->leave($__internal_5db3c1a7e7da129dc2cc8c888e293b81a19efa0db763d1742a3e538200a9e288_prof);

        
        $__internal_46a5482f443b7f801311d5b423ba6543084f41cb39ce8a7ec223dc169129cbc7->leave($__internal_46a5482f443b7f801311d5b423ba6543084f41cb39ce8a7ec223dc169129cbc7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3362fe95b1e7bffe40b6746125d5cfcb07d3bf61489f29c71d8b7e3a4a5e1c5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3362fe95b1e7bffe40b6746125d5cfcb07d3bf61489f29c71d8b7e3a4a5e1c5b->enter($__internal_3362fe95b1e7bffe40b6746125d5cfcb07d3bf61489f29c71d8b7e3a4a5e1c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0b4b132dd04466716c80754e91bf06c7d18711a39d1006e63f84992cd9896e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4b132dd04466716c80754e91bf06c7d18711a39d1006e63f84992cd9896e73->enter($__internal_0b4b132dd04466716c80754e91bf06c7d18711a39d1006e63f84992cd9896e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0b4b132dd04466716c80754e91bf06c7d18711a39d1006e63f84992cd9896e73->leave($__internal_0b4b132dd04466716c80754e91bf06c7d18711a39d1006e63f84992cd9896e73_prof);

        
        $__internal_3362fe95b1e7bffe40b6746125d5cfcb07d3bf61489f29c71d8b7e3a4a5e1c5b->leave($__internal_3362fe95b1e7bffe40b6746125d5cfcb07d3bf61489f29c71d8b7e3a4a5e1c5b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
