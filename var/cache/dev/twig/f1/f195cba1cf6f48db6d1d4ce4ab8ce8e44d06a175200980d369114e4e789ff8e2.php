<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_badeef15397a610fb69d426f4b14cd57477c6e0f589685d34c6f24d8966d822f extends Twig_Template
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
        $__internal_10287686645ec826f0e74c132defb9408110ddd84de2394118ace5002c505c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10287686645ec826f0e74c132defb9408110ddd84de2394118ace5002c505c15->enter($__internal_10287686645ec826f0e74c132defb9408110ddd84de2394118ace5002c505c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d03c1f10244d2e2c07075588463392de8b58d4eb6989cc709e9d164cb88b04cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03c1f10244d2e2c07075588463392de8b58d4eb6989cc709e9d164cb88b04cf->enter($__internal_d03c1f10244d2e2c07075588463392de8b58d4eb6989cc709e9d164cb88b04cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_10287686645ec826f0e74c132defb9408110ddd84de2394118ace5002c505c15->leave($__internal_10287686645ec826f0e74c132defb9408110ddd84de2394118ace5002c505c15_prof);

        
        $__internal_d03c1f10244d2e2c07075588463392de8b58d4eb6989cc709e9d164cb88b04cf->leave($__internal_d03c1f10244d2e2c07075588463392de8b58d4eb6989cc709e9d164cb88b04cf_prof);

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
