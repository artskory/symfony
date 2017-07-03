<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_54ac5b8589423f0ed07d030d9e043130fb7a898a9cdcb3b38aa7c238be3d5835 extends Twig_Template
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
        $__internal_90b329d3fa63997f9dbfdb1d0a802cd94ef0ec8ba57a4586ff180fd98a679159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90b329d3fa63997f9dbfdb1d0a802cd94ef0ec8ba57a4586ff180fd98a679159->enter($__internal_90b329d3fa63997f9dbfdb1d0a802cd94ef0ec8ba57a4586ff180fd98a679159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_3517753e3d6c0561452b5e9b49052101531769f44afd2d4b5bd4666a31782332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3517753e3d6c0561452b5e9b49052101531769f44afd2d4b5bd4666a31782332->enter($__internal_3517753e3d6c0561452b5e9b49052101531769f44afd2d4b5bd4666a31782332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_90b329d3fa63997f9dbfdb1d0a802cd94ef0ec8ba57a4586ff180fd98a679159->leave($__internal_90b329d3fa63997f9dbfdb1d0a802cd94ef0ec8ba57a4586ff180fd98a679159_prof);

        
        $__internal_3517753e3d6c0561452b5e9b49052101531769f44afd2d4b5bd4666a31782332->leave($__internal_3517753e3d6c0561452b5e9b49052101531769f44afd2d4b5bd4666a31782332_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
