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
        $__internal_d4e37c2dde7821924dd77b36ffc87443af7703beb21a5da6e00b95bfcbae71b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e37c2dde7821924dd77b36ffc87443af7703beb21a5da6e00b95bfcbae71b5->enter($__internal_d4e37c2dde7821924dd77b36ffc87443af7703beb21a5da6e00b95bfcbae71b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_07caf8771c516b232c5f60afdfa7269ee9aae9aca853c50deae3cef71da9903c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07caf8771c516b232c5f60afdfa7269ee9aae9aca853c50deae3cef71da9903c->enter($__internal_07caf8771c516b232c5f60afdfa7269ee9aae9aca853c50deae3cef71da9903c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d4e37c2dde7821924dd77b36ffc87443af7703beb21a5da6e00b95bfcbae71b5->leave($__internal_d4e37c2dde7821924dd77b36ffc87443af7703beb21a5da6e00b95bfcbae71b5_prof);

        
        $__internal_07caf8771c516b232c5f60afdfa7269ee9aae9aca853c50deae3cef71da9903c->leave($__internal_07caf8771c516b232c5f60afdfa7269ee9aae9aca853c50deae3cef71da9903c_prof);

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
