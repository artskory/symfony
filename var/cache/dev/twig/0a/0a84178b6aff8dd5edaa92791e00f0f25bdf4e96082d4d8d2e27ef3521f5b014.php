<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_374a17522ace54c94623680fe364f53b323ef26b3946e6ff0352f38db9b6b647 extends Twig_Template
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
        $__internal_db01de17069ca08b0979b870f420dc3aa915965a44b970e7b6a5ffbc2e1fb28e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db01de17069ca08b0979b870f420dc3aa915965a44b970e7b6a5ffbc2e1fb28e->enter($__internal_db01de17069ca08b0979b870f420dc3aa915965a44b970e7b6a5ffbc2e1fb28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_b642636b3c969b2a58f8bfddc852559f30171f303fdaa1b8b2b9dc209685f80c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b642636b3c969b2a58f8bfddc852559f30171f303fdaa1b8b2b9dc209685f80c->enter($__internal_b642636b3c969b2a58f8bfddc852559f30171f303fdaa1b8b2b9dc209685f80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_db01de17069ca08b0979b870f420dc3aa915965a44b970e7b6a5ffbc2e1fb28e->leave($__internal_db01de17069ca08b0979b870f420dc3aa915965a44b970e7b6a5ffbc2e1fb28e_prof);

        
        $__internal_b642636b3c969b2a58f8bfddc852559f30171f303fdaa1b8b2b9dc209685f80c->leave($__internal_b642636b3c969b2a58f8bfddc852559f30171f303fdaa1b8b2b9dc209685f80c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
