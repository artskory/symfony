<?php

/* catalogue/new.html.twig */
class __TwigTemplate_c5af58ffc5c644f046c3db4ae150747e2e7429c38a81ba986a23e6bb03056847 extends Twig_Template
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
        $__internal_e2eba21f9b9a61fa406944d2a734462fae354846d9d3f5f61d73bf021122ca76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2eba21f9b9a61fa406944d2a734462fae354846d9d3f5f61d73bf021122ca76->enter($__internal_e2eba21f9b9a61fa406944d2a734462fae354846d9d3f5f61d73bf021122ca76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/new.html.twig"));

        $__internal_161b42975aacc7ffaacc160f0e437d720faf53f8846470212d7b729c8c5590ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161b42975aacc7ffaacc160f0e437d720faf53f8846470212d7b729c8c5590ab->enter($__internal_161b42975aacc7ffaacc160f0e437d720faf53f8846470212d7b729c8c5590ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/new.html.twig"));

        // line 1
        echo "<div class=\"jumbotron\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 3
            echo "        <h6><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_catalogue", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "titre", array()), "html", null, true);
            echo "</a></h6>
        <hr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</div>
";
        
        $__internal_e2eba21f9b9a61fa406944d2a734462fae354846d9d3f5f61d73bf021122ca76->leave($__internal_e2eba21f9b9a61fa406944d2a734462fae354846d9d3f5f61d73bf021122ca76_prof);

        
        $__internal_161b42975aacc7ffaacc160f0e437d720faf53f8846470212d7b729c8c5590ab->leave($__internal_161b42975aacc7ffaacc160f0e437d720faf53f8846470212d7b729c8c5590ab_prof);

    }

    public function getTemplateName()
    {
        return "catalogue/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">
    {% for produit in produits %}
        <h6><a href=\"{{ path('detail_catalogue', {id:produit.id}) }}\">{{ produit.titre }}</a></h6>
        <hr>
    {% endfor %}
</div>
", "catalogue/new.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\catalogue\\new.html.twig");
    }
}
