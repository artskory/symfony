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
        $__internal_65be9361117b08df70a80e32762555bc916d905c9a52404bfab4353b585c8a2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65be9361117b08df70a80e32762555bc916d905c9a52404bfab4353b585c8a2e->enter($__internal_65be9361117b08df70a80e32762555bc916d905c9a52404bfab4353b585c8a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5b163d71882016ae8aa53aec5695332c0feb04fd263023b7af96d5e67cc005d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b163d71882016ae8aa53aec5695332c0feb04fd263023b7af96d5e67cc005d3->enter($__internal_5b163d71882016ae8aa53aec5695332c0feb04fd263023b7af96d5e67cc005d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_65be9361117b08df70a80e32762555bc916d905c9a52404bfab4353b585c8a2e->leave($__internal_65be9361117b08df70a80e32762555bc916d905c9a52404bfab4353b585c8a2e_prof);

        
        $__internal_5b163d71882016ae8aa53aec5695332c0feb04fd263023b7af96d5e67cc005d3->leave($__internal_5b163d71882016ae8aa53aec5695332c0feb04fd263023b7af96d5e67cc005d3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e14f1823a19f34fc089c6b2e4d9043e1562ebc3e9f697d2c9bfe92d39d2eda21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14f1823a19f34fc089c6b2e4d9043e1562ebc3e9f697d2c9bfe92d39d2eda21->enter($__internal_e14f1823a19f34fc089c6b2e4d9043e1562ebc3e9f697d2c9bfe92d39d2eda21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ff6feda27998a9a45f3e13442cd130dcf0e5bd1e534d5340775f4f91eeefea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff6feda27998a9a45f3e13442cd130dcf0e5bd1e534d5340775f4f91eeefea7->enter($__internal_3ff6feda27998a9a45f3e13442cd130dcf0e5bd1e534d5340775f4f91eeefea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3ff6feda27998a9a45f3e13442cd130dcf0e5bd1e534d5340775f4f91eeefea7->leave($__internal_3ff6feda27998a9a45f3e13442cd130dcf0e5bd1e534d5340775f4f91eeefea7_prof);

        
        $__internal_e14f1823a19f34fc089c6b2e4d9043e1562ebc3e9f697d2c9bfe92d39d2eda21->leave($__internal_e14f1823a19f34fc089c6b2e4d9043e1562ebc3e9f697d2c9bfe92d39d2eda21_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_562df61269c5a3b46fb02b7fc5ebfee2c4475745f09a8e3ee719a38ed2f1de95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562df61269c5a3b46fb02b7fc5ebfee2c4475745f09a8e3ee719a38ed2f1de95->enter($__internal_562df61269c5a3b46fb02b7fc5ebfee2c4475745f09a8e3ee719a38ed2f1de95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_83ccadd135df9723d6949c77b515b6c538ee1ac7737df0d6b1e124aae1b794e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ccadd135df9723d6949c77b515b6c538ee1ac7737df0d6b1e124aae1b794e4->enter($__internal_83ccadd135df9723d6949c77b515b6c538ee1ac7737df0d6b1e124aae1b794e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_83ccadd135df9723d6949c77b515b6c538ee1ac7737df0d6b1e124aae1b794e4->leave($__internal_83ccadd135df9723d6949c77b515b6c538ee1ac7737df0d6b1e124aae1b794e4_prof);

        
        $__internal_562df61269c5a3b46fb02b7fc5ebfee2c4475745f09a8e3ee719a38ed2f1de95->leave($__internal_562df61269c5a3b46fb02b7fc5ebfee2c4475745f09a8e3ee719a38ed2f1de95_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc40d4d8f88d4d1d8bd2220252406228fd24bb37f80a548e65858ece707b967a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc40d4d8f88d4d1d8bd2220252406228fd24bb37f80a548e65858ece707b967a->enter($__internal_dc40d4d8f88d4d1d8bd2220252406228fd24bb37f80a548e65858ece707b967a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_479a2864d94d9a8b9164e480677f7af7c8935f6a0c19be7d9cb98c26c7f8b4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479a2864d94d9a8b9164e480677f7af7c8935f6a0c19be7d9cb98c26c7f8b4e9->enter($__internal_479a2864d94d9a8b9164e480677f7af7c8935f6a0c19be7d9cb98c26c7f8b4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_479a2864d94d9a8b9164e480677f7af7c8935f6a0c19be7d9cb98c26c7f8b4e9->leave($__internal_479a2864d94d9a8b9164e480677f7af7c8935f6a0c19be7d9cb98c26c7f8b4e9_prof);

        
        $__internal_dc40d4d8f88d4d1d8bd2220252406228fd24bb37f80a548e65858ece707b967a->leave($__internal_dc40d4d8f88d4d1d8bd2220252406228fd24bb37f80a548e65858ece707b967a_prof);

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
