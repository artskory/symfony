<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_cef0d749491a5eeff3236e3fa256147b09b71548b29cfef330b4a93651df9082 extends Twig_Template
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
        $__internal_1723aca93282c4c7e9eada057370d48f2d4c5488a45bf352498e22a6c9748fce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1723aca93282c4c7e9eada057370d48f2d4c5488a45bf352498e22a6c9748fce->enter($__internal_1723aca93282c4c7e9eada057370d48f2d4c5488a45bf352498e22a6c9748fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_96a76c286434fb48d8ee39c05bdf90bfd828d3023602975edbb2a311417a1439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a76c286434fb48d8ee39c05bdf90bfd828d3023602975edbb2a311417a1439->enter($__internal_96a76c286434fb48d8ee39c05bdf90bfd828d3023602975edbb2a311417a1439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1723aca93282c4c7e9eada057370d48f2d4c5488a45bf352498e22a6c9748fce->leave($__internal_1723aca93282c4c7e9eada057370d48f2d4c5488a45bf352498e22a6c9748fce_prof);

        
        $__internal_96a76c286434fb48d8ee39c05bdf90bfd828d3023602975edbb2a311417a1439->leave($__internal_96a76c286434fb48d8ee39c05bdf90bfd828d3023602975edbb2a311417a1439_prof);

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
