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
        $__internal_dd09149174bdb4e30e66d7308113b705d7e86bc4d9b2261891de6879f5dde9e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd09149174bdb4e30e66d7308113b705d7e86bc4d9b2261891de6879f5dde9e8->enter($__internal_dd09149174bdb4e30e66d7308113b705d7e86bc4d9b2261891de6879f5dde9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/categorie.html.twig"));

        $__internal_5ca70feed1c2fb9cc219a903aed83130c4af060d775d52a97a8aa67dca26c99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca70feed1c2fb9cc219a903aed83130c4af060d775d52a97a8aa67dca26c99c->enter($__internal_5ca70feed1c2fb9cc219a903aed83130c4af060d775d52a97a8aa67dca26c99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd09149174bdb4e30e66d7308113b705d7e86bc4d9b2261891de6879f5dde9e8->leave($__internal_dd09149174bdb4e30e66d7308113b705d7e86bc4d9b2261891de6879f5dde9e8_prof);

        
        $__internal_5ca70feed1c2fb9cc219a903aed83130c4af060d775d52a97a8aa67dca26c99c->leave($__internal_5ca70feed1c2fb9cc219a903aed83130c4af060d775d52a97a8aa67dca26c99c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1182a1dd2c19b7fb9f0ec981c5b27ec89ba1a749a5f93ef9b828f771247debea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1182a1dd2c19b7fb9f0ec981c5b27ec89ba1a749a5f93ef9b828f771247debea->enter($__internal_1182a1dd2c19b7fb9f0ec981c5b27ec89ba1a749a5f93ef9b828f771247debea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0af58b3015e625bd11680758235acebad76be24c0737d0d3589d324bc23a610a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af58b3015e625bd11680758235acebad76be24c0737d0d3589d324bc23a610a->enter($__internal_0af58b3015e625bd11680758235acebad76be24c0737d0d3589d324bc23a610a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Categorie ";
        
        $__internal_0af58b3015e625bd11680758235acebad76be24c0737d0d3589d324bc23a610a->leave($__internal_0af58b3015e625bd11680758235acebad76be24c0737d0d3589d324bc23a610a_prof);

        
        $__internal_1182a1dd2c19b7fb9f0ec981c5b27ec89ba1a749a5f93ef9b828f771247debea->leave($__internal_1182a1dd2c19b7fb9f0ec981c5b27ec89ba1a749a5f93ef9b828f771247debea_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_5b0767b5c3dfc050a1a709f2d133ddfffe7399071a6e1daf12a0139d992180a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b0767b5c3dfc050a1a709f2d133ddfffe7399071a6e1daf12a0139d992180a6->enter($__internal_5b0767b5c3dfc050a1a709f2d133ddfffe7399071a6e1daf12a0139d992180a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_c4354d6c05dac8ba5354c329a9b029591bab490dc28e29a5f1f51cdf5387b568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4354d6c05dac8ba5354c329a9b029591bab490dc28e29a5f1f51cdf5387b568->enter($__internal_c4354d6c05dac8ba5354c329a9b029591bab490dc28e29a5f1f51cdf5387b568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_c4354d6c05dac8ba5354c329a9b029591bab490dc28e29a5f1f51cdf5387b568->leave($__internal_c4354d6c05dac8ba5354c329a9b029591bab490dc28e29a5f1f51cdf5387b568_prof);

        
        $__internal_5b0767b5c3dfc050a1a709f2d133ddfffe7399071a6e1daf12a0139d992180a6->leave($__internal_5b0767b5c3dfc050a1a709f2d133ddfffe7399071a6e1daf12a0139d992180a6_prof);

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
