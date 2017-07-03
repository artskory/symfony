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
        $__internal_1901c8b0fc06c7f4fae567e857a57cd903ce4d66c4b4c1cfee767277e1503914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1901c8b0fc06c7f4fae567e857a57cd903ce4d66c4b4c1cfee767277e1503914->enter($__internal_1901c8b0fc06c7f4fae567e857a57cd903ce4d66c4b4c1cfee767277e1503914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_e16da400d7ff0c8716841b3bae6f0a0d02bb7408ac100287c5afb6eef06703e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16da400d7ff0c8716841b3bae6f0a0d02bb7408ac100287c5afb6eef06703e9->enter($__internal_e16da400d7ff0c8716841b3bae6f0a0d02bb7408ac100287c5afb6eef06703e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_1901c8b0fc06c7f4fae567e857a57cd903ce4d66c4b4c1cfee767277e1503914->leave($__internal_1901c8b0fc06c7f4fae567e857a57cd903ce4d66c4b4c1cfee767277e1503914_prof);

        
        $__internal_e16da400d7ff0c8716841b3bae6f0a0d02bb7408ac100287c5afb6eef06703e9->leave($__internal_e16da400d7ff0c8716841b3bae6f0a0d02bb7408ac100287c5afb6eef06703e9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f1631fd752f4fb913e8992f044b6bd1f5c222357b61fb4a0b9bb4973d2ed0cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f1631fd752f4fb913e8992f044b6bd1f5c222357b61fb4a0b9bb4973d2ed0cd->enter($__internal_8f1631fd752f4fb913e8992f044b6bd1f5c222357b61fb4a0b9bb4973d2ed0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8bf48c5c0c21e1ec759e3b2a2ce5244148cb8bbf2bb0f599a0112660662bdf47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf48c5c0c21e1ec759e3b2a2ce5244148cb8bbf2bb0f599a0112660662bdf47->enter($__internal_8bf48c5c0c21e1ec759e3b2a2ce5244148cb8bbf2bb0f599a0112660662bdf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8bf48c5c0c21e1ec759e3b2a2ce5244148cb8bbf2bb0f599a0112660662bdf47->leave($__internal_8bf48c5c0c21e1ec759e3b2a2ce5244148cb8bbf2bb0f599a0112660662bdf47_prof);

        
        $__internal_8f1631fd752f4fb913e8992f044b6bd1f5c222357b61fb4a0b9bb4973d2ed0cd->leave($__internal_8f1631fd752f4fb913e8992f044b6bd1f5c222357b61fb4a0b9bb4973d2ed0cd_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b86ce40f22f4eb686b75e913909def2336027f5b26e525bbb1c85317bd203ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b86ce40f22f4eb686b75e913909def2336027f5b26e525bbb1c85317bd203ef->enter($__internal_5b86ce40f22f4eb686b75e913909def2336027f5b26e525bbb1c85317bd203ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1567b56884bb252f2601bc71eaa18d24b5be3749c7dbfc4cc184fad9c5fcee0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1567b56884bb252f2601bc71eaa18d24b5be3749c7dbfc4cc184fad9c5fcee0a->enter($__internal_1567b56884bb252f2601bc71eaa18d24b5be3749c7dbfc4cc184fad9c5fcee0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1567b56884bb252f2601bc71eaa18d24b5be3749c7dbfc4cc184fad9c5fcee0a->leave($__internal_1567b56884bb252f2601bc71eaa18d24b5be3749c7dbfc4cc184fad9c5fcee0a_prof);

        
        $__internal_5b86ce40f22f4eb686b75e913909def2336027f5b26e525bbb1c85317bd203ef->leave($__internal_5b86ce40f22f4eb686b75e913909def2336027f5b26e525bbb1c85317bd203ef_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b830bb9a56279ecdb0c7eb0a5b70cd0e7012ac7d11dd4eaa5a7ff50221e631ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b830bb9a56279ecdb0c7eb0a5b70cd0e7012ac7d11dd4eaa5a7ff50221e631ae->enter($__internal_b830bb9a56279ecdb0c7eb0a5b70cd0e7012ac7d11dd4eaa5a7ff50221e631ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a3594b0390a97e8335c8714e60d7223517e9b209e1a98c60b5e217608eed59d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3594b0390a97e8335c8714e60d7223517e9b209e1a98c60b5e217608eed59d->enter($__internal_7a3594b0390a97e8335c8714e60d7223517e9b209e1a98c60b5e217608eed59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7a3594b0390a97e8335c8714e60d7223517e9b209e1a98c60b5e217608eed59d->leave($__internal_7a3594b0390a97e8335c8714e60d7223517e9b209e1a98c60b5e217608eed59d_prof);

        
        $__internal_b830bb9a56279ecdb0c7eb0a5b70cd0e7012ac7d11dd4eaa5a7ff50221e631ae->leave($__internal_b830bb9a56279ecdb0c7eb0a5b70cd0e7012ac7d11dd4eaa5a7ff50221e631ae_prof);

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
