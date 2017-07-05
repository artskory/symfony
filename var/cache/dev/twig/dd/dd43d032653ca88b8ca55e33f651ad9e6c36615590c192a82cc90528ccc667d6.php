<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6c79b2d065225f90ea364a0ebf62ab0691b5c86d52a25b8d422e9177b8ab6dd2 extends Twig_Template
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
        $__internal_0597550fc9c31c1ec540093e226154990a4cfe699aeced88b65b3393c44d046f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0597550fc9c31c1ec540093e226154990a4cfe699aeced88b65b3393c44d046f->enter($__internal_0597550fc9c31c1ec540093e226154990a4cfe699aeced88b65b3393c44d046f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_6723ec50fd3cf1b7c8449e4f359abe12e5038b30f8fc4443f6cbea9d89d3cc44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6723ec50fd3cf1b7c8449e4f359abe12e5038b30f8fc4443f6cbea9d89d3cc44->enter($__internal_6723ec50fd3cf1b7c8449e4f359abe12e5038b30f8fc4443f6cbea9d89d3cc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0597550fc9c31c1ec540093e226154990a4cfe699aeced88b65b3393c44d046f->leave($__internal_0597550fc9c31c1ec540093e226154990a4cfe699aeced88b65b3393c44d046f_prof);

        
        $__internal_6723ec50fd3cf1b7c8449e4f359abe12e5038b30f8fc4443f6cbea9d89d3cc44->leave($__internal_6723ec50fd3cf1b7c8449e4f359abe12e5038b30f8fc4443f6cbea9d89d3cc44_prof);

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
