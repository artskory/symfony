<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_57719f24a143ed863b1493dcf4dc08525e8872baf9a72044914b851d1d4e7e49 extends Twig_Template
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
        $__internal_2a5a6a93a0cc77aff6f2f31a7c3c6a071f056e2afb7b1083304c447c72097392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5a6a93a0cc77aff6f2f31a7c3c6a071f056e2afb7b1083304c447c72097392->enter($__internal_2a5a6a93a0cc77aff6f2f31a7c3c6a071f056e2afb7b1083304c447c72097392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_a92e78e580b87a6cc4858bf7757ef4b6db8e481e8e714a20339f3c422920d288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92e78e580b87a6cc4858bf7757ef4b6db8e481e8e714a20339f3c422920d288->enter($__internal_a92e78e580b87a6cc4858bf7757ef4b6db8e481e8e714a20339f3c422920d288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2a5a6a93a0cc77aff6f2f31a7c3c6a071f056e2afb7b1083304c447c72097392->leave($__internal_2a5a6a93a0cc77aff6f2f31a7c3c6a071f056e2afb7b1083304c447c72097392_prof);

        
        $__internal_a92e78e580b87a6cc4858bf7757ef4b6db8e481e8e714a20339f3c422920d288->leave($__internal_a92e78e580b87a6cc4858bf7757ef4b6db8e481e8e714a20339f3c422920d288_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
