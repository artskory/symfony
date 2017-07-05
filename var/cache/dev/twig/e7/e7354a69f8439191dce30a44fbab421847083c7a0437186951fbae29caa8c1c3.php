<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8bfd82ac77a43d5ae122b998ff41b58d84b38634c84b227a42e5a6745e98b13c extends Twig_Template
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
        $__internal_502513ce57b516ce79665a728f5bf19c3d4d7453842a37c6adfd69530e657aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_502513ce57b516ce79665a728f5bf19c3d4d7453842a37c6adfd69530e657aa3->enter($__internal_502513ce57b516ce79665a728f5bf19c3d4d7453842a37c6adfd69530e657aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_c8a54039f6c89fdb91be8f38cb7080c36e4a233adeb30817587985f743006295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a54039f6c89fdb91be8f38cb7080c36e4a233adeb30817587985f743006295->enter($__internal_c8a54039f6c89fdb91be8f38cb7080c36e4a233adeb30817587985f743006295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_502513ce57b516ce79665a728f5bf19c3d4d7453842a37c6adfd69530e657aa3->leave($__internal_502513ce57b516ce79665a728f5bf19c3d4d7453842a37c6adfd69530e657aa3_prof);

        
        $__internal_c8a54039f6c89fdb91be8f38cb7080c36e4a233adeb30817587985f743006295->leave($__internal_c8a54039f6c89fdb91be8f38cb7080c36e4a233adeb30817587985f743006295_prof);

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
