<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f970bd181bf13e4b0d036d14f1da581c6e936f061640510ea75a5962c914e160 extends Twig_Template
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
        $__internal_952c3b0b8a17793d90744ba79471231d9953cb4f1edcbb49cf1cdf6f3dcd540e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952c3b0b8a17793d90744ba79471231d9953cb4f1edcbb49cf1cdf6f3dcd540e->enter($__internal_952c3b0b8a17793d90744ba79471231d9953cb4f1edcbb49cf1cdf6f3dcd540e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_90d3e7762fa239b97a95658bb88b8e5ebef224abf784ec874b83c6d03c13786c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d3e7762fa239b97a95658bb88b8e5ebef224abf784ec874b83c6d03c13786c->enter($__internal_90d3e7762fa239b97a95658bb88b8e5ebef224abf784ec874b83c6d03c13786c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_952c3b0b8a17793d90744ba79471231d9953cb4f1edcbb49cf1cdf6f3dcd540e->leave($__internal_952c3b0b8a17793d90744ba79471231d9953cb4f1edcbb49cf1cdf6f3dcd540e_prof);

        
        $__internal_90d3e7762fa239b97a95658bb88b8e5ebef224abf784ec874b83c6d03c13786c->leave($__internal_90d3e7762fa239b97a95658bb88b8e5ebef224abf784ec874b83c6d03c13786c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5277b1b7727e827d7e95c9c614ae0aa43b8f84d8c4550840bd8d8ed0ec2a1417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5277b1b7727e827d7e95c9c614ae0aa43b8f84d8c4550840bd8d8ed0ec2a1417->enter($__internal_5277b1b7727e827d7e95c9c614ae0aa43b8f84d8c4550840bd8d8ed0ec2a1417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cc6079841f4c7a138f26eade33f2c4dc28351e23b7829a0ae5cf0d53edbb01c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6079841f4c7a138f26eade33f2c4dc28351e23b7829a0ae5cf0d53edbb01c8->enter($__internal_cc6079841f4c7a138f26eade33f2c4dc28351e23b7829a0ae5cf0d53edbb01c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cc6079841f4c7a138f26eade33f2c4dc28351e23b7829a0ae5cf0d53edbb01c8->leave($__internal_cc6079841f4c7a138f26eade33f2c4dc28351e23b7829a0ae5cf0d53edbb01c8_prof);

        
        $__internal_5277b1b7727e827d7e95c9c614ae0aa43b8f84d8c4550840bd8d8ed0ec2a1417->leave($__internal_5277b1b7727e827d7e95c9c614ae0aa43b8f84d8c4550840bd8d8ed0ec2a1417_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_34bb0d9db80bec8b078fcdfde2a806cb91cfebcc83b2503647550667ed745988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34bb0d9db80bec8b078fcdfde2a806cb91cfebcc83b2503647550667ed745988->enter($__internal_34bb0d9db80bec8b078fcdfde2a806cb91cfebcc83b2503647550667ed745988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_82d06ad60176de7e865786f444105ae5b5cd391550400fb9f0caad6a220a5a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d06ad60176de7e865786f444105ae5b5cd391550400fb9f0caad6a220a5a69->enter($__internal_82d06ad60176de7e865786f444105ae5b5cd391550400fb9f0caad6a220a5a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_82d06ad60176de7e865786f444105ae5b5cd391550400fb9f0caad6a220a5a69->leave($__internal_82d06ad60176de7e865786f444105ae5b5cd391550400fb9f0caad6a220a5a69_prof);

        
        $__internal_34bb0d9db80bec8b078fcdfde2a806cb91cfebcc83b2503647550667ed745988->leave($__internal_34bb0d9db80bec8b078fcdfde2a806cb91cfebcc83b2503647550667ed745988_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbcb9ac3cd75c2e888ca8d310027250fa287c68ae60da8b66f6ab152714a0e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbcb9ac3cd75c2e888ca8d310027250fa287c68ae60da8b66f6ab152714a0e8c->enter($__internal_bbcb9ac3cd75c2e888ca8d310027250fa287c68ae60da8b66f6ab152714a0e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77e36235f6f341ccbf9c4fd86297935d128ec0b24e36d315499914a32c0e2769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e36235f6f341ccbf9c4fd86297935d128ec0b24e36d315499914a32c0e2769->enter($__internal_77e36235f6f341ccbf9c4fd86297935d128ec0b24e36d315499914a32c0e2769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_77e36235f6f341ccbf9c4fd86297935d128ec0b24e36d315499914a32c0e2769->leave($__internal_77e36235f6f341ccbf9c4fd86297935d128ec0b24e36d315499914a32c0e2769_prof);

        
        $__internal_bbcb9ac3cd75c2e888ca8d310027250fa287c68ae60da8b66f6ab152714a0e8c->leave($__internal_bbcb9ac3cd75c2e888ca8d310027250fa287c68ae60da8b66f6ab152714a0e8c_prof);

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
