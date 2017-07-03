<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_fb577754313898d11426e2470b19b24c2e0e4251705bd49809689a1063818ed3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b243e22bee0938c2202daad8fa2643f7ec4c918769b938f9e1c7c4e430b935cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b243e22bee0938c2202daad8fa2643f7ec4c918769b938f9e1c7c4e430b935cc->enter($__internal_b243e22bee0938c2202daad8fa2643f7ec4c918769b938f9e1c7c4e430b935cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_5e75c804fa93c6a2c0619c65aebc17f32272e016dc7214edc498a52c1d6036f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e75c804fa93c6a2c0619c65aebc17f32272e016dc7214edc498a52c1d6036f5->enter($__internal_5e75c804fa93c6a2c0619c65aebc17f32272e016dc7214edc498a52c1d6036f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b243e22bee0938c2202daad8fa2643f7ec4c918769b938f9e1c7c4e430b935cc->leave($__internal_b243e22bee0938c2202daad8fa2643f7ec4c918769b938f9e1c7c4e430b935cc_prof);

        
        $__internal_5e75c804fa93c6a2c0619c65aebc17f32272e016dc7214edc498a52c1d6036f5->leave($__internal_5e75c804fa93c6a2c0619c65aebc17f32272e016dc7214edc498a52c1d6036f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
