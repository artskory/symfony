<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_63fc1d0808c4f7a208be6825e5597cb5954d5de58a6f3e162dddd7bbbf0f591d extends Twig_Template
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
        $__internal_8165fdd62dd6f4584fb2981f8ab03b046a5dd955c44ebbffb889b291953b06bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8165fdd62dd6f4584fb2981f8ab03b046a5dd955c44ebbffb889b291953b06bf->enter($__internal_8165fdd62dd6f4584fb2981f8ab03b046a5dd955c44ebbffb889b291953b06bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d8145ee0bdaa81ed9d769212f5f31c160bc1722516208776802e78bc7f9a9029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8145ee0bdaa81ed9d769212f5f31c160bc1722516208776802e78bc7f9a9029->enter($__internal_d8145ee0bdaa81ed9d769212f5f31c160bc1722516208776802e78bc7f9a9029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8165fdd62dd6f4584fb2981f8ab03b046a5dd955c44ebbffb889b291953b06bf->leave($__internal_8165fdd62dd6f4584fb2981f8ab03b046a5dd955c44ebbffb889b291953b06bf_prof);

        
        $__internal_d8145ee0bdaa81ed9d769212f5f31c160bc1722516208776802e78bc7f9a9029->leave($__internal_d8145ee0bdaa81ed9d769212f5f31c160bc1722516208776802e78bc7f9a9029_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
