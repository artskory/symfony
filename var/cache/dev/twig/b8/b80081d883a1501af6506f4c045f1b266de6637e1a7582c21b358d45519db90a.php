<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d3014552ddf042a29065c47becfc69fac167c7aead8235cc847c8cd8b8d5ec63 extends Twig_Template
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
        $__internal_4bc610218f7c521f498ce151d48b4a7a22501601329d5e3980b2c294b343ccfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc610218f7c521f498ce151d48b4a7a22501601329d5e3980b2c294b343ccfe->enter($__internal_4bc610218f7c521f498ce151d48b4a7a22501601329d5e3980b2c294b343ccfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_5857ea19080a5c87652fa4e6a3e6bd4e999938555dabcfbe989d1ffcbb3ac6ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5857ea19080a5c87652fa4e6a3e6bd4e999938555dabcfbe989d1ffcbb3ac6ca->enter($__internal_5857ea19080a5c87652fa4e6a3e6bd4e999938555dabcfbe989d1ffcbb3ac6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4bc610218f7c521f498ce151d48b4a7a22501601329d5e3980b2c294b343ccfe->leave($__internal_4bc610218f7c521f498ce151d48b4a7a22501601329d5e3980b2c294b343ccfe_prof);

        
        $__internal_5857ea19080a5c87652fa4e6a3e6bd4e999938555dabcfbe989d1ffcbb3ac6ca->leave($__internal_5857ea19080a5c87652fa4e6a3e6bd4e999938555dabcfbe989d1ffcbb3ac6ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
