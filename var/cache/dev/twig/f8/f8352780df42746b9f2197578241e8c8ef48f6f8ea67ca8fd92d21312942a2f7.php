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
        $__internal_e6ecaf5bc8209101bbac43e1484f2c94aedc1c435336a42f2d3797916f4f4f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ecaf5bc8209101bbac43e1484f2c94aedc1c435336a42f2d3797916f4f4f4b->enter($__internal_e6ecaf5bc8209101bbac43e1484f2c94aedc1c435336a42f2d3797916f4f4f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_f3ceafde68fa839f932c3391e2f050ac8cc680aac729974b66740e489f36169d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ceafde68fa839f932c3391e2f050ac8cc680aac729974b66740e489f36169d->enter($__internal_f3ceafde68fa839f932c3391e2f050ac8cc680aac729974b66740e489f36169d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_e6ecaf5bc8209101bbac43e1484f2c94aedc1c435336a42f2d3797916f4f4f4b->leave($__internal_e6ecaf5bc8209101bbac43e1484f2c94aedc1c435336a42f2d3797916f4f4f4b_prof);

        
        $__internal_f3ceafde68fa839f932c3391e2f050ac8cc680aac729974b66740e489f36169d->leave($__internal_f3ceafde68fa839f932c3391e2f050ac8cc680aac729974b66740e489f36169d_prof);

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
