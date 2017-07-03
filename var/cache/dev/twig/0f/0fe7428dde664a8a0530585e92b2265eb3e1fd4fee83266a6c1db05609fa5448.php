<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_4d9931e4e6d8bc9013ccb1166b09570325d8ac5a15dab901398f5e36359c6e16 extends Twig_Template
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
        $__internal_c348448d2f0ac1fbda5298d9513a28ed43bbddcfefceda6daeb2c9c3e3252e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c348448d2f0ac1fbda5298d9513a28ed43bbddcfefceda6daeb2c9c3e3252e09->enter($__internal_c348448d2f0ac1fbda5298d9513a28ed43bbddcfefceda6daeb2c9c3e3252e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_79ae7068ce5a2d61976ec906beaede7336f7627526b58e6b572053fc75719406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ae7068ce5a2d61976ec906beaede7336f7627526b58e6b572053fc75719406->enter($__internal_79ae7068ce5a2d61976ec906beaede7336f7627526b58e6b572053fc75719406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c348448d2f0ac1fbda5298d9513a28ed43bbddcfefceda6daeb2c9c3e3252e09->leave($__internal_c348448d2f0ac1fbda5298d9513a28ed43bbddcfefceda6daeb2c9c3e3252e09_prof);

        
        $__internal_79ae7068ce5a2d61976ec906beaede7336f7627526b58e6b572053fc75719406->leave($__internal_79ae7068ce5a2d61976ec906beaede7336f7627526b58e6b572053fc75719406_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
