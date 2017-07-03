<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_b8fe9a743856b541e8ba4dcc32cb7692d74b0d2c289fe41aac7b89a8c99e1496 extends Twig_Template
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
        $__internal_0900689bbb243cc19104aa8b0f1e572413254820d7dd61b529d3045722fdf795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0900689bbb243cc19104aa8b0f1e572413254820d7dd61b529d3045722fdf795->enter($__internal_0900689bbb243cc19104aa8b0f1e572413254820d7dd61b529d3045722fdf795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_3566cd6f0d8a23028aa0e009bd273faca98b41a0aea8f6b85d2c4983abe5be22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3566cd6f0d8a23028aa0e009bd273faca98b41a0aea8f6b85d2c4983abe5be22->enter($__internal_3566cd6f0d8a23028aa0e009bd273faca98b41a0aea8f6b85d2c4983abe5be22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_0900689bbb243cc19104aa8b0f1e572413254820d7dd61b529d3045722fdf795->leave($__internal_0900689bbb243cc19104aa8b0f1e572413254820d7dd61b529d3045722fdf795_prof);

        
        $__internal_3566cd6f0d8a23028aa0e009bd273faca98b41a0aea8f6b85d2c4983abe5be22->leave($__internal_3566cd6f0d8a23028aa0e009bd273faca98b41a0aea8f6b85d2c4983abe5be22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
