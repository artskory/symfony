<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_bd6deff07b903ea32523bd5836dad5ee088df6102b77d763395a3cf6aebd099f extends Twig_Template
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
        $__internal_f822d56857dddb6e8a9706914dcc398a61cc0c31246fbfd20799e34c51ded4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f822d56857dddb6e8a9706914dcc398a61cc0c31246fbfd20799e34c51ded4c7->enter($__internal_f822d56857dddb6e8a9706914dcc398a61cc0c31246fbfd20799e34c51ded4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_b1b0f31d9f0af9e57cfe39854f9daf98f69f2069853889b25a5030b77a39c154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b0f31d9f0af9e57cfe39854f9daf98f69f2069853889b25a5030b77a39c154->enter($__internal_b1b0f31d9f0af9e57cfe39854f9daf98f69f2069853889b25a5030b77a39c154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f822d56857dddb6e8a9706914dcc398a61cc0c31246fbfd20799e34c51ded4c7->leave($__internal_f822d56857dddb6e8a9706914dcc398a61cc0c31246fbfd20799e34c51ded4c7_prof);

        
        $__internal_b1b0f31d9f0af9e57cfe39854f9daf98f69f2069853889b25a5030b77a39c154->leave($__internal_b1b0f31d9f0af9e57cfe39854f9daf98f69f2069853889b25a5030b77a39c154_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
