<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_ba6b17f0c2de1be1748246e950f47afa909619eaee451b3304b129b1979c4209 extends Twig_Template
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
        $__internal_429f24a3eb19a2d2ff2f3ddfcf879fa8f0cd96a41eddb9eb97d4c07b8b203505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429f24a3eb19a2d2ff2f3ddfcf879fa8f0cd96a41eddb9eb97d4c07b8b203505->enter($__internal_429f24a3eb19a2d2ff2f3ddfcf879fa8f0cd96a41eddb9eb97d4c07b8b203505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_4b608b59e93d2a7d3eaffdbf92758d05008099ca10fc3407be26dee97af87ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b608b59e93d2a7d3eaffdbf92758d05008099ca10fc3407be26dee97af87ab8->enter($__internal_4b608b59e93d2a7d3eaffdbf92758d05008099ca10fc3407be26dee97af87ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_429f24a3eb19a2d2ff2f3ddfcf879fa8f0cd96a41eddb9eb97d4c07b8b203505->leave($__internal_429f24a3eb19a2d2ff2f3ddfcf879fa8f0cd96a41eddb9eb97d4c07b8b203505_prof);

        
        $__internal_4b608b59e93d2a7d3eaffdbf92758d05008099ca10fc3407be26dee97af87ab8->leave($__internal_4b608b59e93d2a7d3eaffdbf92758d05008099ca10fc3407be26dee97af87ab8_prof);

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
