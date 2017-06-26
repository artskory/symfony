<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2b1d1ffba66e8f9e8440828838ef16968e0fe06259b2c45b9d41cff430e6fec6 extends Twig_Template
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
        $__internal_8ecee6058b65dcb62898e466710ccb4753966a52b692f7a9eb006d6c75e32023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ecee6058b65dcb62898e466710ccb4753966a52b692f7a9eb006d6c75e32023->enter($__internal_8ecee6058b65dcb62898e466710ccb4753966a52b692f7a9eb006d6c75e32023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_2aea4aac3f14035d5fd475bd3dc1e5c087baae682feae6344d52ff044e5efe69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aea4aac3f14035d5fd475bd3dc1e5c087baae682feae6344d52ff044e5efe69->enter($__internal_2aea4aac3f14035d5fd475bd3dc1e5c087baae682feae6344d52ff044e5efe69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_8ecee6058b65dcb62898e466710ccb4753966a52b692f7a9eb006d6c75e32023->leave($__internal_8ecee6058b65dcb62898e466710ccb4753966a52b692f7a9eb006d6c75e32023_prof);

        
        $__internal_2aea4aac3f14035d5fd475bd3dc1e5c087baae682feae6344d52ff044e5efe69->leave($__internal_2aea4aac3f14035d5fd475bd3dc1e5c087baae682feae6344d52ff044e5efe69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
