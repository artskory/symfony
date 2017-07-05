<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_3f6d1a43174000d464419b7137335d01cf65da8307a1dad0d345c6fbd9959517 extends Twig_Template
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
        $__internal_60addab3895ec3d79d2cbb7f85fd055f0d42e13c3f3232abc3e57637fb282c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60addab3895ec3d79d2cbb7f85fd055f0d42e13c3f3232abc3e57637fb282c35->enter($__internal_60addab3895ec3d79d2cbb7f85fd055f0d42e13c3f3232abc3e57637fb282c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_965b82eec09b2ae0bdc7b9d13778683f74a62fe7959a53fb4df8a3c361287acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965b82eec09b2ae0bdc7b9d13778683f74a62fe7959a53fb4df8a3c361287acf->enter($__internal_965b82eec09b2ae0bdc7b9d13778683f74a62fe7959a53fb4df8a3c361287acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_60addab3895ec3d79d2cbb7f85fd055f0d42e13c3f3232abc3e57637fb282c35->leave($__internal_60addab3895ec3d79d2cbb7f85fd055f0d42e13c3f3232abc3e57637fb282c35_prof);

        
        $__internal_965b82eec09b2ae0bdc7b9d13778683f74a62fe7959a53fb4df8a3c361287acf->leave($__internal_965b82eec09b2ae0bdc7b9d13778683f74a62fe7959a53fb4df8a3c361287acf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
