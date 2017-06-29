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
        $__internal_6f722327d5febde0ceb2c0b3813420af2e29857e9e56dfa442229e794b3c5dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f722327d5febde0ceb2c0b3813420af2e29857e9e56dfa442229e794b3c5dea->enter($__internal_6f722327d5febde0ceb2c0b3813420af2e29857e9e56dfa442229e794b3c5dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:new.html.twig"));

        $__internal_3f37f79f72bdf409d9f27063bb48435be27bd688027e5592ee0af3de5e35aff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f37f79f72bdf409d9f27063bb48435be27bd688027e5592ee0af3de5e35aff3->enter($__internal_3f37f79f72bdf409d9f27063bb48435be27bd688027e5592ee0af3de5e35aff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:new.html.twig"));

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
        
        $__internal_6f722327d5febde0ceb2c0b3813420af2e29857e9e56dfa442229e794b3c5dea->leave($__internal_6f722327d5febde0ceb2c0b3813420af2e29857e9e56dfa442229e794b3c5dea_prof);

        
        $__internal_3f37f79f72bdf409d9f27063bb48435be27bd688027e5592ee0af3de5e35aff3->leave($__internal_3f37f79f72bdf409d9f27063bb48435be27bd688027e5592ee0af3de5e35aff3_prof);

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
