<?php

/* catalogue/layout.html.twig */
class __TwigTemplate_32866a785a2f5083a9e7064a93f7f9e9ac5af03a8d634f45d9beef3df48de8f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catalogue/layout.html.twig", 1);
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
        $__internal_e8931239ea4be93a5caaa2cc09fecf0115511c71de2661d8d26add423bae8b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8931239ea4be93a5caaa2cc09fecf0115511c71de2661d8d26add423bae8b34->enter($__internal_e8931239ea4be93a5caaa2cc09fecf0115511c71de2661d8d26add423bae8b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/layout.html.twig"));

        $__internal_541776a3bc6879ec71c9a82f3865dffb6f784657c742911015a0c08d4fabce69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541776a3bc6879ec71c9a82f3865dffb6f784657c742911015a0c08d4fabce69->enter($__internal_541776a3bc6879ec71c9a82f3865dffb6f784657c742911015a0c08d4fabce69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8931239ea4be93a5caaa2cc09fecf0115511c71de2661d8d26add423bae8b34->leave($__internal_e8931239ea4be93a5caaa2cc09fecf0115511c71de2661d8d26add423bae8b34_prof);

        
        $__internal_541776a3bc6879ec71c9a82f3865dffb6f784657c742911015a0c08d4fabce69->leave($__internal_541776a3bc6879ec71c9a82f3865dffb6f784657c742911015a0c08d4fabce69_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8199605e3312df10806b04805714b295944d6a359e0d5728a23a11f637b70fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8199605e3312df10806b04805714b295944d6a359e0d5728a23a11f637b70fc->enter($__internal_e8199605e3312df10806b04805714b295944d6a359e0d5728a23a11f637b70fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3675c3fb41581f456d7093f70536d5b5d78e8f254021f70b18586195697346ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3675c3fb41581f456d7093f70536d5b5d78e8f254021f70b18586195697346ed->enter($__internal_3675c3fb41581f456d7093f70536d5b5d78e8f254021f70b18586195697346ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Catalogue";
        
        $__internal_3675c3fb41581f456d7093f70536d5b5d78e8f254021f70b18586195697346ed->leave($__internal_3675c3fb41581f456d7093f70536d5b5d78e8f254021f70b18586195697346ed_prof);

        
        $__internal_e8199605e3312df10806b04805714b295944d6a359e0d5728a23a11f637b70fc->leave($__internal_e8199605e3312df10806b04805714b295944d6a359e0d5728a23a11f637b70fc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76101ad317b049a46792a5ad768159cce5926906265ad57afe558d4d759fc9c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76101ad317b049a46792a5ad768159cce5926906265ad57afe558d4d759fc9c7->enter($__internal_76101ad317b049a46792a5ad768159cce5926906265ad57afe558d4d759fc9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12a71abc6a39246164952a3c85e5b7f2f318c04c56986418b57fad73f4856ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a71abc6a39246164952a3c85e5b7f2f318c04c56986418b57fad73f4856ba9->enter($__internal_12a71abc6a39246164952a3c85e5b7f2f318c04c56986418b57fad73f4856ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Catalogue</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_12a71abc6a39246164952a3c85e5b7f2f318c04c56986418b57fad73f4856ba9->leave($__internal_12a71abc6a39246164952a3c85e5b7f2f318c04c56986418b57fad73f4856ba9_prof);

        
        $__internal_76101ad317b049a46792a5ad768159cce5926906265ad57afe558d4d759fc9c7->leave($__internal_76101ad317b049a46792a5ad768159cce5926906265ad57afe558d4d759fc9c7_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_9ec7ecb4dab760c91cbf37993718ed37bd25acb2a5d4e844efcf9ee851c76ba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec7ecb4dab760c91cbf37993718ed37bd25acb2a5d4e844efcf9ee851c76ba0->enter($__internal_9ec7ecb4dab760c91cbf37993718ed37bd25acb2a5d4e844efcf9ee851c76ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_85ae40ea07ab73faa6991bb5a955f7bd6cf75d1a37b194ca0675ba290b64d206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ae40ea07ab73faa6991bb5a955f7bd6cf75d1a37b194ca0675ba290b64d206->enter($__internal_85ae40ea07ab73faa6991bb5a955f7bd6cf75d1a37b194ca0675ba290b64d206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_85ae40ea07ab73faa6991bb5a955f7bd6cf75d1a37b194ca0675ba290b64d206->leave($__internal_85ae40ea07ab73faa6991bb5a955f7bd6cf75d1a37b194ca0675ba290b64d206_prof);

        
        $__internal_9ec7ecb4dab760c91cbf37993718ed37bd25acb2a5d4e844efcf9ee851c76ba0->leave($__internal_9ec7ecb4dab760c91cbf37993718ed37bd25acb2a5d4e844efcf9ee851c76ba0_prof);

    }

    public function getTemplateName()
    {
        return "catalogue/layout.html.twig";
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
{% endblock %}", "catalogue/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\catalogue\\layout.html.twig");
    }
}
