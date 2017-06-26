<?php

/* :blog:tag.html.twig */
class __TwigTemplate_01d42a5024a87e59aa967dbedc280742427ee43f05b33d181acbc9c7e5061cf8 extends Twig_Template
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
        $__internal_fb06ce604e35d4758be1037b5aee7f50aaa22c7cfee4b55bb6a71ba753890fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb06ce604e35d4758be1037b5aee7f50aaa22c7cfee4b55bb6a71ba753890fbb->enter($__internal_fb06ce604e35d4758be1037b5aee7f50aaa22c7cfee4b55bb6a71ba753890fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:tag.html.twig"));

        $__internal_300e72ffd7dc057fef16ea29a2eb8fe762e02e11c468d8909517e054303990b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300e72ffd7dc057fef16ea29a2eb8fe762e02e11c468d8909517e054303990b5->enter($__internal_300e72ffd7dc057fef16ea29a2eb8fe762e02e11c468d8909517e054303990b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:tag.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb06ce604e35d4758be1037b5aee7f50aaa22c7cfee4b55bb6a71ba753890fbb->leave($__internal_fb06ce604e35d4758be1037b5aee7f50aaa22c7cfee4b55bb6a71ba753890fbb_prof);

        
        $__internal_300e72ffd7dc057fef16ea29a2eb8fe762e02e11c468d8909517e054303990b5->leave($__internal_300e72ffd7dc057fef16ea29a2eb8fe762e02e11c468d8909517e054303990b5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbb3ef0856de3792900fda57654b3884c7520e077edf2831478c892ad44caea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb3ef0856de3792900fda57654b3884c7520e077edf2831478c892ad44caea3->enter($__internal_bbb3ef0856de3792900fda57654b3884c7520e077edf2831478c892ad44caea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b64ebe31eb881d74a72d28b60e6f175cc65bd810c3d820841af7b9c239e3f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b64ebe31eb881d74a72d28b60e6f175cc65bd810c3d820841af7b9c239e3f47->enter($__internal_1b64ebe31eb881d74a72d28b60e6f175cc65bd810c3d820841af7b9c239e3f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_1b64ebe31eb881d74a72d28b60e6f175cc65bd810c3d820841af7b9c239e3f47->leave($__internal_1b64ebe31eb881d74a72d28b60e6f175cc65bd810c3d820841af7b9c239e3f47_prof);

        
        $__internal_bbb3ef0856de3792900fda57654b3884c7520e077edf2831478c892ad44caea3->leave($__internal_bbb3ef0856de3792900fda57654b3884c7520e077edf2831478c892ad44caea3_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_b6091763f87b4dafd8b1bd29011a5b38051f0746445db18b8f12dd0c3e9800db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6091763f87b4dafd8b1bd29011a5b38051f0746445db18b8f12dd0c3e9800db->enter($__internal_b6091763f87b4dafd8b1bd29011a5b38051f0746445db18b8f12dd0c3e9800db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_6ef5170316b84566af73dbd7f5f7c31a0c6eeccf817e8b99e530bea488bc6298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef5170316b84566af73dbd7f5f7c31a0c6eeccf817e8b99e530bea488bc6298->enter($__internal_6ef5170316b84566af73dbd7f5f7c31a0c6eeccf817e8b99e530bea488bc6298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tag"] ?? $this->getContext($context, "tag")));
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
            echo "            <div class=\"raw\">
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "tags", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 15
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
                // line 17
                echo "                    <p>Pas de tag</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            </div>
            <hr>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6ef5170316b84566af73dbd7f5f7c31a0c6eeccf817e8b99e530bea488bc6298->leave($__internal_6ef5170316b84566af73dbd7f5f7c31a0c6eeccf817e8b99e530bea488bc6298_prof);

        
        $__internal_b6091763f87b4dafd8b1bd29011a5b38051f0746445db18b8f12dd0c3e9800db->leave($__internal_b6091763f87b4dafd8b1bd29011a5b38051f0746445db18b8f12dd0c3e9800db_prof);

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
        return array (  131 => 19,  124 => 17,  112 => 15,  107 => 14,  104 => 13,  96 => 11,  93 => 10,  90 => 9,  86 => 8,  80 => 7,  77 => 6,  73 => 5,  70 => 4,  61 => 3,  41 => 2,  11 => 1,);
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

    {% for article in tag %}
        <div class=\"row\">
            <h1><a href=\"{{ path('detail_blog', {id:article.id}) }}\">{{ article.titre }}</a></h1>
            le <em>{{ article.date | date('d m Y') }}</em>
            <p>{{ article.contenu | raw }}</p> {# raw permet de d'interpreter le #}
            {% if article.image %}
                <img src=\"{{ article.image.url }}\" alt=\"{{ article.image.alt }}\">
            {% endif %}
            <div class=\"raw\">
                {% for tag in article.tags %}
                    <a href=\"{{ path('tag_blog', {id:tag.id}) }}\"><p class=\"btn btn-primary\">{{ tag.titre }} <span class=\"badge\">{{ nbtag }}</span></p></a>
                {% else %}
                    <p>Pas de tag</p>
                {% endfor %}
            </div>
            <hr>
        </div>
    {% endfor %}
{% endblock %}", ":blog:tag.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/blog/tag.html.twig");
    }
}
