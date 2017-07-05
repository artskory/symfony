<?php

/* KnpPaginatorBundle:Pagination:bulma_pagination.html.twig */
class __TwigTemplate_07afda7b8fe87a9764a952f996ff711efd67b9b442d6e63ee803be2604febe28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1630a2b3b6036135a9bf32d2433904c587e244e919e5a41c56344ece74fa999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1630a2b3b6036135a9bf32d2433904c587e244e919e5a41c56344ece74fa999->enter($__internal_b1630a2b3b6036135a9bf32d2433904c587e244e919e5a41c56344ece74fa999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:bulma_pagination.html.twig"));

        $__internal_a9504c69cc5b92266d3bf7387af243969288f7325f148c96b534b75800e78b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9504c69cc5b92266d3bf7387af243969288f7325f148c96b534b75800e78b0b->enter($__internal_a9504c69cc5b92266d3bf7387af243969288f7325f148c96b534b75800e78b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:bulma_pagination.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((($context["pageCount"] ?? $this->getContext($context, "pageCount")) > 1)) {
            // line 4
            echo "    <nav class=\"pagination\">
        ";
            // line 5
            if (array_key_exists("previous", $context)) {
                // line 6
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["previous"] ?? $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&lt;</a>
        ";
            } else {
                // line 8
                echo "            <a class=\"button\" disabled>&lt;</a>
        ";
            }
            // line 10
            echo "        ";
            if (array_key_exists("next", $context)) {
                // line 11
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["next"] ?? $this->getContext($context, "next"))))), "html", null, true);
                echo "\">&gt;</a>
        ";
            } else {
                // line 13
                echo "            <a class=\"button\" disabled>&gt;</a>
        ";
            }
            // line 15
            echo "        <ul>
            <li>
                <a class=\"button\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["first"] ?? $this->getContext($context, "first"))))), "html", null, true);
            echo "\">1</a>
            </li>
            ";
            // line 19
            if ((($this->getAttribute(($context["pagesInRange"] ?? $this->getContext($context, "pagesInRange")), 0, array(), "array") - ($context["first"] ?? $this->getContext($context, "first"))) >= 2)) {
                // line 20
                echo "                <li>
                    <span>…</span>
                </li>
            ";
            }
            // line 24
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 25
                echo "                ";
                if (((($context["first"] ?? $this->getContext($context, "first")) != $context["page"]) && ($context["page"] != ($context["last"] ?? $this->getContext($context, "last"))))) {
                    // line 26
                    echo "                    <li>
                        <a class=\"button\"
                           href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                // line 31
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            ";
            if (((($context["last"] ?? $this->getContext($context, "last")) - $this->getAttribute(($context["pagesInRange"] ?? $this->getContext($context, "pagesInRange")), (twig_length_filter($this->env, ($context["pagesInRange"] ?? $this->getContext($context, "pagesInRange"))) - 1), array(), "array")) >= 2)) {
                // line 33
                echo "                <li>
                    <span>…</span>
                </li>
            ";
            }
            // line 37
            echo "            <li>
                <a class=\"button\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["last"] ?? $this->getContext($context, "last"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["last"] ?? $this->getContext($context, "last")), "html", null, true);
            echo "</a>
            </li>
        </ul>
    </nav>
";
        }
        
        $__internal_b1630a2b3b6036135a9bf32d2433904c587e244e919e5a41c56344ece74fa999->leave($__internal_b1630a2b3b6036135a9bf32d2433904c587e244e919e5a41c56344ece74fa999_prof);

        
        $__internal_a9504c69cc5b92266d3bf7387af243969288f7325f148c96b534b75800e78b0b->leave($__internal_a9504c69cc5b92266d3bf7387af243969288f7325f148c96b534b75800e78b0b_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:bulma_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  110 => 37,  104 => 33,  101 => 32,  95 => 31,  87 => 28,  83 => 26,  80 => 25,  75 => 24,  69 => 20,  67 => 19,  62 => 17,  58 => 15,  54 => 13,  48 => 11,  45 => 10,  41 => 8,  35 => 6,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# bulma Sliding pagination control implementation #}

{% if pageCount > 1 %}
    <nav class=\"pagination\">
        {% if previous is defined %}
            <a class=\"button\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&lt;</a>
        {% else %}
            <a class=\"button\" disabled>&lt;</a>
        {% endif %}
        {% if next is defined %}
            <a class=\"button\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">&gt;</a>
        {% else %}
            <a class=\"button\" disabled>&gt;</a>
        {% endif %}
        <ul>
            <li>
                <a class=\"button\" href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">1</a>
            </li>
            {% if pagesInRange[0] - first >= 2 %}
                <li>
                    <span>…</span>
                </li>
            {% endif %}
            {% for page in pagesInRange %}
                {% if first != page and page != last %}
                    <li>
                        <a class=\"button\"
                           href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                    </li>
                {% endif %}
            {% endfor %}
            {% if  last - pagesInRange[pagesInRange|length - 1] >= 2 %}
                <li>
                    <span>…</span>
                </li>
            {% endif %}
            <li>
                <a class=\"button\" href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">{{ last }}</a>
            </li>
        </ul>
    </nav>
{% endif %}
", "KnpPaginatorBundle:Pagination:bulma_pagination.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\knplabs\\knp-paginator-bundle/Resources/views/Pagination/bulma_pagination.html.twig");
    }
}
