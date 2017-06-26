<?php

/* ::ckeditor.html.twig */
class __TwigTemplate_e7ef1db3b3bfe2b5a35d49023bba5f2b5a41e1912321283089bb01306531fc7a extends Twig_Template
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
        $__internal_4d9546e7f18aa9c85b3a972c34472029211a512875ac1a68423d1b7d3415fb39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9546e7f18aa9c85b3a972c34472029211a512875ac1a68423d1b7d3415fb39->enter($__internal_4d9546e7f18aa9c85b3a972c34472029211a512875ac1a68423d1b7d3415fb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ckeditor.html.twig"));

        $__internal_79883337ad5d35529b5dccb56d224c4c92fff269e089d46b0de3dce048c2a1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79883337ad5d35529b5dccb56d224c4c92fff269e089d46b0de3dce048c2a1ba->enter($__internal_79883337ad5d35529b5dccb56d224c4c92fff269e089d46b0de3dce048c2a1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ckeditor.html.twig"));

        // line 1
        $this->displayBlock('textarea_widget', $context, $blocks);
        
        $__internal_4d9546e7f18aa9c85b3a972c34472029211a512875ac1a68423d1b7d3415fb39->leave($__internal_4d9546e7f18aa9c85b3a972c34472029211a512875ac1a68423d1b7d3415fb39_prof);

        
        $__internal_79883337ad5d35529b5dccb56d224c4c92fff269e089d46b0de3dce048c2a1ba->leave($__internal_79883337ad5d35529b5dccb56d224c4c92fff269e089d46b0de3dce048c2a1ba_prof);

    }

    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_a9b5b3c107076cace712453e96fc3b32b878fd2b0ceb49d20f5eb3bff77f5a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b5b3c107076cace712453e96fc3b32b878fd2b0ceb49d20f5eb3bff77f5a4a->enter($__internal_a9b5b3c107076cace712453e96fc3b32b878fd2b0ceb49d20f5eb3bff77f5a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_6a472fe94bc85a66d21ba72c27b7808c052be9cff78dabd02247f328bed7a2ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a472fe94bc85a66d21ba72c27b7808c052be9cff78dabd02247f328bed7a2ab->enter($__internal_6a472fe94bc85a66d21ba72c27b7808c052be9cff78dabd02247f328bed7a2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 2
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "class=\"ckeditor form-control\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_6a472fe94bc85a66d21ba72c27b7808c052be9cff78dabd02247f328bed7a2ab->leave($__internal_6a472fe94bc85a66d21ba72c27b7808c052be9cff78dabd02247f328bed7a2ab_prof);

        
        $__internal_a9b5b3c107076cace712453e96fc3b32b878fd2b0ceb49d20f5eb3bff77f5a4a->leave($__internal_a9b5b3c107076cace712453e96fc3b32b878fd2b0ceb49d20f5eb3bff77f5a4a_prof);

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
