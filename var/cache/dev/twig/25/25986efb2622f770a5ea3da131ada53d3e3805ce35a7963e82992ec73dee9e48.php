<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_7728deaf229a9b112ba8c9528440507c9ff1b3ebf80d6abb16ae3ef4836b881a extends Twig_Template
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
        $__internal_ee722d1e5ed99f59b134e9603469c5dc67a0e2e50bc20e70a9c13be9ccdfee97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee722d1e5ed99f59b134e9603469c5dc67a0e2e50bc20e70a9c13be9ccdfee97->enter($__internal_ee722d1e5ed99f59b134e9603469c5dc67a0e2e50bc20e70a9c13be9ccdfee97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_73f0afa9c6e8fad7b7129c6a20c800c5144247753f8bbed8cebc75c54e53da2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f0afa9c6e8fad7b7129c6a20c800c5144247753f8bbed8cebc75c54e53da2e->enter($__internal_73f0afa9c6e8fad7b7129c6a20c800c5144247753f8bbed8cebc75c54e53da2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ee722d1e5ed99f59b134e9603469c5dc67a0e2e50bc20e70a9c13be9ccdfee97->leave($__internal_ee722d1e5ed99f59b134e9603469c5dc67a0e2e50bc20e70a9c13be9ccdfee97_prof);

        
        $__internal_73f0afa9c6e8fad7b7129c6a20c800c5144247753f8bbed8cebc75c54e53da2e->leave($__internal_73f0afa9c6e8fad7b7129c6a20c800c5144247753f8bbed8cebc75c54e53da2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
