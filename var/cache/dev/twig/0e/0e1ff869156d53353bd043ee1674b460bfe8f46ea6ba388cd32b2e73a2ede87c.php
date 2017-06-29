<?php

/* @OCPlatform/Annonce/index.html.twig */
class __TwigTemplate_59044f383ee6c3b5d1754ce8da7af571156376db987d2c7291729b87d939dc6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle:Annonce:layout.html.twig", "@OCPlatform/Annonce/index.html.twig", 1);
        $this->blocks = array(
            'body_layout' => array($this, 'block_body_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle:Annonce:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccfdfda3c1824d62f0817d6c391a908ad6a9d57aa224a192f8e188a85c515a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccfdfda3c1824d62f0817d6c391a908ad6a9d57aa224a192f8e188a85c515a14->enter($__internal_ccfdfda3c1824d62f0817d6c391a908ad6a9d57aa224a192f8e188a85c515a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Annonce/index.html.twig"));

        $__internal_757ddda0462a643878fcb11b6260a7903db76f97f42517906489499570a6b4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757ddda0462a643878fcb11b6260a7903db76f97f42517906489499570a6b4ca->enter($__internal_757ddda0462a643878fcb11b6260a7903db76f97f42517906489499570a6b4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Annonce/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccfdfda3c1824d62f0817d6c391a908ad6a9d57aa224a192f8e188a85c515a14->leave($__internal_ccfdfda3c1824d62f0817d6c391a908ad6a9d57aa224a192f8e188a85c515a14_prof);

        
        $__internal_757ddda0462a643878fcb11b6260a7903db76f97f42517906489499570a6b4ca->leave($__internal_757ddda0462a643878fcb11b6260a7903db76f97f42517906489499570a6b4ca_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_7f3de1b5a3bbb976606f73c2fb7e9476461bcbaa582f2a83677917a5c86262be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3de1b5a3bbb976606f73c2fb7e9476461bcbaa582f2a83677917a5c86262be->enter($__internal_7f3de1b5a3bbb976606f73c2fb7e9476461bcbaa582f2a83677917a5c86262be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_30b50b4b2ea52bf15969ab9f5e766fcda66a0cf779c0af712ea05f501b85cdd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b50b4b2ea52bf15969ab9f5e766fcda66a0cf779c0af712ea05f501b85cdd1->enter($__internal_30b50b4b2ea52bf15969ab9f5e766fcda66a0cf779c0af712ea05f501b85cdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "
";
        
        $__internal_30b50b4b2ea52bf15969ab9f5e766fcda66a0cf779c0af712ea05f501b85cdd1->leave($__internal_30b50b4b2ea52bf15969ab9f5e766fcda66a0cf779c0af712ea05f501b85cdd1_prof);

        
        $__internal_7f3de1b5a3bbb976606f73c2fb7e9476461bcbaa582f2a83677917a5c86262be->leave($__internal_7f3de1b5a3bbb976606f73c2fb7e9476461bcbaa582f2a83677917a5c86262be_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Annonce/index.html.twig";
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
        return new Twig_Source("{% extends \"OCPlatformBundle:Annonce:layout.html.twig\" %}

{% block body_layout %}

{% endblock %}
", "@OCPlatform/Annonce/index.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Annonce\\index.html.twig");
    }
}
