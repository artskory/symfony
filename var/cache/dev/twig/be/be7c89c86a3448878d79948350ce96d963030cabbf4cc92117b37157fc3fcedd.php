<?php

/* :catalogue:new.html.twig */
class __TwigTemplate_20ded906b21b9067a1033bcb5572ea674d24540087b316dec703959398b0e1ea extends Twig_Template
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
        $__internal_ab467c448ee51873fe383b42e1e3aaf4a27ede3469f1957320d0a452b5bbc496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab467c448ee51873fe383b42e1e3aaf4a27ede3469f1957320d0a452b5bbc496->enter($__internal_ab467c448ee51873fe383b42e1e3aaf4a27ede3469f1957320d0a452b5bbc496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:new.html.twig"));

        $__internal_754e10e6d50b0f88b9f8a3d553cad86ac9327762ab7404a2f51a2ba0527f4198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_754e10e6d50b0f88b9f8a3d553cad86ac9327762ab7404a2f51a2ba0527f4198->enter($__internal_754e10e6d50b0f88b9f8a3d553cad86ac9327762ab7404a2f51a2ba0527f4198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:new.html.twig"));

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
        
        $__internal_ab467c448ee51873fe383b42e1e3aaf4a27ede3469f1957320d0a452b5bbc496->leave($__internal_ab467c448ee51873fe383b42e1e3aaf4a27ede3469f1957320d0a452b5bbc496_prof);

        
        $__internal_754e10e6d50b0f88b9f8a3d553cad86ac9327762ab7404a2f51a2ba0527f4198->leave($__internal_754e10e6d50b0f88b9f8a3d553cad86ac9327762ab7404a2f51a2ba0527f4198_prof);

    }

    public function getTemplateName()
    {
        return ":catalogue:new.html.twig";
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
", ":catalogue:new.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/catalogue/new.html.twig");
    }
}
