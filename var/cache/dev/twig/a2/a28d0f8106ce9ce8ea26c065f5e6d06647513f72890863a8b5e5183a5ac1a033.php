<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_f630205cd65086712433f3dead6bc6c3af351f9dbcc5f1576463ed5184eb62a2 extends Twig_Template
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
        $__internal_7cfd48f9ac8ad6b9c3fbf86507f40aad87485478c3e0c34ed3f4cd9a62aeb739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cfd48f9ac8ad6b9c3fbf86507f40aad87485478c3e0c34ed3f4cd9a62aeb739->enter($__internal_7cfd48f9ac8ad6b9c3fbf86507f40aad87485478c3e0c34ed3f4cd9a62aeb739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_a00a7c91703cd5338d2ef3e39829a191cff30d1dee5a39752a7c0e51db883432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00a7c91703cd5338d2ef3e39829a191cff30d1dee5a39752a7c0e51db883432->enter($__internal_a00a7c91703cd5338d2ef3e39829a191cff30d1dee5a39752a7c0e51db883432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_7cfd48f9ac8ad6b9c3fbf86507f40aad87485478c3e0c34ed3f4cd9a62aeb739->leave($__internal_7cfd48f9ac8ad6b9c3fbf86507f40aad87485478c3e0c34ed3f4cd9a62aeb739_prof);

        
        $__internal_a00a7c91703cd5338d2ef3e39829a191cff30d1dee5a39752a7c0e51db883432->leave($__internal_a00a7c91703cd5338d2ef3e39829a191cff30d1dee5a39752a7c0e51db883432_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
