<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_8cbd5557029ac7bd9447c37af9a81f551b23983520d6d86beeee1815e4a2086b extends Twig_Template
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
        $__internal_5b579bf9558d04f65d769957b6c85fd1bccbacbcc31a0110afd6846e4229be56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b579bf9558d04f65d769957b6c85fd1bccbacbcc31a0110afd6846e4229be56->enter($__internal_5b579bf9558d04f65d769957b6c85fd1bccbacbcc31a0110afd6846e4229be56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_9e64fbb8a6471e962930f60afdbc5c44efcca7112e6e59749a4a684e73a7b8df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e64fbb8a6471e962930f60afdbc5c44efcca7112e6e59749a4a684e73a7b8df->enter($__internal_9e64fbb8a6471e962930f60afdbc5c44efcca7112e6e59749a4a684e73a7b8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_5b579bf9558d04f65d769957b6c85fd1bccbacbcc31a0110afd6846e4229be56->leave($__internal_5b579bf9558d04f65d769957b6c85fd1bccbacbcc31a0110afd6846e4229be56_prof);

        
        $__internal_9e64fbb8a6471e962930f60afdbc5c44efcca7112e6e59749a4a684e73a7b8df->leave($__internal_9e64fbb8a6471e962930f60afdbc5c44efcca7112e6e59749a4a684e73a7b8df_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_61c3d1730556a65ecd5fd238541c11b98e801ac9dd41813ead3dde2fbe4d217e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c3d1730556a65ecd5fd238541c11b98e801ac9dd41813ead3dde2fbe4d217e->enter($__internal_61c3d1730556a65ecd5fd238541c11b98e801ac9dd41813ead3dde2fbe4d217e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e37f995bb5e8dd6c64b1894cadf8a14c9cafb608062bd2a65bbeb98e4fa2df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e37f995bb5e8dd6c64b1894cadf8a14c9cafb608062bd2a65bbeb98e4fa2df0->enter($__internal_2e37f995bb5e8dd6c64b1894cadf8a14c9cafb608062bd2a65bbeb98e4fa2df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2e37f995bb5e8dd6c64b1894cadf8a14c9cafb608062bd2a65bbeb98e4fa2df0->leave($__internal_2e37f995bb5e8dd6c64b1894cadf8a14c9cafb608062bd2a65bbeb98e4fa2df0_prof);

        
        $__internal_61c3d1730556a65ecd5fd238541c11b98e801ac9dd41813ead3dde2fbe4d217e->leave($__internal_61c3d1730556a65ecd5fd238541c11b98e801ac9dd41813ead3dde2fbe4d217e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0de77f7729dc7049200c35a579b25b77e2475eade24714789a2132bd66e00d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de77f7729dc7049200c35a579b25b77e2475eade24714789a2132bd66e00d34->enter($__internal_0de77f7729dc7049200c35a579b25b77e2475eade24714789a2132bd66e00d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d6dbb22b2ea3008a2660f016d2c905ffe405d97250f6ee9285a8f2d57bb7156c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6dbb22b2ea3008a2660f016d2c905ffe405d97250f6ee9285a8f2d57bb7156c->enter($__internal_d6dbb22b2ea3008a2660f016d2c905ffe405d97250f6ee9285a8f2d57bb7156c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d6dbb22b2ea3008a2660f016d2c905ffe405d97250f6ee9285a8f2d57bb7156c->leave($__internal_d6dbb22b2ea3008a2660f016d2c905ffe405d97250f6ee9285a8f2d57bb7156c_prof);

        
        $__internal_0de77f7729dc7049200c35a579b25b77e2475eade24714789a2132bd66e00d34->leave($__internal_0de77f7729dc7049200c35a579b25b77e2475eade24714789a2132bd66e00d34_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3089dcbeb4575e86e5bcb62d80d9b2eba7c9d36e33b0375f13863e28233176b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3089dcbeb4575e86e5bcb62d80d9b2eba7c9d36e33b0375f13863e28233176b7->enter($__internal_3089dcbeb4575e86e5bcb62d80d9b2eba7c9d36e33b0375f13863e28233176b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3a57b81614758fd150c7e2a88496ac52b7e7b83056d4966c1ededcb307cd3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a57b81614758fd150c7e2a88496ac52b7e7b83056d4966c1ededcb307cd3ff->enter($__internal_e3a57b81614758fd150c7e2a88496ac52b7e7b83056d4966c1ededcb307cd3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e3a57b81614758fd150c7e2a88496ac52b7e7b83056d4966c1ededcb307cd3ff->leave($__internal_e3a57b81614758fd150c7e2a88496ac52b7e7b83056d4966c1ededcb307cd3ff_prof);

        
        $__internal_3089dcbeb4575e86e5bcb62d80d9b2eba7c9d36e33b0375f13863e28233176b7->leave($__internal_3089dcbeb4575e86e5bcb62d80d9b2eba7c9d36e33b0375f13863e28233176b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
