<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_b8fe9a743856b541e8ba4dcc32cb7692d74b0d2c289fe41aac7b89a8c99e1496 extends Twig_Template
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
        $__internal_33a876acd91101476afdd6a2c49107c864d9afc3f24e7bdecfde13e52d2a5d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a876acd91101476afdd6a2c49107c864d9afc3f24e7bdecfde13e52d2a5d0b->enter($__internal_33a876acd91101476afdd6a2c49107c864d9afc3f24e7bdecfde13e52d2a5d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_5b5f7b037cfb60c95f2ca06b6d0ffbf7a4be7edc3877445698eb70e277833822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5f7b037cfb60c95f2ca06b6d0ffbf7a4be7edc3877445698eb70e277833822->enter($__internal_5b5f7b037cfb60c95f2ca06b6d0ffbf7a4be7edc3877445698eb70e277833822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_33a876acd91101476afdd6a2c49107c864d9afc3f24e7bdecfde13e52d2a5d0b->leave($__internal_33a876acd91101476afdd6a2c49107c864d9afc3f24e7bdecfde13e52d2a5d0b_prof);

        
        $__internal_5b5f7b037cfb60c95f2ca06b6d0ffbf7a4be7edc3877445698eb70e277833822->leave($__internal_5b5f7b037cfb60c95f2ca06b6d0ffbf7a4be7edc3877445698eb70e277833822_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
