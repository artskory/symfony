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
        $__internal_93026187b13e2ee70fc1bd112d97fcd7aa74501c46eccbaac5b04b28eeefa5ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93026187b13e2ee70fc1bd112d97fcd7aa74501c46eccbaac5b04b28eeefa5ce->enter($__internal_93026187b13e2ee70fc1bd112d97fcd7aa74501c46eccbaac5b04b28eeefa5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_82586295bedae1ffbbdc96a8138888db4760794dc55d069caafea01f7497a54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82586295bedae1ffbbdc96a8138888db4760794dc55d069caafea01f7497a54e->enter($__internal_82586295bedae1ffbbdc96a8138888db4760794dc55d069caafea01f7497a54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93026187b13e2ee70fc1bd112d97fcd7aa74501c46eccbaac5b04b28eeefa5ce->leave($__internal_93026187b13e2ee70fc1bd112d97fcd7aa74501c46eccbaac5b04b28eeefa5ce_prof);

        
        $__internal_82586295bedae1ffbbdc96a8138888db4760794dc55d069caafea01f7497a54e->leave($__internal_82586295bedae1ffbbdc96a8138888db4760794dc55d069caafea01f7497a54e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9314fbe9029412b2a4a160e3652d4101d59d81a5b335c421861e434d0be53b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9314fbe9029412b2a4a160e3652d4101d59d81a5b335c421861e434d0be53b2b->enter($__internal_9314fbe9029412b2a4a160e3652d4101d59d81a5b335c421861e434d0be53b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_959591351e13e9fc5042cf70be29726a43c12014df0d881a8518cb9b4c52be18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959591351e13e9fc5042cf70be29726a43c12014df0d881a8518cb9b4c52be18->enter($__internal_959591351e13e9fc5042cf70be29726a43c12014df0d881a8518cb9b4c52be18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_959591351e13e9fc5042cf70be29726a43c12014df0d881a8518cb9b4c52be18->leave($__internal_959591351e13e9fc5042cf70be29726a43c12014df0d881a8518cb9b4c52be18_prof);

        
        $__internal_9314fbe9029412b2a4a160e3652d4101d59d81a5b335c421861e434d0be53b2b->leave($__internal_9314fbe9029412b2a4a160e3652d4101d59d81a5b335c421861e434d0be53b2b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cbe41de7f8e04a129a1a0449e7e53cf42259363a369bfb926fda5fd34e00df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cbe41de7f8e04a129a1a0449e7e53cf42259363a369bfb926fda5fd34e00df4->enter($__internal_9cbe41de7f8e04a129a1a0449e7e53cf42259363a369bfb926fda5fd34e00df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0a850181aa90718fe59e81d43a975056e148c69e008283e4494d91df6226829d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a850181aa90718fe59e81d43a975056e148c69e008283e4494d91df6226829d->enter($__internal_0a850181aa90718fe59e81d43a975056e148c69e008283e4494d91df6226829d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0a850181aa90718fe59e81d43a975056e148c69e008283e4494d91df6226829d->leave($__internal_0a850181aa90718fe59e81d43a975056e148c69e008283e4494d91df6226829d_prof);

        
        $__internal_9cbe41de7f8e04a129a1a0449e7e53cf42259363a369bfb926fda5fd34e00df4->leave($__internal_9cbe41de7f8e04a129a1a0449e7e53cf42259363a369bfb926fda5fd34e00df4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a7cee9fd8ee8d9c3c800a80c1569dd5243728f5af71e3a65d3cb1ca473772a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a7cee9fd8ee8d9c3c800a80c1569dd5243728f5af71e3a65d3cb1ca473772a8->enter($__internal_7a7cee9fd8ee8d9c3c800a80c1569dd5243728f5af71e3a65d3cb1ca473772a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d5e4fd94bb2be9f7dfcddfa48e7c3d1285f621f748012c7f812ec2d5d3e2372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5e4fd94bb2be9f7dfcddfa48e7c3d1285f621f748012c7f812ec2d5d3e2372->enter($__internal_4d5e4fd94bb2be9f7dfcddfa48e7c3d1285f621f748012c7f812ec2d5d3e2372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4d5e4fd94bb2be9f7dfcddfa48e7c3d1285f621f748012c7f812ec2d5d3e2372->leave($__internal_4d5e4fd94bb2be9f7dfcddfa48e7c3d1285f621f748012c7f812ec2d5d3e2372_prof);

        
        $__internal_7a7cee9fd8ee8d9c3c800a80c1569dd5243728f5af71e3a65d3cb1ca473772a8->leave($__internal_7a7cee9fd8ee8d9c3c800a80c1569dd5243728f5af71e3a65d3cb1ca473772a8_prof);

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
