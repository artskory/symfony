<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_6087c298e164cc9986a28c70f0b83abb0f02fdf006504ddecdb71be14fff9ed6 extends Twig_Template
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
        $__internal_5c691851c660d1d8b73f1db40034c84c62b1910829acdb81c87fba97a879b51c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c691851c660d1d8b73f1db40034c84c62b1910829acdb81c87fba97a879b51c->enter($__internal_5c691851c660d1d8b73f1db40034c84c62b1910829acdb81c87fba97a879b51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_3e104a482c87d54c1b582d5baaafa663a958ef2dfd9d499841f91d6e35f4a9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e104a482c87d54c1b582d5baaafa663a958ef2dfd9d499841f91d6e35f4a9ff->enter($__internal_3e104a482c87d54c1b582d5baaafa663a958ef2dfd9d499841f91d6e35f4a9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_5c691851c660d1d8b73f1db40034c84c62b1910829acdb81c87fba97a879b51c->leave($__internal_5c691851c660d1d8b73f1db40034c84c62b1910829acdb81c87fba97a879b51c_prof);

        
        $__internal_3e104a482c87d54c1b582d5baaafa663a958ef2dfd9d499841f91d6e35f4a9ff->leave($__internal_3e104a482c87d54c1b582d5baaafa663a958ef2dfd9d499841f91d6e35f4a9ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
