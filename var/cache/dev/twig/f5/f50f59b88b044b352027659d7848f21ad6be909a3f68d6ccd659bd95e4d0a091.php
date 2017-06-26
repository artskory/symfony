<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_85dd107dac03774cdade834c09bf3ec2a72bb61d970d80ed23be9c94f1f7f617 extends Twig_Template
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
        $__internal_66174c0e59f6b385c34640d0d1a91705d7d424a44477720bcf88bd12df02b8d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66174c0e59f6b385c34640d0d1a91705d7d424a44477720bcf88bd12df02b8d8->enter($__internal_66174c0e59f6b385c34640d0d1a91705d7d424a44477720bcf88bd12df02b8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_5198ecdeaaa2457b3501b514ff48c0a9769ea03665580f730444036cf038fd66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5198ecdeaaa2457b3501b514ff48c0a9769ea03665580f730444036cf038fd66->enter($__internal_5198ecdeaaa2457b3501b514ff48c0a9769ea03665580f730444036cf038fd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_66174c0e59f6b385c34640d0d1a91705d7d424a44477720bcf88bd12df02b8d8->leave($__internal_66174c0e59f6b385c34640d0d1a91705d7d424a44477720bcf88bd12df02b8d8_prof);

        
        $__internal_5198ecdeaaa2457b3501b514ff48c0a9769ea03665580f730444036cf038fd66->leave($__internal_5198ecdeaaa2457b3501b514ff48c0a9769ea03665580f730444036cf038fd66_prof);

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
