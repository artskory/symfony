<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_bdeea212691213fa3084519bb304d14542fe7366173d352fbc66f04bcb8ce77b extends Twig_Template
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
        $__internal_c7b368173b1a878bf8a64511c59eab1c5fb7cc4929c5b92f9b57d61e0bcca365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b368173b1a878bf8a64511c59eab1c5fb7cc4929c5b92f9b57d61e0bcca365->enter($__internal_c7b368173b1a878bf8a64511c59eab1c5fb7cc4929c5b92f9b57d61e0bcca365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_0e0cd6c6f7d1aa1393139b9be590bb5e482e932a7d2e41161cae950b2d591fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0cd6c6f7d1aa1393139b9be590bb5e482e932a7d2e41161cae950b2d591fe8->enter($__internal_0e0cd6c6f7d1aa1393139b9be590bb5e482e932a7d2e41161cae950b2d591fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c7b368173b1a878bf8a64511c59eab1c5fb7cc4929c5b92f9b57d61e0bcca365->leave($__internal_c7b368173b1a878bf8a64511c59eab1c5fb7cc4929c5b92f9b57d61e0bcca365_prof);

        
        $__internal_0e0cd6c6f7d1aa1393139b9be590bb5e482e932a7d2e41161cae950b2d591fe8->leave($__internal_0e0cd6c6f7d1aa1393139b9be590bb5e482e932a7d2e41161cae950b2d591fe8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
