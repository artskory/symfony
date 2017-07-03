<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_07ed6bccfc4d655d5e0df4ec13a47e0df70eaa9cd26d14344927c6e42e4c8bc5 extends Twig_Template
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
        $__internal_a34a2c5b1e706e10d81832eda8f513cb8a98fcf23275c1ebdad541c08f59ed01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a34a2c5b1e706e10d81832eda8f513cb8a98fcf23275c1ebdad541c08f59ed01->enter($__internal_a34a2c5b1e706e10d81832eda8f513cb8a98fcf23275c1ebdad541c08f59ed01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_aff00f7251f28c3d05cca09871f1df284218fb58f8eff5a453722e9041896cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff00f7251f28c3d05cca09871f1df284218fb58f8eff5a453722e9041896cfc->enter($__internal_aff00f7251f28c3d05cca09871f1df284218fb58f8eff5a453722e9041896cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a34a2c5b1e706e10d81832eda8f513cb8a98fcf23275c1ebdad541c08f59ed01->leave($__internal_a34a2c5b1e706e10d81832eda8f513cb8a98fcf23275c1ebdad541c08f59ed01_prof);

        
        $__internal_aff00f7251f28c3d05cca09871f1df284218fb58f8eff5a453722e9041896cfc->leave($__internal_aff00f7251f28c3d05cca09871f1df284218fb58f8eff5a453722e9041896cfc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
