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
        $__internal_fa42c0e86745494c66694b00b75d2741fc1e052cce8d3962e7b69371122008ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa42c0e86745494c66694b00b75d2741fc1e052cce8d3962e7b69371122008ae->enter($__internal_fa42c0e86745494c66694b00b75d2741fc1e052cce8d3962e7b69371122008ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/show.html.twig"));

        $__internal_9821d7583ad52a5e2ea73638eef6e51391eb0deb3a2ea14a8ab2f9f0e06d7b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9821d7583ad52a5e2ea73638eef6e51391eb0deb3a2ea14a8ab2f9f0e06d7b19->enter($__internal_9821d7583ad52a5e2ea73638eef6e51391eb0deb3a2ea14a8ab2f9f0e06d7b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa42c0e86745494c66694b00b75d2741fc1e052cce8d3962e7b69371122008ae->leave($__internal_fa42c0e86745494c66694b00b75d2741fc1e052cce8d3962e7b69371122008ae_prof);

        
        $__internal_9821d7583ad52a5e2ea73638eef6e51391eb0deb3a2ea14a8ab2f9f0e06d7b19->leave($__internal_9821d7583ad52a5e2ea73638eef6e51391eb0deb3a2ea14a8ab2f9f0e06d7b19_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_59a3a7646e5e12ffc358c9985cbb6d0c51a63395eae2f106621d16efe947540e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a3a7646e5e12ffc358c9985cbb6d0c51a63395eae2f106621d16efe947540e->enter($__internal_59a3a7646e5e12ffc358c9985cbb6d0c51a63395eae2f106621d16efe947540e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5acc15488897f079fbec2f1f7ee61f4b4ddc0ca53932c22f2747e82ffa913d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acc15488897f079fbec2f1f7ee61f4b4ddc0ca53932c22f2747e82ffa913d2c->enter($__internal_5acc15488897f079fbec2f1f7ee61f4b4ddc0ca53932c22f2747e82ffa913d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5acc15488897f079fbec2f1f7ee61f4b4ddc0ca53932c22f2747e82ffa913d2c->leave($__internal_5acc15488897f079fbec2f1f7ee61f4b4ddc0ca53932c22f2747e82ffa913d2c_prof);

        
        $__internal_59a3a7646e5e12ffc358c9985cbb6d0c51a63395eae2f106621d16efe947540e->leave($__internal_59a3a7646e5e12ffc358c9985cbb6d0c51a63395eae2f106621d16efe947540e_prof);

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
