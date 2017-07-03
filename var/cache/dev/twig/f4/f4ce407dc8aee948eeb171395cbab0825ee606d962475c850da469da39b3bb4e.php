<?php

/* tag/show.html.twig */
class __TwigTemplate_79b57fe72c664103b1905bbaf9fd4878f82083b3ac1ea192bebed7f86d97490c extends Twig_Template
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
        $__internal_e88a62706c721c9e92757b385c437626c0826a288797d3ade1d55707659e6ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e88a62706c721c9e92757b385c437626c0826a288797d3ade1d55707659e6ca3->enter($__internal_e88a62706c721c9e92757b385c437626c0826a288797d3ade1d55707659e6ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/show.html.twig"));

        $__internal_c6a0683274450cca1b46a1bcc5bbd76be2457b7e3e35e15d495d1457011bdfab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a0683274450cca1b46a1bcc5bbd76be2457b7e3e35e15d495d1457011bdfab->enter($__internal_c6a0683274450cca1b46a1bcc5bbd76be2457b7e3e35e15d495d1457011bdfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e88a62706c721c9e92757b385c437626c0826a288797d3ade1d55707659e6ca3->leave($__internal_e88a62706c721c9e92757b385c437626c0826a288797d3ade1d55707659e6ca3_prof);

        
        $__internal_c6a0683274450cca1b46a1bcc5bbd76be2457b7e3e35e15d495d1457011bdfab->leave($__internal_c6a0683274450cca1b46a1bcc5bbd76be2457b7e3e35e15d495d1457011bdfab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3804abf25eb2be760f10b26b1adc03bb7c3abd08b50d7dcf6ed3422b1afb4329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3804abf25eb2be760f10b26b1adc03bb7c3abd08b50d7dcf6ed3422b1afb4329->enter($__internal_3804abf25eb2be760f10b26b1adc03bb7c3abd08b50d7dcf6ed3422b1afb4329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_676246f510968d458e57c8c02b5ac04b35e425f829853b3e378de7cb4cb41dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676246f510968d458e57c8c02b5ac04b35e425f829853b3e378de7cb4cb41dfa->enter($__internal_676246f510968d458e57c8c02b5ac04b35e425f829853b3e378de7cb4cb41dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_676246f510968d458e57c8c02b5ac04b35e425f829853b3e378de7cb4cb41dfa->leave($__internal_676246f510968d458e57c8c02b5ac04b35e425f829853b3e378de7cb4cb41dfa_prof);

        
        $__internal_3804abf25eb2be760f10b26b1adc03bb7c3abd08b50d7dcf6ed3422b1afb4329->leave($__internal_3804abf25eb2be760f10b26b1adc03bb7c3abd08b50d7dcf6ed3422b1afb4329_prof);

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
