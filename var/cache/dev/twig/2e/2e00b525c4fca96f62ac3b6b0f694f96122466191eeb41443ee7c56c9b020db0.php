<?php

/* ckeditor.html.twig */
class __TwigTemplate_770300056c48f1f03f593249a90893d86bd5baa66fa70d2cbcc3282823389449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'textarea_widget' => array($this, 'block_textarea_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc47ac30a9b93703ce858ba6699acd46e897c78753ea5b44b8ad20d68deac3f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc47ac30a9b93703ce858ba6699acd46e897c78753ea5b44b8ad20d68deac3f8->enter($__internal_fc47ac30a9b93703ce858ba6699acd46e897c78753ea5b44b8ad20d68deac3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ckeditor.html.twig"));

        $__internal_e820fe409ae1390ef7b3460c7fe6654be0df7f82143c215718f678733b7c92dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e820fe409ae1390ef7b3460c7fe6654be0df7f82143c215718f678733b7c92dd->enter($__internal_e820fe409ae1390ef7b3460c7fe6654be0df7f82143c215718f678733b7c92dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ckeditor.html.twig"));

        // line 1
        $this->displayBlock('textarea_widget', $context, $blocks);
        
        $__internal_fc47ac30a9b93703ce858ba6699acd46e897c78753ea5b44b8ad20d68deac3f8->leave($__internal_fc47ac30a9b93703ce858ba6699acd46e897c78753ea5b44b8ad20d68deac3f8_prof);

        
        $__internal_e820fe409ae1390ef7b3460c7fe6654be0df7f82143c215718f678733b7c92dd->leave($__internal_e820fe409ae1390ef7b3460c7fe6654be0df7f82143c215718f678733b7c92dd_prof);

    }

    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ccd39b3bdb60c474f99eeb0a02e965e60758b949b20c17387db52a782af63ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccd39b3bdb60c474f99eeb0a02e965e60758b949b20c17387db52a782af63ef0->enter($__internal_ccd39b3bdb60c474f99eeb0a02e965e60758b949b20c17387db52a782af63ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_1af02c65a21409b8019291cff1278a439d9b7c5f7fd8f3298136f11d7a9153bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af02c65a21409b8019291cff1278a439d9b7c5f7fd8f3298136f11d7a9153bb->enter($__internal_1af02c65a21409b8019291cff1278a439d9b7c5f7fd8f3298136f11d7a9153bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 2
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "class=\"ckeditor form-control\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_1af02c65a21409b8019291cff1278a439d9b7c5f7fd8f3298136f11d7a9153bb->leave($__internal_1af02c65a21409b8019291cff1278a439d9b7c5f7fd8f3298136f11d7a9153bb_prof);

        
        $__internal_ccd39b3bdb60c474f99eeb0a02e965e60758b949b20c17387db52a782af63ef0->leave($__internal_ccd39b3bdb60c474f99eeb0a02e965e60758b949b20c17387db52a782af63ef0_prof);

    }

    public function getTemplateName()
    {
        return "ckeditor.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}class=\"ckeditor form-control\">{{ value }}</textarea>
{%- endblock textarea_widget -%}", "ckeditor.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\ckeditor.html.twig");
    }
}
