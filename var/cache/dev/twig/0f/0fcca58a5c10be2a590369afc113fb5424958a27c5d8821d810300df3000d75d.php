<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c8b3c6498c7016376f1c8df9a6e034f724d1d728d3d2e7d959c0ed8b5d93c996 extends Twig_Template
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
        $__internal_7261f2f1e32d9058c75f47d2e5be9246ef31a62edbf3dff92bca8f9496032ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7261f2f1e32d9058c75f47d2e5be9246ef31a62edbf3dff92bca8f9496032ce0->enter($__internal_7261f2f1e32d9058c75f47d2e5be9246ef31a62edbf3dff92bca8f9496032ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_2421c0533e2266fdcccf2785691972b010558d7ac8d0e01f4b685da3c712fc89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2421c0533e2266fdcccf2785691972b010558d7ac8d0e01f4b685da3c712fc89->enter($__internal_2421c0533e2266fdcccf2785691972b010558d7ac8d0e01f4b685da3c712fc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7261f2f1e32d9058c75f47d2e5be9246ef31a62edbf3dff92bca8f9496032ce0->leave($__internal_7261f2f1e32d9058c75f47d2e5be9246ef31a62edbf3dff92bca8f9496032ce0_prof);

        
        $__internal_2421c0533e2266fdcccf2785691972b010558d7ac8d0e01f4b685da3c712fc89->leave($__internal_2421c0533e2266fdcccf2785691972b010558d7ac8d0e01f4b685da3c712fc89_prof);

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
