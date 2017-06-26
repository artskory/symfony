<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_cb8137a99d5bf144d6f739dc1934509bd1864afdef45b94f98e60619c39d39e8 extends Twig_Template
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
        $__internal_fb3f3484023557a9b78780eff30a9426c9f07dae39f5b095c41fdacd7efb6f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb3f3484023557a9b78780eff30a9426c9f07dae39f5b095c41fdacd7efb6f28->enter($__internal_fb3f3484023557a9b78780eff30a9426c9f07dae39f5b095c41fdacd7efb6f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_0ae19707144aa6aef35e8d930e18b0fddb464df71aa6df5782a2c6c347544cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae19707144aa6aef35e8d930e18b0fddb464df71aa6df5782a2c6c347544cd1->enter($__internal_0ae19707144aa6aef35e8d930e18b0fddb464df71aa6df5782a2c6c347544cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fb3f3484023557a9b78780eff30a9426c9f07dae39f5b095c41fdacd7efb6f28->leave($__internal_fb3f3484023557a9b78780eff30a9426c9f07dae39f5b095c41fdacd7efb6f28_prof);

        
        $__internal_0ae19707144aa6aef35e8d930e18b0fddb464df71aa6df5782a2c6c347544cd1->leave($__internal_0ae19707144aa6aef35e8d930e18b0fddb464df71aa6df5782a2c6c347544cd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
