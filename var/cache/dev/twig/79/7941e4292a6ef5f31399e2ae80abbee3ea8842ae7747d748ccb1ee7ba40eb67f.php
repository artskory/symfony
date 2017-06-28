<?php

/* maintenance/layout.html.twig */
class __TwigTemplate_dd2b1f25fb31b54fc7231a5763394747bdf1691b30cf474089b74827b362db93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "maintenance/layout.html.twig", 1);
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
        $__internal_406a18adea68efd1d3297249ae5b530b80a08358633cf2149014a44b2dbfcb52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406a18adea68efd1d3297249ae5b530b80a08358633cf2149014a44b2dbfcb52->enter($__internal_406a18adea68efd1d3297249ae5b530b80a08358633cf2149014a44b2dbfcb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maintenance/layout.html.twig"));

        $__internal_ff3fc6b68907fad774296774661f211f299aec1eb98a72fc20cb533479df82f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3fc6b68907fad774296774661f211f299aec1eb98a72fc20cb533479df82f3->enter($__internal_ff3fc6b68907fad774296774661f211f299aec1eb98a72fc20cb533479df82f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maintenance/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_406a18adea68efd1d3297249ae5b530b80a08358633cf2149014a44b2dbfcb52->leave($__internal_406a18adea68efd1d3297249ae5b530b80a08358633cf2149014a44b2dbfcb52_prof);

        
        $__internal_ff3fc6b68907fad774296774661f211f299aec1eb98a72fc20cb533479df82f3->leave($__internal_ff3fc6b68907fad774296774661f211f299aec1eb98a72fc20cb533479df82f3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_01636e16771e77e0a060bb9aaf25d7c8b3a4080870b3db7b0b7bed05e9fa2aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01636e16771e77e0a060bb9aaf25d7c8b3a4080870b3db7b0b7bed05e9fa2aff->enter($__internal_01636e16771e77e0a060bb9aaf25d7c8b3a4080870b3db7b0b7bed05e9fa2aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03f938f61dd3f2155f04de916f3c46678dd745849d48766a84a46cfb193347d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f938f61dd3f2155f04de916f3c46678dd745849d48766a84a46cfb193347d9->enter($__internal_03f938f61dd3f2155f04de916f3c46678dd745849d48766a84a46cfb193347d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_03f938f61dd3f2155f04de916f3c46678dd745849d48766a84a46cfb193347d9->leave($__internal_03f938f61dd3f2155f04de916f3c46678dd745849d48766a84a46cfb193347d9_prof);

        
        $__internal_01636e16771e77e0a060bb9aaf25d7c8b3a4080870b3db7b0b7bed05e9fa2aff->leave($__internal_01636e16771e77e0a060bb9aaf25d7c8b3a4080870b3db7b0b7bed05e9fa2aff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_803b03d91b244b2a453db0ed2e35126666bd7bd9e0cc55736111fb1d4069589e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_803b03d91b244b2a453db0ed2e35126666bd7bd9e0cc55736111fb1d4069589e->enter($__internal_803b03d91b244b2a453db0ed2e35126666bd7bd9e0cc55736111fb1d4069589e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d5282e340a932c114bdfa8208e150c164118df1a7183b7e002d16e85f4072a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5282e340a932c114bdfa8208e150c164118df1a7183b7e002d16e85f4072a1->enter($__internal_2d5282e340a932c114bdfa8208e150c164118df1a7183b7e002d16e85f4072a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <h1>Maintenance</h1>
    ";
        // line 6
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_2d5282e340a932c114bdfa8208e150c164118df1a7183b7e002d16e85f4072a1->leave($__internal_2d5282e340a932c114bdfa8208e150c164118df1a7183b7e002d16e85f4072a1_prof);

        
        $__internal_803b03d91b244b2a453db0ed2e35126666bd7bd9e0cc55736111fb1d4069589e->leave($__internal_803b03d91b244b2a453db0ed2e35126666bd7bd9e0cc55736111fb1d4069589e_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_2979d40e5d24ae646995182ee7e4a15171653d0805ba84f639d16c2abba15263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2979d40e5d24ae646995182ee7e4a15171653d0805ba84f639d16c2abba15263->enter($__internal_2979d40e5d24ae646995182ee7e4a15171653d0805ba84f639d16c2abba15263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_f1ccc4773d7bb8f0369fcc8281790d1af330a47c74fb4dbcf63b0f6372077333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ccc4773d7bb8f0369fcc8281790d1af330a47c74fb4dbcf63b0f6372077333->enter($__internal_f1ccc4773d7bb8f0369fcc8281790d1af330a47c74fb4dbcf63b0f6372077333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_f1ccc4773d7bb8f0369fcc8281790d1af330a47c74fb4dbcf63b0f6372077333->leave($__internal_f1ccc4773d7bb8f0369fcc8281790d1af330a47c74fb4dbcf63b0f6372077333_prof);

        
        $__internal_2979d40e5d24ae646995182ee7e4a15171653d0805ba84f639d16c2abba15263->leave($__internal_2979d40e5d24ae646995182ee7e4a15171653d0805ba84f639d16c2abba15263_prof);

    }

    public function getTemplateName()
    {
        return "maintenance/layout.html.twig";
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
{% endblock %}", "maintenance/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\maintenance\\layout.html.twig");
    }
}
