<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_4f78aa3e242fc4861a3485ec4d68c4a31701430e4551d670d0e50d4b36838326 extends Twig_Template
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
        $__internal_70f1552743b836618c64564f78e4262bf92c1036dfcc8a3851008ba18972b35a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70f1552743b836618c64564f78e4262bf92c1036dfcc8a3851008ba18972b35a->enter($__internal_70f1552743b836618c64564f78e4262bf92c1036dfcc8a3851008ba18972b35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_9406d2e8b9571b2cc37da30a7c78c57f8443e39ac595f5f3233d1758925411c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9406d2e8b9571b2cc37da30a7c78c57f8443e39ac595f5f3233d1758925411c6->enter($__internal_9406d2e8b9571b2cc37da30a7c78c57f8443e39ac595f5f3233d1758925411c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_70f1552743b836618c64564f78e4262bf92c1036dfcc8a3851008ba18972b35a->leave($__internal_70f1552743b836618c64564f78e4262bf92c1036dfcc8a3851008ba18972b35a_prof);

        
        $__internal_9406d2e8b9571b2cc37da30a7c78c57f8443e39ac595f5f3233d1758925411c6->leave($__internal_9406d2e8b9571b2cc37da30a7c78c57f8443e39ac595f5f3233d1758925411c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
