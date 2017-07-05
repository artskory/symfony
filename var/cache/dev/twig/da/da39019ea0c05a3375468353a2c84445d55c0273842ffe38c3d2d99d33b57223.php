<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_bdf31f9426b2a4a15e0f9de62ac3e0d0bcd85f29dff53edf04a3dfad39b79751 extends Twig_Template
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
        $__internal_cf43d4e2b02e1fefcb16973dd68fe8eb0181f4277e9e56e2b1a337d9dfad4bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf43d4e2b02e1fefcb16973dd68fe8eb0181f4277e9e56e2b1a337d9dfad4bd0->enter($__internal_cf43d4e2b02e1fefcb16973dd68fe8eb0181f4277e9e56e2b1a337d9dfad4bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_32b09be85b6dfdb50d42e7f7deb6a2ceacf876bcd88b77510eb5ce909939c13e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b09be85b6dfdb50d42e7f7deb6a2ceacf876bcd88b77510eb5ce909939c13e->enter($__internal_32b09be85b6dfdb50d42e7f7deb6a2ceacf876bcd88b77510eb5ce909939c13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_cf43d4e2b02e1fefcb16973dd68fe8eb0181f4277e9e56e2b1a337d9dfad4bd0->leave($__internal_cf43d4e2b02e1fefcb16973dd68fe8eb0181f4277e9e56e2b1a337d9dfad4bd0_prof);

        
        $__internal_32b09be85b6dfdb50d42e7f7deb6a2ceacf876bcd88b77510eb5ce909939c13e->leave($__internal_32b09be85b6dfdb50d42e7f7deb6a2ceacf876bcd88b77510eb5ce909939c13e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_label.html.php");
    }
}
