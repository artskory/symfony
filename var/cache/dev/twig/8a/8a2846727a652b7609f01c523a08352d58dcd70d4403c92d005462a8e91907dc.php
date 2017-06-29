<?php

/* blog/tag.html.twig */
class __TwigTemplate_55487b667b9a3f8ebc95655cb46277e8242ac04dc773ba3d5d719cf7c95dd843 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":blog:layout.html.twig", "blog/tag.html.twig", 1);
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
        $__internal_b91b2ebfc418034859fe5f1719ce1f18d9dabb235df3a65dd4bf5fc4e3d9ab47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91b2ebfc418034859fe5f1719ce1f18d9dabb235df3a65dd4bf5fc4e3d9ab47->enter($__internal_b91b2ebfc418034859fe5f1719ce1f18d9dabb235df3a65dd4bf5fc4e3d9ab47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/tag.html.twig"));

        $__internal_223ceb5faa6aa3efa11a7c6672d25842d3242bd3703f764dafb639527a2176dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223ceb5faa6aa3efa11a7c6672d25842d3242bd3703f764dafb639527a2176dd->enter($__internal_223ceb5faa6aa3efa11a7c6672d25842d3242bd3703f764dafb639527a2176dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/tag.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b91b2ebfc418034859fe5f1719ce1f18d9dabb235df3a65dd4bf5fc4e3d9ab47->leave($__internal_b91b2ebfc418034859fe5f1719ce1f18d9dabb235df3a65dd4bf5fc4e3d9ab47_prof);

        
        $__internal_223ceb5faa6aa3efa11a7c6672d25842d3242bd3703f764dafb639527a2176dd->leave($__internal_223ceb5faa6aa3efa11a7c6672d25842d3242bd3703f764dafb639527a2176dd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2f50b156085c424de66f028fe1d6ba2371a4826b84ed5937924256e3d667a0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f50b156085c424de66f028fe1d6ba2371a4826b84ed5937924256e3d667a0c->enter($__internal_b2f50b156085c424de66f028fe1d6ba2371a4826b84ed5937924256e3d667a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8acc41ffeaa74f5dfe1e40e47eee47833af664e868d88b47887c103d3d342038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8acc41ffeaa74f5dfe1e40e47eee47833af664e868d88b47887c103d3d342038->enter($__internal_8acc41ffeaa74f5dfe1e40e47eee47833af664e868d88b47887c103d3d342038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_8acc41ffeaa74f5dfe1e40e47eee47833af664e868d88b47887c103d3d342038->leave($__internal_8acc41ffeaa74f5dfe1e40e47eee47833af664e868d88b47887c103d3d342038_prof);

        
        $__internal_b2f50b156085c424de66f028fe1d6ba2371a4826b84ed5937924256e3d667a0c->leave($__internal_b2f50b156085c424de66f028fe1d6ba2371a4826b84ed5937924256e3d667a0c_prof);

    }

    // line 5
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_d8bfc9c0d6babf4d492568993e044e7381662a1046054a032866ee2629a23a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8bfc9c0d6babf4d492568993e044e7381662a1046054a032866ee2629a23a93->enter($__internal_d8bfc9c0d6babf4d492568993e044e7381662a1046054a032866ee2629a23a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_70dd25cd52435feaa790fc5f13bd0aed4dac6bc4b91eb79ac37d665738a964a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70dd25cd52435feaa790fc5f13bd0aed4dac6bc4b91eb79ac37d665738a964a5->enter($__internal_70dd25cd52435feaa790fc5f13bd0aed4dac6bc4b91eb79ac37d665738a964a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 6
        echo "
    <ul class=\"list-unstyled\">
        <li ";
        // line 8
        if ($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "isSorted", array(0 => "a.titre"), "method")) {
            echo " class=\"sorted\"";
        }
        echo "><span class=\"glyphicon glyphicon-sort-by-alphabet\"></span>";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Titre", "a.titre");
        echo "</li>|
        <li><span class=\"glyphicon glyphicon-sort-by-order\"></span>";
        // line 9
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "Date", array(0 => "a.date"));
        echo "
        </li>
    </ul>

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 14
            echo "        <div class=\"row\">
            <h1><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_blog", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</a></h1>
            le <em>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d m Y"), "html", null, true);
            echo "</em>
            <p>";
            // line 17
            echo $this->getAttribute($context["article"], "contenu", array());
            echo "</p> ";
            // line 18
            echo "            ";
            if ($this->getAttribute($context["article"], "image", array())) {
                // line 19
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "alt", array()), "html", null, true);
                echo "\">
            ";
            }
            // line 21
            echo "            <hr>
        </div>
        <div class=\"raw\">
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "tags", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 25
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_blog", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\"><p class=\"btn btn-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "titre", array()), "html", null, true);
                echo " <span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
                echo "</span></p></a>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 27
                echo "                <p>Pas de tag</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        <div class=\"navigation\">
            ";
        // line 32
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
        </div>
            
";
        
        $__internal_70dd25cd52435feaa790fc5f13bd0aed4dac6bc4b91eb79ac37d665738a964a5->leave($__internal_70dd25cd52435feaa790fc5f13bd0aed4dac6bc4b91eb79ac37d665738a964a5_prof);

        
        $__internal_d8bfc9c0d6babf4d492568993e044e7381662a1046054a032866ee2629a23a93->leave($__internal_d8bfc9c0d6babf4d492568993e044e7381662a1046054a032866ee2629a23a93_prof);

    }

    public function getTemplateName()
    {
        return "blog/tag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 32,  156 => 31,  149 => 29,  142 => 27,  130 => 25,  125 => 24,  120 => 21,  112 => 19,  109 => 18,  106 => 17,  102 => 16,  96 => 15,  93 => 14,  89 => 13,  82 => 9,  74 => 8,  70 => 6,  61 => 5,  41 => 3,  11 => 1,);
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

    <ul class=\"list-unstyled\">
        <li {% if pagination.isSorted('a.titre') %} class=\"sorted\"{% endif %}><span class=\"glyphicon glyphicon-sort-by-alphabet\"></span>{{ knp_pagination_sortable(pagination, 'Titre', 'a.titre') }}</li>|
        <li><span class=\"glyphicon glyphicon-sort-by-order\"></span>{{ knp_pagination_sortable(pagination, 'Date', ['a.date']) }}
        </li>
    </ul>

    {% for article in pagination %}
        <div class=\"row\">
            <h1><a href=\"{{ path('detail_blog', {id:article.id}) }}\">{{ article.titre }}</a></h1>
            le <em>{{ article.date | date('d m Y') }}</em>
            <p>{{ article.contenu | raw }}</p> {# raw permet de d'interpreter le #}
            {% if article.image %}
                <img src=\"{{ article.image.url }}\" alt=\"{{ article.image.alt }}\">
            {% endif %}
            <hr>
        </div>
        <div class=\"raw\">
            {% for tag in article.tags %}
                <a href=\"{{ path('tag_blog', {id:tag.id}) }}\"><p class=\"btn btn-primary\">{{ tag.titre }} <span class=\"badge\">{{ pagination.getTotalItemCount }}</span></p></a>
            {% else %}
                <p>Pas de tag</p>
            {% endfor %}
        </div>
    {% endfor %}
        <div class=\"navigation\">
            {{ knp_pagination_render(pagination) }}
        </div>
            
{% endblock %}", "blog/tag.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\blog\\tag.html.twig");
    }
}
