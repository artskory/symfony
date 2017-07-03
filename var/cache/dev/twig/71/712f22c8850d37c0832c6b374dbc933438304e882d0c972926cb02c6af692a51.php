<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_332f5682be8962ccb8856f8ab44d8b694801581405b68b4fc4bec67e6b950570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_d15aa196038d12021fafcadbfee41de997b6d294d11765fb63fc24639811fbc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d15aa196038d12021fafcadbfee41de997b6d294d11765fb63fc24639811fbc5->enter($__internal_d15aa196038d12021fafcadbfee41de997b6d294d11765fb63fc24639811fbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_72be6ff6e4465533f5bbf275b5da0d9d5fb94aeb7a445064920872c8ebd7aeb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72be6ff6e4465533f5bbf275b5da0d9d5fb94aeb7a445064920872c8ebd7aeb6->enter($__internal_72be6ff6e4465533f5bbf275b5da0d9d5fb94aeb7a445064920872c8ebd7aeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d15aa196038d12021fafcadbfee41de997b6d294d11765fb63fc24639811fbc5->leave($__internal_d15aa196038d12021fafcadbfee41de997b6d294d11765fb63fc24639811fbc5_prof);

        
        $__internal_72be6ff6e4465533f5bbf275b5da0d9d5fb94aeb7a445064920872c8ebd7aeb6->leave($__internal_72be6ff6e4465533f5bbf275b5da0d9d5fb94aeb7a445064920872c8ebd7aeb6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a27f4223428c0fe1f754825735b16f68c21b4304b4bc98cf2549d02c7184669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a27f4223428c0fe1f754825735b16f68c21b4304b4bc98cf2549d02c7184669->enter($__internal_4a27f4223428c0fe1f754825735b16f68c21b4304b4bc98cf2549d02c7184669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e022850c5846fb5ee61f2dcb85807cec2b4bb6d2db9bd4a62de13589a21cce09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e022850c5846fb5ee61f2dcb85807cec2b4bb6d2db9bd4a62de13589a21cce09->enter($__internal_e022850c5846fb5ee61f2dcb85807cec2b4bb6d2db9bd4a62de13589a21cce09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_e022850c5846fb5ee61f2dcb85807cec2b4bb6d2db9bd4a62de13589a21cce09->leave($__internal_e022850c5846fb5ee61f2dcb85807cec2b4bb6d2db9bd4a62de13589a21cce09_prof);

        
        $__internal_4a27f4223428c0fe1f754825735b16f68c21b4304b4bc98cf2549d02c7184669->leave($__internal_4a27f4223428c0fe1f754825735b16f68c21b4304b4bc98cf2549d02c7184669_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
