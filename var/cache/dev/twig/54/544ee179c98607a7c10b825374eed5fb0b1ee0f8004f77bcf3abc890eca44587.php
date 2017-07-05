<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_825a09d5e1677304720edbb301b9e262dc0092a6ea55afe38be2a1ddc9879c78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_7c8ace3c3aafe66e1a6f583853bb7a60266e24fd64667c984904efc1b79992a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c8ace3c3aafe66e1a6f583853bb7a60266e24fd64667c984904efc1b79992a4->enter($__internal_7c8ace3c3aafe66e1a6f583853bb7a60266e24fd64667c984904efc1b79992a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_bdb2f461bf33b76d795a81ac6bc1e6d82cfdc1c2bb34c8976a1eca7916c3b499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb2f461bf33b76d795a81ac6bc1e6d82cfdc1c2bb34c8976a1eca7916c3b499->enter($__internal_bdb2f461bf33b76d795a81ac6bc1e6d82cfdc1c2bb34c8976a1eca7916c3b499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c8ace3c3aafe66e1a6f583853bb7a60266e24fd64667c984904efc1b79992a4->leave($__internal_7c8ace3c3aafe66e1a6f583853bb7a60266e24fd64667c984904efc1b79992a4_prof);

        
        $__internal_bdb2f461bf33b76d795a81ac6bc1e6d82cfdc1c2bb34c8976a1eca7916c3b499->leave($__internal_bdb2f461bf33b76d795a81ac6bc1e6d82cfdc1c2bb34c8976a1eca7916c3b499_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64e9c4e014ecf0eafd62ab5ac66e770054e20af442e6e85ffe34806f28b74703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64e9c4e014ecf0eafd62ab5ac66e770054e20af442e6e85ffe34806f28b74703->enter($__internal_64e9c4e014ecf0eafd62ab5ac66e770054e20af442e6e85ffe34806f28b74703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b72676e9a84f50476e599ef9a7e43042e1df55ed58f2743264ea10b0d3036b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72676e9a84f50476e599ef9a7e43042e1df55ed58f2743264ea10b0d3036b98->enter($__internal_b72676e9a84f50476e599ef9a7e43042e1df55ed58f2743264ea10b0d3036b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_b72676e9a84f50476e599ef9a7e43042e1df55ed58f2743264ea10b0d3036b98->leave($__internal_b72676e9a84f50476e599ef9a7e43042e1df55ed58f2743264ea10b0d3036b98_prof);

        
        $__internal_64e9c4e014ecf0eafd62ab5ac66e770054e20af442e6e85ffe34806f28b74703->leave($__internal_64e9c4e014ecf0eafd62ab5ac66e770054e20af442e6e85ffe34806f28b74703_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}
