<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_004fea1d96145ee636e3309ede7a446c99ac5e9d6383a0838968e892c788e0c8 extends Twig_Template
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
        $__internal_de9ca34fdfe6252ecc853aa012b5efb863bd4bb2c7ad5614fbee415904a3b7db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de9ca34fdfe6252ecc853aa012b5efb863bd4bb2c7ad5614fbee415904a3b7db->enter($__internal_de9ca34fdfe6252ecc853aa012b5efb863bd4bb2c7ad5614fbee415904a3b7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_065cacda1fb260e53308ece9a7cc35924e89ff88096ee050608a208f2fd67fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065cacda1fb260e53308ece9a7cc35924e89ff88096ee050608a208f2fd67fb1->enter($__internal_065cacda1fb260e53308ece9a7cc35924e89ff88096ee050608a208f2fd67fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_de9ca34fdfe6252ecc853aa012b5efb863bd4bb2c7ad5614fbee415904a3b7db->leave($__internal_de9ca34fdfe6252ecc853aa012b5efb863bd4bb2c7ad5614fbee415904a3b7db_prof);

        
        $__internal_065cacda1fb260e53308ece9a7cc35924e89ff88096ee050608a208f2fd67fb1->leave($__internal_065cacda1fb260e53308ece9a7cc35924e89ff88096ee050608a208f2fd67fb1_prof);

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
