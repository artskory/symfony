<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_cb2663f6dd33e59bc132169f89c831865ff09854c5d0fad60735f34b9708efdb extends Twig_Template
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
        $__internal_4704d3333714589bfcda25a1d1971cf3412ab4c140edbee870b88de11b82b7a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4704d3333714589bfcda25a1d1971cf3412ab4c140edbee870b88de11b82b7a4->enter($__internal_4704d3333714589bfcda25a1d1971cf3412ab4c140edbee870b88de11b82b7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_d0d98bdda844801c2c7557b67a619bf79ef3bffb16d362a9abaf3b9024c737f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d98bdda844801c2c7557b67a619bf79ef3bffb16d362a9abaf3b9024c737f6->enter($__internal_d0d98bdda844801c2c7557b67a619bf79ef3bffb16d362a9abaf3b9024c737f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4704d3333714589bfcda25a1d1971cf3412ab4c140edbee870b88de11b82b7a4->leave($__internal_4704d3333714589bfcda25a1d1971cf3412ab4c140edbee870b88de11b82b7a4_prof);

        
        $__internal_d0d98bdda844801c2c7557b67a619bf79ef3bffb16d362a9abaf3b9024c737f6->leave($__internal_d0d98bdda844801c2c7557b67a619bf79ef3bffb16d362a9abaf3b9024c737f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
