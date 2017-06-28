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
        $__internal_f54cca8a231c108bf50e1e32de2ede458b98e19afc2f8e263c0ba2ea99baa74a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f54cca8a231c108bf50e1e32de2ede458b98e19afc2f8e263c0ba2ea99baa74a->enter($__internal_f54cca8a231c108bf50e1e32de2ede458b98e19afc2f8e263c0ba2ea99baa74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a241b26cd1c831cef24a77512d26d5557e952992d8a6728ee4e20852c850dd14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a241b26cd1c831cef24a77512d26d5557e952992d8a6728ee4e20852c850dd14->enter($__internal_a241b26cd1c831cef24a77512d26d5557e952992d8a6728ee4e20852c850dd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f54cca8a231c108bf50e1e32de2ede458b98e19afc2f8e263c0ba2ea99baa74a->leave($__internal_f54cca8a231c108bf50e1e32de2ede458b98e19afc2f8e263c0ba2ea99baa74a_prof);

        
        $__internal_a241b26cd1c831cef24a77512d26d5557e952992d8a6728ee4e20852c850dd14->leave($__internal_a241b26cd1c831cef24a77512d26d5557e952992d8a6728ee4e20852c850dd14_prof);

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
