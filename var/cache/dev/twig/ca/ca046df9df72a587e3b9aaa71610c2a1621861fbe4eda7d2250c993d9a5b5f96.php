<?php

/* ckeditor.html.twig */
class __TwigTemplate_f4476a4d722e16311719fbc95221317dbfff412886e94452751b1acefd14b4a3 extends Twig_Template
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
        $__internal_f7131b148f6894c10e7dc6d309d3a3d50a57d7103f8c975cc2efbe00d4ffb20a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7131b148f6894c10e7dc6d309d3a3d50a57d7103f8c975cc2efbe00d4ffb20a->enter($__internal_f7131b148f6894c10e7dc6d309d3a3d50a57d7103f8c975cc2efbe00d4ffb20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ckeditor.html.twig"));

        $__internal_d0278c7e63f7c8c57f4475823714f25936dea7e6fc0e6a69b8770ef8bc063091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0278c7e63f7c8c57f4475823714f25936dea7e6fc0e6a69b8770ef8bc063091->enter($__internal_d0278c7e63f7c8c57f4475823714f25936dea7e6fc0e6a69b8770ef8bc063091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ckeditor.html.twig"));

        // line 1
        $this->displayBlock('textarea_widget', $context, $blocks);
        
        $__internal_f7131b148f6894c10e7dc6d309d3a3d50a57d7103f8c975cc2efbe00d4ffb20a->leave($__internal_f7131b148f6894c10e7dc6d309d3a3d50a57d7103f8c975cc2efbe00d4ffb20a_prof);

        
        $__internal_d0278c7e63f7c8c57f4475823714f25936dea7e6fc0e6a69b8770ef8bc063091->leave($__internal_d0278c7e63f7c8c57f4475823714f25936dea7e6fc0e6a69b8770ef8bc063091_prof);

    }

    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_92ccfdbb49e219cb3616ac619c17f8e1269247626f6913009ccc06ae0116b894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ccfdbb49e219cb3616ac619c17f8e1269247626f6913009ccc06ae0116b894->enter($__internal_92ccfdbb49e219cb3616ac619c17f8e1269247626f6913009ccc06ae0116b894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_0958f445858ade495838cfa0dad87ac8658e042549199e2c7f9591caa69e49ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0958f445858ade495838cfa0dad87ac8658e042549199e2c7f9591caa69e49ad->enter($__internal_0958f445858ade495838cfa0dad87ac8658e042549199e2c7f9591caa69e49ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 2
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "class=\"ckeditor form-control\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_0958f445858ade495838cfa0dad87ac8658e042549199e2c7f9591caa69e49ad->leave($__internal_0958f445858ade495838cfa0dad87ac8658e042549199e2c7f9591caa69e49ad_prof);

        
        $__internal_92ccfdbb49e219cb3616ac619c17f8e1269247626f6913009ccc06ae0116b894->leave($__internal_92ccfdbb49e219cb3616ac619c17f8e1269247626f6913009ccc06ae0116b894_prof);

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
