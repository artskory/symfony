<?php

/* blog/tag.html.twig */
class __TwigTemplate_8c71a088cd930573c35aea7033846235e67146c61a976069636ac4d6f9c3271c extends Twig_Template
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
        $__internal_10a28f0fb35ba80761635ad129c8f66882d04d3c2c711b12ccded7645971e561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a28f0fb35ba80761635ad129c8f66882d04d3c2c711b12ccded7645971e561->enter($__internal_10a28f0fb35ba80761635ad129c8f66882d04d3c2c711b12ccded7645971e561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/tag.html.twig"));

        $__internal_37d3ed2f808b6d1c754f5b0ef81746611e388fa6e4f7457baeb68e30c301ee8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37d3ed2f808b6d1c754f5b0ef81746611e388fa6e4f7457baeb68e30c301ee8b->enter($__internal_37d3ed2f808b6d1c754f5b0ef81746611e388fa6e4f7457baeb68e30c301ee8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/tag.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10a28f0fb35ba80761635ad129c8f66882d04d3c2c711b12ccded7645971e561->leave($__internal_10a28f0fb35ba80761635ad129c8f66882d04d3c2c711b12ccded7645971e561_prof);

        
        $__internal_37d3ed2f808b6d1c754f5b0ef81746611e388fa6e4f7457baeb68e30c301ee8b->leave($__internal_37d3ed2f808b6d1c754f5b0ef81746611e388fa6e4f7457baeb68e30c301ee8b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c71968ad2a8fd3a029ebdb60274b9ea3dbf4a57d9febf5aac0bed268a87646fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71968ad2a8fd3a029ebdb60274b9ea3dbf4a57d9febf5aac0bed268a87646fe->enter($__internal_c71968ad2a8fd3a029ebdb60274b9ea3dbf4a57d9febf5aac0bed268a87646fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e947fbb963a9a5756732b525be5a8f38df006a4aa1a3e6ed07a0dcab852023a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e947fbb963a9a5756732b525be5a8f38df006a4aa1a3e6ed07a0dcab852023a->enter($__internal_1e947fbb963a9a5756732b525be5a8f38df006a4aa1a3e6ed07a0dcab852023a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_1e947fbb963a9a5756732b525be5a8f38df006a4aa1a3e6ed07a0dcab852023a->leave($__internal_1e947fbb963a9a5756732b525be5a8f38df006a4aa1a3e6ed07a0dcab852023a_prof);

        
        $__internal_c71968ad2a8fd3a029ebdb60274b9ea3dbf4a57d9febf5aac0bed268a87646fe->leave($__internal_c71968ad2a8fd3a029ebdb60274b9ea3dbf4a57d9febf5aac0bed268a87646fe_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_3e1b9de8009a0e99cd7310026f6be38c423d62ae2e934f6e6abf9361b2d15c9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e1b9de8009a0e99cd7310026f6be38c423d62ae2e934f6e6abf9361b2d15c9a->enter($__internal_3e1b9de8009a0e99cd7310026f6be38c423d62ae2e934f6e6abf9361b2d15c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_ea154ebea3005b2f97d2b06e05f45bcb15ed2d8b6c22351fdf1d5fe6f5bf3787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea154ebea3005b2f97d2b06e05f45bcb15ed2d8b6c22351fdf1d5fe6f5bf3787->enter($__internal_ea154ebea3005b2f97d2b06e05f45bcb15ed2d8b6c22351fdf1d5fe6f5bf3787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_ea154ebea3005b2f97d2b06e05f45bcb15ed2d8b6c22351fdf1d5fe6f5bf3787->leave($__internal_ea154ebea3005b2f97d2b06e05f45bcb15ed2d8b6c22351fdf1d5fe6f5bf3787_prof);

        
        $__internal_3e1b9de8009a0e99cd7310026f6be38c423d62ae2e934f6e6abf9361b2d15c9a->leave($__internal_3e1b9de8009a0e99cd7310026f6be38c423d62ae2e934f6e6abf9361b2d15c9a_prof);

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
{% endblock %}", "blog/tag.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\blog\\tag.html.twig");
    }
}
