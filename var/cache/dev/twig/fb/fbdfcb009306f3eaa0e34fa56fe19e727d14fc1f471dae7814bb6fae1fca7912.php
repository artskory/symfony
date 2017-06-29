<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_4f78aa3e242fc4861a3485ec4d68c4a31701430e4551d670d0e50d4b36838326 extends Twig_Template
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
        $__internal_09fcf4dab6163c6f46b6d30d8e4d698074c48afbc044f974b204e7d3663fbbf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09fcf4dab6163c6f46b6d30d8e4d698074c48afbc044f974b204e7d3663fbbf4->enter($__internal_09fcf4dab6163c6f46b6d30d8e4d698074c48afbc044f974b204e7d3663fbbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6a09b59b3942b453b9e7bff3bc8ec2ab59b4fe83c43492d3a8d77b34a95c8b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a09b59b3942b453b9e7bff3bc8ec2ab59b4fe83c43492d3a8d77b34a95c8b7b->enter($__internal_6a09b59b3942b453b9e7bff3bc8ec2ab59b4fe83c43492d3a8d77b34a95c8b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_09fcf4dab6163c6f46b6d30d8e4d698074c48afbc044f974b204e7d3663fbbf4->leave($__internal_09fcf4dab6163c6f46b6d30d8e4d698074c48afbc044f974b204e7d3663fbbf4_prof);

        
        $__internal_6a09b59b3942b453b9e7bff3bc8ec2ab59b4fe83c43492d3a8d77b34a95c8b7b->leave($__internal_6a09b59b3942b453b9e7bff3bc8ec2ab59b4fe83c43492d3a8d77b34a95c8b7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
