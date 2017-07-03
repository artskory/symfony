<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_df76e9ac2674be916abd0510583adfe0955a2af5f241c52878968fb910a4186c extends Twig_Template
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
        $__internal_990ed87dea88458ca6b51dcfb00f2a2614263bbeb38314b3cfffa659c8c2fc93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_990ed87dea88458ca6b51dcfb00f2a2614263bbeb38314b3cfffa659c8c2fc93->enter($__internal_990ed87dea88458ca6b51dcfb00f2a2614263bbeb38314b3cfffa659c8c2fc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_612bbad2b2ab82475f68f67401d1b97b090382ad9fdc24d3641f589fa795390e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612bbad2b2ab82475f68f67401d1b97b090382ad9fdc24d3641f589fa795390e->enter($__internal_612bbad2b2ab82475f68f67401d1b97b090382ad9fdc24d3641f589fa795390e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_990ed87dea88458ca6b51dcfb00f2a2614263bbeb38314b3cfffa659c8c2fc93->leave($__internal_990ed87dea88458ca6b51dcfb00f2a2614263bbeb38314b3cfffa659c8c2fc93_prof);

        
        $__internal_612bbad2b2ab82475f68f67401d1b97b090382ad9fdc24d3641f589fa795390e->leave($__internal_612bbad2b2ab82475f68f67401d1b97b090382ad9fdc24d3641f589fa795390e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
