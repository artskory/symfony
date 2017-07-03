<?php

/* :tag:index.html.twig */
class __TwigTemplate_6be3a39532cd9ddcfaf0fe6d2084f5b58ede9afae541d073fbb4079598484332 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tag:index.html.twig", 1);
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
        $__internal_ad9d169933a9fa69a1e52dda1f1e0844ac1663b7f83c5241e65e506221af7908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad9d169933a9fa69a1e52dda1f1e0844ac1663b7f83c5241e65e506221af7908->enter($__internal_ad9d169933a9fa69a1e52dda1f1e0844ac1663b7f83c5241e65e506221af7908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:index.html.twig"));

        $__internal_6a8c47eb12a1b954fb4d584d17413d25fdcbbb56769518b5e7c6521aa193c167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8c47eb12a1b954fb4d584d17413d25fdcbbb56769518b5e7c6521aa193c167->enter($__internal_6a8c47eb12a1b954fb4d584d17413d25fdcbbb56769518b5e7c6521aa193c167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad9d169933a9fa69a1e52dda1f1e0844ac1663b7f83c5241e65e506221af7908->leave($__internal_ad9d169933a9fa69a1e52dda1f1e0844ac1663b7f83c5241e65e506221af7908_prof);

        
        $__internal_6a8c47eb12a1b954fb4d584d17413d25fdcbbb56769518b5e7c6521aa193c167->leave($__internal_6a8c47eb12a1b954fb4d584d17413d25fdcbbb56769518b5e7c6521aa193c167_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a8016e78a9bffbed205b042d9c873770e0667ae2eb99ac7dda488739b75ebcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8016e78a9bffbed205b042d9c873770e0667ae2eb99ac7dda488739b75ebcd->enter($__internal_7a8016e78a9bffbed205b042d9c873770e0667ae2eb99ac7dda488739b75ebcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_505d25b0398017f06d1fb80e3da5c25ac8cbefb3a4ffbfbd412ed8847cebb468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505d25b0398017f06d1fb80e3da5c25ac8cbefb3a4ffbfbd412ed8847cebb468->enter($__internal_505d25b0398017f06d1fb80e3da5c25ac8cbefb3a4ffbfbd412ed8847cebb468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_505d25b0398017f06d1fb80e3da5c25ac8cbefb3a4ffbfbd412ed8847cebb468->leave($__internal_505d25b0398017f06d1fb80e3da5c25ac8cbefb3a4ffbfbd412ed8847cebb468_prof);

        
        $__internal_7a8016e78a9bffbed205b042d9c873770e0667ae2eb99ac7dda488739b75ebcd->leave($__internal_7a8016e78a9bffbed205b042d9c873770e0667ae2eb99ac7dda488739b75ebcd_prof);

    }

    public function getTemplateName()
    {
        return ":tag:index.html.twig";
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
", ":tag:index.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/tag/index.html.twig");
    }
}
