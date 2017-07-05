<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bb5e6c09a35da44c0c9b71dcff1e5feb294052e367de3533033ff0b5be05bac1 extends Twig_Template
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
        $__internal_208ec4b594327afa1e9bf6cc484eb9474048e1c0993dbefae6f94f273204fb11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_208ec4b594327afa1e9bf6cc484eb9474048e1c0993dbefae6f94f273204fb11->enter($__internal_208ec4b594327afa1e9bf6cc484eb9474048e1c0993dbefae6f94f273204fb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_2b16886451536e446505f7c27a7c9b577961d90093b83db6f567d89d5eb85a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b16886451536e446505f7c27a7c9b577961d90093b83db6f567d89d5eb85a23->enter($__internal_2b16886451536e446505f7c27a7c9b577961d90093b83db6f567d89d5eb85a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_208ec4b594327afa1e9bf6cc484eb9474048e1c0993dbefae6f94f273204fb11->leave($__internal_208ec4b594327afa1e9bf6cc484eb9474048e1c0993dbefae6f94f273204fb11_prof);

        
        $__internal_2b16886451536e446505f7c27a7c9b577961d90093b83db6f567d89d5eb85a23->leave($__internal_2b16886451536e446505f7c27a7c9b577961d90093b83db6f567d89d5eb85a23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
