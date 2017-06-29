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
        $__internal_e8300a261e2b8b0c6853a693e963b96aa832a03dc47412caa7f9bb7d56ed0749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8300a261e2b8b0c6853a693e963b96aa832a03dc47412caa7f9bb7d56ed0749->enter($__internal_e8300a261e2b8b0c6853a693e963b96aa832a03dc47412caa7f9bb7d56ed0749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ckeditor.html.twig"));

        $__internal_906f73e81a3ba16ca68f3f091c06fd66dd4a44ee12f5e78cc63ad9dd2fe9fe20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906f73e81a3ba16ca68f3f091c06fd66dd4a44ee12f5e78cc63ad9dd2fe9fe20->enter($__internal_906f73e81a3ba16ca68f3f091c06fd66dd4a44ee12f5e78cc63ad9dd2fe9fe20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ckeditor.html.twig"));

        // line 1
        $this->displayBlock('textarea_widget', $context, $blocks);
        
        $__internal_e8300a261e2b8b0c6853a693e963b96aa832a03dc47412caa7f9bb7d56ed0749->leave($__internal_e8300a261e2b8b0c6853a693e963b96aa832a03dc47412caa7f9bb7d56ed0749_prof);

        
        $__internal_906f73e81a3ba16ca68f3f091c06fd66dd4a44ee12f5e78cc63ad9dd2fe9fe20->leave($__internal_906f73e81a3ba16ca68f3f091c06fd66dd4a44ee12f5e78cc63ad9dd2fe9fe20_prof);

    }

    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_a0ce670417f463d900be2c02dc67db825a2d5305d3955922fa975161506a6d7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ce670417f463d900be2c02dc67db825a2d5305d3955922fa975161506a6d7d->enter($__internal_a0ce670417f463d900be2c02dc67db825a2d5305d3955922fa975161506a6d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_1ebadbcb48faeca92d7ce71eb4a82bb075c692cc23d6ef978bc5d69dfaa27401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ebadbcb48faeca92d7ce71eb4a82bb075c692cc23d6ef978bc5d69dfaa27401->enter($__internal_1ebadbcb48faeca92d7ce71eb4a82bb075c692cc23d6ef978bc5d69dfaa27401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 2
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "class=\"ckeditor form-control\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_1ebadbcb48faeca92d7ce71eb4a82bb075c692cc23d6ef978bc5d69dfaa27401->leave($__internal_1ebadbcb48faeca92d7ce71eb4a82bb075c692cc23d6ef978bc5d69dfaa27401_prof);

        
        $__internal_a0ce670417f463d900be2c02dc67db825a2d5305d3955922fa975161506a6d7d->leave($__internal_a0ce670417f463d900be2c02dc67db825a2d5305d3955922fa975161506a6d7d_prof);

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
