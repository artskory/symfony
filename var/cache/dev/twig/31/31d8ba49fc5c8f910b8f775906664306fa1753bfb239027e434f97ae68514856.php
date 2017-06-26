<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_05151ca90d16151150b4ab8f901902195b957fd2e8adc539d41c1a47d1b12abd extends Twig_Template
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
        $__internal_8d8aac1d205ab83e811f6516be131f798f47efac9a987c10e671916c0b32bc7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d8aac1d205ab83e811f6516be131f798f47efac9a987c10e671916c0b32bc7d->enter($__internal_8d8aac1d205ab83e811f6516be131f798f47efac9a987c10e671916c0b32bc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_f90a3554b26948c572da8c0c0750c60e2657c42aa92bd27d38b1efad105eaef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90a3554b26948c572da8c0c0750c60e2657c42aa92bd27d38b1efad105eaef0->enter($__internal_f90a3554b26948c572da8c0c0750c60e2657c42aa92bd27d38b1efad105eaef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_8d8aac1d205ab83e811f6516be131f798f47efac9a987c10e671916c0b32bc7d->leave($__internal_8d8aac1d205ab83e811f6516be131f798f47efac9a987c10e671916c0b32bc7d_prof);

        
        $__internal_f90a3554b26948c572da8c0c0750c60e2657c42aa92bd27d38b1efad105eaef0->leave($__internal_f90a3554b26948c572da8c0c0750c60e2657c42aa92bd27d38b1efad105eaef0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
