<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_ede42cdaa526b5145d366b7b496a61631b374e7cc425413799a26c0781350d71 extends Twig_Template
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
        $__internal_e877e742a3eac2c4603199a5d8a8a8550b19664500b0291207a7256e3233f71d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e877e742a3eac2c4603199a5d8a8a8550b19664500b0291207a7256e3233f71d->enter($__internal_e877e742a3eac2c4603199a5d8a8a8550b19664500b0291207a7256e3233f71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_cf7b665c4730c740f6f34b2878b70789e16f71ab1c8103630ffb4a962ab1c708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7b665c4730c740f6f34b2878b70789e16f71ab1c8103630ffb4a962ab1c708->enter($__internal_cf7b665c4730c740f6f34b2878b70789e16f71ab1c8103630ffb4a962ab1c708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e877e742a3eac2c4603199a5d8a8a8550b19664500b0291207a7256e3233f71d->leave($__internal_e877e742a3eac2c4603199a5d8a8a8550b19664500b0291207a7256e3233f71d_prof);

        
        $__internal_cf7b665c4730c740f6f34b2878b70789e16f71ab1c8103630ffb4a962ab1c708->leave($__internal_cf7b665c4730c740f6f34b2878b70789e16f71ab1c8103630ffb4a962ab1c708_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
