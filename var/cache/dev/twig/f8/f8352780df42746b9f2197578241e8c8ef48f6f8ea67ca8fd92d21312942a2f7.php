<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_fbeae96adcd969072bf4b0fc1233f633bdbd19b9f60a86cd26980980baba4094 extends Twig_Template
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
        $__internal_beeb04cbf7cd59e61bd6970a8ae62756e86fee04acec5ec9793ba3e2d8972043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beeb04cbf7cd59e61bd6970a8ae62756e86fee04acec5ec9793ba3e2d8972043->enter($__internal_beeb04cbf7cd59e61bd6970a8ae62756e86fee04acec5ec9793ba3e2d8972043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_7506b3b619c812e468d97e37b158c7de659a830a880eee4e2f32014337b17ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7506b3b619c812e468d97e37b158c7de659a830a880eee4e2f32014337b17ece->enter($__internal_7506b3b619c812e468d97e37b158c7de659a830a880eee4e2f32014337b17ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_beeb04cbf7cd59e61bd6970a8ae62756e86fee04acec5ec9793ba3e2d8972043->leave($__internal_beeb04cbf7cd59e61bd6970a8ae62756e86fee04acec5ec9793ba3e2d8972043_prof);

        
        $__internal_7506b3b619c812e468d97e37b158c7de659a830a880eee4e2f32014337b17ece->leave($__internal_7506b3b619c812e468d97e37b158c7de659a830a880eee4e2f32014337b17ece_prof);

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
