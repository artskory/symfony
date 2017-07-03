<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_dc66f1d4d28f588c9b627f221ce56a32ebdc9390da8a0956d29768301b0e0149 extends Twig_Template
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
        $__internal_288ec93044aac6f35226eaeb6e2b0b1d4c318d4f743fe94c72e93ffefbe67042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288ec93044aac6f35226eaeb6e2b0b1d4c318d4f743fe94c72e93ffefbe67042->enter($__internal_288ec93044aac6f35226eaeb6e2b0b1d4c318d4f743fe94c72e93ffefbe67042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_44d2d4cc85946adb52d01d62db780fb286001b4b806d9680e17eb7b0474076b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d2d4cc85946adb52d01d62db780fb286001b4b806d9680e17eb7b0474076b5->enter($__internal_44d2d4cc85946adb52d01d62db780fb286001b4b806d9680e17eb7b0474076b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_288ec93044aac6f35226eaeb6e2b0b1d4c318d4f743fe94c72e93ffefbe67042->leave($__internal_288ec93044aac6f35226eaeb6e2b0b1d4c318d4f743fe94c72e93ffefbe67042_prof);

        
        $__internal_44d2d4cc85946adb52d01d62db780fb286001b4b806d9680e17eb7b0474076b5->leave($__internal_44d2d4cc85946adb52d01d62db780fb286001b4b806d9680e17eb7b0474076b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
