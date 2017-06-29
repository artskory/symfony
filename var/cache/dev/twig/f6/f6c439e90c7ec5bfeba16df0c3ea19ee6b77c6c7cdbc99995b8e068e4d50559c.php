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
        $__internal_603803a0d3c1f9e3720c8f6ff0777f6d2b8e3d1b9f5fecfb04afe7a93f50d505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603803a0d3c1f9e3720c8f6ff0777f6d2b8e3d1b9f5fecfb04afe7a93f50d505->enter($__internal_603803a0d3c1f9e3720c8f6ff0777f6d2b8e3d1b9f5fecfb04afe7a93f50d505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_d4c21eed9ef83b8873b5a5db69f94bb42b46a40dfcb40b22757472e7f95468fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c21eed9ef83b8873b5a5db69f94bb42b46a40dfcb40b22757472e7f95468fb->enter($__internal_d4c21eed9ef83b8873b5a5db69f94bb42b46a40dfcb40b22757472e7f95468fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_603803a0d3c1f9e3720c8f6ff0777f6d2b8e3d1b9f5fecfb04afe7a93f50d505->leave($__internal_603803a0d3c1f9e3720c8f6ff0777f6d2b8e3d1b9f5fecfb04afe7a93f50d505_prof);

        
        $__internal_d4c21eed9ef83b8873b5a5db69f94bb42b46a40dfcb40b22757472e7f95468fb->leave($__internal_d4c21eed9ef83b8873b5a5db69f94bb42b46a40dfcb40b22757472e7f95468fb_prof);

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
