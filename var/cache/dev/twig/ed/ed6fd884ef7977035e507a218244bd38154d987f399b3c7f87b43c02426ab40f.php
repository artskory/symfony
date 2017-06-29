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
        $__internal_6dd33b096371ed5631e16a06e484d384016030af9d5688beb44993d343921079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dd33b096371ed5631e16a06e484d384016030af9d5688beb44993d343921079->enter($__internal_6dd33b096371ed5631e16a06e484d384016030af9d5688beb44993d343921079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a8d1998b542cd39150510c43181fb9e2240d4ab239557eb643859a70fc7d2f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d1998b542cd39150510c43181fb9e2240d4ab239557eb643859a70fc7d2f67->enter($__internal_a8d1998b542cd39150510c43181fb9e2240d4ab239557eb643859a70fc7d2f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6dd33b096371ed5631e16a06e484d384016030af9d5688beb44993d343921079->leave($__internal_6dd33b096371ed5631e16a06e484d384016030af9d5688beb44993d343921079_prof);

        
        $__internal_a8d1998b542cd39150510c43181fb9e2240d4ab239557eb643859a70fc7d2f67->leave($__internal_a8d1998b542cd39150510c43181fb9e2240d4ab239557eb643859a70fc7d2f67_prof);

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
