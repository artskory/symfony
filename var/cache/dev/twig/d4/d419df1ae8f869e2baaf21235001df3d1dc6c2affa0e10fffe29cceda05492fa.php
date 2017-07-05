<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_4420b66e0e8b4b8d1450b2aaf0bf040b78326531ebf3a19c5efa90309bf9c36f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_b6fc3ff3072c03343afbd3cb94be8354a6ed9c8a4e391dd012c6d47efd4610ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6fc3ff3072c03343afbd3cb94be8354a6ed9c8a4e391dd012c6d47efd4610ce->enter($__internal_b6fc3ff3072c03343afbd3cb94be8354a6ed9c8a4e391dd012c6d47efd4610ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_65e835ec510cac426536940fd2c13ea512bc3030bf2f81ab912852d083a45268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e835ec510cac426536940fd2c13ea512bc3030bf2f81ab912852d083a45268->enter($__internal_65e835ec510cac426536940fd2c13ea512bc3030bf2f81ab912852d083a45268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6fc3ff3072c03343afbd3cb94be8354a6ed9c8a4e391dd012c6d47efd4610ce->leave($__internal_b6fc3ff3072c03343afbd3cb94be8354a6ed9c8a4e391dd012c6d47efd4610ce_prof);

        
        $__internal_65e835ec510cac426536940fd2c13ea512bc3030bf2f81ab912852d083a45268->leave($__internal_65e835ec510cac426536940fd2c13ea512bc3030bf2f81ab912852d083a45268_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6c27e8097bfc5f33fac70a3ef99d80d57b9aaa511292414edbd9c6c014add26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c27e8097bfc5f33fac70a3ef99d80d57b9aaa511292414edbd9c6c014add26->enter($__internal_f6c27e8097bfc5f33fac70a3ef99d80d57b9aaa511292414edbd9c6c014add26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2713ace7e1a2c026dd90b47300828d9c8c40f05db5cd84d4ca4ee0999a87a780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2713ace7e1a2c026dd90b47300828d9c8c40f05db5cd84d4ca4ee0999a87a780->enter($__internal_2713ace7e1a2c026dd90b47300828d9c8c40f05db5cd84d4ca4ee0999a87a780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_2713ace7e1a2c026dd90b47300828d9c8c40f05db5cd84d4ca4ee0999a87a780->leave($__internal_2713ace7e1a2c026dd90b47300828d9c8c40f05db5cd84d4ca4ee0999a87a780_prof);

        
        $__internal_f6c27e8097bfc5f33fac70a3ef99d80d57b9aaa511292414edbd9c6c014add26->leave($__internal_f6c27e8097bfc5f33fac70a3ef99d80d57b9aaa511292414edbd9c6c014add26_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
