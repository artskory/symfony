<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8116ec77b8ba38b1dafa5d9308303b25fbd29dd47f62dda71ac7344032383fe9 extends Twig_Template
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
        $__internal_694f0c512709123afb1b894a953d35c9da3258a1249c71775d2452e91bc8aa1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_694f0c512709123afb1b894a953d35c9da3258a1249c71775d2452e91bc8aa1e->enter($__internal_694f0c512709123afb1b894a953d35c9da3258a1249c71775d2452e91bc8aa1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5498299ca48402be45cbb9999bad857090fa6ae077dd8c9d410839adba1cf1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5498299ca48402be45cbb9999bad857090fa6ae077dd8c9d410839adba1cf1a4->enter($__internal_5498299ca48402be45cbb9999bad857090fa6ae077dd8c9d410839adba1cf1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_694f0c512709123afb1b894a953d35c9da3258a1249c71775d2452e91bc8aa1e->leave($__internal_694f0c512709123afb1b894a953d35c9da3258a1249c71775d2452e91bc8aa1e_prof);

        
        $__internal_5498299ca48402be45cbb9999bad857090fa6ae077dd8c9d410839adba1cf1a4->leave($__internal_5498299ca48402be45cbb9999bad857090fa6ae077dd8c9d410839adba1cf1a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e9acffb08e4c8b707a37f4ef847493eae9c81e30bd6664f262c3b91399bd9be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e9acffb08e4c8b707a37f4ef847493eae9c81e30bd6664f262c3b91399bd9be->enter($__internal_4e9acffb08e4c8b707a37f4ef847493eae9c81e30bd6664f262c3b91399bd9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2a855f9b6e7e60e9b736c4bfd063cd36974fa8e555b2ce3893ae039d160ae656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a855f9b6e7e60e9b736c4bfd063cd36974fa8e555b2ce3893ae039d160ae656->enter($__internal_2a855f9b6e7e60e9b736c4bfd063cd36974fa8e555b2ce3893ae039d160ae656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2a855f9b6e7e60e9b736c4bfd063cd36974fa8e555b2ce3893ae039d160ae656->leave($__internal_2a855f9b6e7e60e9b736c4bfd063cd36974fa8e555b2ce3893ae039d160ae656_prof);

        
        $__internal_4e9acffb08e4c8b707a37f4ef847493eae9c81e30bd6664f262c3b91399bd9be->leave($__internal_4e9acffb08e4c8b707a37f4ef847493eae9c81e30bd6664f262c3b91399bd9be_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ceafc58b95974a4e34c5a6b6356d0df183ec08b303ab447906008624d2004ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceafc58b95974a4e34c5a6b6356d0df183ec08b303ab447906008624d2004ba7->enter($__internal_ceafc58b95974a4e34c5a6b6356d0df183ec08b303ab447906008624d2004ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_20bb9dac65803d6c3e254573131b50d5b69d4f5ca0cac7ac1b5a60be2f203baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bb9dac65803d6c3e254573131b50d5b69d4f5ca0cac7ac1b5a60be2f203baa->enter($__internal_20bb9dac65803d6c3e254573131b50d5b69d4f5ca0cac7ac1b5a60be2f203baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_20bb9dac65803d6c3e254573131b50d5b69d4f5ca0cac7ac1b5a60be2f203baa->leave($__internal_20bb9dac65803d6c3e254573131b50d5b69d4f5ca0cac7ac1b5a60be2f203baa_prof);

        
        $__internal_ceafc58b95974a4e34c5a6b6356d0df183ec08b303ab447906008624d2004ba7->leave($__internal_ceafc58b95974a4e34c5a6b6356d0df183ec08b303ab447906008624d2004ba7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5239d9bfafd704cb1c4490d52c531759a87364f8fa35fde0f26882380281cbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5239d9bfafd704cb1c4490d52c531759a87364f8fa35fde0f26882380281cbf->enter($__internal_e5239d9bfafd704cb1c4490d52c531759a87364f8fa35fde0f26882380281cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1d78764d34fabd716f8e696465371f67cbb4d426468d30ee904b0187ec70180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d78764d34fabd716f8e696465371f67cbb4d426468d30ee904b0187ec70180->enter($__internal_e1d78764d34fabd716f8e696465371f67cbb4d426468d30ee904b0187ec70180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e1d78764d34fabd716f8e696465371f67cbb4d426468d30ee904b0187ec70180->leave($__internal_e1d78764d34fabd716f8e696465371f67cbb4d426468d30ee904b0187ec70180_prof);

        
        $__internal_e5239d9bfafd704cb1c4490d52c531759a87364f8fa35fde0f26882380281cbf->leave($__internal_e5239d9bfafd704cb1c4490d52c531759a87364f8fa35fde0f26882380281cbf_prof);

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
