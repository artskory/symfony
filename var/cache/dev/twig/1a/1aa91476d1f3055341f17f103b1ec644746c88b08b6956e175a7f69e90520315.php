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
        $__internal_8b1e795ab2d86d4b3b1fe3840f2808bead4d181e9378d7009178c917eb658a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b1e795ab2d86d4b3b1fe3840f2808bead4d181e9378d7009178c917eb658a7f->enter($__internal_8b1e795ab2d86d4b3b1fe3840f2808bead4d181e9378d7009178c917eb658a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_9ea3976ef1162699d42b7765277e092afb42620472c0eff50d4a973f6b01f741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea3976ef1162699d42b7765277e092afb42620472c0eff50d4a973f6b01f741->enter($__internal_9ea3976ef1162699d42b7765277e092afb42620472c0eff50d4a973f6b01f741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8b1e795ab2d86d4b3b1fe3840f2808bead4d181e9378d7009178c917eb658a7f->leave($__internal_8b1e795ab2d86d4b3b1fe3840f2808bead4d181e9378d7009178c917eb658a7f_prof);

        
        $__internal_9ea3976ef1162699d42b7765277e092afb42620472c0eff50d4a973f6b01f741->leave($__internal_9ea3976ef1162699d42b7765277e092afb42620472c0eff50d4a973f6b01f741_prof);

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
