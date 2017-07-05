<?php

/* :tag:edit.html.twig */
class __TwigTemplate_4930d4cde629a972f0ff7bf617b9faa4485801c8950949842894e34abb58d38b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tag:edit.html.twig", 1);
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
        $__internal_719a693349af314d377b1b045dfdeb0db4fdef67e837608ca1d886ba632b97ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719a693349af314d377b1b045dfdeb0db4fdef67e837608ca1d886ba632b97ed->enter($__internal_719a693349af314d377b1b045dfdeb0db4fdef67e837608ca1d886ba632b97ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:edit.html.twig"));

        $__internal_61ed0b1c30dc6779f1a4ab4396e8189b59a26d51f91e52fa8d626bb263f85a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ed0b1c30dc6779f1a4ab4396e8189b59a26d51f91e52fa8d626bb263f85a29->enter($__internal_61ed0b1c30dc6779f1a4ab4396e8189b59a26d51f91e52fa8d626bb263f85a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_719a693349af314d377b1b045dfdeb0db4fdef67e837608ca1d886ba632b97ed->leave($__internal_719a693349af314d377b1b045dfdeb0db4fdef67e837608ca1d886ba632b97ed_prof);

        
        $__internal_61ed0b1c30dc6779f1a4ab4396e8189b59a26d51f91e52fa8d626bb263f85a29->leave($__internal_61ed0b1c30dc6779f1a4ab4396e8189b59a26d51f91e52fa8d626bb263f85a29_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f35643494259e8a2695bc2e45eaab749182461a8cd05e43fcfe36e9fbc77c28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f35643494259e8a2695bc2e45eaab749182461a8cd05e43fcfe36e9fbc77c28->enter($__internal_1f35643494259e8a2695bc2e45eaab749182461a8cd05e43fcfe36e9fbc77c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46cccd587118d93de37ed19662ed549c944511896c23a6748173cdb9d0b52d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46cccd587118d93de37ed19662ed549c944511896c23a6748173cdb9d0b52d8a->enter($__internal_46cccd587118d93de37ed19662ed549c944511896c23a6748173cdb9d0b52d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_46cccd587118d93de37ed19662ed549c944511896c23a6748173cdb9d0b52d8a->leave($__internal_46cccd587118d93de37ed19662ed549c944511896c23a6748173cdb9d0b52d8a_prof);

        
        $__internal_1f35643494259e8a2695bc2e45eaab749182461a8cd05e43fcfe36e9fbc77c28->leave($__internal_1f35643494259e8a2695bc2e45eaab749182461a8cd05e43fcfe36e9fbc77c28_prof);

    }

    public function getTemplateName()
    {
        return ":tag:edit.html.twig";
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
", ":tag:edit.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/tag/edit.html.twig");
    }
}
