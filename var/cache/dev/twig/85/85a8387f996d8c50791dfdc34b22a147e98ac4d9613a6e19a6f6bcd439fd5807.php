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
        $__internal_237763d6eb05bbda307bb5443283216890c70a6047aaaa37246cb2d163f01f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237763d6eb05bbda307bb5443283216890c70a6047aaaa37246cb2d163f01f2a->enter($__internal_237763d6eb05bbda307bb5443283216890c70a6047aaaa37246cb2d163f01f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_13e4ddb244c3876df4f35e473fc5d5a3814e4f0570d462e2fee2fe0778b19667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e4ddb244c3876df4f35e473fc5d5a3814e4f0570d462e2fee2fe0778b19667->enter($__internal_13e4ddb244c3876df4f35e473fc5d5a3814e4f0570d462e2fee2fe0778b19667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_237763d6eb05bbda307bb5443283216890c70a6047aaaa37246cb2d163f01f2a->leave($__internal_237763d6eb05bbda307bb5443283216890c70a6047aaaa37246cb2d163f01f2a_prof);

        
        $__internal_13e4ddb244c3876df4f35e473fc5d5a3814e4f0570d462e2fee2fe0778b19667->leave($__internal_13e4ddb244c3876df4f35e473fc5d5a3814e4f0570d462e2fee2fe0778b19667_prof);

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
