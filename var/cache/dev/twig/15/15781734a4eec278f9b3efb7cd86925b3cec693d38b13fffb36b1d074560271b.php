<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_53ee89d04504d139530162979b25784bc2ced6010b31352b5aba4bf139d11b07 extends Twig_Template
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
        $__internal_037966da0403b3feb12c190c9beff227b8355668f6279bcd6c84c7ac64abdf44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037966da0403b3feb12c190c9beff227b8355668f6279bcd6c84c7ac64abdf44->enter($__internal_037966da0403b3feb12c190c9beff227b8355668f6279bcd6c84c7ac64abdf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_ae7cba91befd9a2d307710e4de22e252abdf9ad8a54c59d9ee50272c9c902f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7cba91befd9a2d307710e4de22e252abdf9ad8a54c59d9ee50272c9c902f7e->enter($__internal_ae7cba91befd9a2d307710e4de22e252abdf9ad8a54c59d9ee50272c9c902f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_037966da0403b3feb12c190c9beff227b8355668f6279bcd6c84c7ac64abdf44->leave($__internal_037966da0403b3feb12c190c9beff227b8355668f6279bcd6c84c7ac64abdf44_prof);

        
        $__internal_ae7cba91befd9a2d307710e4de22e252abdf9ad8a54c59d9ee50272c9c902f7e->leave($__internal_ae7cba91befd9a2d307710e4de22e252abdf9ad8a54c59d9ee50272c9c902f7e_prof);

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
