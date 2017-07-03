<?php

/* :tag:show.html.twig */
class __TwigTemplate_623b97f10d076ca9057c7afa24fdf7c57ca4b340ae3308c5942272583aaf1c94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tag:show.html.twig", 1);
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
        $__internal_9957dd3b786b5a1cda86a2ad61df275c576aee352280f3ddb9f645cdffb46187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9957dd3b786b5a1cda86a2ad61df275c576aee352280f3ddb9f645cdffb46187->enter($__internal_9957dd3b786b5a1cda86a2ad61df275c576aee352280f3ddb9f645cdffb46187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:show.html.twig"));

        $__internal_63a68804bfcd7312878c86010bf40d41f3bce5b6442a6b486e0a5a51fcdf685e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a68804bfcd7312878c86010bf40d41f3bce5b6442a6b486e0a5a51fcdf685e->enter($__internal_63a68804bfcd7312878c86010bf40d41f3bce5b6442a6b486e0a5a51fcdf685e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9957dd3b786b5a1cda86a2ad61df275c576aee352280f3ddb9f645cdffb46187->leave($__internal_9957dd3b786b5a1cda86a2ad61df275c576aee352280f3ddb9f645cdffb46187_prof);

        
        $__internal_63a68804bfcd7312878c86010bf40d41f3bce5b6442a6b486e0a5a51fcdf685e->leave($__internal_63a68804bfcd7312878c86010bf40d41f3bce5b6442a6b486e0a5a51fcdf685e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c10bb193f13f51a0feca9145b43f1a695cddf44c19c6eac0e60174e5b295c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c10bb193f13f51a0feca9145b43f1a695cddf44c19c6eac0e60174e5b295c44->enter($__internal_4c10bb193f13f51a0feca9145b43f1a695cddf44c19c6eac0e60174e5b295c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d0c706322e98f03f4282466b098eb7a4430fffdce2b1a9778ce5e0d3eb46544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0c706322e98f03f4282466b098eb7a4430fffdce2b1a9778ce5e0d3eb46544->enter($__internal_5d0c706322e98f03f4282466b098eb7a4430fffdce2b1a9778ce5e0d3eb46544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5d0c706322e98f03f4282466b098eb7a4430fffdce2b1a9778ce5e0d3eb46544->leave($__internal_5d0c706322e98f03f4282466b098eb7a4430fffdce2b1a9778ce5e0d3eb46544_prof);

        
        $__internal_4c10bb193f13f51a0feca9145b43f1a695cddf44c19c6eac0e60174e5b295c44->leave($__internal_4c10bb193f13f51a0feca9145b43f1a695cddf44c19c6eac0e60174e5b295c44_prof);

    }

    public function getTemplateName()
    {
        return ":tag:show.html.twig";
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
", ":tag:show.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/tag/show.html.twig");
    }
}
