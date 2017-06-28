<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6f7066aa7c0fd797c06a114c439cfedcbe37408b5e6094e5064d6f6871aa8c8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22caf71cc8cd10ee354a73837eb75385f7a7dff8520bcf7a4b9fa2d235bd0e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22caf71cc8cd10ee354a73837eb75385f7a7dff8520bcf7a4b9fa2d235bd0e19->enter($__internal_22caf71cc8cd10ee354a73837eb75385f7a7dff8520bcf7a4b9fa2d235bd0e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_1bd85e872704f64a137017a3232d42c0d26e45a845e0d7fbd3f8f9ab3a178e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd85e872704f64a137017a3232d42c0d26e45a845e0d7fbd3f8f9ab3a178e53->enter($__internal_1bd85e872704f64a137017a3232d42c0d26e45a845e0d7fbd3f8f9ab3a178e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_22caf71cc8cd10ee354a73837eb75385f7a7dff8520bcf7a4b9fa2d235bd0e19->leave($__internal_22caf71cc8cd10ee354a73837eb75385f7a7dff8520bcf7a4b9fa2d235bd0e19_prof);

        
        $__internal_1bd85e872704f64a137017a3232d42c0d26e45a845e0d7fbd3f8f9ab3a178e53->leave($__internal_1bd85e872704f64a137017a3232d42c0d26e45a845e0d7fbd3f8f9ab3a178e53_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
