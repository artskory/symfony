<?php

/* :catalogue:layout.html.twig */
class __TwigTemplate_71f03758226536f4a99b88b22998c102c26ea0a21dbf157730ec2edb63dcabd6 extends Twig_Template
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
        $__internal_0131ec7645bac1643c079b4138e4a452fc5bf1c8099553f8e35fa65210b3e9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0131ec7645bac1643c079b4138e4a452fc5bf1c8099553f8e35fa65210b3e9d2->enter($__internal_0131ec7645bac1643c079b4138e4a452fc5bf1c8099553f8e35fa65210b3e9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:layout.html.twig"));

        $__internal_bb42f050629be31b259b88e878cb6d9307c52752e830276fbc400f4c14529131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb42f050629be31b259b88e878cb6d9307c52752e830276fbc400f4c14529131->enter($__internal_bb42f050629be31b259b88e878cb6d9307c52752e830276fbc400f4c14529131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0131ec7645bac1643c079b4138e4a452fc5bf1c8099553f8e35fa65210b3e9d2->leave($__internal_0131ec7645bac1643c079b4138e4a452fc5bf1c8099553f8e35fa65210b3e9d2_prof);

        
        $__internal_bb42f050629be31b259b88e878cb6d9307c52752e830276fbc400f4c14529131->leave($__internal_bb42f050629be31b259b88e878cb6d9307c52752e830276fbc400f4c14529131_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8839db83a7f899cc5e6ef95d1cd4496a4cb9e4ce6381e455ec43d344f623ab17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8839db83a7f899cc5e6ef95d1cd4496a4cb9e4ce6381e455ec43d344f623ab17->enter($__internal_8839db83a7f899cc5e6ef95d1cd4496a4cb9e4ce6381e455ec43d344f623ab17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e29694f331fee0786af5b69f35ee57e98e65c328034c169ace26b2d867a869e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e29694f331fee0786af5b69f35ee57e98e65c328034c169ace26b2d867a869e->enter($__internal_3e29694f331fee0786af5b69f35ee57e98e65c328034c169ace26b2d867a869e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Catalogue";
        
        $__internal_3e29694f331fee0786af5b69f35ee57e98e65c328034c169ace26b2d867a869e->leave($__internal_3e29694f331fee0786af5b69f35ee57e98e65c328034c169ace26b2d867a869e_prof);

        
        $__internal_8839db83a7f899cc5e6ef95d1cd4496a4cb9e4ce6381e455ec43d344f623ab17->leave($__internal_8839db83a7f899cc5e6ef95d1cd4496a4cb9e4ce6381e455ec43d344f623ab17_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_798c8d60bae49b1d0dd9123a63bb104da93f690372d88f18e7181e1c262d4197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_798c8d60bae49b1d0dd9123a63bb104da93f690372d88f18e7181e1c262d4197->enter($__internal_798c8d60bae49b1d0dd9123a63bb104da93f690372d88f18e7181e1c262d4197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e096df65a34ec079c5803a38b91dd054035ed0267b4843e1baf3d811a708965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e096df65a34ec079c5803a38b91dd054035ed0267b4843e1baf3d811a708965->enter($__internal_6e096df65a34ec079c5803a38b91dd054035ed0267b4843e1baf3d811a708965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Catalogue</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_6e096df65a34ec079c5803a38b91dd054035ed0267b4843e1baf3d811a708965->leave($__internal_6e096df65a34ec079c5803a38b91dd054035ed0267b4843e1baf3d811a708965_prof);

        
        $__internal_798c8d60bae49b1d0dd9123a63bb104da93f690372d88f18e7181e1c262d4197->leave($__internal_798c8d60bae49b1d0dd9123a63bb104da93f690372d88f18e7181e1c262d4197_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_46311d83124a673f1eb7b8d65c2225a80da8ba8570aac4905b57a43b79b18b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46311d83124a673f1eb7b8d65c2225a80da8ba8570aac4905b57a43b79b18b38->enter($__internal_46311d83124a673f1eb7b8d65c2225a80da8ba8570aac4905b57a43b79b18b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_85536a5442d39ad778bde3f994e377c3f343a18973dd1c528dbd0e3f2803a2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85536a5442d39ad778bde3f994e377c3f343a18973dd1c528dbd0e3f2803a2ec->enter($__internal_85536a5442d39ad778bde3f994e377c3f343a18973dd1c528dbd0e3f2803a2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_85536a5442d39ad778bde3f994e377c3f343a18973dd1c528dbd0e3f2803a2ec->leave($__internal_85536a5442d39ad778bde3f994e377c3f343a18973dd1c528dbd0e3f2803a2ec_prof);

        
        $__internal_46311d83124a673f1eb7b8d65c2225a80da8ba8570aac4905b57a43b79b18b38->leave($__internal_46311d83124a673f1eb7b8d65c2225a80da8ba8570aac4905b57a43b79b18b38_prof);

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
