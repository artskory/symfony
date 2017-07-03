<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_52ae5019c31c37e13adf4e4c9725e8180e7c86161f8427ef9331dee0dd476054 extends Twig_Template
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
        $__internal_c7d9207050cd1fd32a23142e7a9149dab7b302cb8c0ca1a1f2a41263de71b6bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d9207050cd1fd32a23142e7a9149dab7b302cb8c0ca1a1f2a41263de71b6bf->enter($__internal_c7d9207050cd1fd32a23142e7a9149dab7b302cb8c0ca1a1f2a41263de71b6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_b795594901b484d02449fdc508de97497b04549ee7e8e8560fc4e1ab37b790d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b795594901b484d02449fdc508de97497b04549ee7e8e8560fc4e1ab37b790d6->enter($__internal_b795594901b484d02449fdc508de97497b04549ee7e8e8560fc4e1ab37b790d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c7d9207050cd1fd32a23142e7a9149dab7b302cb8c0ca1a1f2a41263de71b6bf->leave($__internal_c7d9207050cd1fd32a23142e7a9149dab7b302cb8c0ca1a1f2a41263de71b6bf_prof);

        
        $__internal_b795594901b484d02449fdc508de97497b04549ee7e8e8560fc4e1ab37b790d6->leave($__internal_b795594901b484d02449fdc508de97497b04549ee7e8e8560fc4e1ab37b790d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
