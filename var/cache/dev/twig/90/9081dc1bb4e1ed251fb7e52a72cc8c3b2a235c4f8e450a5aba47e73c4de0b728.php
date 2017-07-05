<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d7a4e0556d801f258bfc24359dc4057be3918d6b8ee60f5f3e2dd09b88f47e13 extends Twig_Template
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
        $__internal_3bfc066ddaa4c450c7ea2d37cabf5add23c03654e2ed66536867a8567468b0d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bfc066ddaa4c450c7ea2d37cabf5add23c03654e2ed66536867a8567468b0d2->enter($__internal_3bfc066ddaa4c450c7ea2d37cabf5add23c03654e2ed66536867a8567468b0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_e13876a0bffd2c976b8efdf4eb051d1ce93763eefd57177ad390b058027a8188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13876a0bffd2c976b8efdf4eb051d1ce93763eefd57177ad390b058027a8188->enter($__internal_e13876a0bffd2c976b8efdf4eb051d1ce93763eefd57177ad390b058027a8188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3bfc066ddaa4c450c7ea2d37cabf5add23c03654e2ed66536867a8567468b0d2->leave($__internal_3bfc066ddaa4c450c7ea2d37cabf5add23c03654e2ed66536867a8567468b0d2_prof);

        
        $__internal_e13876a0bffd2c976b8efdf4eb051d1ce93763eefd57177ad390b058027a8188->leave($__internal_e13876a0bffd2c976b8efdf4eb051d1ce93763eefd57177ad390b058027a8188_prof);

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
