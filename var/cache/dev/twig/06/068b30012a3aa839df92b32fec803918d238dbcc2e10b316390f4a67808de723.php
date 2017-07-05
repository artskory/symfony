<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_953b7818a9d3a893bcaf668abcb39164f311862d5be826138b6dd02fd2737c64 extends Twig_Template
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
        $__internal_f0cbf83f99d0b7a2cc807c7610ef2993924e3b629bfcab5c822878ecd3501639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0cbf83f99d0b7a2cc807c7610ef2993924e3b629bfcab5c822878ecd3501639->enter($__internal_f0cbf83f99d0b7a2cc807c7610ef2993924e3b629bfcab5c822878ecd3501639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_660d0c1ee236f02b858c52c5d8ce61c4a5981aa3ca04aaf9b94e460bd72535e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660d0c1ee236f02b858c52c5d8ce61c4a5981aa3ca04aaf9b94e460bd72535e8->enter($__internal_660d0c1ee236f02b858c52c5d8ce61c4a5981aa3ca04aaf9b94e460bd72535e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_f0cbf83f99d0b7a2cc807c7610ef2993924e3b629bfcab5c822878ecd3501639->leave($__internal_f0cbf83f99d0b7a2cc807c7610ef2993924e3b629bfcab5c822878ecd3501639_prof);

        
        $__internal_660d0c1ee236f02b858c52c5d8ce61c4a5981aa3ca04aaf9b94e460bd72535e8->leave($__internal_660d0c1ee236f02b858c52c5d8ce61c4a5981aa3ca04aaf9b94e460bd72535e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d7ce981ac6c3eb8dd8d338d92cf004ade275c4e7c29649f1d6ee380c2b6cc24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7ce981ac6c3eb8dd8d338d92cf004ade275c4e7c29649f1d6ee380c2b6cc24->enter($__internal_2d7ce981ac6c3eb8dd8d338d92cf004ade275c4e7c29649f1d6ee380c2b6cc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e0ba0bea4ff7d18fce63a638ea78726c1c53d3d26f73af9a3f40e2f3a966473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0ba0bea4ff7d18fce63a638ea78726c1c53d3d26f73af9a3f40e2f3a966473->enter($__internal_8e0ba0bea4ff7d18fce63a638ea78726c1c53d3d26f73af9a3f40e2f3a966473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8e0ba0bea4ff7d18fce63a638ea78726c1c53d3d26f73af9a3f40e2f3a966473->leave($__internal_8e0ba0bea4ff7d18fce63a638ea78726c1c53d3d26f73af9a3f40e2f3a966473_prof);

        
        $__internal_2d7ce981ac6c3eb8dd8d338d92cf004ade275c4e7c29649f1d6ee380c2b6cc24->leave($__internal_2d7ce981ac6c3eb8dd8d338d92cf004ade275c4e7c29649f1d6ee380c2b6cc24_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b5f58eadd2dd727e2c5de37dc1381e762e2923976f11f9d83a75d80d21ec5d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f58eadd2dd727e2c5de37dc1381e762e2923976f11f9d83a75d80d21ec5d23->enter($__internal_b5f58eadd2dd727e2c5de37dc1381e762e2923976f11f9d83a75d80d21ec5d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d0394dc4fdae29c2c0fd8d297f1d057b825269810684205fa9f096b8a0775f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0394dc4fdae29c2c0fd8d297f1d057b825269810684205fa9f096b8a0775f86->enter($__internal_d0394dc4fdae29c2c0fd8d297f1d057b825269810684205fa9f096b8a0775f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d0394dc4fdae29c2c0fd8d297f1d057b825269810684205fa9f096b8a0775f86->leave($__internal_d0394dc4fdae29c2c0fd8d297f1d057b825269810684205fa9f096b8a0775f86_prof);

        
        $__internal_b5f58eadd2dd727e2c5de37dc1381e762e2923976f11f9d83a75d80d21ec5d23->leave($__internal_b5f58eadd2dd727e2c5de37dc1381e762e2923976f11f9d83a75d80d21ec5d23_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_948aa74e000d7b3de44277f2d466d1beba44fd1d391cbcad2071dcc66959cba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948aa74e000d7b3de44277f2d466d1beba44fd1d391cbcad2071dcc66959cba4->enter($__internal_948aa74e000d7b3de44277f2d466d1beba44fd1d391cbcad2071dcc66959cba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1bb1ae406995ba561ac2bfea9e7ecf3471e6eefa7251c8673e9149e4ac4e84f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb1ae406995ba561ac2bfea9e7ecf3471e6eefa7251c8673e9149e4ac4e84f3->enter($__internal_1bb1ae406995ba561ac2bfea9e7ecf3471e6eefa7251c8673e9149e4ac4e84f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1bb1ae406995ba561ac2bfea9e7ecf3471e6eefa7251c8673e9149e4ac4e84f3->leave($__internal_1bb1ae406995ba561ac2bfea9e7ecf3471e6eefa7251c8673e9149e4ac4e84f3_prof);

        
        $__internal_948aa74e000d7b3de44277f2d466d1beba44fd1d391cbcad2071dcc66959cba4->leave($__internal_948aa74e000d7b3de44277f2d466d1beba44fd1d391cbcad2071dcc66959cba4_prof);

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
