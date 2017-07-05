<?php

/* tag/index.html.twig */
class __TwigTemplate_3631266dd49f2e46728d25c10e932279a06078d3a2f8db556393e042880fe5fa extends Twig_Template
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
        $__internal_ed577efbed4fd5b650a3a4ea65a917ed355107cc3f0f1ad4c48d15d8524b9c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed577efbed4fd5b650a3a4ea65a917ed355107cc3f0f1ad4c48d15d8524b9c1a->enter($__internal_ed577efbed4fd5b650a3a4ea65a917ed355107cc3f0f1ad4c48d15d8524b9c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $__internal_dde3a1058f8f827fa2b610252e150c9e9cd938bcc374c5faf2bfef26dd3a5d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde3a1058f8f827fa2b610252e150c9e9cd938bcc374c5faf2bfef26dd3a5d61->enter($__internal_dde3a1058f8f827fa2b610252e150c9e9cd938bcc374c5faf2bfef26dd3a5d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed577efbed4fd5b650a3a4ea65a917ed355107cc3f0f1ad4c48d15d8524b9c1a->leave($__internal_ed577efbed4fd5b650a3a4ea65a917ed355107cc3f0f1ad4c48d15d8524b9c1a_prof);

        
        $__internal_dde3a1058f8f827fa2b610252e150c9e9cd938bcc374c5faf2bfef26dd3a5d61->leave($__internal_dde3a1058f8f827fa2b610252e150c9e9cd938bcc374c5faf2bfef26dd3a5d61_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b14e6f08e64592cb7d65259a336c54b38065c42f4ffa140820c49f853ae5f7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b14e6f08e64592cb7d65259a336c54b38065c42f4ffa140820c49f853ae5f7c->enter($__internal_8b14e6f08e64592cb7d65259a336c54b38065c42f4ffa140820c49f853ae5f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72fce80b19e5531edae098ebb91aec80a3e793715c439faec5a4f2b6a02becbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72fce80b19e5531edae098ebb91aec80a3e793715c439faec5a4f2b6a02becbb->enter($__internal_72fce80b19e5531edae098ebb91aec80a3e793715c439faec5a4f2b6a02becbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_72fce80b19e5531edae098ebb91aec80a3e793715c439faec5a4f2b6a02becbb->leave($__internal_72fce80b19e5531edae098ebb91aec80a3e793715c439faec5a4f2b6a02becbb_prof);

        
        $__internal_8b14e6f08e64592cb7d65259a336c54b38065c42f4ffa140820c49f853ae5f7c->leave($__internal_8b14e6f08e64592cb7d65259a336c54b38065c42f4ffa140820c49f853ae5f7c_prof);

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
