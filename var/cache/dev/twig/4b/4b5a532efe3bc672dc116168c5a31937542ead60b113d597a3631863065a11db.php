<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e40da2edc02cffc3a164af7fb25423852d408bd2b5e3d63081be4c0082c7f455 extends Twig_Template
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
        $__internal_56adb295f53ab0df22f5d44661a1e07441703119c299e0bab005c77e3c372602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56adb295f53ab0df22f5d44661a1e07441703119c299e0bab005c77e3c372602->enter($__internal_56adb295f53ab0df22f5d44661a1e07441703119c299e0bab005c77e3c372602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a1cab27093727865b163e15fc73cfc26766a20feace5a734fc943694a8d2bd68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1cab27093727865b163e15fc73cfc26766a20feace5a734fc943694a8d2bd68->enter($__internal_a1cab27093727865b163e15fc73cfc26766a20feace5a734fc943694a8d2bd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_56adb295f53ab0df22f5d44661a1e07441703119c299e0bab005c77e3c372602->leave($__internal_56adb295f53ab0df22f5d44661a1e07441703119c299e0bab005c77e3c372602_prof);

        
        $__internal_a1cab27093727865b163e15fc73cfc26766a20feace5a734fc943694a8d2bd68->leave($__internal_a1cab27093727865b163e15fc73cfc26766a20feace5a734fc943694a8d2bd68_prof);

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
