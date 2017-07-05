<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c4b81a9350a054d27966e8f18a52909a8d9bac18cb5f2ecec35d24ac54b95938 extends Twig_Template
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
        $__internal_d5e026f70d68f09963599ade4640028fa8d97be1aa94bb02088f9806e4fbe2de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5e026f70d68f09963599ade4640028fa8d97be1aa94bb02088f9806e4fbe2de->enter($__internal_d5e026f70d68f09963599ade4640028fa8d97be1aa94bb02088f9806e4fbe2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_bece987449fd14bcf65a19a49c088aee6a511318c78dbad7915854b8dba61fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bece987449fd14bcf65a19a49c088aee6a511318c78dbad7915854b8dba61fff->enter($__internal_bece987449fd14bcf65a19a49c088aee6a511318c78dbad7915854b8dba61fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5e026f70d68f09963599ade4640028fa8d97be1aa94bb02088f9806e4fbe2de->leave($__internal_d5e026f70d68f09963599ade4640028fa8d97be1aa94bb02088f9806e4fbe2de_prof);

        
        $__internal_bece987449fd14bcf65a19a49c088aee6a511318c78dbad7915854b8dba61fff->leave($__internal_bece987449fd14bcf65a19a49c088aee6a511318c78dbad7915854b8dba61fff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a1b069e8824d5d50e73c21bcfca3676fd0196d5ea44634a79f9d8862186c0dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b069e8824d5d50e73c21bcfca3676fd0196d5ea44634a79f9d8862186c0dba->enter($__internal_a1b069e8824d5d50e73c21bcfca3676fd0196d5ea44634a79f9d8862186c0dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b8ff08c0036f47cf04d205ec5a711fdd5fc546e37a30c080b58e43432f19effc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ff08c0036f47cf04d205ec5a711fdd5fc546e37a30c080b58e43432f19effc->enter($__internal_b8ff08c0036f47cf04d205ec5a711fdd5fc546e37a30c080b58e43432f19effc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b8ff08c0036f47cf04d205ec5a711fdd5fc546e37a30c080b58e43432f19effc->leave($__internal_b8ff08c0036f47cf04d205ec5a711fdd5fc546e37a30c080b58e43432f19effc_prof);

        
        $__internal_a1b069e8824d5d50e73c21bcfca3676fd0196d5ea44634a79f9d8862186c0dba->leave($__internal_a1b069e8824d5d50e73c21bcfca3676fd0196d5ea44634a79f9d8862186c0dba_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b7d17b2e473bbe08c26acbaad87d8290fbb210b92e4695357f5aba6ebf2fbb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b7d17b2e473bbe08c26acbaad87d8290fbb210b92e4695357f5aba6ebf2fbb0->enter($__internal_1b7d17b2e473bbe08c26acbaad87d8290fbb210b92e4695357f5aba6ebf2fbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e68b6b45ad5dccfa2ca294f7c5c194f6a7c755e16a94ce0e8565f2fce541713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e68b6b45ad5dccfa2ca294f7c5c194f6a7c755e16a94ce0e8565f2fce541713->enter($__internal_2e68b6b45ad5dccfa2ca294f7c5c194f6a7c755e16a94ce0e8565f2fce541713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2e68b6b45ad5dccfa2ca294f7c5c194f6a7c755e16a94ce0e8565f2fce541713->leave($__internal_2e68b6b45ad5dccfa2ca294f7c5c194f6a7c755e16a94ce0e8565f2fce541713_prof);

        
        $__internal_1b7d17b2e473bbe08c26acbaad87d8290fbb210b92e4695357f5aba6ebf2fbb0->leave($__internal_1b7d17b2e473bbe08c26acbaad87d8290fbb210b92e4695357f5aba6ebf2fbb0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc083698eeee19ef6bc584d3f41f4fd2e0274fa53fb19caa83902463f330a8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc083698eeee19ef6bc584d3f41f4fd2e0274fa53fb19caa83902463f330a8c4->enter($__internal_dc083698eeee19ef6bc584d3f41f4fd2e0274fa53fb19caa83902463f330a8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2f46dbdd2ec23d73e9dc45db8464570672d26123ae99a204854a965c51048b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f46dbdd2ec23d73e9dc45db8464570672d26123ae99a204854a965c51048b3->enter($__internal_c2f46dbdd2ec23d73e9dc45db8464570672d26123ae99a204854a965c51048b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_c2f46dbdd2ec23d73e9dc45db8464570672d26123ae99a204854a965c51048b3->leave($__internal_c2f46dbdd2ec23d73e9dc45db8464570672d26123ae99a204854a965c51048b3_prof);

        
        $__internal_dc083698eeee19ef6bc584d3f41f4fd2e0274fa53fb19caa83902463f330a8c4->leave($__internal_dc083698eeee19ef6bc584d3f41f4fd2e0274fa53fb19caa83902463f330a8c4_prof);

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
