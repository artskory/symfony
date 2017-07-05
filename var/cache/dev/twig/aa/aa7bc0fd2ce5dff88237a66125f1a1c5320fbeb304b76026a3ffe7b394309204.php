<?php

/* :blog:archives.html.twig */
class __TwigTemplate_6ed42ca4a2a0a1cc0fcab5ec462e16eb725bec215517b5adceeff771bf17c864 extends Twig_Template
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
        $__internal_821eaf64349fd04c82b01aaf1a6365b623df7d82d1f42c192ce72b8c3b5634ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_821eaf64349fd04c82b01aaf1a6365b623df7d82d1f42c192ce72b8c3b5634ef->enter($__internal_821eaf64349fd04c82b01aaf1a6365b623df7d82d1f42c192ce72b8c3b5634ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:archives.html.twig"));

        $__internal_68b6181c889daab7d6fa1e8586bfd929ed075a02963075f31affd281e0c28e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b6181c889daab7d6fa1e8586bfd929ed075a02963075f31affd281e0c28e42->enter($__internal_68b6181c889daab7d6fa1e8586bfd929ed075a02963075f31affd281e0c28e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_821eaf64349fd04c82b01aaf1a6365b623df7d82d1f42c192ce72b8c3b5634ef->leave($__internal_821eaf64349fd04c82b01aaf1a6365b623df7d82d1f42c192ce72b8c3b5634ef_prof);

        
        $__internal_68b6181c889daab7d6fa1e8586bfd929ed075a02963075f31affd281e0c28e42->leave($__internal_68b6181c889daab7d6fa1e8586bfd929ed075a02963075f31affd281e0c28e42_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c5ef8dec525faab5157111bbe9ce2ec2d3d430bc2f8cfcc9a458dade6cbd1fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c5ef8dec525faab5157111bbe9ce2ec2d3d430bc2f8cfcc9a458dade6cbd1fa->enter($__internal_1c5ef8dec525faab5157111bbe9ce2ec2d3d430bc2f8cfcc9a458dade6cbd1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_740cdabd80375794efb540ac99c3aff47ce6b6e413e59adbd25e4beca240a238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740cdabd80375794efb540ac99c3aff47ce6b6e413e59adbd25e4beca240a238->enter($__internal_740cdabd80375794efb540ac99c3aff47ce6b6e413e59adbd25e4beca240a238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_740cdabd80375794efb540ac99c3aff47ce6b6e413e59adbd25e4beca240a238->leave($__internal_740cdabd80375794efb540ac99c3aff47ce6b6e413e59adbd25e4beca240a238_prof);

        
        $__internal_1c5ef8dec525faab5157111bbe9ce2ec2d3d430bc2f8cfcc9a458dade6cbd1fa->leave($__internal_1c5ef8dec525faab5157111bbe9ce2ec2d3d430bc2f8cfcc9a458dade6cbd1fa_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_32951d477f30959092c1b49ddeada95cf625af8772b88e59f216558afe5edc5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32951d477f30959092c1b49ddeada95cf625af8772b88e59f216558afe5edc5f->enter($__internal_32951d477f30959092c1b49ddeada95cf625af8772b88e59f216558afe5edc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_7536542016cae7966e5153175f0f8bb5b38b5bd3876ff21820b36393798b42d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7536542016cae7966e5153175f0f8bb5b38b5bd3876ff21820b36393798b42d9->enter($__internal_7536542016cae7966e5153175f0f8bb5b38b5bd3876ff21820b36393798b42d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_7536542016cae7966e5153175f0f8bb5b38b5bd3876ff21820b36393798b42d9->leave($__internal_7536542016cae7966e5153175f0f8bb5b38b5bd3876ff21820b36393798b42d9_prof);

        
        $__internal_32951d477f30959092c1b49ddeada95cf625af8772b88e59f216558afe5edc5f->leave($__internal_32951d477f30959092c1b49ddeada95cf625af8772b88e59f216558afe5edc5f_prof);

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
