<?php

/* blog/index.html.twig */
class __TwigTemplate_abf49268bbbe41f09f2cd3846cd472991b503d71c4d1b4300f0844718e87cf4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":blog:layout.html.twig", "blog/index.html.twig", 1);
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
        $__internal_139294155d0e8302142503cd202a77b3fab883a2d6fae762c6925f76d30cf485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_139294155d0e8302142503cd202a77b3fab883a2d6fae762c6925f76d30cf485->enter($__internal_139294155d0e8302142503cd202a77b3fab883a2d6fae762c6925f76d30cf485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_ece259f54e1e0ca5a939fa93378992f43330ac67630d3e040b418a9cdb8c5aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece259f54e1e0ca5a939fa93378992f43330ac67630d3e040b418a9cdb8c5aa1->enter($__internal_ece259f54e1e0ca5a939fa93378992f43330ac67630d3e040b418a9cdb8c5aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_139294155d0e8302142503cd202a77b3fab883a2d6fae762c6925f76d30cf485->leave($__internal_139294155d0e8302142503cd202a77b3fab883a2d6fae762c6925f76d30cf485_prof);

        
        $__internal_ece259f54e1e0ca5a939fa93378992f43330ac67630d3e040b418a9cdb8c5aa1->leave($__internal_ece259f54e1e0ca5a939fa93378992f43330ac67630d3e040b418a9cdb8c5aa1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_34f7a464780164c5fc6d667807fa0b98b99d26b000c85f10db18412639defc4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f7a464780164c5fc6d667807fa0b98b99d26b000c85f10db18412639defc4c->enter($__internal_34f7a464780164c5fc6d667807fa0b98b99d26b000c85f10db18412639defc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4399462d20413d893ed7d29f82e676040f531e86fd27a407e60a8c39ff05f7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4399462d20413d893ed7d29f82e676040f531e86fd27a407e60a8c39ff05f7a9->enter($__internal_4399462d20413d893ed7d29f82e676040f531e86fd27a407e60a8c39ff05f7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_4399462d20413d893ed7d29f82e676040f531e86fd27a407e60a8c39ff05f7a9->leave($__internal_4399462d20413d893ed7d29f82e676040f531e86fd27a407e60a8c39ff05f7a9_prof);

        
        $__internal_34f7a464780164c5fc6d667807fa0b98b99d26b000c85f10db18412639defc4c->leave($__internal_34f7a464780164c5fc6d667807fa0b98b99d26b000c85f10db18412639defc4c_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_e9fc7e290b3f4eb4a480ddfd192d1678940456c948f2a28cca29791c1a5032d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9fc7e290b3f4eb4a480ddfd192d1678940456c948f2a28cca29791c1a5032d1->enter($__internal_e9fc7e290b3f4eb4a480ddfd192d1678940456c948f2a28cca29791c1a5032d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_f0bff5f9ed308e9c7c94464d110149cd4aa00c4a70c15ee211ed3c00bf83815d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0bff5f9ed308e9c7c94464d110149cd4aa00c4a70c15ee211ed3c00bf83815d->enter($__internal_f0bff5f9ed308e9c7c94464d110149cd4aa00c4a70c15ee211ed3c00bf83815d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "succes"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "    <p class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "index : page n° ";
        echo twig_escape_filter($this->env, ($context["page"] ?? $this->getContext($context, "page")), "html", null, true);
        echo "
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 9
            echo "            <div class=\"row\">
                <h1><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_blog", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</a></h1>
                le <em>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d m Y"), "html", null, true);
            echo "</em>
                ";
            // line 13
            echo "                <p>";
            echo $this->getAttribute($context["article"], "extrait", array());
            echo "</p> ";
            // line 14
            echo "                ";
            if ($this->getAttribute($context["article"], "image", array())) {
                // line 15
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "alt", array()), "html", null, true);
                echo "\">
                ";
            }
            // line 17
            echo "                <div class=\"raw\">
                    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "tags", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 19
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_blog", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\"><p class=\"btn btn-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "titre", array()), "html", null, true);
                echo "</p></a>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 21
                echo "                        <p>Pas de tag</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                </div>
                <hr>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    ";
        
        $__internal_f0bff5f9ed308e9c7c94464d110149cd4aa00c4a70c15ee211ed3c00bf83815d->leave($__internal_f0bff5f9ed308e9c7c94464d110149cd4aa00c4a70c15ee211ed3c00bf83815d_prof);

        
        $__internal_e9fc7e290b3f4eb4a480ddfd192d1678940456c948f2a28cca29791c1a5032d1->leave($__internal_e9fc7e290b3f4eb4a480ddfd192d1678940456c948f2a28cca29791c1a5032d1_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 27,  145 => 23,  138 => 21,  128 => 19,  123 => 18,  120 => 17,  112 => 15,  109 => 14,  105 => 13,  101 => 11,  95 => 10,  92 => 9,  88 => 8,  83 => 7,  74 => 5,  70 => 4,  61 => 3,  41 => 2,  11 => 1,);
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
{% for message in app.session.flashbag.get('succes')%}
    <p class=\"alert alert-success\">{{ message }}</p>
{% endfor%}
index : page n° {{ page }}
        {% for article in articles %}
            <div class=\"row\">
                <h1><a href=\"{{ path('detail_blog', {id:article.id}) }}\">{{ article.titre }}</a></h1>
                le <em>{{ article.date | date('d m Y') }}</em>
                {#<p>{{ article.contenu | raw }}</p> {# raw permet de d'interpreter le #}
                <p>{{ article.extrait | raw }}</p> {# raw permet de d'interpreter le #}
                {% if article.image %}
                    <img src=\"{{ article.image.url }}\" alt=\"{{ article.image.alt }}\">
                {% endif %}
                <div class=\"raw\">
                    {% for tag in article.tags %}
                        <a href=\"{{ path('tag_blog', {id:tag.id}) }}\"><p class=\"btn btn-primary\">{{ tag.titre }}</p></a>
                    {% else %}
                        <p>Pas de tag</p>
                    {% endfor %}
                </div>
                <hr>
            </div>
        {% endfor %}
    {% endblock %}", "blog/index.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\blog\\index.html.twig");
    }
}
