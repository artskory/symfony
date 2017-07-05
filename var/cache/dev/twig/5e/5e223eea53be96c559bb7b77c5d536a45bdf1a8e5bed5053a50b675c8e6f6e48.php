<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_35d8d9e262680417539530a9da166478819f8b592f2533bccc9aeb59bfa570ce extends Twig_Template
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
        $__internal_2b43181ad3ffa1359119c00cad51f2e5f2e58ab3ecbfe90b89945a4296b777dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b43181ad3ffa1359119c00cad51f2e5f2e58ab3ecbfe90b89945a4296b777dc->enter($__internal_2b43181ad3ffa1359119c00cad51f2e5f2e58ab3ecbfe90b89945a4296b777dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_d31fdfa2fd4f1e94c03be6c1be4595e6e78bbfed957eec2af561ca9e46e8720b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31fdfa2fd4f1e94c03be6c1be4595e6e78bbfed957eec2af561ca9e46e8720b->enter($__internal_d31fdfa2fd4f1e94c03be6c1be4595e6e78bbfed957eec2af561ca9e46e8720b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2b43181ad3ffa1359119c00cad51f2e5f2e58ab3ecbfe90b89945a4296b777dc->leave($__internal_2b43181ad3ffa1359119c00cad51f2e5f2e58ab3ecbfe90b89945a4296b777dc_prof);

        
        $__internal_d31fdfa2fd4f1e94c03be6c1be4595e6e78bbfed957eec2af561ca9e46e8720b->leave($__internal_d31fdfa2fd4f1e94c03be6c1be4595e6e78bbfed957eec2af561ca9e46e8720b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_725cd2d361cdf3e93d5ac178e713d0d25ed04d298ef9c78672b7c561848c9901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_725cd2d361cdf3e93d5ac178e713d0d25ed04d298ef9c78672b7c561848c9901->enter($__internal_725cd2d361cdf3e93d5ac178e713d0d25ed04d298ef9c78672b7c561848c9901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_50d949b6801b5aa8275019a394ae75aab311e71040acc0e489c618a0cd81ec71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d949b6801b5aa8275019a394ae75aab311e71040acc0e489c618a0cd81ec71->enter($__internal_50d949b6801b5aa8275019a394ae75aab311e71040acc0e489c618a0cd81ec71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_50d949b6801b5aa8275019a394ae75aab311e71040acc0e489c618a0cd81ec71->leave($__internal_50d949b6801b5aa8275019a394ae75aab311e71040acc0e489c618a0cd81ec71_prof);

        
        $__internal_725cd2d361cdf3e93d5ac178e713d0d25ed04d298ef9c78672b7c561848c9901->leave($__internal_725cd2d361cdf3e93d5ac178e713d0d25ed04d298ef9c78672b7c561848c9901_prof);

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
