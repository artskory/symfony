<?php

/* catalogue/categorie.html.twig */
class __TwigTemplate_ffe1bc9aa1eb28de5320f0a54e6f972d95c57801d3e1b1e88b4708f6cf8c83e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":catalogue:layout.html.twig", "catalogue/categorie.html.twig", 1);
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
        $__internal_f08c5ae4278c28d5b2f97af9ee342f33db969c88d1ece1a4b33cc2bfa9c18437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08c5ae4278c28d5b2f97af9ee342f33db969c88d1ece1a4b33cc2bfa9c18437->enter($__internal_f08c5ae4278c28d5b2f97af9ee342f33db969c88d1ece1a4b33cc2bfa9c18437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/categorie.html.twig"));

        $__internal_7e5d01a793f9f03b147111746ac5c0fea7c89bad5419a9dae66fd6f301922481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5d01a793f9f03b147111746ac5c0fea7c89bad5419a9dae66fd6f301922481->enter($__internal_7e5d01a793f9f03b147111746ac5c0fea7c89bad5419a9dae66fd6f301922481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f08c5ae4278c28d5b2f97af9ee342f33db969c88d1ece1a4b33cc2bfa9c18437->leave($__internal_f08c5ae4278c28d5b2f97af9ee342f33db969c88d1ece1a4b33cc2bfa9c18437_prof);

        
        $__internal_7e5d01a793f9f03b147111746ac5c0fea7c89bad5419a9dae66fd6f301922481->leave($__internal_7e5d01a793f9f03b147111746ac5c0fea7c89bad5419a9dae66fd6f301922481_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d012d434a543c35e2255e09615719f9a6686c7255abe22d4df5688aa10b65e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d012d434a543c35e2255e09615719f9a6686c7255abe22d4df5688aa10b65e1f->enter($__internal_d012d434a543c35e2255e09615719f9a6686c7255abe22d4df5688aa10b65e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ce00f5711f76ec719813bf20c5bd6e84b9febc5803f0a8ed0ce11d1bef15b2ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce00f5711f76ec719813bf20c5bd6e84b9febc5803f0a8ed0ce11d1bef15b2ff->enter($__internal_ce00f5711f76ec719813bf20c5bd6e84b9febc5803f0a8ed0ce11d1bef15b2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Categorie ";
        
        $__internal_ce00f5711f76ec719813bf20c5bd6e84b9febc5803f0a8ed0ce11d1bef15b2ff->leave($__internal_ce00f5711f76ec719813bf20c5bd6e84b9febc5803f0a8ed0ce11d1bef15b2ff_prof);

        
        $__internal_d012d434a543c35e2255e09615719f9a6686c7255abe22d4df5688aa10b65e1f->leave($__internal_d012d434a543c35e2255e09615719f9a6686c7255abe22d4df5688aa10b65e1f_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_1b7e75ad0c9b10e59c9ab11d1991b955faac5e91a815a102e03c9670864012b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b7e75ad0c9b10e59c9ab11d1991b955faac5e91a815a102e03c9670864012b4->enter($__internal_1b7e75ad0c9b10e59c9ab11d1991b955faac5e91a815a102e03c9670864012b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_1f8b8e1b97e561742f8d0d865db6931a0b8bfa1ed4d862becc29432a5b9045a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8b8e1b97e561742f8d0d865db6931a0b8bfa1ed4d862becc29432a5b9045a0->enter($__internal_1f8b8e1b97e561742f8d0d865db6931a0b8bfa1ed4d862becc29432a5b9045a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_1f8b8e1b97e561742f8d0d865db6931a0b8bfa1ed4d862becc29432a5b9045a0->leave($__internal_1f8b8e1b97e561742f8d0d865db6931a0b8bfa1ed4d862becc29432a5b9045a0_prof);

        
        $__internal_1b7e75ad0c9b10e59c9ab11d1991b955faac5e91a815a102e03c9670864012b4->leave($__internal_1b7e75ad0c9b10e59c9ab11d1991b955faac5e91a815a102e03c9670864012b4_prof);

    }

    public function getTemplateName()
    {
        return "catalogue/categorie.html.twig";
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
{% endblock %}", "catalogue/categorie.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\catalogue\\categorie.html.twig");
    }
}
