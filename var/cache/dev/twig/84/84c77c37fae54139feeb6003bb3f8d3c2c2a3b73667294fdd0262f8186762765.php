<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_031c0f15a1328fa7f8fe928d55aa3ce5656f9799e9aed3f846413bbf6b52e733 extends Twig_Template
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
        $__internal_f07cb18e992cbfc39ce7ee96ef09a5da5198a21fe82c3e8e45df47c5450c3b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f07cb18e992cbfc39ce7ee96ef09a5da5198a21fe82c3e8e45df47c5450c3b10->enter($__internal_f07cb18e992cbfc39ce7ee96ef09a5da5198a21fe82c3e8e45df47c5450c3b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_47d26c06a7144d7a222f469cc6275cbe35cd0662df7a8bcc07800ea1b493adb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d26c06a7144d7a222f469cc6275cbe35cd0662df7a8bcc07800ea1b493adb3->enter($__internal_47d26c06a7144d7a222f469cc6275cbe35cd0662df7a8bcc07800ea1b493adb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f07cb18e992cbfc39ce7ee96ef09a5da5198a21fe82c3e8e45df47c5450c3b10->leave($__internal_f07cb18e992cbfc39ce7ee96ef09a5da5198a21fe82c3e8e45df47c5450c3b10_prof);

        
        $__internal_47d26c06a7144d7a222f469cc6275cbe35cd0662df7a8bcc07800ea1b493adb3->leave($__internal_47d26c06a7144d7a222f469cc6275cbe35cd0662df7a8bcc07800ea1b493adb3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
