<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8f50fa9707a3a261e4652017d8d150b404dcda443e71a05e5499d828713b87e1 extends Twig_Template
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
        $__internal_58efe8c397fa718d9b9af0d601fabdb5b52dc5eb316d04c36ef697ed7f2821e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58efe8c397fa718d9b9af0d601fabdb5b52dc5eb316d04c36ef697ed7f2821e0->enter($__internal_58efe8c397fa718d9b9af0d601fabdb5b52dc5eb316d04c36ef697ed7f2821e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_82e4cdefb8c705c63a231449e43b7b73a99d3b98c9d0882b06c3de9c9c78645c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e4cdefb8c705c63a231449e43b7b73a99d3b98c9d0882b06c3de9c9c78645c->enter($__internal_82e4cdefb8c705c63a231449e43b7b73a99d3b98c9d0882b06c3de9c9c78645c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_58efe8c397fa718d9b9af0d601fabdb5b52dc5eb316d04c36ef697ed7f2821e0->leave($__internal_58efe8c397fa718d9b9af0d601fabdb5b52dc5eb316d04c36ef697ed7f2821e0_prof);

        
        $__internal_82e4cdefb8c705c63a231449e43b7b73a99d3b98c9d0882b06c3de9c9c78645c->leave($__internal_82e4cdefb8c705c63a231449e43b7b73a99d3b98c9d0882b06c3de9c9c78645c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
