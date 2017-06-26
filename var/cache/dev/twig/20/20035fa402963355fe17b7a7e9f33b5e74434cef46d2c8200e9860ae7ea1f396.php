<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_c20142ff23f4f97d1bd820092e21fab1dee5dee796887ed20ef8dca9ae9317ec extends Twig_Template
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
        $__internal_6cb7386be6213d3e957ee4289b91cd640c929328b60ff9eaa17763a34d480695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb7386be6213d3e957ee4289b91cd640c929328b60ff9eaa17763a34d480695->enter($__internal_6cb7386be6213d3e957ee4289b91cd640c929328b60ff9eaa17763a34d480695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_eea44764d2590d2365c97ce68d5e2792625589433d143213b60c5b9275ba5a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea44764d2590d2365c97ce68d5e2792625589433d143213b60c5b9275ba5a47->enter($__internal_eea44764d2590d2365c97ce68d5e2792625589433d143213b60c5b9275ba5a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_6cb7386be6213d3e957ee4289b91cd640c929328b60ff9eaa17763a34d480695->leave($__internal_6cb7386be6213d3e957ee4289b91cd640c929328b60ff9eaa17763a34d480695_prof);

        
        $__internal_eea44764d2590d2365c97ce68d5e2792625589433d143213b60c5b9275ba5a47->leave($__internal_eea44764d2590d2365c97ce68d5e2792625589433d143213b60c5b9275ba5a47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
