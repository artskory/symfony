<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_57586faf24238085dc920c1bfad1bbec7a21c6fe3126d43b07b570f1071cd047 extends Twig_Template
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
        $__internal_07e2d5b6edbeb1e097dd7eef82d77ca384bacef52616879452e595883a5ccd39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e2d5b6edbeb1e097dd7eef82d77ca384bacef52616879452e595883a5ccd39->enter($__internal_07e2d5b6edbeb1e097dd7eef82d77ca384bacef52616879452e595883a5ccd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_5fb36f3cd56bf4ddd70cc47c5d33c0c1443bbd566d786e86f2062c74c0b3059d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb36f3cd56bf4ddd70cc47c5d33c0c1443bbd566d786e86f2062c74c0b3059d->enter($__internal_5fb36f3cd56bf4ddd70cc47c5d33c0c1443bbd566d786e86f2062c74c0b3059d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_07e2d5b6edbeb1e097dd7eef82d77ca384bacef52616879452e595883a5ccd39->leave($__internal_07e2d5b6edbeb1e097dd7eef82d77ca384bacef52616879452e595883a5ccd39_prof);

        
        $__internal_5fb36f3cd56bf4ddd70cc47c5d33c0c1443bbd566d786e86f2062c74c0b3059d->leave($__internal_5fb36f3cd56bf4ddd70cc47c5d33c0c1443bbd566d786e86f2062c74c0b3059d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
