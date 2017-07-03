<?php

/* :tag:edit.html.twig */
class __TwigTemplate_e281c5a293dd2bcc929ac62824888534a359068b654b80392e17f39ec782b5c4 extends Twig_Template
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
        $__internal_b4a37a834d647a896a84d9479c452a24457e0dd5d078d199d3ddcaa8917bfbb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a37a834d647a896a84d9479c452a24457e0dd5d078d199d3ddcaa8917bfbb3->enter($__internal_b4a37a834d647a896a84d9479c452a24457e0dd5d078d199d3ddcaa8917bfbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:edit.html.twig"));

        $__internal_25b855557742206c325b062c5a56fc8d53db1861985aa0c54b8c40f33c2164ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b855557742206c325b062c5a56fc8d53db1861985aa0c54b8c40f33c2164ea->enter($__internal_25b855557742206c325b062c5a56fc8d53db1861985aa0c54b8c40f33c2164ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4a37a834d647a896a84d9479c452a24457e0dd5d078d199d3ddcaa8917bfbb3->leave($__internal_b4a37a834d647a896a84d9479c452a24457e0dd5d078d199d3ddcaa8917bfbb3_prof);

        
        $__internal_25b855557742206c325b062c5a56fc8d53db1861985aa0c54b8c40f33c2164ea->leave($__internal_25b855557742206c325b062c5a56fc8d53db1861985aa0c54b8c40f33c2164ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_975f22095fea63c17413e8b98a73085d4a99a5f12814e9c5ddfc448156e41ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_975f22095fea63c17413e8b98a73085d4a99a5f12814e9c5ddfc448156e41ba5->enter($__internal_975f22095fea63c17413e8b98a73085d4a99a5f12814e9c5ddfc448156e41ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88c47e006ca48b719577ad900140fd39dc4797d328d17243e4449d36b19d37ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c47e006ca48b719577ad900140fd39dc4797d328d17243e4449d36b19d37ba->enter($__internal_88c47e006ca48b719577ad900140fd39dc4797d328d17243e4449d36b19d37ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_88c47e006ca48b719577ad900140fd39dc4797d328d17243e4449d36b19d37ba->leave($__internal_88c47e006ca48b719577ad900140fd39dc4797d328d17243e4449d36b19d37ba_prof);

        
        $__internal_975f22095fea63c17413e8b98a73085d4a99a5f12814e9c5ddfc448156e41ba5->leave($__internal_975f22095fea63c17413e8b98a73085d4a99a5f12814e9c5ddfc448156e41ba5_prof);

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
