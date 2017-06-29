<?php

/* OCPlatformBundle:Annonce:index.html.twig */
class __TwigTemplate_b934a6aa4a981254ee0e221f9c19da9b4844d43469833f24e50dd0551ea10784 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":blog:layout.html.twig", "OCPlatformBundle:Annonce:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":blog:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10f5e4dc2f86c951ca3db56bc2c71ecd59e75950ae2633eb7e9fa1cd0d01877f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f5e4dc2f86c951ca3db56bc2c71ecd59e75950ae2633eb7e9fa1cd0d01877f->enter($__internal_10f5e4dc2f86c951ca3db56bc2c71ecd59e75950ae2633eb7e9fa1cd0d01877f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Annonce:index.html.twig"));

        $__internal_b11290916126d376862041c258712ca5b09448af967a8c34bb9c43cbd72d93a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11290916126d376862041c258712ca5b09448af967a8c34bb9c43cbd72d93a4->enter($__internal_b11290916126d376862041c258712ca5b09448af967a8c34bb9c43cbd72d93a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Annonce:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10f5e4dc2f86c951ca3db56bc2c71ecd59e75950ae2633eb7e9fa1cd0d01877f->leave($__internal_10f5e4dc2f86c951ca3db56bc2c71ecd59e75950ae2633eb7e9fa1cd0d01877f_prof);

        
        $__internal_b11290916126d376862041c258712ca5b09448af967a8c34bb9c43cbd72d93a4->leave($__internal_b11290916126d376862041c258712ca5b09448af967a8c34bb9c43cbd72d93a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6792fc165fc456bae9385aec7ff380e8d8fda7e2175436613552022f1298db27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6792fc165fc456bae9385aec7ff380e8d8fda7e2175436613552022f1298db27->enter($__internal_6792fc165fc456bae9385aec7ff380e8d8fda7e2175436613552022f1298db27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_863d6042a31121286ec2c5865327a0d64a85f98d07fd9b23fd096fe57659bf76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863d6042a31121286ec2c5865327a0d64a85f98d07fd9b23fd096fe57659bf76->enter($__internal_863d6042a31121286ec2c5865327a0d64a85f98d07fd9b23fd096fe57659bf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "lol
";
        
        $__internal_863d6042a31121286ec2c5865327a0d64a85f98d07fd9b23fd096fe57659bf76->leave($__internal_863d6042a31121286ec2c5865327a0d64a85f98d07fd9b23fd096fe57659bf76_prof);

        
        $__internal_6792fc165fc456bae9385aec7ff380e8d8fda7e2175436613552022f1298db27->leave($__internal_6792fc165fc456bae9385aec7ff380e8d8fda7e2175436613552022f1298db27_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Annonce:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":blog:layout.html.twig\" %}

{% block body %}
lol
{% endblock %}
", "OCPlatformBundle:Annonce:index.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\OC\\PlatformBundle/Resources/views/Annonce/index.html.twig");
    }
}
