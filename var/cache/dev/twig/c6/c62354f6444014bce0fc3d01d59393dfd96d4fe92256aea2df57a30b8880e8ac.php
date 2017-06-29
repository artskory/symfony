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
        $__internal_635bfd69e0ac5702b9608c93c7f1bde1b481c753889b7a701b2c3e9923e50116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635bfd69e0ac5702b9608c93c7f1bde1b481c753889b7a701b2c3e9923e50116->enter($__internal_635bfd69e0ac5702b9608c93c7f1bde1b481c753889b7a701b2c3e9923e50116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_147e8ddedfdcbb30f9f6ccc7fa0c8b6e9c45da13c511682a58f8a724a1e4fe84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147e8ddedfdcbb30f9f6ccc7fa0c8b6e9c45da13c511682a58f8a724a1e4fe84->enter($__internal_147e8ddedfdcbb30f9f6ccc7fa0c8b6e9c45da13c511682a58f8a724a1e4fe84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_635bfd69e0ac5702b9608c93c7f1bde1b481c753889b7a701b2c3e9923e50116->leave($__internal_635bfd69e0ac5702b9608c93c7f1bde1b481c753889b7a701b2c3e9923e50116_prof);

        
        $__internal_147e8ddedfdcbb30f9f6ccc7fa0c8b6e9c45da13c511682a58f8a724a1e4fe84->leave($__internal_147e8ddedfdcbb30f9f6ccc7fa0c8b6e9c45da13c511682a58f8a724a1e4fe84_prof);

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
