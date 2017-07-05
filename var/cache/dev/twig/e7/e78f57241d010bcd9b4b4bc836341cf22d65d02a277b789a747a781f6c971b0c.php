<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8c9ca724783cfa2a8d0f23a00d81241af5e39c87f187d12a224fda86607ca4c8 extends Twig_Template
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
        $__internal_aec1cfaf0129275259f6051ea56468e3e288bce0a5b0a093aad86c3b9386c919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec1cfaf0129275259f6051ea56468e3e288bce0a5b0a093aad86c3b9386c919->enter($__internal_aec1cfaf0129275259f6051ea56468e3e288bce0a5b0a093aad86c3b9386c919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_be285ff6215b573f23b525dfd30bc14067195b3d3fa87bae86f55b318c8e32de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be285ff6215b573f23b525dfd30bc14067195b3d3fa87bae86f55b318c8e32de->enter($__internal_be285ff6215b573f23b525dfd30bc14067195b3d3fa87bae86f55b318c8e32de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_aec1cfaf0129275259f6051ea56468e3e288bce0a5b0a093aad86c3b9386c919->leave($__internal_aec1cfaf0129275259f6051ea56468e3e288bce0a5b0a093aad86c3b9386c919_prof);

        
        $__internal_be285ff6215b573f23b525dfd30bc14067195b3d3fa87bae86f55b318c8e32de->leave($__internal_be285ff6215b573f23b525dfd30bc14067195b3d3fa87bae86f55b318c8e32de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
