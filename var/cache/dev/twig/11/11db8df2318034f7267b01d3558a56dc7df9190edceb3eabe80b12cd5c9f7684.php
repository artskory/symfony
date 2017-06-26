<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ff9d06bc16ead28c06f86d22477405e916cbbab0e6326c66ffa1bad9c6eeb8a0 extends Twig_Template
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
        $__internal_b9d9219c3fe38a908e5aaf58d7c502fca326e71e21cbb3d60068f9761d506c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d9219c3fe38a908e5aaf58d7c502fca326e71e21cbb3d60068f9761d506c5f->enter($__internal_b9d9219c3fe38a908e5aaf58d7c502fca326e71e21cbb3d60068f9761d506c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_249574a6b05797750c913a0760e79c18b8c38a6e6dc7999456d19515f2191678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249574a6b05797750c913a0760e79c18b8c38a6e6dc7999456d19515f2191678->enter($__internal_249574a6b05797750c913a0760e79c18b8c38a6e6dc7999456d19515f2191678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b9d9219c3fe38a908e5aaf58d7c502fca326e71e21cbb3d60068f9761d506c5f->leave($__internal_b9d9219c3fe38a908e5aaf58d7c502fca326e71e21cbb3d60068f9761d506c5f_prof);

        
        $__internal_249574a6b05797750c913a0760e79c18b8c38a6e6dc7999456d19515f2191678->leave($__internal_249574a6b05797750c913a0760e79c18b8c38a6e6dc7999456d19515f2191678_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
