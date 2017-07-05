<?php

/* :maintenance:layout.html.twig */
class __TwigTemplate_4e7c1a2e1a521ff60949a89dc1c5a3a5527ae52ec01e9d0b216ea52e567d00a0 extends Twig_Template
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
        $__internal_5e06dd63a99167a7b0da6b315ccc45e6e0165fced1bed75f329e9c8ee13a5801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e06dd63a99167a7b0da6b315ccc45e6e0165fced1bed75f329e9c8ee13a5801->enter($__internal_5e06dd63a99167a7b0da6b315ccc45e6e0165fced1bed75f329e9c8ee13a5801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":maintenance:layout.html.twig"));

        $__internal_e5881726ca77f94903bb10c11ca89316bee3fcb5d0b2904e968ef3a4e12434db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5881726ca77f94903bb10c11ca89316bee3fcb5d0b2904e968ef3a4e12434db->enter($__internal_e5881726ca77f94903bb10c11ca89316bee3fcb5d0b2904e968ef3a4e12434db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":maintenance:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e06dd63a99167a7b0da6b315ccc45e6e0165fced1bed75f329e9c8ee13a5801->leave($__internal_5e06dd63a99167a7b0da6b315ccc45e6e0165fced1bed75f329e9c8ee13a5801_prof);

        
        $__internal_e5881726ca77f94903bb10c11ca89316bee3fcb5d0b2904e968ef3a4e12434db->leave($__internal_e5881726ca77f94903bb10c11ca89316bee3fcb5d0b2904e968ef3a4e12434db_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_896dbc0988ef5fc600c646fc7759e737b50001d44b81d7ca38a983ebf52d35c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_896dbc0988ef5fc600c646fc7759e737b50001d44b81d7ca38a983ebf52d35c9->enter($__internal_896dbc0988ef5fc600c646fc7759e737b50001d44b81d7ca38a983ebf52d35c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_687d6bc0bfc3517c2c417686455f43387357e99cb4af7c58fb69b3e7acc7910c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687d6bc0bfc3517c2c417686455f43387357e99cb4af7c58fb69b3e7acc7910c->enter($__internal_687d6bc0bfc3517c2c417686455f43387357e99cb4af7c58fb69b3e7acc7910c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_687d6bc0bfc3517c2c417686455f43387357e99cb4af7c58fb69b3e7acc7910c->leave($__internal_687d6bc0bfc3517c2c417686455f43387357e99cb4af7c58fb69b3e7acc7910c_prof);

        
        $__internal_896dbc0988ef5fc600c646fc7759e737b50001d44b81d7ca38a983ebf52d35c9->leave($__internal_896dbc0988ef5fc600c646fc7759e737b50001d44b81d7ca38a983ebf52d35c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_54f74ac5a914b677c6e18598458c3c60ec08b2c18e5e852c2161c857861eae2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54f74ac5a914b677c6e18598458c3c60ec08b2c18e5e852c2161c857861eae2d->enter($__internal_54f74ac5a914b677c6e18598458c3c60ec08b2c18e5e852c2161c857861eae2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6155c8d851af28051039a07eeaa22a379030ad2ed616e8d09fe589f0fd308e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6155c8d851af28051039a07eeaa22a379030ad2ed616e8d09fe589f0fd308e3->enter($__internal_f6155c8d851af28051039a07eeaa22a379030ad2ed616e8d09fe589f0fd308e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <h1>Maintenance</h1>
    ";
        // line 6
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_f6155c8d851af28051039a07eeaa22a379030ad2ed616e8d09fe589f0fd308e3->leave($__internal_f6155c8d851af28051039a07eeaa22a379030ad2ed616e8d09fe589f0fd308e3_prof);

        
        $__internal_54f74ac5a914b677c6e18598458c3c60ec08b2c18e5e852c2161c857861eae2d->leave($__internal_54f74ac5a914b677c6e18598458c3c60ec08b2c18e5e852c2161c857861eae2d_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_fcba7ea53802add89ffa05721bb68712024610fbc8205bc0ed30faf8a33d06ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcba7ea53802add89ffa05721bb68712024610fbc8205bc0ed30faf8a33d06ca->enter($__internal_fcba7ea53802add89ffa05721bb68712024610fbc8205bc0ed30faf8a33d06ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_b5d77d56aebbaf7e659cb4aa84a8cb0537d8871c740cb40b242b754a3347b02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d77d56aebbaf7e659cb4aa84a8cb0537d8871c740cb40b242b754a3347b02c->enter($__internal_b5d77d56aebbaf7e659cb4aa84a8cb0537d8871c740cb40b242b754a3347b02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_b5d77d56aebbaf7e659cb4aa84a8cb0537d8871c740cb40b242b754a3347b02c->leave($__internal_b5d77d56aebbaf7e659cb4aa84a8cb0537d8871c740cb40b242b754a3347b02c_prof);

        
        $__internal_fcba7ea53802add89ffa05721bb68712024610fbc8205bc0ed30faf8a33d06ca->leave($__internal_fcba7ea53802add89ffa05721bb68712024610fbc8205bc0ed30faf8a33d06ca_prof);

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
