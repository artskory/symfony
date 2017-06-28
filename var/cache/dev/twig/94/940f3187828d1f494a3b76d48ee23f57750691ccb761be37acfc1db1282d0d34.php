<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_07ed6bccfc4d655d5e0df4ec13a47e0df70eaa9cd26d14344927c6e42e4c8bc5 extends Twig_Template
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
        $__internal_22e874a3955a603c621d3389196d66d9acb273e6fb056815732cc7494041bafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e874a3955a603c621d3389196d66d9acb273e6fb056815732cc7494041bafb->enter($__internal_22e874a3955a603c621d3389196d66d9acb273e6fb056815732cc7494041bafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_65a83ea321e20248bb6945e2ca7e3936730027d5134da04a70f2cbcbdcbd2b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a83ea321e20248bb6945e2ca7e3936730027d5134da04a70f2cbcbdcbd2b8b->enter($__internal_65a83ea321e20248bb6945e2ca7e3936730027d5134da04a70f2cbcbdcbd2b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_22e874a3955a603c621d3389196d66d9acb273e6fb056815732cc7494041bafb->leave($__internal_22e874a3955a603c621d3389196d66d9acb273e6fb056815732cc7494041bafb_prof);

        
        $__internal_65a83ea321e20248bb6945e2ca7e3936730027d5134da04a70f2cbcbdcbd2b8b->leave($__internal_65a83ea321e20248bb6945e2ca7e3936730027d5134da04a70f2cbcbdcbd2b8b_prof);

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
