<?php

/* :blog:layout.html.twig */
class __TwigTemplate_f834913b299aac29d4a8b37f47605b15db3bbe32f5bbcb1298a590737f0add07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":blog:layout.html.twig", 1);
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
        $__internal_44a813283e1fb9d9cfa4fcfb3fda78a14d45cf47d45da822c634b65ded37b9fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a813283e1fb9d9cfa4fcfb3fda78a14d45cf47d45da822c634b65ded37b9fe->enter($__internal_44a813283e1fb9d9cfa4fcfb3fda78a14d45cf47d45da822c634b65ded37b9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:layout.html.twig"));

        $__internal_a30fdee7ebad832a9db1fc64c9567002b831f4b684199fea03680cd7a5869dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30fdee7ebad832a9db1fc64c9567002b831f4b684199fea03680cd7a5869dc4->enter($__internal_a30fdee7ebad832a9db1fc64c9567002b831f4b684199fea03680cd7a5869dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a813283e1fb9d9cfa4fcfb3fda78a14d45cf47d45da822c634b65ded37b9fe->leave($__internal_44a813283e1fb9d9cfa4fcfb3fda78a14d45cf47d45da822c634b65ded37b9fe_prof);

        
        $__internal_a30fdee7ebad832a9db1fc64c9567002b831f4b684199fea03680cd7a5869dc4->leave($__internal_a30fdee7ebad832a9db1fc64c9567002b831f4b684199fea03680cd7a5869dc4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_44b3875f6c21645f000125fc0b0385288a83e38109bccc7011b7322417aca283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b3875f6c21645f000125fc0b0385288a83e38109bccc7011b7322417aca283->enter($__internal_44b3875f6c21645f000125fc0b0385288a83e38109bccc7011b7322417aca283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6aed6bbe2e433be97a4951c38d69bbc6dd336c2dd31f6c6154010c0b0eec0316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aed6bbe2e433be97a4951c38d69bbc6dd336c2dd31f6c6154010c0b0eec0316->enter($__internal_6aed6bbe2e433be97a4951c38d69bbc6dd336c2dd31f6c6154010c0b0eec0316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_6aed6bbe2e433be97a4951c38d69bbc6dd336c2dd31f6c6154010c0b0eec0316->leave($__internal_6aed6bbe2e433be97a4951c38d69bbc6dd336c2dd31f6c6154010c0b0eec0316_prof);

        
        $__internal_44b3875f6c21645f000125fc0b0385288a83e38109bccc7011b7322417aca283->leave($__internal_44b3875f6c21645f000125fc0b0385288a83e38109bccc7011b7322417aca283_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc51537c013c16ab00c0016f171fb01d7ded9822b20da514e7f580d97a5c7bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc51537c013c16ab00c0016f171fb01d7ded9822b20da514e7f580d97a5c7bc0->enter($__internal_fc51537c013c16ab00c0016f171fb01d7ded9822b20da514e7f580d97a5c7bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12beac88d8cabb8521fb6074e540d6aaca92c8f6a8c290a2d675d866facf91e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12beac88d8cabb8521fb6074e540d6aaca92c8f6a8c290a2d675d866facf91e2->enter($__internal_12beac88d8cabb8521fb6074e540d6aaca92c8f6a8c290a2d675d866facf91e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Blog</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_12beac88d8cabb8521fb6074e540d6aaca92c8f6a8c290a2d675d866facf91e2->leave($__internal_12beac88d8cabb8521fb6074e540d6aaca92c8f6a8c290a2d675d866facf91e2_prof);

        
        $__internal_fc51537c013c16ab00c0016f171fb01d7ded9822b20da514e7f580d97a5c7bc0->leave($__internal_fc51537c013c16ab00c0016f171fb01d7ded9822b20da514e7f580d97a5c7bc0_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_5174867434aff1e6a9ebfbba3b51f05e59a942a748f2f177fd253a3743a132be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5174867434aff1e6a9ebfbba3b51f05e59a942a748f2f177fd253a3743a132be->enter($__internal_5174867434aff1e6a9ebfbba3b51f05e59a942a748f2f177fd253a3743a132be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_9fd214ee7a7f12004615fd3a1972ad1b9645aa6f5e6ac3b65d0e9a00029fe1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd214ee7a7f12004615fd3a1972ad1b9645aa6f5e6ac3b65d0e9a00029fe1d1->enter($__internal_9fd214ee7a7f12004615fd3a1972ad1b9645aa6f5e6ac3b65d0e9a00029fe1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_9fd214ee7a7f12004615fd3a1972ad1b9645aa6f5e6ac3b65d0e9a00029fe1d1->leave($__internal_9fd214ee7a7f12004615fd3a1972ad1b9645aa6f5e6ac3b65d0e9a00029fe1d1_prof);

        
        $__internal_5174867434aff1e6a9ebfbba3b51f05e59a942a748f2f177fd253a3743a132be->leave($__internal_5174867434aff1e6a9ebfbba3b51f05e59a942a748f2f177fd253a3743a132be_prof);

    }

    public function getTemplateName()
    {
        return ":blog:layout.html.twig";
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
    <h1>Blog</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", ":blog:layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/blog/layout.html.twig");
    }
}
