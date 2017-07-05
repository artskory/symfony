<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_f8476ac14099a3f22d74215ab32a6b68f5dac02e1be2421e17117f290040827f extends Twig_Template
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
        $__internal_49ad55bf12c42bfcc9aeeaf896641126f5d44fcfac1bd9cf6678122ad2ee1770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ad55bf12c42bfcc9aeeaf896641126f5d44fcfac1bd9cf6678122ad2ee1770->enter($__internal_49ad55bf12c42bfcc9aeeaf896641126f5d44fcfac1bd9cf6678122ad2ee1770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_d45998dadbc0a9921604f9425e85bc5b9e13e8d0a720c1b6b1cfab380f7470dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45998dadbc0a9921604f9425e85bc5b9e13e8d0a720c1b6b1cfab380f7470dc->enter($__internal_d45998dadbc0a9921604f9425e85bc5b9e13e8d0a720c1b6b1cfab380f7470dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_49ad55bf12c42bfcc9aeeaf896641126f5d44fcfac1bd9cf6678122ad2ee1770->leave($__internal_49ad55bf12c42bfcc9aeeaf896641126f5d44fcfac1bd9cf6678122ad2ee1770_prof);

        
        $__internal_d45998dadbc0a9921604f9425e85bc5b9e13e8d0a720c1b6b1cfab380f7470dc->leave($__internal_d45998dadbc0a9921604f9425e85bc5b9e13e8d0a720c1b6b1cfab380f7470dc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
