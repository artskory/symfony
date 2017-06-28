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
        $__internal_c5ad43ed5b86fb3df074b5a95b8071d98006471b37b05dc6e06cd0142cc4efaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ad43ed5b86fb3df074b5a95b8071d98006471b37b05dc6e06cd0142cc4efaa->enter($__internal_c5ad43ed5b86fb3df074b5a95b8071d98006471b37b05dc6e06cd0142cc4efaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:categorie.html.twig"));

        $__internal_5ac4bdcc1f10db6e982e18cb357b67967e5e91ce813fc95edad9a098c86af639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac4bdcc1f10db6e982e18cb357b67967e5e91ce813fc95edad9a098c86af639->enter($__internal_5ac4bdcc1f10db6e982e18cb357b67967e5e91ce813fc95edad9a098c86af639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5ad43ed5b86fb3df074b5a95b8071d98006471b37b05dc6e06cd0142cc4efaa->leave($__internal_c5ad43ed5b86fb3df074b5a95b8071d98006471b37b05dc6e06cd0142cc4efaa_prof);

        
        $__internal_5ac4bdcc1f10db6e982e18cb357b67967e5e91ce813fc95edad9a098c86af639->leave($__internal_5ac4bdcc1f10db6e982e18cb357b67967e5e91ce813fc95edad9a098c86af639_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0adcb1bf479bab0f9e1e4433355c55c7dd1fdb0181af0457b8d56114e3760b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0adcb1bf479bab0f9e1e4433355c55c7dd1fdb0181af0457b8d56114e3760b72->enter($__internal_0adcb1bf479bab0f9e1e4433355c55c7dd1fdb0181af0457b8d56114e3760b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_156f86b2030df69e548d0e841a8d45555b39c39019dfbcf304300be1aa51521e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156f86b2030df69e548d0e841a8d45555b39c39019dfbcf304300be1aa51521e->enter($__internal_156f86b2030df69e548d0e841a8d45555b39c39019dfbcf304300be1aa51521e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Categorie ";
        
        $__internal_156f86b2030df69e548d0e841a8d45555b39c39019dfbcf304300be1aa51521e->leave($__internal_156f86b2030df69e548d0e841a8d45555b39c39019dfbcf304300be1aa51521e_prof);

        
        $__internal_0adcb1bf479bab0f9e1e4433355c55c7dd1fdb0181af0457b8d56114e3760b72->leave($__internal_0adcb1bf479bab0f9e1e4433355c55c7dd1fdb0181af0457b8d56114e3760b72_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_30a292fbccddfd2146fd853025093d86f73b184817386883d80fa16c3007104c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a292fbccddfd2146fd853025093d86f73b184817386883d80fa16c3007104c->enter($__internal_30a292fbccddfd2146fd853025093d86f73b184817386883d80fa16c3007104c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_e1eca267f2c61b754c7bb60a230e9248d39624ac8bf44afb73b5cc95e482380e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1eca267f2c61b754c7bb60a230e9248d39624ac8bf44afb73b5cc95e482380e->enter($__internal_e1eca267f2c61b754c7bb60a230e9248d39624ac8bf44afb73b5cc95e482380e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_e1eca267f2c61b754c7bb60a230e9248d39624ac8bf44afb73b5cc95e482380e->leave($__internal_e1eca267f2c61b754c7bb60a230e9248d39624ac8bf44afb73b5cc95e482380e_prof);

        
        $__internal_30a292fbccddfd2146fd853025093d86f73b184817386883d80fa16c3007104c->leave($__internal_30a292fbccddfd2146fd853025093d86f73b184817386883d80fa16c3007104c_prof);

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
