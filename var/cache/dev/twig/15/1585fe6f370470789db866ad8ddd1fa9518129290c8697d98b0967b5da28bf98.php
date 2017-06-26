<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_55263ecbb9ae528a86835bc6a3039ac2a9dfde6396452c1c70141709da4aa352 extends Twig_Template
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
        $__internal_0a529a9cab54079892b881ec599405e625d085ee7d6cc08a3e96b46aa231c695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a529a9cab54079892b881ec599405e625d085ee7d6cc08a3e96b46aa231c695->enter($__internal_0a529a9cab54079892b881ec599405e625d085ee7d6cc08a3e96b46aa231c695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_47fa1a6fbf3efbd348bd01eb2f1ac75dc5eb14e9140ea53d8f5b938570ccfba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47fa1a6fbf3efbd348bd01eb2f1ac75dc5eb14e9140ea53d8f5b938570ccfba1->enter($__internal_47fa1a6fbf3efbd348bd01eb2f1ac75dc5eb14e9140ea53d8f5b938570ccfba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0a529a9cab54079892b881ec599405e625d085ee7d6cc08a3e96b46aa231c695->leave($__internal_0a529a9cab54079892b881ec599405e625d085ee7d6cc08a3e96b46aa231c695_prof);

        
        $__internal_47fa1a6fbf3efbd348bd01eb2f1ac75dc5eb14e9140ea53d8f5b938570ccfba1->leave($__internal_47fa1a6fbf3efbd348bd01eb2f1ac75dc5eb14e9140ea53d8f5b938570ccfba1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
