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
        $__internal_3458001e69677ae936c2355404b8132318a13b69961d4a05a4dd26a430823b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3458001e69677ae936c2355404b8132318a13b69961d4a05a4dd26a430823b31->enter($__internal_3458001e69677ae936c2355404b8132318a13b69961d4a05a4dd26a430823b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b2be04c94f52026b4596308dc77096ada639d0bcecedae88bf14284276813082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2be04c94f52026b4596308dc77096ada639d0bcecedae88bf14284276813082->enter($__internal_b2be04c94f52026b4596308dc77096ada639d0bcecedae88bf14284276813082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3458001e69677ae936c2355404b8132318a13b69961d4a05a4dd26a430823b31->leave($__internal_3458001e69677ae936c2355404b8132318a13b69961d4a05a4dd26a430823b31_prof);

        
        $__internal_b2be04c94f52026b4596308dc77096ada639d0bcecedae88bf14284276813082->leave($__internal_b2be04c94f52026b4596308dc77096ada639d0bcecedae88bf14284276813082_prof);

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
