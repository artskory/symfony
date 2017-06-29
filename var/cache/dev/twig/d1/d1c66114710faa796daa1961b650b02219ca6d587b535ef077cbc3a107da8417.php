<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_b8fe9a743856b541e8ba4dcc32cb7692d74b0d2c289fe41aac7b89a8c99e1496 extends Twig_Template
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
        $__internal_a28a41a325f42e200402196968642617e91b2c22733ecaba97be9b5ae0e5ee42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a28a41a325f42e200402196968642617e91b2c22733ecaba97be9b5ae0e5ee42->enter($__internal_a28a41a325f42e200402196968642617e91b2c22733ecaba97be9b5ae0e5ee42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_8d0d8b0e07248ab3b8d58d3d866510e3c060696d754f0a40785f5689554bf299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0d8b0e07248ab3b8d58d3d866510e3c060696d754f0a40785f5689554bf299->enter($__internal_8d0d8b0e07248ab3b8d58d3d866510e3c060696d754f0a40785f5689554bf299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_a28a41a325f42e200402196968642617e91b2c22733ecaba97be9b5ae0e5ee42->leave($__internal_a28a41a325f42e200402196968642617e91b2c22733ecaba97be9b5ae0e5ee42_prof);

        
        $__internal_8d0d8b0e07248ab3b8d58d3d866510e3c060696d754f0a40785f5689554bf299->leave($__internal_8d0d8b0e07248ab3b8d58d3d866510e3c060696d754f0a40785f5689554bf299_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
