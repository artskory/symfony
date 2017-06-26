<?php

/* catalogue/categorie.html.twig */
class __TwigTemplate_8f71717bd32e87e2fe0178f142b8e375f343db79891163c8cc678556e421904c extends Twig_Template
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
        $__internal_6dc5ea544cc4cf695f53f2531167188049c664dcd4a3b89adaba28984bf6218a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc5ea544cc4cf695f53f2531167188049c664dcd4a3b89adaba28984bf6218a->enter($__internal_6dc5ea544cc4cf695f53f2531167188049c664dcd4a3b89adaba28984bf6218a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/categorie.html.twig"));

        $__internal_90ff679e009309e552b3afa837468417d633ee1f590ebfd878883e18e65ac20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ff679e009309e552b3afa837468417d633ee1f590ebfd878883e18e65ac20f->enter($__internal_90ff679e009309e552b3afa837468417d633ee1f590ebfd878883e18e65ac20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dc5ea544cc4cf695f53f2531167188049c664dcd4a3b89adaba28984bf6218a->leave($__internal_6dc5ea544cc4cf695f53f2531167188049c664dcd4a3b89adaba28984bf6218a_prof);

        
        $__internal_90ff679e009309e552b3afa837468417d633ee1f590ebfd878883e18e65ac20f->leave($__internal_90ff679e009309e552b3afa837468417d633ee1f590ebfd878883e18e65ac20f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7426bfa9657397f0b7e8e84e834043dd0046cc5e035ef9f13ecf182fc6fd8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7426bfa9657397f0b7e8e84e834043dd0046cc5e035ef9f13ecf182fc6fd8de->enter($__internal_f7426bfa9657397f0b7e8e84e834043dd0046cc5e035ef9f13ecf182fc6fd8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab8325734ccd0b547cb7f446639af31c5e72554b509ea165337e685f0f9357c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8325734ccd0b547cb7f446639af31c5e72554b509ea165337e685f0f9357c1->enter($__internal_ab8325734ccd0b547cb7f446639af31c5e72554b509ea165337e685f0f9357c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_ab8325734ccd0b547cb7f446639af31c5e72554b509ea165337e685f0f9357c1->leave($__internal_ab8325734ccd0b547cb7f446639af31c5e72554b509ea165337e685f0f9357c1_prof);

        
        $__internal_f7426bfa9657397f0b7e8e84e834043dd0046cc5e035ef9f13ecf182fc6fd8de->leave($__internal_f7426bfa9657397f0b7e8e84e834043dd0046cc5e035ef9f13ecf182fc6fd8de_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_db9b9cf758f05376aca3154d15f91342e4dd15c4a125c32e32744b99dbc790dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9b9cf758f05376aca3154d15f91342e4dd15c4a125c32e32744b99dbc790dc->enter($__internal_db9b9cf758f05376aca3154d15f91342e4dd15c4a125c32e32744b99dbc790dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_25563bf4494acc80a7cf3330eabfa6f3a6f1417a65b0167e1c2db17adfad146a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25563bf4494acc80a7cf3330eabfa6f3a6f1417a65b0167e1c2db17adfad146a->enter($__internal_25563bf4494acc80a7cf3330eabfa6f3a6f1417a65b0167e1c2db17adfad146a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_25563bf4494acc80a7cf3330eabfa6f3a6f1417a65b0167e1c2db17adfad146a->leave($__internal_25563bf4494acc80a7cf3330eabfa6f3a6f1417a65b0167e1c2db17adfad146a_prof);

        
        $__internal_db9b9cf758f05376aca3154d15f91342e4dd15c4a125c32e32744b99dbc790dc->leave($__internal_db9b9cf758f05376aca3154d15f91342e4dd15c4a125c32e32744b99dbc790dc_prof);

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
{% endblock %}", "catalogue/categorie.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\catalogue\\categorie.html.twig");
    }
}
