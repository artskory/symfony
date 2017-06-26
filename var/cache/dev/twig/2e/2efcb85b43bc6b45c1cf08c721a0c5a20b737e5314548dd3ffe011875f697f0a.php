<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_dc6b38419a0f86b09ec1855e77f12cf9730ee91fb4ce6cf34fa8b75fd77d7c50 extends Twig_Template
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
        $__internal_2072868e9c4153f51ce8142c13546e4b98fda20cb3b3b9807cc0a7ce7d2c3434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2072868e9c4153f51ce8142c13546e4b98fda20cb3b3b9807cc0a7ce7d2c3434->enter($__internal_2072868e9c4153f51ce8142c13546e4b98fda20cb3b3b9807cc0a7ce7d2c3434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_5edd01637a26d966f61fda25e7e1ab4b61e19fe5ab6e8d4187bb40982c7b145e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5edd01637a26d966f61fda25e7e1ab4b61e19fe5ab6e8d4187bb40982c7b145e->enter($__internal_5edd01637a26d966f61fda25e7e1ab4b61e19fe5ab6e8d4187bb40982c7b145e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_2072868e9c4153f51ce8142c13546e4b98fda20cb3b3b9807cc0a7ce7d2c3434->leave($__internal_2072868e9c4153f51ce8142c13546e4b98fda20cb3b3b9807cc0a7ce7d2c3434_prof);

        
        $__internal_5edd01637a26d966f61fda25e7e1ab4b61e19fe5ab6e8d4187bb40982c7b145e->leave($__internal_5edd01637a26d966f61fda25e7e1ab4b61e19fe5ab6e8d4187bb40982c7b145e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
