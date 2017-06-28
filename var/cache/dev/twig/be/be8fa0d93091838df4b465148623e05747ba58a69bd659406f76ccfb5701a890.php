<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c6b37d74e002b1063afcf566958447b5a62d3f99122bd7cd4cc877a60499d214 extends Twig_Template
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
        $__internal_d35d0722b6fed99d7fcbf77582c9afb1399b241df6b62483a836992ef6ef0edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d35d0722b6fed99d7fcbf77582c9afb1399b241df6b62483a836992ef6ef0edd->enter($__internal_d35d0722b6fed99d7fcbf77582c9afb1399b241df6b62483a836992ef6ef0edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_658f0f68329decca1beb87e460c48a5f317e09e8741a6c59b5cff48726ef6585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658f0f68329decca1beb87e460c48a5f317e09e8741a6c59b5cff48726ef6585->enter($__internal_658f0f68329decca1beb87e460c48a5f317e09e8741a6c59b5cff48726ef6585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d35d0722b6fed99d7fcbf77582c9afb1399b241df6b62483a836992ef6ef0edd->leave($__internal_d35d0722b6fed99d7fcbf77582c9afb1399b241df6b62483a836992ef6ef0edd_prof);

        
        $__internal_658f0f68329decca1beb87e460c48a5f317e09e8741a6c59b5cff48726ef6585->leave($__internal_658f0f68329decca1beb87e460c48a5f317e09e8741a6c59b5cff48726ef6585_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
