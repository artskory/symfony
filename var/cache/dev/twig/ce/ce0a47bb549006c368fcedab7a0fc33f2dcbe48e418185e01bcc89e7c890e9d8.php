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
        $__internal_cf3691ce968a15a9c23893e90ce34c0db62a85fdd3dedbe680168c7dca5ea804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3691ce968a15a9c23893e90ce34c0db62a85fdd3dedbe680168c7dca5ea804->enter($__internal_cf3691ce968a15a9c23893e90ce34c0db62a85fdd3dedbe680168c7dca5ea804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_16e618befb3370f0807e9ca5fa31ee882e59fa2c47b9b7f09b4bb0b71214af25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e618befb3370f0807e9ca5fa31ee882e59fa2c47b9b7f09b4bb0b71214af25->enter($__internal_16e618befb3370f0807e9ca5fa31ee882e59fa2c47b9b7f09b4bb0b71214af25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_cf3691ce968a15a9c23893e90ce34c0db62a85fdd3dedbe680168c7dca5ea804->leave($__internal_cf3691ce968a15a9c23893e90ce34c0db62a85fdd3dedbe680168c7dca5ea804_prof);

        
        $__internal_16e618befb3370f0807e9ca5fa31ee882e59fa2c47b9b7f09b4bb0b71214af25->leave($__internal_16e618befb3370f0807e9ca5fa31ee882e59fa2c47b9b7f09b4bb0b71214af25_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2809444a45928c6ce4c4c065104329780a2b861be2851d9c3d354e78339a120d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2809444a45928c6ce4c4c065104329780a2b861be2851d9c3d354e78339a120d->enter($__internal_2809444a45928c6ce4c4c065104329780a2b861be2851d9c3d354e78339a120d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_52a3a79d1f19703e4ace95ee04d6ba83477de41ab81ba959e47ecb1744deb32e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a3a79d1f19703e4ace95ee04d6ba83477de41ab81ba959e47ecb1744deb32e->enter($__internal_52a3a79d1f19703e4ace95ee04d6ba83477de41ab81ba959e47ecb1744deb32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_52a3a79d1f19703e4ace95ee04d6ba83477de41ab81ba959e47ecb1744deb32e->leave($__internal_52a3a79d1f19703e4ace95ee04d6ba83477de41ab81ba959e47ecb1744deb32e_prof);

        
        $__internal_2809444a45928c6ce4c4c065104329780a2b861be2851d9c3d354e78339a120d->leave($__internal_2809444a45928c6ce4c4c065104329780a2b861be2851d9c3d354e78339a120d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1261721b1d23da2abf9a80762aac4bfd92f3d9cfdd3aa24b1befa19d354b6c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1261721b1d23da2abf9a80762aac4bfd92f3d9cfdd3aa24b1befa19d354b6c30->enter($__internal_1261721b1d23da2abf9a80762aac4bfd92f3d9cfdd3aa24b1befa19d354b6c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_51ff79e0359252232981faa74c1fece3a11b410da3039e1e5288af10b3c08e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ff79e0359252232981faa74c1fece3a11b410da3039e1e5288af10b3c08e87->enter($__internal_51ff79e0359252232981faa74c1fece3a11b410da3039e1e5288af10b3c08e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_51ff79e0359252232981faa74c1fece3a11b410da3039e1e5288af10b3c08e87->leave($__internal_51ff79e0359252232981faa74c1fece3a11b410da3039e1e5288af10b3c08e87_prof);

        
        $__internal_1261721b1d23da2abf9a80762aac4bfd92f3d9cfdd3aa24b1befa19d354b6c30->leave($__internal_1261721b1d23da2abf9a80762aac4bfd92f3d9cfdd3aa24b1befa19d354b6c30_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1a535f53458e563f873e9db7ad1a5b7c21807fdb84fc672061a8275a2fab7ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a535f53458e563f873e9db7ad1a5b7c21807fdb84fc672061a8275a2fab7ee->enter($__internal_a1a535f53458e563f873e9db7ad1a5b7c21807fdb84fc672061a8275a2fab7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e6b9fb7fcbbd9eff4b569bb617b1f775ba173cda15c51112a842084c71f2247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6b9fb7fcbbd9eff4b569bb617b1f775ba173cda15c51112a842084c71f2247->enter($__internal_0e6b9fb7fcbbd9eff4b569bb617b1f775ba173cda15c51112a842084c71f2247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0e6b9fb7fcbbd9eff4b569bb617b1f775ba173cda15c51112a842084c71f2247->leave($__internal_0e6b9fb7fcbbd9eff4b569bb617b1f775ba173cda15c51112a842084c71f2247_prof);

        
        $__internal_a1a535f53458e563f873e9db7ad1a5b7c21807fdb84fc672061a8275a2fab7ee->leave($__internal_a1a535f53458e563f873e9db7ad1a5b7c21807fdb84fc672061a8275a2fab7ee_prof);

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
