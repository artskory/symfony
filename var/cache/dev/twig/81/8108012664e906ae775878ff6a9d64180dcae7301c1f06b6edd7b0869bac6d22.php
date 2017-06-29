<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2acf2cce10cefb76a3b3268f462d56728ff52b0af39b284b25b9a434aaefb453 extends Twig_Template
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
        $__internal_c43f8b13a450378de638ba3527f47f6f0696ce7281d05c118d2b96383562bf92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c43f8b13a450378de638ba3527f47f6f0696ce7281d05c118d2b96383562bf92->enter($__internal_c43f8b13a450378de638ba3527f47f6f0696ce7281d05c118d2b96383562bf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_79d27d5c8b3e98de2e4b9d33f459c1b89e42cc2dab23ddbf6e7885cf0e106f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d27d5c8b3e98de2e4b9d33f459c1b89e42cc2dab23ddbf6e7885cf0e106f47->enter($__internal_79d27d5c8b3e98de2e4b9d33f459c1b89e42cc2dab23ddbf6e7885cf0e106f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c43f8b13a450378de638ba3527f47f6f0696ce7281d05c118d2b96383562bf92->leave($__internal_c43f8b13a450378de638ba3527f47f6f0696ce7281d05c118d2b96383562bf92_prof);

        
        $__internal_79d27d5c8b3e98de2e4b9d33f459c1b89e42cc2dab23ddbf6e7885cf0e106f47->leave($__internal_79d27d5c8b3e98de2e4b9d33f459c1b89e42cc2dab23ddbf6e7885cf0e106f47_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
