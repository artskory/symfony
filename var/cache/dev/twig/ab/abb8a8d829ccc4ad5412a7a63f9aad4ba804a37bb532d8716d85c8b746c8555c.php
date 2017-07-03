<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_82759b69d54583b7d6d814daee3724506c24f60c1ab8a4ac54ea7231b95dbf39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_ebb6ca0c900b91add5795880d101357418622e1faafad45bee64d6005e5e4663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebb6ca0c900b91add5795880d101357418622e1faafad45bee64d6005e5e4663->enter($__internal_ebb6ca0c900b91add5795880d101357418622e1faafad45bee64d6005e5e4663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_c0b7e7de0d22822022a9060b4c11617c80c318a343c04bde50a057f67748d8fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b7e7de0d22822022a9060b4c11617c80c318a343c04bde50a057f67748d8fa->enter($__internal_c0b7e7de0d22822022a9060b4c11617c80c318a343c04bde50a057f67748d8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebb6ca0c900b91add5795880d101357418622e1faafad45bee64d6005e5e4663->leave($__internal_ebb6ca0c900b91add5795880d101357418622e1faafad45bee64d6005e5e4663_prof);

        
        $__internal_c0b7e7de0d22822022a9060b4c11617c80c318a343c04bde50a057f67748d8fa->leave($__internal_c0b7e7de0d22822022a9060b4c11617c80c318a343c04bde50a057f67748d8fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce8c06a59544bc477bdfd3fd8d974a1b30e077084f022cc3984c141af95c864d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce8c06a59544bc477bdfd3fd8d974a1b30e077084f022cc3984c141af95c864d->enter($__internal_ce8c06a59544bc477bdfd3fd8d974a1b30e077084f022cc3984c141af95c864d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3ad95e10cc4142792cceb71bbe76504b345713c0d6db7ed39949556f33e3706b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad95e10cc4142792cceb71bbe76504b345713c0d6db7ed39949556f33e3706b->enter($__internal_3ad95e10cc4142792cceb71bbe76504b345713c0d6db7ed39949556f33e3706b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_3ad95e10cc4142792cceb71bbe76504b345713c0d6db7ed39949556f33e3706b->leave($__internal_3ad95e10cc4142792cceb71bbe76504b345713c0d6db7ed39949556f33e3706b_prof);

        
        $__internal_ce8c06a59544bc477bdfd3fd8d974a1b30e077084f022cc3984c141af95c864d->leave($__internal_ce8c06a59544bc477bdfd3fd8d974a1b30e077084f022cc3984c141af95c864d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
", "@FOSUser/Resetting/reset.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
