<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_7d29810473eed6f101893c95be9d6df3897fdf0a3b6a0016c395e5bf9251bd13 extends Twig_Template
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
        $__internal_900918b390f74028bf9f4e716569e76c0d8097333122d36f409c56a85aaf5005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_900918b390f74028bf9f4e716569e76c0d8097333122d36f409c56a85aaf5005->enter($__internal_900918b390f74028bf9f4e716569e76c0d8097333122d36f409c56a85aaf5005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_6d66af3c446a11611aceba0cf07e22ee030deecab2f1568f215107636a37405b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d66af3c446a11611aceba0cf07e22ee030deecab2f1568f215107636a37405b->enter($__internal_6d66af3c446a11611aceba0cf07e22ee030deecab2f1568f215107636a37405b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_900918b390f74028bf9f4e716569e76c0d8097333122d36f409c56a85aaf5005->leave($__internal_900918b390f74028bf9f4e716569e76c0d8097333122d36f409c56a85aaf5005_prof);

        
        $__internal_6d66af3c446a11611aceba0cf07e22ee030deecab2f1568f215107636a37405b->leave($__internal_6d66af3c446a11611aceba0cf07e22ee030deecab2f1568f215107636a37405b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
