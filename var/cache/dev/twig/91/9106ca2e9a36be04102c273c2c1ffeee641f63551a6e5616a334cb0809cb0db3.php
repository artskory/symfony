<?php

/* blog/archives.html.twig */
class __TwigTemplate_765000dcd60d178d0057c8c73b6942f6c8239350d1014a6092617ab3a95b7b52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":blog:layout.html.twig", "blog/archives.html.twig", 1);
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
        $__internal_5a03f891a18acf4ca28d17c5b099de11c36d5f19573a71c854ad9889e3b18fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a03f891a18acf4ca28d17c5b099de11c36d5f19573a71c854ad9889e3b18fbc->enter($__internal_5a03f891a18acf4ca28d17c5b099de11c36d5f19573a71c854ad9889e3b18fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/archives.html.twig"));

        $__internal_735901307310e6b5ec00e753b5dc88c6310b94daba07dc68f44c51303c08aecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735901307310e6b5ec00e753b5dc88c6310b94daba07dc68f44c51303c08aecf->enter($__internal_735901307310e6b5ec00e753b5dc88c6310b94daba07dc68f44c51303c08aecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a03f891a18acf4ca28d17c5b099de11c36d5f19573a71c854ad9889e3b18fbc->leave($__internal_5a03f891a18acf4ca28d17c5b099de11c36d5f19573a71c854ad9889e3b18fbc_prof);

        
        $__internal_735901307310e6b5ec00e753b5dc88c6310b94daba07dc68f44c51303c08aecf->leave($__internal_735901307310e6b5ec00e753b5dc88c6310b94daba07dc68f44c51303c08aecf_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_20849de7c4898aeb7a2ef93666829ded5f9017c950bb4435de818a1d3dbec1a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20849de7c4898aeb7a2ef93666829ded5f9017c950bb4435de818a1d3dbec1a7->enter($__internal_20849de7c4898aeb7a2ef93666829ded5f9017c950bb4435de818a1d3dbec1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_14c9c8d14bc46e8fc1cc4a23ff2f3693c237f84297530852af5aab497b66007d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c9c8d14bc46e8fc1cc4a23ff2f3693c237f84297530852af5aab497b66007d->enter($__internal_14c9c8d14bc46e8fc1cc4a23ff2f3693c237f84297530852af5aab497b66007d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_14c9c8d14bc46e8fc1cc4a23ff2f3693c237f84297530852af5aab497b66007d->leave($__internal_14c9c8d14bc46e8fc1cc4a23ff2f3693c237f84297530852af5aab497b66007d_prof);

        
        $__internal_20849de7c4898aeb7a2ef93666829ded5f9017c950bb4435de818a1d3dbec1a7->leave($__internal_20849de7c4898aeb7a2ef93666829ded5f9017c950bb4435de818a1d3dbec1a7_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_4b4c7e24c97bea75be889e258bca4ff4738741899431e67f1797e9bbd29e9fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b4c7e24c97bea75be889e258bca4ff4738741899431e67f1797e9bbd29e9fed->enter($__internal_4b4c7e24c97bea75be889e258bca4ff4738741899431e67f1797e9bbd29e9fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_81585f0eaddc879f5737e2060540da34ac3f65d412dfc8613adac7d37dc167b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81585f0eaddc879f5737e2060540da34ac3f65d412dfc8613adac7d37dc167b9->enter($__internal_81585f0eaddc879f5737e2060540da34ac3f65d412dfc8613adac7d37dc167b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_81585f0eaddc879f5737e2060540da34ac3f65d412dfc8613adac7d37dc167b9->leave($__internal_81585f0eaddc879f5737e2060540da34ac3f65d412dfc8613adac7d37dc167b9_prof);

        
        $__internal_4b4c7e24c97bea75be889e258bca4ff4738741899431e67f1797e9bbd29e9fed->leave($__internal_4b4c7e24c97bea75be889e258bca4ff4738741899431e67f1797e9bbd29e9fed_prof);

    }

    public function getTemplateName()
    {
        return "blog/archives.html.twig";
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
{% endblock %}", "blog/archives.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\blog\\archives.html.twig");
    }
}
