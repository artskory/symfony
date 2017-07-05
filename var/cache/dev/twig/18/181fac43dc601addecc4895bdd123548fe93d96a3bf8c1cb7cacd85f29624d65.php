<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_73a86ce38bfb43077d27a599a3a91dad9b6898bfbc204b349358b1b0ba317be9 extends Twig_Template
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
        $__internal_0cf5d211e73807a9ccc90b3fa08d286f4c13536f1ad1dc785959ce6c306068c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf5d211e73807a9ccc90b3fa08d286f4c13536f1ad1dc785959ce6c306068c6->enter($__internal_0cf5d211e73807a9ccc90b3fa08d286f4c13536f1ad1dc785959ce6c306068c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_13b56e56aa37360b4a72d357797b9982f666c136ee51db4fe05bd71dd4837794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b56e56aa37360b4a72d357797b9982f666c136ee51db4fe05bd71dd4837794->enter($__internal_13b56e56aa37360b4a72d357797b9982f666c136ee51db4fe05bd71dd4837794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_0cf5d211e73807a9ccc90b3fa08d286f4c13536f1ad1dc785959ce6c306068c6->leave($__internal_0cf5d211e73807a9ccc90b3fa08d286f4c13536f1ad1dc785959ce6c306068c6_prof);

        
        $__internal_13b56e56aa37360b4a72d357797b9982f666c136ee51db4fe05bd71dd4837794->leave($__internal_13b56e56aa37360b4a72d357797b9982f666c136ee51db4fe05bd71dd4837794_prof);

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
