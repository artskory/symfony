<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_0aa8355311384fbd5878f2f9b6f06fd58327aa50e6adb184d7a65309348760ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_61ebe9f5c4babf5644b689b4c5438dbc5949bd68748b9e83bd3196650b7d949d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61ebe9f5c4babf5644b689b4c5438dbc5949bd68748b9e83bd3196650b7d949d->enter($__internal_61ebe9f5c4babf5644b689b4c5438dbc5949bd68748b9e83bd3196650b7d949d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_02c99d8a4d258314f7b4c63161b91d74db324435ebc5a794f4df9bc655cb3edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c99d8a4d258314f7b4c63161b91d74db324435ebc5a794f4df9bc655cb3edf->enter($__internal_02c99d8a4d258314f7b4c63161b91d74db324435ebc5a794f4df9bc655cb3edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61ebe9f5c4babf5644b689b4c5438dbc5949bd68748b9e83bd3196650b7d949d->leave($__internal_61ebe9f5c4babf5644b689b4c5438dbc5949bd68748b9e83bd3196650b7d949d_prof);

        
        $__internal_02c99d8a4d258314f7b4c63161b91d74db324435ebc5a794f4df9bc655cb3edf->leave($__internal_02c99d8a4d258314f7b4c63161b91d74db324435ebc5a794f4df9bc655cb3edf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67566e9e87b60c12df80b02bdc6ef8e93fac7c874686a51b80ccef5ab3a82f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67566e9e87b60c12df80b02bdc6ef8e93fac7c874686a51b80ccef5ab3a82f70->enter($__internal_67566e9e87b60c12df80b02bdc6ef8e93fac7c874686a51b80ccef5ab3a82f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2f5c2c12c41249e84dac6bf35883b2bd9787065b6c386217a580b560eccbd06a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5c2c12c41249e84dac6bf35883b2bd9787065b6c386217a580b560eccbd06a->enter($__internal_2f5c2c12c41249e84dac6bf35883b2bd9787065b6c386217a580b560eccbd06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_2f5c2c12c41249e84dac6bf35883b2bd9787065b6c386217a580b560eccbd06a->leave($__internal_2f5c2c12c41249e84dac6bf35883b2bd9787065b6c386217a580b560eccbd06a_prof);

        
        $__internal_67566e9e87b60c12df80b02bdc6ef8e93fac7c874686a51b80ccef5ab3a82f70->leave($__internal_67566e9e87b60c12df80b02bdc6ef8e93fac7c874686a51b80ccef5ab3a82f70_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password.html.twig");
    }
}
