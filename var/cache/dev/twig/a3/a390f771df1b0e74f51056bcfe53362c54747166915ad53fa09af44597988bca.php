<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8a83ad0f07a087f595ade88527b1afddd00b50dc376eaedb877852dd9ede181d extends Twig_Template
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
        $__internal_18dcb33fd6e80932c00c12849d70e03a2b864521253d9968ecc14abaf5667580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18dcb33fd6e80932c00c12849d70e03a2b864521253d9968ecc14abaf5667580->enter($__internal_18dcb33fd6e80932c00c12849d70e03a2b864521253d9968ecc14abaf5667580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_debfd2515c29671bb9c0de1770bbdb940b3cbe186f81a43e873e11637fa0a9b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_debfd2515c29671bb9c0de1770bbdb940b3cbe186f81a43e873e11637fa0a9b6->enter($__internal_debfd2515c29671bb9c0de1770bbdb940b3cbe186f81a43e873e11637fa0a9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_18dcb33fd6e80932c00c12849d70e03a2b864521253d9968ecc14abaf5667580->leave($__internal_18dcb33fd6e80932c00c12849d70e03a2b864521253d9968ecc14abaf5667580_prof);

        
        $__internal_debfd2515c29671bb9c0de1770bbdb940b3cbe186f81a43e873e11637fa0a9b6->leave($__internal_debfd2515c29671bb9c0de1770bbdb940b3cbe186f81a43e873e11637fa0a9b6_prof);

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
