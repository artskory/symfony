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
        $__internal_869a0af5e91fe5e8477f062acd17baad0848b37a4c1897763b937953a6f96c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869a0af5e91fe5e8477f062acd17baad0848b37a4c1897763b937953a6f96c5f->enter($__internal_869a0af5e91fe5e8477f062acd17baad0848b37a4c1897763b937953a6f96c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_2d3c89396a119b7df12444a62103020b517e75b73c52f62c9b4e9c2d15abe560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3c89396a119b7df12444a62103020b517e75b73c52f62c9b4e9c2d15abe560->enter($__internal_2d3c89396a119b7df12444a62103020b517e75b73c52f62c9b4e9c2d15abe560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_869a0af5e91fe5e8477f062acd17baad0848b37a4c1897763b937953a6f96c5f->leave($__internal_869a0af5e91fe5e8477f062acd17baad0848b37a4c1897763b937953a6f96c5f_prof);

        
        $__internal_2d3c89396a119b7df12444a62103020b517e75b73c52f62c9b4e9c2d15abe560->leave($__internal_2d3c89396a119b7df12444a62103020b517e75b73c52f62c9b4e9c2d15abe560_prof);

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
