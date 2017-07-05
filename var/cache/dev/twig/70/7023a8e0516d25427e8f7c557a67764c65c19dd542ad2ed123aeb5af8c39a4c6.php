<?php

/* tag/edit.html.twig */
class __TwigTemplate_362529436c2c9d292b94dbdee7355761c81020783388e03ff8e03d8bbfb6538b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/edit.html.twig", 1);
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
        $__internal_6c5ae0077526e8aa7c68a19c073c234fbfef1121d777df0a17f2d61c44093fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c5ae0077526e8aa7c68a19c073c234fbfef1121d777df0a17f2d61c44093fb5->enter($__internal_6c5ae0077526e8aa7c68a19c073c234fbfef1121d777df0a17f2d61c44093fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/edit.html.twig"));

        $__internal_1f16ff5aae3a915b55f3ce7a2f7f7348791a38113cf5d49117930bf2ac7d06dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f16ff5aae3a915b55f3ce7a2f7f7348791a38113cf5d49117930bf2ac7d06dc->enter($__internal_1f16ff5aae3a915b55f3ce7a2f7f7348791a38113cf5d49117930bf2ac7d06dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c5ae0077526e8aa7c68a19c073c234fbfef1121d777df0a17f2d61c44093fb5->leave($__internal_6c5ae0077526e8aa7c68a19c073c234fbfef1121d777df0a17f2d61c44093fb5_prof);

        
        $__internal_1f16ff5aae3a915b55f3ce7a2f7f7348791a38113cf5d49117930bf2ac7d06dc->leave($__internal_1f16ff5aae3a915b55f3ce7a2f7f7348791a38113cf5d49117930bf2ac7d06dc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a2ea3e8f67ed397830b42189f1250f444b406f5bf0fdb05ecf55636f86e23b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2ea3e8f67ed397830b42189f1250f444b406f5bf0fdb05ecf55636f86e23b7->enter($__internal_5a2ea3e8f67ed397830b42189f1250f444b406f5bf0fdb05ecf55636f86e23b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c84945f0279cddc04f7365df2ee9d7a6437636a2d5972d31aa74f42007c167e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84945f0279cddc04f7365df2ee9d7a6437636a2d5972d31aa74f42007c167e3->enter($__internal_c84945f0279cddc04f7365df2ee9d7a6437636a2d5972d31aa74f42007c167e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tag edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" class=\"btn btn-default\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tag_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-default\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c84945f0279cddc04f7365df2ee9d7a6437636a2d5972d31aa74f42007c167e3->leave($__internal_c84945f0279cddc04f7365df2ee9d7a6437636a2d5972d31aa74f42007c167e3_prof);

        
        $__internal_5a2ea3e8f67ed397830b42189f1250f444b406f5bf0fdb05ecf55636f86e23b7->leave($__internal_5a2ea3e8f67ed397830b42189f1250f444b406f5bf0fdb05ecf55636f86e23b7_prof);

    }

    public function getTemplateName()
    {
        return "tag/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tag edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" class=\"btn btn-default\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_tag_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-default\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "tag/edit.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\tag\\edit.html.twig");
    }
}
