<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_91783a72c05b85bcd309c24da26cb4b8d22187f51f26e422e65aed29d5be906e extends Twig_Template
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
        $__internal_82ad904c53d269105ede2e551bfb5b34b700b7bf18b5e4368fcd23afd19512b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ad904c53d269105ede2e551bfb5b34b700b7bf18b5e4368fcd23afd19512b1->enter($__internal_82ad904c53d269105ede2e551bfb5b34b700b7bf18b5e4368fcd23afd19512b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_c8a7b68906f01799ae3a14f6cb9e479b6e9aa8ac0d3bfa350e99d29546708ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a7b68906f01799ae3a14f6cb9e479b6e9aa8ac0d3bfa350e99d29546708ad8->enter($__internal_c8a7b68906f01799ae3a14f6cb9e479b6e9aa8ac0d3bfa350e99d29546708ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_82ad904c53d269105ede2e551bfb5b34b700b7bf18b5e4368fcd23afd19512b1->leave($__internal_82ad904c53d269105ede2e551bfb5b34b700b7bf18b5e4368fcd23afd19512b1_prof);

        
        $__internal_c8a7b68906f01799ae3a14f6cb9e479b6e9aa8ac0d3bfa350e99d29546708ad8->leave($__internal_c8a7b68906f01799ae3a14f6cb9e479b6e9aa8ac0d3bfa350e99d29546708ad8_prof);

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
