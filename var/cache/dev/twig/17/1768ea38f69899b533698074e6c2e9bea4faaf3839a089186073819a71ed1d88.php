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
        $__internal_13aeee94de52d2351c7d294fbaba5e0df53b57d74ffb58847080b77d7208db87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13aeee94de52d2351c7d294fbaba5e0df53b57d74ffb58847080b77d7208db87->enter($__internal_13aeee94de52d2351c7d294fbaba5e0df53b57d74ffb58847080b77d7208db87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_ba19246782ab064d785b9e3ef5382e699b493111a6d06938f46a4893a80c2132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba19246782ab064d785b9e3ef5382e699b493111a6d06938f46a4893a80c2132->enter($__internal_ba19246782ab064d785b9e3ef5382e699b493111a6d06938f46a4893a80c2132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13aeee94de52d2351c7d294fbaba5e0df53b57d74ffb58847080b77d7208db87->leave($__internal_13aeee94de52d2351c7d294fbaba5e0df53b57d74ffb58847080b77d7208db87_prof);

        
        $__internal_ba19246782ab064d785b9e3ef5382e699b493111a6d06938f46a4893a80c2132->leave($__internal_ba19246782ab064d785b9e3ef5382e699b493111a6d06938f46a4893a80c2132_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_87549878e0767f8e8e88b223ac1c725564da6fc87820cc9410334a98912f8d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87549878e0767f8e8e88b223ac1c725564da6fc87820cc9410334a98912f8d38->enter($__internal_87549878e0767f8e8e88b223ac1c725564da6fc87820cc9410334a98912f8d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ac3a0b5b32bc816147934be729f4eed7af6826c48bfb32d5ec628c9bd5e0ef43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3a0b5b32bc816147934be729f4eed7af6826c48bfb32d5ec628c9bd5e0ef43->enter($__internal_ac3a0b5b32bc816147934be729f4eed7af6826c48bfb32d5ec628c9bd5e0ef43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_ac3a0b5b32bc816147934be729f4eed7af6826c48bfb32d5ec628c9bd5e0ef43->leave($__internal_ac3a0b5b32bc816147934be729f4eed7af6826c48bfb32d5ec628c9bd5e0ef43_prof);

        
        $__internal_87549878e0767f8e8e88b223ac1c725564da6fc87820cc9410334a98912f8d38->leave($__internal_87549878e0767f8e8e88b223ac1c725564da6fc87820cc9410334a98912f8d38_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_02a542675eb40bc9ca4c047c55a1d3ea83975d48709dae4e0ff7d23b7a396dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a542675eb40bc9ca4c047c55a1d3ea83975d48709dae4e0ff7d23b7a396dcf->enter($__internal_02a542675eb40bc9ca4c047c55a1d3ea83975d48709dae4e0ff7d23b7a396dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_12c556fd581e1bf0aa113d3d2745df19b2bb5ec36d2de6851110afb084893f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c556fd581e1bf0aa113d3d2745df19b2bb5ec36d2de6851110afb084893f8f->enter($__internal_12c556fd581e1bf0aa113d3d2745df19b2bb5ec36d2de6851110afb084893f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
                <p>";
            // line 12
            echo $this->getAttribute($context["article"], "contenu", array());
            echo "</p> ";
            // line 13
            echo "                ";
            if ($this->getAttribute($context["article"], "image", array())) {
                // line 14
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "alt", array()), "html", null, true);
                echo "\">
                ";
            }
            // line 16
            echo "                <div class=\"raw\">
                    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "tags", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 18
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_blog", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\"><p class=\"btn btn-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "titre", array()), "html", null, true);
                echo "</p></a>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 20
                echo "                        <p>Pas de tag</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                </div>
                <hr>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    ";
        
        $__internal_12c556fd581e1bf0aa113d3d2745df19b2bb5ec36d2de6851110afb084893f8f->leave($__internal_12c556fd581e1bf0aa113d3d2745df19b2bb5ec36d2de6851110afb084893f8f_prof);

        
        $__internal_02a542675eb40bc9ca4c047c55a1d3ea83975d48709dae4e0ff7d23b7a396dcf->leave($__internal_02a542675eb40bc9ca4c047c55a1d3ea83975d48709dae4e0ff7d23b7a396dcf_prof);

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
        return array (  153 => 26,  144 => 22,  137 => 20,  127 => 18,  122 => 17,  119 => 16,  111 => 14,  108 => 13,  105 => 12,  101 => 11,  95 => 10,  92 => 9,  88 => 8,  83 => 7,  74 => 5,  70 => 4,  61 => 3,  41 => 2,  11 => 1,);
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
                <p>{{ article.contenu | raw }}</p> {# raw permet de d'interpreter le #}
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
