<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4a76d53046f49c7d9485d6f43935f8b111528b017e43cbc89ff87ea1c4449690 extends Twig_Template
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
        $__internal_e0b0b79ab9923748bb40de763330d13a356268f8e2134d44bb68ec45986e4b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b0b79ab9923748bb40de763330d13a356268f8e2134d44bb68ec45986e4b34->enter($__internal_e0b0b79ab9923748bb40de763330d13a356268f8e2134d44bb68ec45986e4b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_795e5d112d871f9882ee71662f1f9c43693ca183e23a9bf20e8947997bc10ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795e5d112d871f9882ee71662f1f9c43693ca183e23a9bf20e8947997bc10ed5->enter($__internal_795e5d112d871f9882ee71662f1f9c43693ca183e23a9bf20e8947997bc10ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e0b0b79ab9923748bb40de763330d13a356268f8e2134d44bb68ec45986e4b34->leave($__internal_e0b0b79ab9923748bb40de763330d13a356268f8e2134d44bb68ec45986e4b34_prof);

        
        $__internal_795e5d112d871f9882ee71662f1f9c43693ca183e23a9bf20e8947997bc10ed5->leave($__internal_795e5d112d871f9882ee71662f1f9c43693ca183e23a9bf20e8947997bc10ed5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
