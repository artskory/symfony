<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_28bd3d7917a8d2e67b47c2cc685f956debb42ced3501af3760c8fe6030bd3655 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_0cd93b04bec249e304bd9522cb3953e49af73a5fe051a8099aba42c160ad8e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd93b04bec249e304bd9522cb3953e49af73a5fe051a8099aba42c160ad8e1a->enter($__internal_0cd93b04bec249e304bd9522cb3953e49af73a5fe051a8099aba42c160ad8e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_915c042e896ce36ce25787ea2f5789d84167defbee8742bd85884356bb53b28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915c042e896ce36ce25787ea2f5789d84167defbee8742bd85884356bb53b28a->enter($__internal_915c042e896ce36ce25787ea2f5789d84167defbee8742bd85884356bb53b28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cd93b04bec249e304bd9522cb3953e49af73a5fe051a8099aba42c160ad8e1a->leave($__internal_0cd93b04bec249e304bd9522cb3953e49af73a5fe051a8099aba42c160ad8e1a_prof);

        
        $__internal_915c042e896ce36ce25787ea2f5789d84167defbee8742bd85884356bb53b28a->leave($__internal_915c042e896ce36ce25787ea2f5789d84167defbee8742bd85884356bb53b28a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89faa3a278959f88c4f932693812c2939567a46522cc19bfb0db999660eabeb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89faa3a278959f88c4f932693812c2939567a46522cc19bfb0db999660eabeb4->enter($__internal_89faa3a278959f88c4f932693812c2939567a46522cc19bfb0db999660eabeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0ae6ce217c121757d48736ed080d0ba9bb68b821477ec80f823d1b379b479dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae6ce217c121757d48736ed080d0ba9bb68b821477ec80f823d1b379b479dd2->enter($__internal_0ae6ce217c121757d48736ed080d0ba9bb68b821477ec80f823d1b379b479dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0ae6ce217c121757d48736ed080d0ba9bb68b821477ec80f823d1b379b479dd2->leave($__internal_0ae6ce217c121757d48736ed080d0ba9bb68b821477ec80f823d1b379b479dd2_prof);

        
        $__internal_89faa3a278959f88c4f932693812c2939567a46522cc19bfb0db999660eabeb4->leave($__internal_89faa3a278959f88c4f932693812c2939567a46522cc19bfb0db999660eabeb4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_64f590dc995f86d947f0a517e8e694e599765ef9b79a288f127fb05e01dd3f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64f590dc995f86d947f0a517e8e694e599765ef9b79a288f127fb05e01dd3f01->enter($__internal_64f590dc995f86d947f0a517e8e694e599765ef9b79a288f127fb05e01dd3f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_55519bb22b1a283d372422ad5b4e357f5abae8408e7b2dd46f19943ceb20d676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55519bb22b1a283d372422ad5b4e357f5abae8408e7b2dd46f19943ceb20d676->enter($__internal_55519bb22b1a283d372422ad5b4e357f5abae8408e7b2dd46f19943ceb20d676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_55519bb22b1a283d372422ad5b4e357f5abae8408e7b2dd46f19943ceb20d676->leave($__internal_55519bb22b1a283d372422ad5b4e357f5abae8408e7b2dd46f19943ceb20d676_prof);

        
        $__internal_64f590dc995f86d947f0a517e8e694e599765ef9b79a288f127fb05e01dd3f01->leave($__internal_64f590dc995f86d947f0a517e8e694e599765ef9b79a288f127fb05e01dd3f01_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5107563bb4078039a40c6745366d1b947a0c79fae26de4e3853b5603f5c8fd52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5107563bb4078039a40c6745366d1b947a0c79fae26de4e3853b5603f5c8fd52->enter($__internal_5107563bb4078039a40c6745366d1b947a0c79fae26de4e3853b5603f5c8fd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_036f521240378edad8c7beafd76adc11ce53cfca14fa1e25cbd54f5d7f5315ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036f521240378edad8c7beafd76adc11ce53cfca14fa1e25cbd54f5d7f5315ce->enter($__internal_036f521240378edad8c7beafd76adc11ce53cfca14fa1e25cbd54f5d7f5315ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_036f521240378edad8c7beafd76adc11ce53cfca14fa1e25cbd54f5d7f5315ce->leave($__internal_036f521240378edad8c7beafd76adc11ce53cfca14fa1e25cbd54f5d7f5315ce_prof);

        
        $__internal_5107563bb4078039a40c6745366d1b947a0c79fae26de4e3853b5603f5c8fd52->leave($__internal_5107563bb4078039a40c6745366d1b947a0c79fae26de4e3853b5603f5c8fd52_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
