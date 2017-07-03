<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_f9722ccf4fdadfdb1fe433dbb3a6d1e38c011f1c3bbd52edde2b7b47329b5546 extends Twig_Template
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
        $__internal_fb78649c97b35699eb34b0609a5cadc2d6ce699ca2dd4f3ef61852af8f61e3f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb78649c97b35699eb34b0609a5cadc2d6ce699ca2dd4f3ef61852af8f61e3f6->enter($__internal_fb78649c97b35699eb34b0609a5cadc2d6ce699ca2dd4f3ef61852af8f61e3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_c95df9721b086964112ac1fa5d0f1a40cbe8868bba3eb5588c24173a9ff90be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c95df9721b086964112ac1fa5d0f1a40cbe8868bba3eb5588c24173a9ff90be0->enter($__internal_c95df9721b086964112ac1fa5d0f1a40cbe8868bba3eb5588c24173a9ff90be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fb78649c97b35699eb34b0609a5cadc2d6ce699ca2dd4f3ef61852af8f61e3f6->leave($__internal_fb78649c97b35699eb34b0609a5cadc2d6ce699ca2dd4f3ef61852af8f61e3f6_prof);

        
        $__internal_c95df9721b086964112ac1fa5d0f1a40cbe8868bba3eb5588c24173a9ff90be0->leave($__internal_c95df9721b086964112ac1fa5d0f1a40cbe8868bba3eb5588c24173a9ff90be0_prof);

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
