<?php

/* :blog:footer.html.twig */
class __TwigTemplate_72dbff01aae75481abc4b54d259f0aa39fc8ee8abdb3ad955e773bb0eae1dbc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d533fb943ee94b11a9871952e97baee1133ca653a5ea99b9cc959b5e6ad8dc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d533fb943ee94b11a9871952e97baee1133ca653a5ea99b9cc959b5e6ad8dc9->enter($__internal_2d533fb943ee94b11a9871952e97baee1133ca653a5ea99b9cc959b5e6ad8dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:footer.html.twig"));

        $__internal_4fe77d5dd6b44decdf9acc1bd52cb44a9634ba107756d42da2402e6587208abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe77d5dd6b44decdf9acc1bd52cb44a9634ba107756d42da2402e6587208abb->enter($__internal_4fe77d5dd6b44decdf9acc1bd52cb44a9634ba107756d42da2402e6587208abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:footer.html.twig"));

        // line 1
        echo "Dernier articles
<div class=\"jumbotron\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 4
            echo "        <h6>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</h6>
        <em>le ";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d m Y"), "html", null, true);
            echo "</em>
        <p>";
            // line 6
            echo $this->getAttribute($context["article"], "contenu", array());
            echo "</p> 
        <hr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</div>";
        
        $__internal_2d533fb943ee94b11a9871952e97baee1133ca653a5ea99b9cc959b5e6ad8dc9->leave($__internal_2d533fb943ee94b11a9871952e97baee1133ca653a5ea99b9cc959b5e6ad8dc9_prof);

        
        $__internal_4fe77d5dd6b44decdf9acc1bd52cb44a9634ba107756d42da2402e6587208abb->leave($__internal_4fe77d5dd6b44decdf9acc1bd52cb44a9634ba107756d42da2402e6587208abb_prof);

    }

    public function getTemplateName()
    {
        return ":blog:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  42 => 6,  38 => 5,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Dernier articles
<div class=\"jumbotron\">
    {% for article in articles %}
        <h6>{{ article.titre }}</h6>
        <em>le {{ article.date | date('d m Y') }}</em>
        <p>{{ article.contenu | raw }}</p> 
        <hr>
    {% endfor %}
</div>", ":blog:footer.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/blog/footer.html.twig");
    }
}
