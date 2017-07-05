<?php

/* :tag:show.html.twig */
class __TwigTemplate_6777709b07b47d909c597ef17caba4b28ca4390a7b1f0a023afe2f774ff44132 extends Twig_Template
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
        $__internal_4cd4f8e23f6229ff6fa6516326f041baeefc50a9f00b78a08b218a38526e32c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd4f8e23f6229ff6fa6516326f041baeefc50a9f00b78a08b218a38526e32c2->enter($__internal_4cd4f8e23f6229ff6fa6516326f041baeefc50a9f00b78a08b218a38526e32c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:show.html.twig"));

        $__internal_eff0e8b6164a5a35fecbd9261f3d64c0b992c74edf937d88619bc4397a43e03f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff0e8b6164a5a35fecbd9261f3d64c0b992c74edf937d88619bc4397a43e03f->enter($__internal_eff0e8b6164a5a35fecbd9261f3d64c0b992c74edf937d88619bc4397a43e03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cd4f8e23f6229ff6fa6516326f041baeefc50a9f00b78a08b218a38526e32c2->leave($__internal_4cd4f8e23f6229ff6fa6516326f041baeefc50a9f00b78a08b218a38526e32c2_prof);

        
        $__internal_eff0e8b6164a5a35fecbd9261f3d64c0b992c74edf937d88619bc4397a43e03f->leave($__internal_eff0e8b6164a5a35fecbd9261f3d64c0b992c74edf937d88619bc4397a43e03f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2dba7ef63ad91259050ea270ce4093783281da3b2c9d860bfd42fe231a2b29f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2dba7ef63ad91259050ea270ce4093783281da3b2c9d860bfd42fe231a2b29f->enter($__internal_e2dba7ef63ad91259050ea270ce4093783281da3b2c9d860bfd42fe231a2b29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85e78e789b36182a85ae8ed615e95d3775eca27c94df3f65e0b5264bb8db5a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e78e789b36182a85ae8ed615e95d3775eca27c94df3f65e0b5264bb8db5a6d->enter($__internal_85e78e789b36182a85ae8ed615e95d3775eca27c94df3f65e0b5264bb8db5a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_85e78e789b36182a85ae8ed615e95d3775eca27c94df3f65e0b5264bb8db5a6d->leave($__internal_85e78e789b36182a85ae8ed615e95d3775eca27c94df3f65e0b5264bb8db5a6d_prof);

        
        $__internal_e2dba7ef63ad91259050ea270ce4093783281da3b2c9d860bfd42fe231a2b29f->leave($__internal_e2dba7ef63ad91259050ea270ce4093783281da3b2c9d860bfd42fe231a2b29f_prof);

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
