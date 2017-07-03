<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_d6a5847443a3ffc0103429cd49847e02ff164071f1ee57f28589434e56d67abe extends Twig_Template
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
        $__internal_a71dcdbe2251ef0ebf1c39057ab3378a5d4aca7613b5b704ba6a3baab10d80ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a71dcdbe2251ef0ebf1c39057ab3378a5d4aca7613b5b704ba6a3baab10d80ba->enter($__internal_a71dcdbe2251ef0ebf1c39057ab3378a5d4aca7613b5b704ba6a3baab10d80ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1a0a5cd6ef2855d3a15a8c13e1263e28af1586be8e8aab523cbdf559841d98dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0a5cd6ef2855d3a15a8c13e1263e28af1586be8e8aab523cbdf559841d98dd->enter($__internal_1a0a5cd6ef2855d3a15a8c13e1263e28af1586be8e8aab523cbdf559841d98dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a71dcdbe2251ef0ebf1c39057ab3378a5d4aca7613b5b704ba6a3baab10d80ba->leave($__internal_a71dcdbe2251ef0ebf1c39057ab3378a5d4aca7613b5b704ba6a3baab10d80ba_prof);

        
        $__internal_1a0a5cd6ef2855d3a15a8c13e1263e28af1586be8e8aab523cbdf559841d98dd->leave($__internal_1a0a5cd6ef2855d3a15a8c13e1263e28af1586be8e8aab523cbdf559841d98dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
