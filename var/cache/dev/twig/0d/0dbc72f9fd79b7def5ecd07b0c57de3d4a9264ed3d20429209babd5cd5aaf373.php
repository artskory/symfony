<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_de4db922993153446b66e60dd2961dd10ee8281f1ff9dabe653b7d129681aad7 extends Twig_Template
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
        $__internal_d370fb4be70eb315803a646661f286d6b12b2e46b91e5d4a6bf195ce9afebdfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d370fb4be70eb315803a646661f286d6b12b2e46b91e5d4a6bf195ce9afebdfc->enter($__internal_d370fb4be70eb315803a646661f286d6b12b2e46b91e5d4a6bf195ce9afebdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_9d1604ade677e802ec45515d80e3093600d3ad18e602eac6e94d500dfb04e1bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1604ade677e802ec45515d80e3093600d3ad18e602eac6e94d500dfb04e1bf->enter($__internal_9d1604ade677e802ec45515d80e3093600d3ad18e602eac6e94d500dfb04e1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d370fb4be70eb315803a646661f286d6b12b2e46b91e5d4a6bf195ce9afebdfc->leave($__internal_d370fb4be70eb315803a646661f286d6b12b2e46b91e5d4a6bf195ce9afebdfc_prof);

        
        $__internal_9d1604ade677e802ec45515d80e3093600d3ad18e602eac6e94d500dfb04e1bf->leave($__internal_9d1604ade677e802ec45515d80e3093600d3ad18e602eac6e94d500dfb04e1bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
