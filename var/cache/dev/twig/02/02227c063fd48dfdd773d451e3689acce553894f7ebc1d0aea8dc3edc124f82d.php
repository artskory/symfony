<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_2ab77c23e6ed6a64fd5778606127c6d48e88a1f1b9d377f0591a74b7cb9ba02b extends Twig_Template
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
        $__internal_bd717843700ca2ae4cab5cc9c3b46cc295a8a45c2a526406761fff7a28ae8798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd717843700ca2ae4cab5cc9c3b46cc295a8a45c2a526406761fff7a28ae8798->enter($__internal_bd717843700ca2ae4cab5cc9c3b46cc295a8a45c2a526406761fff7a28ae8798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_f0cb8c4f59a511c7f5b708c05efef39b8c935f9746bd80b25233aefddc5fa5f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0cb8c4f59a511c7f5b708c05efef39b8c935f9746bd80b25233aefddc5fa5f6->enter($__internal_f0cb8c4f59a511c7f5b708c05efef39b8c935f9746bd80b25233aefddc5fa5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_bd717843700ca2ae4cab5cc9c3b46cc295a8a45c2a526406761fff7a28ae8798->leave($__internal_bd717843700ca2ae4cab5cc9c3b46cc295a8a45c2a526406761fff7a28ae8798_prof);

        
        $__internal_f0cb8c4f59a511c7f5b708c05efef39b8c935f9746bd80b25233aefddc5fa5f6->leave($__internal_f0cb8c4f59a511c7f5b708c05efef39b8c935f9746bd80b25233aefddc5fa5f6_prof);

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
