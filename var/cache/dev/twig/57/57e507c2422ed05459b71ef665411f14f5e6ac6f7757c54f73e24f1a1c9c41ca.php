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
        $__internal_08e6a63af58f29917b3478ab9887e0f8897604a61db3cc70b2919f2f5c080518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e6a63af58f29917b3478ab9887e0f8897604a61db3cc70b2919f2f5c080518->enter($__internal_08e6a63af58f29917b3478ab9887e0f8897604a61db3cc70b2919f2f5c080518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:categorie.html.twig"));

        $__internal_903ea7515594e809f2f32de5a5b238e587e37af920f9a25311e9586a4648f27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903ea7515594e809f2f32de5a5b238e587e37af920f9a25311e9586a4648f27b->enter($__internal_903ea7515594e809f2f32de5a5b238e587e37af920f9a25311e9586a4648f27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08e6a63af58f29917b3478ab9887e0f8897604a61db3cc70b2919f2f5c080518->leave($__internal_08e6a63af58f29917b3478ab9887e0f8897604a61db3cc70b2919f2f5c080518_prof);

        
        $__internal_903ea7515594e809f2f32de5a5b238e587e37af920f9a25311e9586a4648f27b->leave($__internal_903ea7515594e809f2f32de5a5b238e587e37af920f9a25311e9586a4648f27b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_930d905b41d5cc9c84af35ff31fee2c045c09c47b6385a3b48bd7d6a2732dd89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_930d905b41d5cc9c84af35ff31fee2c045c09c47b6385a3b48bd7d6a2732dd89->enter($__internal_930d905b41d5cc9c84af35ff31fee2c045c09c47b6385a3b48bd7d6a2732dd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ab2e5ff6177e53dc6fadeca84265f653e57561f2be94d85f369a7b47fa8a0b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab2e5ff6177e53dc6fadeca84265f653e57561f2be94d85f369a7b47fa8a0b0->enter($__internal_5ab2e5ff6177e53dc6fadeca84265f653e57561f2be94d85f369a7b47fa8a0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Categorie ";
        
        $__internal_5ab2e5ff6177e53dc6fadeca84265f653e57561f2be94d85f369a7b47fa8a0b0->leave($__internal_5ab2e5ff6177e53dc6fadeca84265f653e57561f2be94d85f369a7b47fa8a0b0_prof);

        
        $__internal_930d905b41d5cc9c84af35ff31fee2c045c09c47b6385a3b48bd7d6a2732dd89->leave($__internal_930d905b41d5cc9c84af35ff31fee2c045c09c47b6385a3b48bd7d6a2732dd89_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_2337cbe47bc4e3be7350f8196c32d4729924f79a6d2b1cb7b948fd33a74b6903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2337cbe47bc4e3be7350f8196c32d4729924f79a6d2b1cb7b948fd33a74b6903->enter($__internal_2337cbe47bc4e3be7350f8196c32d4729924f79a6d2b1cb7b948fd33a74b6903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_c801ee1d91d64525b324b9154fd6bf5c44c6e76111146455e4d248fbe3c2d21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c801ee1d91d64525b324b9154fd6bf5c44c6e76111146455e4d248fbe3c2d21d->enter($__internal_c801ee1d91d64525b324b9154fd6bf5c44c6e76111146455e4d248fbe3c2d21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_c801ee1d91d64525b324b9154fd6bf5c44c6e76111146455e4d248fbe3c2d21d->leave($__internal_c801ee1d91d64525b324b9154fd6bf5c44c6e76111146455e4d248fbe3c2d21d_prof);

        
        $__internal_2337cbe47bc4e3be7350f8196c32d4729924f79a6d2b1cb7b948fd33a74b6903->leave($__internal_2337cbe47bc4e3be7350f8196c32d4729924f79a6d2b1cb7b948fd33a74b6903_prof);

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
