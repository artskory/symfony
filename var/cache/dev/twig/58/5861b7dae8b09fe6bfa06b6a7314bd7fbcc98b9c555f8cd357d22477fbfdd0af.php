<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ac10b0c48a54613529ad908c359ca3eceb09e44a68d8de00ae38ec70aa948c29 extends Twig_Template
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
        $__internal_40c9928d8e82cc4049b7e10c4d409c00cd69adac5af6c51c5591e848b4cda8b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c9928d8e82cc4049b7e10c4d409c00cd69adac5af6c51c5591e848b4cda8b0->enter($__internal_40c9928d8e82cc4049b7e10c4d409c00cd69adac5af6c51c5591e848b4cda8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_7c701ff0d6ab809fb9b17c8d8887daee296ba2030a70c92aa3a889ff352c9586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c701ff0d6ab809fb9b17c8d8887daee296ba2030a70c92aa3a889ff352c9586->enter($__internal_7c701ff0d6ab809fb9b17c8d8887daee296ba2030a70c92aa3a889ff352c9586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_40c9928d8e82cc4049b7e10c4d409c00cd69adac5af6c51c5591e848b4cda8b0->leave($__internal_40c9928d8e82cc4049b7e10c4d409c00cd69adac5af6c51c5591e848b4cda8b0_prof);

        
        $__internal_7c701ff0d6ab809fb9b17c8d8887daee296ba2030a70c92aa3a889ff352c9586->leave($__internal_7c701ff0d6ab809fb9b17c8d8887daee296ba2030a70c92aa3a889ff352c9586_prof);

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
