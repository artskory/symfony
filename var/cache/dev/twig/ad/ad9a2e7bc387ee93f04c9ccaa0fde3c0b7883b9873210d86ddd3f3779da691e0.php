<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_c572855406e15cc85a7d9baefb5d29a71b37e41ea5e80efa5f6eabf3e730fa71 extends Twig_Template
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
        $__internal_59221bf0c0e0cc902450b9034283da1313b162bd64ac9fd901ddd925271dfead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59221bf0c0e0cc902450b9034283da1313b162bd64ac9fd901ddd925271dfead->enter($__internal_59221bf0c0e0cc902450b9034283da1313b162bd64ac9fd901ddd925271dfead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_3d93db1b39ae5789724a89c98db97cf80d23252a7ea08a1e3e4bd8cbc040af30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d93db1b39ae5789724a89c98db97cf80d23252a7ea08a1e3e4bd8cbc040af30->enter($__internal_3d93db1b39ae5789724a89c98db97cf80d23252a7ea08a1e3e4bd8cbc040af30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_59221bf0c0e0cc902450b9034283da1313b162bd64ac9fd901ddd925271dfead->leave($__internal_59221bf0c0e0cc902450b9034283da1313b162bd64ac9fd901ddd925271dfead_prof);

        
        $__internal_3d93db1b39ae5789724a89c98db97cf80d23252a7ea08a1e3e4bd8cbc040af30->leave($__internal_3d93db1b39ae5789724a89c98db97cf80d23252a7ea08a1e3e4bd8cbc040af30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
