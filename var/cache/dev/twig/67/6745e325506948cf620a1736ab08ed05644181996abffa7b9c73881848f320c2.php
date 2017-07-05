<?php

/* :catalogue:categorie.html.twig */
class __TwigTemplate_7bac49655949634bfecb1fabf2ba6b3ba1ea8860234baedd7fb7fa78f2b84834 extends Twig_Template
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
        $__internal_4ab060239ec805d353568911450bad5464acf9f15743b710b3ad7760800b110a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ab060239ec805d353568911450bad5464acf9f15743b710b3ad7760800b110a->enter($__internal_4ab060239ec805d353568911450bad5464acf9f15743b710b3ad7760800b110a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:categorie.html.twig"));

        $__internal_f17a72bf185fd7810acfa60c1a505ddf165e5ca4716887c305f9614926eb06c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17a72bf185fd7810acfa60c1a505ddf165e5ca4716887c305f9614926eb06c5->enter($__internal_f17a72bf185fd7810acfa60c1a505ddf165e5ca4716887c305f9614926eb06c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ab060239ec805d353568911450bad5464acf9f15743b710b3ad7760800b110a->leave($__internal_4ab060239ec805d353568911450bad5464acf9f15743b710b3ad7760800b110a_prof);

        
        $__internal_f17a72bf185fd7810acfa60c1a505ddf165e5ca4716887c305f9614926eb06c5->leave($__internal_f17a72bf185fd7810acfa60c1a505ddf165e5ca4716887c305f9614926eb06c5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ccdfe893976d4a7236e0bf5b6eef331075fc6f6f5247c22714b669d9649fa4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ccdfe893976d4a7236e0bf5b6eef331075fc6f6f5247c22714b669d9649fa4d->enter($__internal_6ccdfe893976d4a7236e0bf5b6eef331075fc6f6f5247c22714b669d9649fa4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_960e95df1c7848215e789cf9d4a769a1083ab5172e9ad27b5fea22007c16d3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960e95df1c7848215e789cf9d4a769a1083ab5172e9ad27b5fea22007c16d3c0->enter($__internal_960e95df1c7848215e789cf9d4a769a1083ab5172e9ad27b5fea22007c16d3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Categorie ";
        
        $__internal_960e95df1c7848215e789cf9d4a769a1083ab5172e9ad27b5fea22007c16d3c0->leave($__internal_960e95df1c7848215e789cf9d4a769a1083ab5172e9ad27b5fea22007c16d3c0_prof);

        
        $__internal_6ccdfe893976d4a7236e0bf5b6eef331075fc6f6f5247c22714b669d9649fa4d->leave($__internal_6ccdfe893976d4a7236e0bf5b6eef331075fc6f6f5247c22714b669d9649fa4d_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_290146f918ef222a54ab764bb328eabc0d5cbe2c93dc43e6fb1bab2866397049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290146f918ef222a54ab764bb328eabc0d5cbe2c93dc43e6fb1bab2866397049->enter($__internal_290146f918ef222a54ab764bb328eabc0d5cbe2c93dc43e6fb1bab2866397049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_27cfc5ec496257ef52e401f606634c9981f190deb7ca08e6ab585263a150e6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cfc5ec496257ef52e401f606634c9981f190deb7ca08e6ab585263a150e6ef->enter($__internal_27cfc5ec496257ef52e401f606634c9981f190deb7ca08e6ab585263a150e6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_27cfc5ec496257ef52e401f606634c9981f190deb7ca08e6ab585263a150e6ef->leave($__internal_27cfc5ec496257ef52e401f606634c9981f190deb7ca08e6ab585263a150e6ef_prof);

        
        $__internal_290146f918ef222a54ab764bb328eabc0d5cbe2c93dc43e6fb1bab2866397049->leave($__internal_290146f918ef222a54ab764bb328eabc0d5cbe2c93dc43e6fb1bab2866397049_prof);

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
