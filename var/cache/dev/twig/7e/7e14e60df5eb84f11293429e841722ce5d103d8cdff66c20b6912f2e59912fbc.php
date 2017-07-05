<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_2ec64295107b962e11cc9dd44339cd380dfa2d7d80b01e348c6466c2644b1611 extends Twig_Template
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
        $__internal_adb65d6d00d5f3b8d85a2172b2f630611af7c5c1d79a3a820ddbb5bc47378604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb65d6d00d5f3b8d85a2172b2f630611af7c5c1d79a3a820ddbb5bc47378604->enter($__internal_adb65d6d00d5f3b8d85a2172b2f630611af7c5c1d79a3a820ddbb5bc47378604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_f10e53eb4d05e8207419c9ae82b936a3625b0a20105515b2dbc89cf370bd9801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10e53eb4d05e8207419c9ae82b936a3625b0a20105515b2dbc89cf370bd9801->enter($__internal_f10e53eb4d05e8207419c9ae82b936a3625b0a20105515b2dbc89cf370bd9801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adb65d6d00d5f3b8d85a2172b2f630611af7c5c1d79a3a820ddbb5bc47378604->leave($__internal_adb65d6d00d5f3b8d85a2172b2f630611af7c5c1d79a3a820ddbb5bc47378604_prof);

        
        $__internal_f10e53eb4d05e8207419c9ae82b936a3625b0a20105515b2dbc89cf370bd9801->leave($__internal_f10e53eb4d05e8207419c9ae82b936a3625b0a20105515b2dbc89cf370bd9801_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4528f7b86e571e69eb19bb5bf14f2fb3a8b2795387c86e9903bd29fa34677409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4528f7b86e571e69eb19bb5bf14f2fb3a8b2795387c86e9903bd29fa34677409->enter($__internal_4528f7b86e571e69eb19bb5bf14f2fb3a8b2795387c86e9903bd29fa34677409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7900e8c6057961e305421319aef0225822695321c3a04d738a38b74728014ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7900e8c6057961e305421319aef0225822695321c3a04d738a38b74728014ac0->enter($__internal_7900e8c6057961e305421319aef0225822695321c3a04d738a38b74728014ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7900e8c6057961e305421319aef0225822695321c3a04d738a38b74728014ac0->leave($__internal_7900e8c6057961e305421319aef0225822695321c3a04d738a38b74728014ac0_prof);

        
        $__internal_4528f7b86e571e69eb19bb5bf14f2fb3a8b2795387c86e9903bd29fa34677409->leave($__internal_4528f7b86e571e69eb19bb5bf14f2fb3a8b2795387c86e9903bd29fa34677409_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4038abb4e075e6175a29239fecc5958e3279732c678d8d72abb84033a924359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4038abb4e075e6175a29239fecc5958e3279732c678d8d72abb84033a924359->enter($__internal_c4038abb4e075e6175a29239fecc5958e3279732c678d8d72abb84033a924359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_41ce7e73564602e61d744d6dd61c448f454bb3fbaf24053508d57c92a1df733a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ce7e73564602e61d744d6dd61c448f454bb3fbaf24053508d57c92a1df733a->enter($__internal_41ce7e73564602e61d744d6dd61c448f454bb3fbaf24053508d57c92a1df733a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_41ce7e73564602e61d744d6dd61c448f454bb3fbaf24053508d57c92a1df733a->leave($__internal_41ce7e73564602e61d744d6dd61c448f454bb3fbaf24053508d57c92a1df733a_prof);

        
        $__internal_c4038abb4e075e6175a29239fecc5958e3279732c678d8d72abb84033a924359->leave($__internal_c4038abb4e075e6175a29239fecc5958e3279732c678d8d72abb84033a924359_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dddfdafb383dad8cbe356f917fdd0c345020a163c571fa73736793237c082b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dddfdafb383dad8cbe356f917fdd0c345020a163c571fa73736793237c082b93->enter($__internal_dddfdafb383dad8cbe356f917fdd0c345020a163c571fa73736793237c082b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e0d59b0fe626ca7fbe290dd5198fdb19042523633b0bc385a9079f7a1392ebe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d59b0fe626ca7fbe290dd5198fdb19042523633b0bc385a9079f7a1392ebe1->enter($__internal_e0d59b0fe626ca7fbe290dd5198fdb19042523633b0bc385a9079f7a1392ebe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e0d59b0fe626ca7fbe290dd5198fdb19042523633b0bc385a9079f7a1392ebe1->leave($__internal_e0d59b0fe626ca7fbe290dd5198fdb19042523633b0bc385a9079f7a1392ebe1_prof);

        
        $__internal_dddfdafb383dad8cbe356f917fdd0c345020a163c571fa73736793237c082b93->leave($__internal_dddfdafb383dad8cbe356f917fdd0c345020a163c571fa73736793237c082b93_prof);

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
