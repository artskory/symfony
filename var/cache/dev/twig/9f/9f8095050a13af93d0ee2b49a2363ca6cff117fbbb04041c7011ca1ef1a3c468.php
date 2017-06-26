<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_5d529361cbd3a87b2df25f1ea1cae7bc6f34857f854d8d38556f9832921bed69 extends Twig_Template
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
        $__internal_4c33621cf8f4cfacdae0babd025b10a1ce4f6b72acc9b7242f73ec8e087f269f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c33621cf8f4cfacdae0babd025b10a1ce4f6b72acc9b7242f73ec8e087f269f->enter($__internal_4c33621cf8f4cfacdae0babd025b10a1ce4f6b72acc9b7242f73ec8e087f269f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_47faec35ac9ef5b69524cf87feddc3fc67131b4ae7a3ae0105b8349b482bff18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47faec35ac9ef5b69524cf87feddc3fc67131b4ae7a3ae0105b8349b482bff18->enter($__internal_47faec35ac9ef5b69524cf87feddc3fc67131b4ae7a3ae0105b8349b482bff18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4c33621cf8f4cfacdae0babd025b10a1ce4f6b72acc9b7242f73ec8e087f269f->leave($__internal_4c33621cf8f4cfacdae0babd025b10a1ce4f6b72acc9b7242f73ec8e087f269f_prof);

        
        $__internal_47faec35ac9ef5b69524cf87feddc3fc67131b4ae7a3ae0105b8349b482bff18->leave($__internal_47faec35ac9ef5b69524cf87feddc3fc67131b4ae7a3ae0105b8349b482bff18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
