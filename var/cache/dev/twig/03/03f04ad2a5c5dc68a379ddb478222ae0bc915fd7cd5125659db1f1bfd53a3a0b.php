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
        $__internal_80036be2e0cef9605b93dc3281ba8637bf69fd196eb2873e1bab01001065bfbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80036be2e0cef9605b93dc3281ba8637bf69fd196eb2873e1bab01001065bfbc->enter($__internal_80036be2e0cef9605b93dc3281ba8637bf69fd196eb2873e1bab01001065bfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_97e44bb09f5fefc99eced4a52f92ee2f1872cc0105ff830d751f5058af43adbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e44bb09f5fefc99eced4a52f92ee2f1872cc0105ff830d751f5058af43adbd->enter($__internal_97e44bb09f5fefc99eced4a52f92ee2f1872cc0105ff830d751f5058af43adbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_80036be2e0cef9605b93dc3281ba8637bf69fd196eb2873e1bab01001065bfbc->leave($__internal_80036be2e0cef9605b93dc3281ba8637bf69fd196eb2873e1bab01001065bfbc_prof);

        
        $__internal_97e44bb09f5fefc99eced4a52f92ee2f1872cc0105ff830d751f5058af43adbd->leave($__internal_97e44bb09f5fefc99eced4a52f92ee2f1872cc0105ff830d751f5058af43adbd_prof);

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
