<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_be80df7cb92de4664bb6d3968edc6425010d48cebe9c9f5cffdd25e9d33eb20c extends Twig_Template
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
        $__internal_34ab89e52e0c51a101b0398b5d85973c281045fd5bc4aa0f9c8a43fd20521e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ab89e52e0c51a101b0398b5d85973c281045fd5bc4aa0f9c8a43fd20521e47->enter($__internal_34ab89e52e0c51a101b0398b5d85973c281045fd5bc4aa0f9c8a43fd20521e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_f9dd06f0476b619f2dc1be2e0d629eb99f6ec290517f3d41a40e464de866bfc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9dd06f0476b619f2dc1be2e0d629eb99f6ec290517f3d41a40e464de866bfc6->enter($__internal_f9dd06f0476b619f2dc1be2e0d629eb99f6ec290517f3d41a40e464de866bfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_34ab89e52e0c51a101b0398b5d85973c281045fd5bc4aa0f9c8a43fd20521e47->leave($__internal_34ab89e52e0c51a101b0398b5d85973c281045fd5bc4aa0f9c8a43fd20521e47_prof);

        
        $__internal_f9dd06f0476b619f2dc1be2e0d629eb99f6ec290517f3d41a40e464de866bfc6->leave($__internal_f9dd06f0476b619f2dc1be2e0d629eb99f6ec290517f3d41a40e464de866bfc6_prof);

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
