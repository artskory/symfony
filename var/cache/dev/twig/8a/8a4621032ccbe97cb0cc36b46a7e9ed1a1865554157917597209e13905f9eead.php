<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_148ce63db4cc4289db1af7ded7d8c464b5126e637f03984d05de1bdef48e0190 extends Twig_Template
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
        $__internal_03e9e7de037d041a79ba6d1170c37a7650cbc44797d85f3e6c8f9585ebc2d229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e9e7de037d041a79ba6d1170c37a7650cbc44797d85f3e6c8f9585ebc2d229->enter($__internal_03e9e7de037d041a79ba6d1170c37a7650cbc44797d85f3e6c8f9585ebc2d229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_989280235f0f03c9957188413557e4d9d9e6d496a32b7e12d3e1ce313b573119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989280235f0f03c9957188413557e4d9d9e6d496a32b7e12d3e1ce313b573119->enter($__internal_989280235f0f03c9957188413557e4d9d9e6d496a32b7e12d3e1ce313b573119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_03e9e7de037d041a79ba6d1170c37a7650cbc44797d85f3e6c8f9585ebc2d229->leave($__internal_03e9e7de037d041a79ba6d1170c37a7650cbc44797d85f3e6c8f9585ebc2d229_prof);

        
        $__internal_989280235f0f03c9957188413557e4d9d9e6d496a32b7e12d3e1ce313b573119->leave($__internal_989280235f0f03c9957188413557e4d9d9e6d496a32b7e12d3e1ce313b573119_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
