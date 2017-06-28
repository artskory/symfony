<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_6662eec57c18b8a6f3c533dbcfb356ecc631b60dddd254ffb4e67b03539f2baf extends Twig_Template
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
        $__internal_515e5f1569ae916a2a441a82fe0ac119e9fd4158a7242d7393dc2ad17e58f57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_515e5f1569ae916a2a441a82fe0ac119e9fd4158a7242d7393dc2ad17e58f57e->enter($__internal_515e5f1569ae916a2a441a82fe0ac119e9fd4158a7242d7393dc2ad17e58f57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_3ab18795b4d3a307f8922dca8f01c07b59b3a33dc5f072ab699c43af8a455edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab18795b4d3a307f8922dca8f01c07b59b3a33dc5f072ab699c43af8a455edf->enter($__internal_3ab18795b4d3a307f8922dca8f01c07b59b3a33dc5f072ab699c43af8a455edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_515e5f1569ae916a2a441a82fe0ac119e9fd4158a7242d7393dc2ad17e58f57e->leave($__internal_515e5f1569ae916a2a441a82fe0ac119e9fd4158a7242d7393dc2ad17e58f57e_prof);

        
        $__internal_3ab18795b4d3a307f8922dca8f01c07b59b3a33dc5f072ab699c43af8a455edf->leave($__internal_3ab18795b4d3a307f8922dca8f01c07b59b3a33dc5f072ab699c43af8a455edf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
