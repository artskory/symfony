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
        $__internal_054bba75f2ef8c36361e12781e8ea87638c229d3534b3700340ae63ba53cc880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054bba75f2ef8c36361e12781e8ea87638c229d3534b3700340ae63ba53cc880->enter($__internal_054bba75f2ef8c36361e12781e8ea87638c229d3534b3700340ae63ba53cc880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_866b664cc3d1d1dbc4d90646a99eca63af1e834879e717f730c60413f97349e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866b664cc3d1d1dbc4d90646a99eca63af1e834879e717f730c60413f97349e7->enter($__internal_866b664cc3d1d1dbc4d90646a99eca63af1e834879e717f730c60413f97349e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_054bba75f2ef8c36361e12781e8ea87638c229d3534b3700340ae63ba53cc880->leave($__internal_054bba75f2ef8c36361e12781e8ea87638c229d3534b3700340ae63ba53cc880_prof);

        
        $__internal_866b664cc3d1d1dbc4d90646a99eca63af1e834879e717f730c60413f97349e7->leave($__internal_866b664cc3d1d1dbc4d90646a99eca63af1e834879e717f730c60413f97349e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f46ac654cd67d202ebd5b9158c337a3330ae1dc0b220c17eb124c4be676f28dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46ac654cd67d202ebd5b9158c337a3330ae1dc0b220c17eb124c4be676f28dc->enter($__internal_f46ac654cd67d202ebd5b9158c337a3330ae1dc0b220c17eb124c4be676f28dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9ec0f2c08f8df9a913787e049e65590272a8f33f74fc0aecf585acd3252b981c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec0f2c08f8df9a913787e049e65590272a8f33f74fc0aecf585acd3252b981c->enter($__internal_9ec0f2c08f8df9a913787e049e65590272a8f33f74fc0aecf585acd3252b981c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9ec0f2c08f8df9a913787e049e65590272a8f33f74fc0aecf585acd3252b981c->leave($__internal_9ec0f2c08f8df9a913787e049e65590272a8f33f74fc0aecf585acd3252b981c_prof);

        
        $__internal_f46ac654cd67d202ebd5b9158c337a3330ae1dc0b220c17eb124c4be676f28dc->leave($__internal_f46ac654cd67d202ebd5b9158c337a3330ae1dc0b220c17eb124c4be676f28dc_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1400b8c36a7ee61a6c615ecdba53a8d3c3978106dde14b03445e1c70884e8a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1400b8c36a7ee61a6c615ecdba53a8d3c3978106dde14b03445e1c70884e8a7->enter($__internal_a1400b8c36a7ee61a6c615ecdba53a8d3c3978106dde14b03445e1c70884e8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_66a3afd67f0d307ad8c88aaa5b7696647bad7825c1919397924e53d0c205f807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a3afd67f0d307ad8c88aaa5b7696647bad7825c1919397924e53d0c205f807->enter($__internal_66a3afd67f0d307ad8c88aaa5b7696647bad7825c1919397924e53d0c205f807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_66a3afd67f0d307ad8c88aaa5b7696647bad7825c1919397924e53d0c205f807->leave($__internal_66a3afd67f0d307ad8c88aaa5b7696647bad7825c1919397924e53d0c205f807_prof);

        
        $__internal_a1400b8c36a7ee61a6c615ecdba53a8d3c3978106dde14b03445e1c70884e8a7->leave($__internal_a1400b8c36a7ee61a6c615ecdba53a8d3c3978106dde14b03445e1c70884e8a7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9974c3b6474d2a8f316806daedc6f2d339056d4699ee280c9ea373464231710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9974c3b6474d2a8f316806daedc6f2d339056d4699ee280c9ea373464231710->enter($__internal_b9974c3b6474d2a8f316806daedc6f2d339056d4699ee280c9ea373464231710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c49b3a917e42f7591867918d67fb7e0b3c2539a92e3bb2a04346443e1be06f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49b3a917e42f7591867918d67fb7e0b3c2539a92e3bb2a04346443e1be06f46->enter($__internal_c49b3a917e42f7591867918d67fb7e0b3c2539a92e3bb2a04346443e1be06f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_c49b3a917e42f7591867918d67fb7e0b3c2539a92e3bb2a04346443e1be06f46->leave($__internal_c49b3a917e42f7591867918d67fb7e0b3c2539a92e3bb2a04346443e1be06f46_prof);

        
        $__internal_b9974c3b6474d2a8f316806daedc6f2d339056d4699ee280c9ea373464231710->leave($__internal_b9974c3b6474d2a8f316806daedc6f2d339056d4699ee280c9ea373464231710_prof);

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
