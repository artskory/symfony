<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9d9ec3ea1f721809600343e95ceaa004aca210188e940dc82f21c162070432e5 extends Twig_Template
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
        $__internal_04b9d57a2c98b748a3fbab7a336bb7d7e12d6e9452e05f1e231c0be6ca8ffbf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b9d57a2c98b748a3fbab7a336bb7d7e12d6e9452e05f1e231c0be6ca8ffbf7->enter($__internal_04b9d57a2c98b748a3fbab7a336bb7d7e12d6e9452e05f1e231c0be6ca8ffbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_187fbee8c3f1fbe14ea58295d4588faed4656ef3822935c98937ae0de5aa1b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187fbee8c3f1fbe14ea58295d4588faed4656ef3822935c98937ae0de5aa1b56->enter($__internal_187fbee8c3f1fbe14ea58295d4588faed4656ef3822935c98937ae0de5aa1b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_04b9d57a2c98b748a3fbab7a336bb7d7e12d6e9452e05f1e231c0be6ca8ffbf7->leave($__internal_04b9d57a2c98b748a3fbab7a336bb7d7e12d6e9452e05f1e231c0be6ca8ffbf7_prof);

        
        $__internal_187fbee8c3f1fbe14ea58295d4588faed4656ef3822935c98937ae0de5aa1b56->leave($__internal_187fbee8c3f1fbe14ea58295d4588faed4656ef3822935c98937ae0de5aa1b56_prof);

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
