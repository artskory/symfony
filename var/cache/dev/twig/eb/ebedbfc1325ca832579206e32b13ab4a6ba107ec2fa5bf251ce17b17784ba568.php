<?php

/* :catalogue:layout.html.twig */
class __TwigTemplate_324dce91952a16df75188eca09e6429c0b53b9e7787f514b47f81a8d5cdd976d extends Twig_Template
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
        $__internal_1add14b0f0525a762307397d157c3ca6586cd7535ad05c2382861387cef4e504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1add14b0f0525a762307397d157c3ca6586cd7535ad05c2382861387cef4e504->enter($__internal_1add14b0f0525a762307397d157c3ca6586cd7535ad05c2382861387cef4e504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:layout.html.twig"));

        $__internal_26bb459b13cbef7e0cded3b84a767176578f12e5419f196f364c3a32e1a1210e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26bb459b13cbef7e0cded3b84a767176578f12e5419f196f364c3a32e1a1210e->enter($__internal_26bb459b13cbef7e0cded3b84a767176578f12e5419f196f364c3a32e1a1210e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1add14b0f0525a762307397d157c3ca6586cd7535ad05c2382861387cef4e504->leave($__internal_1add14b0f0525a762307397d157c3ca6586cd7535ad05c2382861387cef4e504_prof);

        
        $__internal_26bb459b13cbef7e0cded3b84a767176578f12e5419f196f364c3a32e1a1210e->leave($__internal_26bb459b13cbef7e0cded3b84a767176578f12e5419f196f364c3a32e1a1210e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cc16a465b3e2523b67fb66e84358c216bd0b2b07cca276b78320759a9d16e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc16a465b3e2523b67fb66e84358c216bd0b2b07cca276b78320759a9d16e6a->enter($__internal_1cc16a465b3e2523b67fb66e84358c216bd0b2b07cca276b78320759a9d16e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_04f3fabe905f58c24dab9130aa4fc364999eb1769c12f7153feb33fe39d0dcec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f3fabe905f58c24dab9130aa4fc364999eb1769c12f7153feb33fe39d0dcec->enter($__internal_04f3fabe905f58c24dab9130aa4fc364999eb1769c12f7153feb33fe39d0dcec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_04f3fabe905f58c24dab9130aa4fc364999eb1769c12f7153feb33fe39d0dcec->leave($__internal_04f3fabe905f58c24dab9130aa4fc364999eb1769c12f7153feb33fe39d0dcec_prof);

        
        $__internal_1cc16a465b3e2523b67fb66e84358c216bd0b2b07cca276b78320759a9d16e6a->leave($__internal_1cc16a465b3e2523b67fb66e84358c216bd0b2b07cca276b78320759a9d16e6a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ecdecd8f22d3ad8ecc04f278261eb7655afc23e4c8d33635e8776be104b5d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ecdecd8f22d3ad8ecc04f278261eb7655afc23e4c8d33635e8776be104b5d6d->enter($__internal_1ecdecd8f22d3ad8ecc04f278261eb7655afc23e4c8d33635e8776be104b5d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9eb70e399345e96d9783d82034583b3f2812ccc10263206a102ec82f2b62658e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb70e399345e96d9783d82034583b3f2812ccc10263206a102ec82f2b62658e->enter($__internal_9eb70e399345e96d9783d82034583b3f2812ccc10263206a102ec82f2b62658e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Catalogue</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_9eb70e399345e96d9783d82034583b3f2812ccc10263206a102ec82f2b62658e->leave($__internal_9eb70e399345e96d9783d82034583b3f2812ccc10263206a102ec82f2b62658e_prof);

        
        $__internal_1ecdecd8f22d3ad8ecc04f278261eb7655afc23e4c8d33635e8776be104b5d6d->leave($__internal_1ecdecd8f22d3ad8ecc04f278261eb7655afc23e4c8d33635e8776be104b5d6d_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_15a0b036b209fe570c91890b35eee8866ceb94f9e17f35e35267bad9d31bcf8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a0b036b209fe570c91890b35eee8866ceb94f9e17f35e35267bad9d31bcf8f->enter($__internal_15a0b036b209fe570c91890b35eee8866ceb94f9e17f35e35267bad9d31bcf8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_c2da023c475fc3f8748305e8f78be6934de770d7fb98460bea580df2e01e81f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2da023c475fc3f8748305e8f78be6934de770d7fb98460bea580df2e01e81f3->enter($__internal_c2da023c475fc3f8748305e8f78be6934de770d7fb98460bea580df2e01e81f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_c2da023c475fc3f8748305e8f78be6934de770d7fb98460bea580df2e01e81f3->leave($__internal_c2da023c475fc3f8748305e8f78be6934de770d7fb98460bea580df2e01e81f3_prof);

        
        $__internal_15a0b036b209fe570c91890b35eee8866ceb94f9e17f35e35267bad9d31bcf8f->leave($__internal_15a0b036b209fe570c91890b35eee8866ceb94f9e17f35e35267bad9d31bcf8f_prof);

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
{% block title %}Blog{% endblock %}
{% block body %}
    <h1>Catalogue</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", ":catalogue:layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/catalogue/layout.html.twig");
    }
}
