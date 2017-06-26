<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_859fa28498b62522c84356bc9caa3b0a3df20e5446009ba4b473d657a098ad3d extends Twig_Template
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
        $__internal_d845ad624a7ddf236182c6cda6b2b5c00d846b9f6a2c9f2c10b33557b22adedc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d845ad624a7ddf236182c6cda6b2b5c00d846b9f6a2c9f2c10b33557b22adedc->enter($__internal_d845ad624a7ddf236182c6cda6b2b5c00d846b9f6a2c9f2c10b33557b22adedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_bb47502ff66e58021466887fb0aa32ab552115512865e79493d7f73341c10526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb47502ff66e58021466887fb0aa32ab552115512865e79493d7f73341c10526->enter($__internal_bb47502ff66e58021466887fb0aa32ab552115512865e79493d7f73341c10526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d845ad624a7ddf236182c6cda6b2b5c00d846b9f6a2c9f2c10b33557b22adedc->leave($__internal_d845ad624a7ddf236182c6cda6b2b5c00d846b9f6a2c9f2c10b33557b22adedc_prof);

        
        $__internal_bb47502ff66e58021466887fb0aa32ab552115512865e79493d7f73341c10526->leave($__internal_bb47502ff66e58021466887fb0aa32ab552115512865e79493d7f73341c10526_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
