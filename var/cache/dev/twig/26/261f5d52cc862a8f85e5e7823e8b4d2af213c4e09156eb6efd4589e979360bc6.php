<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2400b6f2ce54399ddeb3ca99461182a697c69f59f9e2728f3229c089902f9248 extends Twig_Template
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
        $__internal_8ae883d478852f179c792cfae44eaa69c925ec0512e5de2555af089bfcff96cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae883d478852f179c792cfae44eaa69c925ec0512e5de2555af089bfcff96cf->enter($__internal_8ae883d478852f179c792cfae44eaa69c925ec0512e5de2555af089bfcff96cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_f8f680eb09eee04d5b0e44acb123823d40b66cf07dc4f35cd07bd35a3abfa544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f680eb09eee04d5b0e44acb123823d40b66cf07dc4f35cd07bd35a3abfa544->enter($__internal_f8f680eb09eee04d5b0e44acb123823d40b66cf07dc4f35cd07bd35a3abfa544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_8ae883d478852f179c792cfae44eaa69c925ec0512e5de2555af089bfcff96cf->leave($__internal_8ae883d478852f179c792cfae44eaa69c925ec0512e5de2555af089bfcff96cf_prof);

        
        $__internal_f8f680eb09eee04d5b0e44acb123823d40b66cf07dc4f35cd07bd35a3abfa544->leave($__internal_f8f680eb09eee04d5b0e44acb123823d40b66cf07dc4f35cd07bd35a3abfa544_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
