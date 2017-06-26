<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_e67854d80a139107860b6bab3dbf78781d22abc0a782d028da03908cfc6d2450 extends Twig_Template
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
        $__internal_79818ef6425bd170d01cd0c354c5d863dd927b72006c188eccc4c983abdf180f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79818ef6425bd170d01cd0c354c5d863dd927b72006c188eccc4c983abdf180f->enter($__internal_79818ef6425bd170d01cd0c354c5d863dd927b72006c188eccc4c983abdf180f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_558be94ed5a52704c9e299b794be2e3509590f8ca3e29ef2239b25bb89f7df8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558be94ed5a52704c9e299b794be2e3509590f8ca3e29ef2239b25bb89f7df8e->enter($__internal_558be94ed5a52704c9e299b794be2e3509590f8ca3e29ef2239b25bb89f7df8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_79818ef6425bd170d01cd0c354c5d863dd927b72006c188eccc4c983abdf180f->leave($__internal_79818ef6425bd170d01cd0c354c5d863dd927b72006c188eccc4c983abdf180f_prof);

        
        $__internal_558be94ed5a52704c9e299b794be2e3509590f8ca3e29ef2239b25bb89f7df8e->leave($__internal_558be94ed5a52704c9e299b794be2e3509590f8ca3e29ef2239b25bb89f7df8e_prof);

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
