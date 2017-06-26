<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_6cd9628487737abebce64afcf35c3fee2093dbe648548260befef02c0c518e50 extends Twig_Template
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
        $__internal_8713d9ca4cc520eb8d7e51830874bb1cfe5a54915549c943abf7ab7300ee98ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8713d9ca4cc520eb8d7e51830874bb1cfe5a54915549c943abf7ab7300ee98ce->enter($__internal_8713d9ca4cc520eb8d7e51830874bb1cfe5a54915549c943abf7ab7300ee98ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_5ba4fa283d51526bea85252079eeada21c930e60882e16a48e44e90b619c105a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba4fa283d51526bea85252079eeada21c930e60882e16a48e44e90b619c105a->enter($__internal_5ba4fa283d51526bea85252079eeada21c930e60882e16a48e44e90b619c105a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_8713d9ca4cc520eb8d7e51830874bb1cfe5a54915549c943abf7ab7300ee98ce->leave($__internal_8713d9ca4cc520eb8d7e51830874bb1cfe5a54915549c943abf7ab7300ee98ce_prof);

        
        $__internal_5ba4fa283d51526bea85252079eeada21c930e60882e16a48e44e90b619c105a->leave($__internal_5ba4fa283d51526bea85252079eeada21c930e60882e16a48e44e90b619c105a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
