<?php

/* ::ckeditor.html.twig */
class __TwigTemplate_4a63d7cf5a223179874e57ac32179bdb4bee4bb898f3c8069e0ed0bd1ba8feca extends Twig_Template
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
        $__internal_b9f11e3c381d57bafc611afcf0e95f2053a3bce0e374f6a45e4e90c149f4abdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f11e3c381d57bafc611afcf0e95f2053a3bce0e374f6a45e4e90c149f4abdf->enter($__internal_b9f11e3c381d57bafc611afcf0e95f2053a3bce0e374f6a45e4e90c149f4abdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ckeditor.html.twig"));

        $__internal_be285d34a7ff1b307e5659c96c0a0068d9d1402919a2df3bc4ce948938fb8cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be285d34a7ff1b307e5659c96c0a0068d9d1402919a2df3bc4ce948938fb8cf0->enter($__internal_be285d34a7ff1b307e5659c96c0a0068d9d1402919a2df3bc4ce948938fb8cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ckeditor.html.twig"));

        // line 1
        $this->displayBlock('textarea_widget', $context, $blocks);
        
        $__internal_b9f11e3c381d57bafc611afcf0e95f2053a3bce0e374f6a45e4e90c149f4abdf->leave($__internal_b9f11e3c381d57bafc611afcf0e95f2053a3bce0e374f6a45e4e90c149f4abdf_prof);

        
        $__internal_be285d34a7ff1b307e5659c96c0a0068d9d1402919a2df3bc4ce948938fb8cf0->leave($__internal_be285d34a7ff1b307e5659c96c0a0068d9d1402919a2df3bc4ce948938fb8cf0_prof);

    }

    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d6ab1f9dc3e354eb7b72f90388aa034530e9b94d854d07a999b8e97113c05a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ab1f9dc3e354eb7b72f90388aa034530e9b94d854d07a999b8e97113c05a6b->enter($__internal_d6ab1f9dc3e354eb7b72f90388aa034530e9b94d854d07a999b8e97113c05a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_ee51040434c28479390d8e60b4bd7f24a0705dc409504e091e12eb3d51ba757c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee51040434c28479390d8e60b4bd7f24a0705dc409504e091e12eb3d51ba757c->enter($__internal_ee51040434c28479390d8e60b4bd7f24a0705dc409504e091e12eb3d51ba757c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 2
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "class=\"ckeditor form-control\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_ee51040434c28479390d8e60b4bd7f24a0705dc409504e091e12eb3d51ba757c->leave($__internal_ee51040434c28479390d8e60b4bd7f24a0705dc409504e091e12eb3d51ba757c_prof);

        
        $__internal_d6ab1f9dc3e354eb7b72f90388aa034530e9b94d854d07a999b8e97113c05a6b->leave($__internal_d6ab1f9dc3e354eb7b72f90388aa034530e9b94d854d07a999b8e97113c05a6b_prof);

    }

    public function getTemplateName()
    {
        return "::ckeditor.html.twig";
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
{%- endblock textarea_widget -%}", "::ckeditor.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/ckeditor.html.twig");
    }
}
