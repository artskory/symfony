<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_a91581d2bc23d054cd2e9dd89b8c120bfc799e810c710a400f9cb95b73083151 extends Twig_Template
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
        $__internal_ed23346356c8da7c6eeaaf72c6c03f6a199f543c61f5d838888b5ff1ae9248b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed23346356c8da7c6eeaaf72c6c03f6a199f543c61f5d838888b5ff1ae9248b1->enter($__internal_ed23346356c8da7c6eeaaf72c6c03f6a199f543c61f5d838888b5ff1ae9248b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_cce926a00671b821606e5908ac4546d7aa9047b90f88011481b8d3a28723b74e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce926a00671b821606e5908ac4546d7aa9047b90f88011481b8d3a28723b74e->enter($__internal_cce926a00671b821606e5908ac4546d7aa9047b90f88011481b8d3a28723b74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ed23346356c8da7c6eeaaf72c6c03f6a199f543c61f5d838888b5ff1ae9248b1->leave($__internal_ed23346356c8da7c6eeaaf72c6c03f6a199f543c61f5d838888b5ff1ae9248b1_prof);

        
        $__internal_cce926a00671b821606e5908ac4546d7aa9047b90f88011481b8d3a28723b74e->leave($__internal_cce926a00671b821606e5908ac4546d7aa9047b90f88011481b8d3a28723b74e_prof);

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
