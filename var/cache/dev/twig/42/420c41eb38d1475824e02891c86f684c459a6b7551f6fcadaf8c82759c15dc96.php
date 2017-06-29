<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_19f42dffd20191f31d7fb94012297447c754f856a4840d1c2f89722b5fbd657b extends Twig_Template
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
        $__internal_4f63532009f02833cc1b53f279bf641dcd7c053bf3afb5966bbef941854e246b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f63532009f02833cc1b53f279bf641dcd7c053bf3afb5966bbef941854e246b->enter($__internal_4f63532009f02833cc1b53f279bf641dcd7c053bf3afb5966bbef941854e246b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a0a9a80e73948cbc39437f445017f38b6e36a1f041e6133197c915e6a7175f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a9a80e73948cbc39437f445017f38b6e36a1f041e6133197c915e6a7175f7e->enter($__internal_a0a9a80e73948cbc39437f445017f38b6e36a1f041e6133197c915e6a7175f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4f63532009f02833cc1b53f279bf641dcd7c053bf3afb5966bbef941854e246b->leave($__internal_4f63532009f02833cc1b53f279bf641dcd7c053bf3afb5966bbef941854e246b_prof);

        
        $__internal_a0a9a80e73948cbc39437f445017f38b6e36a1f041e6133197c915e6a7175f7e->leave($__internal_a0a9a80e73948cbc39437f445017f38b6e36a1f041e6133197c915e6a7175f7e_prof);

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
