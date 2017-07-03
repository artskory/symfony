<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6ef51e9ec643428b8b7cbd0645e895a33ee3e3cba69f8b37dcc96c405f9fb91e extends Twig_Template
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
        $__internal_c0b0a29e644e9b78b56e3b547be6e8f2a178090d14cf6c9d785e013d8c0568b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b0a29e644e9b78b56e3b547be6e8f2a178090d14cf6c9d785e013d8c0568b0->enter($__internal_c0b0a29e644e9b78b56e3b547be6e8f2a178090d14cf6c9d785e013d8c0568b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_0646e6e60f67223ecf0278da64209d48828e883063e9bd3ed328cd62582b2427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0646e6e60f67223ecf0278da64209d48828e883063e9bd3ed328cd62582b2427->enter($__internal_0646e6e60f67223ecf0278da64209d48828e883063e9bd3ed328cd62582b2427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_c0b0a29e644e9b78b56e3b547be6e8f2a178090d14cf6c9d785e013d8c0568b0->leave($__internal_c0b0a29e644e9b78b56e3b547be6e8f2a178090d14cf6c9d785e013d8c0568b0_prof);

        
        $__internal_0646e6e60f67223ecf0278da64209d48828e883063e9bd3ed328cd62582b2427->leave($__internal_0646e6e60f67223ecf0278da64209d48828e883063e9bd3ed328cd62582b2427_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
