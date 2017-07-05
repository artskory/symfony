<?php

/* blog/layout.html.twig */
class __TwigTemplate_ca1c2f7339f85794e263226a03c430ae5c38163531a4ae49b002c5b8a678ccc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/layout.html.twig", 1);
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
        $__internal_28f54f88589379f9c6f70df9bcd6725a331d0d72b2b10f2696e392ca9c0d0019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f54f88589379f9c6f70df9bcd6725a331d0d72b2b10f2696e392ca9c0d0019->enter($__internal_28f54f88589379f9c6f70df9bcd6725a331d0d72b2b10f2696e392ca9c0d0019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/layout.html.twig"));

        $__internal_b78e4a9f21bc1c6a90b8549232135c9d25536cd055ee74c0ba6c0c57d4d295ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78e4a9f21bc1c6a90b8549232135c9d25536cd055ee74c0ba6c0c57d4d295ce->enter($__internal_b78e4a9f21bc1c6a90b8549232135c9d25536cd055ee74c0ba6c0c57d4d295ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28f54f88589379f9c6f70df9bcd6725a331d0d72b2b10f2696e392ca9c0d0019->leave($__internal_28f54f88589379f9c6f70df9bcd6725a331d0d72b2b10f2696e392ca9c0d0019_prof);

        
        $__internal_b78e4a9f21bc1c6a90b8549232135c9d25536cd055ee74c0ba6c0c57d4d295ce->leave($__internal_b78e4a9f21bc1c6a90b8549232135c9d25536cd055ee74c0ba6c0c57d4d295ce_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_953ea6624ccfe08df25ea58762230064aa1b1e3042b892c51078c01ed7f8ebb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953ea6624ccfe08df25ea58762230064aa1b1e3042b892c51078c01ed7f8ebb4->enter($__internal_953ea6624ccfe08df25ea58762230064aa1b1e3042b892c51078c01ed7f8ebb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_095b3de7c4c86becb1ebf68c08b71432af008601756c2fe08e37cc3fb08bb7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095b3de7c4c86becb1ebf68c08b71432af008601756c2fe08e37cc3fb08bb7c1->enter($__internal_095b3de7c4c86becb1ebf68c08b71432af008601756c2fe08e37cc3fb08bb7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_095b3de7c4c86becb1ebf68c08b71432af008601756c2fe08e37cc3fb08bb7c1->leave($__internal_095b3de7c4c86becb1ebf68c08b71432af008601756c2fe08e37cc3fb08bb7c1_prof);

        
        $__internal_953ea6624ccfe08df25ea58762230064aa1b1e3042b892c51078c01ed7f8ebb4->leave($__internal_953ea6624ccfe08df25ea58762230064aa1b1e3042b892c51078c01ed7f8ebb4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_84a15102f85866bcc404e79071fc51791ebdcb35e51158700c4fab92568c620a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a15102f85866bcc404e79071fc51791ebdcb35e51158700c4fab92568c620a->enter($__internal_84a15102f85866bcc404e79071fc51791ebdcb35e51158700c4fab92568c620a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1495e04892b410dcf3617e9cabc2b08c0ab2bf7db008946dc6330e910139c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1495e04892b410dcf3617e9cabc2b08c0ab2bf7db008946dc6330e910139c10->enter($__internal_d1495e04892b410dcf3617e9cabc2b08c0ab2bf7db008946dc6330e910139c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Blog</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_d1495e04892b410dcf3617e9cabc2b08c0ab2bf7db008946dc6330e910139c10->leave($__internal_d1495e04892b410dcf3617e9cabc2b08c0ab2bf7db008946dc6330e910139c10_prof);

        
        $__internal_84a15102f85866bcc404e79071fc51791ebdcb35e51158700c4fab92568c620a->leave($__internal_84a15102f85866bcc404e79071fc51791ebdcb35e51158700c4fab92568c620a_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_a1c5d9e15d58931a0e5813adcb4d3de644e8d08ea93168c1a21c6dfc04d6135c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c5d9e15d58931a0e5813adcb4d3de644e8d08ea93168c1a21c6dfc04d6135c->enter($__internal_a1c5d9e15d58931a0e5813adcb4d3de644e8d08ea93168c1a21c6dfc04d6135c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_1a8f98f9368b9e92709312987d2e2edee6e43ba5f248676da78a14bf352045e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8f98f9368b9e92709312987d2e2edee6e43ba5f248676da78a14bf352045e1->enter($__internal_1a8f98f9368b9e92709312987d2e2edee6e43ba5f248676da78a14bf352045e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_1a8f98f9368b9e92709312987d2e2edee6e43ba5f248676da78a14bf352045e1->leave($__internal_1a8f98f9368b9e92709312987d2e2edee6e43ba5f248676da78a14bf352045e1_prof);

        
        $__internal_a1c5d9e15d58931a0e5813adcb4d3de644e8d08ea93168c1a21c6dfc04d6135c->leave($__internal_a1c5d9e15d58931a0e5813adcb4d3de644e8d08ea93168c1a21c6dfc04d6135c_prof);

    }

    public function getTemplateName()
    {
        return "blog/layout.html.twig";
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
{% endblock %}", "blog/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\blog\\layout.html.twig");
    }
}
