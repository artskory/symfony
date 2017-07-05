<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_9456b042b757be74f60e95c910e1ec1e3669408370004123caa07cc355499409 extends Twig_Template
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
        $__internal_2018c74762a43ea48d14b12cacfd658881d12da96b71df3eda6a20be8fe606c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2018c74762a43ea48d14b12cacfd658881d12da96b71df3eda6a20be8fe606c1->enter($__internal_2018c74762a43ea48d14b12cacfd658881d12da96b71df3eda6a20be8fe606c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_2e060c3e96d8576793eeb565160dac1010d43a909655273c54639b3c53c4b231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e060c3e96d8576793eeb565160dac1010d43a909655273c54639b3c53c4b231->enter($__internal_2e060c3e96d8576793eeb565160dac1010d43a909655273c54639b3c53c4b231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_2018c74762a43ea48d14b12cacfd658881d12da96b71df3eda6a20be8fe606c1->leave($__internal_2018c74762a43ea48d14b12cacfd658881d12da96b71df3eda6a20be8fe606c1_prof);

        
        $__internal_2e060c3e96d8576793eeb565160dac1010d43a909655273c54639b3c53c4b231->leave($__internal_2e060c3e96d8576793eeb565160dac1010d43a909655273c54639b3c53c4b231_prof);

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
