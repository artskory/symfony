<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_08568ee5ef0eb10e17784158acef928e02b0a46367d881fb25c1a29c90168d1a extends Twig_Template
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
        $__internal_00a75ca0506894b1bbdd47423d77a7669d95e9e7af073e70a7e04fec83af5081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00a75ca0506894b1bbdd47423d77a7669d95e9e7af073e70a7e04fec83af5081->enter($__internal_00a75ca0506894b1bbdd47423d77a7669d95e9e7af073e70a7e04fec83af5081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_a921f6311582bd256e8a9842f8b281c0b78f310ed66a0e5811c71e8fb396b4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a921f6311582bd256e8a9842f8b281c0b78f310ed66a0e5811c71e8fb396b4f9->enter($__internal_a921f6311582bd256e8a9842f8b281c0b78f310ed66a0e5811c71e8fb396b4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_00a75ca0506894b1bbdd47423d77a7669d95e9e7af073e70a7e04fec83af5081->leave($__internal_00a75ca0506894b1bbdd47423d77a7669d95e9e7af073e70a7e04fec83af5081_prof);

        
        $__internal_a921f6311582bd256e8a9842f8b281c0b78f310ed66a0e5811c71e8fb396b4f9->leave($__internal_a921f6311582bd256e8a9842f8b281c0b78f310ed66a0e5811c71e8fb396b4f9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
