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
        $__internal_57578197fd9c431c7b94db3370a49c95a5b4dd2de1f97bad92ec7a3e7bccbca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57578197fd9c431c7b94db3370a49c95a5b4dd2de1f97bad92ec7a3e7bccbca4->enter($__internal_57578197fd9c431c7b94db3370a49c95a5b4dd2de1f97bad92ec7a3e7bccbca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_dbde5805b60727ea28c89140cf38625fc50a732169e0e90d7b0ed100989be5eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbde5805b60727ea28c89140cf38625fc50a732169e0e90d7b0ed100989be5eb->enter($__internal_dbde5805b60727ea28c89140cf38625fc50a732169e0e90d7b0ed100989be5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_57578197fd9c431c7b94db3370a49c95a5b4dd2de1f97bad92ec7a3e7bccbca4->leave($__internal_57578197fd9c431c7b94db3370a49c95a5b4dd2de1f97bad92ec7a3e7bccbca4_prof);

        
        $__internal_dbde5805b60727ea28c89140cf38625fc50a732169e0e90d7b0ed100989be5eb->leave($__internal_dbde5805b60727ea28c89140cf38625fc50a732169e0e90d7b0ed100989be5eb_prof);

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
