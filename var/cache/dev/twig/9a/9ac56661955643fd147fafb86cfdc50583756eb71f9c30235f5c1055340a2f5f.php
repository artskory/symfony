<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_03bb4cdf6903f80ec7fca6d12afc302a948ac432e0047e390380ce3afc72d477 extends Twig_Template
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
        $__internal_21ff58e03cd6364b599b9e31fd241d67d18c9c450eb3fe9c9c314d2bfa092d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21ff58e03cd6364b599b9e31fd241d67d18c9c450eb3fe9c9c314d2bfa092d18->enter($__internal_21ff58e03cd6364b599b9e31fd241d67d18c9c450eb3fe9c9c314d2bfa092d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_176ffc89e629c1819a061556ef94ca407f4fe5253c5348711a9b77a68f3d3154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176ffc89e629c1819a061556ef94ca407f4fe5253c5348711a9b77a68f3d3154->enter($__internal_176ffc89e629c1819a061556ef94ca407f4fe5253c5348711a9b77a68f3d3154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_21ff58e03cd6364b599b9e31fd241d67d18c9c450eb3fe9c9c314d2bfa092d18->leave($__internal_21ff58e03cd6364b599b9e31fd241d67d18c9c450eb3fe9c9c314d2bfa092d18_prof);

        
        $__internal_176ffc89e629c1819a061556ef94ca407f4fe5253c5348711a9b77a68f3d3154->leave($__internal_176ffc89e629c1819a061556ef94ca407f4fe5253c5348711a9b77a68f3d3154_prof);

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
