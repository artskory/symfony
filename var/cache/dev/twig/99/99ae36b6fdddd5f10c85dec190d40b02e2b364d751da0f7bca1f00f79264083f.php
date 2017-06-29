<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_add740664eaf64fccf9536cb66bd51b0bafd0324a15f8ebf06e526a26144f0c1 extends Twig_Template
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
        $__internal_60683a75346302045ac0b22a5af7edbd09791e5d402a93c299569d36859d55cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60683a75346302045ac0b22a5af7edbd09791e5d402a93c299569d36859d55cf->enter($__internal_60683a75346302045ac0b22a5af7edbd09791e5d402a93c299569d36859d55cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_eaa0226e20b3bc43a6990ad175a1163cf8f8689865a24a4c6ff7e0560793a7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa0226e20b3bc43a6990ad175a1163cf8f8689865a24a4c6ff7e0560793a7e2->enter($__internal_eaa0226e20b3bc43a6990ad175a1163cf8f8689865a24a4c6ff7e0560793a7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_60683a75346302045ac0b22a5af7edbd09791e5d402a93c299569d36859d55cf->leave($__internal_60683a75346302045ac0b22a5af7edbd09791e5d402a93c299569d36859d55cf_prof);

        
        $__internal_eaa0226e20b3bc43a6990ad175a1163cf8f8689865a24a4c6ff7e0560793a7e2->leave($__internal_eaa0226e20b3bc43a6990ad175a1163cf8f8689865a24a4c6ff7e0560793a7e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
