<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_ca59c4683ac955ae2209b66f14964cd84843f1d0b43e5e9550be2ee2e14d9195 extends Twig_Template
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
        $__internal_35eb5aee5efb618591de5cd13e067fd803bd0d79efb9f645a5545ba32faa45f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35eb5aee5efb618591de5cd13e067fd803bd0d79efb9f645a5545ba32faa45f1->enter($__internal_35eb5aee5efb618591de5cd13e067fd803bd0d79efb9f645a5545ba32faa45f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ca64cc513fe127f9375dabdfc335a753baed548c3a7d2b6852fae1d0680c64f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca64cc513fe127f9375dabdfc335a753baed548c3a7d2b6852fae1d0680c64f6->enter($__internal_ca64cc513fe127f9375dabdfc335a753baed548c3a7d2b6852fae1d0680c64f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_35eb5aee5efb618591de5cd13e067fd803bd0d79efb9f645a5545ba32faa45f1->leave($__internal_35eb5aee5efb618591de5cd13e067fd803bd0d79efb9f645a5545ba32faa45f1_prof);

        
        $__internal_ca64cc513fe127f9375dabdfc335a753baed548c3a7d2b6852fae1d0680c64f6->leave($__internal_ca64cc513fe127f9375dabdfc335a753baed548c3a7d2b6852fae1d0680c64f6_prof);

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
