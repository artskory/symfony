<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5f91d4b032ee580c949905bcf323d017be0d6861344a6df97952d1dc441cc831 extends Twig_Template
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
        $__internal_4bc69e46a94eafd9ff4bd66d9793c668e4ebb0e54e3a1ed03be1609c72cac4f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc69e46a94eafd9ff4bd66d9793c668e4ebb0e54e3a1ed03be1609c72cac4f5->enter($__internal_4bc69e46a94eafd9ff4bd66d9793c668e4ebb0e54e3a1ed03be1609c72cac4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_a2e6c01a8ec9ef3e810cfd31c68a457b0a218f097ae55b9375ba3324a0f87f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e6c01a8ec9ef3e810cfd31c68a457b0a218f097ae55b9375ba3324a0f87f97->enter($__internal_a2e6c01a8ec9ef3e810cfd31c68a457b0a218f097ae55b9375ba3324a0f87f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4bc69e46a94eafd9ff4bd66d9793c668e4ebb0e54e3a1ed03be1609c72cac4f5->leave($__internal_4bc69e46a94eafd9ff4bd66d9793c668e4ebb0e54e3a1ed03be1609c72cac4f5_prof);

        
        $__internal_a2e6c01a8ec9ef3e810cfd31c68a457b0a218f097ae55b9375ba3324a0f87f97->leave($__internal_a2e6c01a8ec9ef3e810cfd31c68a457b0a218f097ae55b9375ba3324a0f87f97_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
