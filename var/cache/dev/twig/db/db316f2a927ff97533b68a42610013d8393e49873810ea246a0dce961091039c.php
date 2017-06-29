<?php

/* tag/new.html.twig */
class __TwigTemplate_58c3f587847b633b5c3dd4b0fb9c06f45152aa746ba9ed860915de5c5489fe70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/new.html.twig", 1);
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
        $__internal_8e6d386c32afc320af80344bcc562036e3eb1c5571c1c491be450481ca68af4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6d386c32afc320af80344bcc562036e3eb1c5571c1c491be450481ca68af4d->enter($__internal_8e6d386c32afc320af80344bcc562036e3eb1c5571c1c491be450481ca68af4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $__internal_c4de2d0537ab49e8f35c7fdafa9af87dc9f7790a5c0d4e01613e78b6b02d060a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4de2d0537ab49e8f35c7fdafa9af87dc9f7790a5c0d4e01613e78b6b02d060a->enter($__internal_c4de2d0537ab49e8f35c7fdafa9af87dc9f7790a5c0d4e01613e78b6b02d060a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e6d386c32afc320af80344bcc562036e3eb1c5571c1c491be450481ca68af4d->leave($__internal_8e6d386c32afc320af80344bcc562036e3eb1c5571c1c491be450481ca68af4d_prof);

        
        $__internal_c4de2d0537ab49e8f35c7fdafa9af87dc9f7790a5c0d4e01613e78b6b02d060a->leave($__internal_c4de2d0537ab49e8f35c7fdafa9af87dc9f7790a5c0d4e01613e78b6b02d060a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebede479ab5fda88f3a62a28926eed65cce2e427c961f830a7e6f8cba5075fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebede479ab5fda88f3a62a28926eed65cce2e427c961f830a7e6f8cba5075fa2->enter($__internal_ebede479ab5fda88f3a62a28926eed65cce2e427c961f830a7e6f8cba5075fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ddb73878328f49e3a7e64a97c2084a4ab7b48c47706e6ee582d85289384d942d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb73878328f49e3a7e64a97c2084a4ab7b48c47706e6ee582d85289384d942d->enter($__internal_ddb73878328f49e3a7e64a97c2084a4ab7b48c47706e6ee582d85289384d942d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ddb73878328f49e3a7e64a97c2084a4ab7b48c47706e6ee582d85289384d942d->leave($__internal_ddb73878328f49e3a7e64a97c2084a4ab7b48c47706e6ee582d85289384d942d_prof);

        
        $__internal_ebede479ab5fda88f3a62a28926eed65cce2e427c961f830a7e6f8cba5075fa2->leave($__internal_ebede479ab5fda88f3a62a28926eed65cce2e427c961f830a7e6f8cba5075fa2_prof);

    }

    public function getTemplateName()
    {
        return "tag/new.html.twig";
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
", "tag/new.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\tag\\new.html.twig");
    }
}
