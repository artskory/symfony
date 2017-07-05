<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_88c39f05b7391cc62d327794bde541b88a631d745a8ee12c5d6b28869007c166 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_381626d4b98ff2500135062f336c5bc5a633d12263f642685f97e627f385b5fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_381626d4b98ff2500135062f336c5bc5a633d12263f642685f97e627f385b5fb->enter($__internal_381626d4b98ff2500135062f336c5bc5a633d12263f642685f97e627f385b5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b3299ec76977f0377234046e3ed858f448e6c80f68b4c20fd57e63a6035998e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3299ec76977f0377234046e3ed858f448e6c80f68b4c20fd57e63a6035998e6->enter($__internal_b3299ec76977f0377234046e3ed858f448e6c80f68b4c20fd57e63a6035998e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_381626d4b98ff2500135062f336c5bc5a633d12263f642685f97e627f385b5fb->leave($__internal_381626d4b98ff2500135062f336c5bc5a633d12263f642685f97e627f385b5fb_prof);

        
        $__internal_b3299ec76977f0377234046e3ed858f448e6c80f68b4c20fd57e63a6035998e6->leave($__internal_b3299ec76977f0377234046e3ed858f448e6c80f68b4c20fd57e63a6035998e6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06f8645bcb9b4bc6aa40c08832d2fa24cea6b7920c633a684b562d6889eb0528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f8645bcb9b4bc6aa40c08832d2fa24cea6b7920c633a684b562d6889eb0528->enter($__internal_06f8645bcb9b4bc6aa40c08832d2fa24cea6b7920c633a684b562d6889eb0528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7fed3ede8b0f58be6a2de089a58b5b86f724ebae06bc8ded890a72fa9c4e9078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fed3ede8b0f58be6a2de089a58b5b86f724ebae06bc8ded890a72fa9c4e9078->enter($__internal_7fed3ede8b0f58be6a2de089a58b5b86f724ebae06bc8ded890a72fa9c4e9078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_7fed3ede8b0f58be6a2de089a58b5b86f724ebae06bc8ded890a72fa9c4e9078->leave($__internal_7fed3ede8b0f58be6a2de089a58b5b86f724ebae06bc8ded890a72fa9c4e9078_prof);

        
        $__internal_06f8645bcb9b4bc6aa40c08832d2fa24cea6b7920c633a684b562d6889eb0528->leave($__internal_06f8645bcb9b4bc6aa40c08832d2fa24cea6b7920c633a684b562d6889eb0528_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
