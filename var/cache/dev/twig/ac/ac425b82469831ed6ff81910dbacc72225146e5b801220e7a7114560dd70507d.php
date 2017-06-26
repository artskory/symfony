<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2f8039de3a087fe335a2ed645cac04ca874421f980c722ff6949e955d3e9114d extends Twig_Template
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
        $__internal_4870bf037563ae50eff0a44692bd5cf321424e63ebaf62f688b1370f724f28cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4870bf037563ae50eff0a44692bd5cf321424e63ebaf62f688b1370f724f28cc->enter($__internal_4870bf037563ae50eff0a44692bd5cf321424e63ebaf62f688b1370f724f28cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_aee81dbcd4f1100b79bcee1c0977668263ad20469af458ba1ce65a40f58ca372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee81dbcd4f1100b79bcee1c0977668263ad20469af458ba1ce65a40f58ca372->enter($__internal_aee81dbcd4f1100b79bcee1c0977668263ad20469af458ba1ce65a40f58ca372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4870bf037563ae50eff0a44692bd5cf321424e63ebaf62f688b1370f724f28cc->leave($__internal_4870bf037563ae50eff0a44692bd5cf321424e63ebaf62f688b1370f724f28cc_prof);

        
        $__internal_aee81dbcd4f1100b79bcee1c0977668263ad20469af458ba1ce65a40f58ca372->leave($__internal_aee81dbcd4f1100b79bcee1c0977668263ad20469af458ba1ce65a40f58ca372_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
