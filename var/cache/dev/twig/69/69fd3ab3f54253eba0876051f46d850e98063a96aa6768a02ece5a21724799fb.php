<?php

/* :catalogue:layout.html.twig */
class __TwigTemplate_303ae8c102c520b2f2fa101806992a8c219cd6b1bd098af1fa804168033ccc58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":catalogue:layout.html.twig", 1);
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
        $__internal_b98e670221ae4b0c3dbb3df30385a6dc9713b629d868324e54002be269e33894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b98e670221ae4b0c3dbb3df30385a6dc9713b629d868324e54002be269e33894->enter($__internal_b98e670221ae4b0c3dbb3df30385a6dc9713b629d868324e54002be269e33894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:layout.html.twig"));

        $__internal_e3a23e0dd65f58c7120de010635e805ea1af67239a0cef6eee7f090caf1c4b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a23e0dd65f58c7120de010635e805ea1af67239a0cef6eee7f090caf1c4b73->enter($__internal_e3a23e0dd65f58c7120de010635e805ea1af67239a0cef6eee7f090caf1c4b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b98e670221ae4b0c3dbb3df30385a6dc9713b629d868324e54002be269e33894->leave($__internal_b98e670221ae4b0c3dbb3df30385a6dc9713b629d868324e54002be269e33894_prof);

        
        $__internal_e3a23e0dd65f58c7120de010635e805ea1af67239a0cef6eee7f090caf1c4b73->leave($__internal_e3a23e0dd65f58c7120de010635e805ea1af67239a0cef6eee7f090caf1c4b73_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_385591bd38cd692765bfe21e69d8021cb615acf3e13762e7aa518700c678df49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_385591bd38cd692765bfe21e69d8021cb615acf3e13762e7aa518700c678df49->enter($__internal_385591bd38cd692765bfe21e69d8021cb615acf3e13762e7aa518700c678df49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4eb771e6cb7d6f62063576aa96fa2f4ea9c1951a896ab36b435d638d756850c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb771e6cb7d6f62063576aa96fa2f4ea9c1951a896ab36b435d638d756850c2->enter($__internal_4eb771e6cb7d6f62063576aa96fa2f4ea9c1951a896ab36b435d638d756850c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Catalogue";
        
        $__internal_4eb771e6cb7d6f62063576aa96fa2f4ea9c1951a896ab36b435d638d756850c2->leave($__internal_4eb771e6cb7d6f62063576aa96fa2f4ea9c1951a896ab36b435d638d756850c2_prof);

        
        $__internal_385591bd38cd692765bfe21e69d8021cb615acf3e13762e7aa518700c678df49->leave($__internal_385591bd38cd692765bfe21e69d8021cb615acf3e13762e7aa518700c678df49_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3e87656f861521431b7022ec00e04b054fe501afef85e8a7c62612d8dcc999d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e87656f861521431b7022ec00e04b054fe501afef85e8a7c62612d8dcc999d->enter($__internal_f3e87656f861521431b7022ec00e04b054fe501afef85e8a7c62612d8dcc999d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c31941d6043f09e380751d64cbe14d931ab37a7ad5c821896312d5d69e1ebb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c31941d6043f09e380751d64cbe14d931ab37a7ad5c821896312d5d69e1ebb6->enter($__internal_9c31941d6043f09e380751d64cbe14d931ab37a7ad5c821896312d5d69e1ebb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Catalogue</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_9c31941d6043f09e380751d64cbe14d931ab37a7ad5c821896312d5d69e1ebb6->leave($__internal_9c31941d6043f09e380751d64cbe14d931ab37a7ad5c821896312d5d69e1ebb6_prof);

        
        $__internal_f3e87656f861521431b7022ec00e04b054fe501afef85e8a7c62612d8dcc999d->leave($__internal_f3e87656f861521431b7022ec00e04b054fe501afef85e8a7c62612d8dcc999d_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_af9998f0f15082accf67d743b0bab53788409c69768ff239cab2ed205c971913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af9998f0f15082accf67d743b0bab53788409c69768ff239cab2ed205c971913->enter($__internal_af9998f0f15082accf67d743b0bab53788409c69768ff239cab2ed205c971913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_a510260f2e2c3469693b04f590289f3125b9eb213776af5d1d6b2bf2801a5540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a510260f2e2c3469693b04f590289f3125b9eb213776af5d1d6b2bf2801a5540->enter($__internal_a510260f2e2c3469693b04f590289f3125b9eb213776af5d1d6b2bf2801a5540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_a510260f2e2c3469693b04f590289f3125b9eb213776af5d1d6b2bf2801a5540->leave($__internal_a510260f2e2c3469693b04f590289f3125b9eb213776af5d1d6b2bf2801a5540_prof);

        
        $__internal_af9998f0f15082accf67d743b0bab53788409c69768ff239cab2ed205c971913->leave($__internal_af9998f0f15082accf67d743b0bab53788409c69768ff239cab2ed205c971913_prof);

    }

    public function getTemplateName()
    {
        return ":catalogue:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 5,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
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
{% block title %}Catalogue{% endblock %}
{% block body %}
    <h1>Catalogue</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", ":catalogue:layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/catalogue/layout.html.twig");
    }
}
