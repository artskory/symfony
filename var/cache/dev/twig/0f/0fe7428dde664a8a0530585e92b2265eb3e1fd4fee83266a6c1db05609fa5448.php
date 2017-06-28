<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_4d9931e4e6d8bc9013ccb1166b09570325d8ac5a15dab901398f5e36359c6e16 extends Twig_Template
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
        $__internal_45a8013c2743860244883ea1b16cea33076f3ee78c79e4f775fccf1ef45aec15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a8013c2743860244883ea1b16cea33076f3ee78c79e4f775fccf1ef45aec15->enter($__internal_45a8013c2743860244883ea1b16cea33076f3ee78c79e4f775fccf1ef45aec15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_64674d5c86dd57e9b022ee2f0ca5e1c6846c6b2c9d903bb3343d5c0969a13256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64674d5c86dd57e9b022ee2f0ca5e1c6846c6b2c9d903bb3343d5c0969a13256->enter($__internal_64674d5c86dd57e9b022ee2f0ca5e1c6846c6b2c9d903bb3343d5c0969a13256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_45a8013c2743860244883ea1b16cea33076f3ee78c79e4f775fccf1ef45aec15->leave($__internal_45a8013c2743860244883ea1b16cea33076f3ee78c79e4f775fccf1ef45aec15_prof);

        
        $__internal_64674d5c86dd57e9b022ee2f0ca5e1c6846c6b2c9d903bb3343d5c0969a13256->leave($__internal_64674d5c86dd57e9b022ee2f0ca5e1c6846c6b2c9d903bb3343d5c0969a13256_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
