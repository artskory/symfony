<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f298a05cb3318cab76346bc8dc3da1fca4b736a4411b0b2a7064e5ffdb95e9ae extends Twig_Template
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
        $__internal_6b6333851b775eb26bd842034dd8a743972c76a5f126b3064fba0845d72442ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b6333851b775eb26bd842034dd8a743972c76a5f126b3064fba0845d72442ec->enter($__internal_6b6333851b775eb26bd842034dd8a743972c76a5f126b3064fba0845d72442ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d021d9fb504e49d6f9da64612ebb86d20b06f399fabbf9dfa81645721942d72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d021d9fb504e49d6f9da64612ebb86d20b06f399fabbf9dfa81645721942d72d->enter($__internal_d021d9fb504e49d6f9da64612ebb86d20b06f399fabbf9dfa81645721942d72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_6b6333851b775eb26bd842034dd8a743972c76a5f126b3064fba0845d72442ec->leave($__internal_6b6333851b775eb26bd842034dd8a743972c76a5f126b3064fba0845d72442ec_prof);

        
        $__internal_d021d9fb504e49d6f9da64612ebb86d20b06f399fabbf9dfa81645721942d72d->leave($__internal_d021d9fb504e49d6f9da64612ebb86d20b06f399fabbf9dfa81645721942d72d_prof);

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
