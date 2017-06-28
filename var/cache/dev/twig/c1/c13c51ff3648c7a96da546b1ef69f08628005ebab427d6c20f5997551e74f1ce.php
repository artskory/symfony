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
        $__internal_f1dd6a41e518eba60730a0b3ee0deea805f75662f13192e36b9419f1a93e3a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1dd6a41e518eba60730a0b3ee0deea805f75662f13192e36b9419f1a93e3a4e->enter($__internal_f1dd6a41e518eba60730a0b3ee0deea805f75662f13192e36b9419f1a93e3a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e0935383c513fda50bebf55a85deb496155707f69aee6167732d5a423f920081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0935383c513fda50bebf55a85deb496155707f69aee6167732d5a423f920081->enter($__internal_e0935383c513fda50bebf55a85deb496155707f69aee6167732d5a423f920081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1dd6a41e518eba60730a0b3ee0deea805f75662f13192e36b9419f1a93e3a4e->leave($__internal_f1dd6a41e518eba60730a0b3ee0deea805f75662f13192e36b9419f1a93e3a4e_prof);

        
        $__internal_e0935383c513fda50bebf55a85deb496155707f69aee6167732d5a423f920081->leave($__internal_e0935383c513fda50bebf55a85deb496155707f69aee6167732d5a423f920081_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8156dd9cbd8da710c2653d7044018261712ce0a5acaaa26e75bc55cb55706633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8156dd9cbd8da710c2653d7044018261712ce0a5acaaa26e75bc55cb55706633->enter($__internal_8156dd9cbd8da710c2653d7044018261712ce0a5acaaa26e75bc55cb55706633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_95ca6244db3ad973dead2f764b7af6dbffbadb5048231aa27e1bd80139f0a4ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ca6244db3ad973dead2f764b7af6dbffbadb5048231aa27e1bd80139f0a4ab->enter($__internal_95ca6244db3ad973dead2f764b7af6dbffbadb5048231aa27e1bd80139f0a4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_95ca6244db3ad973dead2f764b7af6dbffbadb5048231aa27e1bd80139f0a4ab->leave($__internal_95ca6244db3ad973dead2f764b7af6dbffbadb5048231aa27e1bd80139f0a4ab_prof);

        
        $__internal_8156dd9cbd8da710c2653d7044018261712ce0a5acaaa26e75bc55cb55706633->leave($__internal_8156dd9cbd8da710c2653d7044018261712ce0a5acaaa26e75bc55cb55706633_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2bc5c04f0c801021e9105c170180fe179017ce7d3d7747f497fe7dd4e9c51ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc5c04f0c801021e9105c170180fe179017ce7d3d7747f497fe7dd4e9c51ef5->enter($__internal_2bc5c04f0c801021e9105c170180fe179017ce7d3d7747f497fe7dd4e9c51ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ee6bc91715b5e269bec288d2717b921ce3ee403a05487a1107972df686b5dd1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6bc91715b5e269bec288d2717b921ce3ee403a05487a1107972df686b5dd1b->enter($__internal_ee6bc91715b5e269bec288d2717b921ce3ee403a05487a1107972df686b5dd1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ee6bc91715b5e269bec288d2717b921ce3ee403a05487a1107972df686b5dd1b->leave($__internal_ee6bc91715b5e269bec288d2717b921ce3ee403a05487a1107972df686b5dd1b_prof);

        
        $__internal_2bc5c04f0c801021e9105c170180fe179017ce7d3d7747f497fe7dd4e9c51ef5->leave($__internal_2bc5c04f0c801021e9105c170180fe179017ce7d3d7747f497fe7dd4e9c51ef5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e97718268d28512225e2ceb5dcf5e7a08c2495823ab794382608d0c0e0f4a143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e97718268d28512225e2ceb5dcf5e7a08c2495823ab794382608d0c0e0f4a143->enter($__internal_e97718268d28512225e2ceb5dcf5e7a08c2495823ab794382608d0c0e0f4a143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f53525493771d27a90aff15896277a6f25af4a883f7e5ee0e4251729dbb6b599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53525493771d27a90aff15896277a6f25af4a883f7e5ee0e4251729dbb6b599->enter($__internal_f53525493771d27a90aff15896277a6f25af4a883f7e5ee0e4251729dbb6b599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f53525493771d27a90aff15896277a6f25af4a883f7e5ee0e4251729dbb6b599->leave($__internal_f53525493771d27a90aff15896277a6f25af4a883f7e5ee0e4251729dbb6b599_prof);

        
        $__internal_e97718268d28512225e2ceb5dcf5e7a08c2495823ab794382608d0c0e0f4a143->leave($__internal_e97718268d28512225e2ceb5dcf5e7a08c2495823ab794382608d0c0e0f4a143_prof);

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
