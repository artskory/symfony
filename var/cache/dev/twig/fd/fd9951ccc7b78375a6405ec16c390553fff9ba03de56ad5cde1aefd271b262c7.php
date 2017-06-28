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
        $__internal_1d1abcb6399985079840b5fa69a03bdc6b672e9d4d7a8a7068e18f153ee5a936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d1abcb6399985079840b5fa69a03bdc6b672e9d4d7a8a7068e18f153ee5a936->enter($__internal_1d1abcb6399985079840b5fa69a03bdc6b672e9d4d7a8a7068e18f153ee5a936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_734ded4eb93e4f9b1f7e8a8f6aac1f4f74bebd2f3a32279bc092b2e28be67117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734ded4eb93e4f9b1f7e8a8f6aac1f4f74bebd2f3a32279bc092b2e28be67117->enter($__internal_734ded4eb93e4f9b1f7e8a8f6aac1f4f74bebd2f3a32279bc092b2e28be67117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1d1abcb6399985079840b5fa69a03bdc6b672e9d4d7a8a7068e18f153ee5a936->leave($__internal_1d1abcb6399985079840b5fa69a03bdc6b672e9d4d7a8a7068e18f153ee5a936_prof);

        
        $__internal_734ded4eb93e4f9b1f7e8a8f6aac1f4f74bebd2f3a32279bc092b2e28be67117->leave($__internal_734ded4eb93e4f9b1f7e8a8f6aac1f4f74bebd2f3a32279bc092b2e28be67117_prof);

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
