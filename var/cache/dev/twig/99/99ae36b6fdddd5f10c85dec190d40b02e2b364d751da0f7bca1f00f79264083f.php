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
        $__internal_74e5c9cd643a09d2cf06c6c9671e86cf566f4f6d2da1a430f6a2ca4c526b9f31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74e5c9cd643a09d2cf06c6c9671e86cf566f4f6d2da1a430f6a2ca4c526b9f31->enter($__internal_74e5c9cd643a09d2cf06c6c9671e86cf566f4f6d2da1a430f6a2ca4c526b9f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_5f9fe8bb6bfdafc2fc4051cdfc25fdd61694e117fba08418dc6aa02d06ccbe1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9fe8bb6bfdafc2fc4051cdfc25fdd61694e117fba08418dc6aa02d06ccbe1c->enter($__internal_5f9fe8bb6bfdafc2fc4051cdfc25fdd61694e117fba08418dc6aa02d06ccbe1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_74e5c9cd643a09d2cf06c6c9671e86cf566f4f6d2da1a430f6a2ca4c526b9f31->leave($__internal_74e5c9cd643a09d2cf06c6c9671e86cf566f4f6d2da1a430f6a2ca4c526b9f31_prof);

        
        $__internal_5f9fe8bb6bfdafc2fc4051cdfc25fdd61694e117fba08418dc6aa02d06ccbe1c->leave($__internal_5f9fe8bb6bfdafc2fc4051cdfc25fdd61694e117fba08418dc6aa02d06ccbe1c_prof);

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
