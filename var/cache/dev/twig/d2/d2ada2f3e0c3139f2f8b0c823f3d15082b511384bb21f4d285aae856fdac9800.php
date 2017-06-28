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
        $__internal_c750cacf6a41c445498b4fe33f4e76610170a4fe2765223cba5e4c7d56c10154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c750cacf6a41c445498b4fe33f4e76610170a4fe2765223cba5e4c7d56c10154->enter($__internal_c750cacf6a41c445498b4fe33f4e76610170a4fe2765223cba5e4c7d56c10154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_cce7b78f1f95312eaab8c378b015b0119b93d1a628ec38e13e6aedc5de78401e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce7b78f1f95312eaab8c378b015b0119b93d1a628ec38e13e6aedc5de78401e->enter($__internal_cce7b78f1f95312eaab8c378b015b0119b93d1a628ec38e13e6aedc5de78401e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_c750cacf6a41c445498b4fe33f4e76610170a4fe2765223cba5e4c7d56c10154->leave($__internal_c750cacf6a41c445498b4fe33f4e76610170a4fe2765223cba5e4c7d56c10154_prof);

        
        $__internal_cce7b78f1f95312eaab8c378b015b0119b93d1a628ec38e13e6aedc5de78401e->leave($__internal_cce7b78f1f95312eaab8c378b015b0119b93d1a628ec38e13e6aedc5de78401e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e13383ba522ec9c63498394ae3bc950d881193aed1eb7bb28340148a1490e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e13383ba522ec9c63498394ae3bc950d881193aed1eb7bb28340148a1490e68->enter($__internal_9e13383ba522ec9c63498394ae3bc950d881193aed1eb7bb28340148a1490e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a7a72e901871a3e356f24442041a4784187db574e81dd46aa207d0513c95998a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a72e901871a3e356f24442041a4784187db574e81dd46aa207d0513c95998a->enter($__internal_a7a72e901871a3e356f24442041a4784187db574e81dd46aa207d0513c95998a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a7a72e901871a3e356f24442041a4784187db574e81dd46aa207d0513c95998a->leave($__internal_a7a72e901871a3e356f24442041a4784187db574e81dd46aa207d0513c95998a_prof);

        
        $__internal_9e13383ba522ec9c63498394ae3bc950d881193aed1eb7bb28340148a1490e68->leave($__internal_9e13383ba522ec9c63498394ae3bc950d881193aed1eb7bb28340148a1490e68_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_db610f0f5012e052c70ff4a46eda4305ae40c2e3f14b94131d076e7c8c46b1ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db610f0f5012e052c70ff4a46eda4305ae40c2e3f14b94131d076e7c8c46b1ac->enter($__internal_db610f0f5012e052c70ff4a46eda4305ae40c2e3f14b94131d076e7c8c46b1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_43f9890f8e0ebb905069199db6347dd4f6aebce0866d4c28b5f92ed284d7234c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f9890f8e0ebb905069199db6347dd4f6aebce0866d4c28b5f92ed284d7234c->enter($__internal_43f9890f8e0ebb905069199db6347dd4f6aebce0866d4c28b5f92ed284d7234c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_43f9890f8e0ebb905069199db6347dd4f6aebce0866d4c28b5f92ed284d7234c->leave($__internal_43f9890f8e0ebb905069199db6347dd4f6aebce0866d4c28b5f92ed284d7234c_prof);

        
        $__internal_db610f0f5012e052c70ff4a46eda4305ae40c2e3f14b94131d076e7c8c46b1ac->leave($__internal_db610f0f5012e052c70ff4a46eda4305ae40c2e3f14b94131d076e7c8c46b1ac_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7736306cfdb3d8603d1ef5b9ca9225f607d66f859d7465171a8f490a2a16896c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7736306cfdb3d8603d1ef5b9ca9225f607d66f859d7465171a8f490a2a16896c->enter($__internal_7736306cfdb3d8603d1ef5b9ca9225f607d66f859d7465171a8f490a2a16896c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d5dd19c88e1d6f82638907a477ed6727736393743aeb7aad8105eafa35a5d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5dd19c88e1d6f82638907a477ed6727736393743aeb7aad8105eafa35a5d4c->enter($__internal_5d5dd19c88e1d6f82638907a477ed6727736393743aeb7aad8105eafa35a5d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5d5dd19c88e1d6f82638907a477ed6727736393743aeb7aad8105eafa35a5d4c->leave($__internal_5d5dd19c88e1d6f82638907a477ed6727736393743aeb7aad8105eafa35a5d4c_prof);

        
        $__internal_7736306cfdb3d8603d1ef5b9ca9225f607d66f859d7465171a8f490a2a16896c->leave($__internal_7736306cfdb3d8603d1ef5b9ca9225f607d66f859d7465171a8f490a2a16896c_prof);

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
