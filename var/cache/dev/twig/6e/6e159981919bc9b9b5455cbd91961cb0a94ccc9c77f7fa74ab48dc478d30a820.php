<?php

/* :blog:archives.html.twig */
class __TwigTemplate_a22ff1542d514ac7151fe3a0610556a0be5748ad1ee06f77ad3b3d513c77b95d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":blog:layout.html.twig", ":blog:archives.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_layout' => array($this, 'block_body_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":blog:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_326205a38da9413401f71c6afc4649665938592b9434bf39393d27f753e4de39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326205a38da9413401f71c6afc4649665938592b9434bf39393d27f753e4de39->enter($__internal_326205a38da9413401f71c6afc4649665938592b9434bf39393d27f753e4de39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:archives.html.twig"));

        $__internal_e39739a8a2978a6b649ec6800fd5e19bf0f72157ab76e8d3d8198469e0501490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39739a8a2978a6b649ec6800fd5e19bf0f72157ab76e8d3d8198469e0501490->enter($__internal_e39739a8a2978a6b649ec6800fd5e19bf0f72157ab76e8d3d8198469e0501490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_326205a38da9413401f71c6afc4649665938592b9434bf39393d27f753e4de39->leave($__internal_326205a38da9413401f71c6afc4649665938592b9434bf39393d27f753e4de39_prof);

        
        $__internal_e39739a8a2978a6b649ec6800fd5e19bf0f72157ab76e8d3d8198469e0501490->leave($__internal_e39739a8a2978a6b649ec6800fd5e19bf0f72157ab76e8d3d8198469e0501490_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_94de3c21090bcc327909e7eaf87cc65b710b45ac840340ac64a1ae4653f49a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94de3c21090bcc327909e7eaf87cc65b710b45ac840340ac64a1ae4653f49a89->enter($__internal_94de3c21090bcc327909e7eaf87cc65b710b45ac840340ac64a1ae4653f49a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_44a7d5e179f82b784519acf4ee6ee33a3ef491fd26331e7ba882631fac09e350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a7d5e179f82b784519acf4ee6ee33a3ef491fd26331e7ba882631fac09e350->enter($__internal_44a7d5e179f82b784519acf4ee6ee33a3ef491fd26331e7ba882631fac09e350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_44a7d5e179f82b784519acf4ee6ee33a3ef491fd26331e7ba882631fac09e350->leave($__internal_44a7d5e179f82b784519acf4ee6ee33a3ef491fd26331e7ba882631fac09e350_prof);

        
        $__internal_94de3c21090bcc327909e7eaf87cc65b710b45ac840340ac64a1ae4653f49a89->leave($__internal_94de3c21090bcc327909e7eaf87cc65b710b45ac840340ac64a1ae4653f49a89_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_be5af67b1060ed63ecd6685644b3147d9fa22266348d97f1dd671c7319ea535d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be5af67b1060ed63ecd6685644b3147d9fa22266348d97f1dd671c7319ea535d->enter($__internal_be5af67b1060ed63ecd6685644b3147d9fa22266348d97f1dd671c7319ea535d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_cf1f3d2b7a99814ade6d64f539489c975ce0940e35bee4733bd11ec2c6d79218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1f3d2b7a99814ade6d64f539489c975ce0940e35bee4733bd11ec2c6d79218->enter($__internal_cf1f3d2b7a99814ade6d64f539489c975ce0940e35bee4733bd11ec2c6d79218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 6
            echo "        <div class=\"row\">
            <h1><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_blog", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</a></h1>
            le <em>";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d m Y"), "html", null, true);
            echo "</em>
            <p>";
            // line 9
            echo $this->getAttribute($context["article"], "contenu", array());
            echo "</p> ";
            // line 10
            echo "            ";
            if ($this->getAttribute($context["article"], "image", array())) {
                // line 11
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "alt", array()), "html", null, true);
                echo "\">
            ";
            }
            // line 13
            echo "            
            <hr>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_cf1f3d2b7a99814ade6d64f539489c975ce0940e35bee4733bd11ec2c6d79218->leave($__internal_cf1f3d2b7a99814ade6d64f539489c975ce0940e35bee4733bd11ec2c6d79218_prof);

        
        $__internal_be5af67b1060ed63ecd6685644b3147d9fa22266348d97f1dd671c7319ea535d->leave($__internal_be5af67b1060ed63ecd6685644b3147d9fa22266348d97f1dd671c7319ea535d_prof);

    }

    public function getTemplateName()
    {
        return ":blog:archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 13,  96 => 11,  93 => 10,  90 => 9,  86 => 8,  80 => 7,  77 => 6,  73 => 5,  70 => 4,  61 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":blog:layout.html.twig\" %}
{% block title %} {{ parent() }} - lol!{% endblock %}
{% block body_layout %}

    {% for article in articles %}
        <div class=\"row\">
            <h1><a href=\"{{ path('detail_blog', {id:article.id}) }}\">{{ article.titre }}</a></h1>
            le <em>{{ article.date | date('d m Y') }}</em>
            <p>{{ article.contenu | raw }}</p> {# raw permet de d'interpreter le #}
            {% if article.image %}
                <img src=\"{{ article.image.url }}\" alt=\"{{ article.image.alt }}\">
            {% endif %}
            
            <hr>
        </div>
    {% endfor %}
{% endblock %}", ":blog:archives.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/blog/archives.html.twig");
    }
}
