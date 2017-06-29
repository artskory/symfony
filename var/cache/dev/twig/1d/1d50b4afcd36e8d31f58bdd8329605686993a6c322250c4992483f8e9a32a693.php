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
        $__internal_23d456bbeaeb08397aaf041be625f5c75d0b3a83dbcc20d7537d314da3f1a6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d456bbeaeb08397aaf041be625f5c75d0b3a83dbcc20d7537d314da3f1a6f8->enter($__internal_23d456bbeaeb08397aaf041be625f5c75d0b3a83dbcc20d7537d314da3f1a6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_249e250365d6b57bd89d77a4514f75d4ad39b0dba56fd779e2152b754c12a002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249e250365d6b57bd89d77a4514f75d4ad39b0dba56fd779e2152b754c12a002->enter($__internal_249e250365d6b57bd89d77a4514f75d4ad39b0dba56fd779e2152b754c12a002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_23d456bbeaeb08397aaf041be625f5c75d0b3a83dbcc20d7537d314da3f1a6f8->leave($__internal_23d456bbeaeb08397aaf041be625f5c75d0b3a83dbcc20d7537d314da3f1a6f8_prof);

        
        $__internal_249e250365d6b57bd89d77a4514f75d4ad39b0dba56fd779e2152b754c12a002->leave($__internal_249e250365d6b57bd89d77a4514f75d4ad39b0dba56fd779e2152b754c12a002_prof);

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
