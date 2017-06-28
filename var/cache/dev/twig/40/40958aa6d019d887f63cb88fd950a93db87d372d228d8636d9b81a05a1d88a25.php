<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_9fa2fae6c3552a4c00a6191ba37a68ee743da21ed4a4309def0fb89507e0fb8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04a18599e935949fff47b752647a1cab9de86068db818eef255bd1e5444c998a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a18599e935949fff47b752647a1cab9de86068db818eef255bd1e5444c998a->enter($__internal_04a18599e935949fff47b752647a1cab9de86068db818eef255bd1e5444c998a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_f74ab3b3f989a1246b737b20e4bcf59c42b1dbfcbc38fab7c08fe445407cb1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74ab3b3f989a1246b737b20e4bcf59c42b1dbfcbc38fab7c08fe445407cb1d4->enter($__internal_f74ab3b3f989a1246b737b20e4bcf59c42b1dbfcbc38fab7c08fe445407cb1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04a18599e935949fff47b752647a1cab9de86068db818eef255bd1e5444c998a->leave($__internal_04a18599e935949fff47b752647a1cab9de86068db818eef255bd1e5444c998a_prof);

        
        $__internal_f74ab3b3f989a1246b737b20e4bcf59c42b1dbfcbc38fab7c08fe445407cb1d4->leave($__internal_f74ab3b3f989a1246b737b20e4bcf59c42b1dbfcbc38fab7c08fe445407cb1d4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06f666edd9b2899ca6fd88cbfb295c1430af0f3b4af2c2e08b5c8150146bea30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f666edd9b2899ca6fd88cbfb295c1430af0f3b4af2c2e08b5c8150146bea30->enter($__internal_06f666edd9b2899ca6fd88cbfb295c1430af0f3b4af2c2e08b5c8150146bea30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1448a211930442f6a0dc12322466f663f54c2a16b3f7a397ee1f2fb3bbd354ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1448a211930442f6a0dc12322466f663f54c2a16b3f7a397ee1f2fb3bbd354ad->enter($__internal_1448a211930442f6a0dc12322466f663f54c2a16b3f7a397ee1f2fb3bbd354ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_1448a211930442f6a0dc12322466f663f54c2a16b3f7a397ee1f2fb3bbd354ad->leave($__internal_1448a211930442f6a0dc12322466f663f54c2a16b3f7a397ee1f2fb3bbd354ad_prof);

        
        $__internal_06f666edd9b2899ca6fd88cbfb295c1430af0f3b4af2c2e08b5c8150146bea30->leave($__internal_06f666edd9b2899ca6fd88cbfb295c1430af0f3b4af2c2e08b5c8150146bea30_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
