<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7fd3fa01325ecbde0d9b735141645d99bc4552be2ceb141ce62832b2592cab62 extends Twig_Template
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
        $__internal_b6dd70c5bf084025f051a7d184ee060b52b23de6362c346fe3e7c620d89738bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6dd70c5bf084025f051a7d184ee060b52b23de6362c346fe3e7c620d89738bb->enter($__internal_b6dd70c5bf084025f051a7d184ee060b52b23de6362c346fe3e7c620d89738bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b470d9d5d3187aeacda82b3cabae70418dbbd74b33ac50d8a5817aeb2534b28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b470d9d5d3187aeacda82b3cabae70418dbbd74b33ac50d8a5817aeb2534b28e->enter($__internal_b470d9d5d3187aeacda82b3cabae70418dbbd74b33ac50d8a5817aeb2534b28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6dd70c5bf084025f051a7d184ee060b52b23de6362c346fe3e7c620d89738bb->leave($__internal_b6dd70c5bf084025f051a7d184ee060b52b23de6362c346fe3e7c620d89738bb_prof);

        
        $__internal_b470d9d5d3187aeacda82b3cabae70418dbbd74b33ac50d8a5817aeb2534b28e->leave($__internal_b470d9d5d3187aeacda82b3cabae70418dbbd74b33ac50d8a5817aeb2534b28e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a4930459ce588292930ec7ac477a827747dde354c2a65918d41b1e8ca65a356b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4930459ce588292930ec7ac477a827747dde354c2a65918d41b1e8ca65a356b->enter($__internal_a4930459ce588292930ec7ac477a827747dde354c2a65918d41b1e8ca65a356b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7d94da07baae22258914f7d2cad3dbbdfe77520618493cabdb411e2a722fac73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d94da07baae22258914f7d2cad3dbbdfe77520618493cabdb411e2a722fac73->enter($__internal_7d94da07baae22258914f7d2cad3dbbdfe77520618493cabdb411e2a722fac73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7d94da07baae22258914f7d2cad3dbbdfe77520618493cabdb411e2a722fac73->leave($__internal_7d94da07baae22258914f7d2cad3dbbdfe77520618493cabdb411e2a722fac73_prof);

        
        $__internal_a4930459ce588292930ec7ac477a827747dde354c2a65918d41b1e8ca65a356b->leave($__internal_a4930459ce588292930ec7ac477a827747dde354c2a65918d41b1e8ca65a356b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_645d4dbdda1f1e18b887f853e1edbab5a1843c562ba4c5f04555d3ae05dfeaa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645d4dbdda1f1e18b887f853e1edbab5a1843c562ba4c5f04555d3ae05dfeaa7->enter($__internal_645d4dbdda1f1e18b887f853e1edbab5a1843c562ba4c5f04555d3ae05dfeaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2f7aa0f648e049b227ea61cd4975aec51bc2e4049f8b7845def38234adf7f1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7aa0f648e049b227ea61cd4975aec51bc2e4049f8b7845def38234adf7f1c4->enter($__internal_2f7aa0f648e049b227ea61cd4975aec51bc2e4049f8b7845def38234adf7f1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2f7aa0f648e049b227ea61cd4975aec51bc2e4049f8b7845def38234adf7f1c4->leave($__internal_2f7aa0f648e049b227ea61cd4975aec51bc2e4049f8b7845def38234adf7f1c4_prof);

        
        $__internal_645d4dbdda1f1e18b887f853e1edbab5a1843c562ba4c5f04555d3ae05dfeaa7->leave($__internal_645d4dbdda1f1e18b887f853e1edbab5a1843c562ba4c5f04555d3ae05dfeaa7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_305b92c0f266012796408863e1e3b6c3d2468b6968695f4b504335a33516e4e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305b92c0f266012796408863e1e3b6c3d2468b6968695f4b504335a33516e4e9->enter($__internal_305b92c0f266012796408863e1e3b6c3d2468b6968695f4b504335a33516e4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10d4b32387756b8a7dd37de7aa01b6bf926edc1d3f84e1dfcc729f82be163d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d4b32387756b8a7dd37de7aa01b6bf926edc1d3f84e1dfcc729f82be163d2b->enter($__internal_10d4b32387756b8a7dd37de7aa01b6bf926edc1d3f84e1dfcc729f82be163d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_10d4b32387756b8a7dd37de7aa01b6bf926edc1d3f84e1dfcc729f82be163d2b->leave($__internal_10d4b32387756b8a7dd37de7aa01b6bf926edc1d3f84e1dfcc729f82be163d2b_prof);

        
        $__internal_305b92c0f266012796408863e1e3b6c3d2468b6968695f4b504335a33516e4e9->leave($__internal_305b92c0f266012796408863e1e3b6c3d2468b6968695f4b504335a33516e4e9_prof);

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
