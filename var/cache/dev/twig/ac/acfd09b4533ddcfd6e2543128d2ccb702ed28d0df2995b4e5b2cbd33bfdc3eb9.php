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
        $__internal_76866a48855c18842e3b0ce3c80ff14dcdcb07bf9352748c922412a5529bcc53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76866a48855c18842e3b0ce3c80ff14dcdcb07bf9352748c922412a5529bcc53->enter($__internal_76866a48855c18842e3b0ce3c80ff14dcdcb07bf9352748c922412a5529bcc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_40106409eea3778817758bb9e420e8696f1f843dd75123b6f9a16c3105aa7352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40106409eea3778817758bb9e420e8696f1f843dd75123b6f9a16c3105aa7352->enter($__internal_40106409eea3778817758bb9e420e8696f1f843dd75123b6f9a16c3105aa7352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_76866a48855c18842e3b0ce3c80ff14dcdcb07bf9352748c922412a5529bcc53->leave($__internal_76866a48855c18842e3b0ce3c80ff14dcdcb07bf9352748c922412a5529bcc53_prof);

        
        $__internal_40106409eea3778817758bb9e420e8696f1f843dd75123b6f9a16c3105aa7352->leave($__internal_40106409eea3778817758bb9e420e8696f1f843dd75123b6f9a16c3105aa7352_prof);

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
