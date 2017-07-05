<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_fbb887cdadc421f7179c28b93081cef2dc48fb8379d4101b98741d409eb0683f extends Twig_Template
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
        $__internal_27685ccd13c756866ad990cf736fececb5ba995fba5e3e9cef5741efca28b583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27685ccd13c756866ad990cf736fececb5ba995fba5e3e9cef5741efca28b583->enter($__internal_27685ccd13c756866ad990cf736fececb5ba995fba5e3e9cef5741efca28b583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_62b2c231daacad1702c13cae635bbf190e8bc5e98f05c48f979db6195ba3f1e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b2c231daacad1702c13cae635bbf190e8bc5e98f05c48f979db6195ba3f1e1->enter($__internal_62b2c231daacad1702c13cae635bbf190e8bc5e98f05c48f979db6195ba3f1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_27685ccd13c756866ad990cf736fececb5ba995fba5e3e9cef5741efca28b583->leave($__internal_27685ccd13c756866ad990cf736fececb5ba995fba5e3e9cef5741efca28b583_prof);

        
        $__internal_62b2c231daacad1702c13cae635bbf190e8bc5e98f05c48f979db6195ba3f1e1->leave($__internal_62b2c231daacad1702c13cae635bbf190e8bc5e98f05c48f979db6195ba3f1e1_prof);

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
