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
        $__internal_2dea7a347bbd3026810147f8d7839d3f580b9d1c2a13834b08fadb54659533fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dea7a347bbd3026810147f8d7839d3f580b9d1c2a13834b08fadb54659533fb->enter($__internal_2dea7a347bbd3026810147f8d7839d3f580b9d1c2a13834b08fadb54659533fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_9699737920fc514c471b756b79b2a51f314afddfbceacce9a4489bc7c1cc3d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9699737920fc514c471b756b79b2a51f314afddfbceacce9a4489bc7c1cc3d6f->enter($__internal_9699737920fc514c471b756b79b2a51f314afddfbceacce9a4489bc7c1cc3d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dea7a347bbd3026810147f8d7839d3f580b9d1c2a13834b08fadb54659533fb->leave($__internal_2dea7a347bbd3026810147f8d7839d3f580b9d1c2a13834b08fadb54659533fb_prof);

        
        $__internal_9699737920fc514c471b756b79b2a51f314afddfbceacce9a4489bc7c1cc3d6f->leave($__internal_9699737920fc514c471b756b79b2a51f314afddfbceacce9a4489bc7c1cc3d6f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b515e52f40fdc5847098c50f3295766432bcb36c6f0d173d35f5199a6eb50cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b515e52f40fdc5847098c50f3295766432bcb36c6f0d173d35f5199a6eb50cb->enter($__internal_5b515e52f40fdc5847098c50f3295766432bcb36c6f0d173d35f5199a6eb50cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_72119e2a92082a72024b1dd8e0f6bba51ff7ae6c3390b079497a74f5ebb7153f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72119e2a92082a72024b1dd8e0f6bba51ff7ae6c3390b079497a74f5ebb7153f->enter($__internal_72119e2a92082a72024b1dd8e0f6bba51ff7ae6c3390b079497a74f5ebb7153f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_72119e2a92082a72024b1dd8e0f6bba51ff7ae6c3390b079497a74f5ebb7153f->leave($__internal_72119e2a92082a72024b1dd8e0f6bba51ff7ae6c3390b079497a74f5ebb7153f_prof);

        
        $__internal_5b515e52f40fdc5847098c50f3295766432bcb36c6f0d173d35f5199a6eb50cb->leave($__internal_5b515e52f40fdc5847098c50f3295766432bcb36c6f0d173d35f5199a6eb50cb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2a0393cc19a0c7d4c9d865b74d4b3fe45ae03492d4fe020cfde3d8788acd7ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0393cc19a0c7d4c9d865b74d4b3fe45ae03492d4fe020cfde3d8788acd7ec4->enter($__internal_2a0393cc19a0c7d4c9d865b74d4b3fe45ae03492d4fe020cfde3d8788acd7ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c962bcccd94a26be0b0695e0f5b89c3034d6c7aea79ddbb78c4dacc452d1615e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c962bcccd94a26be0b0695e0f5b89c3034d6c7aea79ddbb78c4dacc452d1615e->enter($__internal_c962bcccd94a26be0b0695e0f5b89c3034d6c7aea79ddbb78c4dacc452d1615e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c962bcccd94a26be0b0695e0f5b89c3034d6c7aea79ddbb78c4dacc452d1615e->leave($__internal_c962bcccd94a26be0b0695e0f5b89c3034d6c7aea79ddbb78c4dacc452d1615e_prof);

        
        $__internal_2a0393cc19a0c7d4c9d865b74d4b3fe45ae03492d4fe020cfde3d8788acd7ec4->leave($__internal_2a0393cc19a0c7d4c9d865b74d4b3fe45ae03492d4fe020cfde3d8788acd7ec4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a1dcb103e5d38b86691ad5ceaab0f61f16cbd3289e2dd9393a8649e6527b18c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a1dcb103e5d38b86691ad5ceaab0f61f16cbd3289e2dd9393a8649e6527b18c->enter($__internal_9a1dcb103e5d38b86691ad5ceaab0f61f16cbd3289e2dd9393a8649e6527b18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5fd59d0e43f6269f8ce32deb854a61038ebeb19066a1db6c1bc2deb3d43ef7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd59d0e43f6269f8ce32deb854a61038ebeb19066a1db6c1bc2deb3d43ef7c7->enter($__internal_5fd59d0e43f6269f8ce32deb854a61038ebeb19066a1db6c1bc2deb3d43ef7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5fd59d0e43f6269f8ce32deb854a61038ebeb19066a1db6c1bc2deb3d43ef7c7->leave($__internal_5fd59d0e43f6269f8ce32deb854a61038ebeb19066a1db6c1bc2deb3d43ef7c7_prof);

        
        $__internal_9a1dcb103e5d38b86691ad5ceaab0f61f16cbd3289e2dd9393a8649e6527b18c->leave($__internal_9a1dcb103e5d38b86691ad5ceaab0f61f16cbd3289e2dd9393a8649e6527b18c_prof);

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
