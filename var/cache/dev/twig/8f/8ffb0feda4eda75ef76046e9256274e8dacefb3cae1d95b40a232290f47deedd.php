<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d338e064d36d480d5411e6ba9a4de303d062a00b920e0b4dfe394ebff33b0282 extends Twig_Template
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
        $__internal_bd49cac4299b98a1c0769b50560f5f121cc95cb329bc0f2d6f03c1f23d872da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd49cac4299b98a1c0769b50560f5f121cc95cb329bc0f2d6f03c1f23d872da3->enter($__internal_bd49cac4299b98a1c0769b50560f5f121cc95cb329bc0f2d6f03c1f23d872da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2d6b26066e12e31fdbc6037874de10845e4a85f7401feec08022db94fa895404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6b26066e12e31fdbc6037874de10845e4a85f7401feec08022db94fa895404->enter($__internal_2d6b26066e12e31fdbc6037874de10845e4a85f7401feec08022db94fa895404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bd49cac4299b98a1c0769b50560f5f121cc95cb329bc0f2d6f03c1f23d872da3->leave($__internal_bd49cac4299b98a1c0769b50560f5f121cc95cb329bc0f2d6f03c1f23d872da3_prof);

        
        $__internal_2d6b26066e12e31fdbc6037874de10845e4a85f7401feec08022db94fa895404->leave($__internal_2d6b26066e12e31fdbc6037874de10845e4a85f7401feec08022db94fa895404_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
