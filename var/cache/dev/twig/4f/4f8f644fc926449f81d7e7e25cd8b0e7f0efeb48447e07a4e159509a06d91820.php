<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_c53b8fb89ccf835af7f32c2a7843da761cabedce2a7748c45fe9a1403818fe35 extends Twig_Template
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
        $__internal_e9cdbc710dd9c7e1b781f498037c3c01be9a522e7451a9bd73ab40163b94b17c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9cdbc710dd9c7e1b781f498037c3c01be9a522e7451a9bd73ab40163b94b17c->enter($__internal_e9cdbc710dd9c7e1b781f498037c3c01be9a522e7451a9bd73ab40163b94b17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f8dabb2d5a4b21ee73bae387fa35e954bba771ba4667e54b04607aa9b0094f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8dabb2d5a4b21ee73bae387fa35e954bba771ba4667e54b04607aa9b0094f8b->enter($__internal_f8dabb2d5a4b21ee73bae387fa35e954bba771ba4667e54b04607aa9b0094f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9cdbc710dd9c7e1b781f498037c3c01be9a522e7451a9bd73ab40163b94b17c->leave($__internal_e9cdbc710dd9c7e1b781f498037c3c01be9a522e7451a9bd73ab40163b94b17c_prof);

        
        $__internal_f8dabb2d5a4b21ee73bae387fa35e954bba771ba4667e54b04607aa9b0094f8b->leave($__internal_f8dabb2d5a4b21ee73bae387fa35e954bba771ba4667e54b04607aa9b0094f8b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_51c60385feadb43f6a4fa55b409c51892e24d707180abdbcb9a28f65f81af1f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51c60385feadb43f6a4fa55b409c51892e24d707180abdbcb9a28f65f81af1f1->enter($__internal_51c60385feadb43f6a4fa55b409c51892e24d707180abdbcb9a28f65f81af1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9d4c74c1a5f8c22266d530df03bf2f44daec0a7875aac4cc8ba7e198b14e8344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4c74c1a5f8c22266d530df03bf2f44daec0a7875aac4cc8ba7e198b14e8344->enter($__internal_9d4c74c1a5f8c22266d530df03bf2f44daec0a7875aac4cc8ba7e198b14e8344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_9d4c74c1a5f8c22266d530df03bf2f44daec0a7875aac4cc8ba7e198b14e8344->leave($__internal_9d4c74c1a5f8c22266d530df03bf2f44daec0a7875aac4cc8ba7e198b14e8344_prof);

        
        $__internal_51c60385feadb43f6a4fa55b409c51892e24d707180abdbcb9a28f65f81af1f1->leave($__internal_51c60385feadb43f6a4fa55b409c51892e24d707180abdbcb9a28f65f81af1f1_prof);

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
