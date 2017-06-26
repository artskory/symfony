<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_fe44b2e9e373333d7e46d6b77dd4baef8b5587690933f07182abbb90250f3b2e extends Twig_Template
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
        $__internal_302fe27ce439a37bd73a80bbdad316ec6168fe6b0ab9636c29dbce8cb5f16771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_302fe27ce439a37bd73a80bbdad316ec6168fe6b0ab9636c29dbce8cb5f16771->enter($__internal_302fe27ce439a37bd73a80bbdad316ec6168fe6b0ab9636c29dbce8cb5f16771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_e3baeb2b28af17bf5269785e7e6e2e551f18e61f7a6e7e8622a9d89f6e74e46e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3baeb2b28af17bf5269785e7e6e2e551f18e61f7a6e7e8622a9d89f6e74e46e->enter($__internal_e3baeb2b28af17bf5269785e7e6e2e551f18e61f7a6e7e8622a9d89f6e74e46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_302fe27ce439a37bd73a80bbdad316ec6168fe6b0ab9636c29dbce8cb5f16771->leave($__internal_302fe27ce439a37bd73a80bbdad316ec6168fe6b0ab9636c29dbce8cb5f16771_prof);

        
        $__internal_e3baeb2b28af17bf5269785e7e6e2e551f18e61f7a6e7e8622a9d89f6e74e46e->leave($__internal_e3baeb2b28af17bf5269785e7e6e2e551f18e61f7a6e7e8622a9d89f6e74e46e_prof);

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
