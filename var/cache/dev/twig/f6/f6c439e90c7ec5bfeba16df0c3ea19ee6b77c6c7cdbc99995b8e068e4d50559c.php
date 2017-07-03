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
        $__internal_f4b25eda5fac799c8c5b4a2dfbc8ebeba352266803ac535e4eeea198b323de03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b25eda5fac799c8c5b4a2dfbc8ebeba352266803ac535e4eeea198b323de03->enter($__internal_f4b25eda5fac799c8c5b4a2dfbc8ebeba352266803ac535e4eeea198b323de03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_36586362defb8f03d70ad0d86014348f4821ae55d831527475f96f2ebdd65586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36586362defb8f03d70ad0d86014348f4821ae55d831527475f96f2ebdd65586->enter($__internal_36586362defb8f03d70ad0d86014348f4821ae55d831527475f96f2ebdd65586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f4b25eda5fac799c8c5b4a2dfbc8ebeba352266803ac535e4eeea198b323de03->leave($__internal_f4b25eda5fac799c8c5b4a2dfbc8ebeba352266803ac535e4eeea198b323de03_prof);

        
        $__internal_36586362defb8f03d70ad0d86014348f4821ae55d831527475f96f2ebdd65586->leave($__internal_36586362defb8f03d70ad0d86014348f4821ae55d831527475f96f2ebdd65586_prof);

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
