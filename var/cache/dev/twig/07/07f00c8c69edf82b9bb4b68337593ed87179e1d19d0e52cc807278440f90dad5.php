<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_473c729993a301b3da3164a96bd6bff6b068e643d3eaa26eefbe9fb32d096700 extends Twig_Template
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
        $__internal_e01327f45453f37d7a19c881a668a97d2833f5c5e335b95ad10709ae161633b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e01327f45453f37d7a19c881a668a97d2833f5c5e335b95ad10709ae161633b6->enter($__internal_e01327f45453f37d7a19c881a668a97d2833f5c5e335b95ad10709ae161633b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_1962cbe05d539fb43a606fc2902c962a02f830afd848748d3c08347b8c2a2882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1962cbe05d539fb43a606fc2902c962a02f830afd848748d3c08347b8c2a2882->enter($__internal_1962cbe05d539fb43a606fc2902c962a02f830afd848748d3c08347b8c2a2882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e01327f45453f37d7a19c881a668a97d2833f5c5e335b95ad10709ae161633b6->leave($__internal_e01327f45453f37d7a19c881a668a97d2833f5c5e335b95ad10709ae161633b6_prof);

        
        $__internal_1962cbe05d539fb43a606fc2902c962a02f830afd848748d3c08347b8c2a2882->leave($__internal_1962cbe05d539fb43a606fc2902c962a02f830afd848748d3c08347b8c2a2882_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
