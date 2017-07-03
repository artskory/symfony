<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_a6832960bf610b0e60f1ea3b9fb38e90e367549e47bc97605416e2bdf290492b extends Twig_Template
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
        $__internal_9090c6ed261a7df9c1ccc0daeddbd16ba999b2a51f07c3597f0d9b88a2efd004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9090c6ed261a7df9c1ccc0daeddbd16ba999b2a51f07c3597f0d9b88a2efd004->enter($__internal_9090c6ed261a7df9c1ccc0daeddbd16ba999b2a51f07c3597f0d9b88a2efd004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_f67c9aae536a4e6c874ceaa078a25dc5ea03d3251d2e19ef38d3f2826f17e4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67c9aae536a4e6c874ceaa078a25dc5ea03d3251d2e19ef38d3f2826f17e4e4->enter($__internal_f67c9aae536a4e6c874ceaa078a25dc5ea03d3251d2e19ef38d3f2826f17e4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_9090c6ed261a7df9c1ccc0daeddbd16ba999b2a51f07c3597f0d9b88a2efd004->leave($__internal_9090c6ed261a7df9c1ccc0daeddbd16ba999b2a51f07c3597f0d9b88a2efd004_prof);

        
        $__internal_f67c9aae536a4e6c874ceaa078a25dc5ea03d3251d2e19ef38d3f2826f17e4e4->leave($__internal_f67c9aae536a4e6c874ceaa078a25dc5ea03d3251d2e19ef38d3f2826f17e4e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
