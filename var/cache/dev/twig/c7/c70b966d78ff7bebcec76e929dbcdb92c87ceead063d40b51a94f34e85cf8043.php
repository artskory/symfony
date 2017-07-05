<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_cc6b07bf0e673d39c95b7b4ff77733d4a4ad9483671782052ce189a4aa1d697d extends Twig_Template
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
        $__internal_8e954e01c0c30287b2babf0052563713e16f83987ee8e79ddb67f746a011c9bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e954e01c0c30287b2babf0052563713e16f83987ee8e79ddb67f746a011c9bc->enter($__internal_8e954e01c0c30287b2babf0052563713e16f83987ee8e79ddb67f746a011c9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_5df4e791b64ab09a4e8dd316eecdda3aa68ebbe95bcb64763d6f0838f5b63656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df4e791b64ab09a4e8dd316eecdda3aa68ebbe95bcb64763d6f0838f5b63656->enter($__internal_5df4e791b64ab09a4e8dd316eecdda3aa68ebbe95bcb64763d6f0838f5b63656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e954e01c0c30287b2babf0052563713e16f83987ee8e79ddb67f746a011c9bc->leave($__internal_8e954e01c0c30287b2babf0052563713e16f83987ee8e79ddb67f746a011c9bc_prof);

        
        $__internal_5df4e791b64ab09a4e8dd316eecdda3aa68ebbe95bcb64763d6f0838f5b63656->leave($__internal_5df4e791b64ab09a4e8dd316eecdda3aa68ebbe95bcb64763d6f0838f5b63656_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad2fdaf91a0abcb7e5222ab0cb5ced5e680b140c65852fa2b33c67ff8108ba9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad2fdaf91a0abcb7e5222ab0cb5ced5e680b140c65852fa2b33c67ff8108ba9b->enter($__internal_ad2fdaf91a0abcb7e5222ab0cb5ced5e680b140c65852fa2b33c67ff8108ba9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b70cf9408ade6f195b1149b54f6683ea3509ffe441dda907f40ab17ecbd1ef99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70cf9408ade6f195b1149b54f6683ea3509ffe441dda907f40ab17ecbd1ef99->enter($__internal_b70cf9408ade6f195b1149b54f6683ea3509ffe441dda907f40ab17ecbd1ef99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b70cf9408ade6f195b1149b54f6683ea3509ffe441dda907f40ab17ecbd1ef99->leave($__internal_b70cf9408ade6f195b1149b54f6683ea3509ffe441dda907f40ab17ecbd1ef99_prof);

        
        $__internal_ad2fdaf91a0abcb7e5222ab0cb5ced5e680b140c65852fa2b33c67ff8108ba9b->leave($__internal_ad2fdaf91a0abcb7e5222ab0cb5ced5e680b140c65852fa2b33c67ff8108ba9b_prof);

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
