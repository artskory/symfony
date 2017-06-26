<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_eb9ad79873e51b3acae66af70d50adf30578689054ee725beb719c4db6138b95 extends Twig_Template
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
        $__internal_f03e19ffe0037965fd86af560bc97d8cdf7a4ebb4ae1859fcb19dc45631530ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03e19ffe0037965fd86af560bc97d8cdf7a4ebb4ae1859fcb19dc45631530ea->enter($__internal_f03e19ffe0037965fd86af560bc97d8cdf7a4ebb4ae1859fcb19dc45631530ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_9901cd2538c07234a1827e8502ed2c25c9945b48ce4652ec78c8229a156d6eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9901cd2538c07234a1827e8502ed2c25c9945b48ce4652ec78c8229a156d6eb9->enter($__internal_9901cd2538c07234a1827e8502ed2c25c9945b48ce4652ec78c8229a156d6eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f03e19ffe0037965fd86af560bc97d8cdf7a4ebb4ae1859fcb19dc45631530ea->leave($__internal_f03e19ffe0037965fd86af560bc97d8cdf7a4ebb4ae1859fcb19dc45631530ea_prof);

        
        $__internal_9901cd2538c07234a1827e8502ed2c25c9945b48ce4652ec78c8229a156d6eb9->leave($__internal_9901cd2538c07234a1827e8502ed2c25c9945b48ce4652ec78c8229a156d6eb9_prof);

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
