<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_178cab26be68e090a4aa870c0171c4db36157ce0b09c7bfd879abb9b1e872b3f extends Twig_Template
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
        $__internal_a979c591f3372cf9f56c28ba23b2e6a8a16271acc3cb866e05741a379edc7ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a979c591f3372cf9f56c28ba23b2e6a8a16271acc3cb866e05741a379edc7ad2->enter($__internal_a979c591f3372cf9f56c28ba23b2e6a8a16271acc3cb866e05741a379edc7ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_8ca956ed04ed4547609038329580b817c33167133ee0d7ec2c0a1b1b2858d66b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca956ed04ed4547609038329580b817c33167133ee0d7ec2c0a1b1b2858d66b->enter($__internal_8ca956ed04ed4547609038329580b817c33167133ee0d7ec2c0a1b1b2858d66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a979c591f3372cf9f56c28ba23b2e6a8a16271acc3cb866e05741a379edc7ad2->leave($__internal_a979c591f3372cf9f56c28ba23b2e6a8a16271acc3cb866e05741a379edc7ad2_prof);

        
        $__internal_8ca956ed04ed4547609038329580b817c33167133ee0d7ec2c0a1b1b2858d66b->leave($__internal_8ca956ed04ed4547609038329580b817c33167133ee0d7ec2c0a1b1b2858d66b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
