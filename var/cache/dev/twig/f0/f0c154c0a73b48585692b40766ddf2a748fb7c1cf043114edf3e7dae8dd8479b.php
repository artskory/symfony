<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_de77ffe613832cf068644d43aee54d31683deb41a604cbbbfb3b05afae191bba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00abd0a0420928f661de7d84193ffdaa59ab47fdc3dd7937606094780e1aec81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00abd0a0420928f661de7d84193ffdaa59ab47fdc3dd7937606094780e1aec81->enter($__internal_00abd0a0420928f661de7d84193ffdaa59ab47fdc3dd7937606094780e1aec81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_398d1ed8ea0560562ad5c7c84a01a0d8d7598b5e2c14483c642237a2622f0543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398d1ed8ea0560562ad5c7c84a01a0d8d7598b5e2c14483c642237a2622f0543->enter($__internal_398d1ed8ea0560562ad5c7c84a01a0d8d7598b5e2c14483c642237a2622f0543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_00abd0a0420928f661de7d84193ffdaa59ab47fdc3dd7937606094780e1aec81->leave($__internal_00abd0a0420928f661de7d84193ffdaa59ab47fdc3dd7937606094780e1aec81_prof);

        
        $__internal_398d1ed8ea0560562ad5c7c84a01a0d8d7598b5e2c14483c642237a2622f0543->leave($__internal_398d1ed8ea0560562ad5c7c84a01a0d8d7598b5e2c14483c642237a2622f0543_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b3b8f56f9f92feca4ce383632deb02484bdda95186d702c3f94388b4e9fafef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3b8f56f9f92feca4ce383632deb02484bdda95186d702c3f94388b4e9fafef->enter($__internal_2b3b8f56f9f92feca4ce383632deb02484bdda95186d702c3f94388b4e9fafef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9d3da9274e00391ffd6213f08067392d44ead62c42e3798e8a66f6d7c1eb8e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3da9274e00391ffd6213f08067392d44ead62c42e3798e8a66f6d7c1eb8e6b->enter($__internal_9d3da9274e00391ffd6213f08067392d44ead62c42e3798e8a66f6d7c1eb8e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9d3da9274e00391ffd6213f08067392d44ead62c42e3798e8a66f6d7c1eb8e6b->leave($__internal_9d3da9274e00391ffd6213f08067392d44ead62c42e3798e8a66f6d7c1eb8e6b_prof);

        
        $__internal_2b3b8f56f9f92feca4ce383632deb02484bdda95186d702c3f94388b4e9fafef->leave($__internal_2b3b8f56f9f92feca4ce383632deb02484bdda95186d702c3f94388b4e9fafef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
