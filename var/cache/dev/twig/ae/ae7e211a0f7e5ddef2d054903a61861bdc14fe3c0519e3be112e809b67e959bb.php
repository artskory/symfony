<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_ef7eebaafeeca0ed88aa457bdc4826b35b7e0ccff3b768bdfce66f6a8758b0fd extends Twig_Template
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
        $__internal_d8d2b33567d0baa6451036faf572b7d86b9093991ac6ccf701714b9c1add1556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d2b33567d0baa6451036faf572b7d86b9093991ac6ccf701714b9c1add1556->enter($__internal_d8d2b33567d0baa6451036faf572b7d86b9093991ac6ccf701714b9c1add1556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_b608e47d9360f7aab785175f6e2aa711aeb2d76e222ff43428fee8e00ac9cf66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b608e47d9360f7aab785175f6e2aa711aeb2d76e222ff43428fee8e00ac9cf66->enter($__internal_b608e47d9360f7aab785175f6e2aa711aeb2d76e222ff43428fee8e00ac9cf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d8d2b33567d0baa6451036faf572b7d86b9093991ac6ccf701714b9c1add1556->leave($__internal_d8d2b33567d0baa6451036faf572b7d86b9093991ac6ccf701714b9c1add1556_prof);

        
        $__internal_b608e47d9360f7aab785175f6e2aa711aeb2d76e222ff43428fee8e00ac9cf66->leave($__internal_b608e47d9360f7aab785175f6e2aa711aeb2d76e222ff43428fee8e00ac9cf66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
