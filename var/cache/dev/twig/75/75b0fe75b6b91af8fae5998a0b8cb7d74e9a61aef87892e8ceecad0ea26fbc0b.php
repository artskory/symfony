<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_773661f6e371255e34ca2b7ec6a9dee43eafb089857e2aa1c828a5ce3202a0bf extends Twig_Template
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
        $__internal_fb0c3e3c69538dd7236d92ad3f828ec93bc2f1fe00277a6c64840ac91e0b6642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0c3e3c69538dd7236d92ad3f828ec93bc2f1fe00277a6c64840ac91e0b6642->enter($__internal_fb0c3e3c69538dd7236d92ad3f828ec93bc2f1fe00277a6c64840ac91e0b6642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_52fd2d57c0a054cd446a181ba568b7efef6810b7f801c3d23b277dc3399eaaad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52fd2d57c0a054cd446a181ba568b7efef6810b7f801c3d23b277dc3399eaaad->enter($__internal_52fd2d57c0a054cd446a181ba568b7efef6810b7f801c3d23b277dc3399eaaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_fb0c3e3c69538dd7236d92ad3f828ec93bc2f1fe00277a6c64840ac91e0b6642->leave($__internal_fb0c3e3c69538dd7236d92ad3f828ec93bc2f1fe00277a6c64840ac91e0b6642_prof);

        
        $__internal_52fd2d57c0a054cd446a181ba568b7efef6810b7f801c3d23b277dc3399eaaad->leave($__internal_52fd2d57c0a054cd446a181ba568b7efef6810b7f801c3d23b277dc3399eaaad_prof);

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
