<?php

/* ckeditor.html.twig */
class __TwigTemplate_cd2991d349e44f976759b05d579f2bce025d4a0e4cc632b93799a3be79d05a26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'textarea_widget' => array($this, 'block_textarea_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfa6154cfae06cb7b623c884880dd37fb892c900ea8953917bf4474d49ba44bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa6154cfae06cb7b623c884880dd37fb892c900ea8953917bf4474d49ba44bc->enter($__internal_cfa6154cfae06cb7b623c884880dd37fb892c900ea8953917bf4474d49ba44bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ckeditor.html.twig"));

        $__internal_4f0e697a7c72aab63de1197c307bbe1886e41ae9903740461ee58e618395271f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0e697a7c72aab63de1197c307bbe1886e41ae9903740461ee58e618395271f->enter($__internal_4f0e697a7c72aab63de1197c307bbe1886e41ae9903740461ee58e618395271f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ckeditor.html.twig"));

        // line 1
        $this->displayBlock('textarea_widget', $context, $blocks);
        
        $__internal_cfa6154cfae06cb7b623c884880dd37fb892c900ea8953917bf4474d49ba44bc->leave($__internal_cfa6154cfae06cb7b623c884880dd37fb892c900ea8953917bf4474d49ba44bc_prof);

        
        $__internal_4f0e697a7c72aab63de1197c307bbe1886e41ae9903740461ee58e618395271f->leave($__internal_4f0e697a7c72aab63de1197c307bbe1886e41ae9903740461ee58e618395271f_prof);

    }

    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d3ef5b0dd8d192bd14c93e5a9704839e065b63b720f86f34fabe2cceb2063bd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3ef5b0dd8d192bd14c93e5a9704839e065b63b720f86f34fabe2cceb2063bd1->enter($__internal_d3ef5b0dd8d192bd14c93e5a9704839e065b63b720f86f34fabe2cceb2063bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_84dc9b4fe17ee4d08f870137d23937db97ff1426932b3c5f20d464444be1041a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84dc9b4fe17ee4d08f870137d23937db97ff1426932b3c5f20d464444be1041a->enter($__internal_84dc9b4fe17ee4d08f870137d23937db97ff1426932b3c5f20d464444be1041a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 2
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "class=\"ckeditor form-control\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_84dc9b4fe17ee4d08f870137d23937db97ff1426932b3c5f20d464444be1041a->leave($__internal_84dc9b4fe17ee4d08f870137d23937db97ff1426932b3c5f20d464444be1041a_prof);

        
        $__internal_d3ef5b0dd8d192bd14c93e5a9704839e065b63b720f86f34fabe2cceb2063bd1->leave($__internal_d3ef5b0dd8d192bd14c93e5a9704839e065b63b720f86f34fabe2cceb2063bd1_prof);

    }

    public function getTemplateName()
    {
        return "ckeditor.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}class=\"ckeditor form-control\">{{ value }}</textarea>
{%- endblock textarea_widget -%}", "ckeditor.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\ckeditor.html.twig");
    }
}
