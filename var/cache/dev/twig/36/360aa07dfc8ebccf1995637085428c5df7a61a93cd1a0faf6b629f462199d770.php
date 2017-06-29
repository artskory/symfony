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
        $__internal_7719a7401d0ed23632c9bb17639af603b366bf097a2be2d2d40e8683c741d431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7719a7401d0ed23632c9bb17639af603b366bf097a2be2d2d40e8683c741d431->enter($__internal_7719a7401d0ed23632c9bb17639af603b366bf097a2be2d2d40e8683c741d431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_29e8f1a20d0e9cbd4547ff5e6d2eb4a941c95a32ce56f99d730a1fd3e1781ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e8f1a20d0e9cbd4547ff5e6d2eb4a941c95a32ce56f99d730a1fd3e1781ca6->enter($__internal_29e8f1a20d0e9cbd4547ff5e6d2eb4a941c95a32ce56f99d730a1fd3e1781ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7719a7401d0ed23632c9bb17639af603b366bf097a2be2d2d40e8683c741d431->leave($__internal_7719a7401d0ed23632c9bb17639af603b366bf097a2be2d2d40e8683c741d431_prof);

        
        $__internal_29e8f1a20d0e9cbd4547ff5e6d2eb4a941c95a32ce56f99d730a1fd3e1781ca6->leave($__internal_29e8f1a20d0e9cbd4547ff5e6d2eb4a941c95a32ce56f99d730a1fd3e1781ca6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4972d92fa2987cef282855279fa13c1b41f28ab7c23acc2c0debcbb4f7fd2f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4972d92fa2987cef282855279fa13c1b41f28ab7c23acc2c0debcbb4f7fd2f19->enter($__internal_4972d92fa2987cef282855279fa13c1b41f28ab7c23acc2c0debcbb4f7fd2f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c21da338cf0a0e370f44ef01942cff2708b51343caceafca6bd3812fc119066f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21da338cf0a0e370f44ef01942cff2708b51343caceafca6bd3812fc119066f->enter($__internal_c21da338cf0a0e370f44ef01942cff2708b51343caceafca6bd3812fc119066f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c21da338cf0a0e370f44ef01942cff2708b51343caceafca6bd3812fc119066f->leave($__internal_c21da338cf0a0e370f44ef01942cff2708b51343caceafca6bd3812fc119066f_prof);

        
        $__internal_4972d92fa2987cef282855279fa13c1b41f28ab7c23acc2c0debcbb4f7fd2f19->leave($__internal_4972d92fa2987cef282855279fa13c1b41f28ab7c23acc2c0debcbb4f7fd2f19_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b07e2f70fed86a08dc5b1e673db693a98addf036126be1ce04c32a44992f2f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b07e2f70fed86a08dc5b1e673db693a98addf036126be1ce04c32a44992f2f8f->enter($__internal_b07e2f70fed86a08dc5b1e673db693a98addf036126be1ce04c32a44992f2f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb1310127016a19f887a85f253f2d603fe19d4ecd98a3a785d8ee16f12994788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1310127016a19f887a85f253f2d603fe19d4ecd98a3a785d8ee16f12994788->enter($__internal_fb1310127016a19f887a85f253f2d603fe19d4ecd98a3a785d8ee16f12994788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fb1310127016a19f887a85f253f2d603fe19d4ecd98a3a785d8ee16f12994788->leave($__internal_fb1310127016a19f887a85f253f2d603fe19d4ecd98a3a785d8ee16f12994788_prof);

        
        $__internal_b07e2f70fed86a08dc5b1e673db693a98addf036126be1ce04c32a44992f2f8f->leave($__internal_b07e2f70fed86a08dc5b1e673db693a98addf036126be1ce04c32a44992f2f8f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_727cd48853b2d2705564e421194cef725d1f5b02302abce66b59d5cc9c831f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_727cd48853b2d2705564e421194cef725d1f5b02302abce66b59d5cc9c831f4e->enter($__internal_727cd48853b2d2705564e421194cef725d1f5b02302abce66b59d5cc9c831f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e366573a60e73082d91c5ec6c3e640f2daf4aa6906a19f0b09a5bd483fb3da1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e366573a60e73082d91c5ec6c3e640f2daf4aa6906a19f0b09a5bd483fb3da1b->enter($__internal_e366573a60e73082d91c5ec6c3e640f2daf4aa6906a19f0b09a5bd483fb3da1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_e366573a60e73082d91c5ec6c3e640f2daf4aa6906a19f0b09a5bd483fb3da1b->leave($__internal_e366573a60e73082d91c5ec6c3e640f2daf4aa6906a19f0b09a5bd483fb3da1b_prof);

        
        $__internal_727cd48853b2d2705564e421194cef725d1f5b02302abce66b59d5cc9c831f4e->leave($__internal_727cd48853b2d2705564e421194cef725d1f5b02302abce66b59d5cc9c831f4e_prof);

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
