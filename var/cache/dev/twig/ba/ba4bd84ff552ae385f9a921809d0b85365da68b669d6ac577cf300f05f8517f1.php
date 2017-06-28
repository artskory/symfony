<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_482a4ff973cfe827e6801ccab43a75c27913f1b45400ead8ff26b28c61f806f1 extends Twig_Template
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
        $__internal_7a34a63b16fb371d71fc91be91aee7c47742e96fb288825297537d4b821b438e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a34a63b16fb371d71fc91be91aee7c47742e96fb288825297537d4b821b438e->enter($__internal_7a34a63b16fb371d71fc91be91aee7c47742e96fb288825297537d4b821b438e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_ce77d93f449e333030d00bc7445d155e2df93d8ea9ab54cb41a419fb99f419c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce77d93f449e333030d00bc7445d155e2df93d8ea9ab54cb41a419fb99f419c8->enter($__internal_ce77d93f449e333030d00bc7445d155e2df93d8ea9ab54cb41a419fb99f419c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7a34a63b16fb371d71fc91be91aee7c47742e96fb288825297537d4b821b438e->leave($__internal_7a34a63b16fb371d71fc91be91aee7c47742e96fb288825297537d4b821b438e_prof);

        
        $__internal_ce77d93f449e333030d00bc7445d155e2df93d8ea9ab54cb41a419fb99f419c8->leave($__internal_ce77d93f449e333030d00bc7445d155e2df93d8ea9ab54cb41a419fb99f419c8_prof);

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
