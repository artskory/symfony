<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_810969aa70c35e4f7a3f2aa9df0055d04ff5216348dbefe98d685ab6be4d278a extends Twig_Template
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
        $__internal_3b85ba03b65540c99a47011f02147cf636319c11555a0cef26f7499e0f73da73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b85ba03b65540c99a47011f02147cf636319c11555a0cef26f7499e0f73da73->enter($__internal_3b85ba03b65540c99a47011f02147cf636319c11555a0cef26f7499e0f73da73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_2a23727f86de2738ae19667193c6d42ab83bba63fa6f83e40b5a1f26d9ac3e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a23727f86de2738ae19667193c6d42ab83bba63fa6f83e40b5a1f26d9ac3e9c->enter($__internal_2a23727f86de2738ae19667193c6d42ab83bba63fa6f83e40b5a1f26d9ac3e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3b85ba03b65540c99a47011f02147cf636319c11555a0cef26f7499e0f73da73->leave($__internal_3b85ba03b65540c99a47011f02147cf636319c11555a0cef26f7499e0f73da73_prof);

        
        $__internal_2a23727f86de2738ae19667193c6d42ab83bba63fa6f83e40b5a1f26d9ac3e9c->leave($__internal_2a23727f86de2738ae19667193c6d42ab83bba63fa6f83e40b5a1f26d9ac3e9c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
