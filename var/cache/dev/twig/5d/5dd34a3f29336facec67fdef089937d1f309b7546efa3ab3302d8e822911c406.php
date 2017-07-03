<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_39f88517022ae729622b7fc6d11b8ee9b6abf3a39bc372cc930f84e544797791 extends Twig_Template
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
        $__internal_4a7847c43e3a5dda91842424fb209bf60c8c5d5252ced9b1269e0ad1e53a2752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a7847c43e3a5dda91842424fb209bf60c8c5d5252ced9b1269e0ad1e53a2752->enter($__internal_4a7847c43e3a5dda91842424fb209bf60c8c5d5252ced9b1269e0ad1e53a2752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_0d4469658765bcbd6f9e0b686d8b5b55105272b6ecc3014da2d2ade0c4dd1d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4469658765bcbd6f9e0b686d8b5b55105272b6ecc3014da2d2ade0c4dd1d37->enter($__internal_0d4469658765bcbd6f9e0b686d8b5b55105272b6ecc3014da2d2ade0c4dd1d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4a7847c43e3a5dda91842424fb209bf60c8c5d5252ced9b1269e0ad1e53a2752->leave($__internal_4a7847c43e3a5dda91842424fb209bf60c8c5d5252ced9b1269e0ad1e53a2752_prof);

        
        $__internal_0d4469658765bcbd6f9e0b686d8b5b55105272b6ecc3014da2d2ade0c4dd1d37->leave($__internal_0d4469658765bcbd6f9e0b686d8b5b55105272b6ecc3014da2d2ade0c4dd1d37_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_57dd3b5b378c06e0127a038fb337ed16f6092efdf04bf897045defe1d2bc807b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57dd3b5b378c06e0127a038fb337ed16f6092efdf04bf897045defe1d2bc807b->enter($__internal_57dd3b5b378c06e0127a038fb337ed16f6092efdf04bf897045defe1d2bc807b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7d0d20f7488846d288934068240e1df22908264a0cee43ed4333094d9d2c12f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0d20f7488846d288934068240e1df22908264a0cee43ed4333094d9d2c12f9->enter($__internal_7d0d20f7488846d288934068240e1df22908264a0cee43ed4333094d9d2c12f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7d0d20f7488846d288934068240e1df22908264a0cee43ed4333094d9d2c12f9->leave($__internal_7d0d20f7488846d288934068240e1df22908264a0cee43ed4333094d9d2c12f9_prof);

        
        $__internal_57dd3b5b378c06e0127a038fb337ed16f6092efdf04bf897045defe1d2bc807b->leave($__internal_57dd3b5b378c06e0127a038fb337ed16f6092efdf04bf897045defe1d2bc807b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
