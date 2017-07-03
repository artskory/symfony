<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3599f0f41a73b2e0440226334f043031a4ccb528838bc00dd538e3cb960119cc extends Twig_Template
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
        $__internal_6e0a0011524e8ff7f00bc915e6ed0157b4f66c088ebe358c317272df688628ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0a0011524e8ff7f00bc915e6ed0157b4f66c088ebe358c317272df688628ee->enter($__internal_6e0a0011524e8ff7f00bc915e6ed0157b4f66c088ebe358c317272df688628ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_09b469bd1260187add7ddbcf90dfd63933a9655d75561e9f7e01612fb841b267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b469bd1260187add7ddbcf90dfd63933a9655d75561e9f7e01612fb841b267->enter($__internal_09b469bd1260187add7ddbcf90dfd63933a9655d75561e9f7e01612fb841b267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6e0a0011524e8ff7f00bc915e6ed0157b4f66c088ebe358c317272df688628ee->leave($__internal_6e0a0011524e8ff7f00bc915e6ed0157b4f66c088ebe358c317272df688628ee_prof);

        
        $__internal_09b469bd1260187add7ddbcf90dfd63933a9655d75561e9f7e01612fb841b267->leave($__internal_09b469bd1260187add7ddbcf90dfd63933a9655d75561e9f7e01612fb841b267_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
