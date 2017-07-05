<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_49c54dfebbcd5de6b4c195df40a0c52df1ef60940c0a872b4df642d60b1baf25 extends Twig_Template
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
        $__internal_55342ec30c64f54afbbcb5b604109197d0cdc4623f156056048ab9a5a24ba9e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55342ec30c64f54afbbcb5b604109197d0cdc4623f156056048ab9a5a24ba9e9->enter($__internal_55342ec30c64f54afbbcb5b604109197d0cdc4623f156056048ab9a5a24ba9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c8d929ab1564b267c65e8ea7d9d2049466aee9878562e6502e762a6fe194d38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d929ab1564b267c65e8ea7d9d2049466aee9878562e6502e762a6fe194d38b->enter($__internal_c8d929ab1564b267c65e8ea7d9d2049466aee9878562e6502e762a6fe194d38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_55342ec30c64f54afbbcb5b604109197d0cdc4623f156056048ab9a5a24ba9e9->leave($__internal_55342ec30c64f54afbbcb5b604109197d0cdc4623f156056048ab9a5a24ba9e9_prof);

        
        $__internal_c8d929ab1564b267c65e8ea7d9d2049466aee9878562e6502e762a6fe194d38b->leave($__internal_c8d929ab1564b267c65e8ea7d9d2049466aee9878562e6502e762a6fe194d38b_prof);

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
