<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a8259a1a23e0034684f7cc556fec000395c430fb5eabae11530987c6be17412a extends Twig_Template
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
        $__internal_2e273810971f6976666683f66e82bde8fa841658ac2810df6ee6e58ee56d1c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e273810971f6976666683f66e82bde8fa841658ac2810df6ee6e58ee56d1c19->enter($__internal_2e273810971f6976666683f66e82bde8fa841658ac2810df6ee6e58ee56d1c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_5e7b280bce4c695ea9cb3b3303b94db9119f1363ef4eb1c6e8503adba5cd834e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7b280bce4c695ea9cb3b3303b94db9119f1363ef4eb1c6e8503adba5cd834e->enter($__internal_5e7b280bce4c695ea9cb3b3303b94db9119f1363ef4eb1c6e8503adba5cd834e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_2e273810971f6976666683f66e82bde8fa841658ac2810df6ee6e58ee56d1c19->leave($__internal_2e273810971f6976666683f66e82bde8fa841658ac2810df6ee6e58ee56d1c19_prof);

        
        $__internal_5e7b280bce4c695ea9cb3b3303b94db9119f1363ef4eb1c6e8503adba5cd834e->leave($__internal_5e7b280bce4c695ea9cb3b3303b94db9119f1363ef4eb1c6e8503adba5cd834e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
