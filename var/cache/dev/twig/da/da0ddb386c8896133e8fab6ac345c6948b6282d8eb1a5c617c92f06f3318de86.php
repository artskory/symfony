<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_782ce0945e76b29e77a9d33770368088f1bfeedd7913879877af7441033f19b0 extends Twig_Template
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
        $__internal_1d81fe3138d7678fead93b5fba63a682ca2120a4cca5350e1abc67c4a5e9d65c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d81fe3138d7678fead93b5fba63a682ca2120a4cca5350e1abc67c4a5e9d65c->enter($__internal_1d81fe3138d7678fead93b5fba63a682ca2120a4cca5350e1abc67c4a5e9d65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_cabfcbf628902540add680b8c8e72e0d4ca5240e90ea653922e1ab8341dbb27e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cabfcbf628902540add680b8c8e72e0d4ca5240e90ea653922e1ab8341dbb27e->enter($__internal_cabfcbf628902540add680b8c8e72e0d4ca5240e90ea653922e1ab8341dbb27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_1d81fe3138d7678fead93b5fba63a682ca2120a4cca5350e1abc67c4a5e9d65c->leave($__internal_1d81fe3138d7678fead93b5fba63a682ca2120a4cca5350e1abc67c4a5e9d65c_prof);

        
        $__internal_cabfcbf628902540add680b8c8e72e0d4ca5240e90ea653922e1ab8341dbb27e->leave($__internal_cabfcbf628902540add680b8c8e72e0d4ca5240e90ea653922e1ab8341dbb27e_prof);

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
