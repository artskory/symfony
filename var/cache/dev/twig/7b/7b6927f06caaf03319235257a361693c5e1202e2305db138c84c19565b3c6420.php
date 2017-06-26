<?php

/* :catalogue:categorie.html.twig */
class __TwigTemplate_5143443ae24b84c7d6073c5ffbfd60e4c84a64988628cc7582f5a7ceaa21c522 extends Twig_Template
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
        $__internal_a01971e6d4913e35e5088bd3fab96974ef4b39732c9036bfdd16d5e5350735d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01971e6d4913e35e5088bd3fab96974ef4b39732c9036bfdd16d5e5350735d6->enter($__internal_a01971e6d4913e35e5088bd3fab96974ef4b39732c9036bfdd16d5e5350735d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:categorie.html.twig"));

        $__internal_ecb546813bc2c13fbc8ae9cd7050b93a5ef24d418c16c669935aa7de87a5594e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb546813bc2c13fbc8ae9cd7050b93a5ef24d418c16c669935aa7de87a5594e->enter($__internal_ecb546813bc2c13fbc8ae9cd7050b93a5ef24d418c16c669935aa7de87a5594e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a01971e6d4913e35e5088bd3fab96974ef4b39732c9036bfdd16d5e5350735d6->leave($__internal_a01971e6d4913e35e5088bd3fab96974ef4b39732c9036bfdd16d5e5350735d6_prof);

        
        $__internal_ecb546813bc2c13fbc8ae9cd7050b93a5ef24d418c16c669935aa7de87a5594e->leave($__internal_ecb546813bc2c13fbc8ae9cd7050b93a5ef24d418c16c669935aa7de87a5594e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_63d2ebc529727061cb0da2362d98c8a9a06a9877e15c159e8d13291c6c4e7f2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d2ebc529727061cb0da2362d98c8a9a06a9877e15c159e8d13291c6c4e7f2e->enter($__internal_63d2ebc529727061cb0da2362d98c8a9a06a9877e15c159e8d13291c6c4e7f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_809de6cdfb950c55d46bfaa59b09bb8150ad28a90ddd0628cf94f28a8cd31f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809de6cdfb950c55d46bfaa59b09bb8150ad28a90ddd0628cf94f28a8cd31f83->enter($__internal_809de6cdfb950c55d46bfaa59b09bb8150ad28a90ddd0628cf94f28a8cd31f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_809de6cdfb950c55d46bfaa59b09bb8150ad28a90ddd0628cf94f28a8cd31f83->leave($__internal_809de6cdfb950c55d46bfaa59b09bb8150ad28a90ddd0628cf94f28a8cd31f83_prof);

        
        $__internal_63d2ebc529727061cb0da2362d98c8a9a06a9877e15c159e8d13291c6c4e7f2e->leave($__internal_63d2ebc529727061cb0da2362d98c8a9a06a9877e15c159e8d13291c6c4e7f2e_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_1f3676c12ceeb9b9e655d611f638ee8e15d477de4fa757a6b688b878691eb98f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f3676c12ceeb9b9e655d611f638ee8e15d477de4fa757a6b688b878691eb98f->enter($__internal_1f3676c12ceeb9b9e655d611f638ee8e15d477de4fa757a6b688b878691eb98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_4b91d29fead9ba34fd2925e19c222022ea3612f127469dcf1c58b568b7350403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b91d29fead9ba34fd2925e19c222022ea3612f127469dcf1c58b568b7350403->enter($__internal_4b91d29fead9ba34fd2925e19c222022ea3612f127469dcf1c58b568b7350403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_4b91d29fead9ba34fd2925e19c222022ea3612f127469dcf1c58b568b7350403->leave($__internal_4b91d29fead9ba34fd2925e19c222022ea3612f127469dcf1c58b568b7350403_prof);

        
        $__internal_1f3676c12ceeb9b9e655d611f638ee8e15d477de4fa757a6b688b878691eb98f->leave($__internal_1f3676c12ceeb9b9e655d611f638ee8e15d477de4fa757a6b688b878691eb98f_prof);

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
{% block title %} {{ parent() }} - lol!{% endblock %}
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
