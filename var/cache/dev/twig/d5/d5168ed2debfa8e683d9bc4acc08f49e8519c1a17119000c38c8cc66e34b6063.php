<?php

/* tag/index.html.twig */
class __TwigTemplate_27df92e2c47af99cad82eae65ce682201c6ba80fe972a04d72e4c99d6f188bb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05aeaf31a289f056915bccf6e5a688e140394ecaa8e69ffde5025d1fec8c0fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05aeaf31a289f056915bccf6e5a688e140394ecaa8e69ffde5025d1fec8c0fa6->enter($__internal_05aeaf31a289f056915bccf6e5a688e140394ecaa8e69ffde5025d1fec8c0fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $__internal_3ff8143f7255ce52589090104fab9842c1b16360b2de540d354e79a72856b493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff8143f7255ce52589090104fab9842c1b16360b2de540d354e79a72856b493->enter($__internal_3ff8143f7255ce52589090104fab9842c1b16360b2de540d354e79a72856b493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05aeaf31a289f056915bccf6e5a688e140394ecaa8e69ffde5025d1fec8c0fa6->leave($__internal_05aeaf31a289f056915bccf6e5a688e140394ecaa8e69ffde5025d1fec8c0fa6_prof);

        
        $__internal_3ff8143f7255ce52589090104fab9842c1b16360b2de540d354e79a72856b493->leave($__internal_3ff8143f7255ce52589090104fab9842c1b16360b2de540d354e79a72856b493_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7174f407725559b76484dde48139e9f6d7fdf813f15a68833ccaeb1b9a758a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7174f407725559b76484dde48139e9f6d7fdf813f15a68833ccaeb1b9a758a60->enter($__internal_7174f407725559b76484dde48139e9f6d7fdf813f15a68833ccaeb1b9a758a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e36f62506d14f52bf7fcaa920725361ed9ce61538aa58c17ee4e1df340dfe01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e36f62506d14f52bf7fcaa920725361ed9ce61538aa58c17ee4e1df340dfe01->enter($__internal_8e36f62506d14f52bf7fcaa920725361ed9ce61538aa58c17ee4e1df340dfe01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tags list</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th class=\"th-center\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "titre", array()), "html", null, true);
            echo "</td>
                <td><a class=\"btn btn-primary\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">show</a></td>
                <td><a class=\"btn btn-warning\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tag_edit", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">edit</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a class=\"btn btn-info\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tag_new");
        echo "\">Create a new tag</a>
        </li>
    </ul>
";
        
        $__internal_8e36f62506d14f52bf7fcaa920725361ed9ce61538aa58c17ee4e1df340dfe01->leave($__internal_8e36f62506d14f52bf7fcaa920725361ed9ce61538aa58c17ee4e1df340dfe01_prof);

        
        $__internal_7174f407725559b76484dde48139e9f6d7fdf813f15a68833ccaeb1b9a758a60->leave($__internal_7174f407725559b76484dde48139e9f6d7fdf813f15a68833ccaeb1b9a758a60_prof);

    }

    public function getTemplateName()
    {
        return "tag/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 28,  92 => 23,  83 => 20,  79 => 19,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Tags list</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th class=\"th-center\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for tag in tags %}
            <tr>
                <td><a href=\"{{ path('admin_tag_show', { 'id': tag.id }) }}\">{{ tag.id }}</a></td>
                <td>{{ tag.titre }}</td>
                <td><a class=\"btn btn-primary\" href=\"{{ path('admin_tag_show', { 'id': tag.id }) }}\">show</a></td>
                <td><a class=\"btn btn-warning\" href=\"{{ path('admin_tag_edit', { 'id': tag.id }) }}\">edit</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a class=\"btn btn-info\" href=\"{{ path('admin_tag_new') }}\">Create a new tag</a>
        </li>
    </ul>
{% endblock %}
", "tag/index.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\tag\\index.html.twig");
    }
}
