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
        $__internal_f4e747a355f61236dde9763b2fcb0de363f516adc72f551555f9254cf47f9bd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e747a355f61236dde9763b2fcb0de363f516adc72f551555f9254cf47f9bd1->enter($__internal_f4e747a355f61236dde9763b2fcb0de363f516adc72f551555f9254cf47f9bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_dd33e69c2a3cedcb3d26e4a004cfa8878c456e68904f157a19be6fec5d7de891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd33e69c2a3cedcb3d26e4a004cfa8878c456e68904f157a19be6fec5d7de891->enter($__internal_dd33e69c2a3cedcb3d26e4a004cfa8878c456e68904f157a19be6fec5d7de891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f4e747a355f61236dde9763b2fcb0de363f516adc72f551555f9254cf47f9bd1->leave($__internal_f4e747a355f61236dde9763b2fcb0de363f516adc72f551555f9254cf47f9bd1_prof);

        
        $__internal_dd33e69c2a3cedcb3d26e4a004cfa8878c456e68904f157a19be6fec5d7de891->leave($__internal_dd33e69c2a3cedcb3d26e4a004cfa8878c456e68904f157a19be6fec5d7de891_prof);

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
