<?php

/* OCPlatformBundle:Annonce:index.html.twig */
class __TwigTemplate_510422d2844dbeb35f789dc9e95f765c7e05bb51460db58eb6fbdfd3294a454e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle:Annonce:layout.html.twig", "OCPlatformBundle:Annonce:index.html.twig", 1);
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
        $__internal_24ddae0ef3b16a5f21d89bb7abf22afaf3b066b803201323d6f5b12ef65844ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ddae0ef3b16a5f21d89bb7abf22afaf3b066b803201323d6f5b12ef65844ee->enter($__internal_24ddae0ef3b16a5f21d89bb7abf22afaf3b066b803201323d6f5b12ef65844ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Annonce:index.html.twig"));

        $__internal_0f83782b3d13e853b68d92b77853897b24ddbd524a76fd63522130373f4cee9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f83782b3d13e853b68d92b77853897b24ddbd524a76fd63522130373f4cee9b->enter($__internal_0f83782b3d13e853b68d92b77853897b24ddbd524a76fd63522130373f4cee9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Annonce:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24ddae0ef3b16a5f21d89bb7abf22afaf3b066b803201323d6f5b12ef65844ee->leave($__internal_24ddae0ef3b16a5f21d89bb7abf22afaf3b066b803201323d6f5b12ef65844ee_prof);

        
        $__internal_0f83782b3d13e853b68d92b77853897b24ddbd524a76fd63522130373f4cee9b->leave($__internal_0f83782b3d13e853b68d92b77853897b24ddbd524a76fd63522130373f4cee9b_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_d48b955acc2038bcce5fc62f27fdb9fde643e0b68c45c787651e899da5eac8e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48b955acc2038bcce5fc62f27fdb9fde643e0b68c45c787651e899da5eac8e1->enter($__internal_d48b955acc2038bcce5fc62f27fdb9fde643e0b68c45c787651e899da5eac8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_30a9b62f7486d1138897852d61d4b634d7699eb3301d4e20cad4054aec1c16a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a9b62f7486d1138897852d61d4b634d7699eb3301d4e20cad4054aec1c16a6->enter($__internal_30a9b62f7486d1138897852d61d4b634d7699eb3301d4e20cad4054aec1c16a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "
";
        
        $__internal_30a9b62f7486d1138897852d61d4b634d7699eb3301d4e20cad4054aec1c16a6->leave($__internal_30a9b62f7486d1138897852d61d4b634d7699eb3301d4e20cad4054aec1c16a6_prof);

        
        $__internal_d48b955acc2038bcce5fc62f27fdb9fde643e0b68c45c787651e899da5eac8e1->leave($__internal_d48b955acc2038bcce5fc62f27fdb9fde643e0b68c45c787651e899da5eac8e1_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Annonce:index.html.twig";
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
", "OCPlatformBundle:Annonce:index.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\OC\\PlatformBundle/Resources/views/Annonce/index.html.twig");
    }
}
