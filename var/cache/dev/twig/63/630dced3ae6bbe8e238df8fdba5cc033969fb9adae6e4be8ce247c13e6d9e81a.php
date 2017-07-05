<?php

/* catalogue/categorie.html.twig */
class __TwigTemplate_747c2983e66a80d6d97c037eceae7a46fc542a0fe81a0715d0e25750a2f09bd6 extends Twig_Template
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
        $__internal_332e211f1298c2eb14d11b0ff08da50562dff7be32678ebd73746ed8fffa668a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_332e211f1298c2eb14d11b0ff08da50562dff7be32678ebd73746ed8fffa668a->enter($__internal_332e211f1298c2eb14d11b0ff08da50562dff7be32678ebd73746ed8fffa668a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/categorie.html.twig"));

        $__internal_fb1cb8e3d1ad7c3e85690bde191c8e59f38f37ba5431fe8027444c538372eb5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1cb8e3d1ad7c3e85690bde191c8e59f38f37ba5431fe8027444c538372eb5e->enter($__internal_fb1cb8e3d1ad7c3e85690bde191c8e59f38f37ba5431fe8027444c538372eb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_332e211f1298c2eb14d11b0ff08da50562dff7be32678ebd73746ed8fffa668a->leave($__internal_332e211f1298c2eb14d11b0ff08da50562dff7be32678ebd73746ed8fffa668a_prof);

        
        $__internal_fb1cb8e3d1ad7c3e85690bde191c8e59f38f37ba5431fe8027444c538372eb5e->leave($__internal_fb1cb8e3d1ad7c3e85690bde191c8e59f38f37ba5431fe8027444c538372eb5e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4403cef6be530f6ccfe6f802b779091bd4661949be9a934b917da9afc2fede18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4403cef6be530f6ccfe6f802b779091bd4661949be9a934b917da9afc2fede18->enter($__internal_4403cef6be530f6ccfe6f802b779091bd4661949be9a934b917da9afc2fede18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e8f3c7a824111704d4e96c6100eb787759388068e12f3df99408e9ed07ce335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8f3c7a824111704d4e96c6100eb787759388068e12f3df99408e9ed07ce335->enter($__internal_1e8f3c7a824111704d4e96c6100eb787759388068e12f3df99408e9ed07ce335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Categorie ";
        
        $__internal_1e8f3c7a824111704d4e96c6100eb787759388068e12f3df99408e9ed07ce335->leave($__internal_1e8f3c7a824111704d4e96c6100eb787759388068e12f3df99408e9ed07ce335_prof);

        
        $__internal_4403cef6be530f6ccfe6f802b779091bd4661949be9a934b917da9afc2fede18->leave($__internal_4403cef6be530f6ccfe6f802b779091bd4661949be9a934b917da9afc2fede18_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_5dd12ad34ee8455261930f02541fd2b4de983599b8f9e2ba038cbed61bd62707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dd12ad34ee8455261930f02541fd2b4de983599b8f9e2ba038cbed61bd62707->enter($__internal_5dd12ad34ee8455261930f02541fd2b4de983599b8f9e2ba038cbed61bd62707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_f874f17135c3095bfed6a908c2035182663ad1be70399cf75f2d37b68ee9b82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f874f17135c3095bfed6a908c2035182663ad1be70399cf75f2d37b68ee9b82c->enter($__internal_f874f17135c3095bfed6a908c2035182663ad1be70399cf75f2d37b68ee9b82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_f874f17135c3095bfed6a908c2035182663ad1be70399cf75f2d37b68ee9b82c->leave($__internal_f874f17135c3095bfed6a908c2035182663ad1be70399cf75f2d37b68ee9b82c_prof);

        
        $__internal_5dd12ad34ee8455261930f02541fd2b4de983599b8f9e2ba038cbed61bd62707->leave($__internal_5dd12ad34ee8455261930f02541fd2b4de983599b8f9e2ba038cbed61bd62707_prof);

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
