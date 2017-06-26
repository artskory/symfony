<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5cff0db78bf9781ad199f340550e59e0c856606df94df0bc5d75153f4520e815 extends Twig_Template
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
        $__internal_79bcedd1af2e9ecc108eff47143bc61a3c9ced47088e8aa58761988aa2b7317e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79bcedd1af2e9ecc108eff47143bc61a3c9ced47088e8aa58761988aa2b7317e->enter($__internal_79bcedd1af2e9ecc108eff47143bc61a3c9ced47088e8aa58761988aa2b7317e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_4ee6989c2bedcbd232e7cd803b3c31e0c78371808715c43ca9cef939aaad2c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee6989c2bedcbd232e7cd803b3c31e0c78371808715c43ca9cef939aaad2c9d->enter($__internal_4ee6989c2bedcbd232e7cd803b3c31e0c78371808715c43ca9cef939aaad2c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_79bcedd1af2e9ecc108eff47143bc61a3c9ced47088e8aa58761988aa2b7317e->leave($__internal_79bcedd1af2e9ecc108eff47143bc61a3c9ced47088e8aa58761988aa2b7317e_prof);

        
        $__internal_4ee6989c2bedcbd232e7cd803b3c31e0c78371808715c43ca9cef939aaad2c9d->leave($__internal_4ee6989c2bedcbd232e7cd803b3c31e0c78371808715c43ca9cef939aaad2c9d_prof);

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
