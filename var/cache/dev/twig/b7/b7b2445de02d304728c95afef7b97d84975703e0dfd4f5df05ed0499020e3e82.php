<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f6fdea47abf10eeba4846f7008bdc7c004e40c6f9050ec6f8252750b75bd86e0 extends Twig_Template
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
        $__internal_937273360e9dc8997dba287e55e6c2b4a2284809c7a6dd387aa1c870f1fb5573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_937273360e9dc8997dba287e55e6c2b4a2284809c7a6dd387aa1c870f1fb5573->enter($__internal_937273360e9dc8997dba287e55e6c2b4a2284809c7a6dd387aa1c870f1fb5573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9725a2131251c37ac1b8fd0371a4c7198be6ab867a0c4206b7a48c00b5c345a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9725a2131251c37ac1b8fd0371a4c7198be6ab867a0c4206b7a48c00b5c345a1->enter($__internal_9725a2131251c37ac1b8fd0371a4c7198be6ab867a0c4206b7a48c00b5c345a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_937273360e9dc8997dba287e55e6c2b4a2284809c7a6dd387aa1c870f1fb5573->leave($__internal_937273360e9dc8997dba287e55e6c2b4a2284809c7a6dd387aa1c870f1fb5573_prof);

        
        $__internal_9725a2131251c37ac1b8fd0371a4c7198be6ab867a0c4206b7a48c00b5c345a1->leave($__internal_9725a2131251c37ac1b8fd0371a4c7198be6ab867a0c4206b7a48c00b5c345a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
