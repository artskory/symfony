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
        $__internal_1881b99d701966cb7b141c7139169d251b1127efe22012fc80d7af07276daa21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1881b99d701966cb7b141c7139169d251b1127efe22012fc80d7af07276daa21->enter($__internal_1881b99d701966cb7b141c7139169d251b1127efe22012fc80d7af07276daa21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_bed9bb7190237d608ade0d8be3fb1eb3bbdea26e54a0284c076af784d04b7af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed9bb7190237d608ade0d8be3fb1eb3bbdea26e54a0284c076af784d04b7af4->enter($__internal_bed9bb7190237d608ade0d8be3fb1eb3bbdea26e54a0284c076af784d04b7af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1881b99d701966cb7b141c7139169d251b1127efe22012fc80d7af07276daa21->leave($__internal_1881b99d701966cb7b141c7139169d251b1127efe22012fc80d7af07276daa21_prof);

        
        $__internal_bed9bb7190237d608ade0d8be3fb1eb3bbdea26e54a0284c076af784d04b7af4->leave($__internal_bed9bb7190237d608ade0d8be3fb1eb3bbdea26e54a0284c076af784d04b7af4_prof);

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
