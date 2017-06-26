<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2a940aaff42131f1ef2f96c9c45093a3c79b000d49648260729b3db4fb557fe2 extends Twig_Template
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
        $__internal_774183d69b8706ac37f1ed20afe6d2e97370cdba366a3c3dfea54b68be82ae49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774183d69b8706ac37f1ed20afe6d2e97370cdba366a3c3dfea54b68be82ae49->enter($__internal_774183d69b8706ac37f1ed20afe6d2e97370cdba366a3c3dfea54b68be82ae49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_19a3e6de2e261f6d02a226cf9636b2e9d6675481491df8cb0fce3948537c0947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a3e6de2e261f6d02a226cf9636b2e9d6675481491df8cb0fce3948537c0947->enter($__internal_19a3e6de2e261f6d02a226cf9636b2e9d6675481491df8cb0fce3948537c0947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_774183d69b8706ac37f1ed20afe6d2e97370cdba366a3c3dfea54b68be82ae49->leave($__internal_774183d69b8706ac37f1ed20afe6d2e97370cdba366a3c3dfea54b68be82ae49_prof);

        
        $__internal_19a3e6de2e261f6d02a226cf9636b2e9d6675481491df8cb0fce3948537c0947->leave($__internal_19a3e6de2e261f6d02a226cf9636b2e9d6675481491df8cb0fce3948537c0947_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
