<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d5d0c2b69df921e9ad8a26f057d250dab7402fb68639649d59f65d694698587a extends Twig_Template
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
        $__internal_1596f240d41b957ff0093f32c1ea42f43ef458c69379effc5b1f298ab93716d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1596f240d41b957ff0093f32c1ea42f43ef458c69379effc5b1f298ab93716d4->enter($__internal_1596f240d41b957ff0093f32c1ea42f43ef458c69379effc5b1f298ab93716d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4b215ce49a18f18b6787703af48ed040e2b3508db25bc9c7a765bb3774ce3220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b215ce49a18f18b6787703af48ed040e2b3508db25bc9c7a765bb3774ce3220->enter($__internal_4b215ce49a18f18b6787703af48ed040e2b3508db25bc9c7a765bb3774ce3220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1596f240d41b957ff0093f32c1ea42f43ef458c69379effc5b1f298ab93716d4->leave($__internal_1596f240d41b957ff0093f32c1ea42f43ef458c69379effc5b1f298ab93716d4_prof);

        
        $__internal_4b215ce49a18f18b6787703af48ed040e2b3508db25bc9c7a765bb3774ce3220->leave($__internal_4b215ce49a18f18b6787703af48ed040e2b3508db25bc9c7a765bb3774ce3220_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
