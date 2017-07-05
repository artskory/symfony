<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f980e37f024f5bac68d3044701862e9761b12561b097683b08a8d105ebb08d0f extends Twig_Template
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
        $__internal_7c81e24d148437ba8118302dc7cb697d1c6177164a0301e79bf537ca41d4f55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c81e24d148437ba8118302dc7cb697d1c6177164a0301e79bf537ca41d4f55a->enter($__internal_7c81e24d148437ba8118302dc7cb697d1c6177164a0301e79bf537ca41d4f55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_95f8a0468f4761106d4866a63406c39711e7dfe1c17f221e972544d2467e1f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f8a0468f4761106d4866a63406c39711e7dfe1c17f221e972544d2467e1f7a->enter($__internal_95f8a0468f4761106d4866a63406c39711e7dfe1c17f221e972544d2467e1f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7c81e24d148437ba8118302dc7cb697d1c6177164a0301e79bf537ca41d4f55a->leave($__internal_7c81e24d148437ba8118302dc7cb697d1c6177164a0301e79bf537ca41d4f55a_prof);

        
        $__internal_95f8a0468f4761106d4866a63406c39711e7dfe1c17f221e972544d2467e1f7a->leave($__internal_95f8a0468f4761106d4866a63406c39711e7dfe1c17f221e972544d2467e1f7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
