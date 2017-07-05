<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_7c603cb5bb03bae4ea406f23022c92b494d74dee92995eddeaddfb0f96e0aa84 extends Twig_Template
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
        $__internal_bd9a0168ee80d49771ac8f69cfce4534d94097d5d2f20ffd57bcbe7aba9b3daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd9a0168ee80d49771ac8f69cfce4534d94097d5d2f20ffd57bcbe7aba9b3daa->enter($__internal_bd9a0168ee80d49771ac8f69cfce4534d94097d5d2f20ffd57bcbe7aba9b3daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a4b0c8788e8f046568b4e77337361f53a4e9f4a2b7e2943da8efe20702391ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b0c8788e8f046568b4e77337361f53a4e9f4a2b7e2943da8efe20702391ae1->enter($__internal_a4b0c8788e8f046568b4e77337361f53a4e9f4a2b7e2943da8efe20702391ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bd9a0168ee80d49771ac8f69cfce4534d94097d5d2f20ffd57bcbe7aba9b3daa->leave($__internal_bd9a0168ee80d49771ac8f69cfce4534d94097d5d2f20ffd57bcbe7aba9b3daa_prof);

        
        $__internal_a4b0c8788e8f046568b4e77337361f53a4e9f4a2b7e2943da8efe20702391ae1->leave($__internal_a4b0c8788e8f046568b4e77337361f53a4e9f4a2b7e2943da8efe20702391ae1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
