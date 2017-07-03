<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1d39a40ff0546bb652628201a426128e5fa390f833ac2c17049af7a16887fa56 extends Twig_Template
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
        $__internal_20568d508e174adbd4194270ca5e87b7d56b895d7f9e892f31e39352d17a1e1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20568d508e174adbd4194270ca5e87b7d56b895d7f9e892f31e39352d17a1e1c->enter($__internal_20568d508e174adbd4194270ca5e87b7d56b895d7f9e892f31e39352d17a1e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_08c0963730b0f5183ac714e6a2b1449f76932f1672ea3a45f9540b6dec1e1979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c0963730b0f5183ac714e6a2b1449f76932f1672ea3a45f9540b6dec1e1979->enter($__internal_08c0963730b0f5183ac714e6a2b1449f76932f1672ea3a45f9540b6dec1e1979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_20568d508e174adbd4194270ca5e87b7d56b895d7f9e892f31e39352d17a1e1c->leave($__internal_20568d508e174adbd4194270ca5e87b7d56b895d7f9e892f31e39352d17a1e1c_prof);

        
        $__internal_08c0963730b0f5183ac714e6a2b1449f76932f1672ea3a45f9540b6dec1e1979->leave($__internal_08c0963730b0f5183ac714e6a2b1449f76932f1672ea3a45f9540b6dec1e1979_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
