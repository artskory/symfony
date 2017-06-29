<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6b51b63f94c0219873489effdf61705562dc21102074b885727c3519068f876b extends Twig_Template
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
        $__internal_2257a48b8c7a2f58b8d8bb5a3194cbb125eea03ee6ca8ea1d293f6e6fca240e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2257a48b8c7a2f58b8d8bb5a3194cbb125eea03ee6ca8ea1d293f6e6fca240e1->enter($__internal_2257a48b8c7a2f58b8d8bb5a3194cbb125eea03ee6ca8ea1d293f6e6fca240e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_601d12a3f6c76d44e7e80642987b17a790f603dc23856639896421f9251536f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_601d12a3f6c76d44e7e80642987b17a790f603dc23856639896421f9251536f7->enter($__internal_601d12a3f6c76d44e7e80642987b17a790f603dc23856639896421f9251536f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2257a48b8c7a2f58b8d8bb5a3194cbb125eea03ee6ca8ea1d293f6e6fca240e1->leave($__internal_2257a48b8c7a2f58b8d8bb5a3194cbb125eea03ee6ca8ea1d293f6e6fca240e1_prof);

        
        $__internal_601d12a3f6c76d44e7e80642987b17a790f603dc23856639896421f9251536f7->leave($__internal_601d12a3f6c76d44e7e80642987b17a790f603dc23856639896421f9251536f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
