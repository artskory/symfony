<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_54f28a1a2e83f53bb9a0190524c4a5d9d00033bcbd73dada04c8cc017bf259cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_321b5df19753352a60f118670b44b52bda6cdb017eadc4f301f1a25f8424f6c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_321b5df19753352a60f118670b44b52bda6cdb017eadc4f301f1a25f8424f6c0->enter($__internal_321b5df19753352a60f118670b44b52bda6cdb017eadc4f301f1a25f8424f6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_c0d2f2fd9af80bf9a827d151799ebe22e376d94c72f1968b8b35e402f4415cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d2f2fd9af80bf9a827d151799ebe22e376d94c72f1968b8b35e402f4415cf2->enter($__internal_c0d2f2fd9af80bf9a827d151799ebe22e376d94c72f1968b8b35e402f4415cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_321b5df19753352a60f118670b44b52bda6cdb017eadc4f301f1a25f8424f6c0->leave($__internal_321b5df19753352a60f118670b44b52bda6cdb017eadc4f301f1a25f8424f6c0_prof);

        
        $__internal_c0d2f2fd9af80bf9a827d151799ebe22e376d94c72f1968b8b35e402f4415cf2->leave($__internal_c0d2f2fd9af80bf9a827d151799ebe22e376d94c72f1968b8b35e402f4415cf2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a77d99837df32550dab65fff0f302f865c5eb98afbc5a02affcd00194dd241b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a77d99837df32550dab65fff0f302f865c5eb98afbc5a02affcd00194dd241b5->enter($__internal_a77d99837df32550dab65fff0f302f865c5eb98afbc5a02affcd00194dd241b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a77eedb6f054167fb583f3ed011e34d85a60eb21870b215020f8e4367bf38867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77eedb6f054167fb583f3ed011e34d85a60eb21870b215020f8e4367bf38867->enter($__internal_a77eedb6f054167fb583f3ed011e34d85a60eb21870b215020f8e4367bf38867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a77eedb6f054167fb583f3ed011e34d85a60eb21870b215020f8e4367bf38867->leave($__internal_a77eedb6f054167fb583f3ed011e34d85a60eb21870b215020f8e4367bf38867_prof);

        
        $__internal_a77d99837df32550dab65fff0f302f865c5eb98afbc5a02affcd00194dd241b5->leave($__internal_a77d99837df32550dab65fff0f302f865c5eb98afbc5a02affcd00194dd241b5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
