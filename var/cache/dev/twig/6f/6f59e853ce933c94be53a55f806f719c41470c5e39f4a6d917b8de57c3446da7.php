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
        $__internal_f27683bae54c9a14bfd7da920369e8514fda655db9922e9bea439da8333b0cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27683bae54c9a14bfd7da920369e8514fda655db9922e9bea439da8333b0cfa->enter($__internal_f27683bae54c9a14bfd7da920369e8514fda655db9922e9bea439da8333b0cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ckeditor.html.twig"));

        $__internal_87bc05b6751b21848f97c4f079fed1e0c8ee23dc0d98829e2260054b25d58fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87bc05b6751b21848f97c4f079fed1e0c8ee23dc0d98829e2260054b25d58fbe->enter($__internal_87bc05b6751b21848f97c4f079fed1e0c8ee23dc0d98829e2260054b25d58fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ckeditor.html.twig"));

        // line 1
        $this->displayBlock('textarea_widget', $context, $blocks);
        
        $__internal_f27683bae54c9a14bfd7da920369e8514fda655db9922e9bea439da8333b0cfa->leave($__internal_f27683bae54c9a14bfd7da920369e8514fda655db9922e9bea439da8333b0cfa_prof);

        
        $__internal_87bc05b6751b21848f97c4f079fed1e0c8ee23dc0d98829e2260054b25d58fbe->leave($__internal_87bc05b6751b21848f97c4f079fed1e0c8ee23dc0d98829e2260054b25d58fbe_prof);

    }

    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ba4601dccf768832a9fd4e0a0cc10aa8fbe610a083a77f061dc95a0e1dcbd1f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba4601dccf768832a9fd4e0a0cc10aa8fbe610a083a77f061dc95a0e1dcbd1f9->enter($__internal_ba4601dccf768832a9fd4e0a0cc10aa8fbe610a083a77f061dc95a0e1dcbd1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_813bb10b919b62ef788f87813d884f138a69d170812ae8fc0974c5c44c58574f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813bb10b919b62ef788f87813d884f138a69d170812ae8fc0974c5c44c58574f->enter($__internal_813bb10b919b62ef788f87813d884f138a69d170812ae8fc0974c5c44c58574f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 2
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "class=\"ckeditor form-control\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_813bb10b919b62ef788f87813d884f138a69d170812ae8fc0974c5c44c58574f->leave($__internal_813bb10b919b62ef788f87813d884f138a69d170812ae8fc0974c5c44c58574f_prof);

        
        $__internal_ba4601dccf768832a9fd4e0a0cc10aa8fbe610a083a77f061dc95a0e1dcbd1f9->leave($__internal_ba4601dccf768832a9fd4e0a0cc10aa8fbe610a083a77f061dc95a0e1dcbd1f9_prof);

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
