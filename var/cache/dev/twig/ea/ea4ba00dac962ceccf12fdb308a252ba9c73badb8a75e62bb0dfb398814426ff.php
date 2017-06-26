<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_abf063c762b63a028d72506b4d0acb9660f7665b6b26f33ae1f17aabf34cd6bc extends Twig_Template
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
        $__internal_2ec789190120f9676b94879f4b96a665975dbdec6735789c309b3803b4ac2c8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec789190120f9676b94879f4b96a665975dbdec6735789c309b3803b4ac2c8f->enter($__internal_2ec789190120f9676b94879f4b96a665975dbdec6735789c309b3803b4ac2c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5e30f17a4ca613f3df9e86772d072dbeb044700d84987c3932d318456f56485e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e30f17a4ca613f3df9e86772d072dbeb044700d84987c3932d318456f56485e->enter($__internal_5e30f17a4ca613f3df9e86772d072dbeb044700d84987c3932d318456f56485e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2ec789190120f9676b94879f4b96a665975dbdec6735789c309b3803b4ac2c8f->leave($__internal_2ec789190120f9676b94879f4b96a665975dbdec6735789c309b3803b4ac2c8f_prof);

        
        $__internal_5e30f17a4ca613f3df9e86772d072dbeb044700d84987c3932d318456f56485e->leave($__internal_5e30f17a4ca613f3df9e86772d072dbeb044700d84987c3932d318456f56485e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
