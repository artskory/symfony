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
        $__internal_2c6d7d9b2187b2bee105500155d9d1911d6de0651c19d1a30b42a5940d0fae62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6d7d9b2187b2bee105500155d9d1911d6de0651c19d1a30b42a5940d0fae62->enter($__internal_2c6d7d9b2187b2bee105500155d9d1911d6de0651c19d1a30b42a5940d0fae62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:layout.html.twig"));

        $__internal_5fd6eed91c8cee4d6da6aa2f4331c54a67c165693c99b989b61646be69641688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd6eed91c8cee4d6da6aa2f4331c54a67c165693c99b989b61646be69641688->enter($__internal_5fd6eed91c8cee4d6da6aa2f4331c54a67c165693c99b989b61646be69641688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c6d7d9b2187b2bee105500155d9d1911d6de0651c19d1a30b42a5940d0fae62->leave($__internal_2c6d7d9b2187b2bee105500155d9d1911d6de0651c19d1a30b42a5940d0fae62_prof);

        
        $__internal_5fd6eed91c8cee4d6da6aa2f4331c54a67c165693c99b989b61646be69641688->leave($__internal_5fd6eed91c8cee4d6da6aa2f4331c54a67c165693c99b989b61646be69641688_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_10eca918ce38ea1ce47efbab9f49d7f469a487a29907af41dff7bbc27a0bd42f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10eca918ce38ea1ce47efbab9f49d7f469a487a29907af41dff7bbc27a0bd42f->enter($__internal_10eca918ce38ea1ce47efbab9f49d7f469a487a29907af41dff7bbc27a0bd42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2474266a549b23e4fdbe064b9f3fef0b3d5928202caa5a1c38c35f301b907fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2474266a549b23e4fdbe064b9f3fef0b3d5928202caa5a1c38c35f301b907fe->enter($__internal_f2474266a549b23e4fdbe064b9f3fef0b3d5928202caa5a1c38c35f301b907fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Catalogue";
        
        $__internal_f2474266a549b23e4fdbe064b9f3fef0b3d5928202caa5a1c38c35f301b907fe->leave($__internal_f2474266a549b23e4fdbe064b9f3fef0b3d5928202caa5a1c38c35f301b907fe_prof);

        
        $__internal_10eca918ce38ea1ce47efbab9f49d7f469a487a29907af41dff7bbc27a0bd42f->leave($__internal_10eca918ce38ea1ce47efbab9f49d7f469a487a29907af41dff7bbc27a0bd42f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fb4169094718edd46cdf90dfbd21adb5d1a9d45a6180b5b39aa162c2d60db93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb4169094718edd46cdf90dfbd21adb5d1a9d45a6180b5b39aa162c2d60db93->enter($__internal_6fb4169094718edd46cdf90dfbd21adb5d1a9d45a6180b5b39aa162c2d60db93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffd58a3e61f2b65d5b5bbd5f1d3fe5f699b25a7a7d3ca1aae70698abf0c6a2b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd58a3e61f2b65d5b5bbd5f1d3fe5f699b25a7a7d3ca1aae70698abf0c6a2b0->enter($__internal_ffd58a3e61f2b65d5b5bbd5f1d3fe5f699b25a7a7d3ca1aae70698abf0c6a2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Catalogue</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_ffd58a3e61f2b65d5b5bbd5f1d3fe5f699b25a7a7d3ca1aae70698abf0c6a2b0->leave($__internal_ffd58a3e61f2b65d5b5bbd5f1d3fe5f699b25a7a7d3ca1aae70698abf0c6a2b0_prof);

        
        $__internal_6fb4169094718edd46cdf90dfbd21adb5d1a9d45a6180b5b39aa162c2d60db93->leave($__internal_6fb4169094718edd46cdf90dfbd21adb5d1a9d45a6180b5b39aa162c2d60db93_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_fb4ef4ed023f971f4c8c0060902e6ae079ea96adcd387c4255eac6ea408fda39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb4ef4ed023f971f4c8c0060902e6ae079ea96adcd387c4255eac6ea408fda39->enter($__internal_fb4ef4ed023f971f4c8c0060902e6ae079ea96adcd387c4255eac6ea408fda39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_cf3d2f7d7ad033dc8245238029b21ae2ef1b7b5d2ef4f0185158a4845cbe2dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3d2f7d7ad033dc8245238029b21ae2ef1b7b5d2ef4f0185158a4845cbe2dfa->enter($__internal_cf3d2f7d7ad033dc8245238029b21ae2ef1b7b5d2ef4f0185158a4845cbe2dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_cf3d2f7d7ad033dc8245238029b21ae2ef1b7b5d2ef4f0185158a4845cbe2dfa->leave($__internal_cf3d2f7d7ad033dc8245238029b21ae2ef1b7b5d2ef4f0185158a4845cbe2dfa_prof);

        
        $__internal_fb4ef4ed023f971f4c8c0060902e6ae079ea96adcd387c4255eac6ea408fda39->leave($__internal_fb4ef4ed023f971f4c8c0060902e6ae079ea96adcd387c4255eac6ea408fda39_prof);

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
