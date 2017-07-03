<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_45f01ab5198c447e1c606945f71b6cca460f5a23ca4bcc0173ab6e5bba94713e extends Twig_Template
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
        $__internal_68f1360f9b9e77fbf8b1fb336c2093ba5dc3f59067f77cbdc8060f5684c559c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f1360f9b9e77fbf8b1fb336c2093ba5dc3f59067f77cbdc8060f5684c559c1->enter($__internal_68f1360f9b9e77fbf8b1fb336c2093ba5dc3f59067f77cbdc8060f5684c559c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_0ab78f3d45ed2c1285ed35cda14e691b9c25f0b705371422cb7b08278ab34b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab78f3d45ed2c1285ed35cda14e691b9c25f0b705371422cb7b08278ab34b0e->enter($__internal_0ab78f3d45ed2c1285ed35cda14e691b9c25f0b705371422cb7b08278ab34b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68f1360f9b9e77fbf8b1fb336c2093ba5dc3f59067f77cbdc8060f5684c559c1->leave($__internal_68f1360f9b9e77fbf8b1fb336c2093ba5dc3f59067f77cbdc8060f5684c559c1_prof);

        
        $__internal_0ab78f3d45ed2c1285ed35cda14e691b9c25f0b705371422cb7b08278ab34b0e->leave($__internal_0ab78f3d45ed2c1285ed35cda14e691b9c25f0b705371422cb7b08278ab34b0e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d119528c3f62137df6ce5b5f83d89dd1b1473671673cd5b73f5fa6f4cff20423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d119528c3f62137df6ce5b5f83d89dd1b1473671673cd5b73f5fa6f4cff20423->enter($__internal_d119528c3f62137df6ce5b5f83d89dd1b1473671673cd5b73f5fa6f4cff20423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_13991d5ef67d3789fef2916aba0244659ccb2f2f7d10103b3aabf4fca4ec15f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13991d5ef67d3789fef2916aba0244659ccb2f2f7d10103b3aabf4fca4ec15f8->enter($__internal_13991d5ef67d3789fef2916aba0244659ccb2f2f7d10103b3aabf4fca4ec15f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_13991d5ef67d3789fef2916aba0244659ccb2f2f7d10103b3aabf4fca4ec15f8->leave($__internal_13991d5ef67d3789fef2916aba0244659ccb2f2f7d10103b3aabf4fca4ec15f8_prof);

        
        $__internal_d119528c3f62137df6ce5b5f83d89dd1b1473671673cd5b73f5fa6f4cff20423->leave($__internal_d119528c3f62137df6ce5b5f83d89dd1b1473671673cd5b73f5fa6f4cff20423_prof);

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
