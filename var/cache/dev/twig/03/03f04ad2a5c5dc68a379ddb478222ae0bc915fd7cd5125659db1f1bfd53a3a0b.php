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
        $__internal_82dfe0d53648c397531eb6a2d00e1ca851db76f739f640e7722e6c422803682a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82dfe0d53648c397531eb6a2d00e1ca851db76f739f640e7722e6c422803682a->enter($__internal_82dfe0d53648c397531eb6a2d00e1ca851db76f739f640e7722e6c422803682a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_cc603737e8eaa6c0f882d67ec6e27a5c3dfddf5527836aa43bf891902468281f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc603737e8eaa6c0f882d67ec6e27a5c3dfddf5527836aa43bf891902468281f->enter($__internal_cc603737e8eaa6c0f882d67ec6e27a5c3dfddf5527836aa43bf891902468281f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_82dfe0d53648c397531eb6a2d00e1ca851db76f739f640e7722e6c422803682a->leave($__internal_82dfe0d53648c397531eb6a2d00e1ca851db76f739f640e7722e6c422803682a_prof);

        
        $__internal_cc603737e8eaa6c0f882d67ec6e27a5c3dfddf5527836aa43bf891902468281f->leave($__internal_cc603737e8eaa6c0f882d67ec6e27a5c3dfddf5527836aa43bf891902468281f_prof);

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
