<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ec223bc9096afe1c9534e47a5427c5900bf9858154df6a39212f334a327ef8e2 extends Twig_Template
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
        $__internal_4668d87b49b4eda6cc2fc32aed42fcb55dcf5c31e38e95c372ddd20ea327e729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4668d87b49b4eda6cc2fc32aed42fcb55dcf5c31e38e95c372ddd20ea327e729->enter($__internal_4668d87b49b4eda6cc2fc32aed42fcb55dcf5c31e38e95c372ddd20ea327e729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_5a372dec9ab3641dce9abc8362ae0a4b9052c37d440ef81c2ba54bf924de5951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a372dec9ab3641dce9abc8362ae0a4b9052c37d440ef81c2ba54bf924de5951->enter($__internal_5a372dec9ab3641dce9abc8362ae0a4b9052c37d440ef81c2ba54bf924de5951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_4668d87b49b4eda6cc2fc32aed42fcb55dcf5c31e38e95c372ddd20ea327e729->leave($__internal_4668d87b49b4eda6cc2fc32aed42fcb55dcf5c31e38e95c372ddd20ea327e729_prof);

        
        $__internal_5a372dec9ab3641dce9abc8362ae0a4b9052c37d440ef81c2ba54bf924de5951->leave($__internal_5a372dec9ab3641dce9abc8362ae0a4b9052c37d440ef81c2ba54bf924de5951_prof);

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
