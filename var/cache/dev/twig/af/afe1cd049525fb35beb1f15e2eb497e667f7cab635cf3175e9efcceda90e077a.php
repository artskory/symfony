<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_efcabca053f6f0bf2e4971c68542f1bbbf49265504f6300a163deb50451776be extends Twig_Template
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
        $__internal_6981cac837171f7d7efa7e81ed5e493f21f06127114414ffba6a5e6069a5b519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6981cac837171f7d7efa7e81ed5e493f21f06127114414ffba6a5e6069a5b519->enter($__internal_6981cac837171f7d7efa7e81ed5e493f21f06127114414ffba6a5e6069a5b519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_32b031cdfad660d5d7d10ca1e25ba56ba95a7ad294b457ad74636f270030d9a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b031cdfad660d5d7d10ca1e25ba56ba95a7ad294b457ad74636f270030d9a7->enter($__internal_32b031cdfad660d5d7d10ca1e25ba56ba95a7ad294b457ad74636f270030d9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6981cac837171f7d7efa7e81ed5e493f21f06127114414ffba6a5e6069a5b519->leave($__internal_6981cac837171f7d7efa7e81ed5e493f21f06127114414ffba6a5e6069a5b519_prof);

        
        $__internal_32b031cdfad660d5d7d10ca1e25ba56ba95a7ad294b457ad74636f270030d9a7->leave($__internal_32b031cdfad660d5d7d10ca1e25ba56ba95a7ad294b457ad74636f270030d9a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
