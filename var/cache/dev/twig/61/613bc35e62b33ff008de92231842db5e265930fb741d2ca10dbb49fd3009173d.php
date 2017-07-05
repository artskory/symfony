<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_97bae889486a094d1cc66c9510ed3c4dfb05971a93b928ad0d4b177cf959efbd extends Twig_Template
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
        $__internal_8fbef725c8a66572acba2497b887c69c7e7ee066491d4f3e933309ee65848bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fbef725c8a66572acba2497b887c69c7e7ee066491d4f3e933309ee65848bc4->enter($__internal_8fbef725c8a66572acba2497b887c69c7e7ee066491d4f3e933309ee65848bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_e27af9fc58ad1b733963175ba8b1373c8dfdb724d18cfe449abda570e78d7d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27af9fc58ad1b733963175ba8b1373c8dfdb724d18cfe449abda570e78d7d14->enter($__internal_e27af9fc58ad1b733963175ba8b1373c8dfdb724d18cfe449abda570e78d7d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_8fbef725c8a66572acba2497b887c69c7e7ee066491d4f3e933309ee65848bc4->leave($__internal_8fbef725c8a66572acba2497b887c69c7e7ee066491d4f3e933309ee65848bc4_prof);

        
        $__internal_e27af9fc58ad1b733963175ba8b1373c8dfdb724d18cfe449abda570e78d7d14->leave($__internal_e27af9fc58ad1b733963175ba8b1373c8dfdb724d18cfe449abda570e78d7d14_prof);

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
