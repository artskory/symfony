<?php

/* :blog:tag.html.twig */
class __TwigTemplate_2ec0cd6c8012da68b68c55fd55a2d8c9b06dcfdb3f0ff473306f70b9729aac13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":blog:layout.html.twig", ":blog:tag.html.twig", 1);
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
        $__internal_2515f94979bc02b724dbedc3b3a51faf60587a077cff818d8e9f7e1182e07f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2515f94979bc02b724dbedc3b3a51faf60587a077cff818d8e9f7e1182e07f01->enter($__internal_2515f94979bc02b724dbedc3b3a51faf60587a077cff818d8e9f7e1182e07f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:tag.html.twig"));

        $__internal_4343321b42827a08a02dfce175da6953f28a890c0775de60a7d13b3316e2f3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4343321b42827a08a02dfce175da6953f28a890c0775de60a7d13b3316e2f3bb->enter($__internal_4343321b42827a08a02dfce175da6953f28a890c0775de60a7d13b3316e2f3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:tag.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2515f94979bc02b724dbedc3b3a51faf60587a077cff818d8e9f7e1182e07f01->leave($__internal_2515f94979bc02b724dbedc3b3a51faf60587a077cff818d8e9f7e1182e07f01_prof);

        
        $__internal_4343321b42827a08a02dfce175da6953f28a890c0775de60a7d13b3316e2f3bb->leave($__internal_4343321b42827a08a02dfce175da6953f28a890c0775de60a7d13b3316e2f3bb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb7b9fe77059fdb57bedeefeee798caf685e85a54cc7910fbc78d733bbd36819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7b9fe77059fdb57bedeefeee798caf685e85a54cc7910fbc78d733bbd36819->enter($__internal_bb7b9fe77059fdb57bedeefeee798caf685e85a54cc7910fbc78d733bbd36819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4225f3c9ef532aea0bbe32d23e1380a5f9e62fe82de4aa79b129615de927a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4225f3c9ef532aea0bbe32d23e1380a5f9e62fe82de4aa79b129615de927a05->enter($__internal_d4225f3c9ef532aea0bbe32d23e1380a5f9e62fe82de4aa79b129615de927a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_d4225f3c9ef532aea0bbe32d23e1380a5f9e62fe82de4aa79b129615de927a05->leave($__internal_d4225f3c9ef532aea0bbe32d23e1380a5f9e62fe82de4aa79b129615de927a05_prof);

        
        $__internal_bb7b9fe77059fdb57bedeefeee798caf685e85a54cc7910fbc78d733bbd36819->leave($__internal_bb7b9fe77059fdb57bedeefeee798caf685e85a54cc7910fbc78d733bbd36819_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_6915d164909db38ab9aebb0b79f7e6fa1f998cfc87e5f81769ddb09f7464c12d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6915d164909db38ab9aebb0b79f7e6fa1f998cfc87e5f81769ddb09f7464c12d->enter($__internal_6915d164909db38ab9aebb0b79f7e6fa1f998cfc87e5f81769ddb09f7464c12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_22e5f04da7957e7a505054bb6ca2ed98134f1f8a7d5b8da4d7a42faaceb37870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e5f04da7957e7a505054bb6ca2ed98134f1f8a7d5b8da4d7a42faaceb37870->enter($__internal_22e5f04da7957e7a505054bb6ca2ed98134f1f8a7d5b8da4d7a42faaceb37870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
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
            echo "            <hr>
        </div>
            <div class=\"raw\">
                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "tags", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 17
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_blog", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\"><p class=\"btn btn-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "titre", array()), "html", null, true);
                echo " <span class=\"badge\">";
                echo twig_escape_filter($this->env, ($context["nbtag"] ?? $this->getContext($context, "nbtag")), "html", null, true);
                echo "</span></p></a>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 19
                echo "                    <p>Pas de tag</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            <div class=\"navigation\">
    ";
        // line 24
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
</div>
";
        
        $__internal_22e5f04da7957e7a505054bb6ca2ed98134f1f8a7d5b8da4d7a42faaceb37870->leave($__internal_22e5f04da7957e7a505054bb6ca2ed98134f1f8a7d5b8da4d7a42faaceb37870_prof);

        
        $__internal_6915d164909db38ab9aebb0b79f7e6fa1f998cfc87e5f81769ddb09f7464c12d->leave($__internal_6915d164909db38ab9aebb0b79f7e6fa1f998cfc87e5f81769ddb09f7464c12d_prof);

    }

    public function getTemplateName()
    {
        return ":blog:tag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 24,  140 => 23,  133 => 21,  126 => 19,  114 => 17,  109 => 16,  104 => 13,  96 => 11,  93 => 10,  90 => 9,  86 => 8,  80 => 7,  77 => 6,  73 => 5,  70 => 4,  61 => 3,  41 => 2,  11 => 1,);
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
                    <a href=\"{{ path('tag_blog', {id:tag.id}) }}\"><p class=\"btn btn-primary\">{{ tag.titre }} <span class=\"badge\">{{ nbtag }}</span></p></a>
                {% else %}
                    <p>Pas de tag</p>
                {% endfor %}
            </div>
    {% endfor %}
            <div class=\"navigation\">
    {{ knp_pagination_render(pagination) }}
</div>
{% endblock %}", ":blog:tag.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/blog/tag.html.twig");
    }
}
