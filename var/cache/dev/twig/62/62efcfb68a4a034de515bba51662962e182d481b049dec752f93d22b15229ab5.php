<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_a9eead7c2519b25b902c921f38ef01afaf5fa942a6458c33beafff1653dc1adc extends Twig_Template
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
        $__internal_e4cfd16e4c1a66cf9911759cfd568d107186204f36ae411dbbe8b81da6e1b666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4cfd16e4c1a66cf9911759cfd568d107186204f36ae411dbbe8b81da6e1b666->enter($__internal_e4cfd16e4c1a66cf9911759cfd568d107186204f36ae411dbbe8b81da6e1b666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_1b603a87c85f9913ca93a55f66da542c82f31fb30a4ca8246fcef7969df1408e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b603a87c85f9913ca93a55f66da542c82f31fb30a4ca8246fcef7969df1408e->enter($__internal_1b603a87c85f9913ca93a55f66da542c82f31fb30a4ca8246fcef7969df1408e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_e4cfd16e4c1a66cf9911759cfd568d107186204f36ae411dbbe8b81da6e1b666->leave($__internal_e4cfd16e4c1a66cf9911759cfd568d107186204f36ae411dbbe8b81da6e1b666_prof);

        
        $__internal_1b603a87c85f9913ca93a55f66da542c82f31fb30a4ca8246fcef7969df1408e->leave($__internal_1b603a87c85f9913ca93a55f66da542c82f31fb30a4ca8246fcef7969df1408e_prof);

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
