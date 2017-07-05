<?php

/* blog/traduction.html.twig */
class __TwigTemplate_08ab588c5f5fbb92c61e9c37f0c257291151c9b5ca378d3c87c487d9779ad0ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":blog:layout.html.twig", "blog/traduction.html.twig", 1);
        $this->blocks = array(
            'body_layout' => array($this, 'block_body_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":blog:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fb97eb97b66fc3ff2eb45ee83a8e21cc14906939ad1a839a8b796074af15aa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb97eb97b66fc3ff2eb45ee83a8e21cc14906939ad1a839a8b796074af15aa7->enter($__internal_0fb97eb97b66fc3ff2eb45ee83a8e21cc14906939ad1a839a8b796074af15aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/traduction.html.twig"));

        $__internal_5fe60ac7833d45d6eb4131bcbb358cd5447f7405b2f5f819dce813333984a7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe60ac7833d45d6eb4131bcbb358cd5447f7405b2f5f819dce813333984a7df->enter($__internal_5fe60ac7833d45d6eb4131bcbb358cd5447f7405b2f5f819dce813333984a7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/traduction.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fb97eb97b66fc3ff2eb45ee83a8e21cc14906939ad1a839a8b796074af15aa7->leave($__internal_0fb97eb97b66fc3ff2eb45ee83a8e21cc14906939ad1a839a8b796074af15aa7_prof);

        
        $__internal_5fe60ac7833d45d6eb4131bcbb358cd5447f7405b2f5f819dce813333984a7df->leave($__internal_5fe60ac7833d45d6eb4131bcbb358cd5447f7405b2f5f819dce813333984a7df_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_3511c054d3d28d493d34589d5e507dc4f2a930bfd1ef09566bdb2a87cc7a40ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3511c054d3d28d493d34589d5e507dc4f2a930bfd1ef09566bdb2a87cc7a40ad->enter($__internal_3511c054d3d28d493d34589d5e507dc4f2a930bfd1ef09566bdb2a87cc7a40ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_8b3ff0094c99d3663b30ab5747cd80724448c0be5848ca72d8e74b2a8e88d366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3ff0094c99d3663b30ab5747cd80724448c0be5848ca72d8e74b2a8e88d366->enter($__internal_8b3ff0094c99d3663b30ab5747cd80724448c0be5848ca72d8e74b2a8e88d366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "        <article>
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message"), "html", null, true);
        echo " / ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("message", array(), "messages");
        // line 6
        echo "        <hr>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("texte.hello"), "html", null, true);
        echo "
        <hr>
        ";
        // line 9
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 10
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("texte.personnel", array("%nom%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()))), "html", null, true);
            echo "
        ";
        }
        // line 12
        echo "        <hr>
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("texte.pluriel", 13), "html", null, true);
        echo "
        <br>
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("texte.pluriel", 1), "html", null, true);
        echo "
        <hr>
        ";
        // line 17
        echo "messageController";
        echo "
        <hr>
        ";
        // line 19
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, ($context["date"] ?? $this->getContext($context, "date")), "full", "short"), "html", null, true);
        echo "
        </article>
        
        <fotter>
            <a href='";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("trad_blog", array("_locale" => "fr"));
        echo "'>FR</a> |
            <a href='";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("trad_blog", array("_locale" => "en"));
        echo "'>EN</a>
        </fotter>
     
    ";
        
        $__internal_8b3ff0094c99d3663b30ab5747cd80724448c0be5848ca72d8e74b2a8e88d366->leave($__internal_8b3ff0094c99d3663b30ab5747cd80724448c0be5848ca72d8e74b2a8e88d366_prof);

        
        $__internal_3511c054d3d28d493d34589d5e507dc4f2a930bfd1ef09566bdb2a87cc7a40ad->leave($__internal_3511c054d3d28d493d34589d5e507dc4f2a930bfd1ef09566bdb2a87cc7a40ad_prof);

    }

    public function getTemplateName()
    {
        return "blog/traduction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 24,  97 => 23,  90 => 19,  85 => 17,  80 => 15,  75 => 13,  72 => 12,  66 => 10,  64 => 9,  59 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":blog:layout.html.twig\" %}

    {% block body_layout %}
        <article>
        {{ 'message'|trans }} / {% trans %} message {% endtrans %}
        <hr>
        {{ 'texte.hello'|trans }}
        <hr>
        {% if app.user %}
        {{ 'texte.personnel'|trans({'%nom%':app.user.username}) }}
        {% endif %}
        <hr>
        {{ 'texte.pluriel'|transchoice(13) }}
        <br>
        {{ 'texte.pluriel'|transchoice(1) }}
        <hr>
        {{ 'messageController' }}
        <hr>
        {{ date|localizeddate('full','short') }}
        </article>
        
        <fotter>
            <a href='{{ path('trad_blog',{_locale:'fr'}) }}'>FR</a> |
            <a href='{{ path('trad_blog',{_locale:'en'}) }}'>EN</a>
        </fotter>
     
    {% endblock%}

", "blog/traduction.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\blog\\traduction.html.twig");
    }
}
