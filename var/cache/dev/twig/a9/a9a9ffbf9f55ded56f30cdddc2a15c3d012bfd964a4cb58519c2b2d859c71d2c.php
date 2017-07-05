<?php

/* tag/show.html.twig */
class __TwigTemplate_5ed16e3638e407c266e0ad3238e7a0d779f7f5d7230d8e996f981ae901cc1139 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/show.html.twig", 1);
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
        $__internal_01bdbe39ed13199fe7ba3ee4958c40c97a40c2a1627ca29360903cf72788568a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01bdbe39ed13199fe7ba3ee4958c40c97a40c2a1627ca29360903cf72788568a->enter($__internal_01bdbe39ed13199fe7ba3ee4958c40c97a40c2a1627ca29360903cf72788568a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/show.html.twig"));

        $__internal_ef54b5545c6fb0fdd9b1359b1a770be2bf21f497cf495f2e3649465ab5bc41b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef54b5545c6fb0fdd9b1359b1a770be2bf21f497cf495f2e3649465ab5bc41b1->enter($__internal_ef54b5545c6fb0fdd9b1359b1a770be2bf21f497cf495f2e3649465ab5bc41b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01bdbe39ed13199fe7ba3ee4958c40c97a40c2a1627ca29360903cf72788568a->leave($__internal_01bdbe39ed13199fe7ba3ee4958c40c97a40c2a1627ca29360903cf72788568a_prof);

        
        $__internal_ef54b5545c6fb0fdd9b1359b1a770be2bf21f497cf495f2e3649465ab5bc41b1->leave($__internal_ef54b5545c6fb0fdd9b1359b1a770be2bf21f497cf495f2e3649465ab5bc41b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_57bbab0e3b241a6ab1d39927414db0331cf071e06f97042982b8b87610587d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57bbab0e3b241a6ab1d39927414db0331cf071e06f97042982b8b87610587d4d->enter($__internal_57bbab0e3b241a6ab1d39927414db0331cf071e06f97042982b8b87610587d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b93844cf5faf8127d6ea798b9f9fbe678fda7cf0ec37bd86b56e2409ec642ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b93844cf5faf8127d6ea798b9f9fbe678fda7cf0ec37bd86b56e2409ec642ee->enter($__internal_2b93844cf5faf8127d6ea798b9f9fbe678fda7cf0ec37bd86b56e2409ec642ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tag</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tag_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tag_edit", array("id" => $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2b93844cf5faf8127d6ea798b9f9fbe678fda7cf0ec37bd86b56e2409ec642ee->leave($__internal_2b93844cf5faf8127d6ea798b9f9fbe678fda7cf0ec37bd86b56e2409ec642ee_prof);

        
        $__internal_57bbab0e3b241a6ab1d39927414db0331cf071e06f97042982b8b87610587d4d->leave($__internal_57bbab0e3b241a6ab1d39927414db0331cf071e06f97042982b8b87610587d4d_prof);

    }

    public function getTemplateName()
    {
        return "tag/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tag</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ tag.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ tag.titre }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_tag_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_tag_edit', { 'id': tag.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "tag/show.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\tag\\show.html.twig");
    }
}
