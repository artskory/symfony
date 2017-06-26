<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a686256500119ca182d26320c4048740aa4d706a56db41fa4ef56ec8c02d57ee extends Twig_Template
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
        $__internal_6d3142bb496e6c0a7227942ee505c3c1e7199b353dda674c64f96b6f710d42f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d3142bb496e6c0a7227942ee505c3c1e7199b353dda674c64f96b6f710d42f6->enter($__internal_6d3142bb496e6c0a7227942ee505c3c1e7199b353dda674c64f96b6f710d42f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_88600fbd3f3d5d980ff6787ef4db942509f915194e6eb6542abff26791483dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88600fbd3f3d5d980ff6787ef4db942509f915194e6eb6542abff26791483dda->enter($__internal_88600fbd3f3d5d980ff6787ef4db942509f915194e6eb6542abff26791483dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6d3142bb496e6c0a7227942ee505c3c1e7199b353dda674c64f96b6f710d42f6->leave($__internal_6d3142bb496e6c0a7227942ee505c3c1e7199b353dda674c64f96b6f710d42f6_prof);

        
        $__internal_88600fbd3f3d5d980ff6787ef4db942509f915194e6eb6542abff26791483dda->leave($__internal_88600fbd3f3d5d980ff6787ef4db942509f915194e6eb6542abff26791483dda_prof);

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
