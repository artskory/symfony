<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5e3ec34c24f640f6afc2845d9bf51d48a93c15687bcd8238da49cc78ffa7068f extends Twig_Template
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
        $__internal_def7a17085ac702e1f6d1d1721e3c8e66c061cc29b4ab2ad51dc9189563cdde0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def7a17085ac702e1f6d1d1721e3c8e66c061cc29b4ab2ad51dc9189563cdde0->enter($__internal_def7a17085ac702e1f6d1d1721e3c8e66c061cc29b4ab2ad51dc9189563cdde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a7d3cacdbc39a845b5b79a00da9e2b1363c018952d18867f7e07aff400cd7d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d3cacdbc39a845b5b79a00da9e2b1363c018952d18867f7e07aff400cd7d6f->enter($__internal_a7d3cacdbc39a845b5b79a00da9e2b1363c018952d18867f7e07aff400cd7d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_def7a17085ac702e1f6d1d1721e3c8e66c061cc29b4ab2ad51dc9189563cdde0->leave($__internal_def7a17085ac702e1f6d1d1721e3c8e66c061cc29b4ab2ad51dc9189563cdde0_prof);

        
        $__internal_a7d3cacdbc39a845b5b79a00da9e2b1363c018952d18867f7e07aff400cd7d6f->leave($__internal_a7d3cacdbc39a845b5b79a00da9e2b1363c018952d18867f7e07aff400cd7d6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
