<?php

/* :blog:traduction.html.twig */
class __TwigTemplate_2fe312cef742493084f493ef46ada27eddc09505d73593aa5ada0aae5697870b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":blog:layout.html.twig", ":blog:traduction.html.twig", 1);
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
        $__internal_af4002347f83c3cadcb0d26fa0b5b71d7ccf534f5273a1ad4c02d6c570fa76b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4002347f83c3cadcb0d26fa0b5b71d7ccf534f5273a1ad4c02d6c570fa76b4->enter($__internal_af4002347f83c3cadcb0d26fa0b5b71d7ccf534f5273a1ad4c02d6c570fa76b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:traduction.html.twig"));

        $__internal_e50980547358154ca7625aa0e736e3c659aa8981e242424dd99cc4c454d72140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50980547358154ca7625aa0e736e3c659aa8981e242424dd99cc4c454d72140->enter($__internal_e50980547358154ca7625aa0e736e3c659aa8981e242424dd99cc4c454d72140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:traduction.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af4002347f83c3cadcb0d26fa0b5b71d7ccf534f5273a1ad4c02d6c570fa76b4->leave($__internal_af4002347f83c3cadcb0d26fa0b5b71d7ccf534f5273a1ad4c02d6c570fa76b4_prof);

        
        $__internal_e50980547358154ca7625aa0e736e3c659aa8981e242424dd99cc4c454d72140->leave($__internal_e50980547358154ca7625aa0e736e3c659aa8981e242424dd99cc4c454d72140_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_a6122d541e6035417ca26c07676ed3c94ba48a449f53a68560e46ea873ea3879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6122d541e6035417ca26c07676ed3c94ba48a449f53a68560e46ea873ea3879->enter($__internal_a6122d541e6035417ca26c07676ed3c94ba48a449f53a68560e46ea873ea3879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_8f94df9e4ac82e89ae49c5e738dc88a1644e0747982e04a45725b035e941d73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f94df9e4ac82e89ae49c5e738dc88a1644e0747982e04a45725b035e941d73e->enter($__internal_8f94df9e4ac82e89ae49c5e738dc88a1644e0747982e04a45725b035e941d73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_8f94df9e4ac82e89ae49c5e738dc88a1644e0747982e04a45725b035e941d73e->leave($__internal_8f94df9e4ac82e89ae49c5e738dc88a1644e0747982e04a45725b035e941d73e_prof);

        
        $__internal_a6122d541e6035417ca26c07676ed3c94ba48a449f53a68560e46ea873ea3879->leave($__internal_a6122d541e6035417ca26c07676ed3c94ba48a449f53a68560e46ea873ea3879_prof);

    }

    public function getTemplateName()
    {
        return ":blog:traduction.html.twig";
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

", ":blog:traduction.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/blog/traduction.html.twig");
    }
}
