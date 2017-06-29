<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_fe639938004924ff4daea40d0e878d05e6e7a5d865ba1dc43fc3121f44e2ab44 extends Twig_Template
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
        $__internal_120469217c9c0a9c8b9718731a692c14060100a0b190bd200bcdc2d866ce4957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_120469217c9c0a9c8b9718731a692c14060100a0b190bd200bcdc2d866ce4957->enter($__internal_120469217c9c0a9c8b9718731a692c14060100a0b190bd200bcdc2d866ce4957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_0af750f1ec60c9ba3a491edf4e1866c1f1c2fbb449954517e14a465e85973a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af750f1ec60c9ba3a491edf4e1866c1f1c2fbb449954517e14a465e85973a7c->enter($__internal_0af750f1ec60c9ba3a491edf4e1866c1f1c2fbb449954517e14a465e85973a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_120469217c9c0a9c8b9718731a692c14060100a0b190bd200bcdc2d866ce4957->leave($__internal_120469217c9c0a9c8b9718731a692c14060100a0b190bd200bcdc2d866ce4957_prof);

        
        $__internal_0af750f1ec60c9ba3a491edf4e1866c1f1c2fbb449954517e14a465e85973a7c->leave($__internal_0af750f1ec60c9ba3a491edf4e1866c1f1c2fbb449954517e14a465e85973a7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
