<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_df1aed5f36201d327adbf1c000d9916be65b7b12871cc8dd64cc23812c301f61 extends Twig_Template
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
        $__internal_7e0e399acf7af8e2f4d31ba98d48880b9ac801561f8e790a2b2d619df391ee67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e0e399acf7af8e2f4d31ba98d48880b9ac801561f8e790a2b2d619df391ee67->enter($__internal_7e0e399acf7af8e2f4d31ba98d48880b9ac801561f8e790a2b2d619df391ee67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_9b941a5e0383bd47dda98e0b152447a7c9c07ccefc34929012c4ae98285a32fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b941a5e0383bd47dda98e0b152447a7c9c07ccefc34929012c4ae98285a32fb->enter($__internal_9b941a5e0383bd47dda98e0b152447a7c9c07ccefc34929012c4ae98285a32fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_7e0e399acf7af8e2f4d31ba98d48880b9ac801561f8e790a2b2d619df391ee67->leave($__internal_7e0e399acf7af8e2f4d31ba98d48880b9ac801561f8e790a2b2d619df391ee67_prof);

        
        $__internal_9b941a5e0383bd47dda98e0b152447a7c9c07ccefc34929012c4ae98285a32fb->leave($__internal_9b941a5e0383bd47dda98e0b152447a7c9c07ccefc34929012c4ae98285a32fb_prof);

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
