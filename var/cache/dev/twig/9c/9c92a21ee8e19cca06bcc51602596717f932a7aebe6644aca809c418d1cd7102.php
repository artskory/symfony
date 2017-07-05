<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_ee092630bc4ba88fd834b2e7334eae2c24a758ebb1da5a05b3b020568a478ebf extends Twig_Template
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
        $__internal_385905e68d9d07e7d42b3146bf12c0c4bc7b8f5eb5a59305fd22896259274d87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_385905e68d9d07e7d42b3146bf12c0c4bc7b8f5eb5a59305fd22896259274d87->enter($__internal_385905e68d9d07e7d42b3146bf12c0c4bc7b8f5eb5a59305fd22896259274d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_36117e69c9318f0b4db60ad014dfd141902154cb46d13575f398c9672274e6c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36117e69c9318f0b4db60ad014dfd141902154cb46d13575f398c9672274e6c7->enter($__internal_36117e69c9318f0b4db60ad014dfd141902154cb46d13575f398c9672274e6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_385905e68d9d07e7d42b3146bf12c0c4bc7b8f5eb5a59305fd22896259274d87->leave($__internal_385905e68d9d07e7d42b3146bf12c0c4bc7b8f5eb5a59305fd22896259274d87_prof);

        
        $__internal_36117e69c9318f0b4db60ad014dfd141902154cb46d13575f398c9672274e6c7->leave($__internal_36117e69c9318f0b4db60ad014dfd141902154cb46d13575f398c9672274e6c7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a79500eb5cd34b9b157b85ab60f846e5a50ebddd9c49d7900256caa6d763c669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79500eb5cd34b9b157b85ab60f846e5a50ebddd9c49d7900256caa6d763c669->enter($__internal_a79500eb5cd34b9b157b85ab60f846e5a50ebddd9c49d7900256caa6d763c669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67f21affc4eea6ef0b014c7aa5a07687625a1db2f844a7ebbc210c98b57dceea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f21affc4eea6ef0b014c7aa5a07687625a1db2f844a7ebbc210c98b57dceea->enter($__internal_67f21affc4eea6ef0b014c7aa5a07687625a1db2f844a7ebbc210c98b57dceea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_67f21affc4eea6ef0b014c7aa5a07687625a1db2f844a7ebbc210c98b57dceea->leave($__internal_67f21affc4eea6ef0b014c7aa5a07687625a1db2f844a7ebbc210c98b57dceea_prof);

        
        $__internal_a79500eb5cd34b9b157b85ab60f846e5a50ebddd9c49d7900256caa6d763c669->leave($__internal_a79500eb5cd34b9b157b85ab60f846e5a50ebddd9c49d7900256caa6d763c669_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b4e6bff4b440ce6524a8d1375a619116469f136eb3f124efbcd322b2eac054c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b4e6bff4b440ce6524a8d1375a619116469f136eb3f124efbcd322b2eac054c->enter($__internal_8b4e6bff4b440ce6524a8d1375a619116469f136eb3f124efbcd322b2eac054c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b005e096c5422d3e129d4c967aae387e014a2565e57078c4389ac515962df3dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b005e096c5422d3e129d4c967aae387e014a2565e57078c4389ac515962df3dd->enter($__internal_b005e096c5422d3e129d4c967aae387e014a2565e57078c4389ac515962df3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b005e096c5422d3e129d4c967aae387e014a2565e57078c4389ac515962df3dd->leave($__internal_b005e096c5422d3e129d4c967aae387e014a2565e57078c4389ac515962df3dd_prof);

        
        $__internal_8b4e6bff4b440ce6524a8d1375a619116469f136eb3f124efbcd322b2eac054c->leave($__internal_8b4e6bff4b440ce6524a8d1375a619116469f136eb3f124efbcd322b2eac054c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_066e0b921d7a75876423e270044e7ff4e7aa7f69e3a8bc14db81fbe2e8b5b00e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066e0b921d7a75876423e270044e7ff4e7aa7f69e3a8bc14db81fbe2e8b5b00e->enter($__internal_066e0b921d7a75876423e270044e7ff4e7aa7f69e3a8bc14db81fbe2e8b5b00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_116891e7795e05e0b056d02f267fa62c3231ae96578d7bf339a2d2c84bd5705a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116891e7795e05e0b056d02f267fa62c3231ae96578d7bf339a2d2c84bd5705a->enter($__internal_116891e7795e05e0b056d02f267fa62c3231ae96578d7bf339a2d2c84bd5705a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_116891e7795e05e0b056d02f267fa62c3231ae96578d7bf339a2d2c84bd5705a->leave($__internal_116891e7795e05e0b056d02f267fa62c3231ae96578d7bf339a2d2c84bd5705a_prof);

        
        $__internal_066e0b921d7a75876423e270044e7ff4e7aa7f69e3a8bc14db81fbe2e8b5b00e->leave($__internal_066e0b921d7a75876423e270044e7ff4e7aa7f69e3a8bc14db81fbe2e8b5b00e_prof);

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
