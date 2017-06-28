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
        $__internal_bd8c2a9f24bc05435b96a210b60ef84c370cd9f3620544586358e4a19d10d5a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8c2a9f24bc05435b96a210b60ef84c370cd9f3620544586358e4a19d10d5a1->enter($__internal_bd8c2a9f24bc05435b96a210b60ef84c370cd9f3620544586358e4a19d10d5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ckeditor.html.twig"));

        $__internal_8aed1fb025a5fd03ed426c10029b060ae1733ded76786c7bd534dce64ddf3df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aed1fb025a5fd03ed426c10029b060ae1733ded76786c7bd534dce64ddf3df4->enter($__internal_8aed1fb025a5fd03ed426c10029b060ae1733ded76786c7bd534dce64ddf3df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ckeditor.html.twig"));

        // line 1
        $this->displayBlock('textarea_widget', $context, $blocks);
        
        $__internal_bd8c2a9f24bc05435b96a210b60ef84c370cd9f3620544586358e4a19d10d5a1->leave($__internal_bd8c2a9f24bc05435b96a210b60ef84c370cd9f3620544586358e4a19d10d5a1_prof);

        
        $__internal_8aed1fb025a5fd03ed426c10029b060ae1733ded76786c7bd534dce64ddf3df4->leave($__internal_8aed1fb025a5fd03ed426c10029b060ae1733ded76786c7bd534dce64ddf3df4_prof);

    }

    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_84eb088a968104c42465554cd5b8672feb96ecdac71786f5ca58473db07e73e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84eb088a968104c42465554cd5b8672feb96ecdac71786f5ca58473db07e73e2->enter($__internal_84eb088a968104c42465554cd5b8672feb96ecdac71786f5ca58473db07e73e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_6ab1cf883db20b6074cd705e95e9b770cedf0bc24d20e7879281ee2dea9d42f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab1cf883db20b6074cd705e95e9b770cedf0bc24d20e7879281ee2dea9d42f5->enter($__internal_6ab1cf883db20b6074cd705e95e9b770cedf0bc24d20e7879281ee2dea9d42f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 2
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "class=\"ckeditor form-control\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_6ab1cf883db20b6074cd705e95e9b770cedf0bc24d20e7879281ee2dea9d42f5->leave($__internal_6ab1cf883db20b6074cd705e95e9b770cedf0bc24d20e7879281ee2dea9d42f5_prof);

        
        $__internal_84eb088a968104c42465554cd5b8672feb96ecdac71786f5ca58473db07e73e2->leave($__internal_84eb088a968104c42465554cd5b8672feb96ecdac71786f5ca58473db07e73e2_prof);

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
