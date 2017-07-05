<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a71a2dd46f1d2954ae5d35cd8d85d8045c82ea58fa9f9525ad9566b1d5952a5d extends Twig_Template
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
        $__internal_34bdbec52ef0da1f097fa2c6b8ced4aa2274d0305081d50cb5449c2d19449a94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34bdbec52ef0da1f097fa2c6b8ced4aa2274d0305081d50cb5449c2d19449a94->enter($__internal_34bdbec52ef0da1f097fa2c6b8ced4aa2274d0305081d50cb5449c2d19449a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_81b43c3090c3df996d063b6fd562cd733e9ea4ee2d26110a3870611dec72dd8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b43c3090c3df996d063b6fd562cd733e9ea4ee2d26110a3870611dec72dd8a->enter($__internal_81b43c3090c3df996d063b6fd562cd733e9ea4ee2d26110a3870611dec72dd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_34bdbec52ef0da1f097fa2c6b8ced4aa2274d0305081d50cb5449c2d19449a94->leave($__internal_34bdbec52ef0da1f097fa2c6b8ced4aa2274d0305081d50cb5449c2d19449a94_prof);

        
        $__internal_81b43c3090c3df996d063b6fd562cd733e9ea4ee2d26110a3870611dec72dd8a->leave($__internal_81b43c3090c3df996d063b6fd562cd733e9ea4ee2d26110a3870611dec72dd8a_prof);

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
