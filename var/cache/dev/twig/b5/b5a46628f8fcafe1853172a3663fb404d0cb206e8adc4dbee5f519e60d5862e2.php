<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_25ec13e89e2855104038fd2fa4ff2dac145d096cba47cff79316969a91e27a80 extends Twig_Template
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
        $__internal_cc3b148163643ad0fa677c545dc6355db0a92ffd5e64c987380e67d9d437d94e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc3b148163643ad0fa677c545dc6355db0a92ffd5e64c987380e67d9d437d94e->enter($__internal_cc3b148163643ad0fa677c545dc6355db0a92ffd5e64c987380e67d9d437d94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d284edf2d6a3a21d3f43698fabb306595c401da3259700562681c51754a50913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d284edf2d6a3a21d3f43698fabb306595c401da3259700562681c51754a50913->enter($__internal_d284edf2d6a3a21d3f43698fabb306595c401da3259700562681c51754a50913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_cc3b148163643ad0fa677c545dc6355db0a92ffd5e64c987380e67d9d437d94e->leave($__internal_cc3b148163643ad0fa677c545dc6355db0a92ffd5e64c987380e67d9d437d94e_prof);

        
        $__internal_d284edf2d6a3a21d3f43698fabb306595c401da3259700562681c51754a50913->leave($__internal_d284edf2d6a3a21d3f43698fabb306595c401da3259700562681c51754a50913_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}