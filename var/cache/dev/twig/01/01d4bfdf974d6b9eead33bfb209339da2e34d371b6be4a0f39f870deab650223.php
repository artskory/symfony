<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_2482a38638cab51b900471e3de0e33bca525ada44d04507d6c99c7d1e6fd8096 extends Twig_Template
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
        $__internal_4e15d2af6842606b7b9c98dd506f60a2b890dbd35aed51e72e07532d57e1307f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e15d2af6842606b7b9c98dd506f60a2b890dbd35aed51e72e07532d57e1307f->enter($__internal_4e15d2af6842606b7b9c98dd506f60a2b890dbd35aed51e72e07532d57e1307f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_506c81d4a991d2fd98eddee7141afe85e6c5af21a7afdb707bd86f9bc4812348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506c81d4a991d2fd98eddee7141afe85e6c5af21a7afdb707bd86f9bc4812348->enter($__internal_506c81d4a991d2fd98eddee7141afe85e6c5af21a7afdb707bd86f9bc4812348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_4e15d2af6842606b7b9c98dd506f60a2b890dbd35aed51e72e07532d57e1307f->leave($__internal_4e15d2af6842606b7b9c98dd506f60a2b890dbd35aed51e72e07532d57e1307f_prof);

        
        $__internal_506c81d4a991d2fd98eddee7141afe85e6c5af21a7afdb707bd86f9bc4812348->leave($__internal_506c81d4a991d2fd98eddee7141afe85e6c5af21a7afdb707bd86f9bc4812348_prof);

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
