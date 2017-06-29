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
        $__internal_a9b35f48ad1d5a581e20130c1d0fe7a3ea57f47b8b5011ad6584ff97b1233f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b35f48ad1d5a581e20130c1d0fe7a3ea57f47b8b5011ad6584ff97b1233f25->enter($__internal_a9b35f48ad1d5a581e20130c1d0fe7a3ea57f47b8b5011ad6584ff97b1233f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_a1784da6305569a7c0b6b53cfed4ad1f6fcf01e0c038ef863ed4978d881fdb82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1784da6305569a7c0b6b53cfed4ad1f6fcf01e0c038ef863ed4978d881fdb82->enter($__internal_a1784da6305569a7c0b6b53cfed4ad1f6fcf01e0c038ef863ed4978d881fdb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a9b35f48ad1d5a581e20130c1d0fe7a3ea57f47b8b5011ad6584ff97b1233f25->leave($__internal_a9b35f48ad1d5a581e20130c1d0fe7a3ea57f47b8b5011ad6584ff97b1233f25_prof);

        
        $__internal_a1784da6305569a7c0b6b53cfed4ad1f6fcf01e0c038ef863ed4978d881fdb82->leave($__internal_a1784da6305569a7c0b6b53cfed4ad1f6fcf01e0c038ef863ed4978d881fdb82_prof);

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
