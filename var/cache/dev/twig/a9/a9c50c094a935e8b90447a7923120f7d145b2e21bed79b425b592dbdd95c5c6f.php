<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8fa49f2ab3918609c5bab2f64c2987f0e10718de31131fcb612bb63b0a6808d3 extends Twig_Template
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
        $__internal_288c4e66992b09c720a76104e07bb9909c2bb18d85a571228c21bab08242cf04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288c4e66992b09c720a76104e07bb9909c2bb18d85a571228c21bab08242cf04->enter($__internal_288c4e66992b09c720a76104e07bb9909c2bb18d85a571228c21bab08242cf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ff646d815bd1280dc1d69ad47e65a163f40e46245ddd1ae82186ecf2482a3d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff646d815bd1280dc1d69ad47e65a163f40e46245ddd1ae82186ecf2482a3d53->enter($__internal_ff646d815bd1280dc1d69ad47e65a163f40e46245ddd1ae82186ecf2482a3d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_288c4e66992b09c720a76104e07bb9909c2bb18d85a571228c21bab08242cf04->leave($__internal_288c4e66992b09c720a76104e07bb9909c2bb18d85a571228c21bab08242cf04_prof);

        
        $__internal_ff646d815bd1280dc1d69ad47e65a163f40e46245ddd1ae82186ecf2482a3d53->leave($__internal_ff646d815bd1280dc1d69ad47e65a163f40e46245ddd1ae82186ecf2482a3d53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
