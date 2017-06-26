<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_572af4f788fcd5dc771742ed17965d3a2da532d15b2bb7bbd2b0e9bb36403cf6 extends Twig_Template
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
        $__internal_9394be2b37e97facd8a7b939d4c7610f85fb34bf4b7df6dad70a68f87660212e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9394be2b37e97facd8a7b939d4c7610f85fb34bf4b7df6dad70a68f87660212e->enter($__internal_9394be2b37e97facd8a7b939d4c7610f85fb34bf4b7df6dad70a68f87660212e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_0d1d0ecc13521692aceff74f7d6d560428ddd87145840485f381dfc7fc9d9ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1d0ecc13521692aceff74f7d6d560428ddd87145840485f381dfc7fc9d9ce6->enter($__internal_0d1d0ecc13521692aceff74f7d6d560428ddd87145840485f381dfc7fc9d9ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_9394be2b37e97facd8a7b939d4c7610f85fb34bf4b7df6dad70a68f87660212e->leave($__internal_9394be2b37e97facd8a7b939d4c7610f85fb34bf4b7df6dad70a68f87660212e_prof);

        
        $__internal_0d1d0ecc13521692aceff74f7d6d560428ddd87145840485f381dfc7fc9d9ce6->leave($__internal_0d1d0ecc13521692aceff74f7d6d560428ddd87145840485f381dfc7fc9d9ce6_prof);

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
