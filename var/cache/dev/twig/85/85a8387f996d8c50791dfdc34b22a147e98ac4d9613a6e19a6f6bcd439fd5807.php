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
        $__internal_c30d8a00cf891d40cbf2e5986b7a2834f1b1cf3630e6611970c029f497c437dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30d8a00cf891d40cbf2e5986b7a2834f1b1cf3630e6611970c029f497c437dc->enter($__internal_c30d8a00cf891d40cbf2e5986b7a2834f1b1cf3630e6611970c029f497c437dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_816835a0648e4964a140752a78d543806f4b1c7eef2086c81a0b0673b6ff5825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816835a0648e4964a140752a78d543806f4b1c7eef2086c81a0b0673b6ff5825->enter($__internal_816835a0648e4964a140752a78d543806f4b1c7eef2086c81a0b0673b6ff5825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c30d8a00cf891d40cbf2e5986b7a2834f1b1cf3630e6611970c029f497c437dc->leave($__internal_c30d8a00cf891d40cbf2e5986b7a2834f1b1cf3630e6611970c029f497c437dc_prof);

        
        $__internal_816835a0648e4964a140752a78d543806f4b1c7eef2086c81a0b0673b6ff5825->leave($__internal_816835a0648e4964a140752a78d543806f4b1c7eef2086c81a0b0673b6ff5825_prof);

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
