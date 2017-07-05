<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_453d9d04cad7d04d9436e050967523e0da8a479fcbacab64fd8ac58e0fba062e extends Twig_Template
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
        $__internal_38641709af2eef0706118ae9173d8df99ce85bf16ab30fe910ea4f580ba04ff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38641709af2eef0706118ae9173d8df99ce85bf16ab30fe910ea4f580ba04ff4->enter($__internal_38641709af2eef0706118ae9173d8df99ce85bf16ab30fe910ea4f580ba04ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_56db853719994e0fecebde7d1d501f1f06e615483829a1853ed0c31ab82d9f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56db853719994e0fecebde7d1d501f1f06e615483829a1853ed0c31ab82d9f5a->enter($__internal_56db853719994e0fecebde7d1d501f1f06e615483829a1853ed0c31ab82d9f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_38641709af2eef0706118ae9173d8df99ce85bf16ab30fe910ea4f580ba04ff4->leave($__internal_38641709af2eef0706118ae9173d8df99ce85bf16ab30fe910ea4f580ba04ff4_prof);

        
        $__internal_56db853719994e0fecebde7d1d501f1f06e615483829a1853ed0c31ab82d9f5a->leave($__internal_56db853719994e0fecebde7d1d501f1f06e615483829a1853ed0c31ab82d9f5a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
