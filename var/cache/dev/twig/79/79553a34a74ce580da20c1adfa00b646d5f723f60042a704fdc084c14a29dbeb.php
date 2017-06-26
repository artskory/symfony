<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a346690d023271e5256e7fd0a90ad7159ef858444a1b548e4cf604905dea1b26 extends Twig_Template
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
        $__internal_f709fc0306a34a0cab99a482925758f9964ef6bdb23267c2a71a6e1e7692fb4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f709fc0306a34a0cab99a482925758f9964ef6bdb23267c2a71a6e1e7692fb4e->enter($__internal_f709fc0306a34a0cab99a482925758f9964ef6bdb23267c2a71a6e1e7692fb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_078f435b8bcdced3f8de64710dea20411bb31a51db1ed30c6733e59f9bbe9c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078f435b8bcdced3f8de64710dea20411bb31a51db1ed30c6733e59f9bbe9c19->enter($__internal_078f435b8bcdced3f8de64710dea20411bb31a51db1ed30c6733e59f9bbe9c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f709fc0306a34a0cab99a482925758f9964ef6bdb23267c2a71a6e1e7692fb4e->leave($__internal_f709fc0306a34a0cab99a482925758f9964ef6bdb23267c2a71a6e1e7692fb4e_prof);

        
        $__internal_078f435b8bcdced3f8de64710dea20411bb31a51db1ed30c6733e59f9bbe9c19->leave($__internal_078f435b8bcdced3f8de64710dea20411bb31a51db1ed30c6733e59f9bbe9c19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
