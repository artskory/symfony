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
        $__internal_068aa8d26b71f26e5b35c030f47ca0212300bfc52882bf411b07e7ea1bb99573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_068aa8d26b71f26e5b35c030f47ca0212300bfc52882bf411b07e7ea1bb99573->enter($__internal_068aa8d26b71f26e5b35c030f47ca0212300bfc52882bf411b07e7ea1bb99573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $__internal_cdd5a6c48cea52a701219f09429fca91ff75c8fbbf495581b4bc460f642b2b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd5a6c48cea52a701219f09429fca91ff75c8fbbf495581b4bc460f642b2b78->enter($__internal_cdd5a6c48cea52a701219f09429fca91ff75c8fbbf495581b4bc460f642b2b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_068aa8d26b71f26e5b35c030f47ca0212300bfc52882bf411b07e7ea1bb99573->leave($__internal_068aa8d26b71f26e5b35c030f47ca0212300bfc52882bf411b07e7ea1bb99573_prof);

        
        $__internal_cdd5a6c48cea52a701219f09429fca91ff75c8fbbf495581b4bc460f642b2b78->leave($__internal_cdd5a6c48cea52a701219f09429fca91ff75c8fbbf495581b4bc460f642b2b78_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_402c57663bf94c3c2e64216b29a6662b1ac8782243966b5668a938e010af9ca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402c57663bf94c3c2e64216b29a6662b1ac8782243966b5668a938e010af9ca1->enter($__internal_402c57663bf94c3c2e64216b29a6662b1ac8782243966b5668a938e010af9ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c780a5d377c94e6ab587441b208a4ad7cc25e94d979ce7118be39772a2e34d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c780a5d377c94e6ab587441b208a4ad7cc25e94d979ce7118be39772a2e34d25->enter($__internal_c780a5d377c94e6ab587441b208a4ad7cc25e94d979ce7118be39772a2e34d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c780a5d377c94e6ab587441b208a4ad7cc25e94d979ce7118be39772a2e34d25->leave($__internal_c780a5d377c94e6ab587441b208a4ad7cc25e94d979ce7118be39772a2e34d25_prof);

        
        $__internal_402c57663bf94c3c2e64216b29a6662b1ac8782243966b5668a938e010af9ca1->leave($__internal_402c57663bf94c3c2e64216b29a6662b1ac8782243966b5668a938e010af9ca1_prof);

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
