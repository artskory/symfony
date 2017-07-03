<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6f7066aa7c0fd797c06a114c439cfedcbe37408b5e6094e5064d6f6871aa8c8e extends Twig_Template
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
        $__internal_c54e5ab6e07b811b46f80efcad5957a4a7fe33ac16df0b20f7b8cfc1f8abad1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c54e5ab6e07b811b46f80efcad5957a4a7fe33ac16df0b20f7b8cfc1f8abad1b->enter($__internal_c54e5ab6e07b811b46f80efcad5957a4a7fe33ac16df0b20f7b8cfc1f8abad1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_00713aed8d318fde995318097fd4d4180c8963190f3dd9a22ec9e5430a9e54d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00713aed8d318fde995318097fd4d4180c8963190f3dd9a22ec9e5430a9e54d4->enter($__internal_00713aed8d318fde995318097fd4d4180c8963190f3dd9a22ec9e5430a9e54d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c54e5ab6e07b811b46f80efcad5957a4a7fe33ac16df0b20f7b8cfc1f8abad1b->leave($__internal_c54e5ab6e07b811b46f80efcad5957a4a7fe33ac16df0b20f7b8cfc1f8abad1b_prof);

        
        $__internal_00713aed8d318fde995318097fd4d4180c8963190f3dd9a22ec9e5430a9e54d4->leave($__internal_00713aed8d318fde995318097fd4d4180c8963190f3dd9a22ec9e5430a9e54d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
