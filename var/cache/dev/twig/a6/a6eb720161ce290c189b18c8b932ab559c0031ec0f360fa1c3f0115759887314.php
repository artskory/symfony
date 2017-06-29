<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3c09faf9c6ef140d7126ff42a81e373fcc64017bc785fddcab858eb7eff13331 extends Twig_Template
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
        $__internal_70fdc6c6913a636d64a950d6e56b7bc4f97dd1dbb92be2b4e9c8f17f18d098a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70fdc6c6913a636d64a950d6e56b7bc4f97dd1dbb92be2b4e9c8f17f18d098a5->enter($__internal_70fdc6c6913a636d64a950d6e56b7bc4f97dd1dbb92be2b4e9c8f17f18d098a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_5f879929f1f5ea3eefd708ee11a2a7a2ba5175301433a34ed740eab077649cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f879929f1f5ea3eefd708ee11a2a7a2ba5175301433a34ed740eab077649cf9->enter($__internal_5f879929f1f5ea3eefd708ee11a2a7a2ba5175301433a34ed740eab077649cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_70fdc6c6913a636d64a950d6e56b7bc4f97dd1dbb92be2b4e9c8f17f18d098a5->leave($__internal_70fdc6c6913a636d64a950d6e56b7bc4f97dd1dbb92be2b4e9c8f17f18d098a5_prof);

        
        $__internal_5f879929f1f5ea3eefd708ee11a2a7a2ba5175301433a34ed740eab077649cf9->leave($__internal_5f879929f1f5ea3eefd708ee11a2a7a2ba5175301433a34ed740eab077649cf9_prof);

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
