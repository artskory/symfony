<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7e0b7386fc64539ab145fd35e360c4eb1541d9f647ad6e614b3ca57adf4e23b3 extends Twig_Template
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
        $__internal_ef9fb5bffc8b38bdc574f5c2e1dd988c0f35730f173d460f7f449455bf290e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef9fb5bffc8b38bdc574f5c2e1dd988c0f35730f173d460f7f449455bf290e96->enter($__internal_ef9fb5bffc8b38bdc574f5c2e1dd988c0f35730f173d460f7f449455bf290e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_2d7b384264fd11cf0a5b74c1b685118dea7b737702c333924312e77eb983b570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7b384264fd11cf0a5b74c1b685118dea7b737702c333924312e77eb983b570->enter($__internal_2d7b384264fd11cf0a5b74c1b685118dea7b737702c333924312e77eb983b570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ef9fb5bffc8b38bdc574f5c2e1dd988c0f35730f173d460f7f449455bf290e96->leave($__internal_ef9fb5bffc8b38bdc574f5c2e1dd988c0f35730f173d460f7f449455bf290e96_prof);

        
        $__internal_2d7b384264fd11cf0a5b74c1b685118dea7b737702c333924312e77eb983b570->leave($__internal_2d7b384264fd11cf0a5b74c1b685118dea7b737702c333924312e77eb983b570_prof);

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
