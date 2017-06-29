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
        $__internal_4d8712c8f5c75e8528f97ea94c777e46d36701bfc68debbb084c32844903a641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8712c8f5c75e8528f97ea94c777e46d36701bfc68debbb084c32844903a641->enter($__internal_4d8712c8f5c75e8528f97ea94c777e46d36701bfc68debbb084c32844903a641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_75e73c736115b8d827feae2910ba4a8334c2b934a1886da8dd6b4e095df79953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e73c736115b8d827feae2910ba4a8334c2b934a1886da8dd6b4e095df79953->enter($__internal_75e73c736115b8d827feae2910ba4a8334c2b934a1886da8dd6b4e095df79953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4d8712c8f5c75e8528f97ea94c777e46d36701bfc68debbb084c32844903a641->leave($__internal_4d8712c8f5c75e8528f97ea94c777e46d36701bfc68debbb084c32844903a641_prof);

        
        $__internal_75e73c736115b8d827feae2910ba4a8334c2b934a1886da8dd6b4e095df79953->leave($__internal_75e73c736115b8d827feae2910ba4a8334c2b934a1886da8dd6b4e095df79953_prof);

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
