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
        $__internal_a4f501f113dd2cea82c5947359792e30304f8cfc1492b852529762f262f149a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f501f113dd2cea82c5947359792e30304f8cfc1492b852529762f262f149a0->enter($__internal_a4f501f113dd2cea82c5947359792e30304f8cfc1492b852529762f262f149a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_ce91bebbcc9491440c3511dc3d1774d5ac71d967a99fda76aea6325c130c46ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce91bebbcc9491440c3511dc3d1774d5ac71d967a99fda76aea6325c130c46ba->enter($__internal_ce91bebbcc9491440c3511dc3d1774d5ac71d967a99fda76aea6325c130c46ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4f501f113dd2cea82c5947359792e30304f8cfc1492b852529762f262f149a0->leave($__internal_a4f501f113dd2cea82c5947359792e30304f8cfc1492b852529762f262f149a0_prof);

        
        $__internal_ce91bebbcc9491440c3511dc3d1774d5ac71d967a99fda76aea6325c130c46ba->leave($__internal_ce91bebbcc9491440c3511dc3d1774d5ac71d967a99fda76aea6325c130c46ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9e28a6332fa1bd45f1e6f623298dd4cd1fc8db6baa461149bc0ffbb8549c7324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e28a6332fa1bd45f1e6f623298dd4cd1fc8db6baa461149bc0ffbb8549c7324->enter($__internal_9e28a6332fa1bd45f1e6f623298dd4cd1fc8db6baa461149bc0ffbb8549c7324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b9b5d79966a2a37de0bace0931d1e9b0b13602081f412f9a02a9b9e5d1cd66aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b5d79966a2a37de0bace0931d1e9b0b13602081f412f9a02a9b9e5d1cd66aa->enter($__internal_b9b5d79966a2a37de0bace0931d1e9b0b13602081f412f9a02a9b9e5d1cd66aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b9b5d79966a2a37de0bace0931d1e9b0b13602081f412f9a02a9b9e5d1cd66aa->leave($__internal_b9b5d79966a2a37de0bace0931d1e9b0b13602081f412f9a02a9b9e5d1cd66aa_prof);

        
        $__internal_9e28a6332fa1bd45f1e6f623298dd4cd1fc8db6baa461149bc0ffbb8549c7324->leave($__internal_9e28a6332fa1bd45f1e6f623298dd4cd1fc8db6baa461149bc0ffbb8549c7324_prof);

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
