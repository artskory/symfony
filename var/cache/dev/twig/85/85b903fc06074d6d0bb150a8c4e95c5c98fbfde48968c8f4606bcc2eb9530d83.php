<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3997e7322b70198a3cd515546942de33c96a3b3336a127aaef05432bb333e4ff extends Twig_Template
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
        $__internal_a07e48ea422c858704bcdf1d2e373157836fc5b7cecb77f233f2a5782196c5f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07e48ea422c858704bcdf1d2e373157836fc5b7cecb77f233f2a5782196c5f9->enter($__internal_a07e48ea422c858704bcdf1d2e373157836fc5b7cecb77f233f2a5782196c5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_47a00debeccd6531244e640f1f0667f60b7e10b05740bc2584d076c2f8fd246e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a00debeccd6531244e640f1f0667f60b7e10b05740bc2584d076c2f8fd246e->enter($__internal_47a00debeccd6531244e640f1f0667f60b7e10b05740bc2584d076c2f8fd246e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a07e48ea422c858704bcdf1d2e373157836fc5b7cecb77f233f2a5782196c5f9->leave($__internal_a07e48ea422c858704bcdf1d2e373157836fc5b7cecb77f233f2a5782196c5f9_prof);

        
        $__internal_47a00debeccd6531244e640f1f0667f60b7e10b05740bc2584d076c2f8fd246e->leave($__internal_47a00debeccd6531244e640f1f0667f60b7e10b05740bc2584d076c2f8fd246e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
