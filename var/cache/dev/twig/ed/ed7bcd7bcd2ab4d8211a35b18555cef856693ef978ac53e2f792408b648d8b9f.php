<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c3e5b049e067c89f63c0ed4aefe74b37bc99367eece9b417e61c1304460756f4 extends Twig_Template
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
        $__internal_a6608be2ba2dd055135c91ab2b27ab8125996996d991fb307f4ccc087c93a31a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6608be2ba2dd055135c91ab2b27ab8125996996d991fb307f4ccc087c93a31a->enter($__internal_a6608be2ba2dd055135c91ab2b27ab8125996996d991fb307f4ccc087c93a31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_1c7652419e2ca4bfffecd296cf49dcc93524539d2e0c5e4745b1a8e2949e0cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7652419e2ca4bfffecd296cf49dcc93524539d2e0c5e4745b1a8e2949e0cda->enter($__internal_1c7652419e2ca4bfffecd296cf49dcc93524539d2e0c5e4745b1a8e2949e0cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a6608be2ba2dd055135c91ab2b27ab8125996996d991fb307f4ccc087c93a31a->leave($__internal_a6608be2ba2dd055135c91ab2b27ab8125996996d991fb307f4ccc087c93a31a_prof);

        
        $__internal_1c7652419e2ca4bfffecd296cf49dcc93524539d2e0c5e4745b1a8e2949e0cda->leave($__internal_1c7652419e2ca4bfffecd296cf49dcc93524539d2e0c5e4745b1a8e2949e0cda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
