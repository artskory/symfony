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
        $__internal_d1b77b17a38d9cdc3731046d9737d170f5f050ef00722b0b80ed93dbdc9242ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b77b17a38d9cdc3731046d9737d170f5f050ef00722b0b80ed93dbdc9242ed->enter($__internal_d1b77b17a38d9cdc3731046d9737d170f5f050ef00722b0b80ed93dbdc9242ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_25f1b9834dfddded09ea72351db8b867b81d734d587095c4025be8d69dc19c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f1b9834dfddded09ea72351db8b867b81d734d587095c4025be8d69dc19c6f->enter($__internal_25f1b9834dfddded09ea72351db8b867b81d734d587095c4025be8d69dc19c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d1b77b17a38d9cdc3731046d9737d170f5f050ef00722b0b80ed93dbdc9242ed->leave($__internal_d1b77b17a38d9cdc3731046d9737d170f5f050ef00722b0b80ed93dbdc9242ed_prof);

        
        $__internal_25f1b9834dfddded09ea72351db8b867b81d734d587095c4025be8d69dc19c6f->leave($__internal_25f1b9834dfddded09ea72351db8b867b81d734d587095c4025be8d69dc19c6f_prof);

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
