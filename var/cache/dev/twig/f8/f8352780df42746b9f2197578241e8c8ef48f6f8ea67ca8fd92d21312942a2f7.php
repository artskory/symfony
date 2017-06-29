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
        $__internal_ec8967f3ed05753bb1eef814d684d3dfb3afa726e7abb146f01a27f6ae1fe63a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8967f3ed05753bb1eef814d684d3dfb3afa726e7abb146f01a27f6ae1fe63a->enter($__internal_ec8967f3ed05753bb1eef814d684d3dfb3afa726e7abb146f01a27f6ae1fe63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_c886d39cc43a0eac1dd6f5485f400753ff10b26dda2d8c11571d71ee15aa2096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c886d39cc43a0eac1dd6f5485f400753ff10b26dda2d8c11571d71ee15aa2096->enter($__internal_c886d39cc43a0eac1dd6f5485f400753ff10b26dda2d8c11571d71ee15aa2096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_ec8967f3ed05753bb1eef814d684d3dfb3afa726e7abb146f01a27f6ae1fe63a->leave($__internal_ec8967f3ed05753bb1eef814d684d3dfb3afa726e7abb146f01a27f6ae1fe63a_prof);

        
        $__internal_c886d39cc43a0eac1dd6f5485f400753ff10b26dda2d8c11571d71ee15aa2096->leave($__internal_c886d39cc43a0eac1dd6f5485f400753ff10b26dda2d8c11571d71ee15aa2096_prof);

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
