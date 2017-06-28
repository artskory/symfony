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
        $__internal_462bda1dd294c7d0948c8adfe19bdc5a73d7d75c90903bdda165f46bcd8c542a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_462bda1dd294c7d0948c8adfe19bdc5a73d7d75c90903bdda165f46bcd8c542a->enter($__internal_462bda1dd294c7d0948c8adfe19bdc5a73d7d75c90903bdda165f46bcd8c542a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_bcef8dfe70290e5bc9e92b518329aad4c6c8e4de10e84e004ff0b10103ee9764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcef8dfe70290e5bc9e92b518329aad4c6c8e4de10e84e004ff0b10103ee9764->enter($__internal_bcef8dfe70290e5bc9e92b518329aad4c6c8e4de10e84e004ff0b10103ee9764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_462bda1dd294c7d0948c8adfe19bdc5a73d7d75c90903bdda165f46bcd8c542a->leave($__internal_462bda1dd294c7d0948c8adfe19bdc5a73d7d75c90903bdda165f46bcd8c542a_prof);

        
        $__internal_bcef8dfe70290e5bc9e92b518329aad4c6c8e4de10e84e004ff0b10103ee9764->leave($__internal_bcef8dfe70290e5bc9e92b518329aad4c6c8e4de10e84e004ff0b10103ee9764_prof);

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
