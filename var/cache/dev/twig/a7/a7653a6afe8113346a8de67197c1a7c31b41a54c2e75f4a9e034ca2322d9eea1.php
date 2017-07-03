<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c5e12b3d76876a91d99987b03b8eb0ad62422fb63295a8372996f6247c3cf913 extends Twig_Template
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
        $__internal_158cb8ec3c8943fd590d6420115949acd40d2d95888aa4d76741801526666e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158cb8ec3c8943fd590d6420115949acd40d2d95888aa4d76741801526666e5c->enter($__internal_158cb8ec3c8943fd590d6420115949acd40d2d95888aa4d76741801526666e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_2f24cca5aeb48cb0ecccd137354bd51fc2f4bd2db309667f1e12f9f20d75527a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f24cca5aeb48cb0ecccd137354bd51fc2f4bd2db309667f1e12f9f20d75527a->enter($__internal_2f24cca5aeb48cb0ecccd137354bd51fc2f4bd2db309667f1e12f9f20d75527a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_158cb8ec3c8943fd590d6420115949acd40d2d95888aa4d76741801526666e5c->leave($__internal_158cb8ec3c8943fd590d6420115949acd40d2d95888aa4d76741801526666e5c_prof);

        
        $__internal_2f24cca5aeb48cb0ecccd137354bd51fc2f4bd2db309667f1e12f9f20d75527a->leave($__internal_2f24cca5aeb48cb0ecccd137354bd51fc2f4bd2db309667f1e12f9f20d75527a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
