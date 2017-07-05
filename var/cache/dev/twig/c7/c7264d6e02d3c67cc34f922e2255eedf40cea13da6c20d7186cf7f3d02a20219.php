<?php

/* :tag:new.html.twig */
class __TwigTemplate_5124294cfa7e1bb19e01fd979d77e50e1ed7ee71f0a7e276a7402e0e5b5d6848 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tag:new.html.twig", 1);
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
        $__internal_fb2395c2ca05e7d92e10a5b27abe5ae57d0dc6e9cc335458f85dd3ddb1f922b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb2395c2ca05e7d92e10a5b27abe5ae57d0dc6e9cc335458f85dd3ddb1f922b6->enter($__internal_fb2395c2ca05e7d92e10a5b27abe5ae57d0dc6e9cc335458f85dd3ddb1f922b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:new.html.twig"));

        $__internal_971f862d91f87b322a64ab557dacddd9a0faa79d64e5dc22600ad704e2c360c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971f862d91f87b322a64ab557dacddd9a0faa79d64e5dc22600ad704e2c360c2->enter($__internal_971f862d91f87b322a64ab557dacddd9a0faa79d64e5dc22600ad704e2c360c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb2395c2ca05e7d92e10a5b27abe5ae57d0dc6e9cc335458f85dd3ddb1f922b6->leave($__internal_fb2395c2ca05e7d92e10a5b27abe5ae57d0dc6e9cc335458f85dd3ddb1f922b6_prof);

        
        $__internal_971f862d91f87b322a64ab557dacddd9a0faa79d64e5dc22600ad704e2c360c2->leave($__internal_971f862d91f87b322a64ab557dacddd9a0faa79d64e5dc22600ad704e2c360c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d1936eea4832255673e05e59772ab7b5daf972832d2cd08a4f4f1d556d990ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d1936eea4832255673e05e59772ab7b5daf972832d2cd08a4f4f1d556d990ce->enter($__internal_7d1936eea4832255673e05e59772ab7b5daf972832d2cd08a4f4f1d556d990ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6322a4c7c4394c9da99b7cd4188972d0dfbdd6d5b70c5a15f43531d4e4775a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6322a4c7c4394c9da99b7cd4188972d0dfbdd6d5b70c5a15f43531d4e4775a4b->enter($__internal_6322a4c7c4394c9da99b7cd4188972d0dfbdd6d5b70c5a15f43531d4e4775a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tag creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" class=\"btn btn-default\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tag_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6322a4c7c4394c9da99b7cd4188972d0dfbdd6d5b70c5a15f43531d4e4775a4b->leave($__internal_6322a4c7c4394c9da99b7cd4188972d0dfbdd6d5b70c5a15f43531d4e4775a4b_prof);

        
        $__internal_7d1936eea4832255673e05e59772ab7b5daf972832d2cd08a4f4f1d556d990ce->leave($__internal_7d1936eea4832255673e05e59772ab7b5daf972832d2cd08a4f4f1d556d990ce_prof);

    }

    public function getTemplateName()
    {
        return ":tag:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tag creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" class=\"btn btn-default\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_tag_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":tag:new.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/tag/new.html.twig");
    }
}
