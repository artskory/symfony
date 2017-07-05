<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_70133f293cd5fc8956c329b1c69988cf99842d5fccf9d06781ea9866d2f659f8 extends Twig_Template
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
        $__internal_87d03344e37e686607a906bb258662b01f5b8e2c07435158bd2353bcce3c429c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87d03344e37e686607a906bb258662b01f5b8e2c07435158bd2353bcce3c429c->enter($__internal_87d03344e37e686607a906bb258662b01f5b8e2c07435158bd2353bcce3c429c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_4b1b7a2b7be22e47bec166e25ab38f80cc2b11b9280251c2e7d9815faf0ec6c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1b7a2b7be22e47bec166e25ab38f80cc2b11b9280251c2e7d9815faf0ec6c9->enter($__internal_4b1b7a2b7be22e47bec166e25ab38f80cc2b11b9280251c2e7d9815faf0ec6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_87d03344e37e686607a906bb258662b01f5b8e2c07435158bd2353bcce3c429c->leave($__internal_87d03344e37e686607a906bb258662b01f5b8e2c07435158bd2353bcce3c429c_prof);

        
        $__internal_4b1b7a2b7be22e47bec166e25ab38f80cc2b11b9280251c2e7d9815faf0ec6c9->leave($__internal_4b1b7a2b7be22e47bec166e25ab38f80cc2b11b9280251c2e7d9815faf0ec6c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
