<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_31b2cfc546513b0312611267b9b0746bdaadb4ab2e097ecd0af8289c619a3c1c extends Twig_Template
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
        $__internal_3fd2be25317ec438b3932c4c8b2d3bf36a0baf1da0f01a8c3d55666e234968e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd2be25317ec438b3932c4c8b2d3bf36a0baf1da0f01a8c3d55666e234968e8->enter($__internal_3fd2be25317ec438b3932c4c8b2d3bf36a0baf1da0f01a8c3d55666e234968e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e32caa459cce48e9d41ace79ddac38429909ba82869af246166395b293b8e08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32caa459cce48e9d41ace79ddac38429909ba82869af246166395b293b8e08c->enter($__internal_e32caa459cce48e9d41ace79ddac38429909ba82869af246166395b293b8e08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_3fd2be25317ec438b3932c4c8b2d3bf36a0baf1da0f01a8c3d55666e234968e8->leave($__internal_3fd2be25317ec438b3932c4c8b2d3bf36a0baf1da0f01a8c3d55666e234968e8_prof);

        
        $__internal_e32caa459cce48e9d41ace79ddac38429909ba82869af246166395b293b8e08c->leave($__internal_e32caa459cce48e9d41ace79ddac38429909ba82869af246166395b293b8e08c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_872ad45b645506f55762594fa9fc363648509fedb4d405c3a46a53b78728c65d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872ad45b645506f55762594fa9fc363648509fedb4d405c3a46a53b78728c65d->enter($__internal_872ad45b645506f55762594fa9fc363648509fedb4d405c3a46a53b78728c65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5b962324dd180d0ce6975e04bebf3118bedb6f5d0472026fd483a2d5adff4456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b962324dd180d0ce6975e04bebf3118bedb6f5d0472026fd483a2d5adff4456->enter($__internal_5b962324dd180d0ce6975e04bebf3118bedb6f5d0472026fd483a2d5adff4456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5b962324dd180d0ce6975e04bebf3118bedb6f5d0472026fd483a2d5adff4456->leave($__internal_5b962324dd180d0ce6975e04bebf3118bedb6f5d0472026fd483a2d5adff4456_prof);

        
        $__internal_872ad45b645506f55762594fa9fc363648509fedb4d405c3a46a53b78728c65d->leave($__internal_872ad45b645506f55762594fa9fc363648509fedb4d405c3a46a53b78728c65d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a1d568a7b2762ff6e686247e2094ca82ab8f1e7c586f70a077d45088fd9cfb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a1d568a7b2762ff6e686247e2094ca82ab8f1e7c586f70a077d45088fd9cfb8->enter($__internal_1a1d568a7b2762ff6e686247e2094ca82ab8f1e7c586f70a077d45088fd9cfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2e553e138b35fb886047c3735895cc1e4806ff65a0d077fca333780a1cbb4bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e553e138b35fb886047c3735895cc1e4806ff65a0d077fca333780a1cbb4bf8->enter($__internal_2e553e138b35fb886047c3735895cc1e4806ff65a0d077fca333780a1cbb4bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2e553e138b35fb886047c3735895cc1e4806ff65a0d077fca333780a1cbb4bf8->leave($__internal_2e553e138b35fb886047c3735895cc1e4806ff65a0d077fca333780a1cbb4bf8_prof);

        
        $__internal_1a1d568a7b2762ff6e686247e2094ca82ab8f1e7c586f70a077d45088fd9cfb8->leave($__internal_1a1d568a7b2762ff6e686247e2094ca82ab8f1e7c586f70a077d45088fd9cfb8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_26f07d3261872cbf582cca91aa93ff16d9af47256a38a6b97f6c06cbc32e3645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f07d3261872cbf582cca91aa93ff16d9af47256a38a6b97f6c06cbc32e3645->enter($__internal_26f07d3261872cbf582cca91aa93ff16d9af47256a38a6b97f6c06cbc32e3645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2b15f43cb60bad40ba0fa4708a254c4155ed89efc711bdef5292c2929d8cb88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b15f43cb60bad40ba0fa4708a254c4155ed89efc711bdef5292c2929d8cb88->enter($__internal_a2b15f43cb60bad40ba0fa4708a254c4155ed89efc711bdef5292c2929d8cb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a2b15f43cb60bad40ba0fa4708a254c4155ed89efc711bdef5292c2929d8cb88->leave($__internal_a2b15f43cb60bad40ba0fa4708a254c4155ed89efc711bdef5292c2929d8cb88_prof);

        
        $__internal_26f07d3261872cbf582cca91aa93ff16d9af47256a38a6b97f6c06cbc32e3645->leave($__internal_26f07d3261872cbf582cca91aa93ff16d9af47256a38a6b97f6c06cbc32e3645_prof);

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
