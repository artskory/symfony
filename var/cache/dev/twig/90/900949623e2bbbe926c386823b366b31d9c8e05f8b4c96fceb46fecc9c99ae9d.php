<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2b48847daec46a43966648db2010046b5df32145866815b1d080a038357f6658 extends Twig_Template
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
        $__internal_7a454f3164e701bea6f4d7aa5532e7b2bb93aee45da2d0cb887066b0890262fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a454f3164e701bea6f4d7aa5532e7b2bb93aee45da2d0cb887066b0890262fe->enter($__internal_7a454f3164e701bea6f4d7aa5532e7b2bb93aee45da2d0cb887066b0890262fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_df51f54508da13de4e7ee65fe818d7d486d84f5854d24c1c4258068aa74df816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df51f54508da13de4e7ee65fe818d7d486d84f5854d24c1c4258068aa74df816->enter($__internal_df51f54508da13de4e7ee65fe818d7d486d84f5854d24c1c4258068aa74df816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_7a454f3164e701bea6f4d7aa5532e7b2bb93aee45da2d0cb887066b0890262fe->leave($__internal_7a454f3164e701bea6f4d7aa5532e7b2bb93aee45da2d0cb887066b0890262fe_prof);

        
        $__internal_df51f54508da13de4e7ee65fe818d7d486d84f5854d24c1c4258068aa74df816->leave($__internal_df51f54508da13de4e7ee65fe818d7d486d84f5854d24c1c4258068aa74df816_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
