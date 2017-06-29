<?php

/* :maintenance:layout.html.twig */
class __TwigTemplate_cfdec7b1ce6f77c86d86f0ff263710a6765af9a7e1c59ec2be0e9aa36d269d0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":maintenance:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'body_layout' => array($this, 'block_body_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05f0095c515d59664563686dddd3c49e97c8a62df9cd284935fcda76c13f4585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05f0095c515d59664563686dddd3c49e97c8a62df9cd284935fcda76c13f4585->enter($__internal_05f0095c515d59664563686dddd3c49e97c8a62df9cd284935fcda76c13f4585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":maintenance:layout.html.twig"));

        $__internal_250c56029752d08f3c7c5aa92aa63bcb13d6285f95d6b2fa47383d90bece38ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250c56029752d08f3c7c5aa92aa63bcb13d6285f95d6b2fa47383d90bece38ca->enter($__internal_250c56029752d08f3c7c5aa92aa63bcb13d6285f95d6b2fa47383d90bece38ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":maintenance:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05f0095c515d59664563686dddd3c49e97c8a62df9cd284935fcda76c13f4585->leave($__internal_05f0095c515d59664563686dddd3c49e97c8a62df9cd284935fcda76c13f4585_prof);

        
        $__internal_250c56029752d08f3c7c5aa92aa63bcb13d6285f95d6b2fa47383d90bece38ca->leave($__internal_250c56029752d08f3c7c5aa92aa63bcb13d6285f95d6b2fa47383d90bece38ca_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5aaea0e4e9197c93c699937f32a035bb9cf0bf955b1b00d33dcbc7c764866eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5aaea0e4e9197c93c699937f32a035bb9cf0bf955b1b00d33dcbc7c764866eb->enter($__internal_c5aaea0e4e9197c93c699937f32a035bb9cf0bf955b1b00d33dcbc7c764866eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ea5053f7b679486dfb9ab591cc0faf741ad3d08063aee05a16bb11b9b3a51f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea5053f7b679486dfb9ab591cc0faf741ad3d08063aee05a16bb11b9b3a51f2->enter($__internal_1ea5053f7b679486dfb9ab591cc0faf741ad3d08063aee05a16bb11b9b3a51f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_1ea5053f7b679486dfb9ab591cc0faf741ad3d08063aee05a16bb11b9b3a51f2->leave($__internal_1ea5053f7b679486dfb9ab591cc0faf741ad3d08063aee05a16bb11b9b3a51f2_prof);

        
        $__internal_c5aaea0e4e9197c93c699937f32a035bb9cf0bf955b1b00d33dcbc7c764866eb->leave($__internal_c5aaea0e4e9197c93c699937f32a035bb9cf0bf955b1b00d33dcbc7c764866eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a121ec2779c47a3ba2ab50b7b805fd87ab102471d37b90be5ac27115a2bc22c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a121ec2779c47a3ba2ab50b7b805fd87ab102471d37b90be5ac27115a2bc22c->enter($__internal_9a121ec2779c47a3ba2ab50b7b805fd87ab102471d37b90be5ac27115a2bc22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea41d37e74e97a5cffc151261c371c2ed8d57c70606959d2efe36e6b61c22518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea41d37e74e97a5cffc151261c371c2ed8d57c70606959d2efe36e6b61c22518->enter($__internal_ea41d37e74e97a5cffc151261c371c2ed8d57c70606959d2efe36e6b61c22518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <h1>Maintenance</h1>
    ";
        // line 6
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_ea41d37e74e97a5cffc151261c371c2ed8d57c70606959d2efe36e6b61c22518->leave($__internal_ea41d37e74e97a5cffc151261c371c2ed8d57c70606959d2efe36e6b61c22518_prof);

        
        $__internal_9a121ec2779c47a3ba2ab50b7b805fd87ab102471d37b90be5ac27115a2bc22c->leave($__internal_9a121ec2779c47a3ba2ab50b7b805fd87ab102471d37b90be5ac27115a2bc22c_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_55c166e89a9390679121fc997d774e81915b6e9618db0286171c670ae3f34c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c166e89a9390679121fc997d774e81915b6e9618db0286171c670ae3f34c43->enter($__internal_55c166e89a9390679121fc997d774e81915b6e9618db0286171c670ae3f34c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_b0403b32abb928689b2d0a73bfac8de163945290280b5e54e1525b706858e236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0403b32abb928689b2d0a73bfac8de163945290280b5e54e1525b706858e236->enter($__internal_b0403b32abb928689b2d0a73bfac8de163945290280b5e54e1525b706858e236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_b0403b32abb928689b2d0a73bfac8de163945290280b5e54e1525b706858e236->leave($__internal_b0403b32abb928689b2d0a73bfac8de163945290280b5e54e1525b706858e236_prof);

        
        $__internal_55c166e89a9390679121fc997d774e81915b6e9618db0286171c670ae3f34c43->leave($__internal_55c166e89a9390679121fc997d774e81915b6e9618db0286171c670ae3f34c43_prof);

    }

    public function getTemplateName()
    {
        return ":maintenance:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 6,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block title %}Blog{% endblock %}
{% block body %}
    
    <h1>Maintenance</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", ":maintenance:layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/maintenance/layout.html.twig");
    }
}
