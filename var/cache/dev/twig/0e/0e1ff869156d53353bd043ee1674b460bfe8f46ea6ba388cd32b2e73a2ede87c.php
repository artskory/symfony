<?php

/* @OCPlatform/Annonce/index.html.twig */
class __TwigTemplate_59044f383ee6c3b5d1754ce8da7af571156376db987d2c7291729b87d939dc6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle:Annonce:layout.html.twig", "@OCPlatform/Annonce/index.html.twig", 1);
        $this->blocks = array(
            'body_layout' => array($this, 'block_body_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle:Annonce:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5aa9aaef2f1e50fb2a0cb9701d8c791b40717557731a807bfaed70edae52783d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aa9aaef2f1e50fb2a0cb9701d8c791b40717557731a807bfaed70edae52783d->enter($__internal_5aa9aaef2f1e50fb2a0cb9701d8c791b40717557731a807bfaed70edae52783d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Annonce/index.html.twig"));

        $__internal_edad36b7eb9cf3cd520601c52e807bd2138fd19e72966aa455dda27fa0fc5eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edad36b7eb9cf3cd520601c52e807bd2138fd19e72966aa455dda27fa0fc5eb2->enter($__internal_edad36b7eb9cf3cd520601c52e807bd2138fd19e72966aa455dda27fa0fc5eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Annonce/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aa9aaef2f1e50fb2a0cb9701d8c791b40717557731a807bfaed70edae52783d->leave($__internal_5aa9aaef2f1e50fb2a0cb9701d8c791b40717557731a807bfaed70edae52783d_prof);

        
        $__internal_edad36b7eb9cf3cd520601c52e807bd2138fd19e72966aa455dda27fa0fc5eb2->leave($__internal_edad36b7eb9cf3cd520601c52e807bd2138fd19e72966aa455dda27fa0fc5eb2_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_5bf8c23509780c5cc5c893d6f8fe341aa78a573bacde84a38d44fbedbd48d5a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf8c23509780c5cc5c893d6f8fe341aa78a573bacde84a38d44fbedbd48d5a0->enter($__internal_5bf8c23509780c5cc5c893d6f8fe341aa78a573bacde84a38d44fbedbd48d5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_8aeb1fd0c4f81f0865308357afafd6aa7c9b1da64f819fd3adca3cb405f0d038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aeb1fd0c4f81f0865308357afafd6aa7c9b1da64f819fd3adca3cb405f0d038->enter($__internal_8aeb1fd0c4f81f0865308357afafd6aa7c9b1da64f819fd3adca3cb405f0d038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "
";
        
        $__internal_8aeb1fd0c4f81f0865308357afafd6aa7c9b1da64f819fd3adca3cb405f0d038->leave($__internal_8aeb1fd0c4f81f0865308357afafd6aa7c9b1da64f819fd3adca3cb405f0d038_prof);

        
        $__internal_5bf8c23509780c5cc5c893d6f8fe341aa78a573bacde84a38d44fbedbd48d5a0->leave($__internal_5bf8c23509780c5cc5c893d6f8fe341aa78a573bacde84a38d44fbedbd48d5a0_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Annonce/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCPlatformBundle:Annonce:layout.html.twig\" %}

{% block body_layout %}

{% endblock %}
", "@OCPlatform/Annonce/index.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Annonce\\index.html.twig");
    }
}
