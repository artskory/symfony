<?php

/* blog/archives.html.twig */
class __TwigTemplate_bf995b4cdc2bd30d91cbdea958aaef1e20cefbdb5321052ee0e1c911acc9c2df extends Twig_Template
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
        $__internal_fc135652afe509bbed612cb1360dd9b0a6d8d9eae33ab1570b2d4490a12023ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc135652afe509bbed612cb1360dd9b0a6d8d9eae33ab1570b2d4490a12023ca->enter($__internal_fc135652afe509bbed612cb1360dd9b0a6d8d9eae33ab1570b2d4490a12023ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/archives.html.twig"));

        $__internal_fdd892f7d8087d2d77dddd797e7fa69af7a743b9a837db2eff165004ac48e70b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd892f7d8087d2d77dddd797e7fa69af7a743b9a837db2eff165004ac48e70b->enter($__internal_fdd892f7d8087d2d77dddd797e7fa69af7a743b9a837db2eff165004ac48e70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc135652afe509bbed612cb1360dd9b0a6d8d9eae33ab1570b2d4490a12023ca->leave($__internal_fc135652afe509bbed612cb1360dd9b0a6d8d9eae33ab1570b2d4490a12023ca_prof);

        
        $__internal_fdd892f7d8087d2d77dddd797e7fa69af7a743b9a837db2eff165004ac48e70b->leave($__internal_fdd892f7d8087d2d77dddd797e7fa69af7a743b9a837db2eff165004ac48e70b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_82d893bedcb2d08131da23571ca7dbcc73ad1f0e0c6049583c5cf76aca5571d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d893bedcb2d08131da23571ca7dbcc73ad1f0e0c6049583c5cf76aca5571d2->enter($__internal_82d893bedcb2d08131da23571ca7dbcc73ad1f0e0c6049583c5cf76aca5571d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4d3aafd5f19fc8ae9a8199f72708b1d633498f7d2a6d663bb80444ae5881e4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3aafd5f19fc8ae9a8199f72708b1d633498f7d2a6d663bb80444ae5881e4be->enter($__internal_4d3aafd5f19fc8ae9a8199f72708b1d633498f7d2a6d663bb80444ae5881e4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_4d3aafd5f19fc8ae9a8199f72708b1d633498f7d2a6d663bb80444ae5881e4be->leave($__internal_4d3aafd5f19fc8ae9a8199f72708b1d633498f7d2a6d663bb80444ae5881e4be_prof);

        
        $__internal_82d893bedcb2d08131da23571ca7dbcc73ad1f0e0c6049583c5cf76aca5571d2->leave($__internal_82d893bedcb2d08131da23571ca7dbcc73ad1f0e0c6049583c5cf76aca5571d2_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_8addb08fce9356a3a6313c7912f338729c7698ce996a8f4fd82581c917faf8cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8addb08fce9356a3a6313c7912f338729c7698ce996a8f4fd82581c917faf8cd->enter($__internal_8addb08fce9356a3a6313c7912f338729c7698ce996a8f4fd82581c917faf8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_459bc78af975d009a00da82fda452c527bd751dc72f7e768482a83876d544dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459bc78af975d009a00da82fda452c527bd751dc72f7e768482a83876d544dec->enter($__internal_459bc78af975d009a00da82fda452c527bd751dc72f7e768482a83876d544dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_459bc78af975d009a00da82fda452c527bd751dc72f7e768482a83876d544dec->leave($__internal_459bc78af975d009a00da82fda452c527bd751dc72f7e768482a83876d544dec_prof);

        
        $__internal_8addb08fce9356a3a6313c7912f338729c7698ce996a8f4fd82581c917faf8cd->leave($__internal_8addb08fce9356a3a6313c7912f338729c7698ce996a8f4fd82581c917faf8cd_prof);

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
