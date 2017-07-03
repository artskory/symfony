<?php

/* :catalogue:categorie.html.twig */
class __TwigTemplate_f708900c0db927ed15292ce046f84dcdeafa9954abec6801ff2c09cc4549d3e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":catalogue:layout.html.twig", ":catalogue:categorie.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_layout' => array($this, 'block_body_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":catalogue:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b04a391f4758a27a77f1509ee751c927712f8898015f32e7963f545c042e914d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b04a391f4758a27a77f1509ee751c927712f8898015f32e7963f545c042e914d->enter($__internal_b04a391f4758a27a77f1509ee751c927712f8898015f32e7963f545c042e914d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:categorie.html.twig"));

        $__internal_a4ffb7f4da994478374fbd7feeb310eb98b7f079dd49cbb64337b36160110360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ffb7f4da994478374fbd7feeb310eb98b7f079dd49cbb64337b36160110360->enter($__internal_a4ffb7f4da994478374fbd7feeb310eb98b7f079dd49cbb64337b36160110360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b04a391f4758a27a77f1509ee751c927712f8898015f32e7963f545c042e914d->leave($__internal_b04a391f4758a27a77f1509ee751c927712f8898015f32e7963f545c042e914d_prof);

        
        $__internal_a4ffb7f4da994478374fbd7feeb310eb98b7f079dd49cbb64337b36160110360->leave($__internal_a4ffb7f4da994478374fbd7feeb310eb98b7f079dd49cbb64337b36160110360_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b193aecd0617406761701b3073368931c8f2efab6e2d8c5d171b5db7065f666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b193aecd0617406761701b3073368931c8f2efab6e2d8c5d171b5db7065f666->enter($__internal_6b193aecd0617406761701b3073368931c8f2efab6e2d8c5d171b5db7065f666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_15d791e45942e788e592b6f1d75ba55ddb596ec8fc3f614845ef9e5f5f11e004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d791e45942e788e592b6f1d75ba55ddb596ec8fc3f614845ef9e5f5f11e004->enter($__internal_15d791e45942e788e592b6f1d75ba55ddb596ec8fc3f614845ef9e5f5f11e004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Categorie ";
        
        $__internal_15d791e45942e788e592b6f1d75ba55ddb596ec8fc3f614845ef9e5f5f11e004->leave($__internal_15d791e45942e788e592b6f1d75ba55ddb596ec8fc3f614845ef9e5f5f11e004_prof);

        
        $__internal_6b193aecd0617406761701b3073368931c8f2efab6e2d8c5d171b5db7065f666->leave($__internal_6b193aecd0617406761701b3073368931c8f2efab6e2d8c5d171b5db7065f666_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_f72e072f0bba97a04b55ee08de9a903a0972fb10c8de6770241dba5078e2123d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f72e072f0bba97a04b55ee08de9a903a0972fb10c8de6770241dba5078e2123d->enter($__internal_f72e072f0bba97a04b55ee08de9a903a0972fb10c8de6770241dba5078e2123d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_b1db90a89f9737a681110f2cd69476ad0c0771224a0c699ba9179b0832a5bb99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1db90a89f9737a681110f2cd69476ad0c0771224a0c699ba9179b0832a5bb99->enter($__internal_b1db90a89f9737a681110f2cd69476ad0c0771224a0c699ba9179b0832a5bb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 5
            echo "        <div class=\"row\">
            <h1><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_catalogue", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "titre", array()), "html", null, true);
            echo "</a></h1>
            <span class=\"price\"><b>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</b></<span>
            <p>";
            // line 8
            echo $this->getAttribute($context["produit"], "contenu", array());
            echo "</p>
            ";
            // line 9
            if ($this->getAttribute($context["produit"], "image", array())) {
                // line 10
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "alt", array()), "html", null, true);
                echo "\">
            ";
            }
            // line 12
            echo "            <hr>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b1db90a89f9737a681110f2cd69476ad0c0771224a0c699ba9179b0832a5bb99->leave($__internal_b1db90a89f9737a681110f2cd69476ad0c0771224a0c699ba9179b0832a5bb99_prof);

        
        $__internal_f72e072f0bba97a04b55ee08de9a903a0972fb10c8de6770241dba5078e2123d->leave($__internal_f72e072f0bba97a04b55ee08de9a903a0972fb10c8de6770241dba5078e2123d_prof);

    }

    public function getTemplateName()
    {
        return ":catalogue:categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 12,  94 => 10,  92 => 9,  88 => 8,  84 => 7,  78 => 6,  75 => 5,  70 => 4,  61 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":catalogue:layout.html.twig\" %}
{% block title %} {{ parent() }} - Categorie {% endblock %}
{% block body_layout %}
    {% for produit in produits %}
        <div class=\"row\">
            <h1><a href=\"{{ path('detail_catalogue', {id:produit.id}) }}\">{{ produit.titre }}</a></h1>
            <span class=\"price\"><b>{{ produit.prix }} €</b></<span>
            <p>{{ produit.contenu | raw }}</p>
            {% if produit.image %}
                <img src=\"{{ produit.image.url }}\" alt=\"{{ produit.image.alt }}\">
            {% endif %}
            <hr>
        </div>
    {% endfor %}
{% endblock %}", ":catalogue:categorie.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/catalogue/categorie.html.twig");
    }
}
