<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_67165173847a62c81d041ea634aecf79f7a09ff93a6cfdbab8999915f3964fa7 extends Twig_Template
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
        $__internal_f4464df858760339f48c5586b8e8f71974b6625f3d19b4e2bb67f55b6b259100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4464df858760339f48c5586b8e8f71974b6625f3d19b4e2bb67f55b6b259100->enter($__internal_f4464df858760339f48c5586b8e8f71974b6625f3d19b4e2bb67f55b6b259100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_382915ef848542135c2ea3cd3ac96214aead080a1f85453be449721a69b1b4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382915ef848542135c2ea3cd3ac96214aead080a1f85453be449721a69b1b4e3->enter($__internal_382915ef848542135c2ea3cd3ac96214aead080a1f85453be449721a69b1b4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f4464df858760339f48c5586b8e8f71974b6625f3d19b4e2bb67f55b6b259100->leave($__internal_f4464df858760339f48c5586b8e8f71974b6625f3d19b4e2bb67f55b6b259100_prof);

        
        $__internal_382915ef848542135c2ea3cd3ac96214aead080a1f85453be449721a69b1b4e3->leave($__internal_382915ef848542135c2ea3cd3ac96214aead080a1f85453be449721a69b1b4e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
