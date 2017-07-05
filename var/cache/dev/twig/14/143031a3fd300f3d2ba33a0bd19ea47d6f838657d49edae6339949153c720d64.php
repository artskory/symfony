<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_a39f9345c0289471dd2621669757092ec2abc3275e1dc72a69cfd7a742631f86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_29b7e854980d5440f6c1fc78b590320a4056aaa19ab3b04b9291d375e2abdf32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29b7e854980d5440f6c1fc78b590320a4056aaa19ab3b04b9291d375e2abdf32->enter($__internal_29b7e854980d5440f6c1fc78b590320a4056aaa19ab3b04b9291d375e2abdf32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_053951d9cd9e30a0c07b61405409c175881f25c8819c8502a12df112f4f1ad43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053951d9cd9e30a0c07b61405409c175881f25c8819c8502a12df112f4f1ad43->enter($__internal_053951d9cd9e30a0c07b61405409c175881f25c8819c8502a12df112f4f1ad43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29b7e854980d5440f6c1fc78b590320a4056aaa19ab3b04b9291d375e2abdf32->leave($__internal_29b7e854980d5440f6c1fc78b590320a4056aaa19ab3b04b9291d375e2abdf32_prof);

        
        $__internal_053951d9cd9e30a0c07b61405409c175881f25c8819c8502a12df112f4f1ad43->leave($__internal_053951d9cd9e30a0c07b61405409c175881f25c8819c8502a12df112f4f1ad43_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f88f87f97cb43101ac9e5b53950126a390f9d8054919d5be6f9f8c0faa5251b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f88f87f97cb43101ac9e5b53950126a390f9d8054919d5be6f9f8c0faa5251b5->enter($__internal_f88f87f97cb43101ac9e5b53950126a390f9d8054919d5be6f9f8c0faa5251b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e4959d0a56fe6f470e728f7015562139f941723a143070165678321aedae8314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4959d0a56fe6f470e728f7015562139f941723a143070165678321aedae8314->enter($__internal_e4959d0a56fe6f470e728f7015562139f941723a143070165678321aedae8314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_e4959d0a56fe6f470e728f7015562139f941723a143070165678321aedae8314->leave($__internal_e4959d0a56fe6f470e728f7015562139f941723a143070165678321aedae8314_prof);

        
        $__internal_f88f87f97cb43101ac9e5b53950126a390f9d8054919d5be6f9f8c0faa5251b5->leave($__internal_f88f87f97cb43101ac9e5b53950126a390f9d8054919d5be6f9f8c0faa5251b5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
