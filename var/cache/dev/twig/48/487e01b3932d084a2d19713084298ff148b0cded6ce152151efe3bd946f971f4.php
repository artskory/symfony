<?php

/* tag/edit.html.twig */
class __TwigTemplate_0d973ce9d7605c31dc5cf1f6deecff55f72ec829725293e211b48b7416831d41 extends Twig_Template
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
        $__internal_e9d2009c4b1258e2dff74b321c91341ff66e78f5fcafa79e05a74932be6527c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d2009c4b1258e2dff74b321c91341ff66e78f5fcafa79e05a74932be6527c3->enter($__internal_e9d2009c4b1258e2dff74b321c91341ff66e78f5fcafa79e05a74932be6527c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/edit.html.twig"));

        $__internal_9632067de62113746992a441bc7e14c6e1530e169bf141a39020ace0e0edc2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9632067de62113746992a441bc7e14c6e1530e169bf141a39020ace0e0edc2c3->enter($__internal_9632067de62113746992a441bc7e14c6e1530e169bf141a39020ace0e0edc2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9d2009c4b1258e2dff74b321c91341ff66e78f5fcafa79e05a74932be6527c3->leave($__internal_e9d2009c4b1258e2dff74b321c91341ff66e78f5fcafa79e05a74932be6527c3_prof);

        
        $__internal_9632067de62113746992a441bc7e14c6e1530e169bf141a39020ace0e0edc2c3->leave($__internal_9632067de62113746992a441bc7e14c6e1530e169bf141a39020ace0e0edc2c3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ed62380ed164508bb159f96a1dbd146cba228b7ab5c40ca1c01ade5573b78c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed62380ed164508bb159f96a1dbd146cba228b7ab5c40ca1c01ade5573b78c7->enter($__internal_0ed62380ed164508bb159f96a1dbd146cba228b7ab5c40ca1c01ade5573b78c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4699f7d5b47dd5fd94d8bb4357b083a977bf196772aaa15eda27f220d383e652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4699f7d5b47dd5fd94d8bb4357b083a977bf196772aaa15eda27f220d383e652->enter($__internal_4699f7d5b47dd5fd94d8bb4357b083a977bf196772aaa15eda27f220d383e652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4699f7d5b47dd5fd94d8bb4357b083a977bf196772aaa15eda27f220d383e652->leave($__internal_4699f7d5b47dd5fd94d8bb4357b083a977bf196772aaa15eda27f220d383e652_prof);

        
        $__internal_0ed62380ed164508bb159f96a1dbd146cba228b7ab5c40ca1c01ade5573b78c7->leave($__internal_0ed62380ed164508bb159f96a1dbd146cba228b7ab5c40ca1c01ade5573b78c7_prof);

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
