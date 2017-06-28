<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1d39a40ff0546bb652628201a426128e5fa390f833ac2c17049af7a16887fa56 extends Twig_Template
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
        $__internal_e156e0eb160246c9ee484aca8ad0eaa8d9adbec2b418ed6594d490cdab577567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e156e0eb160246c9ee484aca8ad0eaa8d9adbec2b418ed6594d490cdab577567->enter($__internal_e156e0eb160246c9ee484aca8ad0eaa8d9adbec2b418ed6594d490cdab577567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_6ec307929b42fa18224612ece642099d82ec39453d219d1f3cb7d03b66b7526f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec307929b42fa18224612ece642099d82ec39453d219d1f3cb7d03b66b7526f->enter($__internal_6ec307929b42fa18224612ece642099d82ec39453d219d1f3cb7d03b66b7526f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e156e0eb160246c9ee484aca8ad0eaa8d9adbec2b418ed6594d490cdab577567->leave($__internal_e156e0eb160246c9ee484aca8ad0eaa8d9adbec2b418ed6594d490cdab577567_prof);

        
        $__internal_6ec307929b42fa18224612ece642099d82ec39453d219d1f3cb7d03b66b7526f->leave($__internal_6ec307929b42fa18224612ece642099d82ec39453d219d1f3cb7d03b66b7526f_prof);

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
