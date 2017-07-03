<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_2ab77c23e6ed6a64fd5778606127c6d48e88a1f1b9d377f0591a74b7cb9ba02b extends Twig_Template
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
        $__internal_0c3c9f97ede7725ced02a1fa988e94a0dd1b21eb3439690fa14ed40717bf4aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3c9f97ede7725ced02a1fa988e94a0dd1b21eb3439690fa14ed40717bf4aa1->enter($__internal_0c3c9f97ede7725ced02a1fa988e94a0dd1b21eb3439690fa14ed40717bf4aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_0b324833ad548abb0057e3864760c861940d759e2f83b12137ab5a09a6f9e2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b324833ad548abb0057e3864760c861940d759e2f83b12137ab5a09a6f9e2b4->enter($__internal_0b324833ad548abb0057e3864760c861940d759e2f83b12137ab5a09a6f9e2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_0c3c9f97ede7725ced02a1fa988e94a0dd1b21eb3439690fa14ed40717bf4aa1->leave($__internal_0c3c9f97ede7725ced02a1fa988e94a0dd1b21eb3439690fa14ed40717bf4aa1_prof);

        
        $__internal_0b324833ad548abb0057e3864760c861940d759e2f83b12137ab5a09a6f9e2b4->leave($__internal_0b324833ad548abb0057e3864760c861940d759e2f83b12137ab5a09a6f9e2b4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
