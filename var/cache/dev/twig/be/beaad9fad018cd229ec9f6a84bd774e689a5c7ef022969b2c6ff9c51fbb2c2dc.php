<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_375a01c772b62272451af3b03ea97e21da2724915649a0d95445153607fae1fe extends Twig_Template
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
        $__internal_6c9ab1ee5d3da12f709b964ddea8637fa99d3fdcd7d92eea39df9e80dbe9560c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c9ab1ee5d3da12f709b964ddea8637fa99d3fdcd7d92eea39df9e80dbe9560c->enter($__internal_6c9ab1ee5d3da12f709b964ddea8637fa99d3fdcd7d92eea39df9e80dbe9560c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_c6fc2295b640329c7965e5e867be15863af3b9e1a5c559d5ea01590d5c2e7085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fc2295b640329c7965e5e867be15863af3b9e1a5c559d5ea01590d5c2e7085->enter($__internal_c6fc2295b640329c7965e5e867be15863af3b9e1a5c559d5ea01590d5c2e7085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6c9ab1ee5d3da12f709b964ddea8637fa99d3fdcd7d92eea39df9e80dbe9560c->leave($__internal_6c9ab1ee5d3da12f709b964ddea8637fa99d3fdcd7d92eea39df9e80dbe9560c_prof);

        
        $__internal_c6fc2295b640329c7965e5e867be15863af3b9e1a5c559d5ea01590d5c2e7085->leave($__internal_c6fc2295b640329c7965e5e867be15863af3b9e1a5c559d5ea01590d5c2e7085_prof);

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
