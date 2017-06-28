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
        $__internal_5e95d80cfef344be1cf91b2789e26aa2bdae55e26fdb8c478cdccde9f0106e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e95d80cfef344be1cf91b2789e26aa2bdae55e26fdb8c478cdccde9f0106e09->enter($__internal_5e95d80cfef344be1cf91b2789e26aa2bdae55e26fdb8c478cdccde9f0106e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/tag.html.twig"));

        $__internal_13153bc0059fa7ddee88a3352a2a6098931f67ddcc0fef89169632ed2c9a88cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13153bc0059fa7ddee88a3352a2a6098931f67ddcc0fef89169632ed2c9a88cc->enter($__internal_13153bc0059fa7ddee88a3352a2a6098931f67ddcc0fef89169632ed2c9a88cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/tag.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e95d80cfef344be1cf91b2789e26aa2bdae55e26fdb8c478cdccde9f0106e09->leave($__internal_5e95d80cfef344be1cf91b2789e26aa2bdae55e26fdb8c478cdccde9f0106e09_prof);

        
        $__internal_13153bc0059fa7ddee88a3352a2a6098931f67ddcc0fef89169632ed2c9a88cc->leave($__internal_13153bc0059fa7ddee88a3352a2a6098931f67ddcc0fef89169632ed2c9a88cc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b86ff653388b2ca007b8f91c04eef4a19bd0d5d1c0ef0c2a106eacc59a6f4e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b86ff653388b2ca007b8f91c04eef4a19bd0d5d1c0ef0c2a106eacc59a6f4e0->enter($__internal_5b86ff653388b2ca007b8f91c04eef4a19bd0d5d1c0ef0c2a106eacc59a6f4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_86c135b1f06522c97a955485f99d096547199b8d85ec3a5b397cfa99ae600ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c135b1f06522c97a955485f99d096547199b8d85ec3a5b397cfa99ae600ac9->enter($__internal_86c135b1f06522c97a955485f99d096547199b8d85ec3a5b397cfa99ae600ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_86c135b1f06522c97a955485f99d096547199b8d85ec3a5b397cfa99ae600ac9->leave($__internal_86c135b1f06522c97a955485f99d096547199b8d85ec3a5b397cfa99ae600ac9_prof);

        
        $__internal_5b86ff653388b2ca007b8f91c04eef4a19bd0d5d1c0ef0c2a106eacc59a6f4e0->leave($__internal_5b86ff653388b2ca007b8f91c04eef4a19bd0d5d1c0ef0c2a106eacc59a6f4e0_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_c5990fd4603dec268053e90fe75d7e01c2d9681433329c2242c69399b241190a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5990fd4603dec268053e90fe75d7e01c2d9681433329c2242c69399b241190a->enter($__internal_c5990fd4603dec268053e90fe75d7e01c2d9681433329c2242c69399b241190a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_cf78129ca16f43b5c0b73ac5144048b325d90149be6c6c301c9d955860f9a712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf78129ca16f43b5c0b73ac5144048b325d90149be6c6c301c9d955860f9a712->enter($__internal_cf78129ca16f43b5c0b73ac5144048b325d90149be6c6c301c9d955860f9a712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_cf78129ca16f43b5c0b73ac5144048b325d90149be6c6c301c9d955860f9a712->leave($__internal_cf78129ca16f43b5c0b73ac5144048b325d90149be6c6c301c9d955860f9a712_prof);

        
        $__internal_c5990fd4603dec268053e90fe75d7e01c2d9681433329c2242c69399b241190a->leave($__internal_c5990fd4603dec268053e90fe75d7e01c2d9681433329c2242c69399b241190a_prof);

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
{% endblock %}", "blog/tag.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\blog\\tag.html.twig");
    }
}
