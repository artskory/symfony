<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b0e38b3014c2a1295cec91f3739aa6b1c23c93216676815b15f4b6fae4e8cfad extends Twig_Template
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
        $__internal_6b29d70b0a49f2377e98f0ba8857ef23c5191a04bb0b9a86b92728f114321299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b29d70b0a49f2377e98f0ba8857ef23c5191a04bb0b9a86b92728f114321299->enter($__internal_6b29d70b0a49f2377e98f0ba8857ef23c5191a04bb0b9a86b92728f114321299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_fdb9adc8ef62ea1a8cbf75aa926e8ba314117b21de4647ebae40896d7104e5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdb9adc8ef62ea1a8cbf75aa926e8ba314117b21de4647ebae40896d7104e5e8->enter($__internal_fdb9adc8ef62ea1a8cbf75aa926e8ba314117b21de4647ebae40896d7104e5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6b29d70b0a49f2377e98f0ba8857ef23c5191a04bb0b9a86b92728f114321299->leave($__internal_6b29d70b0a49f2377e98f0ba8857ef23c5191a04bb0b9a86b92728f114321299_prof);

        
        $__internal_fdb9adc8ef62ea1a8cbf75aa926e8ba314117b21de4647ebae40896d7104e5e8->leave($__internal_fdb9adc8ef62ea1a8cbf75aa926e8ba314117b21de4647ebae40896d7104e5e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
