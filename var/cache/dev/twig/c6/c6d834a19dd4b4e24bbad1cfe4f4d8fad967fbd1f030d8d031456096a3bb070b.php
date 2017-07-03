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
        $__internal_48357d7815f764165ba09a20c1012cea9c667c8a02ebda9247afaec53228cb30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48357d7815f764165ba09a20c1012cea9c667c8a02ebda9247afaec53228cb30->enter($__internal_48357d7815f764165ba09a20c1012cea9c667c8a02ebda9247afaec53228cb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4e9ef5ef00902b95a84dba13ce8f5fff1c28e74630139afe0079540abc9da591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9ef5ef00902b95a84dba13ce8f5fff1c28e74630139afe0079540abc9da591->enter($__internal_4e9ef5ef00902b95a84dba13ce8f5fff1c28e74630139afe0079540abc9da591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48357d7815f764165ba09a20c1012cea9c667c8a02ebda9247afaec53228cb30->leave($__internal_48357d7815f764165ba09a20c1012cea9c667c8a02ebda9247afaec53228cb30_prof);

        
        $__internal_4e9ef5ef00902b95a84dba13ce8f5fff1c28e74630139afe0079540abc9da591->leave($__internal_4e9ef5ef00902b95a84dba13ce8f5fff1c28e74630139afe0079540abc9da591_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_af203b93f38e7e63240d92df0c0bc8905ccc4f20ea5ef2293f2a3477bd788019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af203b93f38e7e63240d92df0c0bc8905ccc4f20ea5ef2293f2a3477bd788019->enter($__internal_af203b93f38e7e63240d92df0c0bc8905ccc4f20ea5ef2293f2a3477bd788019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4d4a07d91df933cf795434641323b6344ee60b814c1f4d0a38fb8873738818f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4a07d91df933cf795434641323b6344ee60b814c1f4d0a38fb8873738818f8->enter($__internal_4d4a07d91df933cf795434641323b6344ee60b814c1f4d0a38fb8873738818f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4d4a07d91df933cf795434641323b6344ee60b814c1f4d0a38fb8873738818f8->leave($__internal_4d4a07d91df933cf795434641323b6344ee60b814c1f4d0a38fb8873738818f8_prof);

        
        $__internal_af203b93f38e7e63240d92df0c0bc8905ccc4f20ea5ef2293f2a3477bd788019->leave($__internal_af203b93f38e7e63240d92df0c0bc8905ccc4f20ea5ef2293f2a3477bd788019_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8dee3166e8f4f314197019a37c81e7f87cff7c15067b5278ca3d42aab5a603b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dee3166e8f4f314197019a37c81e7f87cff7c15067b5278ca3d42aab5a603b5->enter($__internal_8dee3166e8f4f314197019a37c81e7f87cff7c15067b5278ca3d42aab5a603b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f426cafeaf1524bb2389c97f68a312fee65d7609927d1e6970f8318c546a24f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f426cafeaf1524bb2389c97f68a312fee65d7609927d1e6970f8318c546a24f9->enter($__internal_f426cafeaf1524bb2389c97f68a312fee65d7609927d1e6970f8318c546a24f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f426cafeaf1524bb2389c97f68a312fee65d7609927d1e6970f8318c546a24f9->leave($__internal_f426cafeaf1524bb2389c97f68a312fee65d7609927d1e6970f8318c546a24f9_prof);

        
        $__internal_8dee3166e8f4f314197019a37c81e7f87cff7c15067b5278ca3d42aab5a603b5->leave($__internal_8dee3166e8f4f314197019a37c81e7f87cff7c15067b5278ca3d42aab5a603b5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae2fdfe8a83010ec3e299f66941cb29f3d953d530e79c4db050336d08738bdb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2fdfe8a83010ec3e299f66941cb29f3d953d530e79c4db050336d08738bdb8->enter($__internal_ae2fdfe8a83010ec3e299f66941cb29f3d953d530e79c4db050336d08738bdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74a85c783a0d7376cec2226d5ac573f62c192a7836ed964108fdc9902b7d2c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a85c783a0d7376cec2226d5ac573f62c192a7836ed964108fdc9902b7d2c4e->enter($__internal_74a85c783a0d7376cec2226d5ac573f62c192a7836ed964108fdc9902b7d2c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_74a85c783a0d7376cec2226d5ac573f62c192a7836ed964108fdc9902b7d2c4e->leave($__internal_74a85c783a0d7376cec2226d5ac573f62c192a7836ed964108fdc9902b7d2c4e_prof);

        
        $__internal_ae2fdfe8a83010ec3e299f66941cb29f3d953d530e79c4db050336d08738bdb8->leave($__internal_ae2fdfe8a83010ec3e299f66941cb29f3d953d530e79c4db050336d08738bdb8_prof);

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
