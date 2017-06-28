<?php

/* blog/index.html.twig */
class __TwigTemplate_bde0c33d5de5bef4da94df036af83b55aa953a3ec160a60c082c6ac564ffdc0a extends Twig_Template
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
        $__internal_43afc5f8731e55bc06b1eb034346ac34fb657fdf52392b41bc22d8a42c8cac23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43afc5f8731e55bc06b1eb034346ac34fb657fdf52392b41bc22d8a42c8cac23->enter($__internal_43afc5f8731e55bc06b1eb034346ac34fb657fdf52392b41bc22d8a42c8cac23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_2a818c8e31dd1ad723a328b31b7deb2efdebaacc6ef185afc81eec09208388d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a818c8e31dd1ad723a328b31b7deb2efdebaacc6ef185afc81eec09208388d5->enter($__internal_2a818c8e31dd1ad723a328b31b7deb2efdebaacc6ef185afc81eec09208388d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43afc5f8731e55bc06b1eb034346ac34fb657fdf52392b41bc22d8a42c8cac23->leave($__internal_43afc5f8731e55bc06b1eb034346ac34fb657fdf52392b41bc22d8a42c8cac23_prof);

        
        $__internal_2a818c8e31dd1ad723a328b31b7deb2efdebaacc6ef185afc81eec09208388d5->leave($__internal_2a818c8e31dd1ad723a328b31b7deb2efdebaacc6ef185afc81eec09208388d5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_360e2a4de241233b0055f997bfa8aa548543bfb429b4189efc06d0a9ca4469cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_360e2a4de241233b0055f997bfa8aa548543bfb429b4189efc06d0a9ca4469cf->enter($__internal_360e2a4de241233b0055f997bfa8aa548543bfb429b4189efc06d0a9ca4469cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eeec1936568ccd611c3b2bcd61e47d3e3fcaae3c1cd8e06667eb1cf98933e66d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeec1936568ccd611c3b2bcd61e47d3e3fcaae3c1cd8e06667eb1cf98933e66d->enter($__internal_eeec1936568ccd611c3b2bcd61e47d3e3fcaae3c1cd8e06667eb1cf98933e66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_eeec1936568ccd611c3b2bcd61e47d3e3fcaae3c1cd8e06667eb1cf98933e66d->leave($__internal_eeec1936568ccd611c3b2bcd61e47d3e3fcaae3c1cd8e06667eb1cf98933e66d_prof);

        
        $__internal_360e2a4de241233b0055f997bfa8aa548543bfb429b4189efc06d0a9ca4469cf->leave($__internal_360e2a4de241233b0055f997bfa8aa548543bfb429b4189efc06d0a9ca4469cf_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_052b455386229e1c5de4fd7e43411fdf8a3636b7b1823508440b8d6bb62643fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052b455386229e1c5de4fd7e43411fdf8a3636b7b1823508440b8d6bb62643fe->enter($__internal_052b455386229e1c5de4fd7e43411fdf8a3636b7b1823508440b8d6bb62643fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_806b373a001a3847345d2b659b3dea8734b49f57914bba23e39b44791a642410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806b373a001a3847345d2b659b3dea8734b49f57914bba23e39b44791a642410->enter($__internal_806b373a001a3847345d2b659b3dea8734b49f57914bba23e39b44791a642410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        // line 8
        echo "        ";
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
            echo "                <p>
                    ";
            // line 15
            echo "                    ";
            // line 16
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ExtraitTwig')->get($this->getAttribute($context["article"], "contenu", array())), "html", null, true);
            echo "
                </p>
                ";
            // line 18
            if ($this->getAttribute($context["article"], "image", array())) {
                // line 19
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "alt", array()), "html", null, true);
                echo "\">
                ";
            }
            // line 21
            echo "                <div class=\"raw\">
                    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "tags", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 23
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_blog", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\"><p class=\"btn btn-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "titre", array()), "html", null, true);
                echo "</p></a>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 25
                echo "                        <p>Pas de tag</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </div>
                <hr>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog", array("p" => (($context["p"] ?? $this->getContext($context, "p")) - 1))), "html", null, true);
        echo "\">◄</a>
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["nb_pages"] ?? $this->getContext($context, "nb_pages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 33
            echo "        ";
            if (($context["i"] == ($context["p"] ?? $this->getContext($context, "p")))) {
                // line 34
                echo "            ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
        ";
            } else {
                // line 36
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog", array("p" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
        ";
            }
            // line 38
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog", array("p" => (($context["p"] ?? $this->getContext($context, "p")) + 1))), "html", null, true);
        echo "\">►</a>
    ";
        
        $__internal_806b373a001a3847345d2b659b3dea8734b49f57914bba23e39b44791a642410->leave($__internal_806b373a001a3847345d2b659b3dea8734b49f57914bba23e39b44791a642410_prof);

        
        $__internal_052b455386229e1c5de4fd7e43411fdf8a3636b7b1823508440b8d6bb62643fe->leave($__internal_052b455386229e1c5de4fd7e43411fdf8a3636b7b1823508440b8d6bb62643fe_prof);

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
        return array (  188 => 39,  182 => 38,  174 => 36,  168 => 34,  165 => 33,  161 => 32,  156 => 31,  147 => 27,  140 => 25,  130 => 23,  125 => 22,  122 => 21,  114 => 19,  112 => 18,  106 => 16,  104 => 15,  101 => 13,  97 => 11,  91 => 10,  88 => 9,  83 => 8,  74 => 5,  70 => 4,  61 => 3,  41 => 2,  11 => 1,);
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
{#index : page n° {{ page }}#}
        {% for article in articles %}
            <div class=\"row\">
                <h1><a href=\"{{ path('detail_blog', {id:article.id}) }}\">{{ article.titre }}</a></h1>
                le <em>{{ article.date | date('d m Y') }}</em>
                {#<p>{{ article.contenu | raw }}</p> {# raw permet de d'interpreter le #}
                <p>
                    {#{{ article.extrait | raw }}#}
                    {#{{ extrait(article.contenu) }}#}
                    {{ article.contenu | extrait }}
                </p>
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
        <a href=\"{{path('blog',{p:p-1}) }}\">◄</a>
    {% for i in 1..nb_pages %}
        {% if i == p %}
            {{i}}
        {% else %}
            <a href=\"{{path('blog',{p:i} )}}\">{{i}}</a>
        {% endif %}
    {% endfor %}
    <a href=\"{{path('blog',{p:p+1}) }}\">►</a>
    {% endblock %}", "blog/index.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\blog\\index.html.twig");
    }
}
