<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_78efcf6c85b8f9bb607a2d3dc3bd0c6dba25235915e702bd8496ff44ddb2a4e5 extends Twig_Template
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
        $__internal_657a5eaef3c90c4782807c5dea47500f96466c36fc7a8b744273192dd0421874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657a5eaef3c90c4782807c5dea47500f96466c36fc7a8b744273192dd0421874->enter($__internal_657a5eaef3c90c4782807c5dea47500f96466c36fc7a8b744273192dd0421874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_cdfd1443e9008f047aab7b9050866ad967edd906dd3c37ddd87c2e4c781a6e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdfd1443e9008f047aab7b9050866ad967edd906dd3c37ddd87c2e4c781a6e4e->enter($__internal_cdfd1443e9008f047aab7b9050866ad967edd906dd3c37ddd87c2e4c781a6e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_657a5eaef3c90c4782807c5dea47500f96466c36fc7a8b744273192dd0421874->leave($__internal_657a5eaef3c90c4782807c5dea47500f96466c36fc7a8b744273192dd0421874_prof);

        
        $__internal_cdfd1443e9008f047aab7b9050866ad967edd906dd3c37ddd87c2e4c781a6e4e->leave($__internal_cdfd1443e9008f047aab7b9050866ad967edd906dd3c37ddd87c2e4c781a6e4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
