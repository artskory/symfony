<?php

/* blog/footer.html.twig */
class __TwigTemplate_87b20b44006e0d1f9edb78a6a9637fe81cd99864e155a06fa2fa94199cbc3f16 extends Twig_Template
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
        $__internal_c21a3d7be64677e48e033e1a9284f4222532d08e3cc9c264b1e38789aa5b4ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21a3d7be64677e48e033e1a9284f4222532d08e3cc9c264b1e38789aa5b4ed0->enter($__internal_c21a3d7be64677e48e033e1a9284f4222532d08e3cc9c264b1e38789aa5b4ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/footer.html.twig"));

        $__internal_2047499cbf413132f071ffdb384173d027ee2f46072a5863d8fe77d5e7678c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2047499cbf413132f071ffdb384173d027ee2f46072a5863d8fe77d5e7678c93->enter($__internal_2047499cbf413132f071ffdb384173d027ee2f46072a5863d8fe77d5e7678c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/footer.html.twig"));

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
        
        $__internal_c21a3d7be64677e48e033e1a9284f4222532d08e3cc9c264b1e38789aa5b4ed0->leave($__internal_c21a3d7be64677e48e033e1a9284f4222532d08e3cc9c264b1e38789aa5b4ed0_prof);

        
        $__internal_2047499cbf413132f071ffdb384173d027ee2f46072a5863d8fe77d5e7678c93->leave($__internal_2047499cbf413132f071ffdb384173d027ee2f46072a5863d8fe77d5e7678c93_prof);

    }

    public function getTemplateName()
    {
        return "blog/footer.html.twig";
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
</div>", "blog/footer.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\blog\\footer.html.twig");
    }
}