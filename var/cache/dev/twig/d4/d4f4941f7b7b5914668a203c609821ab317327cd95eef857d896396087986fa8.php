<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_1c75792a26564538c85c0eef8b8b912a5aded647155de2c75ba85466268cda73 extends Twig_Template
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
        $__internal_9b7b955caee7231abb20069a0a04be6f362ed5a1c031e571237cbde629694265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7b955caee7231abb20069a0a04be6f362ed5a1c031e571237cbde629694265->enter($__internal_9b7b955caee7231abb20069a0a04be6f362ed5a1c031e571237cbde629694265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_5d721f434b255ddc0ed6c170380a5d3960be483d3d8f04d04f290b83e0f62337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d721f434b255ddc0ed6c170380a5d3960be483d3d8f04d04f290b83e0f62337->enter($__internal_5d721f434b255ddc0ed6c170380a5d3960be483d3d8f04d04f290b83e0f62337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9b7b955caee7231abb20069a0a04be6f362ed5a1c031e571237cbde629694265->leave($__internal_9b7b955caee7231abb20069a0a04be6f362ed5a1c031e571237cbde629694265_prof);

        
        $__internal_5d721f434b255ddc0ed6c170380a5d3960be483d3d8f04d04f290b83e0f62337->leave($__internal_5d721f434b255ddc0ed6c170380a5d3960be483d3d8f04d04f290b83e0f62337_prof);

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
