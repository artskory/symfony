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
        $__internal_0e7458ab01b0f0bcd8c3101a1df5616ccea88bbc7f3995168c714fa78a6c711a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7458ab01b0f0bcd8c3101a1df5616ccea88bbc7f3995168c714fa78a6c711a->enter($__internal_0e7458ab01b0f0bcd8c3101a1df5616ccea88bbc7f3995168c714fa78a6c711a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_0ab62d3218f63d9b09d86e280bc599ad8a3d1fb55fba324f76aec7e0f0172383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab62d3218f63d9b09d86e280bc599ad8a3d1fb55fba324f76aec7e0f0172383->enter($__internal_0ab62d3218f63d9b09d86e280bc599ad8a3d1fb55fba324f76aec7e0f0172383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0e7458ab01b0f0bcd8c3101a1df5616ccea88bbc7f3995168c714fa78a6c711a->leave($__internal_0e7458ab01b0f0bcd8c3101a1df5616ccea88bbc7f3995168c714fa78a6c711a_prof);

        
        $__internal_0ab62d3218f63d9b09d86e280bc599ad8a3d1fb55fba324f76aec7e0f0172383->leave($__internal_0ab62d3218f63d9b09d86e280bc599ad8a3d1fb55fba324f76aec7e0f0172383_prof);

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
