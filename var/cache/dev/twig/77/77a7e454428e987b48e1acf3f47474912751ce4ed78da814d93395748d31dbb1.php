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
        $__internal_82537e994a6827cae2e8b8fc41fb4c837abbac01a1de8fce5c6c927366909c18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82537e994a6827cae2e8b8fc41fb4c837abbac01a1de8fce5c6c927366909c18->enter($__internal_82537e994a6827cae2e8b8fc41fb4c837abbac01a1de8fce5c6c927366909c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/categorie.html.twig"));

        $__internal_d351bae45712c9d0cbed96845f441ed58d8f7ad54c83df619688a40fd4f73e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d351bae45712c9d0cbed96845f441ed58d8f7ad54c83df619688a40fd4f73e8c->enter($__internal_d351bae45712c9d0cbed96845f441ed58d8f7ad54c83df619688a40fd4f73e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82537e994a6827cae2e8b8fc41fb4c837abbac01a1de8fce5c6c927366909c18->leave($__internal_82537e994a6827cae2e8b8fc41fb4c837abbac01a1de8fce5c6c927366909c18_prof);

        
        $__internal_d351bae45712c9d0cbed96845f441ed58d8f7ad54c83df619688a40fd4f73e8c->leave($__internal_d351bae45712c9d0cbed96845f441ed58d8f7ad54c83df619688a40fd4f73e8c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_fff1fae3a9d52b450b7e0ce5e2e0cfde94244c36efa29535067b713bdfb0ad66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff1fae3a9d52b450b7e0ce5e2e0cfde94244c36efa29535067b713bdfb0ad66->enter($__internal_fff1fae3a9d52b450b7e0ce5e2e0cfde94244c36efa29535067b713bdfb0ad66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_55a2fb3bfba8fbeab5f371fb807e86869ad3df2d3bcd7dd03d38c7e275dd8546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a2fb3bfba8fbeab5f371fb807e86869ad3df2d3bcd7dd03d38c7e275dd8546->enter($__internal_55a2fb3bfba8fbeab5f371fb807e86869ad3df2d3bcd7dd03d38c7e275dd8546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Categorie ";
        
        $__internal_55a2fb3bfba8fbeab5f371fb807e86869ad3df2d3bcd7dd03d38c7e275dd8546->leave($__internal_55a2fb3bfba8fbeab5f371fb807e86869ad3df2d3bcd7dd03d38c7e275dd8546_prof);

        
        $__internal_fff1fae3a9d52b450b7e0ce5e2e0cfde94244c36efa29535067b713bdfb0ad66->leave($__internal_fff1fae3a9d52b450b7e0ce5e2e0cfde94244c36efa29535067b713bdfb0ad66_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_8e728fc453ec68b5653ce0ed0f77716569aac9c0f18da392d339df7645846687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e728fc453ec68b5653ce0ed0f77716569aac9c0f18da392d339df7645846687->enter($__internal_8e728fc453ec68b5653ce0ed0f77716569aac9c0f18da392d339df7645846687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_a5cafe7fb60048790753e7c1fcc65c753102d53540e7e3fd4cc56f0492ca051c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5cafe7fb60048790753e7c1fcc65c753102d53540e7e3fd4cc56f0492ca051c->enter($__internal_a5cafe7fb60048790753e7c1fcc65c753102d53540e7e3fd4cc56f0492ca051c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_a5cafe7fb60048790753e7c1fcc65c753102d53540e7e3fd4cc56f0492ca051c->leave($__internal_a5cafe7fb60048790753e7c1fcc65c753102d53540e7e3fd4cc56f0492ca051c_prof);

        
        $__internal_8e728fc453ec68b5653ce0ed0f77716569aac9c0f18da392d339df7645846687->leave($__internal_8e728fc453ec68b5653ce0ed0f77716569aac9c0f18da392d339df7645846687_prof);

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
