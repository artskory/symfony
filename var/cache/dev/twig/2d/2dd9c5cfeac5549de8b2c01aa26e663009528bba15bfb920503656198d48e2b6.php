<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_7d8ed9ab729cdf898cb3f2246cbe34992c20dae3bb3f74854d5869e4feeedf7b extends Twig_Template
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
        $__internal_790fc46d01c4dc5c0cca6b551d36494cb2bca3ea73ae1ed99acdea0f51a3a9b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790fc46d01c4dc5c0cca6b551d36494cb2bca3ea73ae1ed99acdea0f51a3a9b5->enter($__internal_790fc46d01c4dc5c0cca6b551d36494cb2bca3ea73ae1ed99acdea0f51a3a9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_0de55582023455d365d5114b80b38108635bdfd2a9d206d14e88081354733d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de55582023455d365d5114b80b38108635bdfd2a9d206d14e88081354733d53->enter($__internal_0de55582023455d365d5114b80b38108635bdfd2a9d206d14e88081354733d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_790fc46d01c4dc5c0cca6b551d36494cb2bca3ea73ae1ed99acdea0f51a3a9b5->leave($__internal_790fc46d01c4dc5c0cca6b551d36494cb2bca3ea73ae1ed99acdea0f51a3a9b5_prof);

        
        $__internal_0de55582023455d365d5114b80b38108635bdfd2a9d206d14e88081354733d53->leave($__internal_0de55582023455d365d5114b80b38108635bdfd2a9d206d14e88081354733d53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
