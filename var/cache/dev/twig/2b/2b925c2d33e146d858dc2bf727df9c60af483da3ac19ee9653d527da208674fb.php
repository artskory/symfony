<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_760e0ccd23491b98d14e7b530e411bdf81b5d9db7ceca0cce6ecb1673847aa3e extends Twig_Template
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
        $__internal_34707833e27c361efb2e8fff4e37dbf980dea8e8a4562129542fcf8f16ccdc3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34707833e27c361efb2e8fff4e37dbf980dea8e8a4562129542fcf8f16ccdc3d->enter($__internal_34707833e27c361efb2e8fff4e37dbf980dea8e8a4562129542fcf8f16ccdc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_c34e6e0c773c1c261df41140d3bed0aa0f3221dddf2ceb113ccbb9cb0322e08b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34e6e0c773c1c261df41140d3bed0aa0f3221dddf2ceb113ccbb9cb0322e08b->enter($__internal_c34e6e0c773c1c261df41140d3bed0aa0f3221dddf2ceb113ccbb9cb0322e08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_34707833e27c361efb2e8fff4e37dbf980dea8e8a4562129542fcf8f16ccdc3d->leave($__internal_34707833e27c361efb2e8fff4e37dbf980dea8e8a4562129542fcf8f16ccdc3d_prof);

        
        $__internal_c34e6e0c773c1c261df41140d3bed0aa0f3221dddf2ceb113ccbb9cb0322e08b->leave($__internal_c34e6e0c773c1c261df41140d3bed0aa0f3221dddf2ceb113ccbb9cb0322e08b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
