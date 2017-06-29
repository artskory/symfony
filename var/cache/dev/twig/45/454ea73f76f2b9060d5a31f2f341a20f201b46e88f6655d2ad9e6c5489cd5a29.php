<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3599f0f41a73b2e0440226334f043031a4ccb528838bc00dd538e3cb960119cc extends Twig_Template
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
        $__internal_30fea31f3b74eaab000d881d8d7186f64dbb0328f03c6127ae494e793a806def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30fea31f3b74eaab000d881d8d7186f64dbb0328f03c6127ae494e793a806def->enter($__internal_30fea31f3b74eaab000d881d8d7186f64dbb0328f03c6127ae494e793a806def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_c1bec4d7548c2e0d1bfcfff08174cecfdd0f0bd292dfb7314d2316795e064f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1bec4d7548c2e0d1bfcfff08174cecfdd0f0bd292dfb7314d2316795e064f9c->enter($__internal_c1bec4d7548c2e0d1bfcfff08174cecfdd0f0bd292dfb7314d2316795e064f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_30fea31f3b74eaab000d881d8d7186f64dbb0328f03c6127ae494e793a806def->leave($__internal_30fea31f3b74eaab000d881d8d7186f64dbb0328f03c6127ae494e793a806def_prof);

        
        $__internal_c1bec4d7548c2e0d1bfcfff08174cecfdd0f0bd292dfb7314d2316795e064f9c->leave($__internal_c1bec4d7548c2e0d1bfcfff08174cecfdd0f0bd292dfb7314d2316795e064f9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
