<?php

/* :blog:index.html.twig */
class __TwigTemplate_d214171622609037a33b5c511ca825e3a08433752650dc40efde48e616d498aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":blog:layout.html.twig", ":blog:index.html.twig", 1);
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
        $__internal_2a5d511d2e89c0ef17a6f6333977b3536eaa89385d9f5268489dd4a37e31960c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5d511d2e89c0ef17a6f6333977b3536eaa89385d9f5268489dd4a37e31960c->enter($__internal_2a5d511d2e89c0ef17a6f6333977b3536eaa89385d9f5268489dd4a37e31960c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:index.html.twig"));

        $__internal_c53088914cfc7ae9ecf57e53ae1c6714d951978d08a26007b71bbe8ed629bd92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53088914cfc7ae9ecf57e53ae1c6714d951978d08a26007b71bbe8ed629bd92->enter($__internal_c53088914cfc7ae9ecf57e53ae1c6714d951978d08a26007b71bbe8ed629bd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a5d511d2e89c0ef17a6f6333977b3536eaa89385d9f5268489dd4a37e31960c->leave($__internal_2a5d511d2e89c0ef17a6f6333977b3536eaa89385d9f5268489dd4a37e31960c_prof);

        
        $__internal_c53088914cfc7ae9ecf57e53ae1c6714d951978d08a26007b71bbe8ed629bd92->leave($__internal_c53088914cfc7ae9ecf57e53ae1c6714d951978d08a26007b71bbe8ed629bd92_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_910dd1717494235d40fb118cf9c2ae5fc0e8f9d35c80bfb3af78f0b9e799b3ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910dd1717494235d40fb118cf9c2ae5fc0e8f9d35c80bfb3af78f0b9e799b3ce->enter($__internal_910dd1717494235d40fb118cf9c2ae5fc0e8f9d35c80bfb3af78f0b9e799b3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67fec662771896ce852b6605146d967a7b59e7e2a6ecfbbaa3b9103a057f1383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fec662771896ce852b6605146d967a7b59e7e2a6ecfbbaa3b9103a057f1383->enter($__internal_67fec662771896ce852b6605146d967a7b59e7e2a6ecfbbaa3b9103a057f1383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_67fec662771896ce852b6605146d967a7b59e7e2a6ecfbbaa3b9103a057f1383->leave($__internal_67fec662771896ce852b6605146d967a7b59e7e2a6ecfbbaa3b9103a057f1383_prof);

        
        $__internal_910dd1717494235d40fb118cf9c2ae5fc0e8f9d35c80bfb3af78f0b9e799b3ce->leave($__internal_910dd1717494235d40fb118cf9c2ae5fc0e8f9d35c80bfb3af78f0b9e799b3ce_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_8c660acf22b65771f807642ebf87abd96c8bcc3b933b9889c8f3a87bd3c30e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c660acf22b65771f807642ebf87abd96c8bcc3b933b9889c8f3a87bd3c30e9e->enter($__internal_8c660acf22b65771f807642ebf87abd96c8bcc3b933b9889c8f3a87bd3c30e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_bad398fb00584eb869bd16823b3e33a271ff3ac2f93b4b9f6af5649dd6317cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad398fb00584eb869bd16823b3e33a271ff3ac2f93b4b9f6af5649dd6317cb5->enter($__internal_bad398fb00584eb869bd16823b3e33a271ff3ac2f93b4b9f6af5649dd6317cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_bad398fb00584eb869bd16823b3e33a271ff3ac2f93b4b9f6af5649dd6317cb5->leave($__internal_bad398fb00584eb869bd16823b3e33a271ff3ac2f93b4b9f6af5649dd6317cb5_prof);

        
        $__internal_8c660acf22b65771f807642ebf87abd96c8bcc3b933b9889c8f3a87bd3c30e9e->leave($__internal_8c660acf22b65771f807642ebf87abd96c8bcc3b933b9889c8f3a87bd3c30e9e_prof);

    }

    public function getTemplateName()
    {
        return ":blog:index.html.twig";
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
    {% endblock %}", ":blog:index.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/blog/index.html.twig");
    }
}
