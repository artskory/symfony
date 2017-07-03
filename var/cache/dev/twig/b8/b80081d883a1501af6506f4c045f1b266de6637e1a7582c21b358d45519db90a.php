<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d3014552ddf042a29065c47becfc69fac167c7aead8235cc847c8cd8b8d5ec63 extends Twig_Template
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
        $__internal_285366ca5a57d8ed79da192a6635967774d6579c92afa741766e2870d2d3eb39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_285366ca5a57d8ed79da192a6635967774d6579c92afa741766e2870d2d3eb39->enter($__internal_285366ca5a57d8ed79da192a6635967774d6579c92afa741766e2870d2d3eb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_3bb78fb41ab747ab89139df9e0cf6959447f683218a54c29b0438bd3430fd488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb78fb41ab747ab89139df9e0cf6959447f683218a54c29b0438bd3430fd488->enter($__internal_3bb78fb41ab747ab89139df9e0cf6959447f683218a54c29b0438bd3430fd488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_285366ca5a57d8ed79da192a6635967774d6579c92afa741766e2870d2d3eb39->leave($__internal_285366ca5a57d8ed79da192a6635967774d6579c92afa741766e2870d2d3eb39_prof);

        
        $__internal_3bb78fb41ab747ab89139df9e0cf6959447f683218a54c29b0438bd3430fd488->leave($__internal_3bb78fb41ab747ab89139df9e0cf6959447f683218a54c29b0438bd3430fd488_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
