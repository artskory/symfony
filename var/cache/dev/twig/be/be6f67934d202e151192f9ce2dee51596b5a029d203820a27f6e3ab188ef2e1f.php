<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_f9722ccf4fdadfdb1fe433dbb3a6d1e38c011f1c3bbd52edde2b7b47329b5546 extends Twig_Template
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
        $__internal_8d846627f65963c1a4248db44fe3953240a3b1d30bed733683b54c63011ccd3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d846627f65963c1a4248db44fe3953240a3b1d30bed733683b54c63011ccd3b->enter($__internal_8d846627f65963c1a4248db44fe3953240a3b1d30bed733683b54c63011ccd3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_08ce7f982bc411188906c87f5557d9b5c36193b46a33b125f67e2246ec42ef3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ce7f982bc411188906c87f5557d9b5c36193b46a33b125f67e2246ec42ef3f->enter($__internal_08ce7f982bc411188906c87f5557d9b5c36193b46a33b125f67e2246ec42ef3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8d846627f65963c1a4248db44fe3953240a3b1d30bed733683b54c63011ccd3b->leave($__internal_8d846627f65963c1a4248db44fe3953240a3b1d30bed733683b54c63011ccd3b_prof);

        
        $__internal_08ce7f982bc411188906c87f5557d9b5c36193b46a33b125f67e2246ec42ef3f->leave($__internal_08ce7f982bc411188906c87f5557d9b5c36193b46a33b125f67e2246ec42ef3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
