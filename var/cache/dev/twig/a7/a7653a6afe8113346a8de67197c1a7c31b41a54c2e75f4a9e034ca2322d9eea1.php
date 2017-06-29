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
        $__internal_0f8f98977f286d5db68e0773d2666ee49f77e7e01f43a64d05296d4d7fa9106d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f8f98977f286d5db68e0773d2666ee49f77e7e01f43a64d05296d4d7fa9106d->enter($__internal_0f8f98977f286d5db68e0773d2666ee49f77e7e01f43a64d05296d4d7fa9106d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3e07100407b7851b82f8f5dba86ba233177303841965654fe75081bd9bab6067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e07100407b7851b82f8f5dba86ba233177303841965654fe75081bd9bab6067->enter($__internal_3e07100407b7851b82f8f5dba86ba233177303841965654fe75081bd9bab6067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0f8f98977f286d5db68e0773d2666ee49f77e7e01f43a64d05296d4d7fa9106d->leave($__internal_0f8f98977f286d5db68e0773d2666ee49f77e7e01f43a64d05296d4d7fa9106d_prof);

        
        $__internal_3e07100407b7851b82f8f5dba86ba233177303841965654fe75081bd9bab6067->leave($__internal_3e07100407b7851b82f8f5dba86ba233177303841965654fe75081bd9bab6067_prof);

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
