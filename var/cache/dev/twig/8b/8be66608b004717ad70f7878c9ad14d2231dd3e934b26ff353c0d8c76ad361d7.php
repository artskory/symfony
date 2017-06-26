<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_eb2b32c6b8bb39cededffb89da090f1bd493170840f33ab100ab02918bbc47d3 extends Twig_Template
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
        $__internal_2511d4d44210317cd6e3172eb22f96f01482db74890e94e62304b93a93e4e165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2511d4d44210317cd6e3172eb22f96f01482db74890e94e62304b93a93e4e165->enter($__internal_2511d4d44210317cd6e3172eb22f96f01482db74890e94e62304b93a93e4e165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_48a387dcf8a2c22193fdcc123b6abe613508c017cdf77944baa5aea692808246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a387dcf8a2c22193fdcc123b6abe613508c017cdf77944baa5aea692808246->enter($__internal_48a387dcf8a2c22193fdcc123b6abe613508c017cdf77944baa5aea692808246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2511d4d44210317cd6e3172eb22f96f01482db74890e94e62304b93a93e4e165->leave($__internal_2511d4d44210317cd6e3172eb22f96f01482db74890e94e62304b93a93e4e165_prof);

        
        $__internal_48a387dcf8a2c22193fdcc123b6abe613508c017cdf77944baa5aea692808246->leave($__internal_48a387dcf8a2c22193fdcc123b6abe613508c017cdf77944baa5aea692808246_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
