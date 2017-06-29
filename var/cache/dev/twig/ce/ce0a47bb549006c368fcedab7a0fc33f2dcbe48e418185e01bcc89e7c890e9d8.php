<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_13082f8a0bac457db5f3d0a320a6c4133d11ecae29c900f47f3f593a34e17618 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0b71c588841d237e65f4c0ddee5cfe1a3a27cde16971b45692a6fdc091e750e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b71c588841d237e65f4c0ddee5cfe1a3a27cde16971b45692a6fdc091e750e->enter($__internal_a0b71c588841d237e65f4c0ddee5cfe1a3a27cde16971b45692a6fdc091e750e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ef5bec5a3a8e85fbc544afeb0577da0f5ba28bfb963a3e5ed10e6e03f7b69b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5bec5a3a8e85fbc544afeb0577da0f5ba28bfb963a3e5ed10e6e03f7b69b89->enter($__internal_ef5bec5a3a8e85fbc544afeb0577da0f5ba28bfb963a3e5ed10e6e03f7b69b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a0b71c588841d237e65f4c0ddee5cfe1a3a27cde16971b45692a6fdc091e750e->leave($__internal_a0b71c588841d237e65f4c0ddee5cfe1a3a27cde16971b45692a6fdc091e750e_prof);

        
        $__internal_ef5bec5a3a8e85fbc544afeb0577da0f5ba28bfb963a3e5ed10e6e03f7b69b89->leave($__internal_ef5bec5a3a8e85fbc544afeb0577da0f5ba28bfb963a3e5ed10e6e03f7b69b89_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_af2ba1833e465cd474cc61f207d45a77cd6a41724ea9188eb9e9be533dea5b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2ba1833e465cd474cc61f207d45a77cd6a41724ea9188eb9e9be533dea5b56->enter($__internal_af2ba1833e465cd474cc61f207d45a77cd6a41724ea9188eb9e9be533dea5b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e7e5e5e9d27cf4a3577446e80a4d784f730d52b756b32329445e171f37b3ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7e5e5e9d27cf4a3577446e80a4d784f730d52b756b32329445e171f37b3ac5->enter($__internal_3e7e5e5e9d27cf4a3577446e80a4d784f730d52b756b32329445e171f37b3ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3e7e5e5e9d27cf4a3577446e80a4d784f730d52b756b32329445e171f37b3ac5->leave($__internal_3e7e5e5e9d27cf4a3577446e80a4d784f730d52b756b32329445e171f37b3ac5_prof);

        
        $__internal_af2ba1833e465cd474cc61f207d45a77cd6a41724ea9188eb9e9be533dea5b56->leave($__internal_af2ba1833e465cd474cc61f207d45a77cd6a41724ea9188eb9e9be533dea5b56_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_83c91e003d2f31cbcdad080de2a246af28d1cb40e0de137b8c1512608c785714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c91e003d2f31cbcdad080de2a246af28d1cb40e0de137b8c1512608c785714->enter($__internal_83c91e003d2f31cbcdad080de2a246af28d1cb40e0de137b8c1512608c785714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c64701648e2984df7af810b822934809c68081b087955e360845669f0d3f55b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64701648e2984df7af810b822934809c68081b087955e360845669f0d3f55b8->enter($__internal_c64701648e2984df7af810b822934809c68081b087955e360845669f0d3f55b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c64701648e2984df7af810b822934809c68081b087955e360845669f0d3f55b8->leave($__internal_c64701648e2984df7af810b822934809c68081b087955e360845669f0d3f55b8_prof);

        
        $__internal_83c91e003d2f31cbcdad080de2a246af28d1cb40e0de137b8c1512608c785714->leave($__internal_83c91e003d2f31cbcdad080de2a246af28d1cb40e0de137b8c1512608c785714_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a3b5906826e4e894ca5cb53ed3ee366a3e86aed391c6125f665ea1cf26eafb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a3b5906826e4e894ca5cb53ed3ee366a3e86aed391c6125f665ea1cf26eafb4->enter($__internal_7a3b5906826e4e894ca5cb53ed3ee366a3e86aed391c6125f665ea1cf26eafb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5a7fb23bea1638c91bd3ffb7d294470a66530ba14826890b30620a3e88640e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a7fb23bea1638c91bd3ffb7d294470a66530ba14826890b30620a3e88640e7->enter($__internal_c5a7fb23bea1638c91bd3ffb7d294470a66530ba14826890b30620a3e88640e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c5a7fb23bea1638c91bd3ffb7d294470a66530ba14826890b30620a3e88640e7->leave($__internal_c5a7fb23bea1638c91bd3ffb7d294470a66530ba14826890b30620a3e88640e7_prof);

        
        $__internal_7a3b5906826e4e894ca5cb53ed3ee366a3e86aed391c6125f665ea1cf26eafb4->leave($__internal_7a3b5906826e4e894ca5cb53ed3ee366a3e86aed391c6125f665ea1cf26eafb4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
