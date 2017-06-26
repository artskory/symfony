<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d6a6a31272debe58f423308ac57c0bb350e83169423a3b3c61ae04de197e4346 extends Twig_Template
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
        $__internal_52227d5b0714397fdb2127e75e0437c9ff80c7fc66232ed9e6d2423b7daed6b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52227d5b0714397fdb2127e75e0437c9ff80c7fc66232ed9e6d2423b7daed6b8->enter($__internal_52227d5b0714397fdb2127e75e0437c9ff80c7fc66232ed9e6d2423b7daed6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_52ddf27fec75bce143322f8895095ea1a14e44cd9fe6a6b2ce56b6cb3776cbec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ddf27fec75bce143322f8895095ea1a14e44cd9fe6a6b2ce56b6cb3776cbec->enter($__internal_52ddf27fec75bce143322f8895095ea1a14e44cd9fe6a6b2ce56b6cb3776cbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52227d5b0714397fdb2127e75e0437c9ff80c7fc66232ed9e6d2423b7daed6b8->leave($__internal_52227d5b0714397fdb2127e75e0437c9ff80c7fc66232ed9e6d2423b7daed6b8_prof);

        
        $__internal_52ddf27fec75bce143322f8895095ea1a14e44cd9fe6a6b2ce56b6cb3776cbec->leave($__internal_52ddf27fec75bce143322f8895095ea1a14e44cd9fe6a6b2ce56b6cb3776cbec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c97a51f4c6df93b5120365d765a60b14f4fb739072e5e51819806f8e2b80e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c97a51f4c6df93b5120365d765a60b14f4fb739072e5e51819806f8e2b80e30->enter($__internal_5c97a51f4c6df93b5120365d765a60b14f4fb739072e5e51819806f8e2b80e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_008339520269c7b2c47df727c1a3da67e31bd431b889a036e0f373f04494c381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008339520269c7b2c47df727c1a3da67e31bd431b889a036e0f373f04494c381->enter($__internal_008339520269c7b2c47df727c1a3da67e31bd431b889a036e0f373f04494c381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_008339520269c7b2c47df727c1a3da67e31bd431b889a036e0f373f04494c381->leave($__internal_008339520269c7b2c47df727c1a3da67e31bd431b889a036e0f373f04494c381_prof);

        
        $__internal_5c97a51f4c6df93b5120365d765a60b14f4fb739072e5e51819806f8e2b80e30->leave($__internal_5c97a51f4c6df93b5120365d765a60b14f4fb739072e5e51819806f8e2b80e30_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8da238fa7d4ebff7bfbe595f43d2466b407c6945697068136978a7368baac2a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da238fa7d4ebff7bfbe595f43d2466b407c6945697068136978a7368baac2a4->enter($__internal_8da238fa7d4ebff7bfbe595f43d2466b407c6945697068136978a7368baac2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dcd9abbf029ad8ab8d30f443feee4de897b4b103640b6f7c1ee3b3faecaa1039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd9abbf029ad8ab8d30f443feee4de897b4b103640b6f7c1ee3b3faecaa1039->enter($__internal_dcd9abbf029ad8ab8d30f443feee4de897b4b103640b6f7c1ee3b3faecaa1039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_dcd9abbf029ad8ab8d30f443feee4de897b4b103640b6f7c1ee3b3faecaa1039->leave($__internal_dcd9abbf029ad8ab8d30f443feee4de897b4b103640b6f7c1ee3b3faecaa1039_prof);

        
        $__internal_8da238fa7d4ebff7bfbe595f43d2466b407c6945697068136978a7368baac2a4->leave($__internal_8da238fa7d4ebff7bfbe595f43d2466b407c6945697068136978a7368baac2a4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_563b83a4f899b1370f0b74ef78bc9279a05b82e954476463b84ddb34f41f4f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_563b83a4f899b1370f0b74ef78bc9279a05b82e954476463b84ddb34f41f4f56->enter($__internal_563b83a4f899b1370f0b74ef78bc9279a05b82e954476463b84ddb34f41f4f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_274ec482772ad598949c6f7c8cebb15baa8d27e291327d74a621eade651ff53f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274ec482772ad598949c6f7c8cebb15baa8d27e291327d74a621eade651ff53f->enter($__internal_274ec482772ad598949c6f7c8cebb15baa8d27e291327d74a621eade651ff53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_274ec482772ad598949c6f7c8cebb15baa8d27e291327d74a621eade651ff53f->leave($__internal_274ec482772ad598949c6f7c8cebb15baa8d27e291327d74a621eade651ff53f_prof);

        
        $__internal_563b83a4f899b1370f0b74ef78bc9279a05b82e954476463b84ddb34f41f4f56->leave($__internal_563b83a4f899b1370f0b74ef78bc9279a05b82e954476463b84ddb34f41f4f56_prof);

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
