<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_28bcaf5bc58460421270ff131993a05dcfa07caf64dfe72dbffa385cb769c7b3 extends Twig_Template
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
        $__internal_04ab708c534f9d2c371f698c2f501a8c75b95565dfd4f1d23842a2325631e622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ab708c534f9d2c371f698c2f501a8c75b95565dfd4f1d23842a2325631e622->enter($__internal_04ab708c534f9d2c371f698c2f501a8c75b95565dfd4f1d23842a2325631e622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_9ffae602617d063152af3703022abd7edae35e57e407bcd6780104e4520d8a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffae602617d063152af3703022abd7edae35e57e407bcd6780104e4520d8a55->enter($__internal_9ffae602617d063152af3703022abd7edae35e57e407bcd6780104e4520d8a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_04ab708c534f9d2c371f698c2f501a8c75b95565dfd4f1d23842a2325631e622->leave($__internal_04ab708c534f9d2c371f698c2f501a8c75b95565dfd4f1d23842a2325631e622_prof);

        
        $__internal_9ffae602617d063152af3703022abd7edae35e57e407bcd6780104e4520d8a55->leave($__internal_9ffae602617d063152af3703022abd7edae35e57e407bcd6780104e4520d8a55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
