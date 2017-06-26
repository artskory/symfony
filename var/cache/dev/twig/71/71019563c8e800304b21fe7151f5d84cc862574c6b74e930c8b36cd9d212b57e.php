<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_85635fcd8980cf8f50a863cb062996652550c269f5704e767995d2df68da91f2 extends Twig_Template
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
        $__internal_274fd117dc990deffb1a8ebe69313e025be3fa275b162d1110c1c683c92a73f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274fd117dc990deffb1a8ebe69313e025be3fa275b162d1110c1c683c92a73f9->enter($__internal_274fd117dc990deffb1a8ebe69313e025be3fa275b162d1110c1c683c92a73f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_838b26ca899e44fd233fddfe0a7df3dd28ce5c252c6488f33c0847c089f28f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838b26ca899e44fd233fddfe0a7df3dd28ce5c252c6488f33c0847c089f28f91->enter($__internal_838b26ca899e44fd233fddfe0a7df3dd28ce5c252c6488f33c0847c089f28f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_274fd117dc990deffb1a8ebe69313e025be3fa275b162d1110c1c683c92a73f9->leave($__internal_274fd117dc990deffb1a8ebe69313e025be3fa275b162d1110c1c683c92a73f9_prof);

        
        $__internal_838b26ca899e44fd233fddfe0a7df3dd28ce5c252c6488f33c0847c089f28f91->leave($__internal_838b26ca899e44fd233fddfe0a7df3dd28ce5c252c6488f33c0847c089f28f91_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6cad75a51353fea9c202c53089b57d810b1584625eb58c62fca71b37603661d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6cad75a51353fea9c202c53089b57d810b1584625eb58c62fca71b37603661d->enter($__internal_c6cad75a51353fea9c202c53089b57d810b1584625eb58c62fca71b37603661d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_de3068a7535f3e8d5d37a1cc5691ff437bb79e9d4d446b7549aec98f93b352be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3068a7535f3e8d5d37a1cc5691ff437bb79e9d4d446b7549aec98f93b352be->enter($__internal_de3068a7535f3e8d5d37a1cc5691ff437bb79e9d4d446b7549aec98f93b352be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_de3068a7535f3e8d5d37a1cc5691ff437bb79e9d4d446b7549aec98f93b352be->leave($__internal_de3068a7535f3e8d5d37a1cc5691ff437bb79e9d4d446b7549aec98f93b352be_prof);

        
        $__internal_c6cad75a51353fea9c202c53089b57d810b1584625eb58c62fca71b37603661d->leave($__internal_c6cad75a51353fea9c202c53089b57d810b1584625eb58c62fca71b37603661d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_482691dc31869a702d59cc585354247328491b71df60710a58cdcb4d3af1c87c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_482691dc31869a702d59cc585354247328491b71df60710a58cdcb4d3af1c87c->enter($__internal_482691dc31869a702d59cc585354247328491b71df60710a58cdcb4d3af1c87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e269dc8ce87ab6986526a9b7029dbaf9e5c3ec76386219c617765d5116a6ca67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e269dc8ce87ab6986526a9b7029dbaf9e5c3ec76386219c617765d5116a6ca67->enter($__internal_e269dc8ce87ab6986526a9b7029dbaf9e5c3ec76386219c617765d5116a6ca67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e269dc8ce87ab6986526a9b7029dbaf9e5c3ec76386219c617765d5116a6ca67->leave($__internal_e269dc8ce87ab6986526a9b7029dbaf9e5c3ec76386219c617765d5116a6ca67_prof);

        
        $__internal_482691dc31869a702d59cc585354247328491b71df60710a58cdcb4d3af1c87c->leave($__internal_482691dc31869a702d59cc585354247328491b71df60710a58cdcb4d3af1c87c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f8aac6db17e1cf7f870f5c1a763503058b3d060b8de3de7ca907bc149940ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f8aac6db17e1cf7f870f5c1a763503058b3d060b8de3de7ca907bc149940ce2->enter($__internal_1f8aac6db17e1cf7f870f5c1a763503058b3d060b8de3de7ca907bc149940ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_441077bbc10baf662cab463dd0ddd3435fd85bd0098a286b71181d8731d51a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441077bbc10baf662cab463dd0ddd3435fd85bd0098a286b71181d8731d51a50->enter($__internal_441077bbc10baf662cab463dd0ddd3435fd85bd0098a286b71181d8731d51a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_441077bbc10baf662cab463dd0ddd3435fd85bd0098a286b71181d8731d51a50->leave($__internal_441077bbc10baf662cab463dd0ddd3435fd85bd0098a286b71181d8731d51a50_prof);

        
        $__internal_1f8aac6db17e1cf7f870f5c1a763503058b3d060b8de3de7ca907bc149940ce2->leave($__internal_1f8aac6db17e1cf7f870f5c1a763503058b3d060b8de3de7ca907bc149940ce2_prof);

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
