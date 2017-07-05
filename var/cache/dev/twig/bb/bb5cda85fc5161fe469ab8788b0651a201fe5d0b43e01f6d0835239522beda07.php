<?php

/* tag/new.html.twig */
class __TwigTemplate_090e7c1d4a4da1bb7aab9f1f6d4939a5d17f4beb530c9c972daf3419e7f25f9d extends Twig_Template
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
        $__internal_df3233658fb4b2e647abacd96610a39c7c8b9a6d569e27dd5724e2ee2bcf7235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df3233658fb4b2e647abacd96610a39c7c8b9a6d569e27dd5724e2ee2bcf7235->enter($__internal_df3233658fb4b2e647abacd96610a39c7c8b9a6d569e27dd5724e2ee2bcf7235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $__internal_9bfffc186b8bcd18d10a9a65720529659b5032976f0ee1806a22458a6415e3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bfffc186b8bcd18d10a9a65720529659b5032976f0ee1806a22458a6415e3d2->enter($__internal_9bfffc186b8bcd18d10a9a65720529659b5032976f0ee1806a22458a6415e3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df3233658fb4b2e647abacd96610a39c7c8b9a6d569e27dd5724e2ee2bcf7235->leave($__internal_df3233658fb4b2e647abacd96610a39c7c8b9a6d569e27dd5724e2ee2bcf7235_prof);

        
        $__internal_9bfffc186b8bcd18d10a9a65720529659b5032976f0ee1806a22458a6415e3d2->leave($__internal_9bfffc186b8bcd18d10a9a65720529659b5032976f0ee1806a22458a6415e3d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3729e4d9ad4864e3cb42bfc9050481e961a57be43a7af59821b82da86126780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3729e4d9ad4864e3cb42bfc9050481e961a57be43a7af59821b82da86126780->enter($__internal_b3729e4d9ad4864e3cb42bfc9050481e961a57be43a7af59821b82da86126780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e868ca2464d2a462db58ea5112bf60c590f474b19925f6a8025dd4caf6cbb6b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e868ca2464d2a462db58ea5112bf60c590f474b19925f6a8025dd4caf6cbb6b7->enter($__internal_e868ca2464d2a462db58ea5112bf60c590f474b19925f6a8025dd4caf6cbb6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e868ca2464d2a462db58ea5112bf60c590f474b19925f6a8025dd4caf6cbb6b7->leave($__internal_e868ca2464d2a462db58ea5112bf60c590f474b19925f6a8025dd4caf6cbb6b7_prof);

        
        $__internal_b3729e4d9ad4864e3cb42bfc9050481e961a57be43a7af59821b82da86126780->leave($__internal_b3729e4d9ad4864e3cb42bfc9050481e961a57be43a7af59821b82da86126780_prof);

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
