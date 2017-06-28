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
        $__internal_62b23ddb788d68e588b04756440f5c40976f9bb5c7ab38721dc8e6cc876102d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b23ddb788d68e588b04756440f5c40976f9bb5c7ab38721dc8e6cc876102d2->enter($__internal_62b23ddb788d68e588b04756440f5c40976f9bb5c7ab38721dc8e6cc876102d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_71737c9b72162b03edefaa52d71c5dad887595e0f0bbeb130c1b793ec3fe5d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71737c9b72162b03edefaa52d71c5dad887595e0f0bbeb130c1b793ec3fe5d67->enter($__internal_71737c9b72162b03edefaa52d71c5dad887595e0f0bbeb130c1b793ec3fe5d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_62b23ddb788d68e588b04756440f5c40976f9bb5c7ab38721dc8e6cc876102d2->leave($__internal_62b23ddb788d68e588b04756440f5c40976f9bb5c7ab38721dc8e6cc876102d2_prof);

        
        $__internal_71737c9b72162b03edefaa52d71c5dad887595e0f0bbeb130c1b793ec3fe5d67->leave($__internal_71737c9b72162b03edefaa52d71c5dad887595e0f0bbeb130c1b793ec3fe5d67_prof);

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
