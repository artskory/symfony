<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_07ed6bccfc4d655d5e0df4ec13a47e0df70eaa9cd26d14344927c6e42e4c8bc5 extends Twig_Template
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
        $__internal_7a21758097a00f711a6523633ed807f10e13d262be21ccbf71f4e017dc96223c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a21758097a00f711a6523633ed807f10e13d262be21ccbf71f4e017dc96223c->enter($__internal_7a21758097a00f711a6523633ed807f10e13d262be21ccbf71f4e017dc96223c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_64da438e31e9aadf065a6c4de1bbb0993c2c1b99be2710049d2d9d46a834e35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64da438e31e9aadf065a6c4de1bbb0993c2c1b99be2710049d2d9d46a834e35c->enter($__internal_64da438e31e9aadf065a6c4de1bbb0993c2c1b99be2710049d2d9d46a834e35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7a21758097a00f711a6523633ed807f10e13d262be21ccbf71f4e017dc96223c->leave($__internal_7a21758097a00f711a6523633ed807f10e13d262be21ccbf71f4e017dc96223c_prof);

        
        $__internal_64da438e31e9aadf065a6c4de1bbb0993c2c1b99be2710049d2d9d46a834e35c->leave($__internal_64da438e31e9aadf065a6c4de1bbb0993c2c1b99be2710049d2d9d46a834e35c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
