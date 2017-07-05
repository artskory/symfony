<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8fa955d739acd9f48f5556900ee654afcdf044b3c24fe5ce65628662cfc8410f extends Twig_Template
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
        $__internal_6a06ed54b83ac0b974a760c563b90050009bf16f08bb101fd9241d2c4621490d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a06ed54b83ac0b974a760c563b90050009bf16f08bb101fd9241d2c4621490d->enter($__internal_6a06ed54b83ac0b974a760c563b90050009bf16f08bb101fd9241d2c4621490d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5b2136bff9d1c5a95286cae7b0efd3f4ffff4e48e30a2f3f710e4368d8ae6a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2136bff9d1c5a95286cae7b0efd3f4ffff4e48e30a2f3f710e4368d8ae6a18->enter($__internal_5b2136bff9d1c5a95286cae7b0efd3f4ffff4e48e30a2f3f710e4368d8ae6a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a06ed54b83ac0b974a760c563b90050009bf16f08bb101fd9241d2c4621490d->leave($__internal_6a06ed54b83ac0b974a760c563b90050009bf16f08bb101fd9241d2c4621490d_prof);

        
        $__internal_5b2136bff9d1c5a95286cae7b0efd3f4ffff4e48e30a2f3f710e4368d8ae6a18->leave($__internal_5b2136bff9d1c5a95286cae7b0efd3f4ffff4e48e30a2f3f710e4368d8ae6a18_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cc4c5f41e17075ff5c6af66e541d5a26504112f30ec4d6b58844c64ba75eb37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc4c5f41e17075ff5c6af66e541d5a26504112f30ec4d6b58844c64ba75eb37d->enter($__internal_cc4c5f41e17075ff5c6af66e541d5a26504112f30ec4d6b58844c64ba75eb37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cfb9b1c97baaeb6a0079cccae8b013bf5007295cb1e5d9806a2ad22a857cf9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb9b1c97baaeb6a0079cccae8b013bf5007295cb1e5d9806a2ad22a857cf9e8->enter($__internal_cfb9b1c97baaeb6a0079cccae8b013bf5007295cb1e5d9806a2ad22a857cf9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cfb9b1c97baaeb6a0079cccae8b013bf5007295cb1e5d9806a2ad22a857cf9e8->leave($__internal_cfb9b1c97baaeb6a0079cccae8b013bf5007295cb1e5d9806a2ad22a857cf9e8_prof);

        
        $__internal_cc4c5f41e17075ff5c6af66e541d5a26504112f30ec4d6b58844c64ba75eb37d->leave($__internal_cc4c5f41e17075ff5c6af66e541d5a26504112f30ec4d6b58844c64ba75eb37d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8376e6e6a3a4dc41d658713be6308fd8b4de733439e1f85010754d7f789b8cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8376e6e6a3a4dc41d658713be6308fd8b4de733439e1f85010754d7f789b8cf7->enter($__internal_8376e6e6a3a4dc41d658713be6308fd8b4de733439e1f85010754d7f789b8cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_af517222f2b798672baf9319904eccb009ca12b820205a32d80fd6c0af3d4a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af517222f2b798672baf9319904eccb009ca12b820205a32d80fd6c0af3d4a7a->enter($__internal_af517222f2b798672baf9319904eccb009ca12b820205a32d80fd6c0af3d4a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_af517222f2b798672baf9319904eccb009ca12b820205a32d80fd6c0af3d4a7a->leave($__internal_af517222f2b798672baf9319904eccb009ca12b820205a32d80fd6c0af3d4a7a_prof);

        
        $__internal_8376e6e6a3a4dc41d658713be6308fd8b4de733439e1f85010754d7f789b8cf7->leave($__internal_8376e6e6a3a4dc41d658713be6308fd8b4de733439e1f85010754d7f789b8cf7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_75cbb72e44b4bd7ecebc768e93a5a6c3351bb8a110a66c5195b7148df2ccf6bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75cbb72e44b4bd7ecebc768e93a5a6c3351bb8a110a66c5195b7148df2ccf6bd->enter($__internal_75cbb72e44b4bd7ecebc768e93a5a6c3351bb8a110a66c5195b7148df2ccf6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7c5dc84d0e599fe3a0519760235fe0217526fe1b65b7ccdc1517d8c7d4d5d433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5dc84d0e599fe3a0519760235fe0217526fe1b65b7ccdc1517d8c7d4d5d433->enter($__internal_7c5dc84d0e599fe3a0519760235fe0217526fe1b65b7ccdc1517d8c7d4d5d433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7c5dc84d0e599fe3a0519760235fe0217526fe1b65b7ccdc1517d8c7d4d5d433->leave($__internal_7c5dc84d0e599fe3a0519760235fe0217526fe1b65b7ccdc1517d8c7d4d5d433_prof);

        
        $__internal_75cbb72e44b4bd7ecebc768e93a5a6c3351bb8a110a66c5195b7148df2ccf6bd->leave($__internal_75cbb72e44b4bd7ecebc768e93a5a6c3351bb8a110a66c5195b7148df2ccf6bd_prof);

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
