<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3f2b3abb97719a6e3e85c4c3e5774544520d17ae66b82c94378bf52bc157200d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8e387e981364d871e044f45013527e95ee8bf236aee9138208cef9c94239cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e387e981364d871e044f45013527e95ee8bf236aee9138208cef9c94239cdb->enter($__internal_e8e387e981364d871e044f45013527e95ee8bf236aee9138208cef9c94239cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_40191a1bcd85204da6a1bc38e112a33dca04e6923c9622dff7bf1a58db9342a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40191a1bcd85204da6a1bc38e112a33dca04e6923c9622dff7bf1a58db9342a7->enter($__internal_40191a1bcd85204da6a1bc38e112a33dca04e6923c9622dff7bf1a58db9342a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8e387e981364d871e044f45013527e95ee8bf236aee9138208cef9c94239cdb->leave($__internal_e8e387e981364d871e044f45013527e95ee8bf236aee9138208cef9c94239cdb_prof);

        
        $__internal_40191a1bcd85204da6a1bc38e112a33dca04e6923c9622dff7bf1a58db9342a7->leave($__internal_40191a1bcd85204da6a1bc38e112a33dca04e6923c9622dff7bf1a58db9342a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b21ff213333974cccbb439a04f3124261ba9853e2cf33f4936d75c77b854076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b21ff213333974cccbb439a04f3124261ba9853e2cf33f4936d75c77b854076->enter($__internal_9b21ff213333974cccbb439a04f3124261ba9853e2cf33f4936d75c77b854076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bedf4601a8aa1576a14701fa0f6a9479b148b886df0b47aeb612dd8375175d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bedf4601a8aa1576a14701fa0f6a9479b148b886df0b47aeb612dd8375175d97->enter($__internal_bedf4601a8aa1576a14701fa0f6a9479b148b886df0b47aeb612dd8375175d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bedf4601a8aa1576a14701fa0f6a9479b148b886df0b47aeb612dd8375175d97->leave($__internal_bedf4601a8aa1576a14701fa0f6a9479b148b886df0b47aeb612dd8375175d97_prof);

        
        $__internal_9b21ff213333974cccbb439a04f3124261ba9853e2cf33f4936d75c77b854076->leave($__internal_9b21ff213333974cccbb439a04f3124261ba9853e2cf33f4936d75c77b854076_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_de93ec40b4837eb0d8161c59956d05f7b024001c918a6e61026e05ac830d3f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de93ec40b4837eb0d8161c59956d05f7b024001c918a6e61026e05ac830d3f46->enter($__internal_de93ec40b4837eb0d8161c59956d05f7b024001c918a6e61026e05ac830d3f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c0f74df6d453439695342755552c5b48f6a08f5ae08e2376db0236a335703bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0f74df6d453439695342755552c5b48f6a08f5ae08e2376db0236a335703bb->enter($__internal_6c0f74df6d453439695342755552c5b48f6a08f5ae08e2376db0236a335703bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6c0f74df6d453439695342755552c5b48f6a08f5ae08e2376db0236a335703bb->leave($__internal_6c0f74df6d453439695342755552c5b48f6a08f5ae08e2376db0236a335703bb_prof);

        
        $__internal_de93ec40b4837eb0d8161c59956d05f7b024001c918a6e61026e05ac830d3f46->leave($__internal_de93ec40b4837eb0d8161c59956d05f7b024001c918a6e61026e05ac830d3f46_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
