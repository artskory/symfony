<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_44b005f1e2122dd0357a53304e7fb049c6dcb25a1c0522ff5bae8bb279734450 extends Twig_Template
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
        $__internal_490734679cf0254ee2c725f836644aec8c8eef5ca8976c05c89e3f7e6f66c011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490734679cf0254ee2c725f836644aec8c8eef5ca8976c05c89e3f7e6f66c011->enter($__internal_490734679cf0254ee2c725f836644aec8c8eef5ca8976c05c89e3f7e6f66c011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e89f91d2c5686002b90a745108272f977e92d60f6887fb2fb4be7970d8184225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89f91d2c5686002b90a745108272f977e92d60f6887fb2fb4be7970d8184225->enter($__internal_e89f91d2c5686002b90a745108272f977e92d60f6887fb2fb4be7970d8184225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_490734679cf0254ee2c725f836644aec8c8eef5ca8976c05c89e3f7e6f66c011->leave($__internal_490734679cf0254ee2c725f836644aec8c8eef5ca8976c05c89e3f7e6f66c011_prof);

        
        $__internal_e89f91d2c5686002b90a745108272f977e92d60f6887fb2fb4be7970d8184225->leave($__internal_e89f91d2c5686002b90a745108272f977e92d60f6887fb2fb4be7970d8184225_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
