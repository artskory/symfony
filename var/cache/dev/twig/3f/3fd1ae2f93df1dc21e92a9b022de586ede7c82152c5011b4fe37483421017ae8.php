<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b8fc3deccf89bac0c6431cb82ae38e1d230de4eb1cf9f3d22502a40f9906c453 extends Twig_Template
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
        $__internal_4e55bf9ba4b9cc3d568f67d0948d72bc9194fa7dfe3607f367a38c543d767922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e55bf9ba4b9cc3d568f67d0948d72bc9194fa7dfe3607f367a38c543d767922->enter($__internal_4e55bf9ba4b9cc3d568f67d0948d72bc9194fa7dfe3607f367a38c543d767922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d03bd0758ed1ab5d4629cf6e6bbbf32029bc72450ce5ee1317b4a54c2e102999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03bd0758ed1ab5d4629cf6e6bbbf32029bc72450ce5ee1317b4a54c2e102999->enter($__internal_d03bd0758ed1ab5d4629cf6e6bbbf32029bc72450ce5ee1317b4a54c2e102999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e55bf9ba4b9cc3d568f67d0948d72bc9194fa7dfe3607f367a38c543d767922->leave($__internal_4e55bf9ba4b9cc3d568f67d0948d72bc9194fa7dfe3607f367a38c543d767922_prof);

        
        $__internal_d03bd0758ed1ab5d4629cf6e6bbbf32029bc72450ce5ee1317b4a54c2e102999->leave($__internal_d03bd0758ed1ab5d4629cf6e6bbbf32029bc72450ce5ee1317b4a54c2e102999_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_448d247cf002a50e88f95f41c862ce41dc0fc516044e9758b7dac6d74164c8b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448d247cf002a50e88f95f41c862ce41dc0fc516044e9758b7dac6d74164c8b4->enter($__internal_448d247cf002a50e88f95f41c862ce41dc0fc516044e9758b7dac6d74164c8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_93ed790e636500b50f08f692e0ccc29006ef51ebc571f2592de466ef3bc5f4dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ed790e636500b50f08f692e0ccc29006ef51ebc571f2592de466ef3bc5f4dc->enter($__internal_93ed790e636500b50f08f692e0ccc29006ef51ebc571f2592de466ef3bc5f4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_93ed790e636500b50f08f692e0ccc29006ef51ebc571f2592de466ef3bc5f4dc->leave($__internal_93ed790e636500b50f08f692e0ccc29006ef51ebc571f2592de466ef3bc5f4dc_prof);

        
        $__internal_448d247cf002a50e88f95f41c862ce41dc0fc516044e9758b7dac6d74164c8b4->leave($__internal_448d247cf002a50e88f95f41c862ce41dc0fc516044e9758b7dac6d74164c8b4_prof);

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
