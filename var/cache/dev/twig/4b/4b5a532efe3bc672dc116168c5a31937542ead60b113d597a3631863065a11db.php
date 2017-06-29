<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e40da2edc02cffc3a164af7fb25423852d408bd2b5e3d63081be4c0082c7f455 extends Twig_Template
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
        $__internal_bb34ccaaaabf75681fe494a5bb013832613de5d14d384ebc651f76804b9f4862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb34ccaaaabf75681fe494a5bb013832613de5d14d384ebc651f76804b9f4862->enter($__internal_bb34ccaaaabf75681fe494a5bb013832613de5d14d384ebc651f76804b9f4862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2421f241b37963b8953beea9bf7e369150086d0486d2207e7f45774db08bcfc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2421f241b37963b8953beea9bf7e369150086d0486d2207e7f45774db08bcfc5->enter($__internal_2421f241b37963b8953beea9bf7e369150086d0486d2207e7f45774db08bcfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bb34ccaaaabf75681fe494a5bb013832613de5d14d384ebc651f76804b9f4862->leave($__internal_bb34ccaaaabf75681fe494a5bb013832613de5d14d384ebc651f76804b9f4862_prof);

        
        $__internal_2421f241b37963b8953beea9bf7e369150086d0486d2207e7f45774db08bcfc5->leave($__internal_2421f241b37963b8953beea9bf7e369150086d0486d2207e7f45774db08bcfc5_prof);

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
