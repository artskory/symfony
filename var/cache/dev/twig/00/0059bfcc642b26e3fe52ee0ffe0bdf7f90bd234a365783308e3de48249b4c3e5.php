<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_06bffca1c601912a63d9f0467e31b0cc7f241f98472a5a810e889e3f82b6e4b8 extends Twig_Template
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
        $__internal_fe4ee875737ab52650f772a7da99a02aaededb72289b8c0e0c4ddbf4c5969ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4ee875737ab52650f772a7da99a02aaededb72289b8c0e0c4ddbf4c5969ee8->enter($__internal_fe4ee875737ab52650f772a7da99a02aaededb72289b8c0e0c4ddbf4c5969ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_691bfc250951378a0444d0339828188aef86ed741fab6bde39262240ec8d50de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691bfc250951378a0444d0339828188aef86ed741fab6bde39262240ec8d50de->enter($__internal_691bfc250951378a0444d0339828188aef86ed741fab6bde39262240ec8d50de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_fe4ee875737ab52650f772a7da99a02aaededb72289b8c0e0c4ddbf4c5969ee8->leave($__internal_fe4ee875737ab52650f772a7da99a02aaededb72289b8c0e0c4ddbf4c5969ee8_prof);

        
        $__internal_691bfc250951378a0444d0339828188aef86ed741fab6bde39262240ec8d50de->leave($__internal_691bfc250951378a0444d0339828188aef86ed741fab6bde39262240ec8d50de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
