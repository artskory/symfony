<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_08cb262f401b86e992d1004fbf010831700bf01c8a8e8de713bcccee294436cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_43f8a14c411b579ec8cf987cf122a9fd665400fff7f9eaa7a63a1dc90e2343bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f8a14c411b579ec8cf987cf122a9fd665400fff7f9eaa7a63a1dc90e2343bb->enter($__internal_43f8a14c411b579ec8cf987cf122a9fd665400fff7f9eaa7a63a1dc90e2343bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0acd964a161faf6e4b6dde185112aac542e2185280da256b0eba7ad6449aa5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0acd964a161faf6e4b6dde185112aac542e2185280da256b0eba7ad6449aa5ca->enter($__internal_0acd964a161faf6e4b6dde185112aac542e2185280da256b0eba7ad6449aa5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43f8a14c411b579ec8cf987cf122a9fd665400fff7f9eaa7a63a1dc90e2343bb->leave($__internal_43f8a14c411b579ec8cf987cf122a9fd665400fff7f9eaa7a63a1dc90e2343bb_prof);

        
        $__internal_0acd964a161faf6e4b6dde185112aac542e2185280da256b0eba7ad6449aa5ca->leave($__internal_0acd964a161faf6e4b6dde185112aac542e2185280da256b0eba7ad6449aa5ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6724e61862aa47ca38e5ce93c55177d510c5ed08a27691b2f17bd698b1df8473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6724e61862aa47ca38e5ce93c55177d510c5ed08a27691b2f17bd698b1df8473->enter($__internal_6724e61862aa47ca38e5ce93c55177d510c5ed08a27691b2f17bd698b1df8473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_57f2f1892a80655503371bfbd8569aa9c64f0bc1942b2c341b0eecce25559a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f2f1892a80655503371bfbd8569aa9c64f0bc1942b2c341b0eecce25559a36->enter($__internal_57f2f1892a80655503371bfbd8569aa9c64f0bc1942b2c341b0eecce25559a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_57f2f1892a80655503371bfbd8569aa9c64f0bc1942b2c341b0eecce25559a36->leave($__internal_57f2f1892a80655503371bfbd8569aa9c64f0bc1942b2c341b0eecce25559a36_prof);

        
        $__internal_6724e61862aa47ca38e5ce93c55177d510c5ed08a27691b2f17bd698b1df8473->leave($__internal_6724e61862aa47ca38e5ce93c55177d510c5ed08a27691b2f17bd698b1df8473_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7738a9657746b39e29a53cfd85afdd1167759a1eee1b4ff6977659bb0ea78432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7738a9657746b39e29a53cfd85afdd1167759a1eee1b4ff6977659bb0ea78432->enter($__internal_7738a9657746b39e29a53cfd85afdd1167759a1eee1b4ff6977659bb0ea78432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a2412196c941a8ff3a65f992738bd6c0d3ee90e3706e45b6ea76e39f4a7f29f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2412196c941a8ff3a65f992738bd6c0d3ee90e3706e45b6ea76e39f4a7f29f3->enter($__internal_a2412196c941a8ff3a65f992738bd6c0d3ee90e3706e45b6ea76e39f4a7f29f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a2412196c941a8ff3a65f992738bd6c0d3ee90e3706e45b6ea76e39f4a7f29f3->leave($__internal_a2412196c941a8ff3a65f992738bd6c0d3ee90e3706e45b6ea76e39f4a7f29f3_prof);

        
        $__internal_7738a9657746b39e29a53cfd85afdd1167759a1eee1b4ff6977659bb0ea78432->leave($__internal_7738a9657746b39e29a53cfd85afdd1167759a1eee1b4ff6977659bb0ea78432_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_26dfb6d625a1f9d4c03ecbbbf37fb961519b21744b414306c8a45d72cb7c36d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26dfb6d625a1f9d4c03ecbbbf37fb961519b21744b414306c8a45d72cb7c36d6->enter($__internal_26dfb6d625a1f9d4c03ecbbbf37fb961519b21744b414306c8a45d72cb7c36d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3294bb4617f65741d3d0f37d7a5093fde207d32fff3006ee018e287b7545836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3294bb4617f65741d3d0f37d7a5093fde207d32fff3006ee018e287b7545836->enter($__internal_e3294bb4617f65741d3d0f37d7a5093fde207d32fff3006ee018e287b7545836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e3294bb4617f65741d3d0f37d7a5093fde207d32fff3006ee018e287b7545836->leave($__internal_e3294bb4617f65741d3d0f37d7a5093fde207d32fff3006ee018e287b7545836_prof);

        
        $__internal_26dfb6d625a1f9d4c03ecbbbf37fb961519b21744b414306c8a45d72cb7c36d6->leave($__internal_26dfb6d625a1f9d4c03ecbbbf37fb961519b21744b414306c8a45d72cb7c36d6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
