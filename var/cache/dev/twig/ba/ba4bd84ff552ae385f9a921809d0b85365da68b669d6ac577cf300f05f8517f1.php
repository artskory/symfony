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
        $__internal_b70335a833b5437665b62f23bb410fcb3fbfb1c70aa5f2e5456b032ceb411313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70335a833b5437665b62f23bb410fcb3fbfb1c70aa5f2e5456b032ceb411313->enter($__internal_b70335a833b5437665b62f23bb410fcb3fbfb1c70aa5f2e5456b032ceb411313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_63e0f58c29f4fee4d79eea9724ea1348053a962cf399fb94dd50e116d51f6bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e0f58c29f4fee4d79eea9724ea1348053a962cf399fb94dd50e116d51f6bb6->enter($__internal_63e0f58c29f4fee4d79eea9724ea1348053a962cf399fb94dd50e116d51f6bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b70335a833b5437665b62f23bb410fcb3fbfb1c70aa5f2e5456b032ceb411313->leave($__internal_b70335a833b5437665b62f23bb410fcb3fbfb1c70aa5f2e5456b032ceb411313_prof);

        
        $__internal_63e0f58c29f4fee4d79eea9724ea1348053a962cf399fb94dd50e116d51f6bb6->leave($__internal_63e0f58c29f4fee4d79eea9724ea1348053a962cf399fb94dd50e116d51f6bb6_prof);

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
