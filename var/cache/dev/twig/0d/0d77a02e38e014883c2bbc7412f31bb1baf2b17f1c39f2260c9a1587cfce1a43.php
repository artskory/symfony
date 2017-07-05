<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_bd6f2d5e6c2c8c488b87f4e72428cbfbb62761559adfea6f3c3d173c352c7847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_1efcce08f79c4e2448d0b920fee6e3cacb1340ae464c221f6968655f6031b73c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1efcce08f79c4e2448d0b920fee6e3cacb1340ae464c221f6968655f6031b73c->enter($__internal_1efcce08f79c4e2448d0b920fee6e3cacb1340ae464c221f6968655f6031b73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_2be7ef9739f36d0d1f6c537027ae31ae8ed54c3e538749c9a1603e439c9c4888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be7ef9739f36d0d1f6c537027ae31ae8ed54c3e538749c9a1603e439c9c4888->enter($__internal_2be7ef9739f36d0d1f6c537027ae31ae8ed54c3e538749c9a1603e439c9c4888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1efcce08f79c4e2448d0b920fee6e3cacb1340ae464c221f6968655f6031b73c->leave($__internal_1efcce08f79c4e2448d0b920fee6e3cacb1340ae464c221f6968655f6031b73c_prof);

        
        $__internal_2be7ef9739f36d0d1f6c537027ae31ae8ed54c3e538749c9a1603e439c9c4888->leave($__internal_2be7ef9739f36d0d1f6c537027ae31ae8ed54c3e538749c9a1603e439c9c4888_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f9b3f75510e1c184660ed02f8cc2018a18d5adf1173ea52f155c4d2ed450a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f9b3f75510e1c184660ed02f8cc2018a18d5adf1173ea52f155c4d2ed450a7c->enter($__internal_7f9b3f75510e1c184660ed02f8cc2018a18d5adf1173ea52f155c4d2ed450a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8d96e1720e9b94dcbb1379506870ba790161418095a0a8f1ae49cf743e73ebf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d96e1720e9b94dcbb1379506870ba790161418095a0a8f1ae49cf743e73ebf9->enter($__internal_8d96e1720e9b94dcbb1379506870ba790161418095a0a8f1ae49cf743e73ebf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_8d96e1720e9b94dcbb1379506870ba790161418095a0a8f1ae49cf743e73ebf9->leave($__internal_8d96e1720e9b94dcbb1379506870ba790161418095a0a8f1ae49cf743e73ebf9_prof);

        
        $__internal_7f9b3f75510e1c184660ed02f8cc2018a18d5adf1173ea52f155c4d2ed450a7c->leave($__internal_7f9b3f75510e1c184660ed02f8cc2018a18d5adf1173ea52f155c4d2ed450a7c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
", "FOSUserBundle:Resetting:request.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
