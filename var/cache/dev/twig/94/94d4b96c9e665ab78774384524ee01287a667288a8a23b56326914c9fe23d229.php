<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_a478b998ccec844ff863a201a56829fe7ec5937ff635c835b1cb4445975abbda extends Twig_Template
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
        $__internal_722d2f26149c597be4e793bc2e8c4134aeeaf2697d2d212be29a303982cdc1c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_722d2f26149c597be4e793bc2e8c4134aeeaf2697d2d212be29a303982cdc1c7->enter($__internal_722d2f26149c597be4e793bc2e8c4134aeeaf2697d2d212be29a303982cdc1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_1010c483da125d95dc7e218c0f7459c595f3c5ee24aa89121976285f9ab471b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1010c483da125d95dc7e218c0f7459c595f3c5ee24aa89121976285f9ab471b1->enter($__internal_1010c483da125d95dc7e218c0f7459c595f3c5ee24aa89121976285f9ab471b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_722d2f26149c597be4e793bc2e8c4134aeeaf2697d2d212be29a303982cdc1c7->leave($__internal_722d2f26149c597be4e793bc2e8c4134aeeaf2697d2d212be29a303982cdc1c7_prof);

        
        $__internal_1010c483da125d95dc7e218c0f7459c595f3c5ee24aa89121976285f9ab471b1->leave($__internal_1010c483da125d95dc7e218c0f7459c595f3c5ee24aa89121976285f9ab471b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
