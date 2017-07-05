<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_9fbd61733a7d268dda51cd64497614fa68f7aab312e4bc8be28969ab1debf5ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_d558d1df38db2b18e8dcbcc3d1775c54e95269ba4926115062ab5ff487d008a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d558d1df38db2b18e8dcbcc3d1775c54e95269ba4926115062ab5ff487d008a3->enter($__internal_d558d1df38db2b18e8dcbcc3d1775c54e95269ba4926115062ab5ff487d008a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_b86e555e0f353c404c2e0b485c022742be4786f5f6be9412c56e690c872ac554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86e555e0f353c404c2e0b485c022742be4786f5f6be9412c56e690c872ac554->enter($__internal_b86e555e0f353c404c2e0b485c022742be4786f5f6be9412c56e690c872ac554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d558d1df38db2b18e8dcbcc3d1775c54e95269ba4926115062ab5ff487d008a3->leave($__internal_d558d1df38db2b18e8dcbcc3d1775c54e95269ba4926115062ab5ff487d008a3_prof);

        
        $__internal_b86e555e0f353c404c2e0b485c022742be4786f5f6be9412c56e690c872ac554->leave($__internal_b86e555e0f353c404c2e0b485c022742be4786f5f6be9412c56e690c872ac554_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9028a2b7e87789eea525b2a266848eef2d60e70ec85d9dc9fe2fe3a6c4ccfadc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9028a2b7e87789eea525b2a266848eef2d60e70ec85d9dc9fe2fe3a6c4ccfadc->enter($__internal_9028a2b7e87789eea525b2a266848eef2d60e70ec85d9dc9fe2fe3a6c4ccfadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c14ec83034c268813b1e2d97deed2b46a5bed33bbc4017aefd224a2025b6e639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14ec83034c268813b1e2d97deed2b46a5bed33bbc4017aefd224a2025b6e639->enter($__internal_c14ec83034c268813b1e2d97deed2b46a5bed33bbc4017aefd224a2025b6e639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_c14ec83034c268813b1e2d97deed2b46a5bed33bbc4017aefd224a2025b6e639->leave($__internal_c14ec83034c268813b1e2d97deed2b46a5bed33bbc4017aefd224a2025b6e639_prof);

        
        $__internal_9028a2b7e87789eea525b2a266848eef2d60e70ec85d9dc9fe2fe3a6c4ccfadc->leave($__internal_9028a2b7e87789eea525b2a266848eef2d60e70ec85d9dc9fe2fe3a6c4ccfadc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
