<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_c38f6173f96783dd58f99f6a380fd62c3fc68ad45aa30ec6aa08872eddcaded4 extends Twig_Template
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
        $__internal_9b828defa459f0c075b5dbbee3cd1c2ef3322c46ddc25ecada596d23401199d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b828defa459f0c075b5dbbee3cd1c2ef3322c46ddc25ecada596d23401199d7->enter($__internal_9b828defa459f0c075b5dbbee3cd1c2ef3322c46ddc25ecada596d23401199d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_696edadbf136eb26a7e4fe7f5a1d9f7a2a01c0584d9245b4320d5503c0b6b915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696edadbf136eb26a7e4fe7f5a1d9f7a2a01c0584d9245b4320d5503c0b6b915->enter($__internal_696edadbf136eb26a7e4fe7f5a1d9f7a2a01c0584d9245b4320d5503c0b6b915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b828defa459f0c075b5dbbee3cd1c2ef3322c46ddc25ecada596d23401199d7->leave($__internal_9b828defa459f0c075b5dbbee3cd1c2ef3322c46ddc25ecada596d23401199d7_prof);

        
        $__internal_696edadbf136eb26a7e4fe7f5a1d9f7a2a01c0584d9245b4320d5503c0b6b915->leave($__internal_696edadbf136eb26a7e4fe7f5a1d9f7a2a01c0584d9245b4320d5503c0b6b915_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d594028b54ec2c817423005c3dffef1951b2ea559737f8ea0d7b0a7c9fc08bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d594028b54ec2c817423005c3dffef1951b2ea559737f8ea0d7b0a7c9fc08bae->enter($__internal_d594028b54ec2c817423005c3dffef1951b2ea559737f8ea0d7b0a7c9fc08bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fe067934e1dffda3426da8d023a0fa1f1c17a637d0405236c2b906a602ef34f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe067934e1dffda3426da8d023a0fa1f1c17a637d0405236c2b906a602ef34f6->enter($__internal_fe067934e1dffda3426da8d023a0fa1f1c17a637d0405236c2b906a602ef34f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_fe067934e1dffda3426da8d023a0fa1f1c17a637d0405236c2b906a602ef34f6->leave($__internal_fe067934e1dffda3426da8d023a0fa1f1c17a637d0405236c2b906a602ef34f6_prof);

        
        $__internal_d594028b54ec2c817423005c3dffef1951b2ea559737f8ea0d7b0a7c9fc08bae->leave($__internal_d594028b54ec2c817423005c3dffef1951b2ea559737f8ea0d7b0a7c9fc08bae_prof);

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
