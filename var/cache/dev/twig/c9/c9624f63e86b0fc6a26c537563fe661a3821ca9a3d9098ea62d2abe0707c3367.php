<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e371850243838d01ff9e8e8ace6e85d62913d2a3a73f468c9073daa35eefbbe6 extends Twig_Template
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
        $__internal_36730a58ed7c156d3bbc1e941d254499e55aaecbd29a6a7dfee6651823f35396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36730a58ed7c156d3bbc1e941d254499e55aaecbd29a6a7dfee6651823f35396->enter($__internal_36730a58ed7c156d3bbc1e941d254499e55aaecbd29a6a7dfee6651823f35396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_3178af5e7610b7e1b86be337033ca94f6fa3a0f74dc56dfc5f2ca5b6e7107294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3178af5e7610b7e1b86be337033ca94f6fa3a0f74dc56dfc5f2ca5b6e7107294->enter($__internal_3178af5e7610b7e1b86be337033ca94f6fa3a0f74dc56dfc5f2ca5b6e7107294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_36730a58ed7c156d3bbc1e941d254499e55aaecbd29a6a7dfee6651823f35396->leave($__internal_36730a58ed7c156d3bbc1e941d254499e55aaecbd29a6a7dfee6651823f35396_prof);

        
        $__internal_3178af5e7610b7e1b86be337033ca94f6fa3a0f74dc56dfc5f2ca5b6e7107294->leave($__internal_3178af5e7610b7e1b86be337033ca94f6fa3a0f74dc56dfc5f2ca5b6e7107294_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
