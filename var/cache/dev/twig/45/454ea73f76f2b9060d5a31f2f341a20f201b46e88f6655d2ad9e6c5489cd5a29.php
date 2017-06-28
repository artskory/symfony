<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3599f0f41a73b2e0440226334f043031a4ccb528838bc00dd538e3cb960119cc extends Twig_Template
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
        $__internal_7649f1390529c9d80b380223bba378496c1b882e3239314530367e5f80b5be13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7649f1390529c9d80b380223bba378496c1b882e3239314530367e5f80b5be13->enter($__internal_7649f1390529c9d80b380223bba378496c1b882e3239314530367e5f80b5be13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_65ba293ce9decf508a26b56efbcbf4c790a1b3c017b7b95c85da756d32a1dd5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ba293ce9decf508a26b56efbcbf4c790a1b3c017b7b95c85da756d32a1dd5a->enter($__internal_65ba293ce9decf508a26b56efbcbf4c790a1b3c017b7b95c85da756d32a1dd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7649f1390529c9d80b380223bba378496c1b882e3239314530367e5f80b5be13->leave($__internal_7649f1390529c9d80b380223bba378496c1b882e3239314530367e5f80b5be13_prof);

        
        $__internal_65ba293ce9decf508a26b56efbcbf4c790a1b3c017b7b95c85da756d32a1dd5a->leave($__internal_65ba293ce9decf508a26b56efbcbf4c790a1b3c017b7b95c85da756d32a1dd5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
