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
        $__internal_85eb8cd597330d443069b91f89aa57e12d3f031d59c4ec3fb3d768fab22b403d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85eb8cd597330d443069b91f89aa57e12d3f031d59c4ec3fb3d768fab22b403d->enter($__internal_85eb8cd597330d443069b91f89aa57e12d3f031d59c4ec3fb3d768fab22b403d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4e69df3a024de226322465c674af07c5256f90ce7c9b1cda6f5cbfa06269f20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e69df3a024de226322465c674af07c5256f90ce7c9b1cda6f5cbfa06269f20f->enter($__internal_4e69df3a024de226322465c674af07c5256f90ce7c9b1cda6f5cbfa06269f20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85eb8cd597330d443069b91f89aa57e12d3f031d59c4ec3fb3d768fab22b403d->leave($__internal_85eb8cd597330d443069b91f89aa57e12d3f031d59c4ec3fb3d768fab22b403d_prof);

        
        $__internal_4e69df3a024de226322465c674af07c5256f90ce7c9b1cda6f5cbfa06269f20f->leave($__internal_4e69df3a024de226322465c674af07c5256f90ce7c9b1cda6f5cbfa06269f20f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba28dd6d6d3a888d631c0677f0a955d2b31ea9376cd7fc748b5c1d30ae5dfc14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba28dd6d6d3a888d631c0677f0a955d2b31ea9376cd7fc748b5c1d30ae5dfc14->enter($__internal_ba28dd6d6d3a888d631c0677f0a955d2b31ea9376cd7fc748b5c1d30ae5dfc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_19a62a21f01da00f63f081567351947fc405e8dbcd5c9aae7fe27ec72eb7d192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a62a21f01da00f63f081567351947fc405e8dbcd5c9aae7fe27ec72eb7d192->enter($__internal_19a62a21f01da00f63f081567351947fc405e8dbcd5c9aae7fe27ec72eb7d192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_19a62a21f01da00f63f081567351947fc405e8dbcd5c9aae7fe27ec72eb7d192->leave($__internal_19a62a21f01da00f63f081567351947fc405e8dbcd5c9aae7fe27ec72eb7d192_prof);

        
        $__internal_ba28dd6d6d3a888d631c0677f0a955d2b31ea9376cd7fc748b5c1d30ae5dfc14->leave($__internal_ba28dd6d6d3a888d631c0677f0a955d2b31ea9376cd7fc748b5c1d30ae5dfc14_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f5bb8fbb49269c4d22b89033b3726cd0053d89be51d14e4a472187e6db565ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f5bb8fbb49269c4d22b89033b3726cd0053d89be51d14e4a472187e6db565ac->enter($__internal_8f5bb8fbb49269c4d22b89033b3726cd0053d89be51d14e4a472187e6db565ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_996a700aefda5f5e27500162cc087e13b60a3e19446207c4f769ba32e768f6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996a700aefda5f5e27500162cc087e13b60a3e19446207c4f769ba32e768f6df->enter($__internal_996a700aefda5f5e27500162cc087e13b60a3e19446207c4f769ba32e768f6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_996a700aefda5f5e27500162cc087e13b60a3e19446207c4f769ba32e768f6df->leave($__internal_996a700aefda5f5e27500162cc087e13b60a3e19446207c4f769ba32e768f6df_prof);

        
        $__internal_8f5bb8fbb49269c4d22b89033b3726cd0053d89be51d14e4a472187e6db565ac->leave($__internal_8f5bb8fbb49269c4d22b89033b3726cd0053d89be51d14e4a472187e6db565ac_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_831aaa9ac2fb26168b1366fbfbdeda3d6bb6355b487646c642abc51c85e8f002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831aaa9ac2fb26168b1366fbfbdeda3d6bb6355b487646c642abc51c85e8f002->enter($__internal_831aaa9ac2fb26168b1366fbfbdeda3d6bb6355b487646c642abc51c85e8f002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8be79ee0010aa9ea437a318805a266d12a254735f397f91bd61ab5fbcb8a6564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be79ee0010aa9ea437a318805a266d12a254735f397f91bd61ab5fbcb8a6564->enter($__internal_8be79ee0010aa9ea437a318805a266d12a254735f397f91bd61ab5fbcb8a6564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8be79ee0010aa9ea437a318805a266d12a254735f397f91bd61ab5fbcb8a6564->leave($__internal_8be79ee0010aa9ea437a318805a266d12a254735f397f91bd61ab5fbcb8a6564_prof);

        
        $__internal_831aaa9ac2fb26168b1366fbfbdeda3d6bb6355b487646c642abc51c85e8f002->leave($__internal_831aaa9ac2fb26168b1366fbfbdeda3d6bb6355b487646c642abc51c85e8f002_prof);

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
