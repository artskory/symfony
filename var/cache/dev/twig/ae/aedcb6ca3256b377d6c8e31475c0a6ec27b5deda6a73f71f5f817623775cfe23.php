<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0e661b60267e7925ff72cfccff190a70f909db4db33761a772d5ed33c7f771c8 extends Twig_Template
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
        $__internal_8e7662e84e3cfd78129cecae97b16a4c461d17765fc40d0687cf8a7204aca641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e7662e84e3cfd78129cecae97b16a4c461d17765fc40d0687cf8a7204aca641->enter($__internal_8e7662e84e3cfd78129cecae97b16a4c461d17765fc40d0687cf8a7204aca641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d288fd59a06d8e58223ac5d535419c81ee4fdf80e9163f67f4727563df6a18d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d288fd59a06d8e58223ac5d535419c81ee4fdf80e9163f67f4727563df6a18d5->enter($__internal_d288fd59a06d8e58223ac5d535419c81ee4fdf80e9163f67f4727563df6a18d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8e7662e84e3cfd78129cecae97b16a4c461d17765fc40d0687cf8a7204aca641->leave($__internal_8e7662e84e3cfd78129cecae97b16a4c461d17765fc40d0687cf8a7204aca641_prof);

        
        $__internal_d288fd59a06d8e58223ac5d535419c81ee4fdf80e9163f67f4727563df6a18d5->leave($__internal_d288fd59a06d8e58223ac5d535419c81ee4fdf80e9163f67f4727563df6a18d5_prof);

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
